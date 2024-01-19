<?php
session_start();
$id_admin = $_SESSION['id'];
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
            height: 120vh;
            background-size: cover;
        }
        #new{
          text-decoration: none;
        }
        .table{
            position: absolute;
            top: 60vh;
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
  $username = $_POST['username'];
  $password = $_POST['password'];
  $img =$_POST['img'];
  $gmail = $_POST['gmail'];
  $sql1 = "update admin set username='$username', password='$password', img='$img', gmail='$gmail' where id_admin= $id_admin";
  $q1 = mysqli_query($info,$sql1);
 if($q1){
  header("Location:admin.php");
 }else{  
  echo "<script>alert('Something wrong !')</script>";
  header("location:editppadmin.php");
 }
}
?>
<body>
 <header>
<div class=" mx-auto position-relative pt-5" >
    <div class="table translate-middle" >
        <form class="col-8 offset-2 py-3" action="" method="post">
            <div class="mb-3">
                <label for="Username" class="form-label">Username</label>
                <input type="text" class="form-control" id="Username" name="username">
                <div id="pwHelp" class="form-text">Edit Your Username.</div>
              </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password">
              <div id="pwHelp" class="form-text">Edit Your Password.</div>
            </div>
            <div class="mb-3">
                <label for="Gmail" class="form-label">Gmail</label>
                <input type="email" class="form-control" id="gmail" name="gmail">
                <div id="pwHelp" class="form-text">Edit Your Gmail</div>
              </div>
            <div class="mb-3">
                <label for="Img" class="form-label">Img url</label>
                <input type="text" class="form-control" id="Img" name="img">
                <div id="pwHelp" class="form-text">Change Your Picture by URL.</div>
              </div>
          <input type="submit" name="edit" value="Done !" class="btn btn-warning">
          <br>
          </form>
    </div>
</div>
 </header>
</body>
</html>