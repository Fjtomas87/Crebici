$(document).ready(function(){
    
    
    $("#nombre").keyup(function(){
        validar("nombre");
    });
    $("#apellido1").keyup(function(){
        validar("apellido1");
    });
    $("#apellido2").keyup(function(){
        validar("apellido2");
    });
    $("#email").keyup(function(){
        validar("email");
    });
    $("#dni").keyup(function(){
        validar("dni");
    });
    $("#direccion").keyup(function(){
        validar("direccion");
    });
  
   
    
    
    
    $(".botonPerfil").on("click",function(){
        
        var id = $(this).attr("id");
        //console.log(id);
        $(".perfil").addClass("d-none")
        $("#form"+id).removeClass("d-none");
        
    });
    
    
    $(".botondeprueba").on("click", function(e){
        var x = "prueba X";
        e.preventDefault();
        $.ajax({
            data: {heLlamado: x},
            url: "../../index.php",
            type: "POST",
            cache: false,
            beforeSend: function(){
                $(".divEjemplo").html("Cargandooo...");
            },
            success: function(response){
                $(".divEjemplo").html(response);
            },
            error: function(response){
                
            }
        });
    });

    if ("geolocation" in navigator){//Comprobamos si la geolocalizacion esta activa
        navigator.geolocation.getCurrentPosition(function(position){//utilizamos el metodo getCurrentPosition() para obtener la ubicación actual del usuario
            var latitud = position.coords.latitude;//Guardamos latitud y longitud
            var longitud = position.coords.longitude;
            $.ajax({
                type:'GET',
                url:'http://api.openweathermap.org/data/2.5/weather?lat=' + latitud + '&lon=' + longitud + "&units=metric&appid=9f50a805aa0089a1edd1829a5db029f0",
                dataType: 'json'
            })
                .done(function(data){
                    //console.log(data);
                    temperatura = data.main.temp;
                    humedad = data.main.humidity;
                    ciudad = data.name;
                $('.temp').html(temperatura + " ºC");
                $('.ciu').html(ciudad);
                $('.hum').html(humedad + "% humedad");
                    
                })
            
        });
        
        
        
    }else{
        console.log("Browser doesn't support geolocation!");
    }
    
 
    
});
 
function validar(campo){
    if(campo == "nombre" || campo == "apellido1" || campo == "apellido2"){
        var valor = document.getElementById(campo).value;
        if( valor == null || valor.length == 0 || !/^[a-zA-Z\s]*$/.test(valor) ) {
            $('#'+campo).parent().parent().css("color", "red");
            $('#'+campo).css({"background": "red", "color":"white"});
            $('#'+campo).parent().children('span').text("Campo no valido").show();
            return false;
        }else{
            $('#'+campo).parent().parent().css("color", "green");
            $('#'+campo).css({"background": "green", "color":"white"});
            $('#'+campo).parent().children('span').hide();
            return true;
        }
        
        
    }else if(campo == "email"){
        var valor = document.getElementById(campo).value;
        if( valor == null || valor.length == 0 || !/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.test(valor) ) {
            $('#'+campo).parent().parent().css("color", "red");
            $('#'+campo).css({"background": "red", "color":"white"});
            $('#'+campo).parent().children('span').text("Email no valido").show();
            return false;
        }else{
            $('#'+campo).parent().parent().css("color", "green");
            $('#'+campo).css({"background": "green", "color":"white"});
            $('#'+campo).parent().children('span').hide();
            return true;
        }
        
    }else if(campo == "dni"){
        var valor = document.getElementById(campo).value;
        var validChars = 'TRWAGMYFPDXBNJZSQVHLCKET';
        var nifRexp = /^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKET]$/i;
        var nieRexp = /^[XYZ][0-9]{7}[TRWAGMYFPDXBNJZSQVHLCKET]$/i;
        var str = valor.toString().toUpperCase();
        if (!nifRexp.test(str) && !nieRexp.test(str)){
            $('#'+campo).parent().parent().css("color", "red");
            $('#'+campo).css({"background": "red", "color":"white"});
            $('#'+campo).parent().children('span').text("Dni no valido").show();
            return false;
        }else{
            var nie = str.replace(/^[X]/, '0').replace(/^[Y]/, '1').replace(/^[Z]/, '2');

            var letra = str.substr(-1);
            var charIndex = parseInt(nie.substr(0, 8)) % 23;

            if (validChars.charAt(charIndex) === letra){
                $('#'+campo).parent().parent().css("color", "green");
                $('#'+campo).css({"background": "green", "color":"white"});
                $('#'+campo).parent().children('span').hide();
                return true;
            }else{
                $('#'+campo).parent().parent().css("color", "red");
                $('#'+campo).css({"background": "red", "color":"white"});
                $('#'+campo).parent().children('span').text("Dni no valido").show();
                return false;
            }
        }

          
    }else if(campo == "direccion"){
        var valor = document.getElementById(campo).value;
        if( valor == null || valor.length == 0) {
            $('#'+campo).parent().parent().css("color", "red");
            $('#'+campo).css({"background": "red", "color":"white"});
            $('#'+campo).parent().children('span').text("Campo no valido").show();
            return false;
        }else{
            $('#'+campo).parent().parent().css("color", "green");
            $('#'+campo).css({"background": "green", "color":"white"});
            $('#'+campo).parent().children('span').hide();
            return true;
        }
        
    }
	
}
