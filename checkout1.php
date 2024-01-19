<?php
include "konek.php";
session_start();
if (!isset($_SESSION['id'])) {
  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <head>
    <title>Checkout Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
      body {
        background-color: #b6895b !important;
        font-family: PT serif;
      }

      .price {
        color: green;
      }

      .atas {
        background-color: darkorange;
      }

      .floatingSelect {
        text-align: center;
        margin: 0px auto;
      }

      #buy {
        margin: 0px auto;
        text-align: center;
      }

      .img-fluid {
        width: 50%;
        border-radius: 3px;
      }
    </style>
  </head>

<body>
  <nav class="navbar navbar-expand-lg bg-warning">
    <div class="container-fluid">
      <a href="bootstrap1.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
          <path d="M22.649 12.8448L13.274 2.42813C12.8792 1.98854 12.1209 1.98854 11.7261 2.42813L2.35107 12.8448C2.21612 12.9944 2.12755 13.1799 2.09611 13.3789C2.06467 13.5779 2.09173 13.7817 2.17398 13.9656C2.34065 14.3417 2.71357 14.5833 3.12502 14.5833H5.20836V21.875C5.20836 22.1513 5.3181 22.4162 5.51345 22.6116C5.7088 22.8069 5.97376 22.9167 6.25002 22.9167H9.37502C9.65129 22.9167 9.91624 22.8069 10.1116 22.6116C10.3069 22.4162 10.4167 22.1513 10.4167 21.875V17.7083H14.5834V21.875C14.5834 22.1513 14.6931 22.4162 14.8885 22.6116C15.0838 22.8069 15.3488 22.9167 15.625 22.9167H18.75C19.0263 22.9167 19.2912 22.8069 19.4866 22.6116C19.6819 22.4162 19.7917 22.1513 19.7917 21.875V14.5833H21.875C22.0768 14.5842 22.2744 14.5263 22.4438 14.4168C22.6132 14.3073 22.7471 14.1509 22.8292 13.9666C22.9112 13.7823 22.9379 13.5781 22.9059 13.3789C22.8739 13.1797 22.7846 12.9941 22.649 12.8448Z" fill="gray" />
        </svg>
      </a>
      <a class="navbar-brand text-primary" href="#">SaveHome</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-primary" aria-current="page" href="bootstrap1.php">Home</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div style="text-align: center;">
    <?php
    include 'konek.php';
    $query = "SELECT * FROM property where id_property = '$_GET[id_property]'";
    $data = mysqli_query($info, $query);
    $result = mysqli_fetch_array($data);
    if ($result['stock'] < 1) {
      echo '<div style="overflow: hidden;">';
      echo '<div class="alert-card" style="width: 300px; padding: 20px; background-color: #ff6961; color: #fff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin: 40px auto; text-align: center;" onclick="redirectToBootstrap()">Product is unavailable!</div>';
      echo "<script>function disableScroll() {document.body.style.overflow = 'hidden';}</script>";
      echo "<script>function redirectToBootstrap(){ window.location.href = 'bootstrap1.php';}</script>";
      echo "<script>setTimeout(function(){window.location.href = 'bootstrap1.php';}, 2000);</script>";
    }
   
    ?>

    
    <h1>Product</h1>
    <img src="foto.jpeg/<?php echo $result['img1'] ?>" class="img-fluid" alt="">
    <h1><?php echo $result['room'] ?></h1><br>
    <h2>Price The Condominium is <br><span class="price">$<?php echo $result['price'] ?></h2></span>
    <p>Description of the product:<br>
      The deluxe room with single bed and modern furniture, with classy pool room in the outside.<br>
      It's on the seventh floor, with beautiful aspect.<br>
      Have a bathup, shower, 4K TV, WiFi, Long window, Living room, Kitchen withn full furniture and comfy bed
    </p>
    <div class="mb-2 row" id="buy" style="text-align: center;">
    </div>

    <article>

      <hr>
      <?php
      include 'konek.php';
      $query1 = "SELECT * FROM user where id_user = '$_SESSION[id]'";
      $data1 = mysqli_query($info, $query1);
      while ($result1 = mysqli_fetch_array($data1)) { ?>
        <form class="col-8 offset-2 py-3" action="" method="post">
          <h1>Payment Information</h1>
          <div class="mb-3 row">

            <input type="hidden" class="form-control" id="p" name="price" value="<?php echo $result['price'] ?>">

            <label for="name" class="col-sm-2 col-form-label">NIK :</label>
            <div class="col-sm-8">
              <input readonly type="number" class="form-control" id="nik" name="nik" value="<?php echo $result1['nik'] ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Name :</label>
            <div class="col-sm-8">
              <input readonly type="text" class="form-control" id="name" name="name" value="<?php echo $result1['username'] ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email :</label>
            <div class="col-sm-8">
              <input readonly type="email" class="form-control" id="email" name="email" value="<?php echo $result1['gmail'] ?>">
              <div id="emailHelp" class="form-text">Your Information Has Been Saved in our Database.</div>
            </div>
          </div>

          <div class="mb-3 row">
            <label for="credit" class="col-sm-2 col-form-label">Credit Card Id</label>
            <div class="col-sm-8">
              <input type="number" class="form-control" id="credit" name="credit">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="credit" name="card" class="col-sm-2 col-form-label">Credit Card </label>
            <div class="col-sm-8">
              <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="select">
                <option selected>Payment Method</option>
                <option value="Golden Card Credit">Golden Card Credit</option>
                <option value="Black Card Credit">Black Card Credit</option>
                <option value="Queen Card Credit">Queen Card Credit</option>
                <option value="King Card Credit">King Card Credit</option>
                <option value="PayPal">PayPal</option>
                <option value="BCA Express Credit">BCA Express Credit</option>
                <option value="Mandiri Platinum Card Credit">Mandiri Platinum Card Credit</option>
                <option value="BRI Priority Card Credit">BRI Priority Card Credit</option>
              </select>
              <label for="floatingSelect">Works with selects</label>
            </div>
          </div>
        <?php
      }
        ?>
        <input type="submit" value="Pay Now" name="submit" onclick="clearPlaceholder()"><br>
        </form>
