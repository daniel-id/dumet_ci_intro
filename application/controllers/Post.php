<?php

class Post extends CI_Controller {

	public function tampilkan_post () 
	{
		// Memanggil Model (Post-model.php) untuk mendapatkan datanya
		$this->load->model('post_model');

		// Menampung data dari Model dengan menggunakan method ambil_post() ke dalam variable data
		$data['post'] = $this->post_model->ambil_post();

		// Mengirimkan data ke View (post.php) 
		$this->load->view('post', $data);
	}
}