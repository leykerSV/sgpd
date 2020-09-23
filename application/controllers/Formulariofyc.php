<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Formulariofyc extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Formulariofyc_model');
    }

    /*
     * Adding a new formulariofyc
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
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
				'aprobado' => $this->input->post('aprobado'),
				'completo' => $this->input->post('completo'),
            );
            
            $formulariofyc_id = $this->Formulariofyc_model->add_formulariofyc($params);
            redirect('proveedores', 'refresh');
        }
        else
        {            
			$data['_view'] = 'formulariofyc/add';
			$this->load->view('template/header',$data);
            $this->load->view('layouts/main');
        }
    }  

    /*
     * Editing a formulariofyc
     */
    function edit($idformulariofyc)
    {   
        // check if the formulariofyc exists before trying to edit it
        $data['formulariofyc'] = $this->Formulariofyc_model->get_formulariofyc($idformulariofyc);
        
        if(isset($data['formulariofyc']['idformulariofyc']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
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
					'aprobado' => $this->input->post('aprobado'),
					'completo' => $this->input->post('completo'),
                );

                $this->Formulariofyc_model->update_formulariofyc($idformulariofyc,$params);            
                redirect('proveedores', 'refresh');
            }
            else
            {
				$data['_view'] = 'formulariofyc/edit';
				$this->load->view('template/header',$data);
                $this->load->view('layouts/main');
            }
        }
        else
            show_error('The formulariofyc you are trying to edit does not exist.');
    }
}
