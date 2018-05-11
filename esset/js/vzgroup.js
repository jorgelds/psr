function getAbsolutePath() {
    var loc = window.location;
    var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1);
    return loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length));
}

//var url = 'http://localhost/recibos_vzgroup/index.php/';
var url = 'http://cambios.vzgroup.com.ve/recibos_vzgroup/index.php/';

$("#torneo_diciplina").change(
	function(){
		$('#equipos').html("");
		$.ajax({
            type:'post',
            url: url+'Torneos/consultar_equipos',
            data: {diciplina : $("#torneo_diciplina").val()},
            success: function( respuesta ){  
                $('#equipos').append(respuesta); 
                $('#alertsito').fadeOut(5000, function(){
                     $(this).remove();
                });	
    		}
        });
	}
);

$( document ).ready(function() {

});

$("#modificar").click(function(){
	$("form#diciplina_modificar").css("display","block");
	$("#contenido_diciplina").css("display", "none");
	$("#modificar").css("display", "none");
});

function par(x){
    if((parseInt(x)%2) == 0){
        $("#equi_can").attr("class", "form-group has-success has-feedback");
        $("#ic43").attr("class", "glyphicon glyphicon-ok form-control-feedback");
        $("#btn").attr("class", "btn btn-primary");
        $("#ic43").show();
    }
    else{
        $("#equi_can").attr("class", "form-group has-error has-feedback");
        $("#ic43").attr("class", "glyphicon glyphicon-remove form-control-feedback");
        $("#btn").attr("class", "btn btn-primary disabled");
        $("#ic43").show();
    }
}

$("input#contar_equ").change(function(){
    
});

$("#cedula").blur(function() {
    $("#nombre").val("");
    $("#apellido").val("");
    $("#correo").val("");
    $("#id_usuario").html("");
    $.ajax({
        type:'post',
        url: url+'Usuario/consultar_usuario',
        data: {cedula : $("#cedula").val()},
        success: function( respuesta ){
            console.log(respuesta);
            data = JSON.parse(respuesta);

            $("#nombre").val(data.nombre);
            $("#apellido").val(data.apellido);
            $("#correo").val(data.correo);
            $("#telefono").val(data.telefono);
            $("#id_usuario").append('<input type="hidden" value="'+data.id_usuario+'" name="iuser">');
        }
    });
});

$("#tipo_pago").change(function () {
    valor = this.value;
    var campo = '' +
        '<div class="col-md-3">' +
            '<div class="form-group">' +
                '<label for="n_transferencia">Número de control</label>' +
                '<input type="text" name="n_transferencia" id="n_transferencia" class="form-control" value="" autocomplete="off" required="required">' +
            '</div>' +
        '</div>';

    if(valor == "Transferencia"){
        $("#n_transferencia").html("");
        $("#n_transferencia").append(campo);
        $("[id*=banco_atransferir]").css("display", "block");
    }
    else{
        $("#n_transferencia").html("");
        $("[id*=banco_atransferir]").css("display", "none");
    }
});

$("#tipo_transaccion").change(function () {
    valor = this.value;
    if(valor == "Compra"){
        console.log(    $("#beneficiarios").length);


        $("[id*=beneficiarios]").css("display", "none");
        $("[id*=beneficiarios] input").removeAttr("required");
        $("[id*=beneficiarios] select").removeAttr("required");
    }
    else{
        $("[id*=beneficiarios]").css("display", "block");
        $("[id*=beneficiarios] input").attr("required", "required");
        $("[id*=beneficiarios] select").attr("required", "required");
    }
});

function detalle_transacci(id){
    $("#detalle").html("")
    $.ajax({
        type:'post',
        url: url+'Transacciones/consultar_detalle',
        data: {id_detalle : id},
        success: function( respuesta ){
            console.log(respuesta);
            $("#detalle").append(respuesta)
        }
    });
}
