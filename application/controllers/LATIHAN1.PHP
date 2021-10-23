<?php
class latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang... Selamat Belajar WEB PROGRAMING";
        //$this->load->view('view-latihan');
    }
    public function penjumlahan($n1, $n2)
    {
        $this->load->model('model_latihan');
        $hasil = $this->model_latihan1->jumlah($n1, $n2);
        echo "hasil penjumlahan dari" . " + " . $n2 . " = "
            . $hasil;
    }
}
