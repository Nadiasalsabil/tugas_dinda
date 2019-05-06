<?php
    class Sewa extends CI_Controller {
        public function index(){
            $this->load->model("penyewa");
            $data = array();

            //action setelah submit
            if($this->input->method() == "post") {
                $dataPost   = array(
                        'no_booking'      => $this->input->post('no_booking'),
                        'nama_pemesan'    => $this->input->post('nama_pemesan'),
                        'jenis_lapangan'  => $this->input->post('jl'),
                        'tanggal_pesan'   => $this->input->post('tglpesan'),
                        'tanggal_main'    => $this->input->post('tglmain'),
                        'nama_tim'        => $this->input->post('namatim'),
                        'jam_mulai'       => $this->input->post('jammulai'),
                        'jam_selesai'     => $this->input->post('jamselesai'),
                );

                //jika berhasil
                if($this->penyewa->insert($dataPost)) {
                    $data["status"] = "success";
                    $data["message"] = "Selamat, Data anda berhasil disimpan";
                }else{
                    //jika gagal

                    $data["status"]  =  "danger";
                    $data["message"] =  "Maaf, data anda gagal disimpan";
                }
            }

            $this->load->view("template/header");
            $this->load->view("sewa", $data);
            $this->load->view("template/footer");
        }
    }
?>
