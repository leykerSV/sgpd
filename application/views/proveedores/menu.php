<h1>Menú de proveedores.</h1>
<?php 
    echo 'Empresa: '.$this->session->userdata('idproveedor').' - '.$this->session->userdata('empresa'); 
    echo '<br />';
    echo 'Contacto: '.$this->session->userdata('nombres').' '.$this->session->userdata('apellidos');
    echo '<br />';
    echo 'Rubro: '.$this->session->userdata('rubro').'   -   '.'SubRubro: '.$this->session->userdata('subrubro') ;
    echo '<br />';
    var_dump($this->session->userdata());
    $formfyc = $this->session->userdata('formulariofyc');
    foreach($formfyc as $item){
        echo $item->aprobado;
    }
?>

