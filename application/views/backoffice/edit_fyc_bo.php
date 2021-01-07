<?php echo form_open('backoffice/formulariofyc/'.$formulariofyc['idproveedor'],array("class"=>"form-horizontal")); ?>

<style>
    .bg-info {
        background-color: #4563ab !important;
    }
</style>
    <!-- Tempus Dominus (Calendario)-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min.js"
        integrity="sha512-2JBCbWoMJPH+Uj7Wq5OLub8E5edWHlTM4ar/YJkZh3plwB2INhhOC3eDoqHm1Za/ZOSksrLlURLoyXVdfQXqwg=="
        crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/css/tempusdominus-bootstrap-4.min.css"
        integrity="sha512-PMjWzHVtwxdq7m7GIxBot5vdxUY+5aKP9wpKtvnNBZrVv1srI8tU6xvFMzG8crLNcMj/8Xl/WWmo/oAP/40p1g=="
        crossorigin="anonymous" />

<div class="container text-center">
    <!--<div class="col text-center">
        <img src="COCYAR.png" class="img-fluid" alt="Responsive image">
    </div>-->
    <div class="text-white mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 bg-info d-flex justify-content-center align-items-center p-3">
                    <h4>INFORMACION FISCAL</h4>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        <div class="col" hidden>
                            <label class="col-md-12 control-label bg-info d-flex justify-content-center align-items-center">Categoría Fiscal</label>
                            <select name="categoriafiscal" class="form-control">
                                <option value="VER FICHA PROVEEDOR">Seleccionar Categoria Fiscal</option>
                                <?php 
                                $categoriafiscal_values = array(
                                    'RESPONSABLE INSCRIPTO'=>'RESPONSABLE INSCRIPTO',
                                    'MONOTRIBUTO'=>'MONOTRIBUTO',
                                    'CONSUMIDOR FINAL'=>'CONSUMIDOR FINAL',
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
                    <div class="input-group mb-3" hidden>
                        <div class="col-md-6">
                            <label class="control-label bg-info d-flex justify-content-center align-items-left">Identificación Tribuitaria</label>
                            <input type="text" name="identificaciontributaria" value="<?php echo ($this->input->post('identificaciontributaria') ? $this->input->post('identificaciontributaria') : $formulariofyc['identificaciontributaria']); ?>"
                                class="form-control" id="identificaciontributaria" placeholder="Identificación Tributaria" />
                        </div>
                        <div class="col-md-6">
                            <label class="control-label bg-info d-flex justify-content-center align-items-left">Nº Identificación Tribuitaria</label>
                            <input type="text" name="numidentificacion" value="<?php echo ($this->input->post('numidentificacion') ? $this->input->post('numidentificacion') : $formulariofyc['numidentificacion']); ?>"
                                class="form-control" id="numidentificacion" placeholder="Num. Identificación" />
                        </div>
                    </div>
                            
                    <div class="input-group mb-3">
                        <div class="col">
                            <label class="control-label bg-info d-flex justify-content-center align-items-left">CUIT</label>
                            <input type="text" name="cuit" value="<?php echo ($this->input->post('cuit') ? $this->input->post('cuit') : $formulariofyc['cuit']); ?>"
                                class="form-control" id="cuit" placeholder="CUIT" />
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="col">
                            <label class="control-label bg-info d-flex justify-content-center align-items-left">Ident. Tributaria en pais origen</label>
                            <input type="text" name="identtribpaisorigen" value="<?php echo ($this->input->post('identtribpaisorigen') ? $this->input->post('identtribpaisorigen') : $formulariofyc['identtribpaisorigen']); ?>"
                                class="form-control" id="identtribpaisorigen" placeholder="Ident. Tributaria en pais origen"
                            />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
                            <label class="control-label bg-info d-flex justify-content-center align-items-left">Tipo de Persona</label>
                            <input type="text" name="tipopersona" value="<?php echo ($this->input->post('tipopersona') ? $this->input->post('tipopersona') : $formulariofyc['tipopersona']); ?>"
                                class="form-control" id="tipopersona" placeholder="Tipo de persona" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col-md-8">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Categoría SIAP</label>
                            <input type="text" name="catsiap" value="<?php echo ($this->input->post('catsiap') ? $this->input->post('catsiap') : $formulariofyc['catsiap']); ?>"
                                class="form-control" id="catsiap" placeholder="Categoría SIAP" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col-md-8">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Motivo Baja</label>
                            <input type="text" name="motivobaja" value="<?php echo ($this->input->post('motivobaja') ? $this->input->post('motivobaja') : $formulariofyc['motivobaja']); ?>"
                                class="form-control" id="motivobaja" placeholder="Motivo baja" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col-md-8">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Fecha de Constitución</label>
                            <input type="text" class="form-control datetimepicker-input" id="fechaconstitucion"
                                data-toggle="datetimepicker" data-target="#fechaconstitucion"
                                name="fechaconstitucion" value="<?php echo ($this->input->post('fechaconstitucion') ? $this->input->post('fechaconstitucion') : $formulariofyc['fechaconstitucion']); ?>" placeholder="Fecha de Constitución" />
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
                    <h4>DATOS BANCARIOS</h4>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        <div class="col">
                            <label class="control-label bg-info d-flex justify-content-center align-items-left">Banco</label>
                            <input type="text" name="banco" value="<?php echo ($this->input->post('banco') ? $this->input->post('banco') : $formulariofyc['banco']); ?>"
                                class="form-control" id="banco" placeholder="Banco" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Sucursal</label>
                            <input type="text" name="sucursalbanco" value="<?php echo ($this->input->post('sucursalbanco') ? $this->input->post('sucursalbanco') : $formulariofyc['sucursalbanco']); ?>"
                                class="form-control" id="sucursalbanco" placeholder="Sucursal del Banco" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Tipo de Cuenta</label>
                            <input type="text" name="tipocuenta" value="<?php echo ($this->input->post('tipocuenta') ? $this->input->post('tipocuenta') : $formulariofyc['tipocuenta']); ?>"
                                class="form-control" id="tipocuenta" placeholder="Tipo de cuenta" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">C.B.U.</label>
                            <input type="text" name="cbu" value="<?php echo ($this->input->post('cbu') ? $this->input->post('cbu') : $formulariofyc['cbu']); ?>"
                                class="form-control" id="cbu" placeholder="CBU" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Beneficiario del Cheque</label>
                            <input type="text" name="beneficiariochq" value="<?php echo ($this->input->post('beneficiariochq') ? $this->input->post('beneficiariochq') : $formulariofyc['beneficiariochq']); ?>"
                                class="form-control" id="beneficiariochq" placeholder="Beneficiario del cheque" />
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
                    <h4>SITUACION IIBB</h4>
                    <p> </p>
                    <input hidden type="checkbox" id="iibbnoaplica" name="iibbnoaplica" value="No Aplica" ></input>
                    <script type="text/javascript">
                        $(function () {
                            $("#iibbnoaplica").click(function () {
                                if ($(this).is(":checked")) {
                                    $("#numinscripiibb").attr("readonly",true);
                                    $("#numinscripiibb").attr("placeholder","NO APLICA");
                                    $("#numinscripiibb").attr("value","NO APLICA");
                                    $("#porcret").attr("readonly",true);
                                    $("#porcret").attr("placeholder","NO APLICA");
                                    $("#porcret").attr("value","NO APLICA");
                                    $("#situacioniibb").attr('disabled', 'disabled');
                                    $("#situacioniibb").attr('value',"NO APLICA");
                                    $("#situacioniibb").append("<option value='NO APLICA' >NO APLICA</option>")
                                    $("#situacioniibb option[value='NO APLICA']").attr("selected",true);
                                } else {
                                    $("#numinscripiibb").attr("readonly",false);
                                    $("#numinscripiibb").attr("placeholder","Nro. Insc. IIBB");
                                    $("#numinscripiibb").attr("value","");
                                    $("#porcret").attr("readonly",false);
                                    $("#porcret").attr("placeholder","Porcentaje de Retención");
                                    $("#porcret").attr("value","");
                                    $("#situacioniibb").removeAttr('disabled');
                                    $("#situacioniibb option[value=0]").attr("selected",true);
                                }
                            });
                        });
                    </script>
                </div>
                <div class="col-md-9">
                    
                    <div class="input-group mb-3">
                        <div class="col">
                            <label class="control-label bg-info d-flex justify-content-center align-items-left">Situación IIBB</label>
                            <select name="situacioniibb" id="situacioniibb" class="form-control">

                                <?php 
						$situacioniibb_values = array(
							'CONTRIBUYENTE LOCAL'=>'CONTRIBUYENTE LOCAL',
							'CONVENIO MULTILATERAL'=>'CONVENIO MULTILATERAL',
							'REGIMEN SIMPLIFICADO'=>'REGIMEN SIMPLIFICADO',
							'NO INSCRIPTO'=>'NO INSCRIPTO',
                            'EXENTO'=>'EXENTO',
                            'NO APLICA'=>'NO APLICA'
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
                        <div class="col">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Nro. inscripción en  IIBB</label>
                            <input type="text" name="numinscripiibb" value="<?php echo ($this->input->post('numinscripiibb') ? $this->input->post('numinscripiibb') : $formulariofyc['numinscripiibb']); ?>"
                                class="form-control" id="numinscripiibb" placeholder="Nro. inscrip. IIBB" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Porcentaje de Retención</label>
                            <input type="text" name="porcret" value="<?php echo ($this->input->post('porcret') ? $this->input->post('porcret') : $formulariofyc['porcret']); ?>"
                                class="form-control" id="porcret" placeholder="Porcentaje de retención" />
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
                    <h4>SITUACION FRENTE A GANACIAS</h4>
                    <input hidden type="checkbox" id="gciasnoaplica" name="gciasnoaplica" value="No Aplica" ></input>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#gciasnoaplica').on('click', function () {
                                if ($('#gciasnoaplica').is(":checked")) {
                                    $("#ganancias").attr('disabled', 'disabled');
                                    $("#ganancias").append("<option value='NO APLICA' >NO APLICA</option>")
                                    $("#ganancias option[value='NO APLICA']").attr("selected",true);
                                } else {
                                    $("#ganancias").removeAttr('disabled');
                                    $("#ganancias option[value=0]").attr("selected",true);
                                }
                            });
                        });
                    </script>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        <div class="col">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Situación frente a Ganancias</label>
                            <select name="ganancias" id="ganancias" class="form-control">
                                <option value="0">Seleccionar Ganancias</option>
                                <?php 
							$ganancias_values = array(
								'INSCRIPTO'=>'INSCRIPTO',
                                'EXENTO'=>'EXENTO',
                                'NO APLICA'=>'NO APLICA'
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
        </div>
    </div>
    <div class="text-white mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 bg-info d-flex justify-content-center align-items-center p-3">
                    <h4>SITUACION FRENTE A SUSS</h4>
                    <input hidden type="checkbox" id="sussnoaplica" name="sussnoaplica" value="No Aplica"></input>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#sussnoaplica').on('click', function () {
                                if ($('#sussnoaplica').is(":checked")) {
                                    $("#suss").attr('disabled', 'disabled');
                                    $("#suss").append("<option value='NO APLICA' >NO APLICA</option>")
                                    $("#suss option[value='NO APLICA']").attr("selected",true);
                                } else {
                                    $("#suss").removeAttr('disabled');
                                    $("#suss option[value=0]").attr("selected",true);
                                }
                            });
                        });
                    </script>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        <div class="col">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">SUSS</label>
                            <select name="suss" id="suss" class="form-control">
                                <option value="">Seleccionar SUSS</option>
                                <?php 
							$suss_values = array(
								'INSCRIPTO'=>'INSCRIPTO',
                                'EXENTO'=>'EXENTO',
                                'NO APLICA'=>'NO APLICA'
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
        </div>
    </div>

    <div class="text-white mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 bg-info d-flex justify-content-center align-items-center p-3">
                    <h4>DESIGNADO AGENTE DE PERCEPCION</h4>
                    <input hidden type="checkbox" id="pernoaplica" name="pernoaplica" value="No Aplica"></input>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#pernoaplica').on('click', function () {
                                if ($('#pernoaplica').is(":checked")) {
                                    $("#agentepercepcioniva").attr("readonly",true);
                                    $("#agentepercepcioniva").attr("placeholder","NO APLICA");
                                    $("#agentepercepcioniva").attr("value","NO APLICA");
                                    $("#agentepercepcionivares").attr("readonly",true);
                                    $("#agentepercepcionivares").attr("placeholder","NO APLICA");
                                    $("#agentepercepcionivares").attr("value","NO APLICA");
                                    $("#agentepercepcionivaali").attr("readonly",true);
                                    $("#agentepercepcionivaali").attr("placeholder","NO APLICA");
                                    $("#agentepercepcionivaali").attr("value","NO APLICA");
                                    $("#agentepercepcioniibb1").attr("readonly",true);
                                    $("#agentepercepcioniibb1").attr("placeholder","NO APLICA");
                                    $("#agentepercepcioniibb1").attr("value","NO APLICA");
                                    $("#agentepercepcioniibb1pcia").attr("readonly",true);
                                    $("#agentepercepcioniibb1pcia").attr("placeholder","NO APLICA");
                                    $("#agentepercepcioniibb1pcia").attr("value","NO APLICA");
                                    $("#agentepercepcioniibb1ali").attr("readonly",true);
                                    $("#agentepercepcioniibb1ali").attr("placeholder","NO APLICA");
                                    $("#agentepercepcioniibb1ali").attr("value","NO APLICA");
                                    $("#agentepercepcioniibb2").attr("readonly",true);
                                    $("#agentepercepcioniibb2").attr("placeholder","NO APLICA");
                                    $("#agentepercepcioniibb2").attr("value","NO APLICA");
                                    $("#agentepercepcioniibb2pcia").attr("readonly",true);
                                    $("#agentepercepcioniibb2pcia").attr("placeholder","NO APLICA");
                                    $("#agentepercepcioniibb2pcia").attr("value","NO APLICA");
                                    $("#agentepercepcioniibb2ali").attr("readonly",true);
                                    $("#agentepercepcioniibb2ali").attr("placeholder","NO APLICA");
                                    $("#agentepercepcioniibb2ali").attr("value","NO APLICA"); 
                                    $("#agentepercepcioniibb3").attr("readonly",true);
                                    $("#agentepercepcioniibb3").attr("placeholder","NO APLICA");
                                    $("#agentepercepcioniibb3").attr("value","NO APLICA");
                                    $("#agentepercepcioniibb3pcia").attr("readonly",true);
                                    $("#agentepercepcioniibb3pcia").attr("placeholder","NO APLICA");
                                    $("#agentepercepcioniibb3pcia").attr("value","NO APLICA");
                                    $("#agentepercepcioniibb3ali").attr("readonly",true);
                                    $("#agentepercepcioniibb3ali").attr("placeholder","NO APLICA");
                                    $("#agentepercepcioniibb3ali").attr("value","NO APLICA");
                                } else {
                                    $("#agentepercepcioniva").attr("readonly",false);
                                    $("#agentepercepcioniva").attr("placeholder","I.V.A.");
                                    $("#agentepercepcioniva").attr("value","");
                                    $("#agentepercepcionivares").attr("readonly",false);
                                    $("#agentepercepcionivares").attr("placeholder","Res. numero");
                                    $("#agentepercepcionivares").attr("value","");
                                    $("#agentepercepcionivaali").attr("readonly",false);
                                    $("#agentepercepcionivaali").attr("placeholder","Alicuota");
                                    $("#agentepercepcionivaali").attr("value","");
                                    $("#agentepercepcioniibb1").attr("readonly",false);
                                    $("#agentepercepcioniibb1").attr("placeholder","IIBB");
                                    $("#agentepercepcioniibb1").attr("value","");
                                    $("#agentepercepcioniibb1pcia").attr("readonly",false);
                                    $("#agentepercepcioniibb1pcia").attr("placeholder","Provincia");
                                    $("#agentepercepcioniibb1pcia").attr("value","");
                                    $("#agentepercepcioniibb1ali").attr("readonly",false);
                                    $("#agentepercepcioniibb1ali").attr("placeholder","Alicuota");
                                    $("#agentepercepcioniibb1ali").attr("value","");
                                    $("#agentepercepcioniibb2").attr("readonly",false);
                                    $("#agentepercepcioniibb2").attr("placeholder","IIBB");
                                    $("#agentepercepcioniibb2").attr("value","");
                                    $("#agentepercepcioniibb2pcia").attr("readonly",false);
                                    $("#agentepercepcioniibb2pcia").attr("placeholder","Provincia");
                                    $("#agentepercepcioniibb2pcia").attr("value","");
                                    $("#agentepercepcioniibb2ali").attr("readonly",false);
                                    $("#agentepercepcioniibb2ali").attr("placeholder","Alicuota");
                                    $("#agentepercepcioniibb2ali").attr("value",""); 
                                    $("#agentepercepcioniibb3").attr("readonly",false);
                                    $("#agentepercepcioniibb3").attr("placeholder","IIBB");
                                    $("#agentepercepcioniibb3").attr("value","");
                                    $("#agentepercepcioniibb3pcia").attr("readonly",false);
                                    $("#agentepercepcioniibb3pcia").attr("placeholder","Provincia");
                                    $("#agentepercepcioniibb3pcia").attr("value","");
                                    $("#agentepercepcioniibb3ali").attr("readonly",false);
                                    $("#agentepercepcioniibb3ali").attr("placeholder","Alicuota");
                                    $("#agentepercepcioniibb3ali").attr("value","");
                                }
                            });
                        });
                    </script>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        <div class="col-md-4">
                            <label class="control-label bg-info d-flex justify-content-center align-items-left">I.V.A.</label>
                                <select name="agentepercepcioniva" class="form-control">
                                <option value="NO">NO</option>
                                <?php 
								$opciones_values = array(
									'SI'=>'SI'
								);

								foreach($opciones_values as $value => $display_text)
								{
									$selected = ($value == $formulariofyc['agentepercepcioniva']) ? ' selected="selected"' : "";
									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
							?>
                            </select>
                        </div>
                        <div class="col-md-4">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Resolución Número</label>
                            <input type="text" name="agentepercepcionivares" value="<?php echo ($this->input->post('agentepercepcionivares') ? $this->input->post('agentepercepcionivares') : $formulariofyc['agentepercepcionivares']); ?>"
                                class="form-control" id="agentepercepcionivares" placeholder="Res. numero" />
                        </div>
                        <div class="col-md-4">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Alícuota</label>
                            <input type="text" name="agentepercepcionivaali" value="<?php echo ($this->input->post('agentepercepcionivaali') ? $this->input->post('agentepercepcionivaali') : $formulariofyc['agentepercepcionivaali']); ?>"
                                class="form-control" id="agentepercepcionivaali" placeholder="Alícuota" />
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="col-md-4">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">IIBB</label>
                                <select name="agentepercepcioniibb1" class="form-control">
                                <option value="NO">NO</option>
                                <?php 
								$opciones_values = array(
									'SI'=>'SI'
								);

								foreach($opciones_values as $value => $display_text)
								{
									$selected = ($value == $formulariofyc['agentepercepcioniibb1']) ? ' selected="selected"' : "";
									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
							?>
                            </select>
                        </div>
                        <div class="col-md-4">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Provincia</label>
                            <input type="text" name="agentepercepcioniibb1pcia" value="<?php echo ($this->input->post('agentepercepcioniibb1pcia') ? $this->input->post('agentepercepcioniibb1pcia') : $formulariofyc['agentepercepcioniibb1pcia']); ?>"
                                class="form-control" id="agentepercepcioniibb1pcia" placeholder="Provincia" />
                        </div>
                        <div class="col-md-4">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Alícuota</label>
                            <input type="text" name="agentepercepcioniibb1ali" value="<?php echo ($this->input->post('agentepercepcioniibb1ali') ? $this->input->post('agentepercepcioniibb1ali') : $formulariofyc['agentepercepcioniibb1ali']); ?>"
                                class="form-control" id="agentepercepcioniibb1ali" placeholder="Alícuota" />
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="col-md-4">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">IIBB</label>
                            <select name="agentepercepcioniibb2" class="form-control">
                                <option value="NO">NO</option>
                                <?php 
								$opciones_values = array(
									'SI'=>'SI'
								);

								foreach($opciones_values as $value => $display_text)
								{
									$selected = ($value == $formulariofyc['agentepercepcioniibb2']) ? ' selected="selected"' : "";
									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
							    ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Provincia</label>
                            <input type="text" name="agentepercepcioniibb2pcia" value="<?php echo ($this->input->post('agentepercepcioniibb2pcia') ? $this->input->post('agentepercepcioniibb2pcia') : $formulariofyc['agentepercepcioniibb2pcia']); ?>"
                                class="form-control" id="agentepercepcioniibb2pcia" placeholder="Provincia" />
                        </div>
                        <div class="col-md-4">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Alícuota</label>
                            <input type="text" name="agentepercepcioniibb2ali" value="<?php echo ($this->input->post('agentepercepcioniibb2ali') ? $this->input->post('agentepercepcioniibb2ali') : $formulariofyc['agentepercepcioniibb2ali']); ?>"
                                class="form-control" id="agentepercepcioniibb2ali" placeholder="Alícuota" />
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="col-md-4">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">IIBB</label>
                            <select name="agentepercepcioniibb3" class="form-control">
                                <option value="NO">NO</option>
                                <?php 
								$opciones_values = array(
									'SI'=>'SI'
								);

								foreach($opciones_values as $value => $display_text)
								{
									$selected = ($value == $formulariofyc['agentepercepcioniibb3']) ? ' selected="selected"' : "";
									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
							    ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Provincia</label>
                            <input type="text" name="agentepercepcioniibb3pcia" value="<?php echo ($this->input->post('agentepercepcioniibb3pcia') ? $this->input->post('agentepercepcioniibb3pcia') : $formulariofyc['agentepercepcioniibb3pcia']); ?>"
                                class="form-control" id="agentepercepcioniibb3pcia" placeholder="Provincia" />
                        </div>
                        <div class="col-md-4">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Alícuota</label>
                            <input type="text" name="agentepercepcioniibb3ali" value="<?php echo ($this->input->post('agentepercepcioniibb3ali') ? $this->input->post('agentepercepcioniibb3ali') : $formulariofyc['agentepercepcioniibb3ali']); ?>"
                                class="form-control" id="agentepercepcioniibb3ali" placeholder="Alícuota" />
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
                    <h4>DESIGNADO AGENTE DE RETENCION</h4>
                    <input hidden type="checkbox" id="retnoaplica" name="retnoaplica" value="No Aplica"></input>
                    <script type="text/javascript"> 
                        $(document).ready(function () {
                            $('#retnoaplica').on('click', function () {
                                if ($('#retnoaplica').is(":checked")) {
                                    $("#agenteretgcias").attr("readonly",true);
                                    $("#agenteretgcias").attr("placeholder","NO APLICA");
                                    $("#agenteretgcias").attr("value","NO APLICA");
                                    $("#agenteretgciasres").attr("readonly",true);
                                    $("#agenteretgciasres").attr("placeholder","NO APLICA");
                                    $("#agenteretgciasres").attr("value","NO APLICA");
                                    $("#agenteretgciasiibb").attr("readonly",true);
                                    $("#agenteretgciasiibb").attr("placeholder","NO APLICA");
                                    $("#agenteretgciasiibb").attr("value","NO APLICA");
                                    $("#agenteretgciasiibbres").attr("readonly",true);
                                    $("#agenteretgciasiibbres").attr("placeholder","NO APLICA");
                                    $("#agenteretgciasiibbres").attr("value","NO APLICA");
                                    $("#agenteretgciassuss").attr("readonly",true);
                                    $("#agenteretgciassuss").attr("placeholder","NO APLICA");
                                    $("#agenteretgciassuss").attr("value","NO APLICA");
                                    $("#agenteretgciassussres").attr("readonly",true);
                                    $("#agenteretgciassussres").attr("placeholder","NO APLICA");
                                    $("#agenteretgciassussres").attr("value","NO APLICA");
                                    $("#agenteretgciasivares").attr("readonly",true);
                                    $("#agenteretgciasivares").attr("placeholder","NO APLICA");
                                    $("#agenteretgciasivares").attr("value","NO APLICA");
                                } else {
                                    $("#agenteretgcias").attr("readonly",false);
                                    $("#agenteretgcias").attr("placeholder","Ganancias");
                                    $("#agenteretgcias").attr("value","");
                                    $("#agenteretgciasres").attr("readonly",false);
                                    $("#agenteretgciasres").attr("placeholder","Resolucion Gcias.");
                                    $("#agenteretgciasres").attr("value","");
                                    $("#agenteretgciasiibb").attr("readonly",false);
                                    $("#agenteretgciasiibb").attr("placeholder","IIBB");
                                    $("#agenteretgciasiibb").attr("value","");
                                    $("#agenteretgciasiibbres").attr("readonly",false);
                                    $("#agenteretgciasiibbres").attr("placeholder","Resolucion IIBB");
                                    $("#agenteretgciasiibbres").attr("value","");
                                    $("#agenteretgciassuss").attr("readonly",false);
                                    $("#agenteretgciassuss").attr("placeholder","SUSS");
                                    $("#agenteretgciassuss").attr("value","");
                                    $("#agenteretgciassussres").attr("readonly",false);
                                    $("#agenteretgciassussres").attr("placeholder","Resolución SUSS");
                                    $("#agenteretgciassussres").attr("value","");
                                    $("#agenteretgciasivares").attr("readonly",false);
                                    $("#agenteretgciasivares").attr("placeholder","Resolución IVA");
                                    $("#agenteretgciasivares").attr("value","");
                                }
                            });
                        });
                    </script>
                                
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        <div class="col-md-6">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Ganancias</label>
                            <input type="text" name="agenteretgcias" value="<?php echo ($this->input->post('agenteretgcias') ? $this->input->post('agenteretgcias') : $formulariofyc['agenteretgcias']); ?>"
                                class="form-control" id="agenteretgcias" placeholder="Ganancias" />
                        </div>
                        <div class="col-md-6">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Resolución Ganancias</label>
                            <input type="text" name="agenteretgciasres" value="<?php echo ($this->input->post('agenteretgciasres') ? $this->input->post('agenteretgciasres') : $formulariofyc['agenteretgciasres']); ?>"
                                class="form-control" id="agenteretgciasres" placeholder="Resolución Gcias." />
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="col-md-6">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">IIBB</label>
                            <input type="text" name="agenteretgciasiibb" value="<?php echo ($this->input->post('agenteretgciasiibb') ? $this->input->post('agenteretgciasiibb') : $formulariofyc['agenteretgciasiibb']); ?>"
                                class="form-control" id="agenteretgciasiibb" placeholder="IIBB" />
                        </div>
                        <div class="col-md-6">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Resolución IIBB</label>
                            <input type="text" name="agenteretgciasiibbres" value="<?php echo ($this->input->post('agenteretgciasiibbres') ? $this->input->post('agenteretgciasiibbres') : $formulariofyc['agenteretgciasiibbres']); ?>"
                                class="form-control" id="agenteretgciasiibbres" placeholder="Resolución IIBB" />
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="col-md-6">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">SUSS</label>
                            <input type="text" name="agenteretgciassuss" value="<?php echo ($this->input->post('agenteretgciassuss') ? $this->input->post('agenteretgciassuss') : $formulariofyc['agenteretgciassuss']); ?>"
                                class="form-control" id="agenteretgciassuss" placeholder="SUSS" />
                        </div>
                        <div class="col-md-6">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Resolución SUSS</label>
                            <input type="text" name="agenteretgciassussres" value="<?php echo ($this->input->post('agenteretgciassussres') ? $this->input->post('agenteretgciassussres') : $formulariofyc['agenteretgciassussres']); ?>"
                                class="form-control" id="agenteretgciassussres" placeholder="Resolución SUSS" />
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="col">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Resolución IVA</label>
                            <input type="text" name="agenteretgciasivares" value="<?php echo ($this->input->post('agenteretgciasivares') ? $this->input->post('agenteretgciasivares') : $formulariofyc['agenteretgciasivares']); ?>"
                                class="form-control" id="agenteretgciasivares" placeholder="Resolución IVA" />
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
                    <h4>FACTURACION ANUAL (Según balance, indicar los últimos tres)</h4>
                    <input hidden type="checkbox" id="factnoaplica" name="factnoaplica" value="No Aplica"></input>
                    <script type="text/javascript"> 
                        $(document).ready(function () {
                            $('#factnoaplica').on('click', function () {
                                if ($('#factnoaplica').is(":checked")) {
                                    $("#factultimocierre").attr("readonly",true);
                                    $("#factultimocierre").attr("placeholder","NO APLICA");
                                    $("#factultimocierre").attr("value","NO APLICA");
                                    $("#factanteultimocierre").attr("readonly",true);
                                    $("#factanteultimocierre").attr("placeholder","NO APLICA");
                                    $("#factanteultimocierre").attr("value","NO APLICA");
                                    $("#factantepenultimocierre").attr("readonly",true);
                                    $("#factantepenultimocierre").attr("placeholder","NO APLICA");
                                    $("#factantepenultimocierre").attr("value","NO APLICA");
                                } else {
                                    $("#factultimocierre").attr("readonly",false);
                                    $("#factultimocierre").attr("placeholder","Facturacion Ultimo Cierre");
                                    $("#factultimocierre").attr("value","");
                                    $("#factanteultimocierre").attr("readonly",false);
                                    $("#factanteultimocierre").attr("placeholder","Facturacion Anteultimo Cierre");
                                    $("#factanteultimocierre").attr("value","");
                                    $("#factantepenultimocierre").attr("readonly",false);
                                    $("#factantepenultimocierre").attr("placeholder","Facturacion Antepenultimo Cierre");
                                    $("#factantepenultimocierre").attr("value","");  
                                }
                            });
                        });
                    </script>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        <div class="col-md-6">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Monto</label>
                            <input type="text" name="factultimocierre" value="<?php echo ($this->input->post('factultimocierre') ? $this->input->post('factultimocierre') : $formulariofyc['factultimocierre']); ?>"
                                class="form-control" id="factultimocierre" placeholder="Facturación ultimo cierre" />
                        </div>
                        <div class="col-md-6">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Año</label>
                            <input type="text" name="factultimocierreanio" value="<?php echo ($this->input->post('factultimocierreanio') ? $this->input->post('factultimocierreanio') : $formulariofyc['factultimocierreanio']); ?>"
                                class="form-control" id="factultimocierreanio" placeholder="Año ultimo cierre" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col-md-6">
                            <input type="text" name="factanteultimocierre" value="<?php echo ($this->input->post('factanteultimocierre') ? $this->input->post('factanteultimocierre') : $formulariofyc['factanteultimocierre']); ?>"
                                class="form-control" id="factanteultimocierre" placeholder="Facturación anteultimo cierre" />
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="factanteultimocierreanio" value="<?php echo ($this->input->post('factanteultimocierreanio') ? $this->input->post('factanteultimocierreanio') : $formulariofyc['factanteultimocierreanio']); ?>"
                                class="form-control" id="factanteultimocierreanio" placeholder="Año anteultimo cierre" />
                        </div>
                    </div>
                    <div class="input-group mb-3-md-6">
                        <div class="col">
                            <input type="text" name="factantepenultimocierre" value="<?php echo ($this->input->post('factantepenultimocierre') ? $this->input->post('factantepenultimocierre') : $formulariofyc['factantepenultimocierre']); ?>"
                                class="form-control" id="factantepenultimocierre" placeholder="Facturación antepenultimo cierre"
                            />
                        </div>
                        <div class="col">
                            <input type="text" name="factantepenultimocierreanio" value="<?php echo ($this->input->post('factantepenultimocierreanio') ? $this->input->post('factantepenultimocierreanio') : $formulariofyc['factantepenultimocierreanio']); ?>"
                                class="form-control" id="factantepenultimocierreanio" placeholder="Año antepenultimo cierre"
                            />
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
                    <h4>REFERENCIAS COMERCIALES</h4>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        <div class="col-md-4">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Empresa</label>
                            <input type="text" name="refcom1" value="<?php echo ($this->input->post('refcom1') ? $this->input->post('refcom1') : $formulariofyc['refcom1']); ?>"
                                class="form-control" id="refcom1" placeholder="Empresa" />
                        </div>
                        <div class="col-md-4">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Contacto</label>
                            <input type="text" name="refcom1contacto" value="<?php echo ($this->input->post('refcom1contacto') ? $this->input->post('refcom1contacto') : $formulariofyc['refcom1contacto']); ?>"
                                class="form-control" id="refcom1contacto" placeholder="Contacto" />
                        </div>
                        <div class="col-md-4">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Teléfono</label>
                            <input type="text" name="refcom1tel" value="<?php echo ($this->input->post('refcom1tel') ? $this->input->post('refcom1tel') : $formulariofyc['refcom1tel']); ?>"
                                class="form-control" id="refcom1tel" placeholder="Tel" />
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="col-md-4">
                        
                            <input type="text" name="refcom2" value="<?php echo ($this->input->post('refcom2') ? $this->input->post('refcom2') : $formulariofyc['refcom2']); ?>"
                                class="form-control" id="refcom2" placeholder="Empresa" />
                        </div>
                        <div class="col-md-4">
                        
                            <input type="text" name="refcom2contacto" value="<?php echo ($this->input->post('refcom2contacto') ? $this->input->post('refcom2contacto') : $formulariofyc['refcom2contacto']); ?>"
                                class="form-control" id="refcom2contacto" placeholder="Contacto" />
                        </div>
                        <div class="col-md-4">
                        
                            <input type="text" name="refcom2tel" value="<?php echo ($this->input->post('refcom2tel') ? $this->input->post('refcom2tel') : $formulariofyc['refcom2tel']); ?>"
                                class="form-control" id="refcom2tel" placeholder="Tel" />
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="col-md-4">
                        
                            <input type="text" name="refcom3" value="<?php echo ($this->input->post('refcom3') ? $this->input->post('refcom3') : $formulariofyc['refcom3']); ?>"
                                class="form-control" id="refcom3" placeholder="Empresa" />
                        </div>
                        <div class="col-md-4">
                        
                            <input type="text" name="refcom3contacto" value="<?php echo ($this->input->post('refcom3contacto') ? $this->input->post('refcom3contacto') : $formulariofyc['refcom3contacto']); ?>"
                                class="form-control" id="refcom3contacto" placeholder="Contacto" />
                        </div>
                        <div class="col-md-4">
                        
                            <input type="text" name="refcom3tel" value="<?php echo ($this->input->post('refcom3tel') ? $this->input->post('refcom3tel') : $formulariofyc['refcom3tel']); ?>"
                                class="form-control" id="refcom3tel" placeholder="Tel" />
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
                    <h4>CONTACTOS</h4>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        <div class="col-md-4">
                            <label class="control-label bg-info d-flex justify-content-center align-items-left">Teléfono Area Contable</label>
                            <input type="text" name="areacontabletel" value="<?php echo ($this->input->post('areacontabletel') ? $this->input->post('areacontabletel') : $formulariofyc['areacontabletel']); ?>"
                                class="form-control" id="areacontabletel" placeholder="Area Contable Tel" />
                        </div>
                        <div class="col-md-4">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Mail Area Contable</label>
                            <input type="text" name="areacontablemail" value="<?php echo ($this->input->post('areacontablemail') ? $this->input->post('areacontablemail') : $formulariofyc['areacontablemail']); ?>"
                                class="form-control" id="areacontablemail" placeholder="Area Contable Mail" />
                        </div>
                        <div class="col-md-4">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Horario Area Contable</label>
                            <input type="text" name="areacontablehorario" value="<?php echo ($this->input->post('areacontablehorario') ? $this->input->post('areacontablehorario') : $formulariofyc['areacontablehorario']); ?>"
                                class="form-control" id="areacontablehorario" placeholder="Area Contable horario" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col-md-4">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Teléfono Area Pagos</label>
                            <input type="text" name="areapagostel" value="<?php echo ($this->input->post('areapagostel') ? $this->input->post('areapagostel') : $formulariofyc['areapagostel']); ?>"
                                class="form-control" id="areapagostel" placeholder="Area Pagos Tel" />
                        </div>
                        <div class="col-md-4">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Mail Area Pagos</label>
                            <input type="text" name="areapagosmail" value="<?php echo ($this->input->post('areapagosmail') ? $this->input->post('areapagosmail') : $formulariofyc['areapagosmail']); ?>"
                                class="form-control" id="areapagosmail" placeholder="Area Pagos Mail" />
                        </div>
                        <div class="col-md-4">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Horarios Area Pagos</label>
                            <input type="text" name="areapagoshorario" value="<?php echo ($this->input->post('areapagoshorario') ? $this->input->post('areapagoshorario') : $formulariofyc['areapagoshorario']); ?>"
                                class="form-control" id="areapagoshorario" placeholder="Area Pagos Horario" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col-md-4">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Teléfono Otras Areas</label>
                            <input type="text" name="otrasareastel" value="<?php echo ($this->input->post('otrasareastel') ? $this->input->post('otrasareastel') : $formulariofyc['otrasareastel']); ?>"
                                class="form-control" id="otrasareastel" placeholder="Otras Areas Tel" />
                        </div>
                        <div class="col-md-4">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Mail Otras Areas</label>
                            <input type="text" name="otrasareasmail" value="<?php echo ($this->input->post('otrasareasmail') ? $this->input->post('otrasareasmail') : $formulariofyc['otrasareasmail']); ?>"
                                class="form-control" id="otrasareasmail" placeholder="Otras Areas Mail" />
                        </div>
                        <div class="col-md-4">
                        <label class="control-label bg-info d-flex justify-content-center align-items-left">Otras Areas Horarios</label>
                            <input type="text" name="otrasareashorario" value="<?php echo ($this->input->post('otrasareashorario') ? $this->input->post('otrasareashorario') : $formulariofyc['otrasareashorario']); ?>"
                                class="form-control" id="otrasareashorario" placeholder="Otras Areas Horario" />
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
                        <div class="form-group col-md-4" hidden>
                            <input type="text" name="idproveedor" value="<?php echo ($this->input->post('idproveedor') ? $this->input->post('idproveedor') : $formulariofyc['idproveedor']); ?>"
                                class="form-control" id="idproveedor" placeholder="Id Proveedor" />
                        </div>
                        <?php if ($formulariofyc['completo']==1){ ?>
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
                        <?php if ($formulariofyc['aprobado']==1){ ?>
                            <div class="form-group col-md-4" >
                            <label class="control-label bg-info d-flex justify-content-center align-items-left">APROBADO</label>  
                            <input type="checkbox" name="aprobado" value="1" checked class="form-control bg-info " id="aprobado"></input>
                            </div>
                        <?php }else{ ?>
                            <div class="form-group col-md-4" >
                            <label class="control-label bg-info d-flex justify-content-center align-items-left">APROBADO</label>  
                            <input type="checkbox" name="aprobado" value="0" class="form-control bg-info " id="aprobado"></input>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col">
            <button type="submit" class="btn bg-info text-white">Guardar Cambios</button>
        </div>
    </div>
</div>

<?php echo form_close(); ?>

<script>
    function terminos_cambio(checkbox){ {
        if(checkbox.checked){
            alert('La casilla ha sido marcada!');
        }
        //Si se ha desmarcado se ejecuta el siguiente mensaje.
        else{
            alert('La casilla ha sido desmarcada!');
        };
    });
</script>

<script type="text/javascript">
    $('#fechaconstitucion').datetimepicker({
        format: 'DD-MM-YYYY'
    });
</script>