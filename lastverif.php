<html>
<head>
<?php
include "konek.php";
session_start();
if(!isset($_SESSION['id'])){
 header("Location: checkout1.php");
 exit();
}
?>
<style>
    body {
      background-color: white;
      color: black;
      font-family: Arial, sans-serif;
    }
    form {
      margin: 20px;
      border: 1px solid gray;
      padding: 10px;
      background-color: #f8f9fa;
      border-radius: 5px;
    }
    input {
      display: block;
      margin: 10px;
      padding: 5px;
      border: 1px solid gray;
      border-radius: 3px;
    }
    button:hover {
      background-color: #0056b3;
    }
    p {
      font-size: 12px;
      color: #6c757d;
    }
 </style>
</head>
<body>
<form class="col-8 offset-2 py-3" action="" method="post">
    <h5>Step 3 of 3</h5>
    <h2>Verification Your Information</h2>
    <div style="text-align:center;">
    </div>
    <?php
        include 'konek.php';
        $query1 = "SELECT * FROM checkout where id_checkout = '$_GET[id_checkout]'";
        $query2 = "SELECT * FROM verif where id_verif = '$_GET[id_verif]'";
        $data1=mysqli_query($info, $query1);  
        $data2=mysqli_query($info, $query2); 
        $result1=mysqli_fetch_array($data1);
        $result2=mysqli_fetch_array($data2);
        
        ?>
    <br>
    <div class="form-floating mb-3">
  <input readonly type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="full" value="<?php echo $result2['full_name']?>">
  <label for="floatingInput">Full Name Owner Property</label>
</div>
<div class="form-floating mb-3">
  <input readonly type="test" class="form-control" id="floatingInput" placeholder="name@example.com" name="via" value="<?php echo $result1['via']?>">
  <label for="floatingInput">Via</label>
</div>
<div class="form-floating mb-3">
  <input readonly type="number" class="form-control" id="floatingInput" placeholder="name@example.com" name="total" value="<?php echo $result1['total_price']?>">
  <label for="floatingInput">Total Price</label>
</div>
<div class="form-floating mb-3">
  <input readonly type="number" class="form-control" id="floatingInput" placeholder="name@example.com" name="nik" value="<?php echo $result1['nik']?>">
  <label for="floatingInput">NIK</label>
</div>
    <div class="form-floating mb-3">
  <input readonly type="number" class="form-control" id="floatingInput" placeholder="name@example.com" name="no" value="<?php echo $result2['card_number']?>">
  <label for="floatingInput">Card Number</label>
</div>
<div class="form-floating mb-3">
  <input readonly type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="gmail" value="<?php echo $result1['gmail']?>">
  <label for="floatingInput">Gmail</label>
</div>
    <div class="row">
  <div class="col">
  <div class="form-floating mb-3">
  <input readonly type="date" class="form-control" id="floatingInput" placeholder="name@example.com" name="date" value="<?php echo $result2['exp_date']?>">
  <label for="floatingInput">Expiration Date</label>
</div>
  </div>
  <div class="col">
  <div class="form-floating">
  <input readonly type="number" class="form-control" id="floatingPassword" placeholder="Password" name="cvv" value="<?php echo $result2['cvv']?>">
  <label for="floatingPassword">CVV</label>
</div>
</div>
<div class="form-floating mb-3">
  <input readonly type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="cn" value="<?php echo $result2['name_card']?>">
  <label for="floatingInput">&nbsp;&nbsp;&nbsp;Name On Card</label>
  <p>Note : The information above is completely right and can't be changed.</p>
</div>
</div>
<input type="submit" name="submit" value="Next" class="btn btn-warning">
    <p>By clicking "Next", you agree to our Terms of Use and Privacy Policy.</p>
    <?php
    include 'konek.php';
    $id_user = $result1['id_user'];
    $id_property = $result1['id_property'];
    $id_checkout = $result1['id_checkout'];
    $id_verif = $result2['id_verif'];
    if(isset($_POST['submit'])){
      $full = $_POST['full'];
      $via = $_POST['via'];
      $total = $_POST['total'];
      $nik = $_POST['nik'];
      $gmail = $_POST['gmail'];
      $no = $_POST['no'];
      $date = $_POST['date'];
      $cvv = $_POST['cvv'];
      $cn = $_POST['cn'];
      $now = date("Y-m-d");
      $sql1 = "INSERT INTO lastverif values('', '$now', '$id_user', '$id_verif', '$id_property', '$id_checkout', '$via','$total', '$nik', '$full', '$gmail','$no','$date','$cvv','$cn')";
      $sql2 = mysqli_query($info, "SELECT max(id_last) AS id_last FROM lastverif");
      $sql3 = mysqli_fetch_assoc($sql2);
      $id_last = $sql3['id_last'] + 1;
     
      $sql4 = "SELECT * FROM property where id_property = $id_property";
      $data4 = mysqli_query($info, $sql4);
      while ($result4 = mysqli_fetch_array($data4)) {
      $stock = $result4['stock'];
      }
      if($sql4){
        $stock = $stock - 1;
        $sql5 = "UPDATE property SET stock = $stock WHERE id_property = $id_property";
      }
      $q1 = mysqli_query($info,$sql1);
      if($q1>0){
        echo "<script>document.location.href='struk.php?id_last=$id_last'</script>";
        //header("Location: verif.php");
        exit();
      }else{
        echo "<script>alert('Something wrong !')</script>";
        header("Location: verif.php");
        exit();
      }
    }
    ?>
  </form>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</body>
</html>
