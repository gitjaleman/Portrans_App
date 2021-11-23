const view_empleados_listar = () =>{
  $.ajax({
    url: "../app/php/registro/empleados/listar.php"
  }).done(function(e) {
    $('#empleados_section').html(e);
  });
}

const view_empleados_nuevo = () =>{
  $.ajax({
    url: "../app/php/registro/empleados/nuevo.php"
  }).done(function(e) {
    $('#empleados_section').html(e);
  });
}

const view_empleados_masivo = () =>{
  $.ajax({
    url: "../app/php/registro/empleados/masivo.php"
  }).done(function(e) {
    $('#empleados_section').html(e);
  });
}

const view_empleados_exportar = () =>{
  $.ajax({
    url: "../app/php/registro/empleados/exportar.php"
  }).done(function(e) {
    $('#empleados_section').html(e);
  });
}