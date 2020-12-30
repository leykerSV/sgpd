<div class="container">
  <div class="frame">
    <div class="nav" align=center>
      <ul class"links">
        <li class="signin-active"><img src=<?php echo base_url("/assets/imagenes/cocyar.jpg"); ?>></li>
        <br>
        <li class ="signin-active"><small>Sistema de Gestión de Proveedores - SGPD</small></li>      
      </ul>
		</div>
		<?php
              $success_msg= $this->session->flashdata('success_msg');
              $error_msg= $this->session->flashdata('error_msg');

                  if($success_msg){
                    ?>
                    <div class="alert alert-success">
                      <?php echo $success_msg; ?>
                    </div>
                  <?php
                  }
                  if($error_msg){
                    ?>
                    <div class="alert alert-danger">
                      <?php echo $error_msg; ?>
                    </div>
                    <?php
                  }
                  ?>
    <div ng-app ng-init="checked = false">
				  <?php echo form_open('login/verifylogin', 'class="form-signin"'); ?>
						<label for="username">Usuario</label>
						<input class="form-styling" type="text" name="username" id="username" placeholder=""/>
						<label for="password">Contraseña</label>
						<input class="form-styling" type="password" name="password" id="password" placeholder=""/>
						
						<div class="btn-animate">
							<button class="btn-signin" type="submit">Ingresar</button>
						</div>
					<?php echo form_close(); ?>
		</div>
    <div align="center"><a href="<?php echo base_url().'index.php/proveedor/add'; ?>">Click aquí para darse de alta como proveedor</a></div>
    <br />
    <div align="center"><a href="<?php echo base_url().'index.php/backoffice'; ?>">Click aquí para Acceder como Backoffice</a></div>
    <br />
</div>

        
				        