<!-- Row Start -->

          <!-- inicio form correo -->

          <div id="producto_contenedor" class=" table-responsive col-md-12 col-lg-12 card">
            <div id="result" class="text-center"></div>
                    
                    <!-- inicio contenedor form crear campaña -->
                        <div class="card-body" style="padding-bottom:150px !important;">
                            <form id="form_campana" method="post" enctype="multipart/form-data">

                                    <div class="form-group col-md-2">
                                        <label for="campana_name">Crear Campaña:</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input style="height:40px !important;" type="text" class="form-control" placeholder="Nombre campaña: " name="campana_name" id="campana_name" required/>
                                    </div>
                                    
                                    <div class="form-group col-md-3">
                                        <select name="id_user_data" id="id_user_data" class="form-control selectpicker" multiple data-max-options="1" required>
                                            <option value='A'>Columna A</option>
                                            
                                        </select>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <button style="padding:10px !important;" class="form-group btn btn-primary btn-block" type="submit" name="btn_submit_campana" id="btn_submit_campana">
                                                <i class="fa fa-paper-plane-o" aria-hidden="true"></i> CREAR
                                        </button>
                                    </div>
                                    <br>
                                    <div id="ivr_arbol">
                                    </div>
                            </form>
                           
                        </div>
                        
                        <!-- inicio tabla IVRC_arbol -->
                        
                        
                        
                        <!-- inicio tabla IVRC_arbol -->
                        <!-- fin contenedor form crear campaña -->

                </div>
                
                 <!-- fin form correo -->
<!-- Row End -->