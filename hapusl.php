<?php
include "konek.php";
$hapus = mysqli_query($info, "DELETE FROM lastverif WHERE id_last = '$_GET[id_last]'");
if($hapus > 0){
    header("Location: admin5.php");
}else{
    echo "<script>alert('Something wrong !')</script>";
}
?>