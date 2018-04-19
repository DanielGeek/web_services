$(document).ready(function()
    {
        //validar correo
        $("#form_correo").validate({
            
            rules         : {
                correo     : { required : true, email    : true}
            },
            messages      : {
                correo     : "Debe introducir un email válido.",
                
            }
        });
        $('#loading-correo-image').hide();//oculta img gif
        //-------------------------------------------first ajax call to submit form1 and send email then receieve response HTML-----//
        
        $(document).on('submit', '#form_correo', function(event)
        {
        event.preventDefault();
        $('#btn_submit').attr('disabled', 'disabled');
        $('#box-correo').slideUp('fast'); //oculta todo el div contenedor del form_correo
        $('#loading-correo-image').show();
        var d = $("#form_correo").serialize();
        $.ajax({
        type: 'POST',
        url: "correo_webservice/controllers/insertCorreo.php",
        data: d,
        dataType: 'html',
        success: function(data)
        {
        // $('#respuesta').html('<div class="alert alert-danger text-center">Ingrese un email</div>').show(300).delay(3000).hide(300);
        $('#correo_show').css("display","block").show(300).delay(3000).hide(300);
        $('#view-correo').html('<h2 class="alert alert-info">'+data+'</h2>');
        $('#loading-correo-image').hide();
        setTimeout(function() {
            $('#box-correo').slideDown('slow');
        },3000);
        },
        error: function() {
            $('#correo_show').css("display","block").show(300).delay(3000).hide(300);
            $('#view-correo').addClass('alert alert-danger');
            $('#view-correo').html('<strong>oops!</strong>  Algo salio mal....').show(300).delay(3000).hide(300);
            $('#loading-correo-image').hide();
            setTimeout(function() {
                $('#box-correo').slideDown('slow');
            },3000);
        }
        });
        $('#btn_submit').attr('disabled', false);
        return false;
    });
});