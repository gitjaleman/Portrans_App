

function insert() {
  $("#frm_insert").on("submit", function (e) {
    e.preventDefault();
    var frm = $("#frm_insert").serialize();
    var user = localStorage.getItem("user_user");
    $.ajax({
      type: "GET",
      url: http + "/rest/api/gastos_insert?usuario=" + user,
      data: frm,
    }).done(function (i) {
      var fecha = $("#input_fecha_registro").val();
      var f = new Date(fecha);
      var m = f.getMonth() + 1;
      var a = f.getFullYear();
      $("#frm_insert")[0].reset();
      select(a,m);
    });
  });
}




function select(a,m){
  $.ajax({
    type: "GET",
    url: http + "/rest/api/gastos_select?a="+a+"&m="+m
  }).done(function (i) {
		var result = i.data;
		if(m<10){m='0'+m}
		$("#tittle_list").html('Gastos del MES: '+m+' - AÑO: '+a);
		if(result==null){
      $("#list").html("NO HAY RESULTADOS");
    }else{
      $("#list").html("");
      for (let item of result) {
        $("#list").append(
          '<div class="media py-3 border-bottom mb-4">'+
					'<div class="avatar-xs me-3">'+
						'<div class="avatar-title rounded-circle bg-light text-dark">'+
							'<i class="bx bxs-user"></i>'+
						'</div>'+
					'</div>'+
					'<div class="media-body">'+
						'<h5 class="font-size-16 mb-3">'+
							'<b>'+item.usuario+'</b>'+
							
							'<small class="text-muted float-end" style="cursor: pointer;">'+
								'<b class="h4 text-danger" onclick="modal('+item.id+',`'+item.usuario+'`,`'+item.detalle+'`,`'+item.fecha+'`,'+item.valor+')">'+
									'<i class="bx bx-trash-alt"></i>'+
								'</b>'+
							'</small>'+
							'<p>'+item.fecha+'</p>'+
						'</h5>'+
						'<p class="text-muted font-size-14">'+item.detalle+'</p>'+
						'<div>'+
							'<a class="text-success h5">$ '+formato_numero(item.valor,0)+'</a>'+
						'</div>'+
					'</div>'+
				'</div>'
        );
      }
    } 
		$('#total_gastos').html('$ '+formato_numero(i.suma,0));
		listar_gastos();
  });
}


function gasto_delete(){
	var id = $('#input_delete_id').val();
  $.ajax({
      type: "GET",
      url: http + "/rest/api/gastos_delete?id="+id
  }).done(function (i) {
		console.log(i);
		window.location = "";
  });
}

function search() {
  $("#frm_search").on("submit", function (e) {
    e.preventDefault();
    var fecha = $("#search_fecha").val();
		var a = fecha.substring(0, 4);
		var m = fecha.substring(5, 7);
    $("#frm_search")[0].reset();
		select(a,m); 
  });
}








function listar_gastos() {
  $(".my_box_content").slideUp(0);
  $("#my_box_tbl").slideDown(0);
}

function registrar_gastos() {
  $(".my_box_content").slideUp(0);
  $("#my_box_register").slideDown(0);
}

function filtrar_gastos() {
  $(".my_box_content").slideUp(0);
  $("#my_box_search").slideDown(0);
}

function init(){
	insert();
	search();
	var fecha_actual =  new Date();
	var m = fecha_actual.getMonth() + 1;
  var a = fecha_actual.getFullYear();
	select(a,m);
}

function formato_numero(amount, decimals) {
  amount += "";
  amount = parseFloat(amount.replace(/[^0-9\.]/g, ""));
  decimals = decimals || 0;
  if (isNaN(amount) || amount === 0) return parseFloat(0).toFixed(decimals);
  amount = "" + amount.toFixed(decimals);
  var amount_parts = amount.split(","),
    regexp = /(\d+)(\d{3})/;
  while (regexp.test(amount_parts[0]))
    amount_parts[0] = amount_parts[0].replace(regexp, "$1" + "." + "$2");
  return amount_parts.join(",");
}

function modal(id,usuario,detalle,fecha,valor){
	$('#modal_borrar_gastos').modal('show');
	$('#m_usuario').html(usuario);
	$('#m_detalle').html(detalle);
	$('#m_fecha').html(fecha);
	$('#m_valor').html(valor);
	$('#m_valor').html('$ '+formato_numero(valor,0));
	$('#input_delete_id').val(id);
}


init();
