<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {
	function __construct()
{
    parent::__construct();
    $this->load->model('Model');
  
}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}
    public function maintenance(){ //Maintenance function     
		$this->load->view('comingsoon'); 
    }
    public function get_kota($nama_kota){
    	$result= $this->Model->read('tb_kota', "nama_kota LIKE '$nama_kota%'");
    	$arrayName = array('data' => $result );
    	//print_r($arrayName);
    	$this->load->view('kota', $arrayName);
    }

    public function get_harga(){
    	$arrayName['nama_kota'] = explode(',', $_GET['tujuan'])[0];

    	// var_dump($arrayName);

    	$result = $this->Model->read('tb_kota', $arrayName);

    	// var_dump($result);

    	$data['result'] = $result;

    	$this->load->view('price_table', $data);

    }
}