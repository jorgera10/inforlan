$(buscarDatos());

function buscarDatos(consulta){
    $.ajax({
        url: 'index.php.php',
        type: 'POST',
        dataType: 'html',
        data: {cosulta: consulta},
    })

    .done(function(respuesta){
        $("#datos").html(respuesta);
    })

    .fail(function(){
        console.log("error");
    })
    
}