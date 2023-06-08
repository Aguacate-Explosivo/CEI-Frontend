$('#asistir').click(function() {
  const valor1 = $('#documento').val();
  const valor2 = $('#tel').val();
  const valor3 = $('#direccion').val();
  const valor4 = $('#edad').val();
  const valor = $('#nombre').val();

  if (valor === "") {
      mostrarAlerta('Campo obligatorio', 'Debe completar el campo Nombre', 'error');
  } else if (valor1 === "") {
      mostrarAlerta('Campo obligatorio', 'Debe completar el campo Documento', 'error');
  } else if (valor2 === "") {
      mostrarAlerta('Campo obligatorio', 'Debe completar el campo Teléfono', 'error');
  } else if (valor3 === "") {
      mostrarAlerta('Campo obligatorio', 'Debe completar el campo Dirección', 'error');
  } else if (valor4 === "") {
      mostrarAlerta('Campo obligatorio', 'Debe completar el campo Edad', 'error');
  } else {
      mostrarAlerta(valor, 'Añadido con éxito', 'success');
  }
});

$('#agendar').click(function() {
  const valor5 = $('#documento').val();
  const valor6 = $('#tel').val();
  const valor7 = $('#direccion').val();
  const valor8 = $('#fecha').val();
  const valor9 = $('#nombre').val();

  if (valor9 === "") {
      mostrarAlerta('Campo obligatorio', 'Debe completar el campo Nombre', 'error');
  } else if (valor5 === "") {
      mostrarAlerta('Campo obligatorio', 'Debe completar el campo Documento', 'error');
  } else if (valor6 === "") {
      mostrarAlerta('Campo obligatorio', 'Debe completar el campo Teléfono', 'error');
  } else if (valor8 === "") {
      mostrarAlerta('Campo obligatorio', 'Debe completar el campo Fecha', 'error');
  } else if (valor7 === "") {
      mostrarAlerta('Campo obligatorio', 'Debe completar el campo Dirección', 'error');
  } else {
      mostrarAlerta(valor9, 'Termina de completar los datos y recuerda que las citas se asignan con intervalos de 30 minutos', 'success');
  }
});

$('#registar').click(function() {
  const valor1 = $('#documento').val();
  const valor2 = $('#tel').val();
  const valor3 = $('#direccion').val();
  const valor4 = $('#edad').val();
  const valor = $('#nombre').val();

  if (valor === "") {
      mostrarAlerta('Campo obligatorio', 'Debe completar el campo Nombre', 'error');
  } else if (valor1 === "") {
      mostrarAlerta('Campo obligatorio', 'Debe completar el campo Documento', 'error');
  } else if (valor2 === "") {
      mostrarAlerta('Campo obligatorio', 'Debe completar el campo Teléfono', 'error');
  } else if (valor3 === "") {
      mostrarAlerta('Campo obligatorio', 'Debe completar el campo Dirección', 'error');
  } else if (valor4 === "") {
      mostrarAlerta('Campo obligatorio', 'Debe completar el campo Edad', 'error');
  } else {
      mostrarAlerta(valor, 'Registrado con éxito', 'success');
  }
});

function mostrarAlerta(titulo, descripcion, tipoAlerta) {
  Swal.fire({
      icon: tipoAlerta,
      title: titulo,
      text: descripcion,
      timer: 2000,
      timerProgressBar: true,
      didOpen: () => {
          Swal.showLoading();
          const b = Swal.getHtmlContainer().querySelector('b');
          const timerInterval = setInterval(() => {
              b.textContent = Swal.getTimerLeft();
          }, 100);
          Swal.getContainer().querySelector('.swal2-actions').remove();
      },
      willClose: () => {
          clearInterval(timerInterval);
      }
  }).then((result) => {
      if (result.dismiss === Swal.DismissReason.timer) {
          console.log('I was closed by the timer');
      }
  });
}
