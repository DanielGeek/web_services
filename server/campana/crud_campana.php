

<span id="alert_action2"></span>
  <div class="row">
   <div class="col-lg-12">
    <div class="panel panel-default">
                    <div class="panel-heading">
                     <div class="row">
                         <div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
                             <h3 class="panel-title">Lista de Campañas</h3>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" align="right">
                             <!-- <button type="button" name="add2" id="add_button2" data-toggle="modal" data-target="#userModal2" class="btn btn-success btn-xs">Add</button> -->
                         </div>
                        </div>
                       
                        <div class="clear:both"></div>
                    </div>
                   <!-- inicio form subir data -->
                   <br>
                    <div id="result" class="text-center"></div>

                    <form id="form_campana_data" method="post" enctype="multipart/form-data">
                        <div id="box-correo">
                        
                            <div class="form-group col-md-3">
                                <input style="height:40px !important;" type="text" class="form-control" placeholder="Nombre Data: " name="nombre_data" id="nombre_data" required/>
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

                            <div class="col-md-3">
                                <button style="padding:10px !important;" class="form-group btn btn-primary btn-block" type="submit" name="button" id="btn_submit">
                                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Subir
                                </button>
                            </div>
                            
                        </div>
                    </form>
                    <br><br>
                    <hr>
                    <!-- fin form subir data -->
                    
                    <div class="panel-body">
                     <div class="row">
                     <div class="col-sm-12 table-responsive">
                      <table id="user_data2" class="table table-bordered table-striped">
                       <thead>
                        <tr>
                        <th readonly>ID</th>
                        <th>Creador de la Campaña</th>
                        <th>Nombre Campaña</th>
                        <th>Rut</th>
                        <th>Nombre</th>
                        <th>Telefono </th>
                        <th>Deuda</th>
                        <th>Editar</th>
                        <th style="">Eliminar</th>
                        </tr>
                        </thead>
                      </table>
                     </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="userModal2" class="modal fade">
            <div class="modal-dialog">
                <form method="post" id="user_form2">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title modal-title-campana">
                                <i class="fa fa-plus"></i> Agregar Campaña</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="id_user">Seleccione Creador de la Campaña</label>
                                <select name="id_user" id="id_user" class="form-control" required>
                                </select>
                                <div style="margin-top:10px;" id="alert_user_id"></div>
                            </div>
                            <div class="form-group">
                                <label for="campana_name2">Ingrese Nombre Campaña</label>
                                <input type="text" name="campana_name2" id="campana_name2" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="rut">Ingrese Rut</label>
                                <input type="text" name="rut" id="rut" class="form-control" required />
                            </div>

                            <div class="form-group">
                                <label for="user_name2">Ingrese Usuario</label>
                                <input type="text" name="user_name2" id="user_name2" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="user_tel">Ingrese Télefono</label>
                                <input type="tel" name="user_tel" id="user_tel" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="user_deuda">Ingrese Deuda</label>
                                <input type="text" name="user_deuda" id="user_deuda" class="form-control" required />
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="campana_name_oculto" id="campana_name_oculto" />
                            <input type="hidden" name="user_id2" id="user_id2" />
                            <input type="hidden" name="btn_action2" id="btn_action2" />
                            <input type="submit" name="action2" id="action2" class="btn btn-info" value="Add" />
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>

