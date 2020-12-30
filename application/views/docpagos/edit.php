<?php echo form_open_multipart('docpagos/edit/'.$docpagos['idproveedor'],array("class"=>"form-horizontal")); ?>

<style>
    .bg-info {
        background-color: #4563ab !important;
		
    }
</style>
<div class="container text-center">
    <!--<div class="col text-center">
        <img src="COCYAR.png" class="img-fluid" alt="Responsive image">
    </div>-->
    <div class="mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 bg-info d-flex justify-content-center align-items-center p-3">
                    <h4 class="text-white">EMPRESA CON EMPLEADOS RELAC DEPENDENCIA</h4>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
						<div class="col-md-9">
							<span class="label other">Formulario 931 y presentación del mismo en AFIP</span><input type="file" accept=".pdf" name="pago1_1" value="<?php //echo ($this->input->post('pago1_1') ? $this->input->post('pago1_1') : $docpago['pago1_1']); ?>" class="form-control" id="pago1_1" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docpagos['pago1_1'], 'Ver Archivo en Linea', ''); ?>
                        </div>
						<div class="col-md-9">
							<span class="label other">Pagos de los aportes y contribuciones a la Seguridad Social, Obra Social, ART. y SCVO, como así también nómina de los empleados según F. 931 de AFIP</span><input type="file" accept=".pdf" name="pago1_2" value="<?php //echo ($this->input->post('pago1_2') ? $this->input->post('pago1_2') : $docpago['pago1_1']); ?>" class="form-control" id="pago1_2" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docpagos['pago1_2'], 'Ver Archivo en Linea', ''); ?>
                        </div>
                        <div class="col-md-9">
							<span class="label other">Planilla entrada y salida del personal de obra</span><input type="file" accept=".pdf" name="pago1_3" value="<?php //echo ($this->input->post('pago1_3') ? $this->input->post('pago1_3') : $docpago['pago1_3']); ?>" class="form-control" id="pago1_3" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docpagos['pago1_3'], 'Ver Archivo en Linea', ''); ?>
                        </div>
                        <div class="col-md-9">
							<span class="label other">Fotocopia recibos de sueldo de los empleados, acreditación en cuenta bancaria o telegrama para cobrar en efectivo</span><input type="file" accept=".pdf" name="pago1_4" value="<?php //echo ($this->input->post('pago1_4') ? $this->input->post('pago1_4') : $docpago['pago1_4']); ?>" class="form-control" id="pago1_4" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docpagos['pago1_4'], 'Ver Archivo en Linea', ''); ?>
                        </div>
                        <div class="col-md-9">
							<span class="label other">Certificado de cobertura de ART, con nomina de personal a cubrir. Incluir Clausula de no repetición a favor del Comitente y de Cocyar S.A. CUIT 30-68697101-1</span><input type="file" accept=".pdf" name="pago1_5" value="<?php //echo ($this->input->post('pago1_5') ? $this->input->post('pago1_5') : $docpago['pago1_5']); ?>" class="form-control" id="pago1_5" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docpagos['pago1_5'], 'Ver Archivo en Linea', ''); ?>    
                        </div>
                        <div class="col-md-9">
							<span class="label other">Certificado de cobertura de SCVO, con nomina de personal afecatado a obra</span><input type="file" accept=".pdf" name="pago1_6" value="<?php //echo ($this->input->post('pago1_6') ? $this->input->post('pago1_6') : $docpago['pago1_6']); ?>" class="form-control" id="pago1_6" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docpagos['pago1_6'], 'Ver Archivo en Linea', ''); ?>
                        </div>
                        <div class="col-md-9">
							<span class="label other">Copia de Gestión de Higiene y Seguridad. Constancia de visitas a obra y cumplimiento de horas profesionales semanales del responsable de Higiene y Seguridad. Copia de las capacitaciones dictadas.</span><input type="file" accept=".pdf" name="pago1_7" value="<?php //echo ($this->input->post('pago1_7') ? $this->input->post('pago1_7') : $docpago['pago1_7']); ?>" class="form-control" id="pago1_7" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docpagos['pago1_7'], 'Ver Archivo en Linea', ''); ?>
                        </div>
                        <div class="col-md-9">
							<span class="label other">Pago de fondo de desempleo</span><input type="file" accept=".pdf" name="pago1_8" value="<?php //echo ($this->input->post('pago1_8') ? $this->input->post('pago1_8') : $docpago['pago1_8']); ?>" class="form-control" id="pago1_8" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docpagos['pago1_8'], 'Ver Archivo en Linea', ''); ?>
                        </div>
                        <div class="col-md-9">
							<span class="label other">Pago de cuota sindical</span><input type="file" accept=".pdf" name="pago1_9" value="<?php //echo ($this->input->post('pago1_9') ? $this->input->post('pago1_9') : $docpago['pago1_9']); ?>" class="form-control" id="pago1_9" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docpagos['pago1_9'], 'Ver Archivo en Linea', ''); ?>
                        </div>
                        <div class="col-md-9">
							<span class="label other">Pago mensual al I.E.R.I.C</span><input type="file" accept=".pdf" name="pago1_10" value="<?php //echo ($this->input->post('pago1_10') ? $this->input->post('pago1_10') : $docpago['pago1_10']); ?>" class="form-control" id="pago1_10" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docpagos['pago1_10'], 'Ver Archivo en Linea', ''); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 bg-info d-flex justify-content-center align-items-center p-3">
                    <h4 class="text-white">AUTONOMO / MONOTRIBUTISTA</h4>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
                    <div class="col-md-9">
							<span class="label other">Pago de autónomo o de monotributo</span><input type="file" accept=".pdf" name="pago2_1" value="<?php //echo ($this->input->post('pago2_1') ? $this->input->post('pago2_1') : $docpago['pago2_1']); ?>" class="form-control" id="pago2_1" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docpagos['pago2_1'], 'Ver Archivo en Linea', ''); ?>
                        </div>
                        <div class="col-md-9">
							<span class="label other">Pago de seguro de accidente personales</span><input type="file" accept=".pdf" name="pago2_2" value="<?php //echo ($this->input->post('pago2_2') ? $this->input->post('pago2_2') : $docpago['pago2_2']); ?>" class="form-control" id="pago2_2" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docpagos['pago2_2'], 'Ver Archivo en Linea', ''); ?>
                        </div>
                        <div class="col-md-9">
							<span class="label other">Pago de seguro de vehículos incorporados a la obra</span><input type="file" accept=".pdf" name="pago2_3" value="<?php //echo ($this->input->post('pago2_3') ? $this->input->post('pago2_3') : $docpago['pago2_3']); ?>" class="form-control" id="pago2_3" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docpagos['pago2_3'], 'Ver Archivo en Linea', ''); ?>
                        </div>
                        <div class="col-md-9">
							<span class="label other">Copia de la Gestión de Seguridad e Higiene. Constancias de Visitas a obra y cumplimiento de horas profesionales del resp. De HyS.  Copia de capacitaciones dictadas en el proyecto.</span><input type="file" accept=".pdf" name="pago2_4" value="<?php //echo ($this->input->post('pago2_4') ? $this->input->post('pago2_4') : $docpago['pago2_4']); ?>" class="form-control" id="pago2_4" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docpagos['pago2_4'], 'Ver Archivo en Linea', ''); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 bg-info d-flex justify-content-center align-items-center p-3">
                    <h4 class="text-white">Vehículos y Máquinas - Puede ser que No Aplique</h4>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        <div class="col-md-9">
							<span class="label other">Pago del Seguro de RC de vehículos y maquinas incorporadas a obra</span><input type="file" accept=".pdf" name="pago3_1" value="<?php //echo ($this->input->post('pago3_1') ? $this->input->post('pago3_1') : $docpago['pago3_1']); ?>" class="form-control" id="pago3_1" />
                           <?php echo anchor_popup(base_url().'archivos/'.$docpagos['pago3_1'], 'Ver Archivo en Linea', ''); ?>
                        </div>
                        <div class="col-md-9">
							<span class="label other">Pago del Seguro Tecnico de maquinas pesadas</span><input type="file" accept=".pdf" name="pago3_2" value="<?php //echo ($this->input->post('pago3_2') ? $this->input->post('pago3_2') : $docpago['pago3_2']); ?>" class="form-control" id="pago3_2" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docpagos['pago3_2'], 'Ver Archivo en Linea', ''); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 bg-info d-flex justify-content-center align-items-center p-3">
                    <h4 class="text-white">En caso de terciarizar - Puede ser que No Aplique</h4>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
                    <div class="col-md-9">
							<span class="label other">Pedir autorización a la empresa para efectuar la subcontratación. Enviar datos y actividad a realizar por el subcontratado</span><input type="file" accept=".pdf" name="pago4_1" value="<?php //echo ($this->input->post('pago4_1') ? $this->input->post('pago4_1') : $docpago['pago4_1']); ?>" class="form-control" id="pago4_1" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docpagos['pago4_1'], 'Ver Archivo en Linea', ''); ?>
                        </div>
                        <div class="col-md-9">
							<span class="label other">Demostrar a través de un contrato, solicitud de servicio o nota en carácter de declaración jurada, la relación vinculante entre las partes</span><input type="file" accept=".pdf" name="pago4_2" value="<?php //echo ($this->input->post('pago4_2') ? $this->input->post('pago4_2') : $docpago['pago4_2']); ?>" class="form-control" id="pago4_2" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docpagos['pago4_2'], 'Ver Archivo en Linea', ''); ?>
                        </div>
                        <div class="col-md-9">
							<span class="label other">Presentar documentación en iguales terminos y condiciones que la empresa que lo contrata.</span><input type="file" accept=".pdf" name="pago4_3" value="<?php //echo ($this->input->post('pago4_3') ? $this->input->post('pago4_3') : $docpago['pago4_3']); ?>" class="form-control" id="pago4_3" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docpagos['pago4_3'], 'Ver Archivo en Linea', ''); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	
    <div class="text-white mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 bg-info d-flex justify-content-center align-items-center p-3">
                    <h4>ESTADO FORMULARIO</h4>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        <?php if ($docpagos['completo']==1){ ?>
                            <div class="form-group col-md-4" >
                            <label class="control-label bg-info d-flex justify-content-center align-items-left">COMPLETO</label>  
                            <input type="checkbox" name="completado" value="1" checked class="form-control bg-info " id="completado"></input>
                            </div>
                        <?php }else{ ?>
                            <div class="form-group col-md-4" >
                            <label class="control-label bg-info d-flex justify-content-center align-items-left">COMPLETO</label>  
                            <input type="checkbox" name="completado" value="0" class="form-control bg-info " id="completado"></input>
                            </div>
                        <?php } ?>
                        <?php if ($docpagos['aprobado']==1){ ?>
                            <div class="form-group col-md-4" >
                            <label class="control-label bg-info d-flex justify-content-center align-items-left">APROBADO</label>  
                            <input type="checkbox" name="completado" value="1" checked class="form-control bg-info " id="completado" ></input>
                            </div>
                        <?php }else{ ?>
                            <div class="form-group col-md-4" >
                            <label class="control-label bg-info d-flex justify-content-center align-items-left">APROBADO</label>  
                            <input type="checkbox" name="completado" value="0" class="form-control bg-info " id="completado" ></input>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>							
	<p></p>

    <div class="row">
        <div class="form-group col">
            <button type="submit" class="btn bg-info text-white">Guardar Cambios</button>
        </div>
    </div>
</div>

<?php echo form_close(); ?>