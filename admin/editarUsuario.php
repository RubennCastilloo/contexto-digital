<?php 
  include 'layout/header.php';
  include 'php/functions.php';

  $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
    if (!$id) {
        header('Location: listaUsuarios.php');
        
    }
    $respuesta = obtenerUsuario($id);
    $usuario = $respuesta->fetch_assoc();
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Editar Usuario</h1>
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
                    <input type="text" class="form-control" id="nombreEdit" placeholder="" value="<?php echo ($usuario['nombre']) ? $usuario['nombre'] : ''; ?>">
                  </div>
					<div class="col-sm-12 mb-3">
						<label for="correo">Correo:</label>
						<input type="correo" class="form-control" id="correoEdit" placeholder="" value="<?php echo ($usuario['correo']) ? $usuario['correo'] : ''; ?>">
                  	</div>
					<div class="col-sm-12 mb-3">
						<label for="password">Password:</label>
						<input type="password" class="form-control" id="passwordEdit" placeholder="">
                  </div>
                
         
          <div class="col-sm-12 mb-3">
          <div class="form-group">
                        <label for="tipo">Tipo</label>
                        <select class="form-control" id="tipoEdit">
                        <option value="<?php echo ($usuario['tipo']) ? $usuario['tipo'] : ''; ?>"><?php 
                            if ($usuario['tipo'] == 'user') {
                                echo "General";
                            } else {
                                echo "Administrador";
                            }
                        ?></option>
                        <option value="admin">Administrador</option>
                        <option value="user">General</option>
                        </select>
                    </div>
                    </div>
                    
                
                <a href="#" class="btn btn-success btn-icon-split" id="editarUsuario">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Editar Usuario</span>
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