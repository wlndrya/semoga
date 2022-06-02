<html>

<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
include 'config.php';

// Add Supervisor
if ($_GET['PageAction'] == "add_supervisor") {

  session_start();
  $token_session = $_SESSION['token'];
  $token_post    = mysqli_real_escape_string($conn, $_POST['token']);

  if ($token_session === $token_post) {

    // $id_user_company = mysqli_real_escape_string($conn,$_POST['id_user_company']);
    $id_company      = mysqli_real_escape_string($conn, $_POST['id_company']);
    $name            = mysqli_real_escape_string($conn, $_POST['user_fullname']);
    $user_phone      = mysqli_real_escape_string($conn, $_POST['user_phone']);
    $user_email      = mysqli_real_escape_string($conn, $_POST['user_email']);
    $username        = mysqli_real_escape_string($conn, $_POST['username']);
    $password        = mysqli_real_escape_string($conn, 12345);
    $role            = mysqli_real_escape_string($conn, $_POST['user_type']);

    $password_hash = password_hash($password, PASSWORD_DEFAULT); // hash password

    if ($_SESSION['username'] && $_SESSION['id_company'] != null) {
      $add = $conn->query("INSERT INTO `tb_user_company` (`id_user_company`, `id_company`, `user_fullname`, `user_phone`, `user_email`, `username`, `password`, `user_type`) VALUES (NULL, '$id_company', '$name', '$user_phone', '$user_email', '$username', '$password_hash', '$role');");
      if ($add) {
        // $passwd_hashed = password_verify($passwd, $passwd_hash);
        // if($passwd_hashed == $passwd){
        //   echo "password :". $passwd;
        // }
        echo "
        <script type='text/javascript'>
         setTimeout(function () { 
          swal({
            title: 'Success',
            text: 'Added Succcesfully!',
            icon: 'success',
            buttons: false
          }); 
         },10); 
         window.setTimeout(function(){ 
          window.location.replace('index.php?page=hrd-addsupervisor');
         } ,2000); 
        </script>
        ";
      } else {
        // echo("Error description: " . $conn -> error);
        echo "
        <script type='text/javascript'>
         setTimeout(function () { 
          swal({
            title: 'Failure!',
            text: 'Failed to added!',
            icon: 'error',
            buttons: false
          }); 
         },10); 
         window.setTimeout(function(){ 
          window.location.replace('index.php?page=hrd-addsupervisor');
         } ,3000); 
        </script>
        ";
      }
    }
  } else {
    echo '<script language="javascript">alert("Error: CSRF Protection"); document.location="hrd-addsupervisor.php";</script>';
  }
}


