<?php

// require_once ('http://localhost/LUIS/amarok/httpdocs/proyectos/webservice/server/models/usuarioModel.php');
// require_once ('/Applications/XAMPP/xamppfiles/htdocs/LUIS/amarok/httpdocs/proyectos/webservice/server/models/usuarioModel.php');

require_once ('../models/usuarioModel.php');


if(isset($_POST["userName"]))
{
    $message = '';
    $Login = new usuarioModel();
    $usuario = $Login->getUser($_POST["userName"]);
    
    //ejecutamos la funcion para buscar el producto y imprimirlo
    if(count($usuario) > 0)
    {
        foreach($usuario as $user)
        {
            if(password_verify($_POST["Password1"], $user["user_password"]))
            {
                if($user['user_status'] == 'Active')
                {
                   
                    $_SESSION['type'] = $user['user_type'];
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['user_name'] = $user['user_name'];
                    //retorno ok para usarlo en login.js y redirigir al index.php
                    
                     echo $_SESSION['type'];
                     return ;
                }
                else
                {
                    $message = "<label>Cuenta desativada, contacta con el administrador</label>";
                    echo $message;
                }
            }
            else
            {
                $message = "<label>Contraseña incorrecta</label>";
                echo $message;
            }
        }
    }
    else
    {
        $message = "<label>No se encontro el Usuario</label>";
        echo $message;
    }
}
else
{
    echo 'Ingrese un usuario';
}
?>