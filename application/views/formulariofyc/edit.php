<?php echo form_open('formulariofyc/edit/'.$formulariofyc['idformulariofyc'],array("class"=>"form-horizontal")); ?>

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
                    <h4>INFORMACION FISCAL</h4>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        <div class="col">
                            <select name="categoriafiscal" class="form-control">
                                <option value="">Seleccionar Categoria Fiscal</option>
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
                        <div class="col-md-6">
                            <input type="text" name="identificaciontributaria" value="<?php echo ($this->input->post('identificaciontributaria') ? $this->input->post('identificaciontributaria') : $formulariofyc['identificaciontributaria']); ?>"
                                class="form-control" id="identificaciontributaria" placeholder="Identificación Tributaria" />
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="numidentificacion" value="<?php echo ($this->input->post('numidentificacion') ? $this->input->post('numidentificacion') : $formulariofyc['numidentificacion']); ?>"
                                class="form-control" id="numidentificacion" placeholder="Num. Identificación" />
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="col">
                            <input type="text" name="identtribpaisorigen" value="<?php echo ($this->input->post('identtribpaisorigen') ? $this->input->post('identtribpaisorigen') : $formulariofyc['identtribpaisorigen']); ?>"
                                class="form-control" id="identtribpaisorigen" placeholder="Ident. Tributaria en pais origen"
                            />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
                            <input type="text" name="tipopersona" value="<?php echo ($this->input->post('tipopersona') ? $this->input->post('tipopersona') : $formulariofyc['tipopersona']); ?>"
                                class="form-control" id="tipopersona" placeholder="Tipo de persona" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col-md-8">
                            <input type="text" name="catsiap" value="<?php echo ($this->input->post('catsiap') ? $this->input->post('catsiap') : $formulariofyc['catsiap']); ?>"
                                class="form-control" id="catsiap" placeholder="Categoría SIAP" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col-md-8">
                            <input type="text" name="motivobaja" value="<?php echo ($this->input->post('motivobaja') ? $this->input->post('motivobaja') : $formulariofyc['motivobaja']); ?>"
                                class="form-control" id="motivobaja" placeholder="Motivo baja" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col-md-8">
                            <input type="text" name="fechaconstitucion" value="<?php echo ($this->input->post('fechaconstitucion') ? $this->input->post('fechaconstitucion') : $formulariofyc['fechaconstitucion']); ?>"
                                class="form-control" id="fechaconstitucion" placeholder="Fecha de Constitución" />
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
                            <input type="text" name="banco" value="<?php echo ($this->input->post('banco') ? $this->input->post('banco') : $formulariofyc['banco']); ?>"
                                class="form-control" id="banco" placeholder="Banco" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
                            <input type="text" name="sucursalbanco" value="<?php echo ($this->input->post('sucursalbanco') ? $this->input->post('sucursalbanco') : $formulariofyc['sucursalbanco']); ?>"
                                class="form-control" id="sucursalbanco" placeholder="Sucursal del Banco" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
                            <input type="text" name="tipocuenta" value="<?php echo ($this->input->post('tipocuenta') ? $this->input->post('tipocuenta') : $formulariofyc['tipocuenta']); ?>"
                                class="form-control" id="tipocuenta" placeholder="Tipo de cuenta" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
                            <input type="text" name="cbu" value="<?php echo ($this->input->post('cbu') ? $this->input->post('cbu') : $formulariofyc['cbu']); ?>"
                                class="form-control" id="cbu" placeholder="CBU" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
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
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        <div class="col">
                            <select name="situacioniibb" class="form-control">
                                <option value="">Seleccionar Situación IIBB</option>
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
                        <div class="col">
                            <input type="text" name="numinscripiibb" value="<?php echo ($this->input->post('numinscripiibb') ? $this->input->post('numinscripiibb') : $formulariofyc['numinscripiibb']); ?>"
                                class="form-control" id="numinscripiibb" placeholder="Nro. inscrip. IIBB" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
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
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        <div class="col">
                            <select name="ganancias" class="form-control">
                                <option value="">Seleccionar Ganancias</option>
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
        </div>
    </div>
    <div class="text-white mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 bg-info d-flex justify-content-center align-items-center p-3">
                    <h4>SITUACION FRENTE A SUSS</h4>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        <div class="col">
                            <select name="suss" class="form-control">
                                <option value="">Seleccionar SUSS</option>
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
        </div>
    </div>

    <div class="text-white mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 bg-info d-flex justify-content-center align-items-center p-3">
                    <h4>DESIGNADO AGENTE DE PERCEPCION</h4>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        <div class="col-md-4">
                            <input type="text" name="agentepercepcioniva" value="<?php echo ($this->input->post('agentepercepcioniva') ? $this->input->post('agentepercepcioniva') : $formulariofyc['agentepercepcioniva']); ?>"
                                class="form-control" id="agentepercepcioniva" placeholder="I.V.A." />
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="agentepercepcionivares" value="<?php echo ($this->input->post('agentepercepcionivares') ? $this->input->post('agentepercepcionivares') : $formulariofyc['agentepercepcionivares']); ?>"
                                class="form-control" id="agentepercepcionivares" placeholder="Res. numero" />
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="agentepercepcionivaali" value="<?php echo ($this->input->post('agentepercepcionivaali') ? $this->input->post('agentepercepcionivaali') : $formulariofyc['agentepercepcionivaali']); ?>"
                                class="form-control" id="agentepercepcionivaali" placeholder="Alícuota" />
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="col-md-4">
                            <input type="text" name="agentepercepcioniibb1" value="<?php echo ($this->input->post('agentepercepcioniibb1') ? $this->input->post('agentepercepcioniibb1') : $formulariofyc['agentepercepcioniibb1']); ?>"
                                class="form-control" id="agentepercepcioniibb1" placeholder="IIBB" />
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="agentepercepcioniibb1pcia" value="<?php echo ($this->input->post('agentepercepcioniibb1pcia') ? $this->input->post('agentepercepcioniibb1pcia') : $formulariofyc['agentepercepcioniibb1pcia']); ?>"
                                class="form-control" id="agentepercepcioniibb1pcia" placeholder="Provincia" />
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="agentepercepcioniibb1ali" value="<?php echo ($this->input->post('agentepercepcioniibb1ali') ? $this->input->post('agentepercepcioniibb1ali') : $formulariofyc['agentepercepcioniibb1ali']); ?>"
                                class="form-control" id="agentepercepcioniibb1ali" placeholder="Alícuota" />
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="col-md-4">
                            <input type="text" name="agentepercepcioniibb2" value="<?php echo ($this->input->post('agentepercepcioniibb2') ? $this->input->post('agentepercepcioniibb2') : $formulariofyc['agentepercepcioniibb2']); ?>"
                                class="form-control" id="agentepercepcioniibb2" placeholder="IIBB" />
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="agentepercepcioniibb2pcia" value="<?php echo ($this->input->post('agentepercepcioniibb2pcia') ? $this->input->post('agentepercepcioniibb2pcia') : $formulariofyc['agentepercepcioniibb2pcia']); ?>"
                                class="form-control" id="agentepercepcioniibb2pcia" placeholder="Provincia" />
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="agentepercepcioniibb2ali" value="<?php echo ($this->input->post('agentepercepcioniibb2ali') ? $this->input->post('agentepercepcioniibb2ali') : $formulariofyc['agentepercepcioniibb2ali']); ?>"
                                class="form-control" id="agentepercepcioniibb2ali" placeholder="Alícuota" />
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="col-md-4">
                            <input type="text" name="agentepercepcioniibb3" value="<?php echo ($this->input->post('agentepercepcioniibb3') ? $this->input->post('agentepercepcioniibb3') : $formulariofyc['agentepercepcioniibb3']); ?>"
                                class="form-control" id="agentepercepcioniibb3" placeholder="IIBB" />
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="agentepercepcioniibb3pcia" value="<?php echo ($this->input->post('agentepercepcioniibb3pcia') ? $this->input->post('agentepercepcioniibb3pcia') : $formulariofyc['agentepercepcioniibb3pcia']); ?>"
                                class="form-control" id="agentepercepcioniibb3pcia" placeholder="Provincia" />
                        </div>
                        <div class="col-md-4">
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
                    <h4>DESIGNADO AGENTE DE PERCEPCION</h4>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        <div class="col-md-6">
                            <input type="text" name="agenteretgcias" value="<?php echo ($this->input->post('agenteretgcias') ? $this->input->post('agenteretgcias') : $formulariofyc['agenteretgcias']); ?>"
                                class="form-control" id="agenteretgcias" placeholder="Ganancias" />
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="agenteretgciasres" value="<?php echo ($this->input->post('agenteretgciasres') ? $this->input->post('agenteretgciasres') : $formulariofyc['agenteretgciasres']); ?>"
                                class="form-control" id="agenteretgciasres" placeholder="Resolución Gcias." />
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="col-md-6">
                            <input type="text" name="agenteretgciasiibb" value="<?php echo ($this->input->post('agenteretgciasiibb') ? $this->input->post('agenteretgciasiibb') : $formulariofyc['agenteretgciasiibb']); ?>"
                                class="form-control" id="agenteretgciasiibb" placeholder="IIBB" />
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="agenteretgciasiibbres" value="<?php echo ($this->input->post('agenteretgciasiibbres') ? $this->input->post('agenteretgciasiibbres') : $formulariofyc['agenteretgciasiibbres']); ?>"
                                class="form-control" id="agenteretgciasiibbres" placeholder="Resolución IIBB" />
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="col-md-6">
                            <input type="text" name="agenteretgciassuss" value="<?php echo ($this->input->post('agenteretgciassuss') ? $this->input->post('agenteretgciassuss') : $formulariofyc['agenteretgciassuss']); ?>"
                                class="form-control" id="agenteretgciassuss" placeholder="SUSS" />
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="agenteretgciassussres" value="<?php echo ($this->input->post('agenteretgciassussres') ? $this->input->post('agenteretgciassussres') : $formulariofyc['agenteretgciassussres']); ?>"
                                class="form-control" id="agenteretgciassussres" placeholder="Resolución SUSS" />
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="col">
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
                    <h4>FACTURACION ANUAL</h4>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        <div class="col">
                            <input type="text" name="factultimocierre" value="<?php echo ($this->input->post('factultimocierre') ? $this->input->post('factultimocierre') : $formulariofyc['factultimocierre']); ?>"
                                class="form-control" id="factultimocierre" placeholder="Facturación ultimo cierre" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
                            <input type="text" name="factanteultimocierre" value="<?php echo ($this->input->post('factanteultimocierre') ? $this->input->post('factanteultimocierre') : $formulariofyc['factanteultimocierre']); ?>"
                                class="form-control" id="factanteultimocierre" placeholder="Facturación anteultimo cierre" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col">
                            <input type="text" name="factantepenultimocierre" value="<?php echo ($this->input->post('factantepenultimocierre') ? $this->input->post('factantepenultimocierre') : $formulariofyc['factantepenultimocierre']); ?>"
                                class="form-control" id="factantepenultimocierre" placeholder="Facturación antepenultimo cierre"
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
                    <h4>FACTURACION ANUAL</h4>
                </div>
                <div class="col-md-9">
                    <div class="input-group mb-3">
                        <div class="col-md-4">
                            <input type="text" name="refcom1" value="<?php echo ($this->input->post('refcom1') ? $this->input->post('refcom1') : $formulariofyc['refcom1']); ?>"
                                class="form-control" id="refcom1" placeholder="Empresa 1" />
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="refcom1contacto" value="<?php echo ($this->input->post('refcom1contacto') ? $this->input->post('refcom1contacto') : $formulariofyc['refcom1contacto']); ?>"
                                class="form-control" id="refcom1contacto" placeholder="Contacto 1" />
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="refcom1tel" value="<?php echo ($this->input->post('refcom1tel') ? $this->input->post('refcom1tel') : $formulariofyc['refcom1tel']); ?>"
                                class="form-control" id="refcom1tel" placeholder="Tel" />
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="col-md-4">
                            <input type="text" name="refcom2" value="<?php echo ($this->input->post('refcom2') ? $this->input->post('refcom2') : $formulariofyc['refcom2']); ?>"
                                class="form-control" id="refcom2" placeholder="Empresa 2" />
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="refcom2contacto" value="<?php echo ($this->input->post('refcom2contacto') ? $this->input->post('refcom2contacto') : $formulariofyc['refcom2contacto']); ?>"
                                class="form-control" id="refcom2contacto" placeholder="Contacto 2" />
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="refcom2tel" value="<?php echo ($this->input->post('refcom2tel') ? $this->input->post('refcom2tel') : $formulariofyc['refcom2tel']); ?>"
                                class="form-control" id="refcom2tel" placeholder="Tel" />
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="col-md-4">
                            <input type="text" name="refcom3" value="<?php echo ($this->input->post('refcom3') ? $this->input->post('refcom3') : $formulariofyc['refcom3']); ?>"
                                class="form-control" id="refcom3" placeholder="Empresa 3" />
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="refcom3contacto" value="<?php echo ($this->input->post('refcom3contacto') ? $this->input->post('refcom3contacto') : $formulariofyc['refcom3contacto']); ?>"
                                class="form-control" id="refcom3contacto" placeholder="Contacto 3" />
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
                            <input type="text" name="areacontabletel" value="<?php echo ($this->input->post('areacontabletel') ? $this->input->post('areacontabletel') : $formulariofyc['areacontabletel']); ?>"
                                class="form-control" id="areacontabletel" placeholder="Area Contable Tel" />
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="areacontablemail" value="<?php echo ($this->input->post('areacontablemail') ? $this->input->post('areacontablemail') : $formulariofyc['areacontablemail']); ?>"
                                class="form-control" id="areacontablemail" placeholder="Area Contable Mail" />
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="areacontablehorario" value="<?php echo ($this->input->post('areacontablehorario') ? $this->input->post('areacontablehorario') : $formulariofyc['areacontablehorario']); ?>"
                                class="form-control" id="areacontablehorario" placeholder="Area Contable horario" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col-md-4">
                            <input type="text" name="areapagostel" value="<?php echo ($this->input->post('areapagostel') ? $this->input->post('areapagostel') : $formulariofyc['areapagostel']); ?>"
                                class="form-control" id="areapagostel" placeholder="Area Pagos Tel" />
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="areapagosmail" value="<?php echo ($this->input->post('areapagosmail') ? $this->input->post('areapagosmail') : $formulariofyc['areapagosmail']); ?>"
                                class="form-control" id="areapagosmail" placeholder="Area Pagos Mail" />
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="areapagoshorario" value="<?php echo ($this->input->post('areapagoshorario') ? $this->input->post('areapagoshorario') : $formulariofyc['areapagoshorario']); ?>"
                                class="form-control" id="areapagoshorario" placeholder="Area Pagos Horario" />
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col-md-4">
                            <input type="text" name="otrasareastel" value="<?php echo ($this->input->post('otrasareastel') ? $this->input->post('otrasareastel') : $formulariofyc['otrasareastel']); ?>"
                                class="form-control" id="otrasareastel" placeholder="Otras Areas Tel" />
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="otrasareasmail" value="<?php echo ($this->input->post('otrasareasmail') ? $this->input->post('otrasareasmail') : $formulariofyc['otrasareasmail']); ?>"
                                class="form-control" id="otrasareasmail" placeholder="Otras Areas Mail" />
                        </div>
                        <div class="col-md-4">
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
                        <div class="form-group col-md-4" >
                            <input type="text" name="idproveedor" value="<?php echo ($this->input->post('idproveedor') ? $this->input->post('idproveedor') : $formulariofyc['idproveedor']); ?>"
                                class="form-control" id="idproveedor" placeholder="Id Proveedor" />
                        </div>
                        <div class="form-group col-md-4" >
                            <input type="text" name="aprobado" value="<?php echo ($this->input->post('aprobado') ? $this->input->post('aprobado') : $formulariofyc['aprobado']); ?>"
                                class="form-control" id="aprobado" placeholder="Aprobado" />
                        </div>
                        <div class="form-group col-md-4" >
                            <input type="text" name="completo" value="<?php echo ($this->input->post('completo') ? $this->input->post('completo') : $formulariofyc['completo']); ?>"
                                class="form-control" id="completo" placeholder="Completo" />
                        </div>
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