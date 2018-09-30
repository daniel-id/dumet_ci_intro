<?php

class Artikel_model extends CI_Model {
	public function get_all() {

		// buat perintah SQL
		return $this->db->query('SELECT * FROM artikel');
	}
}