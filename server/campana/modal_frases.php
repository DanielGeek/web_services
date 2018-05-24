
<div id="modalFrases" class="modal fade">
            <div class="modal-dialog">
                <form method="post" id="frases_form">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title modal-title-frases">
                                <i class="fa fa-plus"></i> Agregar Nueva Frase</h4>
                        </div>

                        <div class="modal-body">
                            
                            <div class="form-group">
                                <label for="frase_name">Ingrese Nombre de la Frase</label>
                                <input type="text" name="frase_name" id="frase_name" class="form-control" required />
                                <div style="margin-top:10px;" id="alert_frases"></div>
                            </div>
                            
                        </div>

                        <div class="modal-footer">
                            <input type="hidden" name="frase_name_oculta" id="frase_name_oculta" />
                            <input type="hidden" name="user_id" id="user_id" />
                            <input type="hidden" name="btn_action" id="btn_action" />
                            <input type="submit" name="action" id="action" class="btn btn-info" value="Add" />
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>