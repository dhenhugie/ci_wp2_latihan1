<?php

class Latihan1 extends CI_Controller{
    
	public function index()
	{
		echo "Selamat datang.. selamat belajar web programming";
    }
    
    public function test(){
        echo "aaa";
    }

	//Contoh 2
	public function penjumlahan($n1, $n2)
	{
		$this->load->model('Model_latihan1');
		$hasil = $this->Model_latihan1->jumlah($n1, $n2);
		echo "Hasil penjumlahan dari " . $n1 ." + ". $n2 ." = ". $hasil;
	}

	//Contoh 3
	public function penjumlahan2($n1, $n2)
	{
		$this->load->model('Model_latihan1');
		
		$data['nilai1'] = $n1;
		$data['nilai2'] = $n2;
		$data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);

		$this->load->view('latihan1', $data);
	}
}