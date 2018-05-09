
<!DOCTYPE html>
<html>
  <head>
    <title>Login - Responsive Admin Dashboard</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content="Login - Responsive Admin Dashboard" />
    <meta name="keywords" content="Notifications, Admin, Dashboard, Bootstrap3, Sass, transform, CSS3, HTML5, Web design, UI Design, Responsive Dashboard, Responsive Admin, Admin Theme, Best Admin UI, Bootstrap Theme, Wrapbootstrap, Bootstrap, bootstrap.gallery" />
    <meta name="author" content="Bootstrap Gallery" />
    <script src="js/jquery.js"></script>
    <link rel="shortcut icon" href="img/favicon.ico">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/new.css" rel="stylesheet">
    <!-- Important. For Theming change primary-color variable in main.css  -->

    <link href="fonts/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-40304444-1', 'iamsrinu.com');
      ga('send', 'pageview');

    </script>
  </head>

  <body>

    <!-- Main Container start -->
    <div class="dashboard-container">

      <div class="container">

        <!-- Row Start -->
        <div class="row gutter">
          <div class="col-lg-4 col-md-4 col-md-offset-4">
            <div class="sign-in-container">
              <form class="login-wrapper" id="form_login" method="post">
                <div class="header">
                  <div class="row gutter">
                    <div class="col-md-12 col-lg-12">
                      <h3>Login<img src="img/logo.png" alt="Logo" class="pull-right"></h3>
                      <p>Rellene el siguiente formulario para iniciar sesión..</p>
                    </div>
                  </div>
                </div>
                <div class="content">
                  <div class="form-group">
                    <label for="userName">Nombre de usuario</label>
                    <input type="text" class="form-control" id="userName" name="userName" placeholder="Nombre">
                  </div>
                  <div class="form-group">
                    <label for="Password1">Contraseña de usuario</label>
                    <input type="password" class="form-control" id="Password1" name="Password1" placeholder="Contraseña">
                  </div>
                </div>
                <div class="actions">
                  <input class="btn btn-danger" id="login" name="login" type="submit" value="Entrar">
                  <input type="hidden" name="login">
                  <a class="link" href="#">Olvido la contraseña?</a>
                  <div class="clearfix"></div>
                </div>
                <div id="show">
                  <div id="view" ></div>
                </div>
                <!-- <div id="loading-image" class="text-center loading-image">
                  <img id="git-image" class="git-image" src="https://media.giphy.com/media/xTk9ZvMnbIiIew7IpW/giphy.gif" alt="Sending....." />
                </div> -->
               <br>
              </form>
            </div>
             <!-- inicio Mensaje oculto para errores  -->
          
          <!-- inicio Mensaje oculto para errores  -->
          </div>
        
        <!-- Row End -->
        
      </div>
    </div>
    <!-- Main Container end -->

   
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
    <script src="js/controllers/controllerLogin/controllerLogin.js"></script>
    
  </body>
</html>