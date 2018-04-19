<?php

//clase para hacer instancia al metodo de registro
require_once('../models/usuarioModel.php');

require("../lib/class.phpmailer.php"); 
require("../lib/class.smtp.php"); 

$email = '';
$mensaje = '';


$email = $_GET["correo"];

$email_clear = clean_text($email);
$ip = $_SERVER["REMOTE_ADDR"];

if(isset($email_clear) && $email_clear != '' && check_email($email_clear))
{ 
//    $path = 'upload/' . $_FILES["resume"]["name"];
//    move_uploaded_file($_FILES["resume"]["tmp_name"], $path);
    $usuario = new usuarioModel();
    $reg_usuario = $usuario->registro($email_clear);
    if($reg_usuario != 0)
    {
        $message = '
        <h3 align="center">Información del Correo</h3>
        <table border="1" width="100%" cellpadding="5" cellspacing="5">
            
            <tr>
                <td style="padding-left:10px;" width="30%">Email</td>
                <td style="padding-left:10px;" width="70%">'.$email_clear.'</td>
            </tr>
            
            <tr>
                <td style="padding-left:10px;" width="30%">Ip</td>
                <td style="padding-left:10px;" width="70%">'.$ip.'</td>
            </tr>
        </table>
    ';

        $message_muestra = '
            <h3 align="center">Información del Cliente</h3>
            <table border="1" width="100%" cellpadding="5" cellspacing="5">
                <tr>
                    <td style="padding-left:10px;" width="30%">Email</td>
                    <td style="padding-left:10px;" width="70%">'.$email_clear.'</td>
                </tr>
            </table>
        ';


        $mail = new PHPMailer();
        $mail->IsSMTP();	                            //Sets Mailer to send message using SMTP
        $mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
        $mail->Port = '587';							//Sets the default SMTP server port	
        $mail->SMTPSecure = 'tls';		                //Definmos la seguridad como TLS
        $mail->SMTPAuth = true;                         //Usar autenticación SMTP
        $mail->SMTPOptions = array(
            'ssl' => array('verify_peer' => false,'verify_peer_name' => false,'allow_self_signed' => true)
        );//opciones para "saltarse" comprobación de certificados (hace posible del envío desde localhost)
        //Esto es para activar el modo depuración. En entorno de pruebas lo mejor es 2, en producción siempre 0
        // 0 = off (producción)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug  = 0;
        $mail->CharSet = 'UTF-8';
        $mail->Host = 'smtp.gmail.com';
        //Sets the SMTP hosts of your Email hosting, this for gmail	
        //El puerto será el 465 ya que usamos encriptación TLS
        //El puerto 587 es soportado por la mayoría de los servidores SMTP y es útil para conexiones no encriptadas (sin TLS)

        
        $mail->Username = 'pruebaamarok@gmail.com';		//Sets SMTP username
        $mail->Password = 'amarok123';					//Sets SMTP password
        $mail->setFrom('no-reply@amarokdatacenter.cl', 'Datos del proyecto');
        $mail->From = $email_clear;					//Sets the From email address for the message
        $mail->FromName = 'Daniel';				//Sets the From name of the message
        $mail->AddAddress('pruebaamarok@gmail.com', 'amarokdatacenter.cl');		//Adds a "To" address
        //Para enviar un correo formateado en HTML lo cargamos con la siguiente función. Si no, puedes meterle directamente una cadena de texto.
        $mail->MsgHTML($message);
        //Y por si nos bloquean el contenido HTML (algunos correos lo hacen por seguridad) una versión alternativa en texto plano (también será válida para lectores de pantalla)
        $mail->AltBody = $message;
        $mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
        $mail->IsHTML(true);							//Sets message type to HTML
    //    	$mail->AddAttachment($path);					//Adds an attachment from a path on the filesystem
        $mail->Subject = 'Prueba de envío al web service';				//Sets the Subject of the message
        $mail->Body = $message;							//An HTML or plain text message body
        if($mail->Send())								//Send an Email. Return true on success or false on error
        {
            
            echo $message = '<div class="alert alert-success text-center">Email guardado y enviado Exitosamente.</div><hr><div class="alert alert-info">'.$message_muestra.'</div>';
            // echo $json;
            // unlink($path);
        }
        else
        {
            echo $message = '<div class="alert alert-danger text-center">Error al intentar enviar el email</div>';
        }
    }
    else{
        echo $message = '<div class="alert alert-danger text-center">Error al intentar guardar en la base de datis</div>';
    }
}
else
{
    echo $message = '<div class="alert alert-danger text-center">Escriba un Email Valido</div>';
}




// funcion para limpiar caracteres especiales
function clean_text($string)
{
	$string = trim($string);
	$string = stripslashes($string);
	$string = htmlspecialchars($string);
	return $string;
}

//funciona para check si el email es valido y los dns son correctos cuando no es gmail
function check_email($email) {  
    if(preg_match('/^\w[-.\w]*@(\w[-._\w]*\.[a-zA-Z]{2,}.*)$/', $email, $matches))  
    {  
        if(function_exists('checkdnsrr'))  
        {  
            if(checkdnsrr($matches[1] . '.', 'MX')) return true;  
            if(checkdnsrr($matches[1] . '.', 'A')) return true;  
        }else{  
            if(!empty($hostName))  
            {  
                if( $recType == '' ) $recType = "MX";  
                exec("nslookup -type=$recType $hostName", $result);  
                foreach ($result as $line)  
                {  
                    if(eregi("^$hostName",$line))  
                    {  
                        return true;  
                    }  
                }  
                return false;  
            }  
            return false;  
        }  
    }  
    return false;  
  }

?>