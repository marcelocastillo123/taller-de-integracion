$(document).ready(function () {
    
    /*$.post("phps/bc_anuncio.php",function(datos){
        $("#div_result").html(datos);
    });*/
    
    $("#ipt_search").keyup(function(){
        var buscado = $(this).val();
        buscado = buscado.toUpperCase();
        $.each($(".divs_items"),function(){
            var cadena = $(this).attr("title");
            cadena = cadena.toUpperCase();
            if(cadena.indexOf(buscado)===-1){
                $(this).hide(500);
            } else{
                $(this).show(500);
            }
        });
    });
}) ;      