const view_clientes_listar = () =>{
  $.ajax({
    url: "../app/php/registro/clientes/listar.php"
  }).done(function(e) {
    $('#clientes_section').html(e);
  });
}

const view_clientes_nuevo = () =>{
  $.ajax({
    url: "../app/php/registro/clientes/nuevo.php"
  }).done(function(e) {
    $('#clientes_section').html(e);
  });
}

const view_clientes_masivo = () =>{
  $.ajax({
    url: "../app/php/registro/clientes/masivo.php"
  }).done(function(e) {
    $('#clientes_section').html(e);
  });
}

const view_clientes_exportar = () =>{
  $.ajax({
    url: "../app/php/registro/clientes/exportar.php"
  }).done(function(e) {
    $('#clientes_section').html(e);
  });
}