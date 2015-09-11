<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Graficas extends CI_Controller {

	public function index()
	{
		$this->load->view('graficas');
	}

	public function Flotr(){
		$this->load->view('flotr1');
	}

	public function Value(){
		$form_data = $this->input->post();
		$valor = $this->input->post("valor");

		$data['valor'] = $valor;
		//echo $valor;
		$this->load->view('flotr1',$data);
	}
}