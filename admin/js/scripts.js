// Subir Notas
const subirNota = document.querySelector('#subirNota');
// Crear Autor
const crearAutor = document.querySelector('#crearAutor');
// Crear Espacio Publicitario
const crearEspacio = document.querySelector('#subirEspacio');
// Crear Usuario
const crearUsuario = document.querySelector('#crearUsuario');
//Iniciar sesion
const login = document.querySelector('#login');
//Boton Newsletter
const newsletter = document.querySelector('#newsletter-button');

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
    if (login) {
      login.addEventListener('click', iniciarSesion);
    }
    if (newsletter) {
      newsletter.addEventListener('click', newsletterSuscription);
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
        imagenConfirm = document.querySelector('#foto').value,
        imagen = $('#foto')[0].files[0],
        tipo = document.querySelector('#tipo').value;

        if(nombre === '' || correo === '' || password === '' || imagenConfirm === ''){
          notificacionFlotante('error', 'Todos los campos son obligatorios');
        } else {
          userData = new FormData();

          userData.append('nombre', nombre);
          userData.append('correo', correo);
          userData.append('password', password);
          userData.append('imagen', imagen);
          userData.append('tipo', tipo);

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

function iniciarSesion(e){
  e.preventDefault();
  const email = document.querySelector('#email').value,
        password = document.querySelector('#password').value;

  if(email === '' || password === ''){
    notificacionFlotante('error', 'Todos los campos son necesarios');
  } else {
    loginUser = new FormData();

    loginUser.append('email', email);
    loginUser.append('password', password);

    $.ajax({
        url: './php/loginUser.php',
        type: 'post',
        data: loginUser,
        contentType: false,
        processData: false,
        success: function(data) {
          var response = JSON.parse(data);
            // console.log(response);
            if (response.response === 'correcto') {
              notificacionFlotante('success', `Bienvenid@ ${response.nombre}`);
              setTimeout(() => {
                window.location.href = './';
              }, 1000);
            }
            if (response.response === 'incorrecto') {
              notificacionFlotante('error', 'Password Incorrecto');
            }
            if (response.response === 'noexiste') {
              notificacionFlotante('error', 'El correo no se encuentra registrado');
            }
        }
    });
    return false;
  }

}

function newsletterSuscription(e) {
  e.preventDefault();
  
  const newsletterInput = document.querySelector('#newsletterEmail').value;

  if (newsletterInput === '') {
    notificacionFlotante('error', 'El Campo está vacío');
  } else {

          userData = new FormData();

          userData.append('newsletter', newsletterInput);
          const clase = document.querySelector('.nwsltr-primary-1');
          $.ajax({
              url: './admin/php/newsletter.php',
              type: 'post',
              data: userData,
              contentType: false,
              processData: false,
              success: function(data) {
                var response = JSON.parse(data);
                  // console.log(response);
                  if (response.response === 'correct') {
                    notificacionFlotante('success', 'Bienvenido a Contexto Digital');
                    clase.classList.remove('nwsltr-incorrect');
                    clase.classList.remove('nwsltr-correct');
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

document.getElementById('newsletterEmail').addEventListener('input', function() {
  campo = event.target;
  valido = document.getElementById('emailOK');
  const clase = document.querySelector('.nwsltr-primary-1');
  const NewsBtn = document.querySelector('#newsletter-button');
      
  emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
  //Se muestra un texto a modo de ejemplo, luego va a ser un icono
  if (emailRegex.test(campo.value)) {
    clase.classList.add('nwsltr-correct');
    clase.classList.remove('nwsltr-incorrect');
    NewsBtn.disabled = false;
  } else {
    clase.classList.add('nwsltr-incorrect');
    clase.classList.remove('nwsltr-correct');
    NewsBtn.disabled = true;
  }
});


let f = new Date();
    let opciones = {
      weekday: 'long',
      year: 'numeric',
      month: 'long',
      day: 'numeric'
    };

    let fecha = f.toLocaleDateString('es-MX', opciones);

    const date = document.querySelector('#dateMain');
    date.innerHTML = fecha;