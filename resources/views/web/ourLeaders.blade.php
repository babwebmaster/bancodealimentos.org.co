@extends('layouts.web')
@section('content')
    <main class="pt-[76.6px]">
        <h1 class="my-5 py-5">este es el web.nuestros LIDERES</h1>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.css" type="text/css">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.js"></script>

<form method="post" action="" id="form" novalidate>
    <p>Nombre:</p>
    <input name="nombre" type="text" class="form-control" required>
    <button id="btnA" type="submit" id="boton" class="btn btn-success" >Enviar</button>
</form>

<script>
window.addEventListener('DOMContentLoaded', Init); 

function Init(){ //se ejecuta cuando el DOM ha sido cargado
  const form = document.getElementById('form'); //no hay un solo form, por lo tanto es necesario ocupar querySelectorAll
  form.addEventListener('submit', event => {
   event.preventDefault();
      if (!form.checkValidity()) { //Si el form tiene errores
        event.preventDefault(); //detenemos el submit
        event.stopPropagation();
        form.classList.add('was-validated'); // agregamos la clase para que muestre la alerta con errores
        return; //retornamos
      }
      
      //Aqui sigue si es que no hay errores en el form
      form.querySelectorAll("input, button, select").forEach(el => el.disabled=true); //desabilitamos todos los inputm buttons y select del form
      document.getElementById("btnA").innerHTML='<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Espere...'; //agregamos este spinner al boton submit
|       this.form.submit(); // Le agregué esta linea hace el submit pero no envía "nombre"
    }, false)
}
</script>

    </main>
@endsection