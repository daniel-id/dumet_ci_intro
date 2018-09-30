<?php

class Pages extends CI_Controller {

	public function index() {
		// echo 'Halaman Home';
		
		// 1. Tampung data yang akan di passing ke view

		$data = array (
			'nama_lengkap' => 'Reza Indra',
			'pekerjaan' => 'Intruktur',
			'alamat' => 'Kebun Jeruk'
		);

		$data['nama_page'] = 'Halaman Home';

		// 2. Lakukan passing data ke view
		$this->load->view('home.php', $data);

		// $this->load->view() berfungsi untuk view pada controller		
	}

	public function contact() {
		// echo 'Halaman Contact';
		echo $this->uri->segment(1);
		echo '<br/>';
		echo $this->uri->segment(2);
		echo '<br/>';
		echo $this->uri->segment(3);
		echo '<br/>';
		echo $this->uri->segment(4);
		echo '<br/>';
		echo $this->uri->segment(5);
		echo '<br/>';
	}

	public function about() {
		// echo 'Halaman About';
		echo $this->uri->segment(1);
		echo '<br/>';
		echo $this->uri->segment(2);
		echo '<br/>';
		echo $this->uri->segment(3);
		echo '<br/>';
		echo $this->uri->segment(4);
		echo '<br/>';
		echo $this->uri->segment(5);
		echo '<br/>';
	}
}