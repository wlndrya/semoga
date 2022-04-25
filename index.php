<?php
///link dinamis
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
if (isset($_GET['page'])) {
  $page = $_GET['page'];
  switch ($page) {
    case 'login':
      include "login.php";
      break;
    case 'logout':
      include "logout.php";
      break;
    case 'hrd-home':
      include "hrd-index.php";
      break;
    case 'spv-home':
      include "spv-index.php";
      break;
    case 'hrd-profile':
      include "hrd-profile.php";
      break;
    case 'spv-profile':
      include "spv-profile.php";
      break;
    case 'hrd-company-profile':
      include "hrd-company-profile.php";
      break;
    case 'spv-company-profile':
      include "spv-company-profile.php";
      break;
      case 'hrd-addsupervisor':
      include "hrd-addsupervisor.php";
      break;
    case 'hrd-feedback2':
      include "hrd-feedback2.php";
      break;
    case 'spv-feedback2':
      include "spv-feedback2.php";
      break;
    case 'hrd-registration':
      include "hrd-registration.php";
      break;
    case 'hrd-studentlist':
      include "hrd-studentlist.php";
      break;
    case 'spv-studentlist':
      include "spv-studentlist.php";
      break;
    case 'hrd-jobdesc':
      include "hrd-jobdesc.php";
      break;
    case 'spv-addjobdesc':
      include "spv-addjobdesc.php";
      break;
    case 'hrd-document':
      include "hrd-document.php";
      break;
    case 'spv-document':
      include "spv-document.php";
      break;
    case 'spv-logbook':
      include "spv-logbook.php";
      break;
    case 'hrd-detail-logbook':
      include "hrd-detail-logbook.php";
      break;
    case 'hrd-detail2-logbook':
      include "hrd-detail2-logbook.php";
      break;
    case 'spv-detail-logbook':
      include "spv-detail-logbook.php";
      break;
    case 'spv-detail2-logbook':
      include "spv-detail2-logbook.php";
      break;
    case 'hrd-detail-attendance':
      include "hrd-detail-attendance.php";
      break;
    case 'spv-detail-attendance':
      include "spv-detail-attendance.php";
      break;
    case 'spv-detail2-attendance':
      include "spv-detail2-attendance.php";
      break;
    case 'hrd-tutorial':
      include "hrd-tutorials.php";
      break;
    case 'spv-tutorial':
      include "spv-tutorials.php";
      break;
    case 'hrd-information':
      include "hrd-information.php";
      break;
    case 'spv-information':
      include "spv-information.php";
      break;
    case 'spv-discuss':
      include "spv-discuss.php";
      break;
    case 'spv-discuss2':
      include "spv-discuss2.php";
      break;
    case 'print_jobdesc':
      include "print_jobdesc.php";
      break;
    case 'jobdesc-ilo':
      include "jobdesc-ilo.php";
      break;
    case 'addjobdesc-ilo':
      include "addjobdesc-ilo.php";
      break;
    case 'viewjobdesc-ilo':
      include "viewjobdesc-ilo.php";
      break;
    case 'hrd-jobdesc-ilo':
      include "hrd-jobdesc-ilo.php";
      break;
    case 'print_jobdesc_ilo':
      include "print_jobdesc_ilo.php";
      break;
    case 'student_competency':
      include "student_competency.php";
      break;
    case 'hrd_student_competency':
      include "hrd_student_competency.php";
      break;
    case 'add_student_competency':
      include "add_student_competency.php";
      break;
    case 'view_student_competency':
      include "view_student_competency.php";
      break;
    case 'view_hrd_student_competency':
      include "view_hrd_student_competency.php";
      break;   
    default:
      include "errorpage404.html";
      break;
  }
} else {
  include "hrd-index.php";
}
