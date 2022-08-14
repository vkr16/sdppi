<?php

namespace App\Controllers;

use App\Models\UserModel;

class Admin extends BaseController
{

    protected $session;
    protected $userModel;

    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->userModel = model('UserModel', true, $db);
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


        $data = [
            'userDataArray' => $userData,
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
}
