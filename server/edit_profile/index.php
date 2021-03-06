<?php



//index.php

// include('../db/database_connection.php');
include('../db/modelUsuario.php');

$login = new modelUsuario();

//inicio una session
// $login->getSessionStart();

// echo $_SESSION['type'];
// echo $_SESSION['id'];
// echo $_SESSION['user_name'];


if(!isset($_SESSION["type"]))
{
 header("location:../login.php");
}


?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login - Responsive Admin Dashboard</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content="Login - Responsive Admin Dashboard" />
    <meta name="keywords" content="Notifications, Admin, Dashboard, Bootstrap3, Sass, transform, CSS3, HTML5, Web design, UI Design, Responsive Dashboard, Responsive Admin, Admin Theme, Best Admin UI, Bootstrap Theme, Wrapbootstrap, Bootstrap, bootstrap.gallery" />
    <meta name="author" content="Bootstrap Gallery" />
    <base href="../">
    <link rel="shortcut icon" href="img/favicon.ico">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">

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

    <!-- Header Start -->
    <header>
      <a href="" class="logo">
        <img src="img/logo.png" alt="Logo"/ style="height:50px;">
      </a>
      <div class="pull-right">
        <ul id="mini-nav" class="clearfix">
          <li class="list-box user-profile">
            <a id="drop7" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
              <!-- <img src="img/user5.png" alt="Bluemoon User"> -->
              <h5>  <?php echo $_SESSION['user_name'] ?></h5>
            </a>
            <ul class="dropdown-menu server-activity">
              <li>
                <a href="edit_profile" style="color:black;"><p><i class="fa fa-cog text-info"></i>  Configurar cuenta</p></a>
              </li>
              <li>
                <div class="demo-btn-group clearfix">
                  <a href="logout.php"><button class="btn btn-danger">
                    Logout
                  </button></a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </header>
    <!-- Header End -->

    <!-- Main Container start -->
    <div class="dashboard-container">

      <div class="container">
        <!-- Top Nav Start -->
        <div id='cssmenu'>
          <ul>
            <li class=''>
                <a href=''><i class="fa fa-dashboard"></i>Dashboard</a>
                <ul>
                  <li><a href=''>Estadísticas</a></li>
                </ul>
            </li>
            <li class=''>
              <a href='campana/'><i class="fa fa-dashboard"></i>IVR Cognitivo</a>
              <ul>
              <?php
              if($_SESSION['type'] == 'master')
              {
              ?>
                <li><a href='campana/#collapseVerCampana'>Ver Campañas</a></li>
              <?php
              }
              ?>
                <li><a href='campana/#collapseCrearCampana'>Crear Campaña</a></li>
                <li><a href='campana/#collapseVariables'>Variables</a></li>
              </ul>
            </li>
            <li class='active'>
              <a href='edit_profile'><i class="fa fa-dashboard"></i>Config</a>
              <ul>
                <li><a href='edit_profile'>Editar Perfil</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- Top Nav End -->

        <!-- Sub Nav End -->
        <div class="sub-nav hidden-sm hidden-xs">
          <ul>
            <li><a href="edit_profile" class="heading">Config</a></li>
            <li class="hidden-sm hidden-xs">
              <a href="edit_profile" class="selected">
                Editar Perfil
              </a>
            </li>
            <!-- <li class="hidden-sm hidden-xs">
              <a href="../cliente/correo_webservice">
                Correo web service
              </a>
            </li> -->
            <!-- <li class="hidden-sm hidden-xs">
              <a href="invoice.html">
                Invoice
              </a>
            </li>
            <li class="hidden-sm hidden-xs">
              <a href="help.html">
                Help
              </a>
            </li> -->
          </ul>
          <!-- <div class="custom-search hidden-sm hidden-xs">
            <input type="text" class="search-query" placeholder="Search here ...">
            <i class="fa fa-search"></i>
          </div> -->
        </div>
        <!-- Sub Nav End -->

        <!-- Dashboard Wrapper Start -->
        <div class="dashboard-wrapper">

            <?php include "edit_profile.php"; ?>
        </div>
        <!-- Dashboard Wrapper End -->

        <footer>
          <p>© Amarok 2018</p>
        </footer>

      </div>
    </div>
    <!-- Main Container end -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.js"></script>

    <!-- Custom JS -->
    <script src="js/menu.js"></script>
    
    <script type="text/javascript">
      //ScrollUp
      $(function () {
        $.scrollUp({
          scrollName: 'scrollUp', // Element ID
          topDistance: '300', // Distance from top before showing element (px)
          topSpeed: 300, // Speed back to top (ms)
          animation: 'fade', // Fade, slide, none
          animationInSpeed: 400, // Animation in speed (ms)
          animationOutSpeed: 400, // Animation out speed (ms)
          scrollText: 'Top', // Text for element
          activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
        });
      });

      //Tooltip
      $('a').tooltip('hide');

      //Popover
      $('.popover-pop').popover('hide');

      //Dropdown
      $('.dropdown-toggle').dropdown();

    </script>

  </body>
</html>