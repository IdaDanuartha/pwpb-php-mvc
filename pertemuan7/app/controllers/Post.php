<?php

class Post extends Controller {
    public function index()
    {   
        if($_SESSION['isLogged']) {
            $data['title'] = 'Post';

            $this->view('templates/header', $data);
            $this->view('post/index', $data);
            $this->view('templates/footer', $data);
        } else {
            header('Location: ' . BASE_URL . '/user/loginview');
        }
    }
    
    public function add()
    {
        if($this->model('PostModel')->store($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            $this->redirect('post');
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            $this->redirect('post');
        }
    }
}