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
}