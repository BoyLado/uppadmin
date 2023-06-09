<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class NavigationController extends BaseController
{
    public function index()
    {
        // $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        // $uri = (isset($_SERVER['HTTPS']))? 'https://' : 'http://' . $_SERVER['SERVER_NAME'] . '/' . $uriSegments[1] . '/login';
        // return redirect()->to($uri);
        if($this->session->has('upp_user_loggedIn'))
        {
            if($this->session->get('upp_user_loggedIn'))
            {
                return redirect()->to(base_url() . '/portal/auction-dashboard');
            }
        }
        $data['pageTitle'] = "Login | U Pick A Pallet";
        $data['userAuthCode'] = "";
        return $this->slice->view('login', $data);
    }

    public function login()
    {
        if($this->session->has('upp_user_loggedIn'))
        {
            if($this->session->get('upp_user_loggedIn'))
            {
                return redirect()->to(base_url() . '/portal/auction-dashboard');
            }
        }
        $data['pageTitle'] = "Login | U Pick A Pallet";
        $data['userAuthCode'] = "";
        return $this->slice->view('login', $data);
    }

    public function forgotPassword()
    {
        if($this->session->has('upp_user_loggedIn'))
        {
            if($this->session->get('upp_user_loggedIn'))
            {
                return redirect()->to(base_url() . '/portal/auction-dashboard');
            }
        }
        $data['pageTitle'] = "Forgot Password | U Pick A Pallet";
        return $this->slice->view('forgot_password', $data);
    }

    public function changePassword($userId, $userAuthCode, $passwordAuthCode)
    {
        if($this->session->has('upp_user_loggedIn'))
        {
            if($this->session->get('upp_user_loggedIn'))
            {
                return redirect()->to(base_url() . '/portal/auction-dashboard');
            }
        }
        $data['pageTitle'] = "Change Password | U Pick A Pallet";
        $data['userId'] = $userId;
        $data['userAuthCode'] = $userAuthCode;
        $data['passwordAuthCode'] = $passwordAuthCode;
        return $this->slice->view('change_password', $data);
    }

    public function signUp($userId, $userAuthCode)
    {
        if($this->session->has('upp_user_loggedIn'))
        {
            if($this->session->get('upp_user_loggedIn'))
            {
                return redirect()->to(base_url() . '/portal/auction-dashboard');
            }
        }
        $data['pageTitle'] = "Sign Up  | U Pick A Pallet";
        $data['userId'] = $userId;
        $data['userAuthCode'] = $userAuthCode;
        return $this->slice->view('sign_up', $data);
    }
}
