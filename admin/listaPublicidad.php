<?php 
  include 'php/functions.php';
  include 'layout/header.php';
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Lista de Espacios Publicitarios</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Lista de Espacio Publicitarios</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Titulo</th>
                      <th>Cliente</th>
                      <th>Fecha</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $publicidades = obtenerPublicidad();
                if ($publicidades->num_rows) {
                     foreach($publicidades as $publicidad) { ?>
                      <tr>
                        <td>
                          <?php echo $publicidad['titulo']; ?>
                        </td>
                        <td>
                          <?php echo $publicidad['cliente']; ?>
                        </td>
                        <td>
                          <?php echo $publicidad['fecha']; ?>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-success drop-btn" href="editarPublicidad.php?id=<?php echo $publicidad['id']?>"><i class="far fa-edit"></i></a>
                            <button class="btn btn-danger drop-btn eliminar-autor" data-id="<?php echo $publicidad['id'] ?>"><i class="fas fa-trash"></i></button>
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