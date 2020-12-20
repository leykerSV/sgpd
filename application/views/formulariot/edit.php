<?php echo form_open('formulariot/edit/'.$formulariot['idformularioT'],array("class"=>"form-horizontal")); ?>

<style>
    .bg-info {
        background-color: #4563ab !important;
    }
</style>

<div class="container text-center">

    <div class="text-white mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 bg-info d-flex justify-content-center align-items-center p-3">
                    <h4>INFORMACION TECNICA</h4>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        <div class="col">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Actividad de la Empresa</label>
                            <select name="actividadpcipal" class="form-control">
                                <option value="">Seleccionar Actividad de la Empresa</option>
                                <?php 
								$actividadpcipal_values = array(
									'ARQUITECTURA'=>'ARQUITECTURA',
									'ELECTROMECANICOS'=>'ELECTROMECANICOS',
									'CIVILES'=>'CIVILES',
								);

								foreach($actividadpcipal_values as $value => $display_text)
								{
									$selected = ($value == $formulariot['actividadpcipal']) ? ' selected="selected"' : "";
									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
							?>
                            </select>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Lugar de Servicios</label>
                            <select name="lugarservicios" class="form-control">
                                <option value="">Seleccionar Lugar de Servicios</option>
                                <?php 
								$lugarservicios_values = array(
									'LOCAL'=>'LOCAL',
									'PROVINCIAL'=>'PROVINCIAL',
									'NACIONAL'=>'NACIONAL',
								);

								foreach($lugarservicios_values as $value => $display_text)
								{
									$selected = ($value == $formulariot['lugarservicios']) ? ' selected="selected"' : "";
									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
							?>
                            </select>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Provincias Alcanzadas</label>
                            <textarea name="provinciasalcanzadas" class="form-control" id="provinciasalcanzadas"
                                placeholder="Provincias Alcanzadas"><?php echo ($this->input->post('provinciasalcanzadas') ? $this->input->post('provinciasalcanzadas') : $formulariot['provinciasalcanzadas']); ?></textarea>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col-md-6">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Representante Técnico</label>
                            <input type="text" name="reptecnico"
                                value="<?php echo ($this->input->post('reptecnico') ? $this->input->post('reptecnico') : $formulariot['reptecnico']); ?>"
                                class="form-control" id="reptecnico" placeholder="Representante Técnico:" />
                        </div>
                        <div class="col-md-6">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Profesión</label>
                            <input type="text" name="profesion"
                                value="<?php echo ($this->input->post('profesion') ? $this->input->post('profesion') : $formulariot['profesion']); ?>"
                                class="form-control" id="profesion" placeholder="Profesión" />
                        </div>
                    </div>
                    <div class="input-group mb-3">

                    </div>
                    <div class="input-group mb-3">
                        <div class="col-md-6">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Cantidad Total de Personal</label>
                            <input type="text" name="cantidadpersonal"
                                value="<?php echo ($this->input->post('cantidadpersonal') ? $this->input->post('cantidadpersonal') : $formulariot['cantidadpersonal']); ?>"
                                class="form-control" id="cantidadpersonal" placeholder="Cantidad Total de Personal" />
                        </div>
                        <div class="col-md-6">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Cantidad de Personal Administrativo</label>
                            <input type="text" name="cantpersonaladmin"
                                value="<?php echo ($this->input->post('cantpersonaladmin') ? $this->input->post('cantpersonaladmin') : $formulariot['cantpersonaladmin']); ?>"
                                class="form-control" id="cantpersonaladmin"
                                placeholder="Cantidad Personal Administrativo" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col-md-6">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Cantidad Personal Profesional</label>
                            <input type="text" name="cantpersonalprof"
                                value="<?php echo ($this->input->post('cantpersonalprof') ? $this->input->post('cantpersonalprof') : $formulariot['cantpersonalprof']); ?>"
                                class="form-control" id="cantpersonalprof"
                                placeholder="Cantidad Personal Profesional" />
                        </div>
                        <div class="col-md-6">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Cantidad Personal de Obra</label>
                            <input type="text" name="cantpersonalobra"
                                value="<?php echo ($this->input->post('cantpersonalobra') ? $this->input->post('cantpersonalobra') : $formulariot['cantpersonalobra']); ?>"
                                class="form-control" id="cantpersonalobra" placeholder="Cantidad Personal Obra" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Certificaciones</label>
                            <input type="text" name="certificaciones"
                                value="<?php echo ($this->input->post('certificaciones') ? $this->input->post('certificaciones') : $formulariot['certificaciones']); ?>"
                                class="form-control" id="certificaciones" placeholder="Certificaciones" />
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
                    <h4>REFERENCIAS</h4>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        <div class="col-md-6">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Obras Realizadas 1</label>
                            <input type="text" name="obras1"
                                value="<?php echo ($this->input->post('obras1') ? $this->input->post('obras1') : $formulariot['obras1']); ?>"
                                class="form-control" id="obras1" placeholder="Obras Realizadas 1" />
                        </div>
                        <div class="col-md-6">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Empresa 1</label>
                            <input type="text" name="obras1empresa"
                                value="<?php echo ($this->input->post('obras1empresa') ? $this->input->post('obras1empresa') : $formulariot['obras1empresa']); ?>"
                                class="form-control" id="obras1empresa" placeholder="Empresa 1" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col-md-6">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Contacto 1</label>
                            <input type="text" name="obras1contacto"
                                value="<?php echo ($this->input->post('obras1contacto') ? $this->input->post('obras1contacto') : $formulariot['obras1contacto']); ?>"
                                class="form-control" id="obras1contacto" placeholder="Contacto 1" />
                        </div>
                        <div class="col-md-6">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Teléfono 1</label>
                            <input type="text" name="obras1telefono"
                                value="<?php echo ($this->input->post('obras1telefono') ? $this->input->post('obras1telefono') : $formulariot['obras1telefono']); ?>"
                                class="form-control" id="obras1telefono" placeholder="Teléfono 1" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Tipo de Obra 1</label>
                            <select name="obras1tipo" class="form-control">
                                <option value="">Seleccionar Tipo de Obra 1</option>
                                <?php 
						$obras1tipo_values = array(
							'Multinacional'=>'Multinacional',
							'Nacional'=>'Nacional',
							'Local/Regional'=>'Local/Regional',
						);
						foreach($obras1tipo_values as $value => $display_text)
						{
							$selected = ($value == $formulariot['obras1tipo']) ? ' selected="selected"' : "";
							echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
						} 
						?>
                            </select>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col-md-6">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Obras Realizadas 2</label>
                            <input type="text" name="obras2"
                                value="<?php echo ($this->input->post('obras2') ? $this->input->post('obras2') : $formulariot['obras2']); ?>"
                                class="form-control" id="obras2" placeholder="Obras Realizadas 2" />
                        </div>
                        <div class="col-md-6">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Empresa 2</label>
                            <input type="text" name="obras2empresa"
                                value="<?php echo ($this->input->post('obras2empresa') ? $this->input->post('obras2empresa') : $formulariot['obras2empresa']); ?>"
                                class="form-control" id="obras2empresa" placeholder="Empresa 2" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col-md-6">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Contacto 2</label>
                            <input type="text" name="obras2contacto"
                                value="<?php echo ($this->input->post('obras2contacto') ? $this->input->post('obras2contacto') : $formulariot['obras2contacto']); ?>"
                                class="form-control" id="obras2contacto" placeholder="Contacto 2" />
                        </div>
                        <div class="col-md-6">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Teléfono 2</label>
                            <input type="text" name="obras2telefono"
                                value="<?php echo ($this->input->post('obras2telefono') ? $this->input->post('obras2telefono') : $formulariot['obras2telefono']); ?>"
                                class="form-control" id="obras2telefono" placeholder="Teléfono 2" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Tipo de Obra 2</label>
                            <select name="obras2tipo" class="form-control">
                                <option value="">Seleccionar Tipo de Obra 2</option>
                                <?php 
						$obras2tipo_values = array(
							'Multinacional'=>'Multinacional',
							'Nacional'=>'Nacional',
							'Local/Regional'=>'Local/Regional',
						);

						foreach($obras2tipo_values as $value => $display_text)
						{
							$selected = ($value == $formulariot['obras2tipo']) ? ' selected="selected"' : "";

							echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
						} 
						?>
                            </select>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col-md-6">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Obras Realizadas 3</label>
                            <input type="text" name="obras3"
                                value="<?php echo ($this->input->post('obras3') ? $this->input->post('obras3') : $formulariot['obras3']); ?>"
                                class="form-control" id="obras3" placeholder="Obras Realizadas 3" />
                        </div>
                        <div class="col-md-6">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Empresa 3</label>
                            <input type="text" name="obras3empresa"
                                value="<?php echo ($this->input->post('obras3empresa') ? $this->input->post('obras3empresa') : $formulariot['obras3empresa']); ?>"
                                class="form-control" id="obras3empresa" placeholder="Empresa 3" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col-md-6">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Contacto 3</label>
                            <input type="text" name="obras3contacto"
                                value="<?php echo ($this->input->post('obras3contacto') ? $this->input->post('obras3contacto') : $formulariot['obras3contacto']); ?>"
                                class="form-control" id="obras3contacto" placeholder="Contacto 3" />
                        </div>
                        <div class="col-md-6">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Teléfono 3</label>
                            <input type="text" name="obras3telefono"
                                value="<?php echo ($this->input->post('obras3telefono') ? $this->input->post('obras3telefono') : $formulariot['obras3telefono']); ?>"
                                class="form-control" id="obras3telefono" placeholder="Teléfono 3" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Tipo de Obra 3</label>
                            <select name="obras3tipo" class="form-control">
                                <option value="">Seleccionar Tipo de Obra 3</option>
                                <?php 
							$obras3tipo_values = array(
								'Multinacional'=>'Multinacional',
								'Nacional'=>'Nacional',
								'Local/Regional'=>'Local/Regional',
							);

							foreach($obras3tipo_values as $value => $display_text)
							{
								$selected = ($value == $formulariot['obras3tipo']) ? ' selected="selected"' : "";

								echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
							} 
						?>
                            </select>
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
                    <h4>AUTOEVALUACION (COMPLETE CON ESCALA DEL 1 AL 5)</h4>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        <div class="col-md-6">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Orden y Limpieza</label>
                            <input type="text" name="ordenylimpiezaobra"
                                value="<?php echo ($this->input->post('ordenylimpiezaobra') ? $this->input->post('ordenylimpiezaobra') : $formulariot['ordenylimpiezaobra']); ?>"
                                class="form-control" id="ordenylimpiezaobra" placeholder="Orden y Limpieza de Obra" />
                        </div>
                        <div class="col-md-6">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Calidad de Materiales y Equipos</label>
                            <input type="text" name="calidamaterialesequipos"
                                value="<?php echo ($this->input->post('calidamaterialesequipos') ? $this->input->post('calidamaterialesequipos') : $formulariot['calidamaterialesequipos']); ?>"
                                class="form-control" id="calidamaterialesequipos"
                                placeholder="Calidad de Materiales y Equipos" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col-md-6">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Cumplimiento de normas hys</label>
                            <input type="text" name="cumplimientonormashys"
                                value="<?php echo ($this->input->post('cumplimientonormashys') ? $this->input->post('cumplimientonormashys') : $formulariot['cumplimientonormashys']); ?>"
                                class="form-control" id="cumplimientonormashys"
                                placeholder="Cumplimiento de normas hys" />
                        </div>
                        <div class="col-md-6">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Cumplimiento de Plazos</label>
                            <input type="text" name="cumplimientoplazos"
                                value="<?php echo ($this->input->post('cumplimientoplazos') ? $this->input->post('cumplimientoplazos') : $formulariot['cumplimientoplazos']); ?>"
                                class="form-control" id="cumplimientoplazos" placeholder="Cumplimiento de Plazos" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Atención Prof. durante el Proyecto</label>
                            <input type="text" name="atencionprofdurante"
                                value="<?php echo ($this->input->post('atencionprofdurante') ? $this->input->post('atencionprofdurante') : $formulariot['atencionprofdurante']); ?>"
                                class="form-control" id="atencionprofdurante"
                                placeholder="Atención Prof. durante el Proyecto" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Fortalezas</label>
                            <textarea name="fortalezas" class="form-control" id="fortalezas"
                                placeholder="Fortaleza"><?php echo ($this->input->post('fortalezas') ? $this->input->post('fortalezas') : $formulariot['fortalezas']); ?></textarea>
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
                    <h4>REFERENCIAS MONETARIAS</h4>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        <div class="col-md-4">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Obra 1</label>
                            <input type="text" name="montoobras1"
                                value="<?php echo ($this->input->post('montoobras1') ? $this->input->post('montoobras1') : $formulariot['montoobras1']); ?>"
                                class="form-control" id="montoobras1" placeholder="Obra 1" />
                        </div>
                        <div class="col-md-4">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Empresa Obra 1</label>
                            <input type="text" name="montoempresa1"
                                value="<?php echo ($this->input->post('montoempresa1') ? $this->input->post('montoempresa1') : $formulariot['montoempresa1']); ?>"
                                class="form-control" id="montoempresa1" placeholder="Empresa Obra 1" />
                        </div>
                        <div class="col-md-4">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Monto 1</label>
                            <input type="text" name="monto1"
                                value="<?php echo ($this->input->post('monto1') ? $this->input->post('monto1') : $formulariot['monto1']); ?>"
                                class="form-control" id="monto1" placeholder="Monto Obra 1" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col-md-4">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Obra 2</label>
                            <input type="text" name="montoobras2"
                                value="<?php echo ($this->input->post('montoobras2') ? $this->input->post('montoobras2') : $formulariot['montoobras2']); ?>"
                                class="form-control" id="montoobras2" placeholder="Obra 2" />
                        </div>
                        <div class="col-md-4">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Empresa Obra 2</label>
                            <input type="text" name="montoempresa2"
                                value="<?php echo ($this->input->post('montoempresa2') ? $this->input->post('montoempresa2') : $formulariot['montoempresa2']); ?>"
                                class="form-control" id="montoempresa2" placeholder="Empresa Obra 2" />
                        </div>
                        <div class="col-md-4">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Monto Obra 2</label>
                            <input type="text" name="monto2"
                                value="<?php echo ($this->input->post('monto2') ? $this->input->post('monto2') : $formulariot['monto2']); ?>"
                                class="form-control" id="monto2" placeholder="Monto Obra " />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col-md-4">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Obra 3</label>
                            <input type="text" name="montoobras3"
                                value="<?php echo ($this->input->post('montoobras3') ? $this->input->post('montoobras3') : $formulariot['montoobras3']); ?>"
                                class="form-control" id="montoobras3" placeholder="Obra 3" />
                        </div>
                        <div class="col-md-4">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Empresa Obra 3</label>
                            <input type="text" name="montoempresa3"
                                value="<?php echo ($this->input->post('montoempresa3') ? $this->input->post('montoempresa3') : $formulariot['montoempresa3']); ?>"
                                class="form-control" id="montoempresa3" placeholder="Empresa Obra 3" />
                        </div>
                        <div class="col-md-4">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Monto Obra 3</label>
                            <input type="text" name="monto3"
                                value="<?php echo ($this->input->post('monto3') ? $this->input->post('monto3') : $formulariot['monto3']); ?>"
                                class="form-control" id="monto3" placeholder="Monto Obra 3" />
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
                    <h4>FLOTA DE VEHICULOS</h4>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        <div class="col">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Flota de vehículos Utilitarios</label>
                            <input type="text" name="flotavehiculosutilitarios"
                                value="<?php echo ($this->input->post('flotavehiculosutilitarios') ? $this->input->post('flotavehiculosutilitarios') : $formulariot['flotavehiculosutilitarios']); ?>"
                                class="form-control" id="flotavehiculosutilitarios"
                                placeholder="Flota de vehículos utilitarios" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Flota de Vehículos de Carga</label>
                            <input type="text" name="flotavehiculoscarga"
                                value="<?php echo ($this->input->post('flotavehiculoscarga') ? $this->input->post('flotavehiculoscarga') : $formulariot['flotavehiculoscarga']); ?>"
                                class="form-control" id="flotavehiculoscarga"
                                placeholder="Flota de vehículos de carga" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Flota de Vehículos Tripulados</label>
                            <input type="text" name="flotavehiculostripulados"
                                value="<?php echo ($this->input->post('flotavehiculostripulados') ? $this->input->post('flotavehiculostripulados') : $formulariot['flotavehiculostripulados']); ?>"
                                class="form-control" id="flotavehiculostripulados"
                                placeholder="Flota de vehículos tripulados" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-4" hidden>
            <input type="text" name="idproveedor"
                    value="<?php echo ($this->input->post('idproveedor') ? $this->input->post('idproveedor') : $formulariot['idproveedor']); ?>"
                    class="form-control" id="idproveedor" placeholder="Idproveedor" />
        </div>
    
        <div class="input-group mb-3 col-md-4" hidden>
            <input type="text" name="aprobado"
                    value="<?php echo ($this->input->post('aprobado') ? $this->input->post('aprobado') : $formulariot['aprobado']); ?>"
                    class="form-control" id="aprobado" placeholder="Aprobado" />
        </div>
        <div class="input-group mb-3 col-md-4" hidden>
            <input type="text" name="completo"
                    value="<?php echo ($this->input->post('completo') ? $this->input->post('completo') : $formulariot['completo']); ?>"
                    class="form-control" id="completo" placeholder="Completo" />
        </div>
    
        <div class="form-group col">
            <button type="submit" class="btn btn-success">Guardar Datos</button>
        </div>
    </div>
</div>




<?php echo form_close(); ?>