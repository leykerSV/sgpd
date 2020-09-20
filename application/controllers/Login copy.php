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
      $this->load->model('userdb','',TRUE); 
      //Field validation succeeded.  Validate against database
      $username = $this->input->post('username');
      $password=$this->input->post('password');
      //query the database
      $result = $this->userdb->login($username, $password);

      if($result)
      {
        $sess_array = array();
        $this->load->model('userdb',true);
        foreach($result as $row)
        {
         $sess_array = array(
            'id' => $row->id,
            'nombrecompleto' => $row->nombre,
            'email' => $row->email,
            'username' => $row->username,
            'nivel'=> $row->nivel,
						'habilitado'=> $row->habilitado,
						'email'=> $row->email,
            'logueado'=>TRUE
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