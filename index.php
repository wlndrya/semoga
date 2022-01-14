<?php
///link dinamis
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
if (isset($_GET['page'])) {
  $page = $_GET['page'];
  switch ($page) {
    case 'login':
      include "login.php";
      break;
    case 'hrd-home':
      include "hrd-index.php";
      break;
    case 'hrd-profile':
      include "hrd-profile.php";
      break;
    case 'hrd-company-profile':
      include "hrd-company-profile.php";
      break;
    case 'hrd-addsupervisor':
      include "hrd-addsupervisor.php";
      break;
    case 'hrd-feedback':
      include "hrd-feedback1.php";
      break;
    case 'hrd-feedback2':
      include "hrd-feedback2.php";
      break;
    case 'hrd-registration':
      include "hrd-registration.php";
      break;
    case 'hrd-studentlist':
      include "hrd-studentlist.php";
      break;
    case 'hrd-jobdesc':
      include "hrd-jobdesc.php";
      break;
    case 'hrd-logbook':
      include "hrd-logbook.php";
      break;
    case 'hrd-studentattendance':
      include "hrd-studentattendance.php";
      break;
    case 'hrd-finalreport':
      include "hrd-finalreport.php";
      break;
    case 'hrd-tutorial':
      include "hrd-tutorials.php";
      break;
    case 'hrd-information':
      include "hrd-information.php";
      break;
    default:
      include "errorpage404.html";
      break;
  }
} else {
  include "hrd-index.php";
}
