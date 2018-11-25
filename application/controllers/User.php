<?php

class User extends CI_Controller{
  public function __construct(){
  parent::__construct();

  $this->load->model('ultras');
  if ($this->session->userdata('level') !="user"){
    redirect ('pasundan');
  }
  }


public function index()
{
  $this->load->view('index');
}
public function booking(){
  $data = array('booking' => $this->ultras->list());
  $this->load->view('booking',$data);
}
public function lapangan2(){
  $data = array('lapangan2' => $this->ultras->list());
  $this->load->view('lapangan2',$data);
}
public function lapangan3(){
  $data = array('lapangan3' => $this->ultras->list());
  $this->load->view('lapangan3',$data);
}
public function lapangan4(){
  $data = array('lapangan4' => $this->ultras->list());
  $this->load->view('lapangan4',$data);
}
public function lapangan5(){
  $data = array('lapangan5' => $this->ultras->list());
  $this->load->view('lapangan5',$data);
}
public function lapangan6(){
  $data = array('lapangan6' => $this->ultras->list());
  $this->load->view('lapangan6',$data);
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
public function alert (){
  $this->load-> view ('alert');
}
public function bookings(){
  if($this->input->method()=='post') {
    $insert1 = $this->ultras->kwitansi(array(
      'id_user' => $this->input->post('id_user'),
      'id_status' => $this->input->post('id_status')
    ));
    $insert = $this->ultras->pesan(array(
      'id_kwitansi' => $insert1,
      // 'jam_mulai' => $this->input->post('jam_mulai'),
      // 'jam_selesai' => $this->input->post('jam_selesai'),
      // 'tanggal_main' => $this->input->post('tgl_main'),
      'nama_pemesan' => $this->input->post('nama_pemesan'),
      'nama_tim' =>$this->input->post('nama_tim'),
      // 'lapangan' => $this->input->post('lapangan'),
      'alamat' => $this->input->post('alamat'),
      'tlp' => $this->input->post('tlp')
    ));
    $insert = $this->ultras->pesan1(array(
      'id_kwitansi' => $insert1,
      'jam_mulai' => $this->input->post('jam_mulai'),
      'jam_slesai' => $this->input->post('jam_selesai'),
      'id_lapangan' => $this->input->post('id_lapangan'),
      'tanggal_main' => $this->input->post('tgl_main')
    ));
    $insert = $this->ultras->pembayaran(array(
      'id_kwitansi' => $insert1
    ));
    if($insert1 && $insert) {
    echo "sukses";
    redirect('user/pembayaran');
    }else{
      echo"Failed Add User";
    }
  }
}
public function tampil(){
  $tampil['tampil'] = $this->ultras->tampil();
}
}
?>
