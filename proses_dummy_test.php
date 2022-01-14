<html>
  <head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" integrity="sha512-fRVSQp1g2M/EqDBL+UFSams+aw2qk12Pl/REApotuUVK1qEXERk3nrCFChouag/PdDsPk387HJuetJ1HBx8qAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
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
      echo 'alert("Added Successfully"); document.location="index.php?page=hrd-addsupervisor";</script>';
     }  
     else
     {
      // echo("Error description: " . $conn -> error);
       echo '<script language="javascript">alert("User Gagal ditambah"); document.location="index.php?page=hrd-addsupervisor";</script>';
     }
   }
// else{
// //echo '<script language="javascript">alert("Error: Data tidak boleh kosong"); document.location="index.php?page=list_peneliti";</script>';
//        echo "
//            <script type='text/javascript'>
//             setTimeout(function () { 
//        Swal.fire({
//          type: 'error',
//          title: 'Field data cannot be empty',
//          showConfirmButton: false
//        });  
//             },10); 
//             window.setTimeout(function(){ 
//              window.location.replace('index.php?page=hrd-addsupervisor');
//             } ,3000); 
//            </script>
//        "; 
// }
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
    //  $id_user_company = $_GET['id_user_company'];
    //  $select = $conn->query("SELECT * FROM `user_company` WHERE id_user_company = '$id_user_company'");
    //  if(mysqli_num_rows($select) != 0){
     $delete = $conn->query("DELETE FROM tb_user_company WHERE id_user_company = '$_POST[id_user_company]' ");
     if($delete){
     echo '<script language="javascript">alert("Deleted Successfully!"); window.history.back();</script>';
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
    $name            = mysqli_real_escape_string($conn,$_POST['name']);
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
?>