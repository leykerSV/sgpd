<?php echo form_open_multipart('docingresoobra/edit/'.$docingresoobra['idproveedor'],array("class"=>"form-horizontal")); ?>

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
							<span class="label other">Constancia de inscripción en la A.F.I.P.</span><input type="file" accept=".pdf" name="io1_1" value="<?php //echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="io1_1" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io1_1'], 'Ver Archivo en Linea', ''); ?>
                        </div>
						<div class="col-md-9">
							<span class="label other">Constancia de inscripción en el I.E.R.I.C. y pago matrícula anual</span><input type="file" accept=".pdf" name="io1_2" value="<?php //echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="io1_2" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io1_2'], 'Ver Archivo en Linea', ''); ?>
                        </div>
						<div class="col-md-9">
							<span class="label other">Constancia de inscripción en Ingresos Brutos,</span><input type="file" accept=".pdf" name="io1_3" value="<?php //echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="io1_3" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io1_3'], 'Ver Archivo en Linea', ''); ?>
                        </div>
						<div class="col-md-9">
							<span class="label other">Constancia de afiliación a la A.R.T.  con cláusulas de "NO REPETICIÓN" a favor del COMITENTE y de COCYAR S.A. CUIT 30-68697101-1. Certificado Nominativo de todo el personal de obra.</span><input type="file" accept=".pdf" name="io1_4" value="<?php //echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="io1_4" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io1_4'], 'Ver Archivo en Linea', ''); ?>
                        </div>
						<div class="col-md-9">
							<span class="label other">Certificado de SCVO. De incluir certificado nominativo de todo el personal de obra.</span><input type="file" accept=".pdf" name="io1_5" value="<?php //echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="io1_5" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io1_5'], 'Ver Archivo en Linea', ''); ?>
                        </div>
						<div class="col-md-9">
							<span class="label other">Planilla de Horarios y Descanso ART. 197 LEY Nº 20744 (T.O.),</span><input type="file" accept=".pdf" name="io1_6" value="<?php //echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="io1_6" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io1_6'], 'Ver Archivo en Linea', ''); ?>
                        </div>
						<div class="col-md-9">
							<span class="label other">Habilitación municipal de obradores, en caso de corresponder.</span><input type="file" accept=".pdf" name="io1_7" value="<?php //echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="io1_7" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io1_7'], 'Ver Archivo en Linea', ''); ?>
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
                    <h4 class="text-white">HIGIENE Y SEGURIDAD</h4>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
						<div class="col-md-9">
							<span class="label other">Programa de Seguridad aprobado por la ART. ( Resoluciones 51/97 o 319/99). Adhesión al Programa de Seguridad de Cocyar S.A.,</span><input type="file" accept=".pdf" name="io2_1" value="<?php //echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="io2_1" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io2_1'], 'Ver Archivo en Linea', ''); ?>
                        </div>
						<div class="col-md-9">
							<span class="label other">Aviso de inicio de obra a la ART. (Para aquellos programas de Seguridad bajo resolución 319/99 los avisos de obra no podrán tener mas de 7 días de vigencia)</span><input type="file" accept=".pdf" name="io2_2" value="<?php //echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="io2_2" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io2_2'], 'Ver Archivo en Linea', ''); ?>
                        </div>
						<div class="col-md-9">
							<span class="label other">Copia de Matrícula Profesional del responsable de Higiene y Seguridad. Comprobante de Pago,</span><input type="file" accept=".pdf" name="io2_3" value="<?php //echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="io2_3" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io2_3'], 'Ver Archivo en Linea', ''); ?>
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
                    <h4 class="text-white">PERSONAL EN RELACION DE DEPENDENCIA</h4>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
						<div class="col-md-9">
							<span class="label other">Alta temprana del personal</span><input type="file" accept=".pdf" name="io3_1" value="<?php //echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="io3_1" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io3_1'], 'Ver Archivo en Linea', ''); ?>
                        </div>
						<div class="col-md-9">
							<span class="label other">Copia de DNI</span><input type="file" accept=".pdf" name="io3_2" value="<?php //echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="io3_2" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io3_2'], 'Ver Archivo en Linea', ''); ?>
                        </div>
						<div class="col-md-9">
							<span class="label other">Constancia de Capacitación en Higiene y Seguridad. (Menos de 6 meses de impartida)</span><input type="file" accept=".pdf" name="io3_3" value="<?php //echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="io3_3" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io3_3'], 'Ver Archivo en Linea', ''); ?>
                        </div>
                        <div class="col-md-9">
							<span class="label other">Constancia de entrega de E.P.P semestral según Res. SRT 299/11 (Elementos de protección personal)</span><input type="file" accept=".pdf" name="io3_4" value="<?php //echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="io3_4" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io3_4'], 'Ver Archivo en Linea', ''); ?>
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
							<span class="label other">Inscripción en AFIP y comprobante de pago mensual</span><input type="file" accept=".pdf" name="io4_1" value="<?php //echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="io4_1" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io4_1'], 'Ver Archivo en Linea', ''); ?>
                        </div>
						<div class="col-md-9">
							<span class="label other">Poliza de seguro de accidentes personales (SAP), con cláusulas de "NO REPETICIÓN" a favor del Comitente y de Cocyar S.A. CUIT 30-68697101-1.</span><input type="file" accept=".pdf" name="io4_2" value="<?php //echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="io4_2" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io4_2'], 'Ver Archivo en Linea', ''); ?>
                        </div>
						<div class="col-md-9">
							<span class="label other">Comprobante de pago o libre de deuda de Seguro de accidentes personales.</span><input type="file" accept=".pdf" name="io4_3" value="<?php //echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="io4_3" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io4_3'], 'Ver Archivo en Linea', ''); ?>
                        </div>
                        <div class="col-md-9">
							<span class="label other">Copia de DNI</span><input type="file" accept=".pdf" name="io4_4" value="<?php //echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="io4_4" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io4_4'], 'Ver Archivo en Linea', ''); ?>
                        </div>
                        <div class="col-md-9">
							<span class="label other">Constancia de entrega de E.P.P semestral según Res. SRT 299/11 (Elementos de protección personal)</span><input type="file" accept=".pdf" name="io4_5" value="<?php //echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="io4_5" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io4_5'], 'Ver Archivo en Linea', ''); ?>
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
                    <h4 class="text-white">VEHICULOS Y MAQUINAS</h4>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
						<div class="col-md-9">
							<span class="label other">Copia del Titulo o Cedula Verde del vehículo</span><input type="file" accept=".pdf" name="io5_1" value="<?php //echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="io5_1" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io5_1'], 'Ver Archivo en Linea', ''); ?>
                        </div>
						<div class="col-md-9">
							<span class="label other">Copia de Tarjeta Azul o autorización de manejo</span><input type="file" accept=".pdf" name="io5_2" value="<?php //echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="io5_2" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io5_2'], 'Ver Archivo en Linea', ''); ?>
                        </div>
						<div class="col-md-9">
							<span class="label other">Seguro de Responsabilidad Civil contra terceros. Limites de indemnización de $10.000.000 para vehículos livianos y $22.000.000 para vehículos pesados y maquinas. Cláusula de Subrogación a favor del Comitente y de Cocyar S.A. CUIT 30-68697101-1</span><input type="file" accept=".pdf" name="io5_3" value="<?php //echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="io5_3" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io5_3'], 'Ver Archivo en Linea', ''); ?>
                        </div>
                        <div class="col-md-9">
							<span class="label other">Seguro técnico específico para maquinas pesadas con  cobertura de Responsabilidad Civil mínima $500.000 . Cláusula de Subrogación a favor del Comitente y de Cocyar S.A. CUIT 30-68697101-1</span><input type="file" accept=".pdf" name="io5_4" value="<?php //echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="io5_4" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io5_4'], 'Ver Archivo en Linea', ''); ?>
                        </div>
                        <div class="col-md-9">
							<span class="label other">Comprobante de pago o libre de deuda de Seguros de R.C y/o técnico</span><input type="file" accept=".pdf" name="io5_5" value="<?php //echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="io5_5" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io5_5'], 'Ver Archivo en Linea', ''); ?>
                        </div>
                        <div class="col-md-9">
							<span class="label other">Verificación Tecnica Vehícular (de corresponder)</span><input type="file" accept=".pdf" name="io5_6" value="<?php //echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="io5_6" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io5_6'], 'Ver Archivo en Linea', ''); ?>
                        </div>
                        <div class="col-md-9">
							<span class="label other">Constancia de inscripción en R.U.T.A para los casos que corresponda</span><input type="file" accept=".pdf" name="io5_7" value="<?php //echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="io5_7" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io5_7'], 'Ver Archivo en Linea', ''); ?>
                        </div>
                        <div class="col-md-9">
							<span class="label other"></span>Licencia de conducir del chofer con categoría acorde al vehículo / máquina<input type="file" accept=".pdf" name="io5_8" value="<?php //echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="io5_8" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io5_8'], 'Ver Archivo en Linea', ''); ?>
                        </div>
                        <div class="col-md-9">
							<span class="label other">Para vehículos de transporte de personal, Habilitación y Seguros correspondientes</span><input type="file" accept=".pdf" name="io5_9" value="<?php //echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="io5_9" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io5_9'], 'Ver Archivo en Linea', ''); ?>
                        </div>
                        <div class="col-md-9">
							<span class="label other">Para equipos de izaje de cargas o elevación de personas, certificación tecnica/ mecánica vigente</span><input type="file" accept=".pdf" name="io5_10" value="<?php //echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="io5_10" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io5_10'], 'Ver Archivo en Linea', ''); ?>
                        </div>
                        <div class="col-md-9">
							<span class="label other">Para equipos de izaje de cargas, Certificación como operador de grúas del chofer.</span><input type="file" accept=".pdf" name="io5_11" value="<?php //echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="io5_11" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io5_11'], 'Ver Archivo en Linea', ''); ?>
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
                    <h4 class="text-white">HABILITACIONES</h4>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
						<div class="col-md-9">
							<span class="label other">Título</span><input type="file" accept=".pdf" name="io6_1" value="<?php //echo ($this->input->post('tituloobra') ? $this->input->post('tituloobra') : $doccomercial['tituloobra']); ?>" class="form-control" id="io6_1" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io6_1'], 'Ver Archivo en Linea', ''); ?>
                        </div>
						<div class="col-md-9">
							<span class="label other">Matrícula</span><input type="file" accept=".pdf" name="io6_2" value="<?php //echo ($this->input->post('matriculaobra') ? $this->input->post('matriculaobra') : $doccomercial['matriculaobra']); ?>" class="form-control" id="io6_2" />
                            <?php echo anchor_popup(base_url().'archivos/'.$docingresoobra['io6_2'], 'Ver Archivo en Linea', ''); ?>
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
                        <?php if ($docingresoobra['completo']==1){ ?>
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
                        <?php if ($docingresoobra['aprobado']==1){ ?>
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