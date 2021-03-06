<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Proveedor extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Proveedore_model');
    }

    /*
     * Adding a new proveedor
     */
    function add()
    {   
		$this->load->library('form_validation');
		$data['subrubros'] = $this->Proveedore_model->get_all_subrubros();

		$this->form_validation->set_rules('empresa','Empresa','required');
		$this->form_validation->set_rules('contacto','Contacto','required');
		$this->form_validation->set_rules('pass','Pass','required');
		$this->form_validation->set_rules('usuario','Usuario','required');
		$this->form_validation->set_rules('mail','Mail','required');
		
		if($this->form_validation->run())     
        {   
			$subr ="";
			if (null!==$this->input->post('subrubrocmb')){
				foreach ($this->input->post('subrubrocmb') as $seleccion){
					$subr = $subr.$seleccion.' , ';
				}
			}else{
				$subr = $this->input->post('subrubro');	
			}
            $params = array(
				'rubro' => $this->input->post('rubro'),
				'pass' => MD5($this->input->post('pass')),
				'empresa' => $this->input->post('empresa'),
				'usuario' => $this->input->post('usuario'),
				'apellidos' => $this->input->post('apellidos'),
				'nombres' => $this->input->post('nombres'),
				'direccion' => $this->input->post('direccion'),
				'cargo' => $this->input->post('cargo'),
				'telefono' => $this->input->post('telefono'),
				'mail' => $this->input->post('mail'),
				'subrubro' => $subr,
				'ciudad' => $this->input->post('ciudad'),
				'web' => $this->input->post('web'),
				'observaciones' => $this->input->post('observaciones'),
				'contacto' => $this->input->post('contacto'),
				'activo' => 1,
				'categoria' => $this->input->post('categoria'),
				'condicion' => $this->input->post('condicion'),
				'empleador' => $this->input->post('empleador'),
				'tipo' => $this->input->post('tipo')
            );
            
			$proveedor_id = $this->Proveedore_model->add_proveedor($params);
			$vv=$proveedor_id;
			if ($proveedor_id=!NULL){
				$formulariossale = $this->Proveedore_model->add_formularios($vv);
			}
			$htmlContent = '<h4>SISTEMA SGPd</h4>';
            $htmlContent .= '<p>Usted se ha dado de alta como Proveedor de Cocyar S.A.</p>';
			$htmlContent .= 'Por favor, recuerde completar los formularios correspondientes';
			$htmlContent .= ' y realizar la carga de los documentos adecuados.';
            $htmlContent .= '<p>Modulo Proveedores, SGPd</p>';
            $this->notificarViaMail($this->input->post('mail'),$htmlContent,'Alta Proveedor. SGPd - Cocyar S.A.');

            redirect('login');
        }
        else
        {            
			$data['titulacion']="Alta Proveedor";
			$data['mensaje']="";
            $data['_view'] = 'proveedore/add';
            $this->load->view('template/header',$data);
            $this->load->view('layouts/main');
        }
    }  

	function notificarViaMail($destinatario, $cuerpomail, $asunto) {
           
        $this->load->library('email','','correo');

        $this->correo->from($this->config->item('emailsistema'), $this->config->item('nombresistema'));
        $this->correo->to($destinatario);
        $this->correo->subject($asunto);
        $this->correo->message($cuerpomail);
        if($this->correo->send())
        {
               
        }

        else
        {
            show_error($this->correo->print_debugger());
        }
    }

    /*
     * Editing a proveedor
     */
    function edit($idproveedor)
    {   
        // check if the proveedor exists before trying to edit it
        $data['proveedor'] = $this->Proveedore_model->get_proveedor($idproveedor);
        
        if(isset($data['proveedor']['idproveedor']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('empresa','Empresa','required');
			$this->form_validation->set_rules('contacto','Contacto','required');
			$this->form_validation->set_rules('pass','Pass','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'rubro' => $this->input->post('rubro'),
					'pass' => $this->input->post('pass'),
					'empresa' => $this->input->post('empresa'),
					'apellidos' => $this->input->post('apellidos'),
					'nombres' => $this->input->post('nombres'),
					'direccion' => $this->input->post('direccion'),
					'telefono' => $this->input->post('telefono'),
					'mail' => $this->input->post('mail'),
					'subrubro' => $this->input->post('subrubro'),
					'ciudad' => $this->input->post('ciudad'),
					'cargo' => $this->input->post('cargo'),
					'web' => $this->input->post('web'),
					'observaciones' => $this->input->post('observaciones'),
					'contacto' => $this->input->post('contacto'),
					'activo' => $this->input->post('activo'),
					'categoria' => $this->input->post('categoria')
                );

                $this->Proveedore_model->update_proveedor($idproveedor,$params);            
                redirect('default_controller');
            }
            else
            {
				$data['titulacion']="Modificacion Proveedor";
				$data['mensaje']="";
                $data['_view'] = 'proveedore/edit';
                $this->load->view('template/header',$data);
            	$this->load->view('layouts/main');
            }
        }
        else
            show_error('The proveedor you are trying to edit does not exist.');
    }
}
