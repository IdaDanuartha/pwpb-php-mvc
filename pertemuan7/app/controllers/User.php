<?php

class User extends Controller {

    public function registerView()
    {
        $_SESSION['isLogged'] = false;
        if(!$_SESSION['isLogged']) {
            $data['title'] = 'Login';
            $data['message'] = '';
             
            $this->view('auth/register', $data);
        } else {
            header('Location: ' . BASE_URL);
        }
    }

    public function loginView()
    {
        $_SESSION['isLogged'] = false;
        if(!$_SESSION['isLogged']) {
            $data['title'] = 'Login';
            $data['message'] = '';
            
            $this->view('auth/login', $data);
        } else {
            header('Location: ' . BASE_URL);
        }
    }

    public function registerProcess()
    {
        if($_POST['password'] === $_POST['verify_password']) {
            if($this->model('UserModel')->createUser($_POST) > 0) {
                header('Location: ' . BASE_URL . '/user/loginview');
                Flasher::setFlash('Success!', 'Please Login', 'success');
                exit;
            }
        } else {
            $data['title'] = 'register';
            $data['message'] = 'Password must be match';
            $this->view('register/index', $data);
        }
    }
    
    public function loginProcess()
    {
        if($this->model('UserModel')->findUserByEmail($_POST['email'])) {
            $loginInUser = $this->model('UserModel')->login($_POST);
            if($loginInUser) {
                $this->model("UserModel")->session($loginInUser);
                Flasher::setFlash('Success', 'Login Successfully', 'success');
            } else {
                $data['title'] = 'Login';
                $data['message'] = 'Email Or Password Incorrect';
                $this->view('auth/login', $data);
            }
        } else {
            $data['title'] = 'Login';
            $data['message'] = 'Email Not Found';
            $this->view('auth/login', $data);
        }
    }

    public function logout()
    {
        // session_start();
        $_SESSION['isLogged'] = false;

        header('Location: ' . BASE_URL . '/user/loginview');
    }
}