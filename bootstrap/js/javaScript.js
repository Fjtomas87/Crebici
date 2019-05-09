$(document).ready(function(){
    $("#reservarB").click(function(){
        
    });
    
    $(".botondeprueba").on("click", function(e){
        var x = "prueba X";
        e.preventDefault();
        $.ajax({
            data: {heLlamado: x},
            url: "../../index.php",
            method: "POST",
            cache: false,
            beforeSend: function(){
                $(".divEjemplo").html("Cargando...");
            },
            success: function(response){
                $(".divEjemplo").html(response);
            },
            error: function(response){
                
            }
        });
    });
   
});
 
function loginFail(){
    //no funciona
    $("#msgOculto").show();
}

                  
