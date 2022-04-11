<?php

class Sparepart extends Controller {
    public function index()
    {
        $data['judul'] = 'List Spare Part';
        $data['brg'] = $this->model('Sparepart_model')->getAllSparepart();
        $this->view('templates/header', $data);
        $this->view('sparepart/index', $data);
        $this->view('templates/footer');
        
    }
    public function detail($id)
    {
        $data['judul'] = 'Detail Spare Part';
        $data['brg'] = $this->model('Sparepart_model')->getSparepartByID($id);
        $this->view('templates/header', $data);
        $this->view('sparepart/detail', $data);
        $this->view('templates/footer');
        
    }

    public function tambah()
    {
        if($this->model('Sparepart_model')->tambahDataSparepart($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/sparepart');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/sparepart');
            exit;
        }
    }
}