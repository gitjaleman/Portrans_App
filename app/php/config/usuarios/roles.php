<p class="card-title-desc">Registro de nuevo <b>ROL DE USUARIO</b>. <code class="highlighter-rouge">Todos los campos son obligatorios </code></p>
<form id="frm_insert_rol" class="outer-repeater">
  <div data-repeater-list="outer-group" class="outer">
    <div data-repeater-item="" class="outer">
      <div class="inner-repeater mb-4">
        <div data-repeater-list="inner-group" class="inner mb-3">
          <label>Detalle:</label>
          <div data-repeater-item="" class="inner mb-3 row">
            <div class="col-md-10 col-8">
              <input type="text" class="inner form-control" placeholder="Ingrese nombre rol..." required>
            </div>
            <div class="col-md-2 col-4">
              <div class="d-grid">
                <input type="submit" class="btn btn-success inner" value="Guardar" onclick="prueba();">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>












<p class="card-title-desc">Listado de <b>ROLES DE USUARIO</b>  registrados.</p>

<div class="table-responsive">
  <table class="table mb-0 table-sm">

    <thead class="table-light">
      <tr>
        <th>#</th>
        <th>DESCRIPCIÓN </th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Administrador</td>
        <td>
          <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
        </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Nomina</td>
        <td>
          <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
        </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Operaciones</td>
        <td>
          <button type="button" class="btn btn-danger btn-sm">Eliminar</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<script>
  
  $("#frm_insert_rol").on("submit", function (e) {
  e.preventDefault();
  alert("hola formulario");
});


</script>