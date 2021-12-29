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
      include "hrd-index.html";
      break;
    case 'hrd-profile':
      include "hrd-profile.html";
      break;
    case 'hrd-company-profile':
      include "hrd-company-profile.html";
      break;
    case 'hrd-addsupervisor':
      include "hrd-addsupervisor.php";
      break;
    case 'hrd-feedback':
      include "hrd-feedback1.html";
      break;
    case 'hrd-registration':
      include "hrd-registration.html";
      break;
    case 'hrd-studentlist':
      include "hrd-studentlist.html";
      break;
    case 'hrd-jobdesc':
      include "hrd-jobdesc.html";
      break;
    case 'hrd-logbook':
      include "hrd-logbook.html";
      break;
    case 'hrd-studentattendance':
      include "hrd-studentattendance.html";
      break;
    case 'hrd-finalreport':
      include "hrd-finalreport.html";
      break;
    case 'hrd-tutorial':
      include "hrd-tutorials.html";
      break;
    case 'hrd-information':
      include "hrd-information.html";
      break;
    default:
      include "errorpage404.html";
      break;
  }
} else {
  include "hrd-index.html";
}
