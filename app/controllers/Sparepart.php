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
}