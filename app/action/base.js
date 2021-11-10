
const view_pagos = () =>{
  $.ajax({
    url: "../app/component/base/pagos.php"
  }).done(function(e) {
    $('#section_component').html(e);
  });
}

const view_saldos = () =>{
  $.ajax({
    url: "../app/component/base/saldos.php"
  }).done(function(e) {
    $('#section_component').html(e);
  });
}

const view_cuentas = () =>{
  $.ajax({
    url: "../app/component/base/cuentas.php"
  }).done(function(e) {
    $('#section_component').html(e);
  });
}

const view_estados = () =>{
  $.ajax({
    url: "../app/component/base/estados.php"
  }).done(function(e) {
    $('#section_component').html(e);
  });
}

const view_base = () =>{
  $.ajax({
    url: "../app/component/base/base.php"
  }).done(function(e) {
    $('#section_component').html(e);
  });
}