<!-- modal frases positivas -->
<div id="modalFrasesPos" class="modal fade">
            <div class="modal-dialog">
                <form method="post" id="frasesPos_form">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title modal-title-frasesPos">
                                <i class="fa fa-plus"></i> Agregar Nueva Frase Positiva</h4>
                        </div>

                        <div class="modal-body">
                            
                            <div class="form-group">
                                <label for="frase_name">Ingrese Nombre de la Frase</label>
                                <input type="text" name="frase_namePos" id="frase_namePos" class="form-control" required />
                                <div style="margin-top:10px;" id="alert_frasesPos"></div>
                            </div>
                            
                        </div>

                        <div class="modal-footer">
                            <input type="hidden" name="frasePos_name_oculta" id="frasePos_name_oculta" />
                            <input type="hidden" name="userPos_id" id="userPos_id" />
                            <input type="hidden" name="btnPos_action" id="btnPos_action" />
                            <input type="submit" name="actionPos" id="actionPos" class="btn btn-info" value="Add" />
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

<!-- modal frases negativas -->
        <div id="modalFrasesNeg" class="modal fade">
            <div class="modal-dialog">
                <form method="post" id="frasesNeg_form">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title modal-title-frasesNeg">
                                <i class="fa fa-plus"></i> Agregar Nueva Frase Negativa</h4>
                        </div>

                        <div class="modal-body">
                            
                            <div class="form-group">
                                <label for="frase_name">Ingrese Nombre de la Frase</label>
                                <input type="text" name="frase_nameNeg" id="frase_nameNeg" class="form-control" required />
                                <div style="margin-top:10px;" id="alert_frasesNeg"></div>
                            </div>
                            
                        </div>

                        <div class="modal-footer">
                            <input type="hidden" name="fraseNeg_name_oculta" id="fraseNeg_name_oculta" />
                            <input type="hidden" name="userNeg_id" id="userNeg_id" />
                            <input type="hidden" name="btnNeg_action" id="btnNeg_action" />
                            <input type="submit" name="actionNeg" id="actionNeg" class="btn btn-info" value="Add" />
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>