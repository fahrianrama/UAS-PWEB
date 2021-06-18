<?php

class Home extends Controller {
    public function index()
    {
        $data['kegiatan'] = $this->model('kegiatan_model')->getAllKegiatan();
        $this->view('templates/header');
        $this->view('templates/navbar_home');
        $this->view('home/index',$data);
        $this->view('templates/footer_home');
    }

}