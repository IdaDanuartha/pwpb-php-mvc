<?php

class User extends Controller {
    public function create()
    {
        $data['title'] = 'register';
        $data['password_err'] = '';
        
        $this->view('register/index', $data);
    }

    public function store()
    {
        if($_POST['password'] === $_POST['verify_password']) {
            if($this->model('UserModel')->createUser($_POST) > 0) {
                header('Location: ' . BASE_URL);
                exit;
            }
        } else {
            $data['title'] = 'register';
            $data['password_err'] = 'Password must be match';
            $this->view('register/index', $data);
        }
    }
}