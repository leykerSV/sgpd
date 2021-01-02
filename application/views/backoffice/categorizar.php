<?php echo form_open('backoffice/categorizar_guarda/'.$idproveedor,array("class"=>"form-horizontal")); ?>
    <div class="popuptext" id="myPopup">Recategorizacion de Proveedor</span>
    <label class="control-label bg-info d-flex justify-content-center align-items-left" name=nombre id=nombre><?php echo $proveedor; ?></label>
    <select name="categoria" id="categoria" class="form-control">
    <option value="N">Sin Categorizar</option> 
    <option value="A">Categoria A</option> 
    <option value="B">Categoria B</option> 
    <option value="C">Categoria C</option> 
    <option value="D">Categoria D</option> 
    </select>
    </div>
    <div class="row">
        <div class="form-group col">
            <button type="submit" class="btn bg-info text-white">Guardar Cambios</button>
        </div>
    </div>
<?php echo form_close(); ?>