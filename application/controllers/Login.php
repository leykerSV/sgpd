<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->session->unset_userdata('userdata');
		$this->load->view('login/headerlogin');
		$this->load->view('login/login');
		$this->load->view('login/footer');
	}

	private function check_log(){
        if($this->session->userdata('logueado') == FALSE){
            redirect(base_url(), 'refresh');    
        }
	}

	public function verifylogin()
    {
        if($this->check_database() == TRUE)
        {
          redirect('proveedores', 'refresh');

        }else{
          $this->session->set_flashdata('error_msg', 'Error al loguearse. Verifique los datos.');
          redirect(base_url(), 'refresh');
        }
    }

	function check_database()
    {
      $this->load->model('Proveedordb','',TRUE); 
      //Field validation succeeded.  Validate against database
      $username = $this->input->post('username');
      $password=$this->input->post('password');
      //query the database
      $result = $this->Proveedordb->login($username, $password);

      if($result)
      {
        $sess_array = array();
        //$this->load->model('Proveedordb',true);
        foreach($result as $row)
        {
          $doc_array = array(); 

          $resultdoc=$this->Proveedordb->formulariofyc($row->idproveedor); 
          $formfyc_array = json_decode(json_encode($resultdoc[0]), true);

          $resultdoc=$this->Proveedordb->formulariot($row->idproveedor); 
          $formt_array = json_decode(json_encode($resultdoc[0]), true);

          $resultdoc=$this->Proveedordb->doccomercial($row->idproveedor); 
          $doccom_array = json_decode(json_encode($resultdoc[0]), true);

        $sess_array = array(
            'idproveedor' => $row->idproveedor,
            'empresa' => $row->empresa,
            'apellidos' => $row->apellidos,
            'nombres' => $row->nombres,
            'telefono'=> $row->telefono,
            'mail'=> $row->mail,
            'rubro'=> $row->rubro,
            'subrubro'=> $row->subrubro,
            'ciudad'=> $row->ciudad,
            'web'=> $row->web,
            'observaciones'=> $row->observaciones,
            'contacto'=> $row->contacto,
            'pass'=> $row->pass,
            'activo'=> $row->activo,
            'categoria'=> $row->categoria,
            'logueado'=>TRUE,
            'formulariofyc'=>$formfyc_array,
            'formulariot'=>$formt_array,
            'doccomercial'=>$doccom_array,
          );
          $this->session->set_userdata($sess_array);
        }
        return TRUE;
      }
      else
      {
        $this->session->unset_userdata('userdata');
        return FALSE;
      }
    }



}