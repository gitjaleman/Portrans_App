<p class="card-title-desc">Registro de nuevo <b>USUARIO</b>. <code class="highlighter-rouge">Todos los campos son obligatorios </code></p>

<form>

  <div class="row">
    <div class="col-md-6">
      <div class="mb-3">
        <label class="form-label"># CÉDULA</label>
        <input type="number" class="form-control" required="">
      </div>
    </div>
    <div class="col-md-6">
      <div class="mb-3">
        <label class="form-label">NOMBRE</label>
        <input type="text" class="form-control" required="">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="mb-3">
        <label class="form-label">NOMBRE USUARIO</label>
        <input type="text" class="form-control" required="">
      </div>
    </div>
    <div class="col-md-6">
      <div class="mb-3">
        <label class="form-label"> ROL</label>
        <select  class="form-control" required="">
          <option>Administrador</option>
          <option>Nomina</option>
          <option>Operaciones</option>
        </select>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="mb-3">
        <label class="form-label"> TÉLEFONO</label>
        <input type="number" class="form-control" required="">
      </div>
    </div>
    <div class="col-md-6">
      <div class="mb-3">
        <label class="form-label">CORREO</label>
        <input type="text" class="form-control" required="">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="mb-3">
        <label class="form-label"> CONTRASEÑA</label>
        <input type="number" class="form-control" required="">
      </div>
    </div>
    <div class="col-md-6">
      <div class="mb-3">
        <label class="form-label">REPITA CONTRASEÑA</label>
        <input type="text" class="form-control" required="">
      </div>
    </div>
  </div>

  <div>
    <button type="submit" class="btn btn-success waves-effect btn-label waves-light" style="float: right;">
      <i class="bx bx-save label-icon"></i> Guardar Datos
    </button>
  </div>

</form>