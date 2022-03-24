<h3>Upload Dokumen</h3>

<form action="" method="POST" enctype="multipart/form-data">
<b>File Upload</b> <input type="file" name="NamaFile">
<input type="submit" name="proses" value="Upload">
</form>

<?php
include 'config.php';

if(isset($_POST['proses'])){

    $direktori = "berkas/";
    $file_name=$_FILES['NamaFile']['name'];
    move_uploaded_file($_FILES['NamaFile']['tmp_name'],$direktori.$file_name);

    mysqli_query($conn, "UPDATE tb_logbook SET documentation='$file_name' WHERE id_logbook='16'");
    echo "<b>File berhasil di upload";
}
?>