//Update Supervisor from HRD
if ($_GET['PageAction'] == "update_supervisor") {
  session_start();
  $token_session = $_SESSION['token'];
  $token_post    = mysqli_real_escape_string($conn, $_POST['token']);

  if ($token_session === $token_post) {

    $id_user_company = mysqli_real_escape_string($conn, $_POST['id_user_company']);
    $id_company      = mysqli_real_escape_string($conn, $_POST['id_company']);
    $name            = mysqli_real_escape_string($conn, $_POST['user_fullname']);
    $user_phone      = mysqli_real_escape_string($conn, $_POST['user_phone']);
    $user_email      = mysqli_real_escape_string($conn, $_POST['user_email']);
    $username        = mysqli_real_escape_string($conn, $_POST['username']);
    $password        = mysqli_real_escape_string($conn, 12345);
    $role            = mysqli_real_escape_string($conn, $_POST['user_type']);

    if ($_SESSION['id_user_company'] && $_SESSION['username']) {
      $update = $conn->query("UPDATE `tb_user_company` SET 
      `user_fullname` = '$name',
      `user_phone` = '$user_phone',
      `user_email` = '$user_email',
      `username` = '$username',
      `user_type` = '$role'
      WHERE `id_user_company` = $id_user_company;");

      //echo $id_user_company;

      if ($update) {
        echo "
        <script type='text/javascript'>
         setTimeout(function () { 
          swal({
            title: 'Success',
            text: 'Updated Succcesfully!',
            icon: 'success',
            buttons: false
          }); 
         },10); 
         window.setTimeout(function(){ 
          window.location.replace('index.php?page=hrd-addsupervisor');
         } ,2000); 
        </script>
        ";
      } else {
        // echo("Error description: " . $conn -> error);
        echo "
        <script type='text/javascript'>
         setTimeout(function () { 
          swal({
            title: 'Error!',
            text: 'Failed to updated!',
            icon: 'error',
            buttons: false
          }); 
         },10); 
         window.setTimeout(function(){ 
          window.location.replace('index.php?page=hrd-addsupervisor');
         } ,3000); 
        </script>
        ";
      }
    } else {
      echo '<script language="javascript">alert("Error: Data tidak boleh kosong"); document.location="index.php?page=hrd-addsupervisor";</script>';
    }
  } else {
    echo '<script language="javascript">alert("Error: CSRF Protection"); document.location="hrd-addsupervisor.php";</script>';
  }
}

//Update Supervisor from Supervisor
if ($_GET['PageAction'] == "update_spv") {
  session_start();
  $token_session = $_SESSION['token'];
  $token_post    = mysqli_real_escape_string($conn, $_POST['token']);

  if ($token_session === $token_post) {

    $id_user_company = mysqli_real_escape_string($conn, $_POST['id_user_company']);
    $id_company      = mysqli_real_escape_string($conn, $_POST['id_company']);
    $name            = mysqli_real_escape_string($conn, $_POST['user_fullname']);
    $user_phone      = mysqli_real_escape_string($conn, $_POST['user_phone']);
    $user_email      = mysqli_real_escape_string($conn, $_POST['user_email']);
    $username        = mysqli_real_escape_string($conn, $_POST['username']);
    $password        = mysqli_real_escape_string($conn, $_POST['password']);
    $role            = mysqli_real_escape_string($conn, $_POST['user_type']);

    $password_hash = password_hash($password, PASSWORD_DEFAULT); // hash password


    if ($_SESSION['id_user_company'] && $_SESSION['username']) {

      if(!$password){
        $update = $conn->query("UPDATE `tb_user_company` SET 
        `user_fullname` = '$name',
        `user_phone` = '$user_phone',
        `user_email` = '$user_email',
        `username` = '$username',
        `user_type` = '$role'
        WHERE `id_user_company` = $id_user_company;");
      }

      if($password){

      $update = $conn->query("UPDATE `tb_user_company` SET 
      `user_fullname` = '$name',
      `user_phone` = '$user_phone',
      `user_email` = '$user_email',
      `username` = '$username',
      `password` = '$password_hash',
      `user_type` = '$role'
      WHERE `id_user_company` = $id_user_company;");

      }

      //echo $id_user_company;

      if ($update) {
        echo "
        <script type='text/javascript'>
         setTimeout(function () { 
          swal({
            title: 'Success',
            text: 'Updated Succcesfully!',
            icon: 'success',
            buttons: false
          }); 
         },10); 
         window.setTimeout(function(){ 
          window.location.replace('index.php?page=spv-profile');
         } ,2000); 
        </script>
        ";
      } else {
        // echo("Error description: " . $conn -> error);
        echo "
        <script type='text/javascript'>
         setTimeout(function () { 
          swal({
            title: 'Error!',
            text: 'Failed to updated!',
            icon: 'error',
            buttons: false
          }); 
         },10); 
         window.setTimeout(function(){ 
          window.location.replace('index.php?page=spv-profile');
         } ,3000); 
        </script>
        ";
      }
    } else {
      echo '<script language="javascript">alert("Error: Data tidak boleh kosong"); document.location="index.php?page=spv-profile";</script>';
    }
  } else {
    echo '<script language="javascript">alert("Error: CSRF Protection"); document.location="spv-profile.php";</script>';
  }
}


// Delete Supervisor
if ($_GET['PageAction'] == "delete_supervisor") {

  $id_user_company      = mysqli_real_escape_string($conn, $_POST['id_user_company']);

  $delete = $conn->query("DELETE FROM tb_user_company WHERE `id_user_company` = $id_user_company;");
  if ($delete) {
    echo "
    <script type='text/javascript'>
     setTimeout(function () { 
      swal({
        title: 'Success',
        text: 'Deleted Succcesfully!',
        icon: 'success',
        buttons: false
      }); 
     },10); 
     window.setTimeout(function(){ 
      window.location.replace('index.php?page=hrd-addsupervisor');
     } ,2000); 
    </script>
    ";
  } else {
    // echo("Error description: " . $conn -> error);
    echo "
    <script type='text/javascript'>
     setTimeout(function () { 
      swal({
        title: 'Error!',
        text: 'Failed to deleted!',
        icon: 'error',
        buttons: false
      }); 
     },10); 
     window.setTimeout(function(){ 
      window.location.replace('index.php?page=hrd-addsupervisor');
     } ,3000); 
    </script>
    ";
  }
}


//Update Description Company
if ($_GET['PageAction'] == "update_description") {
  session_start();
  $token_session = $_SESSION['token'];
  $token_post    = mysqli_real_escape_string($conn, $_POST['token']);

  if ($token_session === $token_post) {

    $id_company      = mysqli_real_escape_string($conn, $_POST['id_company']);
    // $name            = mysqli_real_escape_string($conn,$_POST['name']);
    $description     = mysqli_escape_string($conn, $_POST['description']);

    if ($_SESSION['id_company'] && $_SESSION['username']) {
      $update = $conn->query("UPDATE `tb_company` SET 
      `description` = '$description'
      WHERE `id_company` = $id_company;");

      if ($update) {
        echo "
        <script type='text/javascript'>
         setTimeout(function () { 
          swal({
            title: 'Success',
            text: 'Updated Succcesfully!',
            icon: 'success',
            buttons: false
          }); 
         },10); 
         window.setTimeout(function(){ 
          window.location.replace('index.php?page=hrd-home');
         } ,2000); 
        </script>
        ";
      } else {
        //echo '<script language="javascript">alert("Identitas Gagal di update"); document.location="index.php?page=identitas";</script>';
        echo "
        <script type='text/javascript'>
         setTimeout(function () { 
          swal({
            title: 'Error',
            text: 'Failed to update!',
            icon: 'error',
            buttons: false
          }); 
         },10); 
         window.setTimeout(function(){ 
          window.location.replace('index.php?page=hrd-home');
         } ,3000); 
        </script>
        ";
      }
    } else {
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
  $token_post    = mysqli_real_escape_string($conn, $_POST['token']);

  if ($token_session === $token_post) {

    $id_company      = mysqli_real_escape_string($conn, $_POST['id_company']);
    $id_user_company = mysqli_real_escape_string($conn, $_POST['id_user_company']);
    $status_intern   = mysqli_escape_string($conn, $_POST['status_intern']);
    // $status_applicant = mysqli_escape_string($conn,$_POST['status_applicant']);
    $id_applicant    = mysqli_real_escape_string($conn, $_POST['id_applicant']);
    $id_internship   = mysqli_escape_string($conn, $_POST['id_internship']);
    $start_date      = mysqli_real_escape_string($conn, $_POST['start_date']);
    $end_date        = mysqli_real_escape_string($conn, $_POST['end_date']);


    if ($_SESSION) {
      if ($status_intern == "NO") {
        $updateStatus = mysqli_query($conn, "UPDATE `tb_internship` SET `status_intern` = '$status_intern' WHERE `id_internship` = $id_internship");
        if($updateStatus) {
          echo "
              <script type='text/javascript'>
               setTimeout(function () { 
                swal({
                  title: 'Success',
                  text: 'Approved Succcesfully!',
                  icon: 'success',
                  buttons: false
                }); 
               },10); 
               window.setTimeout(function(){ 
                window.location.replace('index.php?page=hrd-registration');
               } ,2000); 
              </script>
              ";
        }
        
        if($updateStatus) {
          if($id_applicant) {
            $updateCompanyNO = mysqli_query($conn, "UPDATE `tb_applicant` SET  `status_applicant` = '$status_intern' WHERE `id_applicant` =  $id_applicant");
            if ($updateCompanyNO) {
              echo "
              <script type='text/javascript'>
               setTimeout(function () { 
                swal({
                  title: 'Success',
                  text: 'Approved Succcesfully!',
                  icon: 'success',
                  buttons: false
                }); 
               },10); 
               window.setTimeout(function(){ 
                window.location.replace('index.php?page=hrd-registration');
               } ,2000); 
              </script>
              ";
            }
          }
        }
        

      } else {
        $updateStatus = $conn->query("UPDATE `tb_internship` SET 
        `id_user_company` = '$id_user_company',
        `start_date` = '$start_date',
        `end_date` = '$end_date',
        `status_intern` = '$status_intern'
        WHERE `id_internship` = $id_internship;");

        if($updateStatus) {
          echo "
              <script type='text/javascript'>
               setTimeout(function () { 
                swal({
                  title: 'Success',
                  text: 'Approved Succcesfully!',
                  icon: 'success',
                  buttons: false
                }); 
               },10); 
               window.setTimeout(function(){ 
                window.location.replace('index.php?page=hrd-registration');
               } ,2000); 
              </script>
              ";
        }

        if ($updateStatus) {
            if($id_applicant){
              $updateCompany = mysqli_query($conn, "UPDATE `tb_applicant` SET  `status_applicant` = '$status_intern' WHERE `id_applicant` =  $id_applicant");

              if ($updateCompany) {
                echo "
              <script type='text/javascript'>
               setTimeout(function () { 
                swal({
                  title: 'Success',
                  text: 'Approved Succcesfully!',
                  icon: 'success',
                  buttons: false
                }); 
               },10); 
               window.setTimeout(function(){ 
                window.location.replace('index.php?page=hrd-registration');
               } ,2000); 
              </script>
              ";
              } else {
                echo "
              <script type='text/javascript'>
               setTimeout(function () { 
                swal({
                  title: 'Error',
                  text: 'Failed to approve!',
                  icon: 'error',
                  buttons: false
                }); 
               },10); 
               window.setTimeout(function(){ 
                window.location.replace('index.php?page=hrd-registration');
               } ,3000); 
              </script>
              ";
              }
            }
        //   $updateCompany = $conn->query("UPDATE `tb_applicant` SET
        //   `status_applicant` = '$status'
        //   WHERE `id_applicant` = $id_applicant;");

        //   if ($updateCompany) {
        //     echo "
        // <script type='text/javascript'>
        //  setTimeout(function () { 
        //   swal({
        //     title: 'Success',
        //     text: 'Approved Succcesfully!',
        //     icon: 'success',
        //     buttons: false
        //   }); 
        //  },10); 
        //  window.setTimeout(function(){ 
        //   window.location.replace('index.php?page=hrd-registration');
        //  } ,2000); 
        // </script>
        // ";
        //     echo("Error description: " . $conn -> error);
        //   }
        }
      }
    }
  }
}

//Edit Update Profile HRD
if ($_GET['PageAction'] == "update_hrd") {
  session_start();
  $token_session = $_SESSION['token'];
  $token_post    = mysqli_real_escape_string($conn, $_POST['token']);

  if ($token_session === $token_post) {

    $id_company      = mysqli_real_escape_string($conn, $_POST['id_company']);
    $id_user_company = mysqli_real_escape_string($conn, $_POST['id_user_company']);
    $name            = mysqli_real_escape_string($conn, $_POST['user_fullname']);
    $user_phone      = mysqli_real_escape_string($conn, $_POST['user_phone']);
    $user_email      = mysqli_escape_string($conn, $_POST['user_email']);
    $username        = mysqli_real_escape_string($conn, $_POST['username']);
    $password        = mysqli_real_escape_string($conn, $_POST['password']);

    $password_hash = password_hash($password, PASSWORD_DEFAULT); // hash password
    
    if ($password) {
      $update = $conn->query("UPDATE `tb_user_company` SET 
      `user_fullname` = '$name',
      `user_phone` = '$user_phone',
      `user_email` = '$user_email',
      `username` = '$username',
      `password` = '$password_hash'
      WHERE `id_user_company` = $id_user_company;");
    }else{
      $update = $conn->query("UPDATE `tb_user_company` SET 
      `user_fullname` = '$name',
      `user_phone` = '$user_phone',
      `user_email` = '$user_email',
      `username` = '$username'
      WHERE `id_user_company` = $id_user_company;");
    }
    // echo $id_user_company;
    if ($update) {
      echo "
        <script type='text/javascript'>
         setTimeout(function () { 
          swal({
            title: 'Success',
            text: 'Updated Succcesfully!',
            icon: 'success',
            buttons: false
          }); 
         },10); 
         window.setTimeout(function(){ 
          window.location.replace('index.php?page=hrd-profile');
         } ,2000); 
        </script>
        ";
      } else {
        // echo("Error description: " . $conn -> error);
        echo "
        <script type='text/javascript'>
         setTimeout(function () { 
          swal({
            title: 'Error!',
            text: 'Failed to updated!',
            icon: 'error',
            buttons: false
          }); 
         },10); 
         window.setTimeout(function(){ 
          window.location.replace('index.php?page=hrd-profile');
         } ,3000); 
        </script>
        ";
    }
  } else {
    echo '<script language="javascript">alert("Error: Data tidak boleh kosong"); document.location="index.php?page=hrd-profile";</script>';
  }
}

//Update Company Profile
if ($_GET['PageAction'] == "update_company") {
  session_start();
  $token_session = $_SESSION['token'];
  $token_post    = mysqli_real_escape_string($conn, $_POST['token']);

  if ($token_session === $token_post) {

    $id_company      = mysqli_real_escape_string($conn, $_POST['id_company']);
    $id_user_company = mysqli_real_escape_string($conn, $_POST['id_user_company']);
    $company_name    = mysqli_real_escape_string($conn, $_POST['company_name']);
    $type            = mysqli_real_escape_string($conn, $_POST['type']);
    $phone           = mysqli_real_escape_string($conn, $_POST['phone']);
    $email           = mysqli_escape_string($conn, $_POST['email']);
    $website         = mysqli_real_escape_string($conn, $_POST['website']);
    $facebook        = mysqli_real_escape_string($conn, $_POST['facebook']);
    $twitter         = mysqli_real_escape_string($conn, $_POST['twitter']);
    $instagram       = mysqli_real_escape_string($conn, $_POST['instagram']);
    $header          = mysqli_real_escape_string($conn, $_POST['header']);
    $address         = mysqli_real_escape_string($conn, $_POST['address']);
    $province        = mysqli_real_escape_string($conn, $_POST['province']);
    $city            = mysqli_real_escape_string($conn, $_POST['city']);
    $status          = mysqli_real_escape_string($conn, $_POST['status']);
    $access_type     = mysqli_real_escape_string($conn, $_POST['access_type']);

    if ($_SESSION) {
      $update = $conn->query("UPDATE `tb_company` SET 
      `company_name` = '$company_name',
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
    if ($update) {
      echo "
      <script type='text/javascript'>
       setTimeout(function () { 
        swal({
          title: 'Success',
          text: 'Updated Succcesfully!',
          icon: 'success',
          buttons: false
        }); 
       },10); 
       window.setTimeout(function(){ 
        window.location.replace('index.php?page=hrd-company-profile');
       } ,2000); 
      </script>
      ";
    } else {
      //echo '<script language="javascript">alert("Identitas Gagal di update"); document.location="index.php?page=identitas";</script>';
      echo "
      <script type='text/javascript'>
       setTimeout(function () { 
        swal({
          title: 'Error',
          text: 'Failed to update!',
          icon: 'error',
          buttons: false
        }); 
       },10); 
       window.setTimeout(function(){ 
        window.location.replace('index.php?page=hrd-company-profile');
       } ,3000); 
      </script>
      ";
    // echo("Error description: " . $conn -> error);
    }
  } 
}

//Add Feedback from industry Supervisor
if ($_GET['PageAction'] == "add_feedback2") {

  session_start();
  $token_session = $_SESSION['token'];
  $token_post    = mysqli_real_escape_string($conn, $_POST['token']);

  $id                     = mysqli_real_escape_string($conn, $_POST['id']);
  $catatan_utk_mahasiswa  = mysqli_real_escape_string($conn, $_POST['catatan_utk_mahasiswa']);
  $catatan_utk_poltek     = mysqli_real_escape_string($conn, $_POST['catatan_utk_poltek']);
  $layak_diterima         = mysqli_real_escape_string($conn, $_POST['layak_diterima']);
  $langsung_diterima      = mysqli_real_escape_string($conn, $_POST['langsung_diterima']);
  $nilai_akhir            = mysqli_real_escape_string($conn, $_POST['nilai_akhir']);
  $etika                  = mysqli_real_escape_string($conn, $_POST['etika']);
  $keahlian_kompetensi    = mysqli_real_escape_string($conn, $_POST['keahlian_kompetensi']);
  $keahlian_bahasa        = mysqli_real_escape_string($conn, $_POST['keahlian_bahasa']);
  $penggunaan_ti          = mysqli_real_escape_string($conn, $_POST['penggunaan_ti']);
  $komunikasi             = mysqli_real_escape_string($conn, $_POST['komunikasi']);
  $kerjasama              = mysqli_real_escape_string($conn, $_POST['kerjasama']);
  $pengembangan_diri      = mysqli_real_escape_string($conn, $_POST['pengembangan_diri']);
  $date                   = mysqli_real_escape_string($conn, $_POST['date']);

  if ($_SESSION) {
    $add = $conn->query("INSERT INTO tb_industry_feedback (id_industry_feedback, id_internship, catatan_utk_mahasiswa, catatan_utk_poltek, layak_diterima, langsung_diterima, nilai_akhir, etika, keahlian_kompetensi, keahlian_bahasa, penggunaan_ti, komunikasi, kerjasama, pengembangan_diri, date) VALUES (NULL,'$id','$catatan_utk_mahasiswa','$catatan_utk_poltek', '$layak_diterima', '$langsung_diterima', '$nilai_akhir', '$etika', '$keahlian_kompetensi' , '$keahlian_bahasa', '$penggunaan_ti', '$komunikasi', '$kerjasama', '$pengembangan_diri', '$date');");
    if ($add) {
       echo "
      <script type='text/javascript'>
       setTimeout(function () { 
        swal({
          title: 'Success',
          text: 'Added Succcesfully!',
          icon: 'success',
          buttons: false
        }); 
       },10); 
       window.setTimeout(function(){ 
        window.history.back();
       } ,2000); 
      </script>
      ";
    } else {
      echo ("Error description: " . $conn->error);
      //echo '<script language="javascript">alert("Added Failure"); document.location="index.php?page=spv-addjobdesc";</script>';
    }
  }
}

//Add Feedback from industry HRD
if ($_GET['PageAction'] == "add_feedback2hrd") {

  session_start();
  $token_session = $_SESSION['token'];
  $token_post    = mysqli_real_escape_string($conn, $_POST['token']);

  $id                     = mysqli_real_escape_string($conn, $_POST['id']);
  $catatan_utk_mahasiswa  = mysqli_real_escape_string($conn, $_POST['catatan_utk_mahasiswa']);
  $catatan_utk_poltek     = mysqli_real_escape_string($conn, $_POST['catatan_utk_poltek']);
  $layak_diterima         = mysqli_real_escape_string($conn, $_POST['layak_diterima']);
  $langsung_diterima      = mysqli_real_escape_string($conn, $_POST['langsung_diterima']);
  $nilai_akhir            = mysqli_real_escape_string($conn, $_POST['nilai_akhir']);
  $etika                  = mysqli_real_escape_string($conn, $_POST['etika']);
  $keahlian_kompetensi    = mysqli_real_escape_string($conn, $_POST['keahlian_kompetensi']);
  $keahlian_bahasa        = mysqli_real_escape_string($conn, $_POST['keahlian_bahasa']);
  $penggunaan_ti          = mysqli_real_escape_string($conn, $_POST['penggunaan_ti']);
  $komunikasi             = mysqli_real_escape_string($conn, $_POST['komunikasi']);
  $kerjasama              = mysqli_real_escape_string($conn, $_POST['kerjasama']);
  $pengembangan_diri      = mysqli_real_escape_string($conn, $_POST['pengembangan_diri']);
  $date                   = mysqli_real_escape_string($conn, $_POST['date']);

  if ($_SESSION) {
    $add = $conn->query("INSERT INTO tb_industry_feedback (id_industry_feedback, id_internship, catatan_utk_mahasiswa, catatan_utk_poltek, layak_diterima, langsung_diterima, nilai_akhir, etika, keahlian_kompetensi, keahlian_bahasa, penggunaan_ti, komunikasi, kerjasama, pengembangan_diri, date) VALUES (NULL,'$id','$catatan_utk_mahasiswa','$catatan_utk_poltek', '$layak_diterima', '$langsung_diterima', '$nilai_akhir', '$etika', '$keahlian_kompetensi' , '$keahlian_bahasa', '$penggunaan_ti', '$komunikasi', '$kerjasama', '$pengembangan_diri', '$date');");
    if ($add) {
      echo "
      <script type='text/javascript'>
       setTimeout(function () { 
        swal({
          title: 'Success',
          text: 'Added Succcesfully!',
          icon: 'success',
          buttons: false
        }); 
       },10); 
       window.setTimeout(function(){ 
        window.history.back();
       } ,2000); 
      </script>
      ";
    } else {
      echo ("Error description: " . $conn->error);
      //echo '<script language="javascript">alert("Added Failure"); document.location="index.php?page=spv-addjobdesc";</script>';
    }
  }
}

//Add and Update Job Description
if ($_GET['PageAction'] == "add_jobdesc") {

  session_start();
  date_default_timezone_set('Asia/Jakarta');
  $token_session         = $_SESSION['token'];
  $token_post            = mysqli_real_escape_string($conn, $_POST['token']);
  $id                    = mysqli_real_escape_string($conn, $_POST['id']);
  $id_jobdesc_intern     = $_POST['id_jobdesc_intern'];
  $id_jobdesc            = $_POST['id_jobdesc'];
  $id_ceklis             = $_POST['id_ceklis'];
  $id_detail             = $_POST['id_detail'];
  $nim                   = $_POST['nim'];
  $answer_1              = $_POST['answer_1'];
  $answer_2              = $_POST['answer_2'];
  $date_start            = $_POST['date_start'];
  $date_end              = $_POST['date_end'];
  $ceklis = $_POST['ceklis'];
  $date = date('Y-m-d H:i:s');

  //print_r($ceklis);
  // $final_desc = json_encode($description);
  //$checked = explode(',',$description);

  //print_r($description);

  // ss

  if ($_SESSION) {
    $add = $conn->query("INSERT INTO tb_jobdesc_intern (id_jobdesc_intern, id_internship, id_jobdesc, nim, answer_1, answer_2,timestamp_approval) VALUES ('','$id','$id_jobdesc','$nim', '$answer_1', '$answer_2','$date');");
    $idjobin = mysqli_insert_id($conn);
    if ($add) {
      // $popimp = implode(',', $_POST['ceklis']);
      $cekArr=array();
      $cekArr=$_POST['ceklis'];
      foreach($cekArr as $cekid)
      {
        $add2 = $conn->query("INSERT INTO tb_ceklis_jobdesc_intern (id_ceklis, id_detail, id_jobdesc_intern, date_start, date_end) VALUES ('', '$cekid', '$idjobin', '$date_start', '$date_end');");
      //your Insert code here with the insert query ie INSERT INTO bpl_club (club_name) VALUES ('$ClubName')
      }
      if($add2){
        echo "
      <script type='text/javascript'>
      setTimeout(function () { 
      swal({
      title: 'Success',
      text: 'Added Succcesfully!',
      icon: 'success',
      buttons: false
      }); 
      },10); 
      window.setTimeout(function(){ 
      window.history.back();
      } ,2000); 
      </script>
      ";
    }
    if(!$add2){
        echo "
      <script type='text/javascript'>
      setTimeout(function () { 
      swal({
      title: 'Success',
      text: 'Added Succcesfully!',
      icon: 'success',
      buttons: false
      }); 
      },10); 
      window.setTimeout(function(){ 
      window.history.back();
      } ,2000); 
      </script>
      ";

      }
      // if($add2) {
      //   echo "
      // <script type='text/javascript'>
      //  setTimeout(function () { 
      //   swal({
      //     title: 'Success',
      //     text: 'Added Succcesfully!',
      //     icon: 'success',
      //     buttons: false
      //   }); 
      //  },10); 
      //  window.setTimeout(function(){ 
      //   window.history.back();
      //  } ,2000); 
      // </script>
      // ";
      // }
    } else {
      echo ("Error description: " . $conn->error);
      //echo '<script language="javascript">alert("Added Failure"); document.location="index.php?page=spv-addjobdesc";</script>';
    }
  }
}
//   }

//Update Approval Supervisor for Logbook
if ($_GET['PageAction'] == "add_approve") {
  session_start();
  $token_session = $_SESSION['token'];
  $token_post    = mysqli_real_escape_string($conn, $_POST['token']);
  $id            = mysqli_real_escape_string($conn, $_POST['id_internship']);
  $approval_spv  = $_POST['approval_spv'];
  $finalizado    = implode(",", $approval_spv);

  // echo "<pre>";
  // print_r($id);
  // echo "</pre>";

  if ($token_session === $token_post) {


    // $id_logbook      = mysqli_real_escape_string($conn,$_POST['id_logbook']);
    // $approval_spv    = mysqli_real_escape_string($conn,$_POST['approval_spv']);

    if ($_SESSION) {
      $update = $conn->query("UPDATE `tb_logbook` SET 
        `approval_spv` = 'YES'
        WHERE `id_logbook` IN ($finalizado);");
    }
    // echo $id_user_company;
    if ($update) {
      echo "
      <script type='text/javascript'>
       setTimeout(function () { 
        swal({
          title: 'Success',
          text: 'Added Succcesfully!',
          icon: 'success',
          buttons: false
        }); 
       },10); 
       window.setTimeout(function(){ 
        window.history.back();
       } ,2000); 
      </script>
      ";
    }
  } else {
    echo ("Error description: " . $conn->error);
  }
}

//Update Approval Supervisor for Attendance
if ($_GET['PageAction'] == "add_approve_attendance") {
  session_start();
  $token_session = $_SESSION['token'];
  $token_post    = mysqli_real_escape_string($conn, $_POST['token']);
  $id            = mysqli_real_escape_string($conn, $_POST['id_internship']);
  $approval_spv  = $_POST['approval_spv'];
  $finalizado    = implode(",", $approval_spv);

  // echo "<pre>";
  // print_r($id);
  // echo "</pre>";

  if ($token_session === $token_post) {


    // $id_logbook      = mysqli_real_escape_string($conn,$_POST['id_logbook']);
    // $approval_spv    = mysqli_real_escape_string($conn,$_POST['approval_spv']);

    if ($_SESSION) {
      $update = $conn->query("UPDATE `tb_attendance` SET 
        `approval_spv` = 'YES'
        WHERE `id_attendance` IN ($finalizado);");
    }
    // echo $id_user_company;
    if ($update) {
      echo "
      <script type='text/javascript'>
       setTimeout(function () { 
        swal({
          title: 'Success',
          text: 'Added Succcesfully!',
          icon: 'success',
          buttons: false
        }); 
       },10); 
       window.setTimeout(function(){ 
        window.history.back();
       } ,2000); 
      </script>
      ";
    }
  } else {
    echo ("Error description: " . $conn->error);
  }
}

//add disscuss
if($_GET['PageAction'] == "add_discuss"){
  session_start();
  date_default_timezone_set('Asia/Jakarta');
  $token_session = $_SESSION['token'];
  $id_spv = $_POST['id_spv'];
  $title = $_POST['title'];
  $content = $_POST['content'];
  $started = $_SESSION['user_fullname'];
  $date = date('Y-m-d H:i:s');

  if($token_session){
    $query = mysqli_query($conn,"SELECT * FROM (tb_internship LEFT JOIN tb_lecturer ON tb_internship.nik = tb_lecturer.nik) LEFT JOIN tb_student_internship ON tb_student_internship.nim = tb_internship.nim WHERE tb_internship.id_user_company='$id_spv'");
    $inc = mysqli_num_rows($query);

    while($data = mysqli_fetch_assoc($query)){
      $json[] = $data['nim'];
      $json[1] = $id_spv;
      $json[] = $data['nik'];
    }
    $json = json_encode($json);
    // echo "<p>";
    // echo $title."<br/>";
    // echo $content."<br/>";
    // echo $id_own;
    // echo "</p>";
    // print_r($json);

    $insert = mysqli_query($conn,"INSERT INTO tb_discussion VALUES (NULL,'$started','$date','$json','$title','$content')");

    if($insert){
      echo "
      <script type='text/javascript'>
       setTimeout(function () { 
        swal({
          title: 'Success',
          text: 'Added Succcesfully!',
          icon: 'success',
          buttons: false
        }); 
       },10); 
       window.setTimeout(function(){ 
        window.history.back();
       } ,2000); 
      </script>
      ";
    }else{
      echo ("Error description: " . $conn->error);
    }
    
  }
}

if($_GET['PageAction'] == 'add_comment'){
  session_start();
  $id_diskusi = $_POST['id_diskusi'];
  $started_by = $_SESSION['user_fullname'];
  $komen = $_POST['komentar'];
  $date = date('Y-m-d H:i:s');

  $query = mysqli_query($conn,"INSERT INTO tb_comment_discussion VALUES (NULL,'$id_diskusi','$started_by','$komen','$date')");

  if($query){
    echo "
    <script type='text/javascript'>
     setTimeout(function () { 
      swal({
        title: 'Success',
        text: 'Added Succcesfully!',
        icon: 'success',
        buttons: false
      }); 
     },10); 
     window.setTimeout(function(){ 
      window.history.back();
     } ,2000); 
    </script>
    ";
  }else{
    echo ("Error description: " . $conn->error);
  }
}

// Add Student Competency
//Add Feedback from industry Supervisor
if ($_GET['PageAction'] == "add_student_competency") {

  session_start();
  $token_session = $_SESSION['token'];
  $token_post    = mysqli_real_escape_string($conn, $_POST['token']);

  $id_student_detail_profile = mysqli_real_escape_string($conn, $_POST['id_student_detail_profile']);
  $id_profile_jobdesc        = mysqli_real_escape_string($conn, $_POST['id_profile_jobdesc']);
  $id_detail_profile         = mysqli_real_escape_string($conn, $_POST['id_detail_profile']);
  $nim                       = mysqli_real_escape_string($conn, $_POST['nim']);
  $id_detail_unit            = mysqli_real_escape_string($conn, $_POST['id_detail_unit']);
  // $nilai                     = mysqli_real_escape_string($conn, $_POST['nilai']);
  $tgl_mulai                 = mysqli_real_escape_string($conn, $_POST['tgl_mulai']);
  $tgl_selesai               = mysqli_real_escape_string($conn, $_POST['tgl_selesai']);

  // echo "<pre>";
  // print_r($_POST['nilai']);
  // // print_r(array_keys($_POST['nilai']));
  // // print_r($_POST['id_detail_profile']);
  // echo "</pre>";

  foreach($_POST['nilai'] as $id_detail_profile => $nilai){
    $add = $conn->query("INSERT INTO tb_student_detail_profile (id_profile_jobdesc, id_detail_profile, nim, nilai, tgl_mulai, tgl_selesai) VALUES ('$id_profile_jobdesc','$id_detail_profile','$nim', '$nilai', '$tgl_mulai', '$tgl_selesai');");
    // echo $id .">". $nilai ."<br/>";
  }

  if($add){
    echo "
       <script type='text/javascript'>
        setTimeout(function () { 
         swal({
           title: 'Success',
           text: 'Added Succcesfully!',
           icon: 'success',
           buttons: false
         }); 
        },10); 
        window.setTimeout(function(){ 
         window.history.back();
        } ,2000); 
       </script>
       ";
  } 
    }
?>

  
  <!-- Sweet Alert -->
	<script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>