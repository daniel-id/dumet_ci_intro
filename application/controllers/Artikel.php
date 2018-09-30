<?php

class Artikel extends CI_Controller {

	public function index() {
		// 1. Aktifkan model
		$this->load->model('artikel_model');


		// 2. pangil method untuk menampilkan data
		$artikel = $this->artikel_model->get_all()->result();

		// echo '<pre>';
		// print_r($artikel);
		
		//3. tampung data dalam variable array
		$data['artikel'] = $artikel;


		// 4. passing data pada view
		$this->load->view('artikel', $data);
	}
}