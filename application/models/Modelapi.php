<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelapi extends CI_Model{
    
    public function kategori(){
        $this->db->select('*');
        $this->db->from('kategori');
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function slide(){
        $this->db->select('*');
        $this->db->from('slider');
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function detail($id){
        $this->db->select('*');
        $this->db->from('produk as produk');
        $this->db->where('produk.id', $id);
		$this->db->join('kategori as kategori', 'produk.id_kategori = kategori.id');
		$this->db->join('penjual as penjual', 'produk.id_penjual = penjual.id');
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function produk($kategori, $nama, $penjual, $sortby){
        $this->db->select('*, produk.id as id');
        $this->db->from('produk as produk');

        if($kategori){
	        $this->db->where('produk.id_kategori', $kategori);	
        }

        if($penjual){
	        $this->db->where('produk.id_penjual', $penjual);	
        }

        if($sortby){
	        $this->db->order_by('produk.nama_produk', $sortby);	
        }
        
		$this->db->join('kategori as kategori', 'produk.id_kategori = kategori.id');
		$this->db->join('penjual as penjual', 'produk.id_penjual = penjual.id');
		
        $this->db->like('produk.nama_produk', $nama);
        $data = $this->db->get()->result_array();
        return $data;
    }


}
?>
