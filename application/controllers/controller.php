<?php
class Controller extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('model');

	}

	function index(){
		//$this->load->view('admin/dashboard');
		$this->load->view('user/dashboard');
	}

	function create(){

	}

	function store(){

	}

	function edit($id){

	}
	function show($id){
		$where = array('id_quisioner' => $id);
		//$data['datas'] = $this->model->show('tb_soal_kuisioner',$where);
		$this->load->view('user/question');
	}

	function showPage($page){
		if($page == 'statistik'){
			$this->load->view('user/statistik');
		}
		else if($page == 'create'){
			$this->load->view('user/create_kuisioner');
		}
	}

	function update($id){

	}

	function delete($id){

	}

}
?>
