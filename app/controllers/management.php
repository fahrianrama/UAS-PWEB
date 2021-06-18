<?php

class Management extends Controller {
    public function index()
        {
            $data['kegiatan'] = $this->model('kegiatan_model')->getAllKegiatan();
            $this->view('templates/header');
            $this->view('templates/navbar');
            $this->view('management/index',$data);
            $this->view('templates/footer');
        }

    public function hapus($id)
        {
            if($this->model('kegiatan_model')->hapusDataKegiatan($id)>0){
                header('Location: ' . BASEURL . '/management');
                exit;
            }
        }
    
    public function tambahKegiatan()
    {
        if($this->model('kegiatan_model')->tambahDataKegiatan($_POST)>0){
            header('Location: ' . BASEURL . '/management');
            exit;
        }
    }

    public function ubahdata()
    {
        if($this->model('kegiatan_model')->ubahDataKegiatan($_POST)>0){
            header('Location: ' . BASEURL . '/management');
            exit;
        }
    }
    public function cekkegiatan(){
        echo json_encode ($this->model('kegiatan_model')->carikegiatan($_POST['id']));
    }


}
