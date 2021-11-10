<div class="main-content">
  <div class="page-content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4> 
              <i class="bx bxs-user-detail"></i> REGISTRO CLIENTES
            </h4>
            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <div class="btn-group btn-group-sm mt-4 mt-md-0" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-outline-secondary w-xs" onclick="mostrar_registro()"><i class="bx bx-edit-alt"></i></button>
                  <button type="button" class="btn btn-outline-secondary w-xs" onclick="mostrar_lista()"><i class="bx bx-list-ol"></i></button>
                </div>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <div class="row" id="section_register_cliente">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
              <div class="mb-4" style="font-size: 18px;">Por favor complete todos los campos.</div>
              <form id="frm_insert_cliente" class="needs-validation">
                <div class="row">
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label class="form-label" style="font-size: 16px;">Cédula</label>
                      <input type="text" id="cedula" class="form-control" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label class="form-label">Nombre</label>
                      <input type="text" id="nombre" class="form-control" required>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="mb-3">
                      <label class="form-label">Teléfono</label>
                      <input type="tel" id="telefono" class="form-control" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label class="form-label">Correo</label>
                      <input type="email" id="correo" class="form-control" required>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="mb-3">
                      <label class="form-label">Dirección</label>
                      <input type="text" id="direccion" class="form-control" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label class="form-label">Documento <b>PDF</b></label>
                      <input type="file" id="file" class="form-control" required>
                    </div>
                  </div>
                </div>

                <button id="btn_register_active" type="submit" class="btn btn-success waves-effect btn-label btn-block waves-light">
                  <i class="bx bx-save label-icon"></i> Guardar Datos
                </button>

                <button id="btn_register_disable" type="button" class="btn btn-success waves-effect waves-light" style="display: none;" disabled>
                  <i class="bx bx-loader bx-spin font-size-16 align-middle me-2"></i> Guardando . . .
                </button>

              </form>
            </div>

            <div class="card-body" id="msn_register_error" style="display: none;">
              <div class="alert alert-danger alert-dismissible fade show" role="alert" style="font-size: 16px;">
                <i class="mdi mdi-block-helper me-2 "></i>
                ¡Upss Ocurrió un error, posiblemente el número de cédula que quieres ingresar ya está registrado. Verifica los datos e inténtelo nuevamente.
              </div>
            </div>



          </div>
        </div>
      </div>

      <div class="row" id="section_list_cliente" style="display:none">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row" id="list_cliente_tbl" style="display: none;">
                  <div class="col-sm-12" style="padding: 10px;">
                    <div class="table-responsive">
                      <table id="tbl" class="table  table-nowrap table-striped" style="max-width: 100%; min-width: 100%;">
                        <thead>
                          <tr role="row">
                            <th>CÉDULA</th>
                            <th>NOMBRE</th>
                            <th>TELÉFONO</th>
                            <th>CORREO</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody id="tbl_body">
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

                <div class="row" id="list_cliente_loader"  style="display: none;">
                  <div class="col-sm-12" style="padding: 10px;">
                    <center>
                      <div class="spinner-border text-secondary m-1" role="status"></div>
                      <h4>Cargando</h4>
                    </center>
                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>