<?php 
  include 'php/functions.php';
  include 'layout/header.php';
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Lista de Usuarios</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Lista de Usuarios</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Correo</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $usuarios = obtenerUsuarios();
                if ($usuarios->num_rows) {
                     foreach($usuarios as $usuario) { ?>
                      <tr>
                        <td>
                          <?php echo $usuario['id']; ?>
                        </td>
                        <td>
                          <?php echo $usuario['nombre']; ?>
                        </td>
                        <td>
                          <?php echo $usuario['correo']; ?>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-success drop-btn" href="editarUsuario.php?id=<?php echo $usuario['id']?>"><i class="far fa-edit"></i></a>
                            <button class="btn btn-danger drop-btn eliminar-usuario" data-id="<?php echo $usuario['id'] ?>"><i class="fas fa-trash"></i></button>
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