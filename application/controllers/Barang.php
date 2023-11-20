<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model', 'barang');
    }
    public function index()
    {

        if (empty($this->input->get('nama_barang'))) {
            $data['barang'] = $this->barang->getAllBarang();
            $data['search'] =  '';
        } else {
            $data['barang'] = $this->barang->searchBarang($this->input->get('nama_barang'));
            $data['search'] = $this->input->get('nama_barang');
        }
        $data['judul'] = 'Data barang';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('barang/index', $data);
        $this->load->view('templates/footer');
        $QueryAllBarang = $this->barang->GetDataBarang();
        $data = array('QueryAllBarang' => $QueryAllBarang);
    }

    public function tambah()
    {

        $data['supplier'] = $this->db->get('supplier')->result_array();

        $this->form_validation->set_rules('nama_barang', 'required');
        $this->form_validation->set_rules('harga', 'required');
        $this->form_validation->set_rules('stok', 'required');
        $this->form_validation->set_rules('id_supplier', 'supplier', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('barang/addbarang', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->barang->tambahData();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selesai Ditambah</div>');
            redirect('barang');
            // $this->Barang_model->InsertDataBarang($ArrInsert);
            // Redirect(Base_url(''));

        }
    }
    public function hapus($id)
    {
        $this->barang->hapusData($id);
        redirect('barang');
    }
    public function ganti($id = null)
    {
        if (is_null($id)) {
            redirect("barang");
        }

        $data['supplier'] = $this->db->get('supplier')->result_array();
        $data['data_barang'] = $this->db->get_where("barang", [
            'id_barang' => $id,
        ])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('barang/edit', $data);
        $this->load->view('templates/footer', $data);
    }

    public function update()
    {
        $barang_id = $this->input->post("id_barang");

        $this->form_validation->set_rules('id_barang', 'required');
        $this->form_validation->set_rules('nama_barang', 'required');
        $this->form_validation->set_rules('harga', 'required');
        $this->form_validation->set_rules('stok', 'required');
        $this->form_validation->set_rules('id_supplier', 'supplier', 'required');

        if ($this->form_validation->run() == false) {
            $this->ganti($barang_id);
        } else {

            $dataUpdate = [
                'nama_barang' => $this->input->post('nama_barang'),
                'harga' => $this->input->post('harga'),
                'stok' => $this->input->post('stok'),
                'id_supplier' => $this->input->post('id_supplier'),
            ];
            $this->barang->gantiData($barang_id, $dataUpdate);
            $this->session->set_flashdata('message', '<div class="alert ah lert-success" role="alert">Selesai Ditambah</div>');
            redirect('barang');
        }
    }

    public function detail($id_barang)
    {
        $data['row'] = $this->barang->detailBarang($id_barang);
        $data['judul'] = 'Data barang';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('barang/detailbarang', $data);
        $this->load->view('templates/footer');
        $QueryAllBarang = $this->barang->GetDataBarang();
        $data = array('QueryAllBarang' => $QueryAllBarang);
    }
    // public function search($nama_barang)
    // {
    //     $data['nama_barang'] = $this->barang->searchBarang($nama_barang);
    //     $data['hasil_search'] = $this->searchBarang->search($data['nama_barang']);
    //     $data['judul'] = 'Data barang';
    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar', $data);
    //     $this->load->view('barang/searchbarang', $data);
    //     $this->load->view('templates/footer');
    //     $QueryAllBarang = $this->barang->GetDataBarang();
    //     $data = array('QueryAllBarang' => $QueryAllBarang);
    // }
}
