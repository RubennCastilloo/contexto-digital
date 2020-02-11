<?php 
  include 'layout/header.php';
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Nueva Nota</h1>
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
                  <label for="titulo">Titulo:</label>
                    <input type="text" class="form-control" id="titulo" placeholder="">
                  </div>
                  <div class="col-sm-12 mb-3">
                        <label>Imagen Portada:</label>
                        <div class="custom-file"> 
                            <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                            <label class="custom-file-label" for="validatedCustomFile">Imagen Portada</label>
                        </div>
                    </div>
                <div class="col-sm-12 mb-3">
                  <div class="form-group">
                        <label for="contenido">Contenido:</label>
                        <textarea class="form-control" id="contenido" cols="30" rows="25"></textarea>
                       
                    </div>
                  </div>
                </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Autor</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option>Seleccionar</option>
                        <option>Redaccion</option>
                        <option>Policiaco</option>
                        <option>4</option>
                        <option>5</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Categoria</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option>Seleccionar</option>
                        <option>Local</option>
                        <option>Estado</option>
                        <option>Nacional</option>
                        <option>Internacional</option>
                        <option>Economia</option>
                        <option>Deportes</option>
                        <option>Espectaculos</option>
                        <option>Tecnologia</option>
                        <option>Curiosidades</option>
                        </select>
                    </div>
                
                <a href="#" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Subir Nota</span>
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