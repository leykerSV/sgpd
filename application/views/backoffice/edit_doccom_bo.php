<?php echo form_open_multipart('backoffice/doccomercial/'.$doccomercial['idproveedor'],array("class"=>"form-horizontal")); ?>
<div class="container text-center">


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
							<span class="label other">Contrato Social</span><input type="file" accept=".pdf" name="contratosocial" value="<?php echo ($this->input->post('contratosocial') ? $this->input->post('contratosocial') : $doccomercial['contratosocial']); ?>" class="form-control" id="contratosocial">
							<?php echo anchor_popup(base_url().'archivos/'.$doccomercial['contratosocial'], 'Ver Archivo en Linea', ''); ?>
						</div>
						<div class="col-md-9">
							</span><span class="label other">Constancia de Inscripcion en AFIP</span><input type="file" accept=".pdf" name="inscripcion" value="" class="form-control" id="inscripcion" />
							<?php echo anchor_popup(base_url().'archivos/'.$doccomercial['inscripcion'], 'Ver Archivo en Linea', ''); ?>
						</div>
                        <div class="col-md-9">
							<span class="label other">Balance</span><input type="file" accept=".pdf" name="balance" value="<?php echo ($this->input->post('balance') ? $this->input->post('balance') : $doccomercial['balance']); ?>" class="form-control" id="balance" />
							<?php echo anchor_popup(base_url().'archivos/'.$doccomercial['balance'], 'Ver Archivo en Linea', ''); ?>
						</div>
                        <div class="col-md-9">
							<span class="label other">Constancia IIBB</span><input type="file" name="constanciaiibb" accept=".pdf" value="<?php echo ($this->input->post('constanciaiibb') ? $this->input->post('constanciaiibb') : $doccomercial['constanciaiibb']); ?>" class="form-control" id="constanciaiibb" />
							<?php echo anchor_popup(base_url().'archivos/'.$doccomercial['constanciaiibb'], 'Ver Archivo en Linea', ''); ?>
						</div>
						<div class="col-md-9">
							<span class="label other">Formulario CM01</span><input type="file" name="formulariocm01" accept=".pdf" value="<?php echo ($this->input->post('formulariocm01') ? $this->input->post('formulariocm01') : $doccomercial['formulariocm01']); ?>" class="form-control" id="formulariocm01" />
							<?php echo anchor_popup(base_url().'archivos/'.$doccomercial['formulariocm01'], 'Ver Archivo en Linea', ''); ?>
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
							<span class="label other">Constancia Monotributo</span><input type="file" accept=".pdf" name="constmonotributo" value="<?php echo ($this->input->post('constmonotributo') ? $this->input->post('constmonotributo') : $doccomercial['constmonotributo']); ?>" class="form-control" id="constmonotributo" />
							<?php echo anchor_popup(base_url().'archivos/'.$doccomercial['constmonotributo'], 'Ver Archivo en Linea', ''); ?>
						</div>
						<div class="col-md-9">
							<span class="label other">Constancia IIBB</span><input type="file" accept=".pdf" name="constmonotributoiibb" value="<?php echo ($this->input->post('constmonotributoiibb') ? $this->input->post('constmonotributoiibb') : $doccomercial['constmonotributoiibb']); ?>" class="form-control" id="constmonotributoiibb" />
							<?php echo anchor_popup(base_url().'archivos/'.$doccomercial['constmonotributoiibb'], 'Ver Archivo en Linea', ''); ?>
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
                    <h4>ESTADO FORMULARIO</h4>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        <?php if ($doccomercial['completo']==1){ ?>
                            <div class="form-group col-md-4" >
                            <label class="control-label bg-info d-flex justify-content-center align-items-left">COMPLETO</label>  
                            <input type="checkbox" name="completado" value="1" checked class="form-control bg-info " id="completado"></input>
                            </div>
                        <?php }else{ ?>
                            <div class="form-group col-md-4" >
                            <label class="control-label bg-info d-flex justify-content-center align-items-left">COMPLETO</label>  
                            <input type="checkbox" name="completado" value="0" class="form-control bg-info " id="completado"></input>
                            </div>
                        <?php } ?>
                        <?php if ($doccomercial['aprobado']==1){ ?>
                            <div class="form-group col-md-4" >
                            <label class="control-label bg-info d-flex justify-content-center align-items-left">APROBADO</label>  
                            <input type="checkbox" name="aprobado" value="1" checked class="form-control bg-info " id="aprobado" ></input>
                            </div>
                        <?php }else{ ?>
                            <div class="form-group col-md-4" >
                            <label class="control-label bg-info d-flex justify-content-center align-items-left">APROBADO</label>  
                            <input type="checkbox" name="aprobado" value="0" class="form-control bg-info " id="aprobado" ></input>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>							
	<p></p>

	
	

	<div class="form-group" hidden>
		<label for="idproveedor" class="col-md-4 control-label">Idproveedor</label>
		<div class="col-md-8">
			<input type="text" name="idproveedor" value="<?php echo ($this->input->post('idproveedor') ? $this->input->post('idproveedor') : $doccomercial['idproveedor']); ?>" class="form-control" id="idproveedor" />
		</div>
	</div>
	
	<div class="row">
        <div class="form-group col">
            <button type="submit" class="btn bg-info text-white">Guardar Cambios</button>
        </div>
    </div>
</div>

<?php echo form_close(); ?>