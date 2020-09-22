<?php echo form_open('proveedor/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="rubro" class="col-md-4 control-label"><span class="text-danger">*</span>Rubro</label>
		<div class="col-md-8">
			<select name="rubro" class="form-control">
				<option value="">select</option>
				<?php 
				$rubro_values = array(
					'ARQUITECTURA'=>'ARQUITECTURA',
					'CIVILES'=>'CIVILES',
					'ELECTROMECANICO'=>'ELECTROMECANICO',
				);

				foreach($rubro_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('rubro')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
			<span class="text-danger"><?php echo form_error('rubro');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="pass" class="col-md-4 control-label"><span class="text-danger">*</span>Pass</label>
		<div class="col-md-8">
			<input type="password" name="pass" value="<?php echo $this->input->post('pass'); ?>" class="form-control" id="pass" />
			<span class="text-danger"><?php echo form_error('pass');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="empresa" class="col-md-4 control-label"><span class="text-danger">*</span>Empresa</label>
		<div class="col-md-8">
			<input type="text" name="empresa" value="<?php echo $this->input->post('empresa'); ?>" class="form-control" id="empresa" />
			<span class="text-danger"><?php echo form_error('empresa');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="apellidos" class="col-md-4 control-label"><span class="text-danger">*</span>Apellidos</label>
		<div class="col-md-8">
			<input type="text" name="apellidos" value="<?php echo $this->input->post('apellidos'); ?>" class="form-control" id="apellidos" />
			<span class="text-danger"><?php echo form_error('apellidos');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="nombres" class="col-md-4 control-label"><span class="text-danger">*</span>Nombres</label>
		<div class="col-md-8">
			<input type="text" name="nombres" value="<?php echo $this->input->post('nombres'); ?>" class="form-control" id="nombres" />
			<span class="text-danger"><?php echo form_error('nombres');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="telefono" class="col-md-4 control-label"><span class="text-danger">*</span>Telefono</label>
		<div class="col-md-8">
			<input type="text" name="telefono" value="<?php echo $this->input->post('telefono'); ?>" class="form-control" id="telefono" />
			<span class="text-danger"><?php echo form_error('telefono');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="mail" class="col-md-4 control-label"><span class="text-danger">*</span>Mail</label>
		<div class="col-md-8">
			<input type="text" name="mail" value="<?php echo $this->input->post('mail'); ?>" class="form-control" id="mail" />
			<span class="text-danger"><?php echo form_error('mail');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="subrubro" class="col-md-4 control-label"><span class="text-danger">*</span>Subrubro</label>
		<div class="col-md-8">
			<input type="text" name="subrubro" value="<?php echo $this->input->post('subrubro'); ?>" class="form-control" id="subrubro" />
			<span class="text-danger"><?php echo form_error('subrubro');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="ciudad" class="col-md-4 control-label"><span class="text-danger">*</span>Ciudad</label>
		<div class="col-md-8">
			<input type="text" name="ciudad" value="<?php echo $this->input->post('ciudad'); ?>" class="form-control" id="ciudad" />
			<span class="text-danger"><?php echo form_error('ciudad');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="web" class="col-md-4 control-label"><span class="text-danger">*</span>Web</label>
		<div class="col-md-8">
			<input type="text" name="web" value="<?php echo $this->input->post('web'); ?>" class="form-control" id="web" />
			<span class="text-danger"><?php echo form_error('web');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="observaciones" class="col-md-4 control-label">Observaciones</label>
		<div class="col-md-8">
			<input type="text" name="observaciones" value="<?php echo $this->input->post('observaciones'); ?>" class="form-control" id="observaciones" />
		</div>
	</div>
	<div class="form-group">
		<label for="contacto" class="col-md-4 control-label"><span class="text-danger">*</span>Contacto</label>
		<div class="col-md-8">
			<input type="text" name="contacto" value="<?php echo $this->input->post('contacto'); ?>" class="form-control" id="contacto" />
			<span class="text-danger"><?php echo form_error('contacto');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="activo" class="col-md-4 control-label">Activo</label>
		<div class="col-md-8">
			<input type="text" name="activo" value="<?php echo $this->input->post('activo'); ?>" class="form-control" id="activo" />
		</div>
	</div>
	<div class="form-group">
		<label for="categoria" class="col-md-4 control-label">Categoria</label>
		<div class="col-md-8">
			<input type="text" name="categoria" value="<?php echo $this->input->post('categoria'); ?>" class="form-control" id="categoria" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>