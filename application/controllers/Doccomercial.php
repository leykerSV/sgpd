<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Doccomercial extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Doccomercial_model');
    }  

    /*
     * Editing a doccomercial
     */
    function edit($iddoccomercial)
    {   
        // check if the doccomercial exists before trying to edit it
        $data['doccomercial'] = $this->Doccomercial_model->get_doccomercial($iddoccomercial);

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
                    'aprobado' => 0
                );


                $this->Doccomercial_model->update_doccomercial($iddoccomercial,$params);  
                if (isset($_POST['completado'])){			
                    $htmlContent = '<h4>SISTEMA SGPd</h4>';
                    $htmlContent .= '<p>Se ha completado el Formulario de Documentación Fiscal y Comercial</p>';
                    $htmlContent .= 'Proveedor: '.$this->session->userdata('empresa');
                    $htmlContent .= '<p>Modulo Proveedores, SGPd</p>';
                    $this->notificarViaMail($this->config->item('emailbackoffice'),$htmlContent,'Formulario Doc. Comercial Completado');
                }          
                redirect('proveedores', 'refresh');
            }
            else
            {
                $data['_view'] = 'doccomercial/edit';
                $data['titulacion'] = 'Documentación Comercial';
                $data['mensaje']="La documentacion debe ser en PDF y pesar menos de 2 mb cada archivo";
                $this->load->view('template/header',$data);
                $this->load->view('layouts/main');
            }
        }
        else
            show_error('The doccomercial you are trying to edit does not exist.');
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

    function edit_prov($idproveedor)
    {   
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
                    'aprobado' => 0
                );


                $this->Doccomercial_model->update_doccomercial($iddoccomercial,$params);            
                redirect('proveedores', 'refresh');
            }
            else
            {
                $data['_view'] = 'doccomercial/edit';
                $data['titulacion'] = 'Documentación Comercial';
                $data['volver']="si";
				$data['aprove']="si";
                $data['mensaje']="La documentacion debe ser en PDF y pesar menos de 2 mb cada archivo";
                $this->load->view('template/header',$data);
                $this->load->view('layouts/main');
            }
        }
        else
            show_error('The doccomercial you are trying to edit does not exist.');
    }
    
}
