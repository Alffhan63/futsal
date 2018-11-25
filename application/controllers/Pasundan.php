<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasundan extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->check_session();
    $this->load->model('ultras');
  }
  public function index(){
    $this->load->view('login');
  }
  public function scum(){
    $user=$this->input->post('username');
      $pass=$this->input->post('password');
      $flower=$this->ultras->flower($user,$pass);
      if($flower){
        foreach ($flower as $row);
        $this->session->set_userdata('username',$row->username);
        $this->session->set_userdata('nama',$row->nama);
        $this->session->set_userdata('level',$row->level);
        $this->session->set_userdata('nama_tim',$row->nama_tim);
        $this->session->set_userdata('alamat',$row->alamat);
        $this->session->set_userdata('no_hp',$row->no_hp);
        $this->session->set_userdata('username',$row->username);
        $this->session->set_userdata('id_user',$row->id_user);
        if($this->session->userdata('level')=="user"){
          redirect("user");
        }elseif($this->session->userdata('level')=="admin") {
          redirect ("admin");
        }
    }else{
      echo "pass/user salah";
    //  $data["pesan"]='<div class=""'
    }
  }
      function check_session(){
        $eve=$this->session->userdata('level');
        if($eve=="user"){
          redirect('user');
        }elseif($eve=="admin"){
          redirect('admin');
        }

        }
        public function registrasi(){
          $this->load->view('registrasi');
        }
        public function registered(){
          if($this->input->method()=='post') {
            $insert = $this->ultras->regist(array(
              'nama' => $this->input->post('nama'),

              'username' => $this->input->post('username'),
              'nama_tim' => $this->input->post('namatim'),
              'alamat' => $this->input->post('alamat'),
              'no_hp' =>$this->input->post('no_hp'),
              'password' =>md5($this->input->post('password')),
              'level' =>$this->input->post('level')
            ));
            if($insert) {
              $data['pesan']='<div class=alert alert-success" roll="alert"><i class="fe fe-chek mr-2" aria-hidden="true">
              </i> Succes Add Account. Please completing your profile after first&nbsp;<a href="http://localhost/lacurva"> sign in</a></div>';
              $this->load->view('registrasi',$data);
            }else{
              echo"Failed Add User";
            }
          }
        }
        public function booking(){
          $this->load->view('booking');
        }
      
}
