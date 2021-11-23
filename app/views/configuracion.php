<div class="main-content">
  <div class="page-content">
    <div class="container-fluid">



      <div class="d-xl-flex">
        <div class="w-100">
          <div class="d-md-flex">
            <div class="card filemanager-sidebar me-md-2">
              <div class="card-body">

                <div class="d-flex flex-column h-100">
                  <div class="mb-4">
                    <center>
                      <h4> <b>CONFIGURACIÓN</b> </h5>
                    </center>




                    <ul class="list-unstyled categories-list mt-4">

                      <li class=" border-top cursor-pointer">
                        <a class="text-body d-flex align-items-center" onclick="view_usuarios()">
                          <i class="mdi mdi-account-multiple font-size-18 text-muted me-2"></i>
                          <span class="me-auto">USUARIOS</span>
                        </a>
                      </li>
                      <li class="border-top mt-2 cursor-pointer">
                        <a class="text-body d-flex align-items-center" onclick="view_vehiculos()">
                          <i class="mdi mdi-car font-size-18 text-muted me-2"></i>
                          <span class="me-auto">VEHÍCULOS</span>
                        </a>
                      </li>
                      <li class="border-top mt-2 cursor-pointer">
                        <a class="text-body d-flex align-items-center" onclick="view_entidades()">
                          <i class="mdi mdi-shield-home font-size-18 me-2 text-muted"></i>
                          <span class="me-auto">ENTIDADES</span>
                        </a>
                      </li>
                      <li class="border-top mt-2 cursor-pointer">
                        <a class="text-body d-flex align-items-center" onclick="view_empleados()">
                          <i class="mdi mdi-account-hard-hat font-size-18 me-2 text-muted"></i>
                          <span class="me-auto">EMPLEADOS</span>
                        </a>
                      </li>
                      <li class="border-top  mt-2 cursor-pointer">
                        <a class="text-body d-flex align-items-center" onclick="view_ciudades()">
                          <i class="mdi mdi-map-marker-radius font-size-18 text-muted me-2"></i>
                          <span class="me-auto">CIUDADES</span>
                        </a>
                      </li>




                    </ul>
                  </div>

                </div>

              </div>
            </div>
            <div class="w-100">
              <div class="card">
                <div class="card-body">


                  <div id="box_usuarios" class="box_section" style="display: none;">
                    <div class="row">
                      <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                          <h5>
                            <i class="mdi mdi-account-multiple text-muted me-2"></i>
                            USUARIOS
                          </h5>
                          <div class="page-title-right">
                            <button class="btn btn-outline-light waves-effect btn_head" onclick="view_usuarios_listar()">
                              LISTAR
                            </button>
                            <button class="btn btn-outline-light waves-effect btn_head" onclick="view_usuarios_nuevo()">
                              NUEVO
                            </button>
                            <button class="btn btn-outline-light waves-effect btn_head" onclick="view_usuarios_roles()">
                              ROLES
                            </button>

                          </div>
                        </div>
                      </div>
                      <hr>
                    </div>
                    <div class="row" id="box_usuarios_section">

                    </div>
                  </div>



                  <div id="box_vehiculos" class="box_section" style="display: none;">
                    <div class="row">
                      <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                          <h5>
                            <i class="mdi mdi-car text-muted me-2"></i>
                            VEHÍCULOS
                          </h5>
                          <div class="page-title-right">
                            <button class="btn btn-outline-light waves-effect btn_head" onclick="view_vehiculos_tipo()">
                              TIPO
                            </button>
                            <button class="btn btn-outline-light waves-effect btn_head" onclick="view_vehiculos_combustible()">
                              COMBUSTIBLE
                            </button>
                            <button class="btn btn-outline-light waves-effect btn_head" onclick="view_vehiculos_linea()">
                              LINEA
                            </button>
                            <button class="btn btn-outline-light waves-effect btn_head" onclick="view_vehiculos_marca()">
                              MARCA
                            </button>
                            <button class="btn btn-outline-light waves-effect btn_head" onclick="view_vehiculos_servicio()">
                              SERVICIO
                            </button>
                            <button class="btn btn-outline-light waves-effect btn_head" onclick="view_vehiculos_documentos()">
                              DOCUMENTOS
                            </button>
                          </div>
                        </div>
                      </div>
                      <hr>
                    </div>
                    <div class="row" id="box_vehiculos_section">

                    </div>
                  </div>









                  <div id="box_entidades" class="box_section" style="display: none;">

                    <div class="row">
                      <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                          <h5>
                            <i class="mdi mdi-shield-home text-muted me-2"></i>
                            ENTIDADES
                          </h5>
                          <div class="page-title-right">
                            <button class="btn btn-outline-light waves-effect btn_head" onclick="view_entidades_eps()">
                              EPS
                            </button>
                            <button class="btn btn-outline-light waves-effect btn_head" onclick="view_entidades_bancos()">
                              BANCOS
                            </button>
                            <button class="btn btn-outline-light waves-effect btn_head" onclick="view_entidades_cesantias()">
                              CESANTÍAS
                            </button>
                            <button class="btn btn-outline-light waves-effect btn_head" onclick="view_entidades_pensiones()">
                              PENSIONES
                            </button>
                            <button class="btn btn-outline-light waves-effect btn_head" onclick="view_entidades_arl()">
                              ARL
                            </button>
                            <button class="btn btn-outline-light waves-effect btn_head" onclick="view_entidades_caja()">
                              CAJA COMPENSACIÓN
                            </button>
                          </div>
                        </div>
                      </div>
                      <hr>
                    </div>
                    <div class="row" id="box_entidades_section">

                    </div>
                  </div>





































                  <div id="box_empleados" class="box_section" style="display: none;">

                    <div class="row">
                      <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                          <h5>
                            <i class="mdi mdi-account-hard-hat text-muted me-2"></i>
                            EMPLEADOS
                          </h5>
                          <div class="page-title-right">
                            <button class="btn btn-outline-light waves-effect btn_head" onclick="view_empleados_documentos()">
                              DOCUMENTOS
                            </button>
                            <button class="btn btn-outline-light waves-effect btn_head" onclick="view_empleados_notificacion()">
                              NOTIFICACIÓN
                            </button>
                          </div>
                        </div>
                      </div>
                      <hr>
                    </div>
                    <div class="row" id="box_empleados_section">

                    </div>

                  </div>





































                  <div id="box_ciudades" class="box_section" style="display: none;">

                    <div class="row">
                      <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                          <h5>
                            <i class="mdi mdi-map-marker-radius text-muted me-2"></i>
                            CIUDADES
                          </h5>
                          <div class="page-title-right">
                            <button class="btn btn-outline-light waves-effect btn_head" onclick="view_ciudades_listar()">
                              LISTAR
                            </button>
                          </div>
                        </div>
                      </div>
                      <hr>
                    </div>
                    <div class="row" id="box_ciudades_section">

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
</div>