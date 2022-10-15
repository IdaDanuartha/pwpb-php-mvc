<?php 

class Home extends Controller{
    public function index()
    {   
        if($_SESSION['isLogged']) {
            $data['title'] = 'Home';
            $data['name'] = $this->model('UserModel')->getAllUser();

            $this->view('templates/header', $data);
            $this->view('home/index', $data);
            $this->view('templates/footer', $data);
        } else {
            header('Location: ' . BASE_URL . '/user/loginview');
        }
    }

    public function about($company = 'SMKN1')
    {   
        $data['title'] = 'About';
        $data['company'] = $company;

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer', $data);
    }
}