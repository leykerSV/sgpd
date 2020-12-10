<?php echo form_open_multipart('doccomercial/edit/'.$doccomercial['iddoccomercial'],array("class"=>"form-horizontal")); ?>
<div class="container text-center">
	<p></p>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<h5 class="card-header">
					EMPRESA O CONTRATISTA
				</h5>
				<div class="card-body">
					<p class="card-text">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							<?php 
								echo 'Empresa: '.$this->session->userdata('idproveedor').' - '.$this->session->userdata('empresa');
								echo '<br />';
								echo 'Contacto: '.$this->session->userdata('nombres').' '.$this->session->userdata('apellidos');
								echo '<br />';
								echo 'Rubro: '.$this->session->userdata('rubro').'   -   '.'SubRubro: '.$this->session->userdata('subrubro') ;
								echo '<br />';
        					?>
							</div>
						</div>
					</div>
					</p>
				</div>
				<div class="card-footer">

				</div>
			</div>
		</div>
	</div>
	<p></p>

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
                    <h4 class="text-white">SOCIEDADES</h4>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
						<div class="col-md-9">
							
							<span class="label other">Contrato Social</span><input type="file" accept=".pdf" name="contratosocial" value="<?php echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="contratosocial" />
						</div>
						<div class="col-md-9">
							</span><span class="label other">Constancia de Inscripcion en AFIP</span><input type="file" accept=".pdf" name="inscripcion" value="<?php echo ($this->input->post('inscripcion') ? $this->input->post('inscripcion') : $doccomercial['inscripcion']); ?>" class="form-control" id="inscripcion" />
                        </div>
                        <div class="col-md-9">
							<span class="label other">Balance</span><input type="file" accept=".pdf" name="balance" value="<?php echo ($this->input->post('balance') ? $this->input->post('balance') : $doccomercial['balance']); ?>" class="form-control" id="balance" />
                        </div>
                        <div class="col-md-9">
							<span class="label other">Constancia IIBB</span><input type="file" accept=".pdf" value="<?php echo ($this->input->post('contastanciaiibb') ? $this->input->post('contastanciaiibb') : $doccomercial['contastanciaiibb']); ?>" class="form-control" id="contastanciaiibb" />
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
                    <h4 class="text-white">MONOTRIBUTO</h4>
                </div>
                <div class="col-md-9">
				<div class="input-group mb-3">
						<div class="col-md-9">
							<span class="label other">Constancia Monotributo</span><input type="file" accept=".pdf" name="constmonotributo" value="<?php echo ($this->input->post('constmonotributo') ? $this->input->post('constmonotributo') : $doccomercial['constmonotirbuto']); ?>" class="form-control" id="constmonotirbuto" />
						</div>
						<div class="col-md-9">
							<span class="label other">Constancia Título</span><input type="file" accept=".pdf" value="<?php echo ($this->input->post('titutlo') ? $this->input->post('titutlo') : $doccomercial['titutlo']); ?>" class="form-control" id="titutlo" />
                        </div>
                        <div class="col-md-9">
							<span class="label other">Matrícula</span><input type="file" accept=".pdf" name="matricula" value="<?php echo ($this->input->post('matricula') ? $this->input->post('matricula') : $doccomercial['matricula']); ?>" class="form-control" id="matricula" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<h5 class="card-header">
					ESTADO TRAMITE
				</h5>
				<div class="card-body">
					<p class="card-text">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="completo" class="col-md-4 control-label">Completo</label>
								<div class="col-md-8">								
									<?php if($this->input->post('completo'==0)){
										echo '<input type="checkbox" name="completo">MARCAR SI EL PROCESO DE CARGA SE COMPLETÓ</label>';
									}else{
										echo '<input type="checkbox" name="completo">MARCAR SI EL PROCESO DE CARGA SE COMPLETÓ</label>';
									}			
									?>
								
								</div>
							</div>
						</div>
					</div>SOCIEDADES
					</p>
				</div>
				<div class="card-footer">
					
				</div>
			</div>
		</div>
	</div>							
	<p></p>

	
	<div class="form-group" hidden>
		<label for="aprobado" class="col-md-4 control-label">Aprobado</label>
		<div class="col-md-8">
			<input type="text" name="aprobado" value="<?php echo ($this->input->post('aprobado') ? $this->input->post('aprobado') : $doccomercial['aprobado']); ?>" class="form-control" id="aprobado" />
		</div>
	</div>

	<div class="form-group" hidden>
		<label for="idproveedor" class="col-md-4 control-label">Idproveedor</label>
		<div class="col-md-8">
			<input type="text" name="idproveedor" value="<?php echo ($this->input->post('idproveedor') ? $this->input->post('idproveedor') : $doccomercial['idproveedor']); ?>" class="form-control" id="idproveedor" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Guardar</button>
        </div>
	</div>
</div>

<?php echo form_close(); ?>