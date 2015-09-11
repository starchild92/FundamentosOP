<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Simulacion extends CI_Controller {

	public function index()
	{
		$data['valor'] = 10;
		$data['k'] = 20;
		$this->load->view('simulacion', $data);
	}

	public function Value(){
		$form_data = $this->input->post();
		$valor = $this->input->post("valor");
		$k = $this->input->post("k");

		$data['valor'] = $valor;
		$data['k'] = $k;
		//echo $valor;
		$this->load->view('simulacion', $data);
	}
}