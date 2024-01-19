<?php
include "konek.php";
$hapus = mysqli_query($info, "DELETE FROM user WHERE id_user = '$_GET[id_user]'");
if($hapus > 0){
    header("Location: admin.php");
}else{
    echo "<script>alert('Something wrong !')</script>";
}
?>