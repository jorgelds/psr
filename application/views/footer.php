<footer class="container">
    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12 col-lg-4">
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 col-lg-4">
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 col-lg-4">
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 col-lg-4">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
            <div class="copi">
                © Copyright <?php echo date('Y'); ?>
            </div>
        </div>
    </div>
</footer>

<script src="<?php echo base_url();?>esset/js/jquery.js"></script>
<script src="<?php echo base_url();?>esset/js/bootstrap.js"></script>
<!--js para el calendario-->
<script src="<?php echo base_url();?>esset/js/moment.min.js"></script>
<script src="<?php echo base_url();?>esset/js/bootstrap-datetimepicker.min.js"></script>

<script type="text/javascript">
    $('#divMiCalendario').datetimepicker({
        format: 'YYYY-MM-DD'
    });
    $('#divMiCalendario').data("DateTimePicker");
    $('#divMiCalendario2').datetimepicker({
        format: 'YYYY-MM-DD'
    });
    $('#divMiCalendario2').data("DateTimePicker");
    $( document ).ready(function() {

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
        $('#telefono').validCampo(' 0123456789');
        $('#saldo').validCampo(' 0123456789.');

        $('#texto').validCampo(' abcdefghijklmnñopqrstuvwxyzáéiou');
        $('#divMiCalendario').validCampo(' 0123456789-');
        $('#formulario').hide();

    });

    $(".btn-pse").click(function () {
        $('#formulario').show();
        $("#email").hide();
    });

    $("#ya").click(function () {
        $('#formulario').hide();
        $("#email").show();
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

    $("#secon_correo").blur(function () {
        if($("#correo").val() != "" && $("#secon_correo").val() != ""){
            if ($("#secon_correo").val() == $("#correo").val()) {
            }
            else {
                $("#secon_correo").val("");
                alert("Disculpe pero los dos correos deben ser iguales");
            }
        }
    });

    $("#correo").blur(function () {
        if($("#secon_correo").val() != ""){
            if($("#secon_correo").val() == $("#correo").val()){
                console.log("Son iguales");
            }
            else{
                $("#secon_correo").val("");
                alert("Disculpe pero los dos correos deben ser iguales");
            }
        }
    });
</script>
</body>
</html>