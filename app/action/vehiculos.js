const view_vehiculos_listar = () =>{
  $.ajax({
    url: "../app/php/registro/vehiculos/listar.php"
  }).done(function(e) {
    $('#vehiculos_section').html(e);
  });
}

const view_vehiculos_nuevo = () =>{
  $.ajax({
    url: "../app/php/registro/vehiculos/nuevo.php"
  }).done(function(e) {
    $('#vehiculos_section').html(e);
  });
}

const view_vehiculos_masivo = () =>{
  $.ajax({
    url: "../app/php/registro/vehiculos/masivo.php"
  }).done(function(e) {
    $('#vehiculos_section').html(e);
  });
}

const view_vehiculos_exportar = () =>{
  $.ajax({
    url: "../app/php/registro/vehiculos/exportar.php"
  }).done(function(e) {
    $('#vehiculos_section').html(e);
  });
}