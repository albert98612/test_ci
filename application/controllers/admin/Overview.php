<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overview extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct(){ 
		parent::__construct(); 
	} 
	public function GetData(){		
		$array= array();
		for ($i=1; $i <=12; $i++) { 
			array_push($array,round(rand(1000,20000),2));
		}
		$data['array']=$array;
        $data['array2'] = array(rand(1000,20000),rand(1000,20000),rand(1000,20000),rand(1000,20000),rand(1000,20000),rand(1000,20000));
		return $data;
	}
	public function GetData2(){	//untuk mengambil data dari controller ke controller lain
		$array= array();
		for ($i=1; $i <=12; $i++) { 
			array_push($array,round(rand(1000,20000),2));
		}
		$data['array']=$array;
        $data['array2'] = array(rand(1000,20000),rand(1000,20000),rand(1000,20000),rand(1000,20000),rand(1000,20000),rand(1000,20000));
		echo json_encode($data);
	}

	public function index()
	{
		$data=$this->GetData();
		$this->load->view('admin/overview',$data);
	}
}
