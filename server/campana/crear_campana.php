<!-- Row Start -->

          <!-- inicio form correo -->

          <div id="producto_contenedor" class=" table-responsive col-md-12 col-lg-12 card">
            <div id="result" class="text-center"></div>
                    <!-- <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h4 >Envío | Correo | Web Services</h4>
                            </button>
                        </h5>
                        
                    </div> -->
                    
                    <!-- <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"> -->
                    <!-- inicio contenedor form crear campaña -->
                        <div class="card-body">
                            <form id="form_campana" method="post" enctype="multipart/form-data">
                                <div id="box-correo">
                                
                                    <div class="form-group col-md-2">
                                        <label for="campana_name">Crear Campaña:</label>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input style="height:40px !important;" type="text" class="form-control" placeholder="Nombre campaña: " name="campana_name" id="campana_name" required/>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label style="line-height: 0px;" class="btn btn-info btn-file">
                                            Seleccione Data<input style="cursor:pointer;padding-top:10px; font-size:10px;" type="file" name="file_crear_campana" id="file_crear_campana" required/>
                                        </label>
                                    </div>
                                    
                                    
                                    <div class="form-group col-md-3">
                                        <a style="padding:10px !important;" href="lib/ArchivoEjemplo.xlsx" target="_blank" class="btn btn-success btn-block">
                                        <i class="fa fa-file-excel-o" aria-hidden="true"></i> Descargar ejemplo:
                                       </a>
                                    </div>

                                    <div class="col-md-2">
                                        <button style="padding:10px !important;" class="form-group btn btn-primary btn-block" type="submit" name="button" id="btn_submit">
                                                <i class="fa fa-paper-plane-o" aria-hidden="true"></i> CREAR
                                        </button>
                                    </div>
                                    <!-- <div class="form-group">
                                        <div id="saludo"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="despedida">Despedida:</label>
                                        <div class="alert alert-info text-center">Adios</div>
                                    </div> -->
                                </div>
                            </form>
                            <!-- <br>
                            <button class="btn btn-info btn-block" name="hablar" id="hablar">
                                 <i class="fa fa-plus" aria-hidden="true"></i> Mostrar nombres
                            </button> -->
                        </div>
                        <!-- fin contenedor form crear campaña -->
                        
                        <!-- inicio tabla IVRC_arbol -->
                        <br>
                        
                        <div id="ivr_arbol">
                        </div>
                        
                        <!-- inicio tabla IVRC_arbol -->
                    <!-- </div>                 -->
                </div>
                 <!-- fin form correo -->
<!-- Row End -->