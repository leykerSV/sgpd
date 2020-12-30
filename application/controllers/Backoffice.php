<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backoffice extends CI_Controller {

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
		$this->load->view('login/loginbackoffice');
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
          $this->menu_backoffice();
        }else{
          $this->session->set_flashdata('error_msg', 'Error al loguearse. Verifique los datos.');
          redirect(base_url(), 'refresh');
        }
    }
	
	function check_database()
    {
      $this->load->model('userdb'); 
      //Field validation succeeded.  Validate against database
      $username = $this->input->post('username');
      $password=$this->input->post('password');
      //query the database
      $result = $this->userdb->login($username, $password);

      if($result)
      {
        $sess_array = array();
        //$this->load->model('userdb',true);
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


    public function menu_backoffice()
    {
      $this->check_log();
      $data['titulacion']="Listado de Proveedores";
      $this->load->model('proveedore_model');        
      $data['proveedor'] = $this->proveedore_model->get_all_proveedores_backoffice();
      //$this->load->model('formulariofyc_model');   
			//$data['formfyc'] = $this->formulariofyc_model->get_formulariofyc_completo_aprobado();
      $data['mensaje'] = '';
      $data['_view'] = 'backoffice/menu_backoffice';
      $this->load->view('template/header',$data);
      $this->load->view('layouts/main');
    }
   
    function formulariofyc($idproveedor)
    {   
      $this->check_log();  
      $this->load->model('Formulariofyc_model');
      // check if the formulariofyc exists before trying to edit it
        $data['formulariofyc'] = $this->Formulariofyc_model->get_formulariofyc_prov($idproveedor);
        
        if(isset($data['formulariofyc']['idformulariofyc']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
				if(isset($_POST['completado'])){
					$completado=1;
				} else {
					$completado=0;
				}
				if(isset($_POST['aprobado'])){
					$aprobado=1;
				} else {
					$aprobado=0;
				}
                $params = array(
					'categoriafiscal' => $this->input->post('categoriafiscal'),
					'idproveedor' => $this->input->post('idproveedor'),
					'identificaciontributaria' => $this->input->post('identificaciontributaria'),
					'numidentificacion' => $this->input->post('numidentificacion'),
					'identtribpaisorigen' => $this->input->post('identtribpaisorigen'),
					'tipopersona' => $this->input->post('tipopersona'),
					'catsiap' => $this->input->post('catsiap'),
					'motivobaja' => $this->input->post('motivobaja'),
					'fechaconstitucion' => $this->input->post('fechaconstitucion'),
					'banco' => $this->input->post('banco'),
					'sucursalbanco' => $this->input->post('sucursalbanco'),
					'tipocuenta' => $this->input->post('tipocuenta'),
					'cbu' => $this->input->post('cbu'),
					'beneficiariochq' => $this->input->post('beneficiariochq'),
					'situacioniibb' => $this->input->post('situacioniibb'),
					'numinscripiibb' => $this->input->post('numinscripiibb'),
					'porcret' => $this->input->post('porcret'),
					'ganancias' => $this->input->post('ganancias'),
					'suss' => $this->input->post('suss'),
					'agentepercepcioniva' => $this->input->post('agentepercepcioniva'),
					'agentepercepcionivares' => $this->input->post('agentepercepcionivares'),
					'agentepercepcionivaali' => $this->input->post('agentepercepcionivaali'),
					'agentepercepcioniibb1' => $this->input->post('agentepercepcioniibb1'),
					'agentepercepcioniibb1pcia' => $this->input->post('agentepercepcioniibb1pcia'),
					'agentepercepcioniibb1ali' => $this->input->post('agentepercepcioniibb1ali'),
					'agentepercepcioniibb2' => $this->input->post('agentepercepcioniibb2'),
					'agentepercepcioniibb2pcia' => $this->input->post('agentepercepcioniibb2pcia'),
					'agentepercepcioniibb2ali' => $this->input->post('agentepercepcioniibb2ali'),
					'agentepercepcioniibb3' => $this->input->post('agentepercepcioniibb3'),
					'agentepercepcioniibb3pcia' => $this->input->post('agentepercepcioniibb3pcia'),
					'agentepercepcioniibb3ali' => $this->input->post('agentepercepcioniibb3ali'),
					'agenteretgcias' => $this->input->post('agenteretgcias'),
					'agenteretgciasres' => $this->input->post('agenteretgciasres'),
					'agenteretgciasiibb' => $this->input->post('agenteretgciasiibb'),
					'agenteretgciasiibbres' => $this->input->post('agenteretgciasiibbres'),
					'agenteretgciassuss' => $this->input->post('agenteretgciassuss'),
					'agenteretgciassussres' => $this->input->post('agenteretgciassussres'),
					'agenteretgciasivares' => $this->input->post('agenteretgciasivares'),
					'factultimocierre' => $this->input->post('factultimocierre'),
					'factanteultimocierre' => $this->input->post('factanteultimocierre'),
					'factantepenultimocierre' => $this->input->post('factantepenultimocierre'),
					'refcom1' => $this->input->post('refcom1'),
					'refcom1contacto' => $this->input->post('refcom1contacto'),
					'refcom1tel' => $this->input->post('refcom1tel'),
					'refcom2' => $this->input->post('refcom2'),
					'refcom2contacto' => $this->input->post('refcom2contacto'),
					'refcom2tel' => $this->input->post('refcom2tel'),
					'refcom3' => $this->input->post('refcom3'),
					'refcom3contacto' => $this->input->post('refcom3contacto'),
					'refcom3tel' => $this->input->post('refcom3tel'),
					'areacontabletel' => $this->input->post('areacontabletel'),
					'areacontablemail' => $this->input->post('areacontablemail'),
					'areacontablehorario' => $this->input->post('areacontablehorario'),
					'areapagostel' => $this->input->post('areapagostel'),
					'areapagosmail' => $this->input->post('areapagosmail'),
					'areapagoshorario' => $this->input->post('areapagoshorario'),
					'otrasareastel' => $this->input->post('otrasareastel'),
					'otrasareasmail' => $this->input->post('otrasareasmail'),
					'otrasareashorario' => $this->input->post('otrasareashorario'),
					'aprobado' => $aprobado,
					'completo' => $completado
                );

                $this->Formulariofyc_model->update_formulariofyc($data['formulariofyc']['idformulariofyc'],$params);            
                redirect('backoffice/menu_backoffice', 'refresh');
            }
            else
            {
				$data['titulacion']="Formulario Fiscal y Comercial.";
				$data['mensaje']="";
				$data['esproveedor'] = 'NO';
				$data['_view'] = 'backoffice/edit_fyc_bo';
				$this->load->view('template/header',$data);
                $this->load->view('layouts/main');
            }
        }
        else
            show_error('The formulariofyc you are trying to edit does not exist.');
    }
    

    public function formulariot($idproveedor){
	  $this->check_log();
	  $this->load->model('Formulariot_model');
	  // check if the formulariot exists before trying to edit it
	  $data['formulariot'] = $this->Formulariot_model->get_formulariot_prov($idproveedor);
	  $data['provincias'] = $this->Formulariot_model->get_all_provincias();

	  if(isset($data['formulariot']['idformularioT']))
	  {
		  $pcias='';
		  if(isset($_POST) && count($_POST) > 0)     
		  {   

			  foreach ($this->input->post('provinciasalcanzadascmb') as $seleccion){
				  $pcias = $pcias.$seleccion.' , ';
			  }
			  if(isset($_POST['completado'])){
				  $completado=1;
			  } else {
				  $completado=0;
			  }
			  if(isset($_POST['aprobado'])){
				  $aprobado=1;
			  } else {
				  $aprobado=0;
			  }
				 $params = array(
				  'actividadpcipal' => $this->input->post('actividadpcipal'),
				  'obras1tipo' => $this->input->post('obras1tipo'),
				  'obras2tipo' => $this->input->post('obras2tipo'),
				  'obras3tipo' => $this->input->post('obras3tipo'),
				  'idproveedor' => $this->input->post('idproveedor'),
				  'lugarservicios' => $this->input->post('lugarservicios'),
				  'provinciasalcanzadas' => $pcias,
				  'reptecnico' => $this->input->post('reptecnico'),
				  'profesion' => $this->input->post('profesion'),
				  'cantidadpersonal' => $this->input->post('cantidadpersonal'),
				  'cantpersonaladmin' => $this->input->post('cantpersonaladmin'),
				  'cantpersonalprof' => $this->input->post('cantpersonalprof'),
				  'cantpersonalobra' => $this->input->post('cantpersonalobra'),
				  'certificaciones' => $this->input->post('certificaciones'),
				  'obras1' => $this->input->post('obras1'),
				  'obras1empresa' => $this->input->post('obras1empresa'),
				  'obras1contacto' => $this->input->post('obras1contacto'),
				  'obras1telefono' => $this->input->post('obras1telefono'),
				  'obras2' => $this->input->post('obras2'),
				  'obras2empresa' => $this->input->post('obras2empresa'),
				  'obras2contacto' => $this->input->post('obras2contacto'),
				  'obras2telefono' => $this->input->post('obras2telefono'),
				  'obras3' => $this->input->post('obras3'),
				  'obras3empresa' => $this->input->post('obras3empresa'),
				  'obras3contacto' => $this->input->post('obras3contacto'),
				  'obras3telefono' => $this->input->post('obras3telefono'),
				  'ordenylimpiezaobra' => $this->input->post('ordenylimpiezaobra'),
				  'calidamaterialesequipos' => $this->input->post('calidamaterialesequipos'),
				  'cumplimientonormashys' => $this->input->post('cumplimientonormashys'),
				  'cumplimientoplazos' => $this->input->post('cumplimientoplazos'),
				  'atencionprofdurante' => $this->input->post('atencionprofdurante'),
				  'monto1' => $this->input->post('monto1'),
				  'monto2' => $this->input->post('monto2'),
				  'monto3' => $this->input->post('monto3'),
				  'flotavehiculosutilitarios' => $this->input->post('flotavehiculosutilitarios'),
				  'flotavehiculoscarga' => $this->input->post('flotavehiculoscarga'),
				  'flotavehiculostripulados' => $this->input->post('flotavehiculostripulados'),
				  'aprobado' => $aprobado,
				  'completo' => $completado,
				  'provinciasalcanzadas' => $this->input->post('provinciasalcanzadas'),
				  'fortalezas' => $this->input->post('fortalezas'),
				  'certificadosdocumento' => $this->input->post('certificadosdocumento'),
			  );

			  $this->Formulariot_model->update_formulariot($data['formulariot']['idformularioT'],$params);            
			  redirect('backoffice/menu_backoffice', 'refresh');
		  }
		  else
		  {
			  $data['titulacion']="Formulario Técnico";
			  $data['mensaje']="";
			  $data['_view'] = 'formulariot/edit';
			  $this->load->view('template/header',$data);
			  $this->load->view('layouts/main');
			  //$this->load->view('template/footer');
		  }
	  	}
		else
		{
			show_error('The formulariot you are trying to edit does not exist.');
		}
    }

    public function doccomercial($idproveedor){
      $this->check_log();

    }

    public function docparacobranza($idproveedor){
      $this->check_log();

    }

    public function docingresobra($idproveedor){
      $this->check_log();

    }

}