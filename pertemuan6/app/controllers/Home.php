<?php 

class Home extends Controller{
    public function index()
    {   
        $data['title'] = 'Home';
        $data['name'] = $this->model('UserModel')->getAllUser();

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer', $data);
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