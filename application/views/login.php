<!DOCTYPE html>

<html>
<head>
    <title>Formulario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!--Css para el calendario-->
    <link href="<?php echo base_url();?>esset/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

</head>
<body>
<div class="container">

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
                Ingresar
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
            <form method="post" enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url();?>index.php/Usuario/validar">
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
                    $nombre = $data['nombre'];
                    $apellido = $data['apellido'];
                    $cedula = $data['cedula'];
                    $fecha = $data['fecha'];
                    $usuario = $data['usus'];
                    $correo = $data['corr'];
                    $pregunta = $data['pregu'];
                    $respuesta = $data['resp'];
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
                    $nombre = $data['nombre'];
                    $apellido = $data['apellido'];
                    $cedula = $data['cedula'];
                    $fecha = $data['fecha'];
                    $usuario = $data['usus'];
                    $correo = $data['corr'];
                    $pregunta = $data['pregu'];
                    $respuesta = $data['resp'];
                }
                ?>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group" id="ce">
                                        <label for="cedula">Usuario</label>
                                        <input type="text" class="form-control" onkeyup="usr(this.value,3);" id="usuario" name="usuario" placeholder="Ej:usuario" required="required" autocomplete="off"/>
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
                                    <div class="form-group" id="ce">
                                        <label for="clave">Contraseña</label>
                                        <input type="text" class="form-control" onkeyup="usr(this.value,3);" id="clave" name="clave" placeholder="******" required="required" autocomplete="off"/>
                                        <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true" id="ic5" style="display: none;"></span>
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!--js para el calendario-->
<script src="<?php echo base_url();?>esset/js/moment.min.js"></script>
<script src="<?php echo base_url();?>esset/js/bootstrap-datetimepicker.min.js"></script>

<script type="text/javascript">
    $('#divMiCalendario').datetimepicker({
        format: 'YYYY-MM-DD'
    });
    $('#divMiCalendario').data("DateTimePicker");
    $( document ).ready(function() {
        if (<?php echo $mensaje; ?> == 0 || <?php echo $mensaje; ?> == -1 || <?php echo $mensaje; ?> == 2 || <?php echo $mensaje; ?> == 1) {
            $('#alertsito').fadeOut(10000, function(){
                $(this).remove();
            });
        }
    });

    (function(a){a.fn.validCampo=function(b){
            a(this).on({
                keypress:function(a){
                    var c=a.which,d=a.keyCode,e=String.fromCharCode(c).toLowerCase(),f=b;(-1!=f.indexOf(e)||9==d||37!=c&&37==d||39==d&&39!=c||8==d||46==d&&46!=c)&&161!=c||a.preventDefault()
                }
            })
        }}
    )(jQuery);
    $(document).on('ready',function(){
        //Para escribir solo letras
        $('#cedula').validCampo(' 0123456789');

        $('#texto').validCampo(' abcdefghijklmnñopqrstuvwxyzáéiou');
        $('#divMiCalendario').validCampo(' 0123456789-');
        $('#ic').hide();
        $('#ic2').hide();

    });

    function contr(x) {
        pas1 = $('#pas').val();
        if (pas1 == x) {
            $("#con").attr("class", "form-group has-success has-feedback");
            $("#ic").attr("class", "glyphicon glyphicon-ok form-control-feedback");
            $("#ic").show();
            $("#con2").attr("class", "form-group has-success has-feedback");
            $("#ic2").attr("class", "glyphicon glyphicon-ok form-control-feedback");
            $("#btn").attr("class", "btn btn-primary");
            $("#ic2").show();
        }
        else {
            $("#con").attr("class", "form-group has-error has-feedback");
            $("#ic").attr("class", "glyphicon glyphicon-remove form-control-feedback");
            $("#ic").show();
            $("#con2").attr("class", "form-group has-error has-feedback");
            $("#ic2").attr("class", "glyphicon glyphicon-remove form-control-feedback");
            $("#btn").attr("class", "btn btn-primary disabled");
            $("#ic2").show();
        }
    }

    function usr(x,y) {
        if (y == 1) {
            $.ajax({
                type:'post',
                url: '<?php echo base_url(); ?>index.php/Controler/ver',
                data: {usua : x, categoria : y},
                success: function( respuesta ){
                    //console.log(respuesta);
                    if (respuesta != 1) {
                        $("#us").attr("class", "form-group has-success has-feedback");
                        $("#ic3").attr("class", "glyphicon glyphicon-ok form-control-feedback");
                        $("#btn").attr("class", "btn btn-primary");
                        $("#ic3").show();
                    }
                    else {
                        $("#us").attr("class", "form-group has-error has-feedback");
                        $("#ic3").attr("class", "glyphicon glyphicon-remove form-control-feedback");
                        $("#btn").attr("class", "btn btn-primary disabled");
                        $("#ic3").show();
                    }
                }
            });
        }
        if (y == 2) {
            $.ajax({
                type:'post',
                url: '<?php echo base_url(); ?>index.php/Controler/ver',
                data: {usua : x, categoria : y},
                success: function( respuesta ){
                    //console.log(respuesta);
                    if (respuesta != 1) {
                        $("#co").attr("class", "form-group has-success has-feedback");
                        $("#ic4").attr("class", "glyphicon glyphicon-ok form-control-feedback");
                        $("#btn").attr("class", "btn btn-primary");
                        $("#ic4").show();
                    }
                    else {
                        $("#co").attr("class", "form-group has-error has-feedback");
                        $("#ic4").attr("class", "glyphicon glyphicon-remove form-control-feedback");
                        $("#btn").attr("class", "btn btn-primary disabled");
                        $("#ic4").show();
                    }
                }
            });
        }
        if (y == 3) {
            $.ajax({
                type:'post',
                url: '<?php echo base_url(); ?>index.php/Controler/ver',
                data: {usua : x, categoria : y},
                success: function( respuesta ){
                    //console.log(respuesta);
                    if (respuesta != 1) {
                        $("#ce").attr("class", "form-group has-success has-feedback");
                        $("#ic5").attr("class", "glyphicon glyphicon-ok form-control-feedback");
                        $("#btn").attr("class", "btn btn-primary");
                        $("#ic5").show();
                    }
                    else {
                        $("#ce").attr("class", "form-group has-error has-feedback");
                        $("#ic5").attr("class", "glyphicon glyphicon-remove form-control-feedback");
                        $("#btn").attr("class", "btn btn-primary disabled");
                        $("#ic5").show();
                    }
                }
            });
        }
    }

    function soloLetras(e) {
        key = e.keyCode || e.which;
        tecla = String.fromCharCode(key).toString();
        letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";//Se define todo el abecedario que se quiere que se muestre.
        especiales = [8, 37, 39, 46, 6]; //Es la validación del KeyCodes, que teclas recibe el campo de texto.

        tecla_especial = false
        for(var i in especiales) {
            if(key == especiales[i]) {
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla) == -1 && !tecla_especial)
            return false;
    }

    function validar(obj) {
        patron = /^\d{4}\-\d{2}\-\d{2}$/
        if (patron.test(obj.value) == true) {
            $("#ce6").attr("class", "form-group has-success has-feedback");
            $("#ic6").attr("class", "glyphicon glyphicon-ok form-control-feedback");
            $("#btn").attr("class", "btn btn-primary");
            $("#ic6").show();
        }
        else {
            $("#ce6").attr("class", "form-group has-error has-feedback");
            $("#ic6").attr("class", "glyphicon glyphicon-remove form-control-feedback");
            $("#btn").attr("class", "btn btn-primary disabled");
            $("#ic6").show();
        }
    }
</script>
</body>
</html>