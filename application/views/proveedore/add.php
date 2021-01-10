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
                        <div class="col">
						<input type="text" name="empresa" value="<?php echo $this->input->post('empresa'); ?>" class="form-control" id="empresa" placeholder="Razón Social" />
                        </div>
                    </div>
					<div class="input-group mb-3">
						<div class="col-md-6">
							<input type="text" name="usuario" value="<?php echo $this->input->post('usuario'); ?>" class="form-control" id="usuario" placeholder="Usuario (Max. 8 caracteres)" />
							<span class="text-danger"><?php echo form_error('usuario');?></span>	
                        </div>
                        <div class="col-md-6">
							<input type="password" name="pass" value="<?php echo $this->input->post('pass'); ?>" class="form-control" id="pass" placeholder="Password"/>
							<span class="text-danger"><?php echo form_error('pass');?></span>
                        </div>
                    </div>
					<div class="input-group mb-3">
						<div class="col">
							<input type="text" name="direccion" value="<?php echo $this->input->post('direccion'); ?>" class="form-control" id="direccion" placeholder="Direccion" />
							<span class="text-danger"><?php echo form_error('direccion');?></span>		
                        </div>
                    </div>
					<div class="input-group mb-3" hidden>
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
						<label class="control-label bg-info d-flex justify-content-center align-items-left">CONDICION FRENTE AL IVA</label>
							<select name="condicion" class="form-control">
								<?php 
								$condicion_values = array(
									'RESPONSABLE INSCRIPTO'=>'RESPONSABLE INSCRIPTO',
									'MONOTRIBUTO'=>'MONOTRIBUTO',
									'EXENTO'=>'EXENTO'
								);

								foreach($condicion_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('condicion')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('condicion');?></span>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
						<label class="control-label bg-info d-flex justify-content-center align-items-left">EMPLEADOR</label>
							<select name="empleador" class="form-control">
								<?php 
								$empleador_values = array(
									'SI'=>'SI',
									'NO'=>'NO',
								);

								foreach($empleador_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('empleador')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('empleador');?></span>
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
                    <h4>INFORMACION</h4>
                </div>
                <div class="col-md-9">
                <div class="input-group mb-3">
                        <div class="col">
						<label class="control-label bg-info d-flex justify-content-center align-items-left">RUBRO</label>
							<select name="rubro" class="form-control">
								<?php 
								$rubro_values = array(
                                    'ARQUITECTURA'=>'ARQUITECTURA',
									'CIVILES E INFRAESTRUCTURA'=>'CIVILES E INFRAESTRUCTURA',
									'ELECTROMECANICO'=>'ELECTROMECANICO'
								);

								foreach($rubro_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('rubro')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('rubro');?></span>
							</p></p>
							
							<label class="control-label bg-info d-flex justify-content-center align-items-left">SUBRUBROS</label>
                            <select name="subrubrocmb[]" class="form-control" multiple>
                                <?php 
                                    foreach($subrubros as $valor)
                                    {
                                        echo '<option value="'.$valor['subrubro'].'">'.$valor['subrubro'].'</option>';
                                    } 
                            ?>
                            </select>
							<p></p>
							<input type="text" name="subrubro" hidden value="<?php echo $this->input->post('subrubro'); ?>" class="form-control" id="subrubro" placeholder="Sub Rubro" />
							<span class="text-danger"><?php echo form_error('subrubro');?></span> 
                        </div>
                    </div>
                    
                
				<div class="input-group mb-3">
                        <div class="col">
						<label class="control-label bg-info d-flex justify-content-center align-items-left">TIPO PROVEEDOR</label>
							<select name="tipo" class="form-control">
								<?php 
								$tipo_values = array(
									'Contratista' => 'Contratista',
									'Proveedor de Sercivios (Seguridad, Agua, Chofer, etc.)' => 'Proveedor de Sercivios (Seguridad, Agua, Chofer, etc.)',
									'Proveedor de Materiales' => 'Proveedor de Materiales', 
									'Servicios Profesionales / Consultoría' => 'Servicios Profesionales / Consultoría'
								);

								foreach($tipo_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('tipo')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('tipo');?></span>
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
							<input type="text" name="cargo" value="<?php echo $this->input->post('cargo'); ?>" class="form-control" id="cargo" placeholder="Cargo" />
							<span class="text-danger"><?php echo form_error('cargo');?></span>
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

<script>
    $("#condicion").change(function() {
        var condicion = $(this).children("option:selected").val();
        $.ajax({
            error: function() {
                alert('error');
            },
            success: function(data) {
                //console.log(data);
                $('#tematican2').empty();
                for (i of data) {
                    //console.log(i.indice2 + ' ' + i.descripcion2);
                    $('#tematican2').prepend('<option value="' + i.indice2 + '" >' + i
                        .descripcion2 + '</option>');
                }
                $('#tematican2').prepend(
                    '<option selected>Seleccionar Tematica de Nivel 2</option>');
            }
        });
    });
    </script>