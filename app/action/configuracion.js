const view_usuarios = () =>{
  $('.box_section').slideUp(0);
  $('#box_usuarios').slideDown(0);
  $('#box_usuarios_section').html('');
}

const view_vehiculos = () =>{
  $('.box_section').slideUp(0);
  $('#box_vehiculos').slideDown(0);
  $('#box_vehiculos_section').html('');
}

const view_entidades = () =>{
  $('.box_section').slideUp(0);
  $('#box_entidades').slideDown(0);
  $('#box_entidades_section').html('');
}

const view_empleados = () =>{
  $('.box_section').slideUp(0);
  $('#box_empleados').slideDown(0);
  $('#box_empleados_section').html('');
}

const view_ciudades = () =>{
  $('.box_section').slideUp(0);
  $('#box_ciudades').slideDown(0);
  $('#box_ciudades_section').html('');
}




const view_usuarios_listar = () =>{
  $.ajax({
    url: "../app/php/config/usuarios/listar.php"
  }).done(function(e) {
    $('#box_usuarios_section').html(e);
  });
}

const view_usuarios_nuevo = () =>{
  $.ajax({
    url: "../app/php/config/usuarios/nuevo.php"
  }).done(function(e) {
    $('#box_usuarios_section').html(e);
  });
}
const view_usuarios_roles = () =>{
  $.ajax({
    url: "../app/php/config/usuarios/roles.php"
  }).done(function(e) {
    $('#box_usuarios_section').html(e);
  });
}








const view_vehiculos_tipo = () =>{
  $.ajax({
    url: "../app/php/config/vehiculos/tipo.php"
  }).done(function(e) {
    $('#box_vehiculos_section').html(e);
  });
}
const view_vehiculos_combustible = () =>{
  $.ajax({
    url: "../app/php/config/vehiculos/combustible.php"
  }).done(function(e) {
    $('#box_vehiculos_section').html(e);
  });
}
const view_vehiculos_linea = () =>{
  $.ajax({
    url: "../app/php/config/vehiculos/linea.php"
  }).done(function(e) {
    $('#box_vehiculos_section').html(e);
  });
}
const view_vehiculos_marca = () =>{
  $.ajax({
    url: "../app/php/config/vehiculos/marca.php"
  }).done(function(e) {
    $('#box_vehiculos_section').html(e);
  });
}
const view_vehiculos_servicio = () =>{
  $.ajax({
    url: "../app/php/config/vehiculos/servicio.php"
  }).done(function(e) {
    $('#box_vehiculos_section').html(e);
  });
}
const view_vehiculos_documentos = () =>{
  $.ajax({
    url: "../app/php/config/vehiculos/documentos.php"
  }).done(function(e) {
    $('#box_vehiculos_section').html(e);
  });
}












const view_entidades_eps = () =>{
  $.ajax({
    url: "../app/php/config/entidades/eps.php"
  }).done(function(e) {
    $('#box_entidades_section').html(e);
  });
}
const view_entidades_bancos = () =>{
  $.ajax({
    url: "../app/php/config/entidades/bancos.php"
  }).done(function(e) {
    $('#box_entidades_section').html(e);
  });
}
const view_entidades_cesantias = () =>{
  $.ajax({
    url: "../app/php/config/entidades/cesantias.php"
  }).done(function(e) {
    $('#box_entidades_section').html(e);
  });
}
const view_entidades_pensiones = () =>{
  $.ajax({
    url: "../app/php/config/entidades/pensiones.php"
  }).done(function(e) {
    $('#box_entidades_section').html(e);
  });
}
const view_entidades_arl = () =>{
  $.ajax({
    url: "../app/php/config/entidades/arl.php"
  }).done(function(e) {
    $('#box_entidades_section').html(e);
  });
}
const view_entidades_caja = () =>{
  $.ajax({
    url: "../app/php/config/entidades/caja.php"
  }).done(function(e) {
    $('#box_entidades_section').html(e);
  });
}








const view_empleados_documentos = () =>{
  $.ajax({
    url: "../app/php/config/empleados/documentos.php"
  }).done(function(e) {
    $('#box_empleados_section').html(e);
  });
}
const view_empleados_notificacion = () =>{
  $.ajax({
    url: "../app/php/config/empleados/notificacion.php"
  }).done(function(e) {
    $('#box_empleados_section').html(e);
  });
}




const view_ciudades_listar = () =>{
  $.ajax({
    url: "../app/php/config/ciudades/listar.php"
  }).done(function(e) {
    $('#box_ciudades_section').html(e);
  });
}