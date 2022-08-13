<?php

namespace App\Controllers;

class Auth extends BaseController
{
    protected $session;

    function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function login()
    {
        if ($this->session->has('sdppi_session')) {
            return redirect()->to(HOST_URL . '/admin');
        } else {
            return view('auth/login');
        }
    }

    public function authenticate()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($email == '' || $password == '') {
            $response = "empty field";
        } else {
            $userModel = new \App\Models\UserModel();
            $account = $userModel->find($email);
            if ($account == null) {
                $response = "account not found";
            } else {
                if ($account['status'] == 'active') {
                    if (password_verify($password, $account['password'])) {
                        $this->session->set('sdppi_session', base64_encode($email));
                        $response = "login valid";
                    } else {
                        $response = "password incorrect";
                    }
                } else {
                    $response = "account suspended";
                }
            }
        }

        return $response;
    }

    public function register()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        if ($name == '' || $email == '' || $password == '') {
            $response = "empty field";
        } else {
            $userModel = new \App\Models\UserModel();
            $account = $userModel->find($email);
            if ($account == null) {
                $newUser = [
                    'name' => $name,
                    'email' => $email,
                    'password' => password_hash($password, PASSWORD_DEFAULT),
                ];
                $userModel->insert($newUser);
                $response = "registered";
            } else {
                $response = "account already exist";
            }
        }

        return $response;
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(HOST_URL);
    }
}
