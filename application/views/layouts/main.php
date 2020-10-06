
<div class="container-fluid">
	<div class="row">
			<div class="col-md-2">
				
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
