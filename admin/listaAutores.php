<?php 
  include 'php/functions.php';
  include 'layout/header.php';
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Lista de Autores</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Lista de Autores</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Autor</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $autores = obtenerAutores();
                if ($autores->num_rows) {
                     foreach($autores as $autor) { ?>
                      <tr>
                        <td>
                          <?php echo $autor['id']; ?>
                        </td>
                        <td>
                          <?php echo $autor['autor']; ?>
                        </td>
                        <td class="text-center">
                            <button class="btn btn-danger drop-btn eliminar-autor" data-id="<?php echo $autor['id'] ?>"><i class="fas fa-trash"></i></button>
                        </td>
                      </tr>
                      <?php
                  }
                }
              ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php 
  include 'layout/footer-list.php';
?>