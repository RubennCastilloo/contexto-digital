<?php 
  include 'php/functions.php';
  include 'layout/header.php';
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Lista de Notas</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Lista de Notas Publicadas</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Titulo</th>
                      <th>Fecha</th>
                      <th>Autor</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $notas = obtenerNotas();
                if ($notas->num_rows) {
                     foreach($notas as $nota) { ?>
                      <tr>
                        <td>
                          <?php echo $nota['titulo']; ?>
                        </td>
                        <td>
                          <?php echo $nota['fecha']; ?>
                        </td>
                        <td>
                          <?php echo $nota['autor']; ?>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-success drop-btn" href="editarNota.php?id=<?php echo $nota['id']?>"><i class="far fa-edit"></i></a>
                            <button class="btn btn-danger drop-btn eliminar-nota" data-id="<?php echo $nota['id'] ?>"><i class="fas fa-trash"></i></button>
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