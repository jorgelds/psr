	<section>
        <div class="container-fluid">
            <img src="https://i0.wp.com/semillitasdeamor.edu.co/wp-content/uploads/2016/05/PSE.png?resize=280%2C120&ssl=1" alt="PSE logo" class="img-responsive">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12 col-md-offset-1 col-lg-offset-1">
                PSE - Pagos Seguros en Línea/Persona Natural
            </div>
            <div class="container" id="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!--  -->
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 ">
                        <div class="form-group">
                            <button class="btn btn-pse" id="ya"><i class="fa fa-check-square-o" aria-hidden="true"></i> Soy un usuario registrado</button>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 ">
                        <div class="form-group">
                            <button class="btn btn-pse"><i class="fa fa-user-plus" aria-hidden="true"></i> Quiero registrarme ahora</button>
                        </div>
                    </div>
                </div>
                <form method="post" enctype="multipart/form-data" class="form-horizontal" id="registrar" action="<?php echo base_url();?>index.php/Controler/transaccion">
                    <?php
                    foreach ($valores as $key => $value){
                        echo '<input type="hidden" name="'.$key.'" value="'.$value.'">';
                    }
                    ?>
                    <input type="hidden" name="trs" value="0">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="email">
                        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                            <div class="form-group">
                                <label>E-mail</label>
                                <input name="correo" type="email" value="" class="form-control" id="correo" required="required">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="pull-left">
                                <a href="<?php echo base_url();?>/index.php/Controler" id="btn" class="btn btn-primary">Regresar</a>
                            </div>
                            <div class="pull-right">
                                <button type="submit" id="btn" class="btn btn-primary">Seguir con el pago <i class="fa fa-caret-right" aria-hidden="true"></i> </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="container-fluid" id="formulario">
		<div class="container">
			<div class="row">
				<h3 class="panel-title">
					Formulario
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				</h3>
			</div>
        </div>
        <div class="container" id="cuerpo">
            <form method="post" enctype="multipart/form-data" class="form-horizontal" id="registrar" action="<?php echo base_url();?>index.php/Controler/transaccion">
                <?php
                foreach ($valores as $key => $value){
                    echo '<input type="hidden" name="'.$key.'" value="'.$value.'">';
                }
                ?>
                <input type="hidden" name="trs" value="1">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!--  -->
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                        <div class="form-group">
                            <label>Tipo de identificacíon</label>
                            <select name="tip_ident" id="" class="form-control" required="required">
                                <option value="0">Seleccione</option>
                                <option value="CC">Cédula de ciudanía colombiana</option>
                                <option value="CE">Cédula de extranjería</option>
                                <option value="TI">Tarjeta de identidad</option>
                                <option value="PPN">Pasaporte</option>
                                <option value="NIT">Número de identificación tributaria</option>
                                <option value="SSN">Social Security Numbe</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
                        <div class="form-group">
                            <label>Número de identificación</label>
                            <input name="document" type="text" value="" class="form-control" id="" required="required">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-11 col-lg-11 col-sm-11 col-xs-12">
                        <hr>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input name="nombre" type="text" onkeypress="return soloLetras(event);" value="" class="form-control" id="" required="required">
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
                        <div class="form-group">
                            <label>Apellido</label>
                            <input name="apellido" type="text" onkeypress="return soloLetras(event);" value="" class="form-control" id="" required="required">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-11 col-lg-11 col-sm-11 col-xs-12">
                        <hr>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                        <div class="form-group">
                            <label>Correo</label>
                            <input name="correo" type="email" value="" class="form-control" id="correo" required="required">
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                        <div class="form-group">
                            <label>Confirmar correo</label>
                            <input type="email" value="" class="form-control" id="secon_correo" required="required">
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                        <div class="form-group">
                            <label>Número de teléfono</label>
                            <input name="tel" type="text" value="" class="form-control" id="telefono" required="required">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-11 col-lg-11 col-sm-11 col-xs-12">
                        <hr>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                        <div class="form-group">
                            <label>Dirección</label>
                            <input name="direccion" type="text" value="" class="form-control" id="" required="required">
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                        <div class="form-group">
                            <label>Provincia</label>
                            <input name="provincia" type="text" value="" class="form-control" id="" required="required">
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                        <div class="form-group">
                            <label>Ciudad</label>
                            <input name="city" type="text" onkeypress="return soloLetras(event);" value="" class="form-control" id="" required="required">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-11 col-lg-11 col-sm-11 col-xs-12">
                        <hr>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                        <div class="form-group">
                            <label>País</label>
                            <input name="pais" type="text" value="" class="form-control" id="" required="required">
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
                        <div class="form-group">
                            <label>Compañia</label>
                            <input name="company" type="text" value="" class="form-control" id="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-11 col-lg-11 col-sm-11 col-xs-12">
                        <hr>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                        <div class="form-group">
                            <label>Pregunta de seguridad</label>
                            <select name="pregunta" id="" class="form-control" required="required">
                                <option value="0">Seleccione</option>
                                <option value="1">Nombre de mi primera mascota</option>
                                <option value="2">Color favorito</option>
                                <option value="3">Marca de carro favorita</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
                        <div class="form-group">
                            <label>Respuesta</label>
                            <input name="respuesta" type="password" value="" class="form-control" id="" required="required">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input type="checkbox" value="" class="" id="">
                            <label>Quiero mantenerme al día con las novedades de PSE.</label>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input type="checkbox" value="" class="" id="" required="required">
                            <label>Acepto voluntariamente los términos, condiciones y el aviso de Políticas de Privacidad de ACH Colombia S.A. Ver más</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-11 col-lg-11 col-sm-11 col-xs-12">
                        <hr>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="pull-left">
                        <a href="<?php echo base_url();?>/index.php/Controler" id="btn" class="btn btn-primary">Regresar</a>
                    </div>
                    <div class="pull-right">
                        <button type="submit" id="btn" class="btn btn-primary">Seguir con el pago <i class="fa fa-caret-right" aria-hidden="true"></i> </button>
                    </div>
                </div>
            </form>
        </div>
	</section>