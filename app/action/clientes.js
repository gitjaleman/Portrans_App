$(document).ready(function () {
  registrar();
});

function mostrar_registro(){
  $("#section_list_cliente").slideUp(0);
  $("#section_register_cliente").slideDown(0);
}
function mostrar_lista(){
  loader_status_true();
  select_clientes();
  $("#section_register_cliente").slideUp(0);
  $("#section_list_cliente").slideDown(0);
}

function registrar() {
  $("#frm_insert_cliente").on("submit", function (e) {
    e.preventDefault();
    $("#btn_register_active").slideUp(0);
    $("#btn_register_disable").slideDown(0);
    $("#msn_register_error").slideUp(0);
    let formData = new FormData();
    let file = document.getElementById('file');
    let cedula = $("#cedula").val();
    let nombre = $("#nombre").val();
    let telefono = $("#telefono").val();
    let correo = $("#correo").val();
    let direccion = $("#direccion").val();
    const url = http + "api/clientes";
    formData.append("cedula", cedula);
    formData.append("nombre", nombre);
    formData.append("telefono", telefono);
    formData.append("correo", correo);
    formData.append("direccion", direccion);
    formData.append("file", file.files[0]);
    insert_clientes(url, formData);
  });
}

const insert_clientes = async (url, formData) => {
  try {
    const resp = await fetch(url, {
      method: "POST",
      body: formData,
    });
    const data = await resp.json();
    await process_data_insert(data);
  } catch (e) {
    console.log("no hay resultados:" + e);
  }
};

const process_data_insert = (data) => {
  let status = data.result;
  status != false ? insert_status_true() : insert_status_false();
};

const select_clientes = async () => {
  try {
    const resp = await fetch(http + "api/clientes");
    const data = await resp.json();
    await process_data_select(data);
  } catch (e) {
    console.log("no hay resultados:" + e);
  }
};

const process_data_select = (data) => {
  let clientes = data.clientes.data;
  $("#tbl").DataTable({
    data: clientes,
    retrieve: true,
    columns: [
      { data: "cedula" },
      { data: "nombre" },
      { data: "telefono" },
      { data: "correo" },
      {
        data: "cedula",
        render: function (data, type, row) {
          return (
            '<a href="cliente?c='+data+'" style="font-size: 20px; color: #34495e;" >'+
              '<i class="mdi mdi-account-circle"></i>'+
            '</a>'
          );
        },
      },
    ],
  });

  loader_status_false();

};

const insert_status_true = () => {
  $("#btn_register_disable").slideUp(0);
  $("#btn_register_active").slideDown(0);
  $("#frm_insert_cliente")[0].reset();
  mostrar_lista();
};

const insert_status_false = () => {
  $("#btn_register_disable").slideUp(0);
  $("#btn_register_active").slideDown(0);
  $("#msn_register_error").slideDown(0);
};

const loader_status_true = () => {
  $("#list_cliente_tbl").slideUp(0);
  $("#list_cliente_loader").slideDown(0);
};

const loader_status_false = () => {
  $("#list_cliente_loader").slideUp(0);
  $("#list_cliente_tbl").slideDown(0);
};
