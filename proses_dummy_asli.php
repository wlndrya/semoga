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

  $nama          = mysqli_real_escape_string($conn,$_POST['nama']);
  $username      = mysqli_real_escape_string($conn,$_POST['username']);
  $role          = mysqli_real_escape_string($conn,$_POST['role']);

  $passwd_hash = password_hash($username, PASSWORD_DEFAULT); // hash password
                        
  if($nama && $username){

         $in = $conn->query("INSERT INTO `tb_user` (`id_user`, `name`, `username`, `password`, `role`) VALUES (NULL, '$nama', '$username', '$passwd_hash', '$role');");  

         if($in){
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
                window.location.replace('index.php?page=list_user');
               } ,3000); 
              </script>
            ";
          }
          else
          {
            echo '<script language="javascript">alert("User Gagal ditambah"); document.location="index.php?page=list_anggota";</script>';
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
                  window.location.replace('index.php?page=list_anggota');
                 } ,3000); 
                </script>
            "; 
  }
  } else {
   echo '<script language="javascript">alert("Error: CSRF Protection"); document.location="index.php";</script>';
  }

}

?>