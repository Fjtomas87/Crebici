$(document).ready(function(){
    $("#reservarB").click(function(){
        
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
 

	
                  
