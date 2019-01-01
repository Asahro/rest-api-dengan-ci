<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// session_start();
date_default_timezone_set("Asia/Jakarta");
require APPPATH . 'libraries/REST_Controller.php';

class Menu extends REST_Controller{

	public function __construct(){
	    parent::__construct();
	}

	public function index_get(){
	    $response['status']="success";
	    $response['error']=false;
	    $response['data']='Rest Api Sempel';
	    $this->response($response);
	}

	public function kategori_get(){
		$kategori = $this->modelapi->kategori();
	    $response['status']="success";
	    $response['error']=false;
	    $response['data']=$kategori;
	    $this->response($response);
	}

	public function slider_get(){
		$slide = $this->modelapi->slide();
	    $response['status']="success";
	    $response['error']=false;
	    $response['data']=$slide;
	    $this->response($response);
	}

	public function daftarproduk_post(){
		$kategori = $_POST['kategori'];
		$nama = $_POST['nama'];
		$penjual = $_POST['penjual'];
		$sortby = $_POST['sortby'];
		$page = $_POST['page'];

	    $daftarproduk = $this->modelapi->produk($kategori, $nama, $penjual, $sortby);
	    for($i =0; $i < count($daftarproduk);$i++){
	    	if(($i >= ($page * 4))&&($i < (($page * 4)+4))){
		    	$daftar[$i] = $daftarproduk[$i];
	    	}
	    }

	    $response['status']="success";
	    $response['error']=false;
	    $response['page now']=$page;
	    $page_now = count($daftarproduk) / 4;
	    if (round($page_now)>=$page_now){
	    	$page_now = round($page_now);
	    }else{
	    	$page_now = round($page_now) + 1;
	    }
	    $response['all page']=$page_now - 1;
	    $response['data']=$daftar;
	    $this->response($response);
	}

	public function produkdetail_post(){
		$detail = $this->modelapi->detail($_POST['id']);
	    $response['status']="success";
	    $response['error']=false;
	    $response['data']=$detail;
	    $this->response($response);
	}

}
