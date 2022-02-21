<html>
  <head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" integrity="sha512-fRVSQp1g2M/EqDBL+UFSams+aw2qk12Pl/REApotuUVK1qEXERk3nrCFChouag/PdDsPk387HJuetJ1HBx8qAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

<?php
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
include 'config.php';

// Add Supervisor
if($_GET['PageAction'] == "add_supervisor") {

  session_start();
  $token_session = $_SESSION['token'];
  $token_post    = mysqli_real_escape_string($conn,$_POST['token']);

  if ($token_session === $token_post) {

    // $id_user_company = mysqli_real_escape_string($conn,$_POST['id_user_company']);
    $id_company      = mysqli_real_escape_string($conn,$_POST['id_company']);
    $name            = mysqli_real_escape_string($conn,$_POST['user_fullname']);
    $user_phone      = mysqli_real_escape_string($conn,$_POST['user_phone']);
    $user_email      = mysqli_real_escape_string($conn,$_POST['user_email']);
    $username        = mysqli_real_escape_string($conn,$_POST['username']);
    $password        = mysqli_real_escape_string($conn,12345);
    $role            = mysqli_real_escape_string($conn,$_POST['user_type']);

  $password_hash = password_hash($password, PASSWORD_DEFAULT); // hash password
                        
  if($_SESSION['username'] && $_SESSION['id_company'] != null){
    $add = $conn->query("INSERT INTO `tb_user_company` (`id_user_company`, `id_company`, `user_fullname`, `user_phone`, `user_email`, `username`, `password`, `user_type`) VALUES (NULL, '$id_company', '$name', '$user_phone', '$user_email', '$username', '$password_hash', '$role');");  
    if($add){
       // $passwd_hashed = password_verify($passwd, $passwd_hash);
      // if($passwd_hashed == $passwd){
      //   echo "password :". $passwd;
      // }
      echo '<script type="text/javascript">';
      echo 'alert("Successfully Added"); document.location="index.php?page=hrd-addsupervisor";</script>';
     }  
     else
     {
      // echo("Error description: " . $conn -> error);
       echo '<script language="javascript">alert("User Gagal ditambah"); document.location="index.php?page=hrd-addsupervisor";</script>';
     }
   }
} else {
echo '<script language="javascript">alert("Error: CSRF Protection"); document.location="hrd-addsupervisor.php";</script>';
}
  }


  //Update Supervisor
