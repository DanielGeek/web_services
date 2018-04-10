$(document).ready(function()
    {
        $('#loading-image').hide();//oculta img gif
        //-------------------------------------------first ajax call to submit form1 and send email then receieve response HTML-----//
        $("form#form_producto").submit(function()
        {
        $('#box').slideUp('fast'); //oculta todo el div contenedor del form_producto
        $('#loading-image').show();
        var d = $("#form_producto").serialize();
        $.ajax({type: 'POST',
        url: "getProducto.php",
        data: d,
        dataType: 'html',
        success: function(data)
        {
        // $('#respuesta').html('<div class="alert alert-danger text-center">Ingrese un email</div>').show(300).delay(3000).hide(300);
        $('#producto_show').css("display","block").show(300).delay(3000).hide(300);
        $('#view').html(data);
        $('#loading-image').hide();
        setTimeout(function() {
            $('#box').slideDown('slow');
        },3000);
        },
        error: function() {
        alert("oops! Algo salio mal....");
        }
        });
        return false;
    });
});