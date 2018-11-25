<?php

        class Admin extends CI_Controller{
          public function __construct(){
          parent::__construct();

          $this->load->model('ultras');
          if ($this->session->userdata('level') !="admin"){
            redirect ('pasundan');
          }
          }


        public function index()
        {
          $this->load->view('dashboard');
        }
        public function booking(){
          $this->load->view('booking');
        }
        public function pembayaran(){
          $this->load->view('pembayaran');
        }
        public function sop (){
          $this->load->view('sop');
        }
        public function profil(){
          $this->load->view('profil');
        }
        public function edit (){
          $this->load->view('edit');
        }
        public function login () {
          $this->load->view('login');
        }
        public function logout (){
          $this->load-> view ('logout');
        }
        public function dashboard (){
          $this->load-> view ('dashboard');
        }
        public function listorder (){
          $this->load-> view ('listorder');
        }
        public function grafic (){
          $this->load-> view ('grafic');
        }
        public function detail (){
          $this->load->view('detail');
        }
        }

?>
