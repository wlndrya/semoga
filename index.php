<?php
///link dinamis
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
  if(isset($_GET['page'])){
    $page = $_GET['page'];
    switch ($page) {
      case 'home':
        include "home.html";
        break;
      case 'login':
        include "login.php";
        break;
      case 'dashboard':
        include "dashboard.php";
        break;
      default:
        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
        break;
    } 
  }else{
    include "home.html";    
  }
?>