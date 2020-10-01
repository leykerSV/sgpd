<?php echo form_open_multipart('doccomercial/edit/'.$doccomercial['iddoccomercial'],array("class"=>"form-horizontal")); ?>
<div class="container-fluid" align="center">
	<div class="row">
		<div class="col-md-12">
			<img src="<?php echo base_url('assets/imagenes/cabeza.png'); ?>" alt="">
		</div>
	</div>
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
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<h5 class="card-header">
					CONTRATO SOCIAL (sociedades)
				</h5>
				<div class="card-body">
					<p class="card-text">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="contratosocial" class="col-md-4 control-label">Archivo Contrato Social</label>
								<div class="col-md-8">
									<input type="file" accept=".pdf" name="contratosocial" value="<?php echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="contratosocial" />
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<div class="form-group">
									<label for="contratosocialobs" class="col-md-4 control-label">Observaciones</label>
									<div class="col-md-8">
										<input type="text" size="150" name="contratosocialobs" value="<?php echo ($this->input->post('contratosocialobs') ? $this->input->post('contratosocialobs') : $doccomercial['contratosocialobs']); ?>" class="form-control" id="contratosocialobs" />
									</div>
								</div>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<div class="col-md-8">
									<?php if($this->input->post('contratosocialok'==0)){
										echo '<input type="checkbox" name="aprobado" onclick="return false;" checked>APROBADO</label>';
									}else{
										echo '<input type="checkbox" name="aprobado" onclick="return false;">APROBADO</label>';
									}			
									?>
								</div>
							</div>
						</div>
					</div>
					</p>
				</div>
				<div class="card-footer">
					La documentación debe ser en formato PDF y no pesar mas de 2 mb.
				</div>
			</div>
		</div>
	</div>
	<p></p>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<h5 class="card-header">
					INSCRIPCION EN AFIP (sociedades)
				</h5>
				<div class="card-body">
					<p class="card-text">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="inscripcion" class="col-md-4 control-label">Archivo Inscripcion AFIP</label>
								<div class="col-md-8">
									<input type="file" accept=".pdf" name="inscripcion" value="<?php echo ($this->input->post('inscripcion') ? $this->input->post('inscripcion') : $doccomercial['inscripcion']); ?>" class="form-control" id="inscripcion" />
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="inscripcionobs" class="col-md-4 control-label">Observaciones</label>
								<div class="col-md-8">
									<input type="text" name="inscripcionobs" value="<?php echo ($this->input->post('inscripcionobs') ? $this->input->post('inscripcionobs') : $doccomercial['inscripcionobs']); ?>" class="form-control" id="inscripcionobs" />
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<div class="col-md-8">
									<?php if($this->input->post('inscripcionok'==0)){
										echo '<input type="checkbox" name="aprobado" onclick="return false;" checked>APROBADO</label>';
									}else{
										echo '<input type="checkbox" name="aprobado" onclick="return false;">APROBADO</label>';
									}			
									?>
								</div>
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
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<h5 class="card-header">
					BALANCE (sociedades)
				</h5>
				<div class="card-body">
					<p class="card-text">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="balance" class="col-md-4 control-label">Archivo Balance</label>
								<div class="col-md-8">
									<input type="file" accept=".pdf" name="balance" value="<?php echo ($this->input->post('balance') ? $this->input->post('balance') : $doccomercial['balance']); ?>" class="form-control" id="balance" />
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="balanceobs" class="col-md-4 control-label">Observaciones</label>
								<div class="col-md-8">
									<input type="text" name="balanceobs" value="<?php echo ($this->input->post('balanceobs') ? $this->input->post('balanceobs') : $doccomercial['balanceobs']); ?>" class="form-control" id="balanceobs" />
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<div class="col-md-8">
									<?php if($this->input->post('balanceok'==0)){
										echo '<input type="checkbox" name="aprobado" onclick="return false;" checked>APROBADO</label>';
									}else{
										echo '<input type="checkbox" name="aprobado" onclick="return false;">APROBADO</label>';
									}			
									?>
								</div>
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
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<h5 class="card-header">
					CONSTANCIA IIBB (sociedades)
				</h5>
				<div class="card-body">
					<p class="card-text">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="contastanciaiibb" class="col-md-4 control-label">Archivo Contastancia IIBB</label>
								<div class="col-md-8">
									<input type="file" accept=".pdf" value="<?php echo ($this->input->post('contastanciaiibb') ? $this->input->post('contastanciaiibb') : $doccomercial['contastanciaiibb']); ?>" class="form-control" id="contastanciaiibb" />
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="constanciaiibbobs" class="col-md-4 control-label">Observaciones</label>
								<div class="col-md-8">
									<input type="text" name="constanciaiibbobs" value="<?php echo ($this->input->post('constanciaiibbobs') ? $this->input->post('constanciaiibbobs') : $doccomercial['constanciaiibbobs']); ?>" class="form-control" id="constanciaiibbobs" />
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<div class="col-md-8">
									<?php if($this->input->post('constanciaiibbok'==0)){
										echo '<input type="checkbox" name="aprobado" onclick="return false;" checked>APROBADO</label>';
									}else{
										echo '<input type="checkbox" name="aprobado" onclick="return false;">APROBADO</label>';
									}			
									?>
								</div>
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
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<h5 class="card-header">
					CONSTANCIA MONOTRIBUTO
				</h5>
				<div class="card-body">
					<p class="card-text">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="constmonotirbuto" class="col-md-4 control-label">Archivo Constancia Monotributo</label>
								<div class="col-md-8">
									<input type="file" accept=".pdf" name="constmonotirbuto" value="<?php echo ($this->input->post('constmonotirbuto') ? $this->input->post('constmonotirbuto') : $doccomercial['constmonotirbuto']); ?>" class="form-control" id="constmonotirbuto" />
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="constmonotributoobs" class="col-md-4 control-label">Observaciones</label>
								<div class="col-md-8">
									<input type="text" name="constmonotributoobs" value="<?php echo ($this->input->post('constmonotributoobs') ? $this->input->post('constmonotributoobs') : $doccomercial['constmonotributoobs']); ?>" class="form-control" id="constmonotributoobs" />
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<div class="col-md-8">
									<?php if($this->input->post('constmonotributook'==0)){
										echo '<input type="checkbox" name="aprobado" onclick="return false;" checked>APROBADO</label>';
									}else{
										echo '<input type="checkbox" name="aprobado" onclick="return false;">APROBADO</label>';
									}			
									?>
								</div>
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
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<h5 class="card-header">
					CONTANCIA TITULO
				</h5>
				<div class="card-body">
					<p class="card-text">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="titutlo" class="col-md-4 control-label">Archivo Titulo</label>
								<div class="col-md-8">
									<input type="file" accept=".pdf" value="<?php echo ($this->input->post('titutlo') ? $this->input->post('titutlo') : $doccomercial['titutlo']); ?>" class="form-control" id="titutlo" />
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="tituloobs" class="col-md-4 control-label">Observaciones</label>
								<div class="col-md-8">
									<input type="text" name="tituloobs" value="<?php echo ($this->input->post('tituloobs') ? $this->input->post('tituloobs') : $doccomercial['tituloobs']); ?>" class="form-control" id="tituloobs" />
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<div class="col-md-8">
									<?php if($this->input->post('titulook'==0)){
										echo '<input type="checkbox" name="aprobado" onclick="return false;" checked>APROBADO</label>';
									}else{
										echo '<input type="checkbox" name="aprobado" onclick="return false;">APROBADO</label>';
									}			
									?>
								</div>
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
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<h5 class="card-header">
					CONTANCIA TITULO
				</h5>
				<div class="card-body">
					<p class="card-text">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="matricula" class="col-md-4 control-label">Archivo Matricula</label>
								<div class="col-md-8">
									<input type="file" accept=".pdf" name="matricula" value="<?php echo ($this->input->post('matricula') ? $this->input->post('matricula') : $doccomercial['matricula']); ?>" class="form-control" id="matricula" />
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="matriculaobs" class="col-md-4 control-label">Observaciones</label>
								<div class="col-md-8">
									<input type="text" name="matriculaobs" value="<?php echo ($this->input->post('matriculaobs') ? $this->input->post('matriculaobs') : $doccomercial['matriculaobs']); ?>" class="form-control" id="matriculaobs" />
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<div class="col-md-8">
									<?php if($this->input->post('matriculaok'==0)){
										echo '<input type="checkbox" name="aprobado" onclick="return false;" checked>APROBADO</label>';
									}else{
										echo '<input type="checkbox" name="aprobado" onclick="return false;">APROBADO</label>';
									}			
									?>
								</div>
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
					</div>
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