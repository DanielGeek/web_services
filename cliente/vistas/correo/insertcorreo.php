             <!-- inicio form correo -->
             <div id="producto_contenedor" class=" col-md-12 col-lg-12 card">
                    <!-- <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h4 >Envío | Correo | Web Services</h4>
                            </button>
                        </h5>
                        
                    </div> -->
                   
                    <!-- <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"> -->
                        <div class="card-body">
                            <form id="form_correo" method="post">
                                <div id="box-correo">
                                    <div class="form-group">
                                        <label for="correo">Ingrese un correo:</label>
                                        <input type="email" class="form-control" placeholder="Correo: " name="correo" required/>
                                    </div>
                                    <button class="btn btn-default" type="submit" name="button" id="btn_submit">
                                            <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Enviar
                                    </button>
                                </div>
                            </form>
                            
                            <div id="loading-correo-image" class="text-center loading-correo-image">
                                <img id="git-image" class="git-image" src="https://media.giphy.com/media/xTk9ZvMnbIiIew7IpW/giphy.gif" alt="Sending....." />
                            </div>
                        </div>
                        <div id="correo_show">
                            <div id="view-correo"></div>
                        </div>
                    <!-- </div>                 -->
                </div>
                 <!-- fin form correo -->