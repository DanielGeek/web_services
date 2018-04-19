<?php



//index.php

include('db/database_connection.php');

// echo $_SESSION['type'];
// echo $_SESSION['id'];
// echo $_SESSION['user_name'];


if(!isset($_SESSION["type"]))
{
 header("location:login.php");
}

include('header.php');

?>


<?php
// include("footer.php");
?>