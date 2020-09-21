<?php echo form_open('formulariofyc/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="categoriafiscal" class="col-md-4 control-label">Categoriafiscal</label>
		<div class="col-md-8">
			<select name="categoriafiscal" class="form-control">
				<option value="">select</option>
				<?php 
				$categoriafiscal_values = array(
					'MONOTRIBUTO'=>'MONOTRIBUTO',
					'EXENTO'=>'EXENTO',
				);

				foreach($categoriafiscal_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('categoriafiscal')) ? ' selected="selected"' : "";

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
		<label for="identificaciontributaria" class="col-md-4 control-label">Identificaciontributaria</label>
		<div class="col-md-8">
			<input type="text" name="identificaciontributaria" value="<?php echo $this->input->post('identificaciontributaria'); ?>" class="form-control" id="identificaciontributaria" />
		</div>
	</div>
	<div class="form-group">
		<label for="numidentificacion" class="col-md-4 control-label">Numidentificacion</label>
		<div class="col-md-8">
			<input type="text" name="numidentificacion" value="<?php echo $this->input->post('numidentificacion'); ?>" class="form-control" id="numidentificacion" />
		</div>
	</div>
	<div class="form-group">
		<label for="identtribpaisorigen" class="col-md-4 control-label">Identtribpaisorigen</label>
		<div class="col-md-8">
			<input type="text" name="identtribpaisorigen" value="<?php echo $this->input->post('identtribpaisorigen'); ?>" class="form-control" id="identtribpaisorigen" />
		</div>
	</div>
	<div class="form-group">
		<label for="tipopersona" class="col-md-4 control-label">Tipopersona</label>
		<div class="col-md-8">
			<input type="text" name="tipopersona" value="<?php echo $this->input->post('tipopersona'); ?>" class="form-control" id="tipopersona" />
		</div>
	</div>
	<div class="form-group">
		<label for="catsiap" class="col-md-4 control-label">Catsiap</label>
		<div class="col-md-8">
			<input type="text" name="catsiap" value="<?php echo $this->input->post('catsiap'); ?>" class="form-control" id="catsiap" />
		</div>
	</div>
	<div class="form-group">
		<label for="motivobaja" class="col-md-4 control-label">Motivobaja</label>
		<div class="col-md-8">
			<input type="text" name="motivobaja" value="<?php echo $this->input->post('motivobaja'); ?>" class="form-control" id="motivobaja" />
		</div>
	</div>
	<div class="form-group">
		<label for="fechaconstitucion" class="col-md-4 control-label">Fechaconstitucion</label>
		<div class="col-md-8">
			<input type="text" name="fechaconstitucion" value="<?php echo $this->input->post('fechaconstitucion'); ?>" class="form-control" id="fechaconstitucion" />
		</div>
	</div>
	<div class="form-group">
		<label for="banco" class="col-md-4 control-label">Banco</label>
		<div class="col-md-8">
			<input type="text" name="banco" value="<?php echo $this->input->post('banco'); ?>" class="form-control" id="banco" />
		</div>
	</div>
	<div class="form-group">
		<label for="sucursalbanco" class="col-md-4 control-label">Sucursalbanco</label>
		<div class="col-md-8">
			<input type="text" name="sucursalbanco" value="<?php echo $this->input->post('sucursalbanco'); ?>" class="form-control" id="sucursalbanco" />
		</div>
	</div>
	<div class="form-group">
		<label for="tipocuenta" class="col-md-4 control-label">Tipocuenta</label>
		<div class="col-md-8">
			<input type="text" name="tipocuenta" value="<?php echo $this->input->post('tipocuenta'); ?>" class="form-control" id="tipocuenta" />
		</div>
	</div>
	<div class="form-group">
		<label for="cbu" class="col-md-4 control-label">Cbu</label>
		<div class="col-md-8">
			<input type="text" name="cbu" value="<?php echo $this->input->post('cbu'); ?>" class="form-control" id="cbu" />
		</div>
	</div>
	<div class="form-group">
		<label for="beneficiariochq" class="col-md-4 control-label">Beneficiariochq</label>
		<div class="col-md-8">
			<input type="text" name="beneficiariochq" value="<?php echo $this->input->post('beneficiariochq'); ?>" class="form-control" id="beneficiariochq" />
		</div>
	</div>
	<div class="form-group">
		<label for="situacioniibb" class="col-md-4 control-label">Situacioniibb</label>
		<div class="col-md-8">
			<input type="text" name="situacioniibb" value="<?php echo $this->input->post('situacioniibb'); ?>" class="form-control" id="situacioniibb" />
		</div>
	</div>
	<div class="form-group">
		<label for="numinscripiibb" class="col-md-4 control-label">Numinscripiibb</label>
		<div class="col-md-8">
			<input type="text" name="numinscripiibb" value="<?php echo $this->input->post('numinscripiibb'); ?>" class="form-control" id="numinscripiibb" />
		</div>
	</div>
	<div class="form-group">
		<label for="porcret" class="col-md-4 control-label">Porcret</label>
		<div class="col-md-8">
			<input type="text" name="porcret" value="<?php echo $this->input->post('porcret'); ?>" class="form-control" id="porcret" />
		</div>
	</div>
	<div class="form-group">
		<label for="ganancias" class="col-md-4 control-label">Ganancias</label>
		<div class="col-md-8">
			<input type="text" name="ganancias" value="<?php echo $this->input->post('ganancias'); ?>" class="form-control" id="ganancias" />
		</div>
	</div>
	<div class="form-group">
		<label for="suss" class="col-md-4 control-label">Suss</label>
		<div class="col-md-8">
			<input type="text" name="suss" value="<?php echo $this->input->post('suss'); ?>" class="form-control" id="suss" />
		</div>
	</div>
	<div class="form-group">
		<label for="agentepercepcioniva" class="col-md-4 control-label">Agentepercepcioniva</label>
		<div class="col-md-8">
			<input type="text" name="agentepercepcioniva" value="<?php echo $this->input->post('agentepercepcioniva'); ?>" class="form-control" id="agentepercepcioniva" />
		</div>
	</div>
	<div class="form-group">
		<label for="agentepercepcionivares" class="col-md-4 control-label">Agentepercepcionivares</label>
		<div class="col-md-8">
			<input type="text" name="agentepercepcionivares" value="<?php echo $this->input->post('agentepercepcionivares'); ?>" class="form-control" id="agentepercepcionivares" />
		</div>
	</div>
	<div class="form-group">
		<label for="agentepercepcionivaali" class="col-md-4 control-label">Agentepercepcionivaali</label>
		<div class="col-md-8">
			<input type="text" name="agentepercepcionivaali" value="<?php echo $this->input->post('agentepercepcionivaali'); ?>" class="form-control" id="agentepercepcionivaali" />
		</div>
	</div>
	<div class="form-group">
		<label for="agentepercepcioniibb1" class="col-md-4 control-label">Agentepercepcioniibb1</label>
		<div class="col-md-8">
			<input type="text" name="agentepercepcioniibb1" value="<?php echo $this->input->post('agentepercepcioniibb1'); ?>" class="form-control" id="agentepercepcioniibb1" />
		</div>
	</div>
	<div class="form-group">
		<label for="agentepercepcioniibb1pcia" class="col-md-4 control-label">Agentepercepcioniibb1pcia</label>
		<div class="col-md-8">
			<input type="text" name="agentepercepcioniibb1pcia" value="<?php echo $this->input->post('agentepercepcioniibb1pcia'); ?>" class="form-control" id="agentepercepcioniibb1pcia" />
		</div>
	</div>
	<div class="form-group">
		<label for="agentepercepcioniibb1ali" class="col-md-4 control-label">Agentepercepcioniibb1ali</label>
		<div class="col-md-8">
			<input type="text" name="agentepercepcioniibb1ali" value="<?php echo $this->input->post('agentepercepcioniibb1ali'); ?>" class="form-control" id="agentepercepcioniibb1ali" />
		</div>
	</div>
	<div class="form-group">
		<label for="agentepercepcioniibb2" class="col-md-4 control-label">Agentepercepcioniibb2</label>
		<div class="col-md-8">
			<input type="text" name="agentepercepcioniibb2" value="<?php echo $this->input->post('agentepercepcioniibb2'); ?>" class="form-control" id="agentepercepcioniibb2" />
		</div>
	</div>
	<div class="form-group">
		<label for="agentepercepcioniibb2pcia" class="col-md-4 control-label">Agentepercepcioniibb2pcia</label>
		<div class="col-md-8">
			<input type="text" name="agentepercepcioniibb2pcia" value="<?php echo $this->input->post('agentepercepcioniibb2pcia'); ?>" class="form-control" id="agentepercepcioniibb2pcia" />
		</div>
	</div>
	<div class="form-group">
		<label for="agentepercepcioniibb2ali" class="col-md-4 control-label">Agentepercepcioniibb2ali</label>
		<div class="col-md-8">
			<input type="text" name="agentepercepcioniibb2ali" value="<?php echo $this->input->post('agentepercepcioniibb2ali'); ?>" class="form-control" id="agentepercepcioniibb2ali" />
		</div>
	</div>
	<div class="form-group">
		<label for="agentepercepcioniibb3" class="col-md-4 control-label">Agentepercepcioniibb3</label>
		<div class="col-md-8">
			<input type="text" name="agentepercepcioniibb3" value="<?php echo $this->input->post('agentepercepcioniibb3'); ?>" class="form-control" id="agentepercepcioniibb3" />
		</div>
	</div>
	<div class="form-group">
		<label for="agentepercepcioniibb3pcia" class="col-md-4 control-label">Agentepercepcioniibb3pcia</label>
		<div class="col-md-8">
			<input type="text" name="agentepercepcioniibb3pcia" value="<?php echo $this->input->post('agentepercepcioniibb3pcia'); ?>" class="form-control" id="agentepercepcioniibb3pcia" />
		</div>
	</div>
	<div class="form-group">
		<label for="agentepercepcioniibb3ali" class="col-md-4 control-label">Agentepercepcioniibb3ali</label>
		<div class="col-md-8">
			<input type="text" name="agentepercepcioniibb3ali" value="<?php echo $this->input->post('agentepercepcioniibb3ali'); ?>" class="form-control" id="agentepercepcioniibb3ali" />
		</div>
	</div>
	<div class="form-group">
		<label for="agenteretgcias" class="col-md-4 control-label">Agenteretgcias</label>
		<div class="col-md-8">
			<input type="text" name="agenteretgcias" value="<?php echo $this->input->post('agenteretgcias'); ?>" class="form-control" id="agenteretgcias" />
		</div>
	</div>
	<div class="form-group">
		<label for="agenteretgciasres" class="col-md-4 control-label">Agenteretgciasres</label>
		<div class="col-md-8">
			<input type="text" name="agenteretgciasres" value="<?php echo $this->input->post('agenteretgciasres'); ?>" class="form-control" id="agenteretgciasres" />
		</div>
	</div>
	<div class="form-group">
		<label for="agenteretgciasiibb" class="col-md-4 control-label">Agenteretgciasiibb</label>
		<div class="col-md-8">
			<input type="text" name="agenteretgciasiibb" value="<?php echo $this->input->post('agenteretgciasiibb'); ?>" class="form-control" id="agenteretgciasiibb" />
		</div>
	</div>
	<div class="form-group">
		<label for="agenteretgciasiibbres" class="col-md-4 control-label">Agenteretgciasiibbres</label>
		<div class="col-md-8">
			<input type="text" name="agenteretgciasiibbres" value="<?php echo $this->input->post('agenteretgciasiibbres'); ?>" class="form-control" id="agenteretgciasiibbres" />
		</div>
	</div>
	<div class="form-group">
		<label for="agenteretgciassuss" class="col-md-4 control-label">Agenteretgciassuss</label>
		<div class="col-md-8">
			<input type="text" name="agenteretgciassuss" value="<?php echo $this->input->post('agenteretgciassuss'); ?>" class="form-control" id="agenteretgciassuss" />
		</div>
	</div>
	<div class="form-group">
		<label for="agenteretgciassussres" class="col-md-4 control-label">Agenteretgciassussres</label>
		<div class="col-md-8">
			<input type="text" name="agenteretgciassussres" value="<?php echo $this->input->post('agenteretgciassussres'); ?>" class="form-control" id="agenteretgciassussres" />
		</div>
	</div>
	<div class="form-group">
		<label for="agenteretgciasivares" class="col-md-4 control-label">Agenteretgciasivares</label>
		<div class="col-md-8">
			<input type="text" name="agenteretgciasivares" value="<?php echo $this->input->post('agenteretgciasivares'); ?>" class="form-control" id="agenteretgciasivares" />
		</div>
	</div>
	<div class="form-group">
		<label for="factultimocierre" class="col-md-4 control-label">Factultimocierre</label>
		<div class="col-md-8">
			<input type="text" name="factultimocierre" value="<?php echo $this->input->post('factultimocierre'); ?>" class="form-control" id="factultimocierre" />
		</div>
	</div>
	<div class="form-group">
		<label for="factanteultimocierre" class="col-md-4 control-label">Factanteultimocierre</label>
		<div class="col-md-8">
			<input type="text" name="factanteultimocierre" value="<?php echo $this->input->post('factanteultimocierre'); ?>" class="form-control" id="factanteultimocierre" />
		</div>
	</div>
	<div class="form-group">
		<label for="factantepenultimocierre" class="col-md-4 control-label">Factantepenultimocierre</label>
		<div class="col-md-8">
			<input type="text" name="factantepenultimocierre" value="<?php echo $this->input->post('factantepenultimocierre'); ?>" class="form-control" id="factantepenultimocierre" />
		</div>
	</div>
	<div class="form-group">
		<label for="refcom1" class="col-md-4 control-label">Refcom1</label>
		<div class="col-md-8">
			<input type="text" name="refcom1" value="<?php echo $this->input->post('refcom1'); ?>" class="form-control" id="refcom1" />
		</div>
	</div>
	<div class="form-group">
		<label for="refcom1contacto" class="col-md-4 control-label">Refcom1contacto</label>
		<div class="col-md-8">
			<input type="text" name="refcom1contacto" value="<?php echo $this->input->post('refcom1contacto'); ?>" class="form-control" id="refcom1contacto" />
		</div>
	</div>
	<div class="form-group">
		<label for="refcom1tel" class="col-md-4 control-label">Refcom1tel</label>
		<div class="col-md-8">
			<input type="text" name="refcom1tel" value="<?php echo $this->input->post('refcom1tel'); ?>" class="form-control" id="refcom1tel" />
		</div>
	</div>
	<div class="form-group">
		<label for="refcom2" class="col-md-4 control-label">Refcom2</label>
		<div class="col-md-8">
			<input type="text" name="refcom2" value="<?php echo $this->input->post('refcom2'); ?>" class="form-control" id="refcom2" />
		</div>
	</div>
	<div class="form-group">
		<label for="refcom2contacto" class="col-md-4 control-label">Refcom2contacto</label>
		<div class="col-md-8">
			<input type="text" name="refcom2contacto" value="<?php echo $this->input->post('refcom2contacto'); ?>" class="form-control" id="refcom2contacto" />
		</div>
	</div>
	<div class="form-group">
		<label for="refcom2tel" class="col-md-4 control-label">Refcom2tel</label>
		<div class="col-md-8">
			<input type="text" name="refcom2tel" value="<?php echo $this->input->post('refcom2tel'); ?>" class="form-control" id="refcom2tel" />
		</div>
	</div>
	<div class="form-group">
		<label for="refcom3" class="col-md-4 control-label">Refcom3</label>
		<div class="col-md-8">
			<input type="text" name="refcom3" value="<?php echo $this->input->post('refcom3'); ?>" class="form-control" id="refcom3" />
		</div>
	</div>
	<div class="form-group">
		<label for="refcom3contacto" class="col-md-4 control-label">Refcom3contacto</label>
		<div class="col-md-8">
			<input type="text" name="refcom3contacto" value="<?php echo $this->input->post('refcom3contacto'); ?>" class="form-control" id="refcom3contacto" />
		</div>
	</div>
	<div class="form-group">
		<label for="refcom3tel" class="col-md-4 control-label">Refcom3tel</label>
		<div class="col-md-8">
			<input type="text" name="refcom3tel" value="<?php echo $this->input->post('refcom3tel'); ?>" class="form-control" id="refcom3tel" />
		</div>
	</div>
	<div class="form-group">
		<label for="areacontabletel" class="col-md-4 control-label">Areacontabletel</label>
		<div class="col-md-8">
			<input type="text" name="areacontabletel" value="<?php echo $this->input->post('areacontabletel'); ?>" class="form-control" id="areacontabletel" />
		</div>
	</div>
	<div class="form-group">
		<label for="areacontablemail" class="col-md-4 control-label">Areacontablemail</label>
		<div class="col-md-8">
			<input type="text" name="areacontablemail" value="<?php echo $this->input->post('areacontablemail'); ?>" class="form-control" id="areacontablemail" />
		</div>
	</div>
	<div class="form-group">
		<label for="areacontablehorario" class="col-md-4 control-label">Areacontablehorario</label>
		<div class="col-md-8">
			<input type="text" name="areacontablehorario" value="<?php echo $this->input->post('areacontablehorario'); ?>" class="form-control" id="areacontablehorario" />
		</div>
	</div>
	<div class="form-group">
		<label for="areapagostel" class="col-md-4 control-label">Areapagostel</label>
		<div class="col-md-8">
			<input type="text" name="areapagostel" value="<?php echo $this->input->post('areapagostel'); ?>" class="form-control" id="areapagostel" />
		</div>
	</div>
	<div class="form-group">
		<label for="areapagosmail" class="col-md-4 control-label">Areapagosmail</label>
		<div class="col-md-8">
			<input type="text" name="areapagosmail" value="<?php echo $this->input->post('areapagosmail'); ?>" class="form-control" id="areapagosmail" />
		</div>
	</div>
	<div class="form-group">
		<label for="areapagoshorario" class="col-md-4 control-label">Areapagoshorario</label>
		<div class="col-md-8">
			<input type="text" name="areapagoshorario" value="<?php echo $this->input->post('areapagoshorario'); ?>" class="form-control" id="areapagoshorario" />
		</div>
	</div>
	<div class="form-group">
		<label for="otrasareastel" class="col-md-4 control-label">Otrasareastel</label>
		<div class="col-md-8">
			<input type="text" name="otrasareastel" value="<?php echo $this->input->post('otrasareastel'); ?>" class="form-control" id="otrasareastel" />
		</div>
	</div>
	<div class="form-group">
		<label for="otrasareasmail" class="col-md-4 control-label">Otrasareasmail</label>
		<div class="col-md-8">
			<input type="text" name="otrasareasmail" value="<?php echo $this->input->post('otrasareasmail'); ?>" class="form-control" id="otrasareasmail" />
		</div>
	</div>
	<div class="form-group">
		<label for="otrasareashorario" class="col-md-4 control-label">Otrasareashorario</label>
		<div class="col-md-8">
			<input type="text" name="otrasareashorario" value="<?php echo $this->input->post('otrasareashorario'); ?>" class="form-control" id="otrasareashorario" />
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
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>