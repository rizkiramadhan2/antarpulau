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

	 public function tempalte()
 	{
 		$this->load->template('index-1');
 	}

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
    	//print_r($arrayName)
    	$this->load->view('kota', $arrayName);
    }

    public function get_harga(){
    	$arrayName['nama_kota'] = explode(',', $_GET['tujuan'])[0];
    	$info = $this->Model->read('tb_kota', $arrayName);

    	if ($info[0]['ket']=='luar jawa') {
    	$s = "SELECT DISTINCT k.id_kota, k.nama_kota, k.provinsi, l.tarif as 'tarif_laut', l.estimasi as 'estimasi2', u.tarif as 'tarif_udara', u.estimasi as 'estimasi3' FROM tb_kota k,tb_via_laut l,tb_via_udara u WHERE k.nama_kota ="."'".$arrayName['nama_kota']."'";
    	}
       	//INI TABLE JOIN
    	else{
    		$s = "SELECT DISTINCT k.id_kota, k.nama_kota, k.provinsi, d.tarif as 'tarif_darat', d.estimasi as 'estimasi1', l.tarif as 'tarif_laut', l.estimasi as 'estimasi2', u.tarif as 'tarif_udara', u.estimasi as 'estimasi3' FROM tb_kota k,tb_via_darat d,tb_via_laut l,tb_via_udara u WHERE k.nama_kota ="."'".$arrayName['nama_kota']."'";
    	}
    	$result = $this->db->query($s);

    	//MERGE VARIABEL GET BERAT DENGAN OBJEK RESULT SQL
    	$newObj = new stdClass;
    	$newObj->berat = $_GET['berat'];
    	$new_result[0] = (object)array_merge((array)$newObj, (array)$result->result()[0]);
    	//print_r($new_result[0]);
    	//PASSING KE VIEW
    	$data['result'] = $new_result;
    	$this->load->view('price_table', $data);

    }
}
