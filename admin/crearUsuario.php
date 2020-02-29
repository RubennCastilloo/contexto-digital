<?php 
  include 'layout/header.php';
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Nuevo Usuario</h1>
          </div>
          <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-2">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <form class="user">
                <div class="form-group row">
				          <div class="col-sm-12 mb-3">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" placeholder="">
                  </div>
                  <div class="col-sm-12 mb-3">
                        <label>Foto:</label>
                        <div class="custom-file"> 
                            <input type="file" class="custom-file-input" id="foto" required>
                            <label class="custom-file-label" for="foto">Foto</label>
                        </div>
                    </div>
					<div class="col-sm-12 mb-3">
						<label for="correo">Correo:</label>
						<input type="mail" class="form-control" id="correo" placeholder="">
                  	</div>
					<div class="col-sm-12 mb-3">
						<label for="password">Password:</label>
						<input type="password" class="form-control" id="password" placeholder="">
                  </div>
                
                </div>
                    
                
                <a href="#" class="btn btn-success btn-icon-split" id="crearUsuario">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Crear Usuario</span>
                  </a>
                
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

         
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php
  include 'layout/footer.php';
?>