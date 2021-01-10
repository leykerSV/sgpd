<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emails extends CI_Controller {

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

    }

    public function notificarViaMail($destinatario, $emisor, $cuerpomail, $asunto) {
           
            $this->load->library('email','','correo');

            $this->correo->from('sgpdcocyar@gmail.com', 'SGPd');
            $this->correo->to($para);
            $this->correo->subject($asunto);
            $this->correo->message($htmlContent);
            if($this->correo->send())
              {
                   
              }
    
              else
              {
                   show_error($this->correo->print_debugger());
              }
            }
    
}