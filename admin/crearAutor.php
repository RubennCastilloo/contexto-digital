<?php 
  include 'layout/header.php';
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Nuevo Autor</h1>
          </div>
          <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-2">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <form class="crearAutorForm">
                <div class="form-group row">
                  <div class="col-sm-12 mb-3">
                  <label for="autor">Nombre del Autor:</label>
                    <input type="text" class="form-control" id="autor" placeholder="">
                  </div>
                  </div>
                
                <a href="#" class="btn btn-success btn-icon-split" id="crearAutor">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Crear Autor</span>
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