<?php
session_start();
$id_property = $_GET['id_property'];
include 'konek.php';
$result = mysqli_query($info, "SELECT * FROM property where id_property ='$_GET[id_property]'");
while ($data = mysqli_fetch_array($result)){
  $room = $data['room'];
  $floor = $data['floor_area'];
  $price = $data['price'];
  $img1 = $data['img1'];
  $alamat = $data['alamat'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        header{
            background-image: url(../andikaprepare/foto.jpeg/kondominium7.jpg);
            height: 160vh;
            background-size: cover;
        }
        #new{
          text-decoration: none;
        }
        .table{
            position: absolute;
            top: 80vh;
            left: 50vw;
            border: 2px solid gray;
            border-radius: 5px;
            height: auto;
            width: 500px;
            border-radius: 15px;
            background: rgba(124, 124, 124, 0.39);
            box-shadow: 8px 4px 7px 0px rgba(0, 0, 0, 0.25);
        }
        form{
            text-align: center;
            color: black;
        }
    </style>
</head>
<?php
include 'konek.php';
if(isset($_POST['edit'])){
  $room = $_POST['room'];
  $floor = $_POST['floor'];
  $price = $_POST['price'];
  $alamat = $_POST['alamat'];
  $img1 = $_FILES['img1']['name'];
  $ekstensi1 = array('png','jpeg','jpg');
  $x = explode('.', $img1);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['img1']['tmp_name'];
  $sql1 = "update property set alamat='$alamat', room='$room', floor_area='$floor', price='$price', img1='$img1' where id_property= $id_property";
  $q1 = mysqli_query($info,$sql1);
  if(in_array($ekstensi, $ekstensi1) === true){
    move_uploaded_file($file_tmp, 'foto.jpeg/'.$img1);
  }else{
    echo "<script>alert('Something wrong !')</script>";
  }
 if($q1){
  header("Location:admin.php");
 }else{  
  echo "<script>alert('Something wrong !')</script>";
  header("location:update.php");
 }
}
?>
<body>
 <header>
<div class=" mx-auto position-relative pt-5" >
    <div class="table translate-middle" >
        <form class="col-8 offset-2 py-3" action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
                <label for="Room" class="form-label">Room</label>
                <input type="text" class="form-control" id="Room" name="room" value="<?=@$room?>">
                <div id="pwHelp" class="form-text"></div>
              </div>
              <div class="mb-3">
                <label for="Alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="Room" name="alamat" value="<?=@$alamat?>">
                <div id="pwHelp" class="form-text"></div>
              </div>
            <div class="mb-3">
                <label for="Floor Area" class="form-label">Floor Area</label>
                <input type="text" class="form-control" id="Floor" name="floor" value="<?=@$floor?>">
                <div id="pwHelp" class="form-text"></div>
              </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Price</label>
              <input type="number" class="form-control" id="exampleInputPassword1" name="price" value="<?=@$price?>">
              <div id="pwHelp" class="form-text"></div>
            </div>
              <div class="mb-3">
                <label for="Img2" class="form-label">Img File</label>
                <input type="file" class="form-control" id="img1" name="img1" value="<?=@$img1?>">
                <div id="pwHelp" class="form-text">Change Your Picture by file</div>
              </div>
          <input type="submit" name="edit" value="Done !" class="btn btn-warning">
          <br>
          </form>
    </div>
</div>
 </header>
</body>
</html>