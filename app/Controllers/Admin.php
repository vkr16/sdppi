<?php

namespace App\Controllers;

class Admin extends BaseController
{

    protected $session;
    protected $userModel;
    protected $posModel;

    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->userModel = model('UserModel', true, $db);
        $this->posModel = model('PosModel', true, $db);
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


        $data = [
            'userDataArray' => $userData,
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


        $data = [
            'userDataArray' => $userData,
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
            setcookie("batchUpload", 'success', time() + 60);  /* expire in 60 seconds */
        } else {
            setcookie("batchUpload", 'failed', time() + 60);  /* expire in 60 seconds */
        }
        return redirect()->to(HOST_URL . '/admin/pos');
    }
    //POS end
}
