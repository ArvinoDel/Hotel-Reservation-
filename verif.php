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
    <h5>Step 2 of 3</h5>
    <h2>Set Up Your Credit Or Debit Card</h2>
    <div style="text-align:center;">
    
    <?php
        include 'konek.php';
        $query = "SELECT * FROM creditcard where id_card = '$_GET[id_card]'";
        $data=mysqli_query($info, $query);
        $result=mysqli_fetch_array($data)?>

        <img src="foto.jpeg/<?php echo $result['pict']?>" class="img-fluid" alt="" style="width: 20%; text-align:center; border-radius: 10px;"> 
    </div>
    <br>
    <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="full">
  <label for="floatingInput">Full Name Owner Property</label>
</div>
    <div class="form-floating mb-3">
    <?php
        include 'konek.php';
        $query1 = "SELECT * FROM checkout where id_checkout = '$_GET[id_checkout]'";
        $data1=mysqli_query($info, $query1);  
        $result1=mysqli_fetch_array($data1)?>
  <input readonly type="number" class="form-control" id="floatingInput" placeholder="name@example.com" name="no" value="<?php echo $result1['credit_card_id']?>">
  <label for="floatingInput">Card Number</label>
</div>
    <div class="row">
  <div class="col">
  <div class="form-floating mb-3">
  <input type="date" class="form-control" id="floatingInput" placeholder="name@example.com" name="date">
  <label for="floatingInput">Expiration Date</label>
</div>
  </div>
  <div class="col">
  <div class="form-floating">
  <input type="number" class="form-control" id="floatingPassword" placeholder="Password" name="cvv">
  <label for="floatingPassword">CVV</label>
</div>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="cn">
  <label for="floatingInput">&nbsp;&nbsp;&nbsp;Name On Card</label>
</div>
</div>
<input type="submit" name="submit" value="Next" class="btn btn-warning">
    <p>By clicking "Next", you agree to our Terms of Use and Privacy Policy.</p>
    <?php
    include 'konek.php';
    if(isset($_POST['submit'])){
      $full = $_POST['full']; //
      $no = $_POST['no'];//
      $date = $_POST['date'];//
      $cvv = $_POST['cvv'];
      $cn = $_POST['cn'];
      $sql1 = "INSERT INTO verif values ('','$full','$no','$date','$cvv','$cn')";
      $sql2 = mysqli_query($info, "SELECT max(id_verif) AS id_verif FROM verif");
      $sql3 = mysqli_fetch_assoc($sql2);
      $id_verif = $sql3['id_verif'];
      
      //$q1 = mysqli_query($info,$sql1);
      if(mysqli_query($info, $sql1)){
        echo "<script>document.location.href='lastverif.php?id_verif=$id_verif&id_checkout=$_GET[id_checkout]'</script>";
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
