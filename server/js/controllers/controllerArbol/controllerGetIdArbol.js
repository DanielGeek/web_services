
$(document).ready(function(){

    getIdArbol();
    // obtener id y nombre del arbol ivr
    function getIdArbol(){
        $.get("controllers/controllerArbol/controllerGetIdArbol.php", function(data){
        
        if(data){
            $("#ivr_arbol").html(data);
            
        }
        else
        {
            $('#ivr_arbol').addClass('alert alert-danger');
            $('#ivr_arbol').html('Ocurrio un error con el id del arbol ivr').show(2000).delay(3000).hide(5000);
        }
        });
    }

});