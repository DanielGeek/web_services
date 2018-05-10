<!-- Row Start -->

          <!-- inicio form correo -->

          <div id="producto_contenedor" class=" col-md-12 col-lg-12 card">
            <div id="result" class="text-center"></div>
            <br>
            <div id="ivr_arbol">
            
            </div>
                    <!-- <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h4 >Envío | Correo | Web Services</h4>
                            </button>
                        </h5>
                        
                    </div> -->
                    
                    <!-- <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"> -->
                        <div class="card-body">
                            <form id="form_campana" method="post" enctype="multipart/form-data">
                                <div id="box-correo">
                                    <div class="form-group">
                                        <label for="campana_name">Nombre campaña:</label>
                                        <input type="text" class="form-control" placeholder="Nombre campaña: " name="campana_name" id="campana_name" required/>
                                    </div>
                                    
                                    <div class="form-group">
                                    <label class="btn btn-info btn-file btn-block">
                                        Subir base <input type="file" name="file_crear_campana" id="file_crear_campana" style="" required/>
                                    </label>
                                    </div>

                                    <div class="form-group">
                                        <!-- <label for="saludo">Saludo:</label> -->
                                        <div id="saludo"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="despedida">Despedida:</label>
                                        <div class="alert alert-info text-center">Adios</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="descargar">Descargar archivo ejemplo:</label>
                                        <a href="lib/ArchivoEjemplo.xlsx" target="_blank" class="btn btn-success btn-block">
                                            <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                                       </button></a>
                                       
                                        <!-- <img src="img/excel.png" alt=""> -->
                                    </div>
                                    <button class="btn btn-info btn-block" type="submit" name="button" id="btn_submit">
                                            <i class="fa fa-paper-plane-o" aria-hidden="true"></i> CREAR
                                    </button>
                                    
                                </div>
                            </form>
                            <!-- <br>
                            <button class="btn btn-info btn-block" name="hablar" id="hablar">
                                 <i class="fa fa-plus" aria-hidden="true"></i> Mostrar nombres
                            </button> -->
                            
                        </div>
                            
                    <!-- </div>                 -->
                </div>
                 <!-- fin form correo -->
<!-- Row End -->