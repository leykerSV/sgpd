<?php echo form_open('doccomercial/edit/'.$doccomercial['iddoccomercial'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="inscripcion" class="col-md-4 control-label">Inscripcion</label>
		<div class="col-md-8">
			<input type="file" name="inscripcion" value="<?php echo ($this->input->post('inscripcion') ? $this->input->post('inscripcion') : $doccomercial['inscripcion']); ?>" class="form-control" id="inscripcion" />
		</div>
	</div>
	<div class="form-group">
		<label for="inscripcionobs" class="col-md-4 control-label">Inscripcionobs</label>
		<div class="col-md-8">
			<input type="text" name="inscripcionobs" value="<?php echo ($this->input->post('inscripcionobs') ? $this->input->post('inscripcionobs') : $doccomercial['inscripcionobs']); ?>" class="form-control" id="inscripcionobs" />
		</div>
	</div>
	<div class="form-group">
		<label for="inscripcionok" class="col-md-4 control-label">Inscripcionok</label>
		<div class="col-md-8">
			<input type="text" name="inscripcionok" value="<?php echo ($this->input->post('inscripcionok') ? $this->input->post('inscripcionok') : $doccomercial['inscripcionok']); ?>" class="form-control" id="inscripcionok" />
		</div>
	</div>
	<div class="form-group">
		<label for="balance" class="col-md-4 control-label">Balance</label>
		<div class="col-md-8">
			<input type="text" name="balance" value="<?php echo ($this->input->post('balance') ? $this->input->post('balance') : $doccomercial['balance']); ?>" class="form-control" id="balance" />
		</div>
	</div>
	<div class="form-group">
		<label for="balanceobs" class="col-md-4 control-label">Balanceobs</label>
		<div class="col-md-8">
			<input type="text" name="balanceobs" value="<?php echo ($this->input->post('balanceobs') ? $this->input->post('balanceobs') : $doccomercial['balanceobs']); ?>" class="form-control" id="balanceobs" />
		</div>
	</div>
	<div class="form-group">
		<label for="balanceok" class="col-md-4 control-label">Balanceok</label>
		<div class="col-md-8">
			<input type="text" name="balanceok" value="<?php echo ($this->input->post('balanceok') ? $this->input->post('balanceok') : $doccomercial['balanceok']); ?>" class="form-control" id="balanceok" />
		</div>
	</div>
	<div class="form-group">
		<label for="refbancarias" class="col-md-4 control-label">Refbancarias</label>
		<div class="col-md-8">
			<input type="text" name="refbancarias" value="<?php echo ($this->input->post('refbancarias') ? $this->input->post('refbancarias') : $doccomercial['refbancarias']); ?>" class="form-control" id="refbancarias" />
		</div>
	</div>
	<div class="form-group">
		<label for="refbancariasobs" class="col-md-4 control-label">Refbancariasobs</label>
		<div class="col-md-8">
			<input type="text" name="refbancariasobs" value="<?php echo ($this->input->post('refbancariasobs') ? $this->input->post('refbancariasobs') : $doccomercial['refbancariasobs']); ?>" class="form-control" id="refbancariasobs" />
		</div>
	</div>
	<div class="form-group">
		<label for="refbancariasok" class="col-md-4 control-label">Refbancariasok</label>
		<div class="col-md-8">
			<input type="text" name="refbancariasok" value="<?php echo ($this->input->post('refbancariasok') ? $this->input->post('refbancariasok') : $doccomercial['refbancariasok']); ?>" class="form-control" id="refbancariasok" />
		</div>
	</div>
	<div class="form-group">
		<label for="antecedentes" class="col-md-4 control-label">Antecedentes</label>
		<div class="col-md-8">
			<input type="text" name="antecedentes" value="<?php echo ($this->input->post('antecedentes') ? $this->input->post('antecedentes') : $doccomercial['antecedentes']); ?>" class="form-control" id="antecedentes" />
		</div>
	</div>
	<div class="form-group">
		<label for="antecedentesobs" class="col-md-4 control-label">Antecedentesobs</label>
		<div class="col-md-8">
			<input type="text" name="antecedentesobs" value="<?php echo ($this->input->post('antecedentesobs') ? $this->input->post('antecedentesobs') : $doccomercial['antecedentesobs']); ?>" class="form-control" id="antecedentesobs" />
		</div>
	</div>
	<div class="form-group">
		<label for="antecedentesok" class="col-md-4 control-label">Antecedentesok</label>
		<div class="col-md-8">
			<input type="text" name="antecedentesok" value="<?php echo ($this->input->post('antecedentesok') ? $this->input->post('antecedentesok') : $doccomercial['antecedentesok']); ?>" class="form-control" id="antecedentesok" />
		</div>
	</div>
	<div class="form-group">
		<label for="refcomerciales" class="col-md-4 control-label">Refcomerciales</label>
		<div class="col-md-8">
			<input type="text" name="refcomerciales" value="<?php echo ($this->input->post('refcomerciales') ? $this->input->post('refcomerciales') : $doccomercial['refcomerciales']); ?>" class="form-control" id="refcomerciales" />
		</div>
	</div>
	<div class="form-group">
		<label for="refcomercialesobs" class="col-md-4 control-label">Refcomercialesobs</label>
		<div class="col-md-8">
			<input type="text" name="refcomercialesobs" value="<?php echo ($this->input->post('refcomercialesobs') ? $this->input->post('refcomercialesobs') : $doccomercial['refcomercialesobs']); ?>" class="form-control" id="refcomercialesobs" />
		</div>
	</div>
	<div class="form-group">
		<label for="refcomercialesok" class="col-md-4 control-label">Refcomercialesok</label>
		<div class="col-md-8">
			<input type="text" name="refcomercialesok" value="<?php echo ($this->input->post('refcomercialesok') ? $this->input->post('refcomercialesok') : $doccomercial['refcomercialesok']); ?>" class="form-control" id="refcomercialesok" />
		</div>
	</div>
	<div class="form-group">
		<label for="contastanciaiibb" class="col-md-4 control-label">Contastanciaiibb</label>
		<div class="col-md-8">
			<input type="text" name="contastanciaiibb" value="<?php echo ($this->input->post('contastanciaiibb') ? $this->input->post('contastanciaiibb') : $doccomercial['contastanciaiibb']); ?>" class="form-control" id="contastanciaiibb" />
		</div>
	</div>
	<div class="form-group">
		<label for="constanciaiibbobs" class="col-md-4 control-label">Constanciaiibbobs</label>
		<div class="col-md-8">
			<input type="text" name="constanciaiibbobs" value="<?php echo ($this->input->post('constanciaiibbobs') ? $this->input->post('constanciaiibbobs') : $doccomercial['constanciaiibbobs']); ?>" class="form-control" id="constanciaiibbobs" />
		</div>
	</div>
	<div class="form-group">
		<label for="constanciaiibbok" class="col-md-4 control-label">Constanciaiibbok</label>
		<div class="col-md-8">
			<input type="text" name="constanciaiibbok" value="<?php echo ($this->input->post('constanciaiibbok') ? $this->input->post('constanciaiibbok') : $doccomercial['constanciaiibbok']); ?>" class="form-control" id="constanciaiibbok" />
		</div>
	</div>
	<div class="form-group">
		<label for="infotecnica" class="col-md-4 control-label">Infotecnica</label>
		<div class="col-md-8">
			<input type="text" name="infotecnica" value="<?php echo ($this->input->post('infotecnica') ? $this->input->post('infotecnica') : $doccomercial['infotecnica']); ?>" class="form-control" id="infotecnica" />
		</div>
	</div>
	<div class="form-group">
		<label for="infotecnicaobs" class="col-md-4 control-label">Infotecnicaobs</label>
		<div class="col-md-8">
			<input type="text" name="infotecnicaobs" value="<?php echo ($this->input->post('infotecnicaobs') ? $this->input->post('infotecnicaobs') : $doccomercial['infotecnicaobs']); ?>" class="form-control" id="infotecnicaobs" />
		</div>
	</div>
	<div class="form-group">
		<label for="infotecnicaok" class="col-md-4 control-label">Infotecnicaok</label>
		<div class="col-md-8">
			<input type="text" name="infotecnicaok" value="<?php echo ($this->input->post('infotecnicaok') ? $this->input->post('infotecnicaok') : $doccomercial['infotecnicaok']); ?>" class="form-control" id="infotecnicaok" />
		</div>
	</div>
	<div class="form-group">
		<label for="autoevaluacion" class="col-md-4 control-label">Autoevaluacion</label>
		<div class="col-md-8">
			<input type="text" name="autoevaluacion" value="<?php echo ($this->input->post('autoevaluacion') ? $this->input->post('autoevaluacion') : $doccomercial['autoevaluacion']); ?>" class="form-control" id="autoevaluacion" />
		</div>
	</div>
	<div class="form-group">
		<label for="autoevaluacionobs" class="col-md-4 control-label">Autoevaluacionobs</label>
		<div class="col-md-8">
			<input type="text" name="autoevaluacionobs" value="<?php echo ($this->input->post('autoevaluacionobs') ? $this->input->post('autoevaluacionobs') : $doccomercial['autoevaluacionobs']); ?>" class="form-control" id="autoevaluacionobs" />
		</div>
	</div>
	<div class="form-group">
		<label for="autoevaluacionok" class="col-md-4 control-label">Autoevaluacionok</label>
		<div class="col-md-8">
			<input type="text" name="autoevaluacionok" value="<?php echo ($this->input->post('autoevaluacionok') ? $this->input->post('autoevaluacionok') : $doccomercial['autoevaluacionok']); ?>" class="form-control" id="autoevaluacionok" />
		</div>
	</div>
	<div class="form-group">
		<label for="constmonotirbuto" class="col-md-4 control-label">Constmonotirbuto</label>
		<div class="col-md-8">
			<input type="text" name="constmonotirbuto" value="<?php echo ($this->input->post('constmonotirbuto') ? $this->input->post('constmonotirbuto') : $doccomercial['constmonotirbuto']); ?>" class="form-control" id="constmonotirbuto" />
		</div>
	</div>
	<div class="form-group">
		<label for="constmonotributoobs" class="col-md-4 control-label">Constmonotributoobs</label>
		<div class="col-md-8">
			<input type="text" name="constmonotributoobs" value="<?php echo ($this->input->post('constmonotributoobs') ? $this->input->post('constmonotributoobs') : $doccomercial['constmonotributoobs']); ?>" class="form-control" id="constmonotributoobs" />
		</div>
	</div>
	<div class="form-group">
		<label for="constmonotributook" class="col-md-4 control-label">Constmonotributook</label>
		<div class="col-md-8">
			<input type="text" name="constmonotributook" value="<?php echo ($this->input->post('constmonotributook') ? $this->input->post('constmonotributook') : $doccomercial['constmonotributook']); ?>" class="form-control" id="constmonotributook" />
		</div>
	</div>
	<div class="form-group">
		<label for="titutlo" class="col-md-4 control-label">Titutlo</label>
		<div class="col-md-8">
			<input type="text" name="titutlo" value="<?php echo ($this->input->post('titutlo') ? $this->input->post('titutlo') : $doccomercial['titutlo']); ?>" class="form-control" id="titutlo" />
		</div>
	</div>
	<div class="form-group">
		<label for="tituloobs" class="col-md-4 control-label">Tituloobs</label>
		<div class="col-md-8">
			<input type="text" name="tituloobs" value="<?php echo ($this->input->post('tituloobs') ? $this->input->post('tituloobs') : $doccomercial['tituloobs']); ?>" class="form-control" id="tituloobs" />
		</div>
	</div>
	<div class="form-group">
		<label for="titulook" class="col-md-4 control-label">Titulook</label>
		<div class="col-md-8">
			<input type="text" name="titulook" value="<?php echo ($this->input->post('titulook') ? $this->input->post('titulook') : $doccomercial['titulook']); ?>" class="form-control" id="titulook" />
		</div>
	</div>
	<div class="form-group">
		<label for="matricula" class="col-md-4 control-label">Matricula</label>
		<div class="col-md-8">
			<input type="text" name="matricula" value="<?php echo ($this->input->post('matricula') ? $this->input->post('matricula') : $doccomercial['matricula']); ?>" class="form-control" id="matricula" />
		</div>
	</div>
	<div class="form-group">
		<label for="matriculaobs" class="col-md-4 control-label">Matriculaobs</label>
		<div class="col-md-8">
			<input type="text" name="matriculaobs" value="<?php echo ($this->input->post('matriculaobs') ? $this->input->post('matriculaobs') : $doccomercial['matriculaobs']); ?>" class="form-control" id="matriculaobs" />
		</div>
	</div>
	<div class="form-group">
		<label for="matriculaok" class="col-md-4 control-label">Matriculaok</label>
		<div class="col-md-8">
			<input type="text" name="matriculaok" value="<?php echo ($this->input->post('matriculaok') ? $this->input->post('matriculaok') : $doccomercial['matriculaok']); ?>" class="form-control" id="matriculaok" />
		</div>
	</div>
	<div class="form-group">
		<label for="antecedentesmono" class="col-md-4 control-label">Antecedentesmono</label>
		<div class="col-md-8">
			<input type="text" name="antecedentesmono" value="<?php echo ($this->input->post('antecedentesmono') ? $this->input->post('antecedentesmono') : $doccomercial['antecedentesmono']); ?>" class="form-control" id="antecedentesmono" />
		</div>
	</div>
	<div class="form-group">
		<label for="antecedentesmonoobs" class="col-md-4 control-label">Antecedentesmonoobs</label>
		<div class="col-md-8">
			<input type="text" name="antecedentesmonoobs" value="<?php echo ($this->input->post('antecedentesmonoobs') ? $this->input->post('antecedentesmonoobs') : $doccomercial['antecedentesmonoobs']); ?>" class="form-control" id="antecedentesmonoobs" />
		</div>
	</div>
	<div class="form-group">
		<label for="antecedentesmonook" class="col-md-4 control-label">Antecedentesmonook</label>
		<div class="col-md-8">
			<input type="text" name="antecedentesmonook" value="<?php echo ($this->input->post('antecedentesmonook') ? $this->input->post('antecedentesmonook') : $doccomercial['antecedentesmonook']); ?>" class="form-control" id="antecedentesmonook" />
		</div>
	</div>
	<div class="form-group">
		<label for="refcomercialesmono" class="col-md-4 control-label">Refcomercialesmono</label>
		<div class="col-md-8">
			<input type="text" name="refcomercialesmono" value="<?php echo ($this->input->post('refcomercialesmono') ? $this->input->post('refcomercialesmono') : $doccomercial['refcomercialesmono']); ?>" class="form-control" id="refcomercialesmono" />
		</div>
	</div>
	<div class="form-group">
		<label for="refcomercialesmonoobs" class="col-md-4 control-label">Refcomercialesmonoobs</label>
		<div class="col-md-8">
			<input type="text" name="refcomercialesmonoobs" value="<?php echo ($this->input->post('refcomercialesmonoobs') ? $this->input->post('refcomercialesmonoobs') : $doccomercial['refcomercialesmonoobs']); ?>" class="form-control" id="refcomercialesmonoobs" />
		</div>
	</div>
	<div class="form-group">
		<label for="refcomercialesmonook" class="col-md-4 control-label">Refcomercialesmonook</label>
		<div class="col-md-8">
			<input type="text" name="refcomercialesmonook" value="<?php echo ($this->input->post('refcomercialesmonook') ? $this->input->post('refcomercialesmonook') : $doccomercial['refcomercialesmonook']); ?>" class="form-control" id="refcomercialesmonook" />
		</div>
	</div>
	<div class="form-group">
		<label for="refbancariasmono" class="col-md-4 control-label">Refbancariasmono</label>
		<div class="col-md-8">
			<input type="text" name="refbancariasmono" value="<?php echo ($this->input->post('refbancariasmono') ? $this->input->post('refbancariasmono') : $doccomercial['refbancariasmono']); ?>" class="form-control" id="refbancariasmono" />
		</div>
	</div>
	<div class="form-group">
		<label for="refbancariasmonoobs" class="col-md-4 control-label">Refbancariasmonoobs</label>
		<div class="col-md-8">
			<input type="text" name="refbancariasmonoobs" value="<?php echo ($this->input->post('refbancariasmonoobs') ? $this->input->post('refbancariasmonoobs') : $doccomercial['refbancariasmonoobs']); ?>" class="form-control" id="refbancariasmonoobs" />
		</div>
	</div>
	<div class="form-group">
		<label for="refbancariasmonook" class="col-md-4 control-label">Refbancariasmonook</label>
		<div class="col-md-8">
			<input type="text" name="refbancariasmonook" value="<?php echo ($this->input->post('refbancariasmonook') ? $this->input->post('refbancariasmonook') : $doccomercial['refbancariasmonook']); ?>" class="form-control" id="refbancariasmonook" />
		</div>
	</div>
	
	<div class="form-group">
		<label for="contratosocial" class="col-md-4 control-label">Contratosocial</label>
		<div class="col-md-8">
			<input type="text" name="contratosocial" value="<?php echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="contratosocial" />
		</div>
	</div>
	<div class="form-group">
		<label for="contratosocialobs" class="col-md-4 control-label">Contratosocialobs</label>
		<div class="col-md-8">
			<input type="text" name="contratosocialobs" value="<?php echo ($this->input->post('contratosocialobs') ? $this->input->post('contratosocialobs') : $doccomercial['contratosocialobs']); ?>" class="form-control" id="contratosocialobs" />
		</div>
	</div>
	<div class="form-group">
		<label for="contratosocialok" class="col-md-4 control-label">Contratosocialok</label>
		<div class="col-md-8">
			<input type="text" name="contratosocialok" value="<?php echo ($this->input->post('contratosocialok') ? $this->input->post('contratosocialok') : $doccomercial['contratosocialok']); ?>" class="form-control" id="contratosocialok" />
		</div>
	</div>
	
	<div class="form-group">
		<label for="completo" class="col-md-4 control-label">Completo</label>
		<div class="col-md-8">
			<input type="text" name="completo" value="<?php echo ($this->input->post('completo') ? $this->input->post('completo') : $doccomercial['completo']); ?>" class="form-control" id="completo" />
		</div>
	</div>
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
	
<?php echo form_close(); ?>