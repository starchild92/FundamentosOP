<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Informe extends CI_Controller {
	public function index()
	{
		$this->load->view('informe');
	}

	public function descargar_informe(){
		$this->load->helper('download');
		$data = file_get_contents("./sources/informeescrito.pdf"); // Read the file's contents
		$name = 'Informe_Proyecto_FunOptComp_Luis.pdf';

		force_download($name, $data);
		//$this->load->view('informe');
	}

	public function descargar_excel(){
		$this->load->helper('download');
		$data = file_get_contents("./sources/datos_comedor.xlsx"); // Read the file's contents
		$name = 'Datos_Comedor.xlsx';

		force_download($name, $data);
		//$this->load->view('informe');
	}
}