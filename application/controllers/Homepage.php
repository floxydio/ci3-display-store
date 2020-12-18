<?php

class Homepage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function admin()
    {
        $data['title'] = 'Admin Dashboard';
        $data['invoice'] = $this->Model_pesanan->showinvoice()->result();

        $this->load->view('admin/template_admin/header', $data);
        $this->load->view('admin/template_admin/topbar');
        $this->load->view('admin/admin');
        $this->load->view('admin/template_admin/footer');
    }
    public function index()
    {
        $data['title'] = 'Home Page';
        $data['barang'] = $this->Model_barang->tampil_data()->result();

        $this->load->view('page/template_user/header', $data);
        $this->load->view('page/template_user/topbar');
        $this->load->view('page/user', $data);
        $this->load->view('page/template_user/footer');
    }
    public function form()
    {
        $data['title'] = "Form Pemesanan";

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('hp', 'hp', 'required|trim');
        $this->form_validation->set_rules('pilihan', 'Pilihan', 'required');

        if ($this->form_validation->run() === false) {
            $this->load->view('form/template_user/header', $data);
            $this->load->view('form/template_user/topbar');
            $this->load->view('form/form');
            $this->load->view('form/template_user/footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'hp' => htmlspecialchars($this->input->post('hp', true)),
                'pilihan' => htmlspecialchars($this->input->post('pilihan', true)),
                'date_invoice' => date("Y/m/d")
            ];
            $this->db->insert('pesanan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat! Pesanan kamu telah di list. Kami akan menghubungi Nomor kamu
            </div>');
            redirect('homepage');
        }
    }
}
