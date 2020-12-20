<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

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
	public function menu()
	{
		$this->check_log();	
		$this->load->model('proveedore_model');  
		$this->load->model('formulariofyc_model');
		$this->load->model('formulariot_model');       
		$data['proveedor'] = $this->proveedore_model->get_all_proveedores_backoffice_prov($this->session->userdata('idproveedor'));
		$data['fyc'] = $this->formulariofyc_model->get_formulariofyc_prov($this->session->userdata('idproveedor'));
		$data['ft'] = $this->formulariot_model->get_formulariot_prov($this->session->userdata('idproveedor'));
		$data['titulacion']="Listado de Tareas de ".$data['proveedor'][0]['empresa'];
		$data['mensaje']="";
		$data['_view'] = 'proveedores/menu';
        $this->load->view('template/header',$data);
		$this->load->view('layouts/main');
		//$this->load->view('template/footer');
	}



	private function check_log(){
        if($this->session->userdata('logueado') == FALSE){
            redirect(base_url(), 'refresh');    
        }
	}
	
	public function logout(){
        if($this->session->userdata('logueado') == FALSE){
            redirect(base_url(), 'refresh');    
        }
    }


}