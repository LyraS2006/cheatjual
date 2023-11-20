<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');
class Barang_model extends CI_model
{
    public function getAllBarang()
    {
        return $this->db->get('barang')->result_array();
    }
    function GetDataBarang()
    {
        $query = $this->db->Get('barang');
        return $query->Result();
    }
    public function tambahData()
    {
        $data = [
            'nama_barang' => $this->input->post('nama_barang'),
            'harga' => $this->input->post('harga'),
            'stok' => $this->input->post('stok'),
            'id_supplier' => $this->input->post('id_supplier'),
        ];
        $this->db->insert('barang', $data);
    }
    public function get()
    {
        $query = $this->db->get($this->_table);
        return $query->result();
    }

    function hapusData($id)
    {
        $this->db->where('id_barang', $id);
        $this->db->delete('barang');
    }

    public function gantiData($id, $dataUpdate)
    {
        $this->db->where('id_barang', $id);
        $this->db->update('barang', $dataUpdate);
    }
    public function searchBarang($nama_barang)
    {
        $query = "SELECT * FROM barang 
                    WHERE nama_barang LIKE '%$nama_barang%'";
        return $this->db->query($query)->result_array();
    }
    public function getIdBarang($id)
    {
        $query = "SELECT * FROM barang as b 
                    JOIN supplier as s ON s.id_supplier = b.id_supplier
                    WHERE id_barang = $id";
        return $this->db->query($query)->row_array();
    }
    public function detailBarang($id_barang)
    {
        $query = $this->db->get_where('barang', array('id_barang' => $id_barang))->row_array();
        return $query;
    }
}
