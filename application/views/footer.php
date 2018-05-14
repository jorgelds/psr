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

    $("#call").click(function () {
        trazco = $('#trazco').val();
        fininstcode = $('#fininstcode').val();
        entcode = $('#entcode').val();
        amount = $('#amount').val();
        tax = $('#tax').val();
        tki = $('#tki').val();
        tsta = $('select#tsta').val();
        auto = $('#auto').val();
        email = $('#email').val();
        $.ajax({
            type:'post',
            url: '<?php echo base_url(); ?>index.php/Controler/createTransaction',
            data: {
                trazco : trazco,
                fininstcode : fininstcode,
                entcode : entcode,
                amount : amount,
                tax : tax,
                tki : tki,
                tsta : tsta,
                auto : auto,
                email : email
            },
            success: function( respuesta ){
                data = JSON.parse(respuesta);
                $("#mensaje").html("");
                $("#trazco").val("");
                mensaje = 'Call Return: '+data['returnCode']+' - Transaction State: '+data['transactionState'];
                $("#mensaje").append(mensaje);
                $("#trazco").val(data['trazabilityCode']);
            }
        });
    });
</script>
</body>
</html>