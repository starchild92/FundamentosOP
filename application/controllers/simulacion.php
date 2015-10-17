<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Simulacion extends CI_Controller {

	public function index()
	{
		$data['valor'] = 17;
		$data['k'] = 12;
		$data['t'] = 5;
		$this->load->view('simulacion', $data);
	}

	public function Value(){
		$form_data = $this->input->post();
		$valor = $this->input->post("valor");
		$k = $this->input->post("k");
		$t = $this->input->post("t");

		$data['valor'] = $valor;
		$data['k'] = $k;
		$data['t'] = $t;
		//echo $valor;
		$this->load->view('simulacion', $data);
	}
}