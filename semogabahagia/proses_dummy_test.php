<link rel="stylesheet" href="dist/css/app.css">
<script src="dist/js/sweetalert2.all.min.js"></script>
<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
include 'config.php';

if($_GET['PageAction'] == "add"){

  session_start();
  $token_session = $_SESSION['token'];
  $token_post    = mysqli_real_escape_string($conn,$_POST['token']);

  if ($token_session === $token_post) {

    $id_user_company = mysqli_real_escape_string($conn,$_POST['id_user_company']);
    $id_company      = mysqli_real_escape_string($conn,$_POST['id_company']);
    $user_fullname   = mysqli_real_escape_string($conn,$_POST['user_fullname']);
    $user_phone      = mysqli_real_escape_string($conn,$_POST['user_phone']);
    $user_email      = mysqli_real_escape_string($conn,$_POST['user_email']);
    $username        = mysqli_real_escape_string($conn,$_POST['username']);
    $passwd          = mysqli_real_escape_string($conn,$_POST['passwd']);
    $user_type       = mysqli_real_escape_string($conn,$_POST['user_type']);

//   $passwd_hash = password_hash($username, PASSWORD_DEFAULT); // hash password
                        
  if($nama && $user){

         $add = $conn->query("INSERT INTO `user_company` (`id_user_company`, `id_company`, `user_fullname`, `user_phone`, `user_email`, `username`, `passwd`, `user_type`) VALUES ('$id_user_company', '$id_company', '$user_fullname', '$user_phone', '$user_email', '$username', '$passwd', '$user_type');");  

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
  else{
   //echo '<script language="javascript">alert("Error: Data tidak boleh kosong"); document.location="index.php?page=list_peneliti";</script>';
            echo "
                <script type='text/javascript'>
                 setTimeout(function () { 
            Swal.fire({
              type: 'error',
              title: 'Field data cannot be empty',
              showConfirmButton: false
            });  
                 },10); 
                 window.setTimeout(function(){ 
                  window.location.replace('index.php?page=hrd-addsupervisor');
                 } ,3000); 
                </script>
            "; 
  }
  } else {
   echo '<script language="javascript">alert("Error: CSRF Protection"); document.location="hrd-index.html";</script>';
  }

}

?>