$(document).ready(function()
    {
        //oculta img gif
        $('#loading-image').hide();
        //muestra/oculta el div con el id collapseTwo
        $('#collapseTwo').collapse('toggle'); 
        //-------------------------------------------first ajax call to submit form1 and send email then receieve response HTML-----//
        $("form#form_producto").submit(function()
        {
        $('#box').slideUp('fast'); //oculta todo el div contenedor del form_producto
        $('#loading-image').show();
        var d = $("#form_producto").serialize();
        $.ajax({type: 'POST',
        url: "client_webservice/controllers/getProducto.php",
        data: d,
        dataType: 'html',
        success: function(data)
        {
        // $('#respuesta').html('<div class="alert alert-danger text-center">Ingrese un email</div>').show(300).delay(3000).hide(300);
        $('#producto_show').css("display","block").show(300).delay(3000).hide(300);
        $('#view').html('<h2 class="alert alert-info">'+data+'</h2>');
        $('#loading-image').hide();
        setTimeout(function() {
            $('#box').slideDown('slow');
        },3000);
        },
        error: function() {
            $('#producto_show').css("display","block").show(300).delay(3000).hide(300);
            $('#view').addClass('alert alert-danger');
            $('#view').html('<strong>oops!</strong> Algo salio mal....').show(300).delay(3000).hide(300);
            $('#loading-image').hide();
            setTimeout(function(){
                $('#box').slideDown('slow');
            },3000);
        }
        });
        return false;
    });
});