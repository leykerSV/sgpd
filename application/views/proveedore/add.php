<?php echo form_open('proveedor/add',array("class"=>"form-horizontal")); ?>
<style>
    .bg-info {
        background-color: #4563ab !important;
    }
</style>
<div class="container text-center">
    <!--<div class="col text-center">
        <img src="COCYAR.png" class="img-fluid" alt="Responsive image">
    </div>-->
    <div class="text-white mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 bg-info d-flex justify-content-center align-items-center p-3">
                    <h4>EMPRESA</h4>
                </div>
                <div class="col-md-9">
					<div class="input-group mb-3">
						<div class="col-md-6">
							<input type="text" name="empresa" value="<?php echo $this->input->post('empresa'); ?>" class="form-control" id="empresa" placeholder="Nombre empresa (este dato será su usuario)" />
							<span class="text-danger"><?php echo form_error('empresa');?></span>	
                        </div>
                        <div class="col-md-6">
							<input type="password" name="pass" value="<?php echo $this->input->post('pass'); ?>" class="form-control" id="pass" placeholder="Password"/>
							<span class="text-danger"><?php echo form_error('pass');?></span>
                        </div>
                    </div>
					<div class="input-group mb-3">
						<div class="col-md-6">
							<input type="text" name="nombres" value="<?php echo $this->input->post('nombres'); ?>" class="form-control" id="nombres" placeholder="Nombre Contacto" />
							<span class="text-danger"><?php echo form_error('nombres');?></span>		
                        </div>
                        <div class="col-md-6">
							<input type="text" name="apellidos" value="<?php echo $this->input->post('apellidos'); ?>" class="form-control" id="apellidos" placeholder="Apellido Contacto" />
							<span class="text-danger"><?php echo form_error('apellidos');?></span>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
							<select name="rubro" class="form-control">
								<option value="">RUBRO</option>
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
							<input type="text" name="subrubro" value="<?php echo $this->input->post('subrubro'); ?>" class="form-control" id="subrubro" placeholder="Sub Rubro" />
							<span class="text-danger"><?php echo form_error('subrubro');?></span> 
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
                    <h4>CONTACTO</h4>
                </div>
                <div class="col-md-9">
					<div class="input-group mb-3">
						<div class="col-md-6">
							<input type="text" name="contacto" value="<?php echo $this->input->post('contacto'); ?>" class="form-control" id="contacto" placeholder="Persona de Contacto" />
							<span class="text-danger"><?php echo form_error('contacto');?></span>
                        </div>
                        <div class="col-md-6">
							<input type="text" name="ciudad" value="<?php echo $this->input->post('ciudad'); ?>" class="form-control" id="ciudad" placeholder="Ciudad" />
							<span class="text-danger"><?php echo form_error('ciudad');?></span>
                        </div>
                    </div>
					<div class="input-group mb-3">
						<div class="col-md-6">
							<input type="text" name="telefono" value="<?php echo $this->input->post('telefono'); ?>" class="form-control" id="telefono" placeholder="Teléfono" />
							<span class="text-danger"><?php echo form_error('telefono');?></span>			
                        </div>
                        <div class="col-md-6">
							<input type="text" name="mail" value="<?php echo $this->input->post('mail'); ?>" class="form-control" id="mail" placeholder="Mail" />
							<span class="text-danger"><?php echo form_error('mail');?></span>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
							<input type="text" name="web" value="<?php echo $this->input->post('web'); ?>" class="form-control" id="web" placeholder="Página Web" />
							<span class="text-danger"><?php echo form_error('web');?></span>
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
                    <h4>OBSERVACIONES</h4>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        <div class="col">
						<input type="text" name="observaciones" value="<?php echo $this->input->post('observaciones'); ?>" class="form-control" id="observaciones" placeholder="Observaciones Proveedor" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Guardar</button>
        </div>
	</div>
</div>

	<div class="form-group">
		<label for="activo" class="col-md-4 control-label" hidden>Activo</label>
		<div class="col-md-8">
			<input hidden type="text" name="activo" value="<?php echo $this->input->post('activo'); ?>" class="form-control" id="activo" />
		</div>
	</div>
	<div class="form-group">
		<label for="categoria" class="col-md-4 control-label" hidden>Categoria</label>
		<div class="col-md-8">
			<input hidden type="text" name="categoria" value="<?php echo $this->input->post('categoria'); ?>" class="form-control" id="categoria" />
		</div>
	</div>
	


<?php echo form_close(); ?>