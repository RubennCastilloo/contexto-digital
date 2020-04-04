<?php 
  include 'php/functions.php';
  include 'layout/header.php';
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Newsletter Subscriptions</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Lista de Correos</h6>
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
                  <?php $correos = obtenerCorreos();
                if ($correos->num_rows) {
                     foreach($correos as $correo) { ?>
                      <tr>
                        <td>
                          <?php echo $correo['id']; ?>
                        </td>
                        <td>
                          <?php echo $correo['correo']; ?>
                        </td>
                        <td class="text-center">
                            <button class="btn btn-danger drop-btn eliminar-correo" data-id="<?php echo $correo['id'] ?>"><i class="fas fa-trash"></i></button>
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