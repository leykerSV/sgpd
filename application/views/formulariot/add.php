<?php echo form_open('formulariot/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="actividadpcipal" class="col-md-4 control-label">Actividadpcipal</label>
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
					$selected = ($value == $this->input->post('actividadpcipal')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="obras1tipo" class="col-md-4 control-label">Obras1tipo</label>
		<div class="col-md-8">
			<select name="obras1tipo" class="form-control">
				<option value="">select</option>
				<?php 
				$obras1tipo_values = array(
					'Multinacional'=>'Multinacional',
					'Nacional'=>'Nacional',
				);

				foreach($obras1tipo_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('obras1tipo')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="obras2tipo" class="col-md-4 control-label">Obras2tipo</label>
		<div class="col-md-8">
			<select name="obras2tipo" class="form-control">
				<option value="">select</option>
				<?php 
				$obras2tipo_values = array(
					'Multinacional'=>'Multinacional',
					'Nacional'=>'Nacional',
				);

				foreach($obras2tipo_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('obras2tipo')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="obras3tipo" class="col-md-4 control-label">Obras3tipo</label>
		<div class="col-md-8">
			<select name="obras3tipo" class="form-control">
				<option value="">select</option>
				<?php 
				$obras3tipo_values = array(
					'Multinacional'=>'Multinacional',
					'Nacional'=>'Nacional',
				);

				foreach($obras3tipo_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('obras3tipo')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="idproveedor" class="col-md-4 control-label">Idproveedor</label>
		<div class="col-md-8">
			<input type="text" name="idproveedor" value="<?php echo $this->input->post('idproveedor'); ?>" class="form-control" id="idproveedor" />
		</div>
	</div>
	<div class="form-group">
		<label for="lugarservicios" class="col-md-4 control-label">Lugarservicios</label>
		<div class="col-md-8">
			<input type="text" name="lugarservicios" value="<?php echo $this->input->post('lugarservicios'); ?>" class="form-control" id="lugarservicios" />
		</div>
	</div>
	<div class="form-group">
		<label for="reptecnico" class="col-md-4 control-label">Reptecnico</label>
		<div class="col-md-8">
			<input type="text" name="reptecnico" value="<?php echo $this->input->post('reptecnico'); ?>" class="form-control" id="reptecnico" />
		</div>
	</div>
	<div class="form-group">
		<label for="profesion" class="col-md-4 control-label">Profesion</label>
		<div class="col-md-8">
			<input type="text" name="profesion" value="<?php echo $this->input->post('profesion'); ?>" class="form-control" id="profesion" />
		</div>
	</div>
	<div class="form-group">
		<label for="cantidadpersonal" class="col-md-4 control-label">Cantidadpersonal</label>
		<div class="col-md-8">
			<input type="text" name="cantidadpersonal" value="<?php echo $this->input->post('cantidadpersonal'); ?>" class="form-control" id="cantidadpersonal" />
		</div>
	</div>
	<div class="form-group">
		<label for="cantpersonaladmin" class="col-md-4 control-label">Cantpersonaladmin</label>
		<div class="col-md-8">
			<input type="text" name="cantpersonaladmin" value="<?php echo $this->input->post('cantpersonaladmin'); ?>" class="form-control" id="cantpersonaladmin" />
		</div>
	</div>
	<div class="form-group">
		<label for="cantpersonalprof" class="col-md-4 control-label">Cantpersonalprof</label>
		<div class="col-md-8">
			<input type="text" name="cantpersonalprof" value="<?php echo $this->input->post('cantpersonalprof'); ?>" class="form-control" id="cantpersonalprof" />
		</div>
	</div>
	<div class="form-group">
		<label for="cantpersonalobra" class="col-md-4 control-label">Cantpersonalobra</label>
		<div class="col-md-8">
			<input type="text" name="cantpersonalobra" value="<?php echo $this->input->post('cantpersonalobra'); ?>" class="form-control" id="cantpersonalobra" />
		</div>
	</div>
	<div class="form-group">
		<label for="certificaciones" class="col-md-4 control-label">Certificaciones</label>
		<div class="col-md-8">
			<input type="text" name="certificaciones" value="<?php echo $this->input->post('certificaciones'); ?>" class="form-control" id="certificaciones" />
		</div>
	</div>
	<div class="form-group">
		<label for="obras1" class="col-md-4 control-label">Obras1</label>
		<div class="col-md-8">
			<input type="text" name="obras1" value="<?php echo $this->input->post('obras1'); ?>" class="form-control" id="obras1" />
		</div>
	</div>
	<div class="form-group">
		<label for="obras1empresa" class="col-md-4 control-label">Obras1empresa</label>
		<div class="col-md-8">
			<input type="text" name="obras1empresa" value="<?php echo $this->input->post('obras1empresa'); ?>" class="form-control" id="obras1empresa" />
		</div>
	</div>
	<div class="form-group">
		<label for="obras1contacto" class="col-md-4 control-label">Obras1contacto</label>
		<div class="col-md-8">
			<input type="text" name="obras1contacto" value="<?php echo $this->input->post('obras1contacto'); ?>" class="form-control" id="obras1contacto" />
		</div>
	</div>
	<div class="form-group">
		<label for="obras1telefono" class="col-md-4 control-label">Obras1telefono</label>
		<div class="col-md-8">
			<input type="text" name="obras1telefono" value="<?php echo $this->input->post('obras1telefono'); ?>" class="form-control" id="obras1telefono" />
		</div>
	</div>
	<div class="form-group">
		<label for="obras2" class="col-md-4 control-label">Obras2</label>
		<div class="col-md-8">
			<input type="text" name="obras2" value="<?php echo $this->input->post('obras2'); ?>" class="form-control" id="obras2" />
		</div>
	</div>
	<div class="form-group">
		<label for="obras2empresa" class="col-md-4 control-label">Obras2empresa</label>
		<div class="col-md-8">
			<input type="text" name="obras2empresa" value="<?php echo $this->input->post('obras2empresa'); ?>" class="form-control" id="obras2empresa" />
		</div>
	</div>
	<div class="form-group">
		<label for="obras2contacto" class="col-md-4 control-label">Obras2contacto</label>
		<div class="col-md-8">
			<input type="text" name="obras2contacto" value="<?php echo $this->input->post('obras2contacto'); ?>" class="form-control" id="obras2contacto" />
		</div>
	</div>
	<div class="form-group">
		<label for="obras2telefono" class="col-md-4 control-label">Obras2telefono</label>
		<div class="col-md-8">
			<input type="text" name="obras2telefono" value="<?php echo $this->input->post('obras2telefono'); ?>" class="form-control" id="obras2telefono" />
		</div>
	</div>
	<div class="form-group">
		<label for="obras3" class="col-md-4 control-label">Obras3</label>
		<div class="col-md-8">
			<input type="text" name="obras3" value="<?php echo $this->input->post('obras3'); ?>" class="form-control" id="obras3" />
		</div>
	</div>
	<div class="form-group">
		<label for="obras3empresa" class="col-md-4 control-label">Obras3empresa</label>
		<div class="col-md-8">
			<input type="text" name="obras3empresa" value="<?php echo $this->input->post('obras3empresa'); ?>" class="form-control" id="obras3empresa" />
		</div>
	</div>
	<div class="form-group">
		<label for="obras3contacto" class="col-md-4 control-label">Obras3contacto</label>
		<div class="col-md-8">
			<input type="text" name="obras3contacto" value="<?php echo $this->input->post('obras3contacto'); ?>" class="form-control" id="obras3contacto" />
		</div>
	</div>
	<div class="form-group">
		<label for="obras3telefono" class="col-md-4 control-label">Obras3telefono</label>
		<div class="col-md-8">
			<input type="text" name="obras3telefono" value="<?php echo $this->input->post('obras3telefono'); ?>" class="form-control" id="obras3telefono" />
		</div>
	</div>
	<div class="form-group">
		<label for="ordenylimpiezaobra" class="col-md-4 control-label">Ordenylimpiezaobra</label>
		<div class="col-md-8">
			<input type="text" name="ordenylimpiezaobra" value="<?php echo $this->input->post('ordenylimpiezaobra'); ?>" class="form-control" id="ordenylimpiezaobra" />
		</div>
	</div>
	<div class="form-group">
		<label for="calidamaterialesequipos" class="col-md-4 control-label">Calidamaterialesequipos</label>
		<div class="col-md-8">
			<input type="text" name="calidamaterialesequipos" value="<?php echo $this->input->post('calidamaterialesequipos'); ?>" class="form-control" id="calidamaterialesequipos" />
		</div>
	</div>
	<div class="form-group">
		<label for="cumplimientonormashys" class="col-md-4 control-label">Cumplimientonormashys</label>
		<div class="col-md-8">
			<input type="text" name="cumplimientonormashys" value="<?php echo $this->input->post('cumplimientonormashys'); ?>" class="form-control" id="cumplimientonormashys" />
		</div>
	</div>
	<div class="form-group">
		<label for="cumplimientoplazos" class="col-md-4 control-label">Cumplimientoplazos</label>
		<div class="col-md-8">
			<input type="text" name="cumplimientoplazos" value="<?php echo $this->input->post('cumplimientoplazos'); ?>" class="form-control" id="cumplimientoplazos" />
		</div>
	</div>
	<div class="form-group">
		<label for="atencionprofdurante" class="col-md-4 control-label">Atencionprofdurante</label>
		<div class="col-md-8">
			<input type="text" name="atencionprofdurante" value="<?php echo $this->input->post('atencionprofdurante'); ?>" class="form-control" id="atencionprofdurante" />
		</div>
	</div>
	<div class="form-group">
		<label for="montoobras1" class="col-md-4 control-label">Montoobras1</label>
		<div class="col-md-8">
			<input type="text" name="montoobras1" value="<?php echo $this->input->post('montoobras1'); ?>" class="form-control" id="montoobras1" />
		</div>
	</div>
	<div class="form-group">
		<label for="montoempresa1" class="col-md-4 control-label">Montoempresa1</label>
		<div class="col-md-8">
			<input type="text" name="montoempresa1" value="<?php echo $this->input->post('montoempresa1'); ?>" class="form-control" id="montoempresa1" />
		</div>
	</div>
	<div class="form-group">
		<label for="monto1" class="col-md-4 control-label">Monto1</label>
		<div class="col-md-8">
			<input type="text" name="monto1" value="<?php echo $this->input->post('monto1'); ?>" class="form-control" id="monto1" />
		</div>
	</div>
	<div class="form-group">
		<label for="montoobras2" class="col-md-4 control-label">Montoobras2</label>
		<div class="col-md-8">
			<input type="text" name="montoobras2" value="<?php echo $this->input->post('montoobras2'); ?>" class="form-control" id="montoobras2" />
		</div>
	</div>
	<div class="form-group">
		<label for="montoempresa2" class="col-md-4 control-label">Montoempresa2</label>
		<div class="col-md-8">
			<input type="text" name="montoempresa2" value="<?php echo $this->input->post('montoempresa2'); ?>" class="form-control" id="montoempresa2" />
		</div>
	</div>
	<div class="form-group">
		<label for="monto2" class="col-md-4 control-label">Monto2</label>
		<div class="col-md-8">
			<input type="text" name="monto2" value="<?php echo $this->input->post('monto2'); ?>" class="form-control" id="monto2" />
		</div>
	</div>
	<div class="form-group">
		<label for="montoobras3" class="col-md-4 control-label">Montoobras3</label>
		<div class="col-md-8">
			<input type="text" name="montoobras3" value="<?php echo $this->input->post('montoobras3'); ?>" class="form-control" id="montoobras3" />
		</div>
	</div>
	<div class="form-group">
		<label for="montoempresa3" class="col-md-4 control-label">Montoempresa3</label>
		<div class="col-md-8">
			<input type="text" name="montoempresa3" value="<?php echo $this->input->post('montoempresa3'); ?>" class="form-control" id="montoempresa3" />
		</div>
	</div>
	<div class="form-group">
		<label for="monto3" class="col-md-4 control-label">Monto3</label>
		<div class="col-md-8">
			<input type="text" name="monto3" value="<?php echo $this->input->post('monto3'); ?>" class="form-control" id="monto3" />
		</div>
	</div>
	<div class="form-group">
		<label for="flotavehiculosutilitarios" class="col-md-4 control-label">Flotavehiculosutilitarios</label>
		<div class="col-md-8">
			<input type="text" name="flotavehiculosutilitarios" value="<?php echo $this->input->post('flotavehiculosutilitarios'); ?>" class="form-control" id="flotavehiculosutilitarios" />
		</div>
	</div>
	<div class="form-group">
		<label for="flotavehiculoscarga" class="col-md-4 control-label">Flotavehiculoscarga</label>
		<div class="col-md-8">
			<input type="text" name="flotavehiculoscarga" value="<?php echo $this->input->post('flotavehiculoscarga'); ?>" class="form-control" id="flotavehiculoscarga" />
		</div>
	</div>
	<div class="form-group">
		<label for="flotavehiculostripulados" class="col-md-4 control-label">Flotavehiculostripulados</label>
		<div class="col-md-8">
			<input type="text" name="flotavehiculostripulados" value="<?php echo $this->input->post('flotavehiculostripulados'); ?>" class="form-control" id="flotavehiculostripulados" />
		</div>
	</div>
	<div class="form-group">
		<label for="aprobado" class="col-md-4 control-label">Aprobado</label>
		<div class="col-md-8">
			<input type="text" name="aprobado" value="<?php echo $this->input->post('aprobado'); ?>" class="form-control" id="aprobado" />
		</div>
	</div>
	<div class="form-group">
		<label for="completo" class="col-md-4 control-label">Completo</label>
		<div class="col-md-8">
			<input type="text" name="completo" value="<?php echo $this->input->post('completo'); ?>" class="form-control" id="completo" />
		</div>
	</div>
	<div class="form-group">
		<label for="provinciasalcanzadas" class="col-md-4 control-label">Provinciasalcanzadas</label>
		<div class="col-md-8">
			<textarea name="provinciasalcanzadas" class="form-control" id="provinciasalcanzadas"><?php echo $this->input->post('provinciasalcanzadas'); ?></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="fortalezas" class="col-md-4 control-label">Fortalezas</label>
		<div class="col-md-8">
			<textarea name="fortalezas" class="form-control" id="fortalezas"><?php echo $this->input->post('fortalezas'); ?></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>