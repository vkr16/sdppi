<?php

namespace App\Controllers;

class Admin extends BaseController
{

    protected $session;
    protected $userModel;
    protected $posModel;
    protected $telekomunikasiModel;
    protected $penyiaranModel;
    protected $infoModel;
    protected $faqModel;

    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->userModel = model('UserModel', true, $db);
        $this->posModel = model('PosModel', true, $db);
        $this->telekomunikasiModel = model('TelekomunikasiModel', true, $db);
        $this->penyiaranModel = model('PenyiaranModel', true, $db);
        $this->infoModel = model('InfoModel', true, $db);
        $this->faqModel = model('FaqModel', true, $db);
    }

    public function index()
    {
        // Session Check
        if (!$this->session->has('sdppi_session')) {
            return redirect()->to(HOST_URL . '/login');
        }

        // Getting User Data
        $userData = $this->userModel->find(base64_decode($this->session->get('sdppi_session')));


        $data = [
            'userDataArray' => $userData,
        ];
        return view('admin/dashboard', $data);
    }

    public function pos()
    {
        // Session Check
        if (!$this->session->has('sdppi_session')) {
            return redirect()->to(HOST_URL . '/login');
        }

        // Getting User Data
        $userData = $this->userModel->find(base64_decode($this->session->get('sdppi_session')));

        $posData = $this->posModel->findAll();

        $data = [
            'userDataArray' => $userData,
            'posDataArray' => $posData,
        ];
        return view('admin/pos', $data);
    }

    public function telekomunikasi()
    {
        // Session Check
        if (!$this->session->has('sdppi_session')) {
            return redirect()->to(HOST_URL . '/login');
        }

        // Getting User Data
        $userData = $this->userModel->find(base64_decode($this->session->get('sdppi_session')));

        $telekomunikasiData = $this->telekomunikasiModel->findAll();

        $data = [
            'userDataArray' => $userData,
            'telekomunikasiDataArray' => $telekomunikasiData
        ];
        return view('admin/telekomunikasi', $data);
    }

    public function penyiaran()
    {
        // Session Check
        if (!$this->session->has('sdppi_session')) {
            return redirect()->to(HOST_URL . '/login');
        }

        // Getting User Data
        $userData = $this->userModel->find(base64_decode($this->session->get('sdppi_session')));

        $penyiaranData = $this->penyiaranModel->findAll();

        $data = [
            'userDataArray' => $userData,
            'penyiaranDataArray' => $penyiaranData
        ];
        return view('admin/penyiaran', $data);
    }

    public function pengguna()
    {
        // Session Check
        if (!$this->session->has('sdppi_session')) {
            return redirect()->to(HOST_URL . '/login');
        }

        // Getting User Data
        $userData = $this->userModel->find(base64_decode($this->session->get('sdppi_session')));

        $usersData = $this->userModel->findAll();

        $data = [
            'userDataArray' => $userData,
            'usersDataArray' => $usersData,
        ];
        return view('admin/pengguna', $data);
    }

    public function getUser()
    {
        // Session Check
        if (!$this->session->has('sdppi_session')) {
            return redirect()->to(HOST_URL . '/login');
        }

        $userId = $_POST['userid'];

        $userData = $this->userModel->where('id', $userId)->findAll();
        return json_encode($userData);
    }

    public function updateUser()
    {
        // Session Check
        if (!$this->session->has('sdppi_session')) {
            return redirect()->to(HOST_URL . '/login');
        }

        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $status = $_POST['status'];

        $updateData = [
            'name' => $name,
            'email' => $email,
            'status' => $status,
        ];


        $user = $this->userModel->find($email);
        if ($name == '' || $email == '') {
            $response = 'empty field';
        } else {
            if ($user != null && $user['id'] != $id) {
                $response = "email already used";
            } else {
                $this->userModel->where('id', $id)->set($updateData)->update();
                $response = "updated";
            }
        }

        return $response;
    }

    public function deleteUser()
    {
        // Session Check
        if (!$this->session->has('sdppi_session')) {
            return redirect()->to(HOST_URL . '/login');
        }

        $id = $_POST['id'];

        if ($this->userModel->where('id', $id)->delete()) {
            $response  = "deleted";
        } else {
            $response = "failed";
        }
        return $response;
    }

    public function resetPassUser()
    {
        $id = $_POST['id'];
        $password = $_POST['password'];
        $password = password_hash($password, PASSWORD_DEFAULT);

        if ($this->userModel->where('id', $id)->set(['password' => $password])->update()) {
            $response  = "reset";
        } else {
            $response = "failed";
        }
        return $response;
    }

    // POS
    public function singleInputPos()
    {
        $nama = $_POST['nama'];
        $jenis = $_POST['jenis'];
        $domisili = $_POST['domisili'];
        $status = $_POST['status'];
        $website = $_POST['website'];

        $data = [
            'nama' => $nama,
            'jenis_layanan' => $jenis,
            'domisili' => $domisili,
            'status' => $status,
            'website' => $website,
        ];

        if ($this->posModel->insert($data)) {
            $response = "success";
        } else {
            $response = "failed";
        }

        return $response;
    }

    public function getSingleDataPos()
    {
        $id = $_POST['id'];

        $posData = $this->posModel->where('id', $id)->findAll();

        return json_encode($posData);
    }

    public function updateDataPos()
    {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $jenis = $_POST['jenis'];
        $domisili = $_POST['domisili'];
        $status = $_POST['status'];
        $website = $_POST['website'];

        $data = [
            'nama' => $nama,
            'jenis_layanan' => $jenis,
            'domisili' => $domisili,
            'status' => $status,
            'website' => $website,
        ];

        if ($this->posModel->where('id', $id)->set($data)->update()) {
            $response = "updated";
        } else {
            $response = "failed";
        }

        return $response;
    }

    public function deleteDataPos()
    {
        // Session Check
        if (!$this->session->has('sdppi_session')) {
            return redirect()->to(HOST_URL . '/login');
        }

        $id = $_POST['id'];

        if ($this->posModel->where('id', $id)->delete()) {
            $response  = "deleted";
        } else {
            $response = "failed";
        }
        return $response;
    }

    public function batchUploadPos()
    {
        // Allowed mime types
        $fileMimes = array(
            'text/x-comma-separated-values',
            'text/comma-separated-values',
            'application/octet-stream',
            'application/vnd.ms-excel',
            'application/x-csv',
            'text/x-csv',
            'text/csv',
            'application/csv',
            'application/excel',
            'application/vnd.msexcel',
            'text/plain'
        );

        // Validate whether selected file is a CSV file
        if (!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $fileMimes)) {

            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');

            // Skip the first line
            fgetcsv($csvFile);

            // Parse data from CSV file line by line
            while (($getData = fgetcsv($csvFile, 10000, ",")) !== FALSE) {
                $data = [
                    'nama' => $getData[0],
                    'jenis_layanan' => $getData[1],
                    'domisili' => $getData[2],
                    'status' => $getData[3],
                    'website' => $getData[4]
                ];

                $this->posModel->insert($data);
            }
            setcookie("batchUpload", 'success', time() + 10);  /* expire in 60 seconds */
        } else {
            setcookie("batchUpload", 'failed', time() + 10);  /* expire in 60 seconds */
        }
        return redirect()->to(HOST_URL . '/admin/pos');
    }
    //POS end
    // Telekomunikasi
    public function singleInputTelekomunikasi()
    {
        $nama = $_POST['nama'];
        $jenis = $_POST['jenis'];
        $domisili = $_POST['domisili'];
        $status = $_POST['status'];
        $website = $_POST['website'];

        $data = [
            'nama' => $nama,
            'jenis_layanan' => $jenis,
            'domisili' => $domisili,
            'status' => $status,
            'website' => $website,
        ];

        if ($this->telekomunikasiModel->insert($data)) {
            $response = "success";
        } else {
            $response = "failed";
        }

        return $response;
    }

    public function getSingleDataTelekomunikasi()
    {
        $id = $_POST['id'];

        $telekomunikasiData = $this->telekomunikasiModel->where('id', $id)->findAll();

        return json_encode($telekomunikasiData);
    }

    public function updateDataTelekomunikasi()
    {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $jenis = $_POST['jenis'];
        $domisili = $_POST['domisili'];
        $status = $_POST['status'];
        $website = $_POST['website'];

        $data = [
            'nama' => $nama,
            'jenis_layanan' => $jenis,
            'domisili' => $domisili,
            'status' => $status,
            'website' => $website,
        ];

        if ($this->telekomunikasiModel->where('id', $id)->set($data)->update()) {
            $response = "updated";
        } else {
            $response = "failed";
        }

        return $response;
    }

    public function deleteDataTelekomunikasi()
    {
        // Session Check
        if (!$this->session->has('sdppi_session')) {
            return redirect()->to(HOST_URL . '/login');
        }

        $id = $_POST['id'];

        if ($this->telekomunikasiModel->where('id', $id)->delete()) {
            $response  = "deleted";
        } else {
            $response = "failed";
        }
        return $response;
    }

    public function batchUploadTelekomunikasi()
    {
        // Allowed mime types
        $fileMimes = array(
            'text/x-comma-separated-values',
            'text/comma-separated-values',
            'application/octet-stream',
            'application/vnd.ms-excel',
            'application/x-csv',
            'text/x-csv',
            'text/csv',
            'application/csv',
            'application/excel',
            'application/vnd.msexcel',
            'text/plain'
        );

        // Validate whether selected file is a CSV file
        if (!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $fileMimes)) {

            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');

            // Skip the first line
            fgetcsv($csvFile);

            // Parse data from CSV file line by line
            while (($getData = fgetcsv($csvFile, 10000, ",")) !== FALSE) {
                $data = [
                    'nama' => $getData[0],
                    'jenis_layanan' => $getData[1],
                    'domisili' => $getData[2],
                    'status' => $getData[3],
                    'website' => $getData[4]
                ];

                $this->telekomunikasiModel->insert($data);
            }
            setcookie("batchUpload", 'success', time() + 10);  /* expire in 60 seconds */
        } else {
            setcookie("batchUpload", 'failed', time() + 10);  /* expire in 60 seconds */
        }
        return redirect()->to(HOST_URL . '/admin/telekomunikasi');
    }
    //telekomunikasi end
    // Penyiaran
    public function singleInputPenyiaran()
    {
        $nama = $_POST['nama'];
        $jenis = $_POST['jenis'];
        $domisili = $_POST['domisili'];
        $status = $_POST['status'];
        $website = $_POST['website'];

        $data = [
            'nama' => $nama,
            'jenis_layanan' => $jenis,
            'domisili' => $domisili,
            'status' => $status,
            'website' => $website,
        ];

        if ($this->penyiaranModel->insert($data)) {
            $response = "success";
        } else {
            $response = "failed";
        }

        return $response;
    }

    public function getSingleDataPenyiaran()
    {
        $id = $_POST['id'];

        $penyiaranData = $this->penyiaranModel->where('id', $id)->findAll();

        return json_encode($penyiaranData);
    }

    public function updateDataPenyiaran()
    {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $jenis = $_POST['jenis'];
        $domisili = $_POST['domisili'];
        $status = $_POST['status'];
        $website = $_POST['website'];

        $data = [
            'nama' => $nama,
            'jenis_layanan' => $jenis,
            'domisili' => $domisili,
            'status' => $status,
            'website' => $website,
        ];

        if ($this->penyiaranModel->where('id', $id)->set($data)->update()) {
            $response = "updated";
        } else {
            $response = "failed";
        }

        return $response;
    }

    public function deleteDataPenyiaran()
    {
        // Session Check
        if (!$this->session->has('sdppi_session')) {
            return redirect()->to(HOST_URL . '/login');
        }

        $id = $_POST['id'];

        if ($this->penyiaranModel->where('id', $id)->delete()) {
            $response  = "deleted";
        } else {
            $response = "failed";
        }
        return $response;
    }

    public function batchUploadPenyiaran()
    {
        // Allowed mime types
        $fileMimes = array(
            'text/x-comma-separated-values',
            'text/comma-separated-values',
            'application/octet-stream',
            'application/vnd.ms-excel',
            'application/x-csv',
            'text/x-csv',
            'text/csv',
            'application/csv',
            'application/excel',
            'application/vnd.msexcel',
            'text/plain'
        );

        // Validate whether selected file is a CSV file
        if (!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $fileMimes)) {

            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');

            // Skip the first line
            fgetcsv($csvFile);

            // Parse data from CSV file line by line
            while (($getData = fgetcsv($csvFile, 10000, ",")) !== FALSE) {
                $data = [
                    'nama' => $getData[0],
                    'jenis_layanan' => $getData[1],
                    'domisili' => $getData[2],
                    'status' => $getData[3],
                    'website' => $getData[4]
                ];

                $this->penyiaranModel->insert($data);
            }
            setcookie("batchUpload", 'success', time() + 10);  /* expire in 60 seconds */
        } else {
            setcookie("batchUpload", 'failed', time() + 10);  /* expire in 60 seconds */
        }
        return redirect()->to(HOST_URL . '/admin/penyiaran');
    }
    //telekomunikasi end

    public function informasi()
    {
        // Session Check
        if (!$this->session->has('sdppi_session')) {
            return redirect()->to(HOST_URL . '/login');
        }

        // Getting User Data
        $userData = $this->userModel->find(base64_decode($this->session->get('sdppi_session')));

        $regulasiData = $this->infoModel->where('feature', 'regulasi')->findAll();

        $data = [
            'userDataArray' => $userData,
            'regulasiData' => $regulasiData,
        ];

        return view('admin/informasi', $data);
    }

    public function updateRegulasi()
    {
        $title = $_POST['title'];
        $content = $_POST['content'];

        if ($this->infoModel->where('title', $title)->set('content', $content)->update()) {
            return redirect()->to(HOST_URL . '/admin/informasi');
        }
    }

    public function faq()
    {
        // Session Check
        if (!$this->session->has('sdppi_session')) {
            return redirect()->to(HOST_URL . '/login');
        }

        // Getting User Data
        $userData = $this->userModel->find(base64_decode($this->session->get('sdppi_session')));

        $faqData = $this->faqModel->findAll();

        $data = [
            'userDataArray' => $userData,
            'faqDataArray' => $faqData,
        ];

        return view('admin/faq', $data);
    }

    public function newQuestion()
    {
        // Session Check
        if (!$this->session->has('sdppi_session')) {
            return redirect()->to(HOST_URL . '/login');
        }

        $question = $_POST['newquestion'];
        $answer = $_POST['newanswer'];

        $data = [
            'question' => $question,
            'answer' => $answer,
        ];

        if ($this->faqModel->insert($data)) {
            setcookie("newquestion", 'success', time() + 10);  /* expire in 60 seconds */
        } else {
            setcookie("newquestion", 'failed', time() + 10);  /* expire in 60 seconds */
        }
        return redirect()->to(HOST_URL . '/admin/faq');
    }

    public function deleteQuestion()
    {
        // Session Check
        if (!$this->session->has('sdppi_session')) {
            return redirect()->to(HOST_URL . '/login');
        }

        $id  = $_POST['id'];

        if ($this->faqModel->where('id', $id)->delete()) {
            $response = "deleted";
        } else {
            $response = "failed";
        }
        return $response;
    }

    public function editQuestion()
    {
        // Session Check
        if (!$this->session->has('sdppi_session')) {
            return redirect()->to(HOST_URL . '/login');
        }

        $id  = $_POST['id'];
        $editquestion = $_POST['editquestion'];
        $editanswer = $_POST['editanswer'];

        $data = [
            'question' => $editquestion,
            'answer' => $editanswer

        ];
        if ($this->faqModel->where('id', $id)->set($data)->update()) {
            setcookie("editquestion", 'success', time() + 10);  /* expire in 60 seconds */
        } else {
            setcookie("editquestion", 'success', time() + 10);  /* expire in 60 seconds */
        }
        return redirect()->to(HOST_URL . '/admin/faq');
    }

    public function getQuestion()
    {
        // Session Check
        if (!$this->session->has('sdppi_session')) {
            return redirect()->to(HOST_URL . '/login');
        }

        $id  = $_POST['id'];

        $questionData = $this->faqModel->where('id', $id)->findAll();

        return json_encode($questionData);
    }
}
