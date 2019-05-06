<?php 
    class Penyewa extends CI_Model {
        //fungsi untuk mendapatkan data
        public function get() {
            $this->load->database();
            return $this->db->get("sewa_lapangan")->result();
        }

        //fungsi untuk menambahkan data
        public function insert($data = array()) {
            $this->load->database();
            return $this->db->insert("sewa_lapangan", $data);
        }
    }
?>