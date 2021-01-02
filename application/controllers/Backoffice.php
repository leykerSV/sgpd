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
          $this->menu_backoffice('');
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

	public function busquedaproveedor (){
		$filtro=$_POST['filtro'];

		$this->menu_backoffice(NULL,$filtro);
	}

    public function menu_backoffice($linkdescarga=NULL,$filtro=NULL)
    {
      $this->check_log();
      $data['titulacion']="Listado de Proveedores";
	  $this->load->model('proveedore_model');    
	  if ($filtro==NULL){    
		  	$data['proveedor'] = $this->proveedore_model->get_all_proveedores_backoffice();
		} else {
			$data['proveedor'] = $this->proveedore_model->get_all_proveedores_filtrado($filtro);	
		}

      //$this->load->model('formulariofyc_model');   
			//$data['formfyc'] = $this->formulariofyc_model->get_formulariofyc_completo_aprobado();
	  $data['mensaje'] = '';
	  $data['linkdescarga']=$linkdescarga;
      $data['_view'] = 'backoffice/menu_backoffice';
      $this->load->view('template/header',$data);
	  $this->load->view('layouts/main');
	  
	}
	
	public function categorizar($idproveedor,$proveedor){
		$data['mensaje'] = '';
		$data['titulacion']="Categorizar Proveedores";
		$data['idproveedor']=$idproveedor;
		$data['proveedor']=$proveedor;
      	$data['_view'] = 'backoffice/categorizar';
      	$this->load->view('template/header',$data);
	  	$this->load->view('layouts/main');
	}

	public function categorizar_guarda($idproveedor){
		$this->load->model('Proveedordb');
		$this->Proveedordb->actualiza_categoria($idproveedor,$_POST['categoria']);
		$this->menu_backoffice('');
	}
   
    public function formulariofyc($idproveedor)
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
					'cuit' => $this->input->post('cuit'),
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

			if (null!==$this->input->post('provinciasalcanzadascmb')){
				foreach ($this->input->post('provinciasalcanzadascmb') as $seleccion){
					$pcias = $pcias.$seleccion.' , ';
				}
			}else{
				$pcias = $this->input->post('provinciasalcanzadas');	
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
			  $data['_view'] = 'backoffice/edit_t_bo';
			  $this->load->view('template/header',$data);
			  $this->load->view('layouts/main');
			  //$this->load->view('template/footer');
		  }
	  	}
		else
		{
			show_error('Error en el procesamiento.');
		}
    }

    public function doccomercial($idproveedor){
	  	$this->check_log();
	  	$this->load->model('Doccomercial_model');
		// check if the doccomercial exists before trying to edit it
        $data['doccomercial'] = $this->Doccomercial_model->get_doccomercial_idusuario($idproveedor);

        if(isset($data['doccomercial']['iddoccomercial']))
        {

            
            if(isset($_POST) && count($_POST) > 0)     
            {   
                //chdir('..');
                chdir('archivos');
                $directorio=getcwd()."/";
                
                $fecha = date_create();

                if ($_FILES['contratosocial']['name']==null){
                    $nombrearchivo=$data['doccomercial']['contratosocial'];         
                }else{
                    $fecha = date_create();
                    $extra=date_timestamp_get($fecha);
                    $fichero_subido = $directorio . $extra . basename($_FILES['contratosocial']['name']);
                    $nombrearchivo = $extra . basename($_FILES['contratosocial']['name']);
                    move_uploaded_file($_FILES['contratosocial']['tmp_name'], $fichero_subido);
                }
                $contratosocialar=$nombrearchivo;
                $fecha = date_create();
                if ($_FILES['inscripcion']['name']==null){
                    $nombrearchivo=$data['doccomercial']['inscripcion'];        
                }else{
                    $fecha = date_create();
                    $extra=date_timestamp_get($fecha);
                    $fichero_subido = $directorio . $extra . basename($_FILES['inscripcion']['name']);
                    $nombrearchivo = $extra . basename($_FILES['inscripcion']['name']);
                    move_uploaded_file($_FILES['inscripcion']['tmp_name'], $fichero_subido);
                }
                $inscripcionar=$nombrearchivo;
                $fecha = date_create();
                if ($_FILES['balance']['name']==null){
                    $nombrearchivo=$data['doccomercial']['inscripcion'];        
                }else{
                    $fecha = date_create();
                    $extra=date_timestamp_get($fecha);
                    $fichero_subido = $directorio . $extra . basename($_FILES['balance']['name']);
                    $nombrearchivo = $extra . basename($_FILES['balance']['name']);
                    move_uploaded_file($_FILES['balance']['tmp_name'], $fichero_subido);
                }
                $balancear=$nombrearchivo;
                $fecha = date_create();
                if ($_FILES['constanciaiibb']['name']==null){
                    $nombrearchivo=$data['doccomercial']['constanciaiibb'];         
                }else{
                    $fecha = date_create();
                    $extra=date_timestamp_get($fecha);
                    $fichero_subido = $directorio . $extra . basename($_FILES['constanciaiibb']['name']);
                    $nombrearchivo = $extra . basename($_FILES['constanciaiibb']['name']);
                    move_uploaded_file($_FILES['constanciaiibb']['tmp_name'], $fichero_subido);
                }
                $constanciaiibbar=$nombrearchivo;
                $fecha = date_create();
                if ($_FILES['constmonotributo']['name']==null){
                    $nombrearchivo=$data['doccomercial']['constmonotributo'];         
                }else{
                    $fecha = date_create();
                    $extra=date_timestamp_get($fecha);
                    $fichero_subido = $directorio . $extra . basename($_FILES['constmonotributo']['name']);
                    $nombrearchivo = $extra . basename($_FILES['constmonotributo']['name']);
                    move_uploaded_file($_FILES['constmonotributo']['tmp_name'], $fichero_subido);
                }
                $constmonotributoar=$nombrearchivo;
                $fecha = date_create();
                if ($_FILES['constmonotributoiibb']['name']==null){
                    $nombrearchivo=$data['doccomercial']['constmonotributoiibb'];         
                }else{
                    $fecha = date_create();
                    $extra=date_timestamp_get($fecha);
                    $fichero_subido = $directorio . $extra . basename($_FILES['constmonotributoiibb']['name']);
                    $nombrearchivo = $extra . basename($_FILES['constmonotributoiibb']['name']);
                    move_uploaded_file($_FILES['constmonotributoiibb']['tmp_name'], $fichero_subido);
                }
                $constmonotributoiibbar=$nombrearchivo;
                $fecha = date_create();
                if ($_FILES['formulariocm01']['name']==null){
                    $nombrearchivo=$data['doccomercial']['formulariocm01'];        
                }else{
                    $fecha = date_create();
                    $extra=date_timestamp_get($fecha);
                    $fichero_subido = $directorio . $extra . basename($_FILES['formulariocm01']['name']);
                    $nombrearchivo = $extra . basename($_FILES['formulariocm01']['name']);
                    move_uploaded_file($_FILES['formulariocm01']['tmp_name'], $fichero_subido);
                }
                $formulariocm01ar=$nombrearchivo;

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
					'idproveedor' => $this->input->post('idproveedor'),
					'contratosocial' => $contratosocialar,
					'inscripcion' => $inscripcionar,
					'balance' => $balancear,
					'constanciaiibb' => $constanciaiibbar,
					'constmonotributo' => $constmonotributoar,
                    'constmonotributoiibb' => $constmonotributoiibbar,
                    'formulariocm01' => $formulariocm01ar,
                    'completo' => $completado,
                    'aprobado' => $aprobado
                );
                $this->Doccomercial_model->update_doccomercial($data['doccomercial']['iddoccomercial'],$params);            
                redirect('backoffice/menu_backoffice', 'refresh');
            }
            else
            {
                $data['_view'] = 'backoffice/edit_doccom_bo';
                $data['titulacion'] = 'Documentación Comercial';
                $data['mensaje']="La documentacion debe ser en PDF y pesar menos de 2 mb cada archivo";
                $this->load->view('template/header',$data);
                $this->load->view('layouts/main');
            }
        }
        else
            show_error('Error en el procesamiento.');
    }


    public function docingreasoaobra($idproveedor){
	  $this->check_log();
	  $this->load->model('Docingresoobra_model');
	  // check if the doccomercial exists before trying to edit it
	  $data['docingresoobra'] = $this->Docingresoobra_model->get_docingresoobra($idproveedor);
	  $iddocingresoobra=$data['docingresoobra']['iddocingresoobra'];
	  if(isset($data['docingresoobra']['iddocingresoobra']))
	  {
		  if(isset($_POST) && count($_POST) > 0)  
		  {   
			  //chdir('..');
			  chdir('archivos');
			  $directorio=getcwd()."/";
			  
			  $fecha = date_create();
			  if ($_FILES['io1_1']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io1_1'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io1_1']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io1_1']['name']);
				  move_uploaded_file($_FILES['io1_1']['tmp_name'], $fichero_subido);
			  }
			  $io1_1=$nombrearchivo;
			  if ($_FILES['io1_2']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io1_2'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io1_2']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io1_2']['name']);
				  move_uploaded_file($_FILES['io1_2']['tmp_name'], $fichero_subido);
			  }
			  $io1_2=$nombrearchivo;
			  if ($_FILES['io1_3']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io1_3'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io1_3']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io1_3']['name']);
				  move_uploaded_file($_FILES['io1_3']['tmp_name'], $fichero_subido);
			  }
			  $io1_3=$nombrearchivo;
			  if ($_FILES['io1_4']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io1_4'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io1_4']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io1_4']['name']);
				  move_uploaded_file($_FILES['io1_4']['tmp_name'], $fichero_subido);
			  }
			  $io1_4=$nombrearchivo;
			  if ($_FILES['io1_5']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io1_5'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io1_5']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io1_5']['name']);
				  move_uploaded_file($_FILES['io1_5']['tmp_name'], $fichero_subido);
			  }
			  $io1_5=$nombrearchivo;
			  if ($_FILES['io1_6']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io1_6'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io1_6']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io1_6']['name']);
				  move_uploaded_file($_FILES['io1_6']['tmp_name'], $fichero_subido);
			  }
			  $io1_6=$nombrearchivo;
			  if ($_FILES['io1_7']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io1_7'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io1_7']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io1_7']['name']);
				  move_uploaded_file($_FILES['io1_7']['tmp_name'], $fichero_subido);
			  }
			  $io1_7=$nombrearchivo;

			  if ($_FILES['io2_1']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io2_1'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io2_1']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io2_1']['name']);
				  move_uploaded_file($_FILES['io2_1']['tmp_name'], $fichero_subido);
			  }
			  $io2_1=$nombrearchivo;
			  if ($_FILES['io2_2']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io2_2'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io2_2']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io2_2']['name']);
				  move_uploaded_file($_FILES['io2_2']['tmp_name'], $fichero_subido);
			  }
			  $io2_2=$nombrearchivo;
			  if ($_FILES['io2_3']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io2_3'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io2_3']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io2_3']['name']);
				  move_uploaded_file($_FILES['io2_3']['tmp_name'], $fichero_subido);
			  }
			  $io2_3=$nombrearchivo;

			  if ($_FILES['io3_1']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io3_1'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io3_1']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io3_1']['name']);
				  move_uploaded_file($_FILES['io3_1']['tmp_name'], $fichero_subido);
			  }
			  $io3_1=$nombrearchivo;
			  if ($_FILES['io3_2']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io3_2'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io3_2']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io3_2']['name']);
				  move_uploaded_file($_FILES['io3_2']['tmp_name'], $fichero_subido);
			  }
			  $io3_2=$nombrearchivo;
			  if ($_FILES['io3_3']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io3_3'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io3_3']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io3_3']['name']);
				  move_uploaded_file($_FILES['io3_3']['tmp_name'], $fichero_subido);
			  }
			  $io3_3=$nombrearchivo;
			  if ($_FILES['io3_4']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io3_4'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io3_4']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io3_4']['name']);
				  move_uploaded_file($_FILES['io3_4']['tmp_name'], $fichero_subido);
			  }
			  $io3_4=$nombrearchivo;

			  if ($_FILES['io4_1']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io4_1'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io4_1']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io4_1']['name']);
				  move_uploaded_file($_FILES['io4_1']['tmp_name'], $fichero_subido);
			  }
			  $io4_1=$nombrearchivo;
			  if ($_FILES['io4_2']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io4_2'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io4_2']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io4_2']['name']);
				  move_uploaded_file($_FILES['io4_2']['tmp_name'], $fichero_subido);
			  }
			  $io4_2=$nombrearchivo;
			  if ($_FILES['io4_3']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io4_3'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io4_3']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io4_3']['name']);
				  move_uploaded_file($_FILES['io4_3']['tmp_name'], $fichero_subido);
			  }
			  $io4_3=$nombrearchivo;
			  if ($_FILES['io4_4']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io4_4'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io4_4']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io4_4']['name']);
				  move_uploaded_file($_FILES['io4_4']['tmp_name'], $fichero_subido);
			  }
			  $io4_4=$nombrearchivo;
			  if ($_FILES['io4_5']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io4_5'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io4_5']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io4_5']['name']);
				  move_uploaded_file($_FILES['io4_5']['tmp_name'], $fichero_subido);
			  }
			  $io4_5=$nombrearchivo;

			  if ($_FILES['io5_1']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io5_1'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io5_1']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io5_1']['name']);
				  move_uploaded_file($_FILES['io5_1']['tmp_name'], $fichero_subido);
			  }
			  $io5_1=$nombrearchivo;
			  if ($_FILES['io5_2']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io5_2'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io5_2']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io5_2']['name']);
				  move_uploaded_file($_FILES['io5_2']['tmp_name'], $fichero_subido);
			  }
			  $io5_2=$nombrearchivo;
			  if ($_FILES['io5_3']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io5_3'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io5_3']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io5_3']['name']);
				  move_uploaded_file($_FILES['io5_3']['tmp_name'], $fichero_subido);
			  }
			  $io5_3=$nombrearchivo;
			  if ($_FILES['io5_4']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io5_4'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io5_4']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io5_4']['name']);
				  move_uploaded_file($_FILES['io5_4']['tmp_name'], $fichero_subido);
			  }
			  $io5_4=$nombrearchivo;
			  if ($_FILES['io5_5']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io5_5'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io5_5']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io5_5']['name']);
				  move_uploaded_file($_FILES['io5_5']['tmp_name'], $fichero_subido);
			  }
			  $io5_5=$nombrearchivo;
			  if ($_FILES['io5_6']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io5_6'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io5_6']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io5_6']['name']);
				  move_uploaded_file($_FILES['io5_6']['tmp_name'], $fichero_subido);
			  }
			  $io5_6=$nombrearchivo;
			  if ($_FILES['io5_7']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io5_7'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io5_7']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io5_7']['name']);
				  move_uploaded_file($_FILES['io5_7']['tmp_name'], $fichero_subido);
			  }
			  $io5_7=$nombrearchivo;
			  if ($_FILES['io5_8']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io5_8'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io5_8']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io5_8']['name']);
				  move_uploaded_file($_FILES['io5_8']['tmp_name'], $fichero_subido);
			  }
			  $io5_8=$nombrearchivo;
			  if ($_FILES['io5_9']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io5_9'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io5_9']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io5_9']['name']);
				  move_uploaded_file($_FILES['io5_9']['tmp_name'], $fichero_subido);
			  }
			  $io5_9=$nombrearchivo;
			  if ($_FILES['io5_10']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io5_10'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io5_10']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io5_10']['name']);
				  move_uploaded_file($_FILES['io5_10']['tmp_name'], $fichero_subido);
			  }
			  $io5_10=$nombrearchivo;
			  if ($_FILES['io5_11']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io5_11'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io5_11']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io5_11']['name']);
				  move_uploaded_file($_FILES['io5_11']['tmp_name'], $fichero_subido);
			  }
			  $io5_11=$nombrearchivo;

			  if ($_FILES['io6_1']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io6_1'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io6_1']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io6_1']['name']);
				  move_uploaded_file($_FILES['io6_1']['tmp_name'], $fichero_subido);
			  }
			  $io6_1=$nombrearchivo;
			  if ($_FILES['io6_2']['name']==null){
				  $nombrearchivo=$data['docingresoobra']['io6_2'];         
			  }else{
				  $fecha = date_create();
				  $extra=date_timestamp_get($fecha);
				  $fichero_subido = $directorio . $extra . basename($_FILES['io6_2']['name']);
				  $nombrearchivo = $extra . basename($_FILES['io6_2']['name']);
				  move_uploaded_file($_FILES['io6_2']['tmp_name'], $fichero_subido);
			  }
			  $io6_2=$nombrearchivo;

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
				  'idproveedor' => $idproveedor,
				  'io1_1' => $io1_1,
				  'io1_2' => $io1_2,
				  'io1_3' => $io1_3,
				  'io1_4' => $io1_4,
				  'io1_5' => $io1_5,
				  'io1_6' => $io1_6,
				  'io1_7' => $io1_7,

				  'io2_1' => $io2_1,
				  'io2_2' => $io2_2,
				  'io2_3' => $io2_3,
				  
				  'io3_1' => $io3_1,
				  'io3_2' => $io3_2,
				  'io3_3' => $io3_3,
				  'io3_4' => $io3_4,

				  'io4_1' => $io4_1,
				  'io4_2' => $io4_2,
				  'io4_3' => $io4_3,
				  'io4_4' => $io4_4,
				  'io4_5' => $io4_5,

				  'io5_1' => $io5_1,
				  'io5_2' => $io5_2,
				  'io5_3' => $io5_3,
				  'io5_4' => $io5_4,
				  'io5_5' => $io5_5,
				  'io5_6' => $io5_6,
				  'io5_7' => $io5_7,
				  'io5_8' => $io5_8,
				  'io5_9' => $io5_9,
				  'io5_10' => $io5_10,
				  'io5_11' => $io5_11,

				  'io6_1' => $io6_1,
				  'io6_2' => $io6_2,
				  'completo' => $completado,
				  'aprobado' => $aprobado

			  );
			  $this->Docingresoobra_model->update_docingresoobra($iddocingresoobra,$params);            
			  redirect('backoffice/menu_backoffice', 'refresh');
		  }
		  else
		  {
			  $data['_view'] = 'backoffice/edit_io_bo';
			  $data['titulacion'] = 'Documentación Ingreso a Obra';
			  $data['mensaje']="La documentacion debe ser en PDF y pesar menos de 2 mb cada archivo";
			  $this->load->view('template/header',$data);
			  $this->load->view('layouts/main');
		  }
	  }
	  else
		  show_error('Error en el proceso.');
    }

    public function docparacobranza($idproveedor){
      	$this->check_log();
		$this->load->model('Docpagos_model');
		$data['docpagos'] = $this->Docpagos_model->get_Docpagos($idproveedor);
        $indiceguarda=$data['docpagos']['iddocpagos'];
        if(isset($data['docpagos']['iddocpagos']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   if(isset($_POST['completado'])){
                $completado=1;
            } else {
                $completado=0;
            }
            if(isset($_POST['aprobado'])){
                $aprobado=1;
            } else {
                $aprobado=0;
            }

                //chdir('..');
                chdir('archivos');
                $directorio=getcwd()."/";
                
                $fecha = date_create();
                if ($_FILES['pago1_1']['name']==null){
                    $nombrearchivo=$data['docpagos']['pago1_1'];         
                }else{
                    $fecha = date_create();
                    $extra=date_timestamp_get($fecha);
                    $fichero_subido = $directorio . $extra . basename($_FILES['pago1_1']['name']);
                    $nombrearchivo = $extra . basename($_FILES['pago1_1']['name']);
                    move_uploaded_file($_FILES['pago1_1']['tmp_name'], $fichero_subido);
                }
                $pago1_1=$nombrearchivo;
                $fecha = date_create();
                if ($_FILES['pago1_2']['name']==null){
                    $nombrearchivo=$data['docpagos']['pago1_2'];         
                }else{        $indiceguardado=0;
                    $indiceguardado=$data['docpagos']['iddocpagos'];
                    $extra=date_timestamp_get($fecha);
                    $fichero_subido = $directorio . $extra . basename($_FILES['pago1_2']['name']);
                    $nombrearchivo = $extra . basename($_FILES['pago1_2']['name']);
                    move_uploaded_file($_FILES['pago1_2']['tmp_name'], $fichero_subido);
                }
                $pago1_2=$nombrearchivo;
                $fecha = date_create();
                if ($_FILES['pago1_3']['name']==null){
                    $nombrearchivo=$data['docpagos']['pago1_3'];         
                }else{
                    $fecha = date_create();
                    $extra=date_timestamp_get($fecha);
                    $fichero_subido = $directorio . $extra . basename($_FILES['pago1_3']['name']);
                    $nombrearchivo = $extra . basename($_FILES['pago1_3']['name']);
                    move_uploaded_file($_FILES['pago1_3']['tmp_name'], $fichero_subido);
                }
                $pago1_3=$nombrearchivo;
                $fecha = date_create();
                if ($_FILES['pago1_4']['name']==null){
                    $nombrearchivo=$data['docpagos']['pago1_4'];         
                }else{
                    $fecha = date_create();
                    $extra=date_timestamp_get($fecha);
                    $fichero_subido = $directorio . $extra . basename($_FILES['pago1_4']['name']);
                    $nombrearchivo = $extra . basename($_FILES['pago1_4']['name']);
                    move_uploaded_file($_FILES['pago1_4']['tmp_name'], $fichero_subido);
                }
                $pago1_4=$nombrearchivo;
                $fecha = date_create();
                if ($_FILES['pago1_5']['name']==null){
                    $nombrearchivo=$data['docpagos']['pago1_5'];         
                }else{
                    $fecha = date_create();
                    $extra=date_timestamp_get($fecha);
                    $fichero_subido = $directorio . $extra . basename($_FILES['pago1_5']['name']);
                    $nombrearchivo = $extra . basename($_FILES['pago1_5']['name']);
                    move_uploaded_file($_FILES['pago1_5']['tmp_name'], $fichero_subido);
                }
                $pago1_5=$nombrearchivo;
                $fecha = date_create();
                if ($_FILES['pago1_6']['name']==null){
                    $nombrearchivo=$data['docpagos']['pago1_6'];         
                }else{
                    $fecha = date_create();
                    $extra=date_timestamp_get($fecha);
                    $fichero_subido = $directorio . $extra . basename($_FILES['pago1_6']['name']);
                    $nombrearchivo = $extra . basename($_FILES['pago1_6']['name']);
                    move_uploaded_file($_FILES['pago1_6']['tmp_name'], $fichero_subido);
                }
                $pago1_6=$nombrearchivo;
                $fecha = date_create();
                if ($_FILES['pago1_7']['name']==null){
                    $nombrearchivo=$data['docpagos']['pago1_7'];         
                }else{
                    $fecha = date_create();
                    $extra=date_timestamp_get($fecha);
                    $fichero_subido = $directorio . $extra . basename($_FILES['pago1_7']['name']);
                    $nombrearchivo = $extra . basename($_FILES['pago1_7']['name']);
                    move_uploaded_file($_FILES['pago1_7']['tmp_name'], $fichero_subido);
                }
                $pago1_7=$nombrearchivo;
                $fecha = date_create();
                if ($_FILES['pago1_8']['name']==null){
                    $nombrearchivo=$data['docpagos']['pago1_8'];         
                }else{
                    $fecha = date_create();
                    $extra=date_timestamp_get($fecha);
                    $fichero_subido = $directorio . $extra . basename($_FILES['pago1_8']['name']);
                    $nombrearchivo = $extra . basename($_FILES['pago1_8']['name']);
                    move_uploaded_file($_FILES['pago1_8']['tmp_name'], $fichero_subido);
                }
                $pago1_8=$nombrearchivo;
                $fecha = date_create();
                if ($_FILES['pago1_9']['name']==null){
                    $nombrearchivo=$data['docpagos']['pago1_9'];         
                }else{
                    $fecha = date_create();
                    $extra=date_timestamp_get($fecha);
                    $fichero_subido = $directorio . $extra . basename($_FILES['pago1_9']['name']);
                    $nombrearchivo = $extra . basename($_FILES['pago1_9']['name']);
                    move_uploaded_file($_FILES['pago1_9']['tmp_name'], $fichero_subido);
                }
                $pago1_9=$nombrearchivo;
                $fecha = date_create();
                if ($_FILES['pago1_10']['name']==null){
                    $nombrearchivo=$data['docpagos']['pago1_10'];         
                }else{
                    $fecha = date_create();
                    $extra=date_timestamp_get($fecha);
                    $fichero_subido = $directorio . $extra . basename($_FILES['pago1_10']['name']);
                    $nombrearchivo = $extra . basename($_FILES['pago1_10']['name']);
                    move_uploaded_file($_FILES['pago1_10']['tmp_name'], $fichero_subido);
                }
                $pago1_10=$nombrearchivo;
                $fecha = date_create();
                if ($_FILES['pago2_1']['name']==null){
                    $nombrearchivo=$data['docpagos']['pago2_1'];         
                }else{
                    $fecha = date_create();
                    $extra=date_timestamp_get($fecha);
                    $fichero_subido = $directorio . $extra . basename($_FILES['pago2_1']['name']);
                    $nombrearchivo = $extra . basename($_FILES['pago2_1']['name']);
                    move_uploaded_file($_FILES['pago2_1']['tmp_name'], $fichero_subido);
                }
                $pago2_1=$nombrearchivo;
                $fecha = date_create();
                if ($_FILES['pago2_2']['name']==null){
                    $nombrearchivo=$data['docpagos']['pago2_2'];         
                }else{
                    $fecha = date_create();
                    $extra=date_timestamp_get($fecha);
                    $fichero_subido = $directorio . $extra . basename($_FILES['pago2_2']['name']);
                    $nombrearchivo = $extra . basename($_FILES['pago2_2']['name']);
                    move_uploaded_file($_FILES['pago2_2']['tmp_name'], $fichero_subido);
                }
                $pago2_2=$nombrearchivo;
                $fecha = date_create();
                if ($_FILES['pago2_3']['name']==null){
                    $nombrearchivo=$data['docpagos']['pago2_3'];         
                }else{
                    $fecha = date_create();
                    $extra=date_timestamp_get($fecha);
                    $fichero_subido = $directorio . $extra . basename($_FILES['pago2_3']['name']);
                    $nombrearchivo = $extra . basename($_FILES['pago2_3']['name']);
                    move_uploaded_file($_FILES['pago2_3']['tmp_name'], $fichero_subido);
                }
                $pago2_3=$nombrearchivo;
                $fecha = date_create();
                if ($_FILES['pago2_4']['name']==null){
                    $nombrearchivo=$data['docpagos']['pago2_4'];         
                }else{
                    $fecha = date_create();
                    $extra=date_timestamp_get($fecha);
                    $fichero_subido = $directorio . $extra . basename($_FILES['pago2_4']['name']);
                    $nombrearchivo = $extra . basename($_FILES['pago2_4']['name']);
                    move_uploaded_file($_FILES['pago2_4']['tmp_name'], $fichero_subido);
                }
                $pago2_4=$nombrearchivo;
                $fecha = date_create();
                if ($_FILES['pago3_1']['name']==null){
                    $nombrearchivo=$data['docpagos']['pago3_1'];         
                }else{
                    $fecha = date_create();
                    $extra=date_timestamp_get($fecha);
                    $fichero_subido = $directorio . $extra . basename($_FILES['pago3_1']['name']);
                    $nombrearchivo = $extra . basename($_FILES['pago3_1']['name']);
                    move_uploaded_file($_FILES['pago3_1']['tmp_name'], $fichero_subido);
                }
                $pago3_1=$nombrearchivo;
                $fecha = date_create();
                if ($_FILES['pago3_2']['name']==null){
                    $nombrearchivo=$data['docpagos']['pago3_2'];         
                }else{
                    $fecha = date_create();
                    $extra=date_timestamp_get($fecha);
                    $fichero_subido = $directorio . $extra . basename($_FILES['pago3_2']['name']);
                    $nombrearchivo = $extra . basename($_FILES['pago3_2']['name']);
                    move_uploaded_file($_FILES['pago3_2']['tmp_name'], $fichero_subido);
                }
                $pago3_2=$nombrearchivo;
                $fecha = date_create();
                if ($_FILES['pago4_1']['name']==null){
                    $nombrearchivo=$data['docpagos']['pago4_1'];         
                }else{
                    $fecha = date_create();
                    $extra=date_timestamp_get($fecha);
                    $fichero_subido = $directorio . $extra . basename($_FILES['pago4_1']['name']);
                    $nombrearchivo = $extra . basename($_FILES['pago4_1']['name']);
                    move_uploaded_file($_FILES['pago4_1']['tmp_name'], $fichero_subido);
                }
                $pago4_1=$nombrearchivo;
                $fecha = date_create();
                if ($_FILES['pago4_2']['name']==null){
                    $nombrearchivo=$data['docpagos']['pago4_2'];         
                }else{
                    $fecha = date_create();
                    $extra=date_timestamp_get($fecha);
                    $fichero_subido = $directorio . $extra . basename($_FILES['pago4_2']['name']);
                    $nombrearchivo = $extra . basename($_FILES['pago4_2']['name']);
                    move_uploaded_file($_FILES['pago4_2']['tmp_name'], $fichero_subido);
                }
                $pago4_2=$nombrearchivo;
                $fecha = date_create();
                if ($_FILES['pago4_3']['name']==null){
                    $nombrearchivo=$data['docpagos']['pago4_3'];         
                }else{
                    $fecha = date_create();
                    $extra=date_timestamp_get($fecha);
                    $fichero_subido = $directorio . $extra . basename($_FILES['pago4_3']['name']);
                    $nombrearchivo = $extra . basename($_FILES['pago4_3']['name']);
                    move_uploaded_file($_FILES['pago4_3']['tmp_name'], $fichero_subido);
                }
                $pago4_3=$nombrearchivo;

                $params = array(
                    'idproveedor' => $idproveedor,
                    'pago1_1' => $pago1_1,
                    'pago1_2' => $pago1_2,
                    'pago1_3' => $pago1_3,
                    'pago1_4' => $pago1_4,
                    'pago1_5' => $pago1_5,
                    'pago1_6' => $pago1_6,
                    'pago1_7' => $pago1_7,
                    'pago1_8' => $pago1_8,
                    'pago1_9' => $pago1_9,
                    'pago1_10' => $pago1_10,
                    'pago2_1' => $pago2_1,
                    'pago2_2' => $pago2_2,
                    'pago2_3' => $pago2_3,
                    'pago2_4' => $pago2_4,
                    'pago3_1' => $pago3_1,
                    'pago3_2' => $pago3_2,
                    'pago4_1' => $pago4_1,
                    'pago4_2' => $pago4_2,
                    'pago4_3' => $pago4_3,
                    'aprobado' => $aprobado,
                    'completo' => $completado
                );
                $this->Docpagos_model->update_Docpagos($indiceguarda,$params);            
                redirect('backoffice/menu_backoffice', 'refresh');
            }
            else
            {
                $data['_view'] = 'backoffice/edit_dc_bo';
                $data['titulacion'] = 'Documentación Para Pagos';
                $data['mensaje']="La documentacion debe ser en PDF y pesar menos de 2 mb cada archivo";
                $this->load->view('template/header',$data);
                $this->load->view('layouts/main');
            }
        }
        else
            show_error('Error!');
	}
	
	public function exportacion(){
		$this->check_log();
		$this->load->model('Proveedordb');
		$cadena="Select * from cocyar_sgpd.proveedores
		inner join cocyar_sgpd.formulariofyc fyc on cocyar_sgpd.proveedores.idproveedor = fyc.idproveedor 
		inner join cocyar_sgpd.formulariot t on proveedores.idproveedor = t.idproveedor INTO OUTFILE ";

		$archivo = $this->Proveedordb->exporta($cadena);
		$descarga='/var/lib/mysql-files/'.$archivo;
		$linkdescarga='<a class="" title="Descargar Archivo" href="'. $descarga .'" download="'.$descarga.'" >Descargar Excel</a>';
		$this->menu_backoffice($linkdescarga);	
	}

}