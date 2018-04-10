
<!-- Esto servirá como nuestro front-end. Te enviaremos un correo electrónico y solo lo seguiremos desde aquí. -->

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Web Services en php</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/webService.js" type="text/javascript"></script>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="container">
    <div id="main">
        <div id="login">
        <h2 >Web Services en php</h2>
        <hr/>
            <form id="form_producto" method="post">
                <div id="box">
                    <label for="producto">Ingrese el producto a buscar: <strong>zapatos, pantalones, camisas</strong></label>
                    <input type="text" placeholder="Producto: " name="producto" required/>
                    <div class="boton">
                        <input type="submit" value="Enviar" name="send" />
                    </div>
                </div>
                
            </form>

            <div id="loading-image" class="text-center">
                <img id="git-image" src="https://media.giphy.com/media/xTk9ZvMnbIiIew7IpW/giphy.gif" alt="Sending....." />
            </div>

            <div id="producto_show">
                <div id="view"></div>
            </div>
        </div>
    </div>
    </div>

</body>
</html>