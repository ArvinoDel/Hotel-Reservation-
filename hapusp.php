<?php
include "konek.php";
$hapus = mysqli_query($info, "DELETE FROM property WHERE id_property = '$_GET[id_property]'");
if($hapus > 0){
    header("Location: admin.php");
}else{
    echo "<script>alert('Something wrong !')</script>";
}
?>