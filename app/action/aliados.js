const view_aliados_listar = () =>{
  $.ajax({
    url: "../app/php/registro/aliados/listar.php"
  }).done(function(e) {
    $('#aliados_section').html(e);
  });
}

const view_aliados_nuevo = () =>{
  $.ajax({
    url: "../app/php/registro/aliados/nuevo.php"
  }).done(function(e) {
    $('#aliados_section').html(e);
  });
}

const view_aliados_masivo = () =>{
  $.ajax({
    url: "../app/php/registro/aliados/masivo.php"
  }).done(function(e) {
    $('#aliados_section').html(e);
  });
}

const view_aliados_exportar = () =>{
  $.ajax({
    url: "../app/php/registro/aliados/exportar.php"
  }).done(function(e) {
    $('#aliados_section').html(e);
  });
}