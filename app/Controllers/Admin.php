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
}
