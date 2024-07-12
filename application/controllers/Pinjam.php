<?php if (!defined('BASEPATH')) exit('No Direct Script Access Allowed');
class Pinjam extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    cek_login();
    cek_user();
  }

  public function index()
  {
  }

  public function daftarBooking()
  {
    $data['judul'] = "Daftar Booking";
    $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
    $data['pinjam'] = $this->db->query("select*from booking")->result_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('booking/daftar-booking', $data);
    $this->load->view('templates/footer');
  }

  public function bookingDetail()
  {
    $id_booking = $this->uri->segment(3);
    $data['judul'] = "Booking Detail";
    $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
    $data['agt_booking'] = $this->db->query("select*from booking b, user u where b.id_user=u.id and b.id_booking='$id_booking'")->result_array();
    $data['detail'] = $this->db->query("select id_buku,judul_buku,pengarang,penerbit,tahun_terbit from booking_detail d, buku b where d.id_buku=b.id and d.id_booking='$id_booking'")->result_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('booking/booking-detail', $data);
    $this->load->view('templates/footer');
  }
}
