$(document).ready(function(){
    $("#reservarB").click(function(){
        
    });
    $("#enviar").click(function(){//validar
        
    });
});
 
function loginFail(){
    //no funciona
    $("#msgOculto").show();
}
function validawr(){// validar, pues eso.
			var nombre = $("#nombre").val();
                    var email = $("#email").val();
                    
                    
                    

                    var expreNombre = new RegExp(/^([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\']+[\s])+([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])+[\s]?([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])?$/);// como minimo debe contener dos palabras(nombre apellido) y ningun numero o simbolo
                    var expreEmail = new RegExp(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/);//casi na, me la han vendido como la best regexp for email, acepta nosecuantos formatos de email
                    var expreNumeros = new RegExp(/^\d{2,3}$/);// de 2 a 3 numeros
                    var expreEdad = new RegExp(/^\d{1,2}$/);// de 1 a 2 numeros, nadie con 3 cifras hace entrenamientos
                    if(expreNombre.test(nombre)){
                        if(expreEmail.test(email)){
                            if(expreNumeros.test(altura)){
                                if(expreNumeros.test(peso)){
                                    if(expreEdad.test(edad)){
                                        var confirm = false;
                                        
                                        if(tipo!=null){//si se a marcado un input radio
                                            Npersona = new Persona(nombre, email, altura, peso, edad, tipo);
                                            alert("Usuario Registrado");
											$("#borrar").css("visibility","visible");//muestra el boton para "cerrar sesion"
                                            $("#saludo").text("Wellcome " + nombre);//saludo de bienvenida
                                            $("#form1").css("display","none");//elimina el formulario de usuario
                                            $("#form2").css("visibility","visible");//muestra el formulario de entrenamientos
                                        }else{
                                            alert("Elige un tipo de clasificacion")
                                        }
                                    }else{
                                        error("edad");
                                    }
                                }else{
                                    error("peso");
                                }
                            }else{
                                error("altura");
                            }
                        }else{
                            error("email");
                        }
                    }else{
                        error("nombre");
                    }
		}
                  
