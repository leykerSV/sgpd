<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Docpagos extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Docpagos_model');
    }  

    /*
     * Editing a doccomercial
     */
    function edit($idproveedor)
    {   
        // check if the doccomercial exists before trying to edit it
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
                    'aprobado' => 0,
                    'completo' => $completado
                );
                $this->Docpagos_model->update_Docpagos($indiceguarda,$params);  
                if (isset($_POST['completado'])){			
                    $htmlContent = '<h4>SISTEMA SGPd</h4>';
                    $htmlContent .= '<p>Se ha completado el Formulario Documentación para Pagos</p>';
                    $htmlContent .= 'Proveedor: '.$this->session->userdata('empresa');
                    $htmlContent .= '<p>Modulo Proveedores, SGPd</p>';
                    $this->notificarViaMail($this->config->item('emailbackoffice'),$htmlContent,'Formulario Doc. Para Pagos Completado');
                }          
                redirect('proveedores', 'refresh');
            }
            else
            {
                $data['_view'] = 'docpagos/edit';
                $data['titulacion'] = 'Documentación Para Pagos';
                $data['mensaje']="La documentacion debe ser en PDF y pesar menos de 2 mb cada archivo";
                $this->load->view('template/header',$data);
                $this->load->view('layouts/main');
            }
        }
        else
            show_error('Error!');
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
        $data['docpagos'] = $this->Docpagos_model->get_docpagos($idproveedor);

        if(isset($data['docpagos']['iddocpagos']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
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
                    'pago4_3' => $pago4_3
                );

                $this->docpagos_model->update_docpagos($iddocpagos,$params);            
                redirect('proveedores', 'refresh');
            }
            else
            {
                $data['_view'] = 'docpagos/edit';
                $data['titulacion'] = 'Documentación Para Pagos';
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
