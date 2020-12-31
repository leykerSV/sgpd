
<div class="container-fluid">
	<div class="row">			
			<script language="javascript" type="text/javascript"> 
				function closed() { 
				window.open('','_parent',''); 
				window.close(); 
				} 
			</script>
			<div class="col-md-2">
				<a href="<?php echo base_url('/index.php/inicio/logout'); ?>">Salir del Sistema</a>	
			</div>
			<div class="col-md-8" align="center">
				<img src="<?php echo base_url('assets/imagenes/cabeza.png'); ?>" alt="" >
			</div>
			<div class="col-md-2">
	
			</div>
	</div>
	<p></p>
	<div class="row">
			<div class="col-md-2">
			
			</div>
			<div class="col-md-8" align="center">
				<h2><?php echo $titulacion; ?></h2>
				<h4><?php echo $mensaje; ?></h4>
			</div>
			<div class="col-md-2">

			</div>

	</div>
	<div class="row">
			<div class="col-md-2">

			</div>
			<div class="col-md-8" align="center">
				<?php	if(isset($_view) && $_view)
					$this->load->view($_view);
				?>
			</div>
			<div class="col-md-2">
				
			</div>
	</div>

</div>
