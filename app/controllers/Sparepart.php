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

    public function hapus($id)
    {
        if($this->model('Sparepart_model')->hapusDataSparepart($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/sparepart');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/sparepart');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Sparepart_model')->getSparepartByID($_POST['id']));
    }

    public function ubah()
    {
        if($this->model('Sparepart_model')->ubahDataSparepart($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/sparepart');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/sparepart');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'List Spare Part';
        $data['brg'] = $this->model('Sparepart_model')->cariDataSparepart();
        $this->view('templates/header', $data);
        $this->view('sparepart/index', $data);
        $this->view('templates/footer');
    }
}