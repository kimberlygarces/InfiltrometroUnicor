// FUNCION PARA MOSTRAR LOS DATOS JSON EN LA TABLA 
$(function(){
    tabla();
});

function tabla(){
   $.ajax({
      url: 'controller/datos.php',
      type: 'POST',
      success: function(res){
        var js= JSON.parse(res);
        var tabla;
        
    for (var i = 0; i < js.length; i++){
        tabla+='<tr><td>'+js[i].N_Dato+
                //'</td><td>'+js[i].Id_Prueba+
                '</td><td>'+js[i].tiempo+
                '</td><td>'+js[i].distancia+'</td></tr>';
    }
    $('#tbody').html(tabla);

    }
});
}


