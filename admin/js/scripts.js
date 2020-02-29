// Subir Notas
const subirNota = document.querySelector('#subirNota');
// Crear Autor
const crearAutor = document.querySelector('#crearAutor');
// Crear Espacio Publicitario
const crearEspacio = document.querySelector('#subirEspacio');
// Crear Usuario
const crearUsuario = document.querySelector('#crearUsuario');

eventListeners();

function eventListeners() {
    if (subirNota) {
        subirNota.addEventListener('click', subirNoticia);
    }
    if(crearAutor){
      crearAutor.addEventListener('click', subirAutor);
    }
    if (crearEspacio) {
      crearEspacio.addEventListener('click', subirEspacio);
    }
    if (crearUsuario) {
      crearUsuario.addEventListener('click', subirDatosUsuario);
    }
}

function notificacionFlotante(tipo, texto) {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
      
      Toast.fire({
        icon: tipo,
        title: texto
      })
}

function subirNoticia(e) {
    e.preventDefault();
    const titulo = document.querySelector('#titulo').value,
          imagenConfirm = document.querySelector('#imagen').value,
          contenido = document.querySelector('#contenido').value,
          autor = document.querySelector('#autor').value,
          categoria = document.querySelector('#categoria').value,
          imagen= $('#imagen')[0].files[0];
          contenidoBr = contenido.replace(/\r?\n/g, "<br>");

          if (titulo === '' || imagenConfirm === '' || contenido === '' || autor === '' || categoria === '') {
              notificacionFlotante('error', 'Todos los Campos son Obligatorios');
          } else {

            news = new FormData();

            news.append('titulo', titulo);
            news.append('contenido', contenidoBr);
            news.append('autor', autor);
            news.append('categoria', categoria);
            news.append('imagen', imagen);

            $.ajax({
                url: './php/nuevaNota.php',
                type: 'post',
                data: news,
                contentType: false,
                processData: false,
                success: function(data) {
                  var response = JSON.parse(data);
                    console.log(response);
                    if (response.response === 'correct') {
                      notificacionFlotante('success', 'Se ha subido la nota');
                      document.querySelector('form').reset()
                    }
                    if (response.response === 'error') {
                      notificacionFlotante('error', 'Houston tenemos un problema');
                    }
                }
            });
            return false;
          }

}

function subirAutor(e){
  e.preventDefault();
  const autor = document.querySelector('#autor').value;

  if (autor === '') {
    notificacionFlotante('error', 'Todos los campos son obligatorios');
  } else {

    const autorData = new FormData();

    autorData.append('autor', autor);

    $.ajax({
        url: './php/nuevoAutor.php',
        type: 'post',
        data: autorData,
        contentType: false,
        processData: false,
        success: function(data) {
          var response = JSON.parse(data);
            console.log(response);
            if (response.response === 'correct') {
              notificacionFlotante('success', 'Se ha agregado el autor');
              document.querySelector('form').reset()
            }
            if (response.response === 'error') {
              notificacionFlotante('error', 'Houston tenemos un problema');
            }
        }
    });
    return false;
  
  }
  
}

function subirEspacio(e){
  e.preventDefault();
  
  const titulo = document.querySelector('#titulo').value,
        link = document.querySelector('#link').value,
        cliente = document.querySelector('#cliente').value,
        imagenConfirm = document.querySelector('#imagenPublicidad').value,
        imagen= $('#imagenPublicidad')[0].files[0];

        if (titulo === '' || link === '' || cliente === '' || imagenConfirm === '') {
          notificacionFlotante('error', 'Todos los campos son obligatorios');
        } else {
          publicity = new FormData();

          publicity.append('titulo', titulo);
          publicity.append('link', link);
          publicity.append('cliente', cliente);
          publicity.append('imagen', imagen);

          $.ajax({
              url: './php/nuevoEspacio.php',
              type: 'post',
              data: publicity,
              contentType: false,
              processData: false,
              success: function(data) {
                var response = JSON.parse(data);
                  console.log(response);
                  if (response.response === 'correct') {
                    notificacionFlotante('success', 'Se ha subido la publicidad');
                    document.querySelector('form').reset()
                  }
                  if (response.response === 'error') {
                    notificacionFlotante('error', 'Houston tenemos un problema');
                  }
              }
          });
          return false;
        }

}

function subirDatosUsuario(e) {
  e.preventDefault();
  
  const nombre = document.querySelector('#nombre').value,
        correo = document.querySelector('#correo').value,
        password = document.querySelector('#password').value,
        imagenConfirm = document.querySelector('#foto').value;
        imagen= $('#foto')[0].files[0];

        if(nombre === '' || correo === '' || password === '' || imagenConfirm === ''){
          notificacionFlotante('error', 'Todos los campos son obligatorios');
        } else {
          userData = new FormData();

          userData.append('nombre', nombre);
          userData.append('correo', correo);
          userData.append('password', password);
          userData.append('imagen', imagen);

          $.ajax({
              url: './php/nuevoUsuario.php',
              type: 'post',
              data: userData,
              contentType: false,
              processData: false,
              success: function(data) {
                var response = JSON.parse(data);
                  console.log(response);
                  if (response.response === 'correct') {
                    notificacionFlotante('success', 'Se ha creado el usuario');
                    document.querySelector('form').reset()
                  }
                  if (response.response === 'error') {
                    notificacionFlotante('error', 'Houston tenemos un problema');
                  }
              }
          });
          return false;
        }
}