<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Informe extends CI_Controller {
	public function index()
	{
		$this->load->view('informe');
	}

	public function descargar(){
		$this->load->helper('download');
		$data = file_get_contents("./sources/informeescrito.pdf"); // Read the file's contents
		$name = 'Informe.pdf';

		force_download($name, $data);
		//$this->load->view('informe');
	}
}