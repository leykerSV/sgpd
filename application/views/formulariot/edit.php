<?php echo form_open('formulariot/edit/'.$formulariot['idformularioT'],array("class"=>"form-horizontal")); ?>

<div class="container-fluid" align="center">

  	<div class="card text-white bg-secondary mb-3">
		<div class="card-header">
			INFORMACION TECNICA
		</div>
		<div class="card-body">
			<div class="input-group mb-3">
				<label for="actividadpcipal" class="col-md-4 control-label">Actividad De la Empresa:</label>
				<div class="col-md-8">
					<select name="actividadpcipal" class="form-control">
						<option value="">select</option>
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
				<label for="lugarservicios" class="col-md-4 control-label">Lugar donde presta Servicios:</label>
				<div class="col-md-8">
					<input type="text" name="lugarservicios" value="<?php echo ($this->input->post('lugarservicios') ? $this->input->post('lugarservicios') : $formulariot['lugarservicios']); ?>" class="form-control" id="lugarservicios" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="provinciasalcanzadas" class="col-md-4 control-label">Provincias Alcanzadas</label>
				<div class="col-md-8">
					<textarea name="provinciasalcanzadas" class="form-control" id="provinciasalcanzadas"><?php echo ($this->input->post('provinciasalcanzadas') ? $this->input->post('provinciasalcanzadas') : $formulariot['provinciasalcanzadas']); ?></textarea>
				</div>	
			</div>
			<div class="input-group mb-3">
				<label for="reptecnico" class="col-md-4 control-label">Representante Técnico:</label>
				<div class="col-md-8">
					<input type="text" name="reptecnico" value="<?php echo ($this->input->post('reptecnico') ? $this->input->post('reptecnico') : $formulariot['reptecnico']); ?>" class="form-control" id="reptecnico" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="profesion" class="col-md-4 control-label">Profesión</label>
				<div class="col-md-8">
					<input type="text" name="profesion" value="<?php echo ($this->input->post('profesion') ? $this->input->post('profesion') : $formulariot['profesion']); ?>" class="form-control" id="profesion" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="cantidadpersonal" class="col-md-4 control-label">Cantidad Total de Personal</label>
				<div class="col-md-8">
					<input type="text" name="cantidadpersonal" value="<?php echo ($this->input->post('cantidadpersonal') ? $this->input->post('cantidadpersonal') : $formulariot['cantidadpersonal']); ?>" class="form-control" id="cantidadpersonal" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="cantpersonaladmin" class="col-md-4 control-label">Cantidad Personal Administrativo:</label>
				<div class="col-md-8">
					<input type="text" name="cantpersonaladmin" value="<?php echo ($this->input->post('cantpersonaladmin') ? $this->input->post('cantpersonaladmin') : $formulariot['cantpersonaladmin']); ?>" class="form-control" id="cantpersonaladmin" />
				</div>	
			</div>
			<div class="input-group mb-3">
				<label for="cantpersonalprof" class="col-md-4 control-label">Cantidad Personal Profesional:</label>
				<div class="col-md-8">
					<input type="text" name="cantpersonalprof" value="<?php echo ($this->input->post('cantpersonalprof') ? $this->input->post('cantpersonalprof') : $formulariot['cantpersonalprof']); ?>" class="form-control" id="cantpersonalprof" />
				</div>	
			</div>
			<div class="input-group mb-3">
				<label for="cantpersonalobra" class="col-md-4 control-label">Cantidad Personal Obra:</label>
				<div class="col-md-8">
					<input type="text" name="cantpersonalobra" value="<?php echo ($this->input->post('cantpersonalobra') ? $this->input->post('cantpersonalobra') : $formulariot['cantpersonalobra']); ?>" class="form-control" id="cantpersonalobra" />
				</div>	
			</div>
			<div class="input-group mb-3">
				<label for="certificaciones" class="col-md-4 control-label">Certificaciones:</label>
				<div class="col-md-8">
					<input type="text" name="certificaciones" value="<?php echo ($this->input->post('certificaciones') ? $this->input->post('certificaciones') : $formulariot['certificaciones']); ?>" class="form-control" id="certificaciones" />
				</div>
			</div>
		</div>
  	</div>

	<div class="card text-white bg-secondary mb-3">
		<div class="card-header">
			REFERENCIAS
		</div>
		<div class="card-body">
			<div class="input-group mb-3">
				<label for="obras1" class="col-md-4 control-label">Obras Realizadas 1:</label>
				<div class="col-md-8">
					<input type="text" name="obras1" value="<?php echo ($this->input->post('obras1') ? $this->input->post('obras1') : $formulariot['obras1']); ?>" class="form-control" id="obras1" />
				</div>	
			</div>
			<div class="input-group mb-3">
				<label for="obras1empresa" class="col-md-4 control-label">Empresa 1:</label>
				<div class="col-md-8">
					<input type="text" name="obras1empresa" value="<?php echo ($this->input->post('obras1empresa') ? $this->input->post('obras1empresa') : $formulariot['obras1empresa']); ?>" class="form-control" id="obras1empresa" />
				</div>					
			</div>
			<div class="input-group mb-3">
				<label for="obras1contacto" class="col-md-4 control-label">Contacto 1:</label>
				<div class="col-md-8">
					<input type="text" name="obras1contacto" value="<?php echo ($this->input->post('obras1contacto') ? $this->input->post('obras1contacto') : $formulariot['obras1contacto']); ?>" class="form-control" id="obras1contacto" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="obras1telefono" class="col-md-4 control-label">Teléfono 1:</label>
				<div class="col-md-8">
					<input type="text" name="obras1telefono" value="<?php echo ($this->input->post('obras1telefono') ? $this->input->post('obras1telefono') : $formulariot['obras1telefono']); ?>" class="form-control" id="obras1telefono" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="obras1tipo" class="col-md-4 control-label">Tipo de Obra 1:</label>
				<div class="col-md-8">
					<select name="obras1tipo" class="form-control">
						<option value="">select</option>
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
				<label for="obras2" class="col-md-4 control-label">Obras Realizadas 2:</label>
				<div class="col-md-8">
					<input type="text" name="obras2" value="<?php echo ($this->input->post('obras2') ? $this->input->post('obras2') : $formulariot['obras2']); ?>" class="form-control" id="obras2" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="obras2empresa" class="col-md-4 control-label">Empresa 2:</label>
				<div class="col-md-8">
					<input type="text" name="obras2empresa" value="<?php echo ($this->input->post('obras2empresa') ? $this->input->post('obras2empresa') : $formulariot['obras2empresa']); ?>" class="form-control" id="obras2empresa" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="obras2contacto" class="col-md-4 control-label">Contacto 2:</label>
				<div class="col-md-8">
					<input type="text" name="obras2contacto" value="<?php echo ($this->input->post('obras2contacto') ? $this->input->post('obras2contacto') : $formulariot['obras2contacto']); ?>" class="form-control" id="obras2contacto" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="obras2telefono" class="col-md-4 control-label">Teléfono 2:</label>
				<div class="col-md-8">
					<input type="text" name="obras2telefono" value="<?php echo ($this->input->post('obras2telefono') ? $this->input->post('obras2telefono') : $formulariot['obras2telefono']); ?>" class="form-control" id="obras2telefono" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="obras2tipo" class="col-md-4 control-label">Tipo de Obra 2:</label>
				<div class="col-md-8">
					<select name="obras2tipo" class="form-control">
						<option value="">select</option>
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
				<label for="obras3" class="col-md-4 control-label">Obras Realizadas 3:</label>
				<div class="col-md-8">
					<input type="text" name="obras3" value="<?php echo ($this->input->post('obras3') ? $this->input->post('obras3') : $formulariot['obras3']); ?>" class="form-control" id="obras3" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="obras3empresa" class="col-md-4 control-label">Empresa 3:</label>
				<div class="col-md-8">
					<input type="text" name="obras3empresa" value="<?php echo ($this->input->post('obras3empresa') ? $this->input->post('obras3empresa') : $formulariot['obras3empresa']); ?>" class="form-control" id="obras3empresa" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="obras3contacto" class="col-md-4 control-label">Contacto 3:</label>
				<div class="col-md-8">
					<input type="text" name="obras3contacto" value="<?php echo ($this->input->post('obras3contacto') ? $this->input->post('obras3contacto') : $formulariot['obras3contacto']); ?>" class="form-control" id="obras3contacto" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="obras3telefono" class="col-md-4 control-label">Teléfono 3:</label>
				<div class="col-md-8">
					<input type="text" name="obras3telefono" value="<?php echo ($this->input->post('obras3telefono') ? $this->input->post('obras3telefono') : $formulariot['obras3telefono']); ?>" class="form-control" id="obras3telefono" />
				</div>
			</div>						
			<div class="input-group mb-3">
				<label for="obras3tipo" class="col-md-4 control-label">Tipo de Obra 3:</label>
				<div class="col-md-8">
					<select name="obras3tipo" class="form-control">
						<option value="">select</option>
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
	<div class="card text-white bg-secondary mb-3">
		<div class="card-header">
			AUTOEVALUACION (COMPLETE CON ESCALA DEL 1 AL 5)
		</div>
		<div class="card-body">
			<div class="input-group mb-3">
				<label for="ordenylimpiezaobra" class="col-md-4 control-label">Orden y Limpieza de Obra</label>
				<div class="col-md-8">
					<input type="text" name="ordenylimpiezaobra" value="<?php echo ($this->input->post('ordenylimpiezaobra') ? $this->input->post('ordenylimpiezaobra') : $formulariot['ordenylimpiezaobra']); ?>" class="form-control" id="ordenylimpiezaobra" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="calidamaterialesequipos" class="col-md-4 control-label">Calidad de Materiales y Equipos</label>
				<div class="col-md-8">
					<input type="text" name="calidamaterialesequipos" value="<?php echo ($this->input->post('calidamaterialesequipos') ? $this->input->post('calidamaterialesequipos') : $formulariot['calidamaterialesequipos']); ?>" class="form-control" id="calidamaterialesequipos" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="cumplimientonormashys" class="col-md-4 control-label">Cumplimiento de normas hys</label>
				<div class="col-md-8">
					<input type="text" name="cumplimientonormashys" value="<?php echo ($this->input->post('cumplimientonormashys') ? $this->input->post('cumplimientonormashys') : $formulariot['cumplimientonormashys']); ?>" class="form-control" id="cumplimientonormashys" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="cumplimientoplazos" class="col-md-4 control-label">Cumplimiento de Plazos</label>
				<div class="col-md-8">
					<input type="text" name="cumplimientoplazos" value="<?php echo ($this->input->post('cumplimientoplazos') ? $this->input->post('cumplimientoplazos') : $formulariot['cumplimientoplazos']); ?>" class="form-control" id="cumplimientoplazos" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="atencionprofdurante" class="col-md-4 control-label">Atención Prof. durante el Proyecto</label>
				<div class="col-md-8">
					<input type="text" name="atencionprofdurante" value="<?php echo ($this->input->post('atencionprofdurante') ? $this->input->post('atencionprofdurante') : $formulariot['atencionprofdurante']); ?>" class="form-control" id="atencionprofdurante" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="fortalezas" class="col-md-4 control-label">Fortalezas</label>
				<div class="col-md-8">
					<textarea name="fortalezas" class="form-control" id="fortalezas"><?php echo ($this->input->post('fortalezas') ? $this->input->post('fortalezas') : $formulariot['fortalezas']); ?></textarea>
				</div>
			</div>
		</div>
  	</div>

	<div class="card text-white bg-secondary mb-3">
		<div class="card-header">
			REFERENCIAS MONETARIAS	
		</div>
		<div class="card-body">
			<div class="input-group mb-3">
				<label for="montoobras1" class="col-md-4 control-label">Obra 1:</label>
				<div class="col-md-8">
					<input type="text" name="montoobras1" value="<?php echo ($this->input->post('montoobras1') ? $this->input->post('montoobras1') : $formulariot['montoobras1']); ?>" class="form-control" id="montoobras1" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="montoempresa1" class="col-md-4 control-label">Empresa Obra 1:</label>
				<div class="col-md-8">
					<input type="text" name="montoempresa1" value="<?php echo ($this->input->post('montoempresa1') ? $this->input->post('montoempresa1') : $formulariot['montoempresa1']); ?>" class="form-control" id="montoempresa1" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="monto1" class="col-md-4 control-label">Monto Obra 1:</label>
				<div class="col-md-8">
					<input type="text" name="monto1" value="<?php echo ($this->input->post('monto1') ? $this->input->post('monto1') : $formulariot['monto1']); ?>" class="form-control" id="monto1" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="montoobras2" class="col-md-4 control-label">Obra 2:</label>
				<div class="col-md-8">
					<input type="text" name="montoobras2" value="<?php echo ($this->input->post('montoobras2') ? $this->input->post('montoobras2') : $formulariot['montoobras2']); ?>" class="form-control" id="montoobras2" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="montoempresa2" class="col-md-4 control-label">Empresa Obra 2:</label>
				<div class="col-md-8">
					<input type="text" name="montoempresa2" value="<?php echo ($this->input->post('montoempresa2') ? $this->input->post('montoempresa2') : $formulariot['montoempresa2']); ?>" class="form-control" id="montoempresa2" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="monto2" class="col-md-4 control-label">Monto Obra 2:</label>
				<div class="col-md-8">
					<input type="text" name="monto2" value="<?php echo ($this->input->post('monto2') ? $this->input->post('monto2') : $formulariot['monto2']); ?>" class="form-control" id="monto2" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="montoobras3" class="col-md-4 control-label">Obra 3:</label>
				<div class="col-md-8">
					<input type="text" name="montoobras3" value="<?php echo ($this->input->post('montoobras3') ? $this->input->post('montoobras3') : $formulariot['montoobras3']); ?>" class="form-control" id="montoobras3" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="montoempresa3" class="col-md-4 control-label">Empresa Obra 3:</label>
				<div class="col-md-8">
					<input type="text" name="montoempresa3" value="<?php echo ($this->input->post('montoempresa3') ? $this->input->post('montoempresa3') : $formulariot['montoempresa3']); ?>" class="form-control" id="montoempresa3" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="monto3" class="col-md-4 control-label">Monto Obra 3:</label>
				<div class="col-md-8">
					<input type="text" name="monto3" value="<?php echo ($this->input->post('monto3') ? $this->input->post('monto3') : $formulariot['monto3']); ?>" class="form-control" id="monto3" />
				</div>
			</div>
		</div>
  	</div>

	<div class="card text-white bg-secondary mb-3">
		<div class="card-header">
			FLOTA DE VEHICULOS
		</div>
		<div class="card-body">
			<div class="input-group mb-3">
				<label for="flotavehiculosutilitarios" class="col-md-4 control-label">Flota de vehículos utilitarios</label>
				<div class="col-md-8">
					<input type="text" name="flotavehiculosutilitarios" value="<?php echo ($this->input->post('flotavehiculosutilitarios') ? $this->input->post('flotavehiculosutilitarios') : $formulariot['flotavehiculosutilitarios']); ?>" class="form-control" id="flotavehiculosutilitarios" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="flotavehiculoscarga" class="col-md-4 control-label">Flota de vehículos de carga</label>
				<div class="col-md-8">
					<input type="text" name="flotavehiculoscarga" value="<?php echo ($this->input->post('flotavehiculoscarga') ? $this->input->post('flotavehiculoscarga') : $formulariot['flotavehiculoscarga']); ?>" class="form-control" id="flotavehiculoscarga" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="flotavehiculostripulados" class="col-md-4 control-label">Flota de vehículos tripulados</label>
				<div class="col-md-8">
					<input type="text" name="flotavehiculostripulados" value="<?php echo ($this->input->post('flotavehiculostripulados') ? $this->input->post('flotavehiculostripulados') : $formulariot['flotavehiculostripulados']); ?>" class="form-control" id="flotavehiculostripulados" />
				</div>
			</div>
		</div>
  	</div>

</div>

	



	<div class="form-group" hidden>
		<label for="idproveedor" class="col-md-4 control-label">Idproveedor</label>
		<div class="col-md-8">
			<input type="text" name="idproveedor" value="<?php echo ($this->input->post('idproveedor') ? $this->input->post('idproveedor') : $formulariot['idproveedor']); ?>" class="form-control" id="idproveedor" />
		</div>
	</div>

	<div class="input-group mb-3" hidden>
		<label for="aprobado" class="col-md-4 control-label">Aprobado</label>
		<div class="col-md-8">
			<input type="text" name="aprobado" value="<?php echo ($this->input->post('aprobado') ? $this->input->post('aprobado') : $formulariot['aprobado']); ?>" class="form-control" id="aprobado" />
		</div>
	</div>
	<div class="input-group mb-3" hidden>
		<label for="completo" class="col-md-4 control-label">Completo</label>
		<div class="col-md-8">
			<input type="text" name="completo" value="<?php echo ($this->input->post('completo') ? $this->input->post('completo') : $formulariot['completo']); ?>" class="form-control" id="completo" />
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Guardar Datos</button>
        </div>
	</div>
	
<?php echo form_close(); ?>