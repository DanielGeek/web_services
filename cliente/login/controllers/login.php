<?php

// include ('/Applications/XAMPP/xamppfiles/htdocs/LUIS/amarok/httpdocs/proyectos/webservice/server/models/dbModel.php');
include ('/Applications/XAMPP/xamppfiles/htdocs/LUIS/amarok/httpdocs/proyectos/webservice/server/models/dbModel.php');
$bd = new dbModel();

if(isset($_POST["userName"]))
{
    

    if($_POST["userName"])
    {
        
        if(isset($_POST["Password1"]) && $_POST["Password1"])
        {
            // echo password_hash("123", PASSWORD_DEFAULT); return;
            $userName = '';
            $Password1 = '';
            $userName = $_POST["userName"];
            $Password1 = $_POST["Password1"];
            //enviamos la data por url tipo get para enviar el correo desde el webservice y guardar en la bd remota
            $url = "http://localhost/LUIS/amarok/httpdocs/proyectos/webservice/server/controllers/loginController.php";
            // $url = "http://amarokdatacenter.cl/proyectos/webservice/server/controllers/correoRegistro.php?correo=".$correo;
            
            //Se inicia Curl en el servidor especificado
            $ch = curl_init($url);

            //Parametros
            $parametros = "userName=$userName&Password1=$Password1";
            
            //Metodo POST
            curl_setopt($ch, CURLOPT_POST, 1);

            //Agregar parametros
            curl_setopt($ch, CURLOPT_POSTFIELDS, $parametros);

            //maximo tiempo de espera de respuesta del servidor
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);

            //Respuesta del servidor web
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            //Ejecutamos la peticion
            $resultado = curl_exec($ch);

            //Obtener el código de respuesta
            $httpcode = curl_getinfo( $ch, CURLINFO_HTTP_CODE );

            //Aceptar solo respuesta 200 (Ok), 301 (redirección permanente) o 302 (redirección temporal)
            $accepted_response = array( 200, 301, 302 );
            if( in_array( $httpcode, $accepted_response ) ) {
                
                    echo $resultado; return;
            } else {
                echo "Ocurrio un error al conectarse al web service | verfique la url o la conexión con el web service";
                return false;
            }

            //Cerrar
            curl_close($ch);

            
        }
        else
        {
            echo "Ingrese una contraseña";
            return;
        }
    }
    else{
        echo "Ingrese un Usuario";
        return;
    } 
}
else
{
    echo "Ingrese un Usuario";
    return;
}

?>