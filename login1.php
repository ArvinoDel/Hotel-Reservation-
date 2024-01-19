<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <style>
        header{
            background-image: url(../andikaprepare/foto.jpeg/kondominium7.jpg);
            height: 100vh;
            background-size: cover;
        }
        #new{
          text-decoration: none;
        }
        .table{
            position: absolute;
            top: 50vh;
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
        .title{
            font-family: 'Merriweather', serif;
            color: orange;
        }
    </style>
</head>
<?php
include 'konek.php';
if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql1 = "select * from admin where username='$username' and password='$password'";
  $q1 = mysqli_query($info, $sql1);
  $r1 = mysqli_fetch_assoc($q1);
  if(mysqli_num_rows($q1)>0){
    $_SESSION['id'] = $r1['id_admin'];
    header("Location: admin.php");
  }else{
    header("Location: login1.php");
  }
}
?>
<body>
 <header>
    
<div class=" mx-auto position-relative">
    <div class="table translate-middle">
    <form class="col-8 offset-2 py-3" action="" method="post">
    <h1><p class="title">Admin Login</p></h1>
            <div class="mb-3">
                <label for="Username" class="form-label">Username</label>
                <input type="text" class="form-control" id="Username" name="username" required>
              </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
              <div id="pwHelp" class="form-text"> Your Password</div>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <input type="submit" name="login" value="Log in" class="btn btn-warning">
            <br>
          </form>
    </div>
</div>`
 </header>
</body>
</html>