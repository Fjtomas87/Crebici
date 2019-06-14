$(document).ready(function(){
    
    //Eventos para validar los inputs de los formularios 
    //////////////////////////////////////////////////////////////////////////////
    $("#nombre").keyup(function(){
        validar("nombre");
        botones();
    });
    $("#apellido1").keyup(function(){
        validar("apellido1");
        botones();
    });
    $("#apellido2").keyup(function(){
        validar("apellido2");
        botones();
    });
    $("#email").keyup(function(){
        validar("email");
        botones();
    });
    $("#dni").keyup(function(){
        validar("dni");
        botones();
    });
    $("#direccion").keyup(function(){
        validar("direccion");
        botones();
    });
    $("#pass1").keyup(function(){
        validar("pass1");
        botones();
    });
    $("#pass2").keyup(function(){
        validar("pass2");
        botones();
    });
    $("#tipoUser").click(function(){
        botones();
    });
    $("#nombre").focusout(function(){
        validar("nombre");
        botones();
    });
    $("#apellido1").focusout(function(){
        validar("apellido1");
        botones();
    });
    $("#apellido2").focusout(function(){
        validar("apellido2");
        botones();
    });
    $("#email").focusout(function(){
        validar("email");
        botones();
    });
    $("#dni").focusout(function(){
        validar("dni");
        botones();
    });
    $("#direccion").focusout(function(){
        validar("direccion");
        botones();
    });
    $("#pass1").focusout(function(){
        validar("pass1");
        botones();
    });
    $("#pass2").focusout(function(){
        validar("pass2");
        botones();
    });
    //////////////////////////////////////////////////////////////////////////////
    
    
    //Funcion para validar el formulario de un usuario para los cambios hecho por el administrador(sin contraseña) 
    //////////////////////////////////////////////////////////////////////////////
    $("#verificar").on("click", function(){
        var v1 = validar("nombre");
        var v2 = validar("apellido1");
        var v3 = validar("apellido2");
        var v4 = validar("email");
        var v5 = validar("dni");
        var v6 = validar("direccion");
        if (v1 && v2 && v3 && v4 && v5 && v6 ) {
            $("#verificar").addClass("d-none");
            $("#modificar").removeClass("d-none");
            $("#eliminar").removeClass("d-none");
        }
            
    });
    //////////////////////////////////////////////////////////////////////////////
    
    
    //Función para validar el formulario de registro o de modificación de datos del ususario
    //////////////////////////////////////////////////////////////////////////////
    $("#verificar2").on("click", function(){
        var v1 = validar("nombre");
        var v2 = validar("apellido1");
        var v3 = validar("apellido2");
        var v4 = validar("email");
        var v5 = validar("pass1");
        var v6 = validar("pass2");
        var v7 = validar("dni");
        var v8 = validar("direccion");
        if (v1 && v2 && v3 && v4 && v5 && v6 && v7 && v8) {
            $("#verificar2").addClass("d-none");
            $("#modificar").removeClass("d-none");
            $("#registrar").removeClass("d-none");
        }
            
    });
    //////////////////////////////////////////////////////////////////////////////
    
    
    //Función para mostrar los datos de usuario
    //////////////////////////////////////////////////////////////////////////////
    $(".botonPerfil").on("click",function(){
        $("#formVista input").css({"color":"black"});//Modifica el formulario por si habia validado algun campo
        $("#formVista *").removeClass("green");
        $("#formVista *").removeClass("red");
        $("#formVista input:not([type='button']):not([type='submit'])").css({"background": "white"});
        var id = $(this).attr("id");
        $("#formVista").addClass("d-none");
        botones();
        $(".msg").addClass("d-none");
        $("#idC").val($("#idC"+id).val());//Rellena el formulario con los datos del usuario seleccionado
        $("#nombre").val($("#nombre"+id).val());
        $("#apellido1").val($("#apellido1"+id).val());
        $("#apellido2").val($("#apellido2"+id).val());
        $("#email").val($("#email"+id).val());
        $("#dni").val($("#dni"+id).val());
        $("#direccion").val($("#direccion"+id).val());
        $("#tipoUser").val($("#tipoUser"+id).val());
        $("#formVista").removeClass("d-none");
        
    });
    //////////////////////////////////////////////////////////////////////////////

    
    //Función para la geolocalización del usuario
    //////////////////////////////////////////////////////////////////////////////
    if ("geolocation" in navigator){//Comprobamos si la geolocalizacion esta activa
        navigator.geolocation.getCurrentPosition(function(position){//utilizamos el metodo getCurrentPosition() para obtener la ubicación actual del usuario
            var latitud = position.coords.latitude;//Guardamos latitud y longitud
            var longitud = position.coords.longitude;
            $.ajax({
                type:'GET',
                url:'https://api.openweathermap.org/data/2.5/weather?lat=' + latitud + '&lon=' + longitud + "&units=metric&appid=9f50a805aa0089a1edd1829a5db029f0",
                dataType: 'json'
            })
                .done(function(data){
                    //console.log(data);
                    temperatura = data.main.temp;
                    humedad = data.main.humidity;
                    ciudad = data.name;
                
                var hora = new Date().getHours();
                var min = new Date().getMinutes();
                $('.hora').html(hora+":"+min);
                $('.temp').html(temperatura + " ºC");
                $('.ciu').html(ciudad);
                $('.hum').html(humedad + "% humedad");
                })
        });
    }else{
        console.log("El navegador no permite la geolocalizacion.");
        $(".geo").addClass("d-none");
    }
    ////////////////////////////////////////////////////////////////////////////// 
});


    //Función que oculta los botones destinados a guardar/cambiar/borrar datos cuando se cambia algun dato de los formualarios
    //////////////////////////////////////////////////////////////////////////////
    function botones(){
        $("#verificar").removeClass("d-none");
        $("#verificar2").removeClass("d-none");
        $("#modificar").addClass("d-none");
        $("#eliminar").addClass("d-none");
        $("#registrar").addClass("d-none");
    }
    //////////////////////////////////////////////////////////////////////////////




