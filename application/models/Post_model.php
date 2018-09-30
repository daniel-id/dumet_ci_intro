<?php

// mendeklarasikan class/Model dan method yang dapat dipanggil oleh Controller
class Post_model extends CI_Model {

	public function ambil_post()
	{
		// mengirimkan data pada saat dipanggil oleh Controller (Post.php)
		return 'Daftar Post';
	}
}