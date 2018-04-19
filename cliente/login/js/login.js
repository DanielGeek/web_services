$(document).ready(function()
    {
        //validar correo
        $("#form_login").validate({
            
            rules         : {
                userName     : { required : true, email    : true},
                Password1    : { required : true}
            },
            messages      : {
                userName     : "Debe introducir un email válido.",
                Password1    : "Debe introducir una contraseña"
                
            }
        });
        $('#loading-image').hide();//oculta img gif
        //-------------------------------------------first ajax call to submit form1 and send email then receieve response HTML-----//
        console.log('paso validacion de formulario');
        $(document).on('submit', '#form_login', function(event)
        {
        event.preventDefault();
        $('#login').attr('disabled', 'disabled');
        
        $('#loading-image').show();
        var d = $("#form_login").serialize();
        console.log(d);
        $.ajax({
        type: 'POST',
        url: "controllers/login.php",
        data: d,
        dataType: 'html',
        success: function(data)
        {
        if(data == "master" || data == "user")
        {
            $('#view').html('<div class="alert alert-danger text-center">'+data+'</div>');
          
            window.location = "../";
            
        }
        else if(data == "error")
        {
            window.location = "../";
            
        }
        
        console.log('envio la data'+data);
        
        $('#view').html('<div class="alert alert-danger text-center">'+data+'</div>');
        $('#loading-image').hide();
        
        },
        error: function() {
            $('#show').css("display","block").show(300).delay(3000).hide(300);
            $('#view').addClass('alert alert-danger');
            $('#view').html('<strong>oops!</strong>  Algo salio mal....').show(300).delay(3000).hide(300);
            $('#loading-image').hide();
        }
        });
        $('#login').attr('disabled', false);
        return false;
    });
});