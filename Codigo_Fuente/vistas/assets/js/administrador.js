
var formularioAdmin = document.getElementById('formAdmin');

formularioAdmin.addEventListener('submit', function (e) {
  e.preventDefault();

  var datos = new FormData(formularioAdmin);

  fetch('../../../ajax/administrador.ajax.php', {
    method: 'POST',
    body: datos
  })
    .then(res => res.json())
    .then(data => {
    

      if (data == 'incompletos') {
        Swal.fire({
          icon: 'error',
          title: 'Lo sentimos',
          text: 'Debe rellenar todo los campos',
        })
      } else {
        if (data == 'correcto') {
          document.getElementById("formAdmin").reset();
          Swal.fire({
            icon: 'success',
            title: 'Creado con exito',
            text: 'El administrador se creo con exito',
          })
        } else {
          if (data == 'contraseñas') {

            Swal.fire({
              icon: 'error',
              title: 'Lo sentimos',
              text: 'Las contraseñas no coinciden',
            })
          } else {
            if (data == 'incorrecto') {
              Swal.fire({
                icon: 'error',
                title: 'Lo sentimos',
                text: 'No se pudo registrar la cuenta',
              })
            } else {
              if (data == 'rut') {
                Swal.fire({
                  icon: 'error',
                  title: 'Lo sentimos',
                  text: 'El rut ya se encuentra registrado',
                })
              } else {
                if (data == 'correo') {
                  Swal.fire({
                    icon: 'error',
                    title: 'Lo sentimos',
                    text: 'El correo ya se encuentra registrado',
                  })
                }else{
                  if(data == 'administrador'){
                    Swal.fire({
                      icon: 'error',
                      title: 'Lo sentimos',
                      text: 'No se puede registrar administrador',
                    })
                  }else{
                    if(data == 'RutNValidado'){
                      Swal.fire({
                        icon: 'error',
                        title: 'Lo sentimos',
                        text: 'El rut no es valido',
                      })
                    }
                  }
                }
              }
            }
          }

        }
      }
    })

})
