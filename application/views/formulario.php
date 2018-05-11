	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Formulario
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				</h3>
			</div>
			<div class="panel-body">
				<?php 
					if ($mensaje == 1) {
						echo '
							<div class="alert alert-danger alert-dismissible" role="alert" id="alertsito">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<strong>Alerta!</strong> '.$error.'
								</div> 
							';
					}

				?>
				<form method="post" enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url();?>index.php/Controler/registrar">
					<?php
						if ($mensaje == 100 AND $error!="") {
							echo '
							<div class="alert alert-danger alert-dismissible" role="alert" id="alertsito">							
									<strong>Alerta!</strong> '.$error.'
								</div> 
							';
							$nombre = "";
							$apellido = "";
							$cedula = "";
							$fecha = "";
							$usuario = "";
							$correo = "";
							$pregunta = "";
							$respuesta = "";
						}
						if ($mensaje == 0) {
							echo
								'
								<div class="alert alert-success alert-dismissible" role="alert" id="alertsito">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<strong>Alerta!</strong> Usuario creado satisfactoriamente.
								</div>
								'
							;
							$nombre = "";
							$apellido = "";
							$cedula = "";
							$fecha = "";
							$usuario = "";
							$correo = "";
							$pregunta = "";
							$respuesta = "";
						}
						if ($mensaje == 1) {
							echo
								'
								<div class="alert alert-danger alert-dismissible" role="alert" id="alertsito">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<strong>Alerta!</strong> Disculpe intentelo de nuevo mas tarde.
								</div>
								'
							;
							$nombre = "";
							$apellido = "";
							$cedula = "";
							$fecha = "";
							$usuario = "";
							$correo = "";
							$pregunta = "";
							$respuesta = "";
						}
						if ($mensaje == 2) {
							echo
								'
								<div class="alert alert-warning alert-dismissible" role="alert" id="alertsito">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<strong>Alerta!</strong> Las contraseñas no coincide intententelo de nuevo.
								</div>
								'
							;
							$nombre = "";
							$apellido = "";
							$cedula = "";
							$fecha = "";
							$usuario = "";
							$correo = "";
							$pregunta = "";
							$respuesta = "";
						}
						if ($mensaje == -1) {
							echo
								'
								<div class="alert alert-warning alert-dismissible" role="alert" id="alertsito">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<strong>Alerta!</strong> Usuario ya registrado.
								</div>
								'
							;
							$nombre = "";
							$apellido = "";
							$cedula = "";
							$fecha = "";
							$usuario = "";
							$correo = "";
							$pregunta = "";
							$respuesta = "";
						}
					?>
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="container">
								<div class="row">
									<div class="col-md-3">
										<div class="form-group" id="ce">
											<label for="cedula">Cedula</label>
											<input type="text" class="form-control" onkeyup="usr(this.value,3);" id="cedula" name="cedula" maxlength="8" placeholder="Ej:12345678" required="required" autocomplete="off"/>
											<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true" id="ic5" style="display: none;"></span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-11">
										<hr></hr>
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label for="apellido">Imagen</label>
											<input type="file" class="" id="" name="userfile"/>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-3">
										<br/>
										<button type="submit" id="btn" class="btn btn-primary">Acceso</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="panel-footer">
			 	Panel footer
			</div>
		</div>	
	</div>