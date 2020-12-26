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
    function edit($iddocpagos)
    {   
        // check if the doccomercial exists before trying to edit it
        $data['docpagos'] = $this->Docpagos_model->get_docpagos($iddocpagos);
        
        if(isset($data['docpagos']['iddocpagos']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
                    'idproveedor' => $this->input->post('idproveedor'),
                    'pago1.1' => $this->input->post('pago1.1'),
                    'pago1.2' => $this->input->post('pago1.2'),
                    'pago1.3' => $this->input->post('pago1.3'),
                    'pago1.4' => $this->input->post('pago1.4'),
                    'pago1.5' => $this->input->post('pago1.5'),
                    'pago1.6' => $this->input->post('pago1.6'),
                    'pago1.7' => $this->input->post('pago1.7'),
                    'pago1.8' => $this->input->post('pago1.8'),
                    'pago1.9' => $this->input->post('pago1.9'),
                    'pago1.10' => $this->input->post('pago1.10'),
                    'pago2.1' => $this->input->post('pago2.1'),
                    'pago2.2' => $this->input->post('pago2.2'),
                    'pago2.3' => $this->input->post('pago2.3'),
                    'pago2.4' => $this->input->post('pago2.4'),
                    'pago3.1' => $this->input->post('pago3.1'),
                    'pago3.2' => $this->input->post('pago3.2'),
                    'pago4.1' => $this->input->post('pago4.1'),
                    'pago4.2' => $this->input->post('pago4.2'),
                    'pago4.3' => $this->input->post('pago4.3')
                );

                $this->docpagos_model->update_docpagos($iddocpagos,$params);            
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
            show_error('The doccomercial you are trying to edit does not exist.');
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
                    'idproveedor' => $this->input->post('idproveedor'),
                    'pago1.1' => $this->input->post('pago1.1'),
                    'pago1.2' => $this->input->post('pago1.2'),
                    'pago1.3' => $this->input->post('pago1.3'),
                    'pago1.4' => $this->input->post('pago1.4'),
                    'pago1.5' => $this->input->post('pago1.5'),
                    'pago1.6' => $this->input->post('pago1.6'),
                    'pago1.7' => $this->input->post('pago1.7'),
                    'pago1.8' => $this->input->post('pago1.8'),
                    'pago1.9' => $this->input->post('pago1.9'),
                    'pago1.10' => $this->input->post('pago1.10'),
                    'pago2.1' => $this->input->post('pago2.1'),
                    'pago2.2' => $this->input->post('pago2.2'),
                    'pago2.3' => $this->input->post('pago2.3'),
                    'pago2.4' => $this->input->post('pago2.4'),
                    'pago3.1' => $this->input->post('pago3.1'),
                    'pago3.2' => $this->input->post('pago3.2'),
                    'pago4.1' => $this->input->post('pago4.1'),
                    'pago4.2' => $this->input->post('pago4.2'),
                    'pago4.3' => $this->input->post('pago4.3')
                );

                $this->docpagos_model->update_docpagos($iddocpagos,$params);            
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
            show_error('The doccomercial you are trying to edit does not exist.');
    }
}
