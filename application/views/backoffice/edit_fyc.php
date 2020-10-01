<?php echo form_open('formulariofyc/edit/'.$formulariofyc['idformulariofyc'],array("class"=>"form-horizontal")); ?>
<div class="container-fluid" align="center">
	<div class="card text-white bg-info mb-3">
		<div class="card-header">
			INFORMACION FISCAL
		</div>
		<div class="card-body">
			<div class="input-group mb-3">
				<label for="categoriafiscal" class="col-md-4 control-label">Categoriafiscal</label>
				<div class="col-md-8">
					<select name="categoriafiscal" class="form-control">
						<option value="">select</option>
						<?php 
						$categoriafiscal_values = array(
							'RESP. INSCRIPTO'=>'RESP. INSCRIPTO',
							'MONOTRIBUTO'=>'MONOTRIBUTO',
							'CONS. FINAL'=>'CONS. FINAL',
							'EXENTO'=>'EXENTO',
						);

						foreach($categoriafiscal_values as $value => $display_text)
						{
							$selected = ($value == $formulariofyc['categoriafiscal']) ? ' selected="selected"' : "";

							echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
						} 
						?>
					</select>
				</div>
			</div>

			<div class="input-group mb-3">
				<label for="identificaciontributaria" class="col-md-4 control-label">Identificación Tributaria</label>
				<div class="col-md-8">
					<input type="text" name="identificaciontributaria" value="<?php echo ($this->input->post('identificaciontributaria') ? $this->input->post('identificaciontributaria') : $formulariofyc['identificaciontributaria']); ?>" class="form-control" id="identificaciontributaria" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="numidentificacion" class="col-md-4 control-label">Num. Identificación</label>
				<div class="col-md-8">
					<input type="text" name="numidentificacion" value="<?php echo ($this->input->post('numidentificacion') ? $this->input->post('numidentificacion') : $formulariofyc['numidentificacion']); ?>" class="form-control" id="numidentificacion" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="identtribpaisorigen" class="col-md-4 control-label">Ident. tributaria en pais origen</label>
				<div class="col-md-8">
					<input type="text" name="identtribpaisorigen" value="<?php echo ($this->input->post('identtribpaisorigen') ? $this->input->post('identtribpaisorigen') : $formulariofyc['identtribpaisorigen']); ?>" class="form-control" id="identtribpaisorigen" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="tipopersona" class="col-md-4 control-label">Tipo de persona</label>
				<div class="col-md-8">
					<input type="text" name="tipopersona" value="<?php echo ($this->input->post('tipopersona') ? $this->input->post('tipopersona') : $formulariofyc['tipopersona']); ?>" class="form-control" id="tipopersona" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="catsiap" class="col-md-4 control-label">Categoría SIAP</label>
				<div class="col-md-8">
					<input type="text" name="catsiap" value="<?php echo ($this->input->post('catsiap') ? $this->input->post('catsiap') : $formulariofyc['catsiap']); ?>" class="form-control" id="catsiap" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="motivobaja" class="col-md-4 control-label">Motivo baja</label>
				<div class="col-md-8">
					<input type="text" name="motivobaja" value="<?php echo ($this->input->post('motivobaja') ? $this->input->post('motivobaja') : $formulariofyc['motivobaja']); ?>" class="form-control" id="motivobaja" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="fechaconstitucion" class="col-md-4 control-label">Fecha de Constitución</label>
				<div class="col-md-8">
					<input type="text" name="fechaconstitucion" value="<?php echo ($this->input->post('fechaconstitucion') ? $this->input->post('fechaconstitucion') : $formulariofyc['fechaconstitucion']); ?>" class="form-control" id="fechaconstitucion" />
				</div>
			</div>
		</div>


	<div class="card text-white bg-info mb-3">
		<div class="card-header">
			DATOS BANCARIOS	
		</div>
		<div class="card-body">
			<div class="input-group mb-3">
				<label for="banco" class="col-md-4 control-label">Banco</label>
				<div class="col-md-8">
					<input type="text" name="banco" value="<?php echo ($this->input->post('banco') ? $this->input->post('banco') : $formulariofyc['banco']); ?>" class="form-control" id="banco" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="sucursalbanco" class="col-md-4 control-label">Sucursal del Banco</label>
				<div class="col-md-8">
					<input type="text" name="sucursalbanco" value="<?php echo ($this->input->post('sucursalbanco') ? $this->input->post('sucursalbanco') : $formulariofyc['sucursalbanco']); ?>" class="form-control" id="sucursalbanco" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="tipocuenta" class="col-md-4 control-label">Tipo de cuenta</label>
				<div class="col-md-8">
					<input type="text" name="tipocuenta" value="<?php echo ($this->input->post('tipocuenta') ? $this->input->post('tipocuenta') : $formulariofyc['tipocuenta']); ?>" class="form-control" id="tipocuenta" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="cbu" class="col-md-4 control-label">CBU</label>
				<div class="col-md-8">
					<input type="text" name="cbu" value="<?php echo ($this->input->post('cbu') ? $this->input->post('cbu') : $formulariofyc['cbu']); ?>" class="form-control" id="cbu" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="beneficiariochq" class="col-md-4 control-label">Beneficiario del cheque</label>
				<div class="col-md-8">
					<input type="text" name="beneficiariochq" value="<?php echo ($this->input->post('beneficiariochq') ? $this->input->post('beneficiariochq') : $formulariofyc['beneficiariochq']); ?>" class="form-control" id="beneficiariochq" />
				</div>
			</div>
		</div>
  	</div>

	<div class="card text-white bg-info mb-3">
		<div class="card-header">
			SITUACION IIBB	
		</div>
		<div class="card-body">
			<div class="input-group mb-3">
				<label for="situacioniibb" class="col-md-4 control-label">Situación IIBB</label>
				<div class="col-md-4">
					<select name="situacioniibb" class="form-control">
						<option value="">select</option>
						<?php 
						$situacioniibb_values = array(
							'CONTRIBUYENTE LOCAL'=>'CONTRIBUYENTE LOCAL',
							'CONVENIO MULTILATERAL'=>'CONVENIO MULTILATERAL',
							'REGIMEN SIMPLIFICADO'=>'REGIMEN SIMPLIFICADO',
							'NO INSCRIPTO'=>'NO INSCRIPTO',
							'EXENTO'=>'EXENTO',
						);

						foreach($situacioniibb_values as $value => $display_text)
						{
							$selected = ($value == $formulariofyc['situacioniibb']) ? ' selected="selected"' : "";

							echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
						} 
						?>
					</select>
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="numinscripiibb" class="col-md-4 control-label">Nro. inscrip. IIBB</label>
				<div class="col-md-8">
					<input type="text" name="numinscripiibb" value="<?php echo ($this->input->post('numinscripiibb') ? $this->input->post('numinscripiibb') : $formulariofyc['numinscripiibb']); ?>" class="form-control" id="numinscripiibb" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="porcret" class="col-md-4 control-label">Porcentaje de retención</label>
				<div class="col-md-8">
					<input type="text" name="porcret" value="<?php echo ($this->input->post('porcret') ? $this->input->post('porcret') : $formulariofyc['porcret']); ?>" class="form-control" id="porcret" />
				</div>
			</div>
		</div>
  	</div>

	<div class="card text-white bg-info mb-3">
		<div class="card-header">
			SITUACION FRENTE A GANACIAS	
		</div>
		<div class="card-body">
			<div class="input-group mb-3">
				<label for="ganancias" class="col-md-4 control-label">Ganancias</label>
				<div class="col-md-4">
					<select name="ganancias" class="form-control">
						<option value="">select</option>
						<?php 
							$ganancias_values = array(
								'INSCRIPTO'=>'INSCRIPTO',
								'EXENTO'=>'EXENTO',
							);

							foreach($ganancias_values as $value => $display_text)
							{
								$selected = ($value == $formulariofyc['ganancias']) ? ' selected="selected"' : "";

								echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
							} 
							?>
					</select>
				</div>
			</div>
		</div>
  	</div>
	<div class="card text-white bg-info mb-3">
		<div class="card-header">
			SITUACION FRENTE A SUSS	
		</div>
		<div class="card-body">
			<div class="input-group mb-3">
				<label for="suss" class="col-md-4 control-label">SUSS</label>
				<div class="col-md-4">
					<select name="suss" class="form-control">
						<option value="">select</option>
							<?php 
							$suss_values = array(
								'INSCRIPTO'=>'INSCRIPTO',
								'EXENTO'=>'EXENTO',
							);

							foreach($suss_values as $value => $display_text)
							{
								$selected = ($value == $formulariofyc['suss']) ? ' selected="selected"' : "";

								echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
							} 
							?>
					</select>
				</div>
			</div>
		</div>
  	</div>

	<div class="card text-white bg-info mb-3">
		<div class="card-header">
			DESIGNADO AGENTE DE PERCEPCION
		</div>
		<div class="card-body">
			<div class="input-group mb-3">
				<label for="agentepercepcioniva" class="col-md-4 control-label">I.V.A.</label>
				<div class="col-md-8">
					<input type="text" name="agentepercepcioniva" value="<?php echo ($this->input->post('agentepercepcioniva') ? $this->input->post('agentepercepcioniva') : $formulariofyc['agentepercepcioniva']); ?>" class="form-control" id="agentepercepcioniva" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="agentepercepcionivares" class="col-md-4 control-label">Res. numero</label>
				<div class="col-md-8">
					<input type="text" name="agentepercepcionivares" value="<?php echo ($this->input->post('agentepercepcionivares') ? $this->input->post('agentepercepcionivares') : $formulariofyc['agentepercepcionivares']); ?>" class="form-control" id="agentepercepcionivares" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="agentepercepcionivaali" class="col-md-4 control-label">Alícuota</label>
				<div class="col-md-8">
					<input type="text" name="agentepercepcionivaali" value="<?php echo ($this->input->post('agentepercepcionivaali') ? $this->input->post('agentepercepcionivaali') : $formulariofyc['agentepercepcionivaali']); ?>" class="form-control" id="agentepercepcionivaali" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="agentepercepcioniibb1" class="col-md-4 control-label">IIBB</label>
				<div class="col-md-8">
					<input type="text" name="agentepercepcioniibb1" value="<?php echo ($this->input->post('agentepercepcioniibb1') ? $this->input->post('agentepercepcioniibb1') : $formulariofyc['agentepercepcioniibb1']); ?>" class="form-control" id="agentepercepcioniibb1" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="agentepercepcioniibb1pcia" class="col-md-4 control-label">Provincia</label>
				<div class="col-md-8">
					<input type="text" name="agentepercepcioniibb1pcia" value="<?php echo ($this->input->post('agentepercepcioniibb1pcia') ? $this->input->post('agentepercepcioniibb1pcia') : $formulariofyc['agentepercepcioniibb1pcia']); ?>" class="form-control" id="agentepercepcioniibb1pcia" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="agentepercepcioniibb1ali" class="col-md-4 control-label">Alícuota</label>
				<div class="col-md-8">
					<input type="text" name="agentepercepcioniibb1ali" value="<?php echo ($this->input->post('agentepercepcioniibb1ali') ? $this->input->post('agentepercepcioniibb1ali') : $formulariofyc['agentepercepcioniibb1ali']); ?>" class="form-control" id="agentepercepcioniibb1ali" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="agentepercepcioniibb2" class="col-md-4 control-label">IIBB</label>
				<div class="col-md-8">
					<input type="text" name="agentepercepcioniibb2" value="<?php echo ($this->input->post('agentepercepcioniibb2') ? $this->input->post('agentepercepcioniibb2') : $formulariofyc['agentepercepcioniibb2']); ?>" class="form-control" id="agentepercepcioniibb2" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="agentepercepcioniibb2pcia" class="col-md-4 control-label">Provincia</label>
				<div class="col-md-8">
					<input type="text" name="agentepercepcioniibb2pcia" value="<?php echo ($this->input->post('agentepercepcioniibb2pcia') ? $this->input->post('agentepercepcioniibb2pcia') : $formulariofyc['agentepercepcioniibb2pcia']); ?>" class="form-control" id="agentepercepcioniibb2pcia" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="agentepercepcioniibb2ali" class="col-md-4 control-label">Alícuota</label>
				<div class="col-md-8">
					<input type="text" name="agentepercepcioniibb2ali" value="<?php echo ($this->input->post('agentepercepcioniibb2ali') ? $this->input->post('agentepercepcioniibb2ali') : $formulariofyc['agentepercepcioniibb2ali']); ?>" class="form-control" id="agentepercepcioniibb2ali" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="agentepercepcioniibb3" class="col-md-4 control-label">IIBB</label>
				<div class="col-md-8">
					<input type="text" name="agentepercepcioniibb3" value="<?php echo ($this->input->post('agentepercepcioniibb3') ? $this->input->post('agentepercepcioniibb3') : $formulariofyc['agentepercepcioniibb3']); ?>" class="form-control" id="agentepercepcioniibb3" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="agentepercepcioniibb3pcia" class="col-md-4 control-label">Provincia</label>
				<div class="col-md-8">
					<input type="text" name="agentepercepcioniibb3pcia" value="<?php echo ($this->input->post('agentepercepcioniibb3pcia') ? $this->input->post('agentepercepcioniibb3pcia') : $formulariofyc['agentepercepcioniibb3pcia']); ?>" class="form-control" id="agentepercepcioniibb3pcia" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="agentepercepcioniibb3ali" class="col-md-4 control-label">Alícuota</label>
				<div class="col-md-8">
					<input type="text" name="agentepercepcioniibb3ali" value="<?php echo ($this->input->post('agentepercepcioniibb3ali') ? $this->input->post('agentepercepcioniibb3ali') : $formulariofyc['agentepercepcioniibb3ali']); ?>" class="form-control" id="agentepercepcioniibb3ali" />
				</div>
			</div>
		</div>
  	</div>
	<div class="card text-white bg-info mb-3">
		<div class="card-header">
			DESIGNADO AGENTE DE RETENCION
		</div>
		<div class="card-body">
			<div class="input-group mb-3">
				<label for="agenteretgcias" class="col-md-4 control-label">Ganancias</label>
				<div class="col-md-8">
					<input type="text" name="agenteretgcias" value="<?php echo ($this->input->post('agenteretgcias') ? $this->input->post('agenteretgcias') : $formulariofyc['agenteretgcias']); ?>" class="form-control" id="agenteretgcias" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="agenteretgciasres" class="col-md-4 control-label">Resolución Gcias.</label>
				<div class="col-md-8">
					<input type="text" name="agenteretgciasres" value="<?php echo ($this->input->post('agenteretgciasres') ? $this->input->post('agenteretgciasres') : $formulariofyc['agenteretgciasres']); ?>" class="form-control" id="agenteretgciasres" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="agenteretgciasiibb" class="col-md-4 control-label">IIBB</label>
				<div class="col-md-8">
					<input type="text" name="agenteretgciasiibb" value="<?php echo ($this->input->post('agenteretgciasiibb') ? $this->input->post('agenteretgciasiibb') : $formulariofyc['agenteretgciasiibb']); ?>" class="form-control" id="agenteretgciasiibb" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="agenteretgciasiibbres" class="col-md-4 control-label">Resolución IIBB</label>
				<div class="col-md-8">
					<input type="text" name="agenteretgciasiibbres" value="<?php echo ($this->input->post('agenteretgciasiibbres') ? $this->input->post('agenteretgciasiibbres') : $formulariofyc['agenteretgciasiibbres']); ?>" class="form-control" id="agenteretgciasiibbres" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="agenteretgciassuss" class="col-md-4 control-label">SUSS</label>
				<div class="col-md-8">
					<input type="text" name="agenteretgciassuss" value="<?php echo ($this->input->post('agenteretgciassuss') ? $this->input->post('agenteretgciassuss') : $formulariofyc['agenteretgciassuss']); ?>" class="form-control" id="agenteretgciassuss" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="agenteretgciassussres" class="col-md-4 control-label">Resolución SUSS</label>
				<div class="col-md-8">
					<input type="text" name="agenteretgciassussres" value="<?php echo ($this->input->post('agenteretgciassussres') ? $this->input->post('agenteretgciassussres') : $formulariofyc['agenteretgciassussres']); ?>" class="form-control" id="agenteretgciassussres" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="agenteretgciasivares" class="col-md-4 control-label">Resolución IVA</label>
				<div class="col-md-8">
					<input type="text" name="agenteretgciasivares" value="<?php echo ($this->input->post('agenteretgciasivares') ? $this->input->post('agenteretgciasivares') : $formulariofyc['agenteretgciasivares']); ?>" class="form-control" id="agenteretgciasivares" />
				</div>
			</div>
		</div>
  	</div>
	<div class="card text-white bg-info mb-3">
		<div class="card-header">
			FACTURACION ANUAL
		</div>
		<div class="card-body">
			<div class="input-group mb-3">
				<label for="factultimocierre" class="col-md-4 control-label">Facturación ultimo cierre</label>
				<div class="col-md-8">
					<input type="text" name="factultimocierre" value="<?php echo ($this->input->post('factultimocierre') ? $this->input->post('factultimocierre') : $formulariofyc['factultimocierre']); ?>" class="form-control" id="factultimocierre" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="factanteultimocierre" class="col-md-4 control-label">Facturación anteultimo cierre</label>
				<div class="col-md-8">
					<input type="text" name="factanteultimocierre" value="<?php echo ($this->input->post('factanteultimocierre') ? $this->input->post('factanteultimocierre') : $formulariofyc['factanteultimocierre']); ?>" class="form-control" id="factanteultimocierre" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="factantepenultimocierre" class="col-md-4 control-label">Facturación antepenultimo cierre</label>
				<div class="col-md-8">
					<input type="text" name="factantepenultimocierre" value="<?php echo ($this->input->post('factantepenultimocierre') ? $this->input->post('factantepenultimocierre') : $formulariofyc['factantepenultimocierre']); ?>" class="form-control" id="factantepenultimocierre" />
				</div>
			</div>
		</div>
  	</div>
	<br />
	<div class="card text-white bg-info mb-3">
		<div class="card-header">
			REFERENCIAS COMERCIALES
		</div>
		<div class="card-body">
		<div class="input-group mb-3">
			<label for="refcom1" class="col-md-4 control-label">Empresa 1</label>
				<div class="col-md-8">
					<input type="text" name="refcom1" value="<?php echo ($this->input->post('refcom1') ? $this->input->post('refcom1') : $formulariofyc['refcom1']); ?>" class="form-control" id="refcom1" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="refcom1contacto" class="col-md-4 control-label">Contacto 1</label>
				<div class="col-md-8">
					<input type="text" name="refcom1contacto" value="<?php echo ($this->input->post('refcom1contacto') ? $this->input->post('refcom1contacto') : $formulariofyc['refcom1contacto']); ?>" class="form-control" id="refcom1contacto" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="refcom1tel" class="col-md-4 control-label">Tel </label>
				<div class="col-md-8">
					<input type="text" name="refcom1tel" value="<?php echo ($this->input->post('refcom1tel') ? $this->input->post('refcom1tel') : $formulariofyc['refcom1tel']); ?>" class="form-control" id="refcom1tel" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="refcom2" class="col-md-4 control-label">Empresa 2</label>
				<div class="col-md-8">
					<input type="text" name="refcom2" value="<?php echo ($this->input->post('refcom2') ? $this->input->post('refcom2') : $formulariofyc['refcom2']); ?>" class="form-control" id="refcom2" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="refcom2contacto" class="col-md-4 control-label">Contacto 2</label>
				<div class="col-md-8">
					<input type="text" name="refcom2contacto" value="<?php echo ($this->input->post('refcom2contacto') ? $this->input->post('refcom2contacto') : $formulariofyc['refcom2contacto']); ?>" class="form-control" id="refcom2contacto" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="refcom2tel" class="col-md-4 control-label">Tel</label>
				<div class="col-md-8">
					<input type="text" name="refcom2tel" value="<?php echo ($this->input->post('refcom2tel') ? $this->input->post('refcom2tel') : $formulariofyc['refcom2tel']); ?>" class="form-control" id="refcom2tel" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="refcom3" class="col-md-4 control-label">Empresa 3</label>
				<div class="col-md-8">
					<input type="text" name="refcom3" value="<?php echo ($this->input->post('refcom3') ? $this->input->post('refcom3') : $formulariofyc['refcom3']); ?>" class="form-control" id="refcom3" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="refcom3contacto" class="col-md-4 control-label">Contacto 3</label>
				<div class="col-md-8">
					<input type="text" name="refcom3contacto" value="<?php echo ($this->input->post('refcom3contacto') ? $this->input->post('refcom3contacto') : $formulariofyc['refcom3contacto']); ?>" class="form-control" id="refcom3contacto" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="refcom3tel" class="col-md-4 control-label">Tel</label>
				<div class="col-md-8">
					<input type="text" name="refcom3tel" value="<?php echo ($this->input->post('refcom3tel') ? $this->input->post('refcom3tel') : $formulariofyc['refcom3tel']); ?>" class="form-control" id="refcom3tel" />
				</div>
			</div>
		</div>
  	</div>

	<div class="card text-white bg-info mb-3">
		<div class="card-header">
			CONTACTOS
		</div>
		<div class="card-body">
			<div class="input-group mb-3">
			<label for="areacontabletel" class="col-md-4 control-label">Area contable Tel</label>
				<div class="col-md-8">
					<input type="text" name="areacontabletel" value="<?php echo ($this->input->post('areacontabletel') ? $this->input->post('areacontabletel') : $formulariofyc['areacontabletel']); ?>" class="form-control" id="areacontabletel" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="areacontablemail" class="col-md-4 control-label">Areac ontable mail</label>
				<div class="col-md-8">
					<input type="text" name="areacontablemail" value="<?php echo ($this->input->post('areacontablemail') ? $this->input->post('areacontablemail') : $formulariofyc['areacontablemail']); ?>" class="form-control" id="areacontablemail" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="areacontablehorario" class="col-md-4 control-label">Area contable horario</label>
				<div class="col-md-8">
					<input type="text" name="areacontablehorario" value="<?php echo ($this->input->post('areacontablehorario') ? $this->input->post('areacontablehorario') : $formulariofyc['areacontablehorario']); ?>" class="form-control" id="areacontablehorario" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="areapagostel" class="col-md-4 control-label">Area pagos tel</label>
				<div class="col-md-8">
					<input type="text" name="areapagostel" value="<?php echo ($this->input->post('areapagostel') ? $this->input->post('areapagostel') : $formulariofyc['areapagostel']); ?>" class="form-control" id="areapagostel" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="areapagosmail" class="col-md-4 control-label">Area pagos mail</label>
				<div class="col-md-8">
					<input type="text" name="areapagosmail" value="<?php echo ($this->input->post('areapagosmail') ? $this->input->post('areapagosmail') : $formulariofyc['areapagosmail']); ?>" class="form-control" id="areapagosmail" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="areapagoshorario" class="col-md-4 control-label">Area pagos horario</label>
				<div class="col-md-8">
					<input type="text" name="areapagoshorario" value="<?php echo ($this->input->post('areapagoshorario') ? $this->input->post('areapagoshorario') : $formulariofyc['areapagoshorario']); ?>" class="form-control" id="areapagoshorario" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="otrasareastel" class="col-md-4 control-label">Otras areas tel</label>
				<div class="col-md-8">
					<input type="text" name="otrasareastel" value="<?php echo ($this->input->post('otrasareastel') ? $this->input->post('otrasareastel') : $formulariofyc['otrasareastel']); ?>" class="form-control" id="otrasareastel" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="otrasareasmail" class="col-md-4 control-label">Otras areas mail</label>
				<div class="col-md-8">
					<input type="text" name="otrasareasmail" value="<?php echo ($this->input->post('otrasareasmail') ? $this->input->post('otrasareasmail') : $formulariofyc['otrasareasmail']); ?>" class="form-control" id="otrasareasmail" />
				</div>
			</div>
			<div class="input-group mb-3">
				<label for="otrasareashorario" class="col-md-4 control-label">Otras areas horario</label>
				<div class="col-md-8">
					<input type="text" name="otrasareashorario" value="<?php echo ($this->input->post('otrasareashorario') ? $this->input->post('otrasareashorario') : $formulariofyc['otrasareashorario']); ?>" class="form-control" id="otrasareashorario" />
				</div>
			</div>
		</div>
  	</div>
</div>


	<div class="form-group" hidden>
		<label for="idproveedor" class="col-md-4 control-label">Idproveedor</label>
		<div class="col-md-8">
			<input type="text" name="idproveedor" value="<?php echo ($this->input->post('idproveedor') ? $this->input->post('idproveedor') : $formulariofyc['idproveedor']); ?>" class="form-control" id="idproveedor" />
		</div>
	</div>

	
	<div class="form-group" >
		<label for="aprobado" class="col-md-4 control-label">Aprobado</label>
		<div class="col-md-8">
			<input type="text" name="aprobado" value="<?php echo ($this->input->post('aprobado') ? $this->input->post('aprobado') : $formulariofyc['aprobado']); ?>" class="form-control" id="aprobado" />
		</div>
	</div>
	<div class="form-group" >
		<label for="completo" class="col-md-4 control-label">Completo</label>
		<div class="col-md-8">
			<input type="text" name="completo" value="<?php echo ($this->input->post('completo') ? $this->input->post('completo') : $formulariofyc['completo']); ?>" class="form-control" id="completo" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Guardar Cambios</button>
        </div>
	</div>
	
<?php echo form_close(); ?>