//Función encargada de validar los datos recibidos de los inputs
//Dependiendo del nombre del campo lo valida con su expresion regular
//////////////////////////////////////////////////////////////////////////////
function validar(campo){
    if(campo == "nombre" || campo == "apellido1" || campo == "apellido2"){
        var valor = document.getElementById(campo).value;
        if( valor == null || valor.length == 0 || !/^[a-zA-Z\s]*$/.test(valor) ) {
            $('#'+campo).parent().parent().removeClass("green");
            $('#'+campo).parent().parent().addClass("red");
            $('#'+campo).css({"background": "red", "color":"white"});
            $('#'+campo).parent().children('span').text("Campo no valido").removeClass("d-none");
            return false;
        }else{
            $('#'+campo).parent().children('span').addClass("d-none");
            $('#'+campo).parent().parent().addClass("green");
            $('#'+campo).css({"background": "green", "color":"white"});
            $('#'+campo).parent().children('span').text("Campo valido").addClass("d-none");
            return true;
        }
        
        
    }else if(campo == "email"){
        var valor = document.getElementById(campo).value;
        if( valor == null || valor.length == 0 || !/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.test(valor) ) {
            $('#'+campo).parent().parent().removeClass("green");
            $('#'+campo).parent().parent().addClass("red");
            $('#'+campo).css({"background": "red", "color":"white"});
            $('#'+campo).parent().children('span').text("Email no valido").removeClass("d-none");
            return false;
        }else{
            $('#'+campo).parent().parent().addClass("green");
            $('#'+campo).css({"background": "green", "color":"white"});
            $('#'+campo).parent().children('span').addClass("d-none");
            return true;
        }
        
    }else if(campo == "dni"){
        var valor = document.getElementById(campo).value;
        var validChars = 'TRWAGMYFPDXBNJZSQVHLCKET';
        var nifRexp = /^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKET]$/i;
        var nieRexp = /^[XYZ][0-9]{7}[TRWAGMYFPDXBNJZSQVHLCKET]$/i;
        var str = valor.toString().toUpperCase();
        if (!nifRexp.test(str) && !nieRexp.test(str)){
            $('#'+campo).parent().parent().removeClass("green");
            $('#'+campo).parent().parent().addClass("red");
            $('#'+campo).css({"background": "red", "color":"white"});
            $('#'+campo).parent().children('span').text("Dni no valido").removeClass("d-none");
            return false;
        }else{
            var nie = str.replace(/^[X]/, '0').replace(/^[Y]/, '1').replace(/^[Z]/, '2');

            var letra = str.substr(-1);
            var charIndex = parseInt(nie.substr(0, 8)) % 23;

            if (validChars.charAt(charIndex) === letra){
                $('#'+campo).parent().parent().addClass("green");
                $('#'+campo).css({"background": "green", "color":"white"});
                $('#'+campo).parent().children('span').addClass("d-none");
                return true;
            }else{
                $('#'+campo).parent().parent().removeClass("green");    
                $('#'+campo).parent().parent().addClass("red");
                $('#'+campo).css({"background": "red", "color":"white"});
                $('#'+campo).parent().children('span').text("Dni no valido").removeClass("d-none");
                return false;
            }
        }

          
    }else if(campo == "direccion"){
        var valor = document.getElementById(campo).value;
        if( valor == null || valor.length == 0) {
            $('#'+campo).parent().parent().removeClass("green");
            $('#'+campo).parent().parent().addClass("red");
            $('#'+campo).css({"background": "red", "color":"white"});
            $('#'+campo).parent().children('span').text("Campo vacio").removeClass("d-none");
            return false;
        }else{
            $('#'+campo).parent().parent().addClass("green");
            $('#'+campo).css({"background": "green", "color":"white"});
            $('#'+campo).parent().children('span').addClass("d-none");
            return true;
        }
        
    }else if(campo == "pass1"){
        var valor = document.getElementById(campo).value;
        if( valor == null || valor.length < 4 ){
            $('#'+campo).parent().parent().removeClass("green");
            $('#'+campo).parent().parent().addClass("red");
            $('#'+campo).css({"background": "red", "color":"white"});
            $('#'+campo).parent().children('span').text("Contraseña corta").removeClass("d-none");
            return false;
        }else{
            $('#'+campo).parent().parent().addClass("green");
            $('#'+campo).css({"background": "green", "color":"white"});
            $('#'+campo).parent().children('span').addClass("d-none");
            return true;
        }
    }else if(campo == "pass2"){
        var pass1 = document.getElementById("pass1").value; 
        var valor = document.getElementById(campo).value;
        if(valor == null || valor.length < 4){
            $('#'+campo).parent().parent().removeClass("green");
            $('#'+campo).parent().parent().addClass("red");
            $('#'+campo).css({"background": "red", "color":"white"});
            $('#'+campo).parent().children('span').text("Contraseña corta").removeClass("d-none");
            return false;
        }else if(valor != pass1){
            $('#'+campo).parent().parent().removeClass("green");
            $('#'+campo).parent().parent().addClass("red");
            $('#'+campo).css({"background": "red", "color":"white"});
            $('#'+campo).parent().children('span').text("Contraseñas no coinciden").removeClass("d-none");
        }else{
            
            $('#'+campo).parent().parent().addClass("green");
            $('#'+campo).css({"background": "green", "color":"white"});
            $('#'+campo).parent().children('span').addClass("d-none");
            return true;
        }
    }
}
//////////////////////////////////////////////////////////////////////////////


//Función para alertar de que el email ya esta en uso
//////////////////////////////////////////////////////////////////////////////
function emailRepetido(){
    alert("Ese Email ya esta en uso.")
}
//////////////////////////////////////////////////////////////////////////////