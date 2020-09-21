
<header>
      <!-- Fixed navbar -->

      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffffff;;">
      <a class="navbar-brand" href="#">
          <img src="<?php echo base_url('assets/imagenes/concejo.png'); ?>" alt="" height=150 width=400>
          
        </a>

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              
            </li>
            <li class="nav-item">

            </li>
            <li class="nav-item" align="center">

            </li>
          </ul>

        </div>
      </nav>
</header>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12" align="center">
      </p>

      </p>        
    </div>
  </div>
  <div class="row">
    <div class="col-md-9">
      <?php //echo $_view; ?>
      <?php $this->load->view($_view); ?>
    </div>
  </div>

</div>


