const view_gestiones = () =>{
  $.ajax({
    url: "../app/component/reporte/gestiones.php"
  }).done(function(e) {
    $('#section_component').html(e);
  });
}

const view_acuerdos = () =>{
  $.ajax({
    url: "../app/component/reporte/acuerdos.php"
  }).done(function(e) {
    $('#section_component').html(e);
  });
}

const view_recaudo = () =>{
  $.ajax({
    url: "../app/component/reporte/recaudo.php"
  }).done(function(e) {
    $('#section_component').html(e);
  });
}

const view_base = () =>{
  $.ajax({
    url: "../app/component/reporte/base.php"
  }).done(function(e) {
    $('#section_component').html(e);
  });
}