if ($_GET['PageAction'] == "update_supervisor") {
  session_start();
  $token_session = $_SESSION['token'];
  $token_post    = mysqli_real_escape_string($conn,$_POST['token']);

  if ($token_session === $token_post) {
   
    $id_user_company = mysqli_real_escape_string($conn,$_POST['id_user_company']);
    $id_company      = mysqli_real_escape_string($conn,$_POST['id_company']);
    $name            = mysqli_real_escape_string($conn,$_POST['user_fullname']);
    $user_phone      = mysqli_real_escape_string($conn,$_POST['user_phone']);
    $user_email      = mysqli_real_escape_string($conn,$_POST['user_email']);
    $username        = mysqli_real_escape_string($conn,$_POST['username']);
    $password        = mysqli_real_escape_string($conn,12345);
    $role            = mysqli_real_escape_string($conn,$_POST['user_type']);

    if($_SESSION['id_user_company'] && $_SESSION['username']) {
      $update = $conn->query("UPDATE `tb_user_company` SET 
      `user_fullname` = '$name',
      `user_phone` = '$user_phone',
      `user_email` = '$user_email',
      `username` = '$username',
      `user_type` = '$role'
      WHERE `id_user_company` = $id_user_company;");

      //echo $id_user_company;

      if($update){
        echo '<script type="text/javascript">';
        echo 'alert("Update Successfully"); document.location="index.php?page=hrd-addsupervisor";</script>';
      }
      else{
         //echo '<script language="javascript">alert("Identitas Gagal di update"); document.location="index.php?page=identitas";</script>';
          echo "
                                     <script type='text/javascript'>
                                      setTimeout(function () { 
                                 Swal.fire({
                                   type: 'error',
                                   title: 'Data gagal diperbaharui',
                                   showConfirmButton: false
                                 });  
                                      },10); 
                                      window.setTimeout(function(){ 
                                        window.history.back();
                                      } ,3000); 
                                     </script>
                                 ";
                               }
    }
    else{
      echo '<script language="javascript">alert("Error: Data tidak boleh kosong"); document.location="index.php?page=hrd-addsupervisor";</script>';
     }
  } else {
    echo '<script language="javascript">alert("Error: CSRF Protection"); document.location="hrd-addsupervisor.php";</script>';
   }
    }


    // Delete Supervisor
if ($_GET['PageAction'] == "delete_supervisor") {

  $id_user_company      = mysqli_real_escape_string($conn,$_POST['id_user_company']);

     $delete = $conn->query("DELETE FROM tb_user_company WHERE `id_user_company` = $id_user_company;");
     if($delete){
     echo '<script language="javascript">alert("Successfully Deleted!"); window.history.back();</script>';
     }else{
     echo '<script language="javascript">alert("Deleted Failure!"); window.history.back();</script>';
     }
  }
    
      
    //Update Description Company
  if ($_GET['PageAction'] == "update_description") {
    session_start();
  $token_session = $_SESSION['token'];
  $token_post    = mysqli_real_escape_string($conn,$_POST['token']);

  if ($token_session === $token_post) {
   
    $id_company      = mysqli_real_escape_string($conn,$_POST['id_company']);
    // $name            = mysqli_real_escape_string($conn,$_POST['name']);
    $description     = mysqli_escape_string($conn,$_POST['description']);

    if($_SESSION['id_company'] && $_SESSION['username']) {
      $update = $conn->query("UPDATE `tb_company` SET 
      `description` = '$description'
      WHERE `id_company` = $id_company;");

      if($update){
        echo '<script type="text/javascript">';
        echo 'alert("Update Successfully"); document.location="index.php?page=hrd-home";</script>';
      }
      else{
         //echo '<script language="javascript">alert("Identitas Gagal di update"); document.location="index.php?page=identitas";</script>';
          echo "
                                     <script type='text/javascript'>
                                      setTimeout(function () { 
                                 Swal.fire({
                                   type: 'error',
                                   title: 'Data gagal diperbaharui',
                                   showConfirmButton: false
                                 });  
                                      },10); 
                                      window.setTimeout(function(){ 
                                        window.history.back();
                                      } ,3000); 
                                     </script>
                                 ";
                               }
    }
    else{
      echo '<script language="javascript">alert("Error: Data tidak boleh kosong"); document.location="index.php?page=hrd-home";</script>';
     }
  } else {
    echo '<script language="javascript">alert("Error: CSRF Protection"); document.location="hrd-index.php";</script>';
   }
   }
  
   // Approval Internship
   if ($_GET['PageAction'] == "approval_internship") {
    session_start();
  $token_session = $_SESSION['token'];
  $token_post    = mysqli_real_escape_string($conn,$_POST['token']);

  if ($token_session === $token_post) {
   
    $id_company      = mysqli_real_escape_string($conn,$_POST['id_company']);
    $id_user_company      = mysqli_real_escape_string($conn,$_POST['id_user_company']);
    $status          = mysqli_escape_string($conn,$_POST['status']);
    $id_applicant    = mysqli_real_escape_string($conn,$_POST['id_applicant']);
    $id_internship   = mysqli_escape_string($conn,$_POST['id_internship']);
    $start_date      = mysqli_real_escape_string($conn,$_POST['start_date']);
    $end_date        = mysqli_real_escape_string($conn,$_POST['end_date']);
    

    if($_SESSION) {
      $updateStatus = $conn->query("UPDATE `tb_applicant` SET 
      `status` = '$status'
      WHERE `id_applicant` = $id_applicant;");

      if($updateStatus){
        $updateCompany = $conn->query("UPDATE `tb_internship` SET 
      `id_user_company` = '$id_user_company',
      `start_date` = '$start_date',
      `end_date` = '$end_date',
      `status` = '$status'
      WHERE `id_internship` = $id_internship;");

      if($updateCompany){
        echo '<script type="text/javascript">';
        echo 'alert("Update Successfully"); document.location="index.php?page=hrd-registration";</script>';
      }
      }
      else{
         //echo '<script language="javascript">alert("Identitas Gagal di update"); document.location="index.php?page=identitas";</script>';
          echo "
                                     <script type='text/javascript'>
                                      setTimeout(function () { 
                                 Swal.fire({
                                   type: 'error',
                                   title: 'Data gagal diperbaharui',
                                   showConfirmButton: false
                                 });  
                                      },10); 
                                      window.setTimeout(function(){ 
                                        window.history.back();
                                      } ,3000); 
                                     </script>
                                 ";
                               }
    }
    else{
      echo '<script language="javascript">alert("Error: Data tidak boleh kosong"); document.location="index.php?page=hrd-registration";</script>';
     }
  } else {
    echo '<script language="javascript">alert("Error: CSRF Protection"); document.location="hrd-registration.php";</script>';
   }
   }
  
   //Edit Update Profile HRD
   if ($_GET['PageAction'] == "update_hrd") {
    session_start();
  $token_session = $_SESSION['token'];
  $token_post    = mysqli_real_escape_string($conn,$_POST['token']);

  if ($token_session === $token_post) {
   
    $id_company      = mysqli_real_escape_string($conn,$_POST['id_company']);
    $id_user_company = mysqli_real_escape_string($conn,$_POST['id_user_company']);
    $name            = mysqli_real_escape_string($conn,$_POST['user_fullname']);
    $user_phone      = mysqli_real_escape_string($conn,$_POST['user_phone']);
    $user_email      = mysqli_escape_string($conn,$_POST['user_email']);
    $username        = mysqli_real_escape_string($conn,$_POST['username']);

    if($_SESSION) {
      $update = $conn->query("UPDATE `tb_user_company` SET 
      `user_fullname` = '$name',
      `user_phone` = '$user_phone',
      `user_email` = '$user_email',
      `username` = '$username'
      WHERE `id_user_company` = $id_user_company;");
    }
    // echo $id_user_company;
      if($update){
        echo '<script type="text/javascript">';
        echo 'alert("Successfully Update"); document.location="index.php?page=hrd-profile";</script>';
      }
      else{
         //echo '<script language="javascript">alert("Identitas Gagal di update"); document.location="index.php?page=identitas";</script>';
          echo "
                                     <script type='text/javascript'>
                                      setTimeout(function () { 
                                 Swal.fire({
                                   type: 'error',
                                   title: 'Data gagal diperbaharui',
                                   showConfirmButton: false
                                 });  
                                      },10); 
                                      window.setTimeout(function(){ 
                                        window.history.back();
                                      } ,3000); 
                                     </script>
                                 ";
                               }
    }
    else{
      echo '<script language="javascript">alert("Error: Data tidak boleh kosong"); document.location="index.php?page=hrd-profile";</script>';
     }
  }

  //Update Company Profile
  if ($_GET['PageAction'] == "update_company") {
    session_start();
  $token_session = $_SESSION['token'];
  $token_post    = mysqli_real_escape_string($conn,$_POST['token']);

  if ($token_session === $token_post) {
   
    $id_company      = mysqli_real_escape_string($conn,$_POST['id_company']);
    $id_user_company = mysqli_real_escape_string($conn,$_POST['id_user_company']);
    $name            = mysqli_real_escape_string($conn,$_POST['name']);
    $type            = mysqli_real_escape_string($conn,$_POST['type']);
    $phone           = mysqli_real_escape_string($conn,$_POST['phone']);
    $email           = mysqli_escape_string($conn,$_POST['email']);
    $website         = mysqli_real_escape_string($conn,$_POST['website']);
    $facebook        = mysqli_real_escape_string($conn,$_POST['facebook']);
    $twitter         = mysqli_real_escape_string($conn,$_POST['twitter']);
    $instagram       = mysqli_real_escape_string($conn,$_POST['instagram']);
    $header          = mysqli_real_escape_string($conn,$_POST['header']);
    $address         = mysqli_real_escape_string($conn,$_POST['address']);
    $province        = mysqli_real_escape_string($conn,$_POST['province']);
    $city            = mysqli_real_escape_string($conn,$_POST['city']);
    $status          = mysqli_real_escape_string($conn,$_POST['status']);
    $access_type     = mysqli_real_escape_string($conn,$_POST['access_type']);

    if($_SESSION) {
      $update = $conn->query("UPDATE `tb_company` SET 
      `name` = '$name',
      `type` = '$type',
      `phone` = '$phone',
      `email` = '$email',
      `website` = '$website',
      `facebook` = '$facebook',
      `twitter` = '$twitter',
      `instagram` = '$instagram',
      `header` = '$header',
      `address` = '$address',
      `province` = '$province',
      `city` = '$city',
      `status` = '$status',
      `access_type` = '$access_type'
      WHERE `id_company` = $id_company;");
    }
    // echo $id_user_company;
      if($update){
        echo '<script type="text/javascript">';
        echo 'alert("Successfully Update"); document.location="index.php?page=hrd-company-profile";</script>';
      }
      else{
         //echo '<script language="javascript">alert("Identitas Gagal di update"); document.location="index.php?page=identitas";</script>';
          echo "
                                     <script type='text/javascript'>
                                      setTimeout(function () { 
                                 Swal.fire({
                                   type: 'error',
                                   title: 'Data gagal diperbaharui',
                                   showConfirmButton: false
                                 });  
                                      },10); 
                                      window.setTimeout(function(){ 
                                        window.history.back();
                                      } ,3000); 
                                     </script>
                                 ";
                               }
    }
    else{
      echo '<script language="javascript">alert("Error: Data tidak boleh kosong"); document.location="index.php?page=hrd-company-profile";</script>';
     }
  }

  //Add Feedback from industry Supervisor
  if($_GET['PageAction'] == "add_feedback2") {

    session_start();
    $token_session = $_SESSION['token'];
    $token_post    = mysqli_real_escape_string($conn,$_POST['token']);
  
    $id                     = mysqli_real_escape_string($conn,$_POST['id']);
    $catatan_utk_mahasiswa  = mysqli_real_escape_string($conn,$_POST['catatan_utk_mahasiswa']);
    $catatan_utk_poltek     = mysqli_real_escape_string($conn,$_POST['catatan_utk_poltek']);
    $layak_diterima         = mysqli_real_escape_string($conn,$_POST['layak_diterima']);
    $langsung_diterima      = mysqli_real_escape_string($conn,$_POST['langsung_diterima']);
    $nilai_akhir            = mysqli_real_escape_string($conn,$_POST['nilai_akhir']);
    $etika                  = mysqli_real_escape_string($conn,$_POST['etika']);
    $keahlian_kompetensi    = mysqli_real_escape_string($conn,$_POST['keahlian_kompetensi']);
    $keahlian_bahasa        = mysqli_real_escape_string($conn,$_POST['keahlian_bahasa']);
    $penggunaan_ti          = mysqli_real_escape_string($conn,$_POST['penggunaan_ti']);
    $komunikasi             = mysqli_real_escape_string($conn,$_POST['komunikasi']);
    $kerjasama              = mysqli_real_escape_string($conn,$_POST['kerjasama']);
    $pengembangan_diri      = mysqli_real_escape_string($conn,$_POST['pengembangan_diri']);
    $date                   = mysqli_real_escape_string($conn,$_POST['date']);
                                
    if($_SESSION){
      $add = $conn->query("INSERT INTO tb_industry_feedback (id_industry_feedback, id_internship, catatan_utk_mahasiswa, catatan_utk_poltek, layak_diterima, langsung_diterima, nilai_akhir, etika, keahlian_kompetensi, keahlian_bahasa, penggunaan_ti, komunikasi, kerjasama, pengembangan_diri, date) VALUES (NULL,'$id','$catatan_utk_mahasiswa','$catatan_utk_poltek', '$layak_diterima', '$langsung_diterima', '$nilai_akhir', '$etika', '$keahlian_kompetensi' , '$keahlian_bahasa', '$penggunaan_ti', '$komunikasi', '$kerjasama', '$pengembangan_diri', '$date');");  
      if($add){
        echo '<script type="text/javascript">';
        echo 'alert("Successfully Added"); document.location="index.php?page=spv-studentlist";</script>';
       }  
       else
       {
        echo("Error description: " . $conn -> error);
         //echo '<script language="javascript">alert("Added Failure"); document.location="index.php?page=spv-addjobdesc";</script>';
       }
     }
  } 

  //Add Feedback from industry HRD
  if($_GET['PageAction'] == "add_feedback2hrd") {

    session_start();
    $token_session = $_SESSION['token'];
    $token_post    = mysqli_real_escape_string($conn,$_POST['token']);
  
    $id                     = mysqli_real_escape_string($conn,$_POST['id']);
    $catatan_utk_mahasiswa  = mysqli_real_escape_string($conn,$_POST['catatan_utk_mahasiswa']);
    $catatan_utk_poltek     = mysqli_real_escape_string($conn,$_POST['catatan_utk_poltek']);
    $layak_diterima         = mysqli_real_escape_string($conn,$_POST['layak_diterima']);
    $langsung_diterima      = mysqli_real_escape_string($conn,$_POST['langsung_diterima']);
    $nilai_akhir            = mysqli_real_escape_string($conn,$_POST['nilai_akhir']);
    $etika                  = mysqli_real_escape_string($conn,$_POST['etika']);
    $keahlian_kompetensi    = mysqli_real_escape_string($conn,$_POST['keahlian_kompetensi']);
    $keahlian_bahasa        = mysqli_real_escape_string($conn,$_POST['keahlian_bahasa']);
    $penggunaan_ti          = mysqli_real_escape_string($conn,$_POST['penggunaan_ti']);
    $komunikasi             = mysqli_real_escape_string($conn,$_POST['komunikasi']);
    $kerjasama              = mysqli_real_escape_string($conn,$_POST['kerjasama']);
    $pengembangan_diri      = mysqli_real_escape_string($conn,$_POST['pengembangan_diri']);
    $date                   = mysqli_real_escape_string($conn,$_POST['date']);
                                
    if($_SESSION){
      $add = $conn->query("INSERT INTO tb_industry_feedback (id_industry_feedback, id_internship, catatan_utk_mahasiswa, catatan_utk_poltek, layak_diterima, langsung_diterima, nilai_akhir, etika, keahlian_kompetensi, keahlian_bahasa, penggunaan_ti, komunikasi, kerjasama, pengembangan_diri, date) VALUES (NULL,'$id','$catatan_utk_mahasiswa','$catatan_utk_poltek', '$layak_diterima', '$langsung_diterima', '$nilai_akhir', '$etika', '$keahlian_kompetensi' , '$keahlian_bahasa', '$penggunaan_ti', '$komunikasi', '$kerjasama', '$pengembangan_diri', '$date');");  
      if($add){
        echo '<script type="text/javascript">';
        echo 'alert("Successfully Added"); document.location="index.php?page=hrd-studentlist";</script>';
       }  
       else
       {
        echo("Error description: " . $conn -> error);
         //echo '<script language="javascript">alert("Added Failure"); document.location="index.php?page=spv-addjobdesc";</script>';
       }
     }
  } 

    //Add and Update Job Description
    if($_GET['PageAction'] == "add_jobdesc") {

      session_start();
      $token_session = $_SESSION['token'];
      $token_post    = mysqli_real_escape_string($conn,$_POST['token']);
    
      $id                = mysqli_real_escape_string($conn,$_POST['id']);
      $description     = $_POST['description_jobdesc'];
      $another = $_POST['another_jobdesc'];
      $goals = $_POST['expected_goal'];

      $final_desc = json_encode($description);
      //$checked = explode(',',$description);

      //print_r($description);
                                  
      if($_SESSION){
        $add = $conn->query("INSERT INTO tb_job_description (id_jobdesc,id_internship, description_jobdesc, another_jobdesc, expected_goal) VALUES (NULL,'$id','$final_desc','$another', '$goals');");  
        if($add){
          echo '<script type="text/javascript">';
          echo 'alert("Successfully Added"); document.location="index.php?page=spv-studentlist";</script>';
         }  
         else
         {
          echo("Error description: " . $conn -> error);
           //echo '<script language="javascript">alert("Added Failure"); document.location="index.php?page=spv-addjobdesc";</script>';
         }
       }
    } 
    //   }

    //Update Approval Supervisor for Logbook
    if ($_GET['PageAction'] == "add_approve") {
      session_start();
    $token_session = $_SESSION['token'];
    $token_post    = mysqli_real_escape_string($conn,$_POST['token']);
  
    if ($token_session === $token_post) {
     
      $id               = mysqli_real_escape_string($conn,$_POST['id']);
      $id_logbook      = mysqli_real_escape_string($conn,$_POST['id_logbook']);
      $approval_spv    = mysqli_real_escape_string($conn,$_POST['approval_spv']);
  
      if($_SESSION) {
        $update = $conn->query("UPDATE `tb_logbook` SET 
        `approval_spv` = '$approval_spv'
        WHERE `id_logbook` = $id_logbook;");
      }
      // echo $id_user_company;
        if($update){
          // echo '<script type="text/javascript">';
          // echo 'alert("Successfully Update"); document.location="index.php?page=spv-detail-logbook";</script>';
          echo("Error description: " . $conn -> error);
        }
        else{
           //echo '<script language="javascript">alert("Identitas Gagal di update"); document.location="index.php?page=identitas";</script>';
            echo "
                                       <script type='text/javascript'>
                                        setTimeout(function () { 
                                   Swal.fire({
                                     type: 'error',
                                     title: 'Data gagal diperbaharui',
                                     showConfirmButton: false
                                   });  
                                        },10); 
                                        window.setTimeout(function(){ 
                                          window.history.back();
                                        } ,3000); 
                                       </script>
                                   ";
                                 }
      }
      else{
        echo("Error description: " . $conn -> error);
       }
    }
  

?>