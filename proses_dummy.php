<link rel="stylesheet" href="dist/css/app.css">
<script src="dist/js/sweetalert2.all.min.js"></script>
<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
include 'config.php';

if($_GET['PageAction'] == "add"){

  $id_user_company = mysqli_real_escape_string($conn,$_POST['id_user_company']);
  $id_company      = mysqli_real_escape_string($conn,$_POST['id_company']);
  $user_fullname   = mysqli_real_escape_string($conn,$_POST['user_fullname']);
  $user_phone      = mysqli_real_escape_string($conn,$_POST['user_phone']);
  $user_email      = mysqli_real_escape_string($conn,$_POST['user_email']);
  $username        = mysqli_real_escape_string($conn,$_POST['username']);
  $password       = mysqli_real_escape_string($conn,$_POST['password']);
  $user_type       = mysqli_real_escape_string($conn,$_POST['user_type']);

  // $passwd_hash = password_hash($username, PASSWORD_DEFAULT); // hash password
                        
         $add = $conn->query("INSERT INTO `user_company` (`id_user_company`, `id_company`, `user_fullname`, `user_phone`, `user_email`, `username`, `password`, `user_type`) VALUES ('$id_user_company', '$id_company', '$user_fullname', '$user_phone', '$user_email', '$username', '$password', '$user_type');");  

         if($add){
           echo "
              <script type='text/javascript'>
               setTimeout(function () { 
          Swal.fire({
            type: 'success',
            title: 'Penambahan User Berhasil',
            showConfirmButton: false
          });  
               },10); 
               window.setTimeout(function(){ 
                window.location.replace('index.php?page=hrd-addsupervisor');
               } ,3000); 
              </script>
            ";
          }
          else
          {
            echo '<script language="javascript">alert("User Gagal ditambah"); document.location="index.php?page=hrd-addsupervisor";</script>';
            //echo("Error description: " . $conn -> error);
            
          }

}

?>