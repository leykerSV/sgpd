<?php echo form_open_multipart('docpagos/edit/'.$docpagos['iddocpagos'],array("class"=>"form-horizontal")); ?>

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
							<span class="label other">Formulario 931 y presentación del mismo en AFIP</span><input type="file" accept=".pdf" name="pago1.1" value="<?php //echo ($this->input->post('pago1.1') ? $this->input->post('pago1.1') : $docpago['pago1.1']); ?>" class="form-control" id="pago1.1" />
                        </div>
						<div class="col-md-9">
							<span class="label other">Pagos de los aportes y contribuciones a la Seguridad Social, Obra Social, ART. y SCVO, como así también nómina de los empleados según F. 931 de AFIP</span><input type="file" accept=".pdf" name="pago1.2" value="<?php //echo ($this->input->post('pago1.2') ? $this->input->post('pago1.2') : $docpago['pago1.1']); ?>" class="form-control" id="pago1.2" />
                        </div>
                        <div class="col-md-9">
							<span class="label other">Planilla entrada y salida del personal de obra</span><input type="file" accept=".pdf" name="pago1.3" value="<?php //echo ($this->input->post('pago1.3') ? $this->input->post('pago1.3') : $docpago['pago1.3']); ?>" class="form-control" id="pago1.3" />
                        </div>
                        <div class="col-md-9">
							<span class="label other">Fotocopia recibos de sueldo de los empleados, acreditación en cuenta bancaria o telegrama para cobrar en efectivo</span><input type="file" accept=".pdf" name="pago1.4" value="<?php //echo ($this->input->post('pago1.4') ? $this->input->post('pago1.4') : $docpago['pago1.4']); ?>" class="form-control" id="pago1.4" />
                        </div>
                        <div class="col-md-9">
							<span class="label other">Certificado de cobertura de ART, con nomina de personal a cubrir. Incluir Clausula de no repetición a favor del Comitente y de Cocyar S.A. CUIT 30-68697101-1</span><input type="file" accept=".pdf" name="pago1.5" value="<?php //echo ($this->input->post('pago1.5') ? $this->input->post('pago1.5') : $docpago['pago1.5']); ?>" class="form-control" id="pago1.5" />
                        </div>
                        <div class="col-md-9">
							<span class="label other">Certificado de cobertura de SCVO, con nomina de personal afecatado a obra</span><input type="file" accept=".pdf" name="pago1.6" value="<?php //echo ($this->input->post('pago1.6') ? $this->input->post('pago1.6') : $docpago['pago1.6']); ?>" class="form-control" id="pago1.6" />
                        </div>
                        <div class="col-md-9">
							<span class="label other">Copia de Gestión de Higiene y Seguridad. Constancia de visitas a obra y cumplimiento de horas profesionales semanales del responsable de Higiene y Seguridad. Copia de las capacitaciones dictadas.</span><input type="file" accept=".pdf" name="pago1.7" value="<?php //echo ($this->input->post('pago1.7') ? $this->input->post('pago1.7') : $docpago['pago1.7']); ?>" class="form-control" id="pago1.7" />
                        </div>
                        <div class="col-md-9">
							<span class="label other">Pago de fondo de desempleo</span><input type="file" accept=".pdf" name="pago1.8" value="<?php //echo ($this->input->post('pago1.8') ? $this->input->post('pago1.8') : $docpago['pago1.8']); ?>" class="form-control" id="pago1.8" />
                        </div>
                        <div class="col-md-9">
							<span class="label other">Pago de cuota sindical</span><input type="file" accept=".pdf" name="pago1.9" value="<?php //echo ($this->input->post('pago1.9') ? $this->input->post('pago1.9') : $docpago['pago1.9']); ?>" class="form-control" id="pago1.9" />
                        </div>
                        <div class="col-md-9">
							<span class="label other">Pago mensual al I.E.R.I.C</span><input type="file" accept=".pdf" name="pago1.10" value="<?php //echo ($this->input->post('pago1.10') ? $this->input->post('pago1.10') : $docpago['pago1.10']); ?>" class="form-control" id="pago1.10" />
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
							<span class="label other">Pago de autónomo o de monotributo</span><input type="file" accept=".pdf" name="pago2.1" value="<?php //echo ($this->input->post('pago2.1') ? $this->input->post('pago2.1') : $docpago['pago2.1']); ?>" class="form-control" id="pago2.1" />
                        </div>
                        <div class="col-md-9">
							<span class="label other">Pago de seguro de accidente personales</span><input type="file" accept=".pdf" name="pago2.2" value="<?php //echo ($this->input->post('pago2.2') ? $this->input->post('pago2.2') : $docpago['pago2.2']); ?>" class="form-control" id="pago2.2" />
                        </div>
                        <div class="col-md-9">
							<span class="label other">Pago de seguro de vehículos incorporados a la obra</span><input type="file" accept=".pdf" name="pago2.3" value="<?php //echo ($this->input->post('pago2.3') ? $this->input->post('pago2.3') : $docpago['pago2.3']); ?>" class="form-control" id="pago2.3" />
                        </div>
                        <div class="col-md-9">
							<span class="label other">Copia de la Gestión de Seguridad e Higiene. Constancias de Visitas a obra y cumplimiento de horas profesionales del resp. De HyS.  Copia de capacitaciones dictadas en el proyecto.</span><input type="file" accept=".pdf" name="pago2.4" value="<?php //echo ($this->input->post('pago2.4') ? $this->input->post('pago2.4') : $docpago['pago2.4']); ?>" class="form-control" id="pago2.4" />
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
							<span class="label other">Pago del Seguro de RC de vehículos y maquinas incorporadas a obra</span><input type="file" accept=".pdf" name="pago3.1" value="<?php //echo ($this->input->post('pago3.1') ? $this->input->post('pago3.1') : $docpago['pago3.1']); ?>" class="form-control" id="pago3.1" />
                        </div>
                        <div class="col-md-9">
							<span class="label other">Pago del Seguro Tecnico de maquinas pesadas</span><input type="file" accept=".pdf" name="pago3.2" value="<?php //echo ($this->input->post('pago3.2') ? $this->input->post('pago3.2') : $docpago['pago3.2']); ?>" class="form-control" id="pago3.2" />
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
							<span class="label other">Pedir autorización a la empresa para efectuar la subcontratación. Enviar datos y actividad a realizar por el subcontratado</span><input type="file" accept=".pdf" name="pago4.1" value="<?php //echo ($this->input->post('pago4.1') ? $this->input->post('pago4.1') : $docpago['pago4.1']); ?>" class="form-control" id="pago4.1" />
                        </div>
                        <div class="col-md-9">
							<span class="label other">Demostrar a través de un contrato, solicitud de servicio o nota en carácter de declaración jurada, la relación vinculante entre las partes</span><input type="file" accept=".pdf" name="pago4.2" value="<?php //echo ($this->input->post('pago4.2') ? $this->input->post('pago4.2') : $docpago['pago4.2']); ?>" class="form-control" id="pago4.2" />
                        </div>
                        <div class="col-md-9">
							<span class="label other">Presentar documentación en iguales terminos y condiciones que la empresa que lo contrata.</span><input type="file" accept=".pdf" name="pago4.3" value="<?php //echo ($this->input->post('pago4.3') ? $this->input->post('pago4.3') : $docpago['pago4.3']); ?>" class="form-control" id="pago4.3" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	
    <div class="mb-3" hidden>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 bg-info d-flex justify-content-center align-items-center p-3">
                    <h4 class="text-white">ESTADO FORMULARIO</h4>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        <div class="form-group col-md-4" >
                            <input type="text" name="idproveedor" value="<?php echo ($this->input->post('idproveedor') ? $this->input->post('idproveedor') : $formulariofyc['idproveedor']); ?>"
                                class="form-control" id="idproveedor" placeholder="Id Proveedor" />
                        </div>
                        <div class="form-group col-md-4" >
                            <input type="text" name="aprobado" value="<?php echo ($this->input->post('aprobado') ? $this->input->post('aprobado') : $formulariofyc['aprobado']); ?>"
                                class="form-control" id="aprobado" placeholder="Aprobado" />
                        </div>
                        <div class="form-group col-md-4" >
                            <input type="text" name="completo" value="<?php echo ($this->input->post('completo') ? $this->input->post('completo') : $formulariofyc['completo']); ?>"
                                class="form-control" id="completo" placeholder="Completo" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col">
            <button type="submit" class="btn bg-info text-white">Guardar Cambios</button>
        </div>
    </div>
</div>

<?php echo form_close(); ?>