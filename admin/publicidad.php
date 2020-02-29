<?php 
  include 'layout/header.php';
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Crear Espacio Publicitario</h1>
          </div>
          <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-2">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <form class="espacioPublicitarioForm">
                <div class="form-group row">
                  <div class="col-sm-12 mb-3">
                  <label for="titulo">Titulo de campaña:</label>
                    <input type="text" class="form-control" id="titulo" placeholder="">
                  </div>
                  <div class="col-sm-12 mb-3">
                        <label>Imagen Publicitaria:</label>
                        <div class="custom-file"> 
                            <input type="file" class="custom-file-input" id="imagenPublicidad" required>
                            <label class="custom-file-label" for="imagenPublicidad">Imagen Publicitaria</label>
                        </div>
                    </div>
                <div class="col-sm-12 mb-3">
                    <label for="link">Link de la Campaña:</label>
                    <input type="text" class="form-control" id="link" placeholder="">
                </div>

                <div class="col-sm-12 mb-3">
                    <label for="cliente">Nombre del Cliente:</label>
                    <input type="text" class="form-control" id="cliente" placeholder="">
                </div>
                <div class="col-sm-12 mb-3">
                <a href="#" class="btn btn-success btn-icon-split" id="subirEspacio">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Subir Espacio Publicitario</span>
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