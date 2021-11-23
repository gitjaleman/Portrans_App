const view_propietarios_listar = () =>{
  $.ajax({
    url: "../app/php/registro/propietarios/listar.php"
  }).done(function(e) {
    $('#propietarios_section').html(e);
  });
}

const view_propietarios_nuevo = () =>{
  $.ajax({
    url: "../app/php/registro/propietarios/nuevo.php"
  }).done(function(e) {
    $('#propietarios_section').html(e);
  });
}

const view_propietarios_masivo = () =>{
  $.ajax({
    url: "../app/php/registro/propietarios/masivo.php"
  }).done(function(e) {
    $('#propietarios_section').html(e);
  });
}

const view_propietarios_exportar = () =>{
  $.ajax({
    url: "../app/php/registro/propietarios/exportar.php"
  }).done(function(e) {
    $('#propietarios_section').html(e);
  });
}