</body>
<?php
include 'konek.php';
if (isset($_POST['submit'])) {
  $nik = $_POST['nik']; //
  $email = $_POST['email']; //
  $name = $_POST['name']; //
  $card_id = $_POST['credit'];
  $card = $_POST['select'];
  $price = $_POST['price']; //
  $id_user = $_SESSION['id'];
  $id_property = $_GET['id_property'];
  $sql1 = "INSERT INTO checkout values ('$id_user','$card_id','$id_property','','$card','$price','$nik','$name','$email')";
  //$last_id = mysqli_insert_id($info);
  $sql2 = mysqli_query($info, "SELECT max(id_checkout) AS id_checkout FROM checkout");
  $sql3 = mysqli_fetch_assoc($sql2);
  $id_checkout = $sql3['id_checkout'] + 1;
  if ($card == 'Golden Card Credit') {
    $id_card = 4;
  } elseif ($card == 'Black Card Credit') {
    $id_card = 1;
  } elseif ($card == 'Queen Card Credit') {
    $id_card = 2;
  } elseif ($card == 'King Card Credit') {
    $id_card = 3;
  } elseif ($card == 'PayPal') {
    $id_card = 5;
  } elseif ($card == 'BCA Express Credit') {
    $id_card = 6;
  } elseif ($card == 'Mandiri Platinum Card Credit') {
    $id_card = 7;
  } elseif ($card == 'BRI Priority Card Credit') {
    $id_card = 8;
  } else {
    echo "error !";
  }

  //$q1 = mysqli_query($info,$sql1);
  if (mysqli_query($info, $sql1)) {
    echo "<script>document.location.href='verif.php?id_card=$id_card&id_checkout=$id_checkout'</script>";
    //header("Location: verif.php");
    exit();
  } else {
    echo "<script>alert('Something wrong !')</script>";
    header("Location: checkout1.php");
    exit();
  }
}
?>