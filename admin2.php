<?php
session_start();
if($_SESSION['id'] == ""){
  header("Location:login1.php");
}else{
  $id = $_SESSION['id'];
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Responsiive Admin Dashboard</title>
  <link rel="stylesheet" href="style.css">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
  .chevron-container {
    display: inline-block;
    position: relative;
    cursor: pointer;
  }

  .chevron-container.active i {
    transform: rotate(180deg);
  }

  .content {
    display: none;
    margin-top: 10px;
  }

  .chevron-container.active .content {
    display: block;
  }

  .charts{
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-top: 60px;
  }

  .charts-card{
    background-color: white;
    margin-bottom: 20px;
    padding: 25px;
    box-sizing: border-box;
    -webkit-column-break-inside: avoid;
    border-radius: 5px;
    box-shadow: 0 6px 7px rgba(0, 0, 0, 2);
  }

  .chart-title{
    display: flex;
    align-items: center;
    justify-content: center;
  }
</style>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
        <path d="M22.649 12.8448L13.274 2.42813C12.8792 1.98854 12.1209 1.98854 11.7261 2.42813L2.35107 12.8448C2.21612 12.9944 2.12755 13.1799 2.09611 13.3789C2.06467 13.5779 2.09173 13.7817 2.17398 13.9656C2.34065 14.3417 2.71357 14.5833 3.12502 14.5833H5.20836V21.875C5.20836 22.1513 5.3181 22.4162 5.51345 22.6116C5.7088 22.8069 5.97376 22.9167 6.25002 22.9167H9.37502C9.65129 22.9167 9.91624 22.8069 10.1116 22.6116C10.3069 22.4162 10.4167 22.1513 10.4167 21.875V17.7083H14.5834V21.875C14.5834 22.1513 14.6931 22.4162 14.8885 22.6116C15.0838 22.8069 15.3488 22.9167 15.625 22.9167H18.75C19.0263 22.9167 19.2912 22.8069 19.4866 22.6116C19.6819 22.4162 19.7917 22.1513 19.7917 21.875V14.5833H21.875C22.0768 14.5842 22.2744 14.5263 22.4438 14.4168C22.6132 14.3073 22.7471 14.1509 22.8292 13.9666C22.9112 13.7823 22.9379 13.5781 22.9059 13.3789C22.8739 13.1797 22.7846 12.9941 22.649 12.8448Z" fill="gray" />
      </svg>
      <span class="logo_name">SaveHome</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="admin.php" class="">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="admin1.php" class="">
          <i class='bx bx-pie-chart-alt-2'></i>
          <span class="links_name">Analytics</span>
        </a>
      </li>
      <li>
        <a href="#user" class="active">
          <i class='bx bx-user'></i>
          <span class="links_name">Data User</span>
        </a>
      </li>
      <li>
        <a href="admin3.php">
          <i class='bx bx-box'></i>
          <span class="links_name">Properties</span>
        </a>
      </li>
      <li>
        <a href="admin4.php">
          <i class='bx bx-coin-stack'></i>
          <span class="links_name">Stock</span>
        </a>
      </li>
      <li>
        <a href="admin5.php">
          <i class='bx bx-book-alt'></i>
          <span class="links_name">Total order</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-heart'></i>
          <span class="links_name">Favorites</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog'></i>
          <span class="links_name">Setting</span>
        </a>
      </li>
      <li class="log_out">
        <a href="logout.php">
          <i class='bx bx-log-out'></i>
          <span class="links_name">Log out</span>
        </a>
      </li>
    </ul>
  </div>
  <section id="home" class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search'></i>
      </div>
      <div class="btn-group dropstart">
      <div class="profile-details" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <?php
        include 'konek.php';
        $query = mysqli_query($info, "SELECT * FROM admin where id_admin = '$id'");
        $data=mysqli_fetch_assoc($query);
        
        ?>
        <img src="<?php echo $data['img'];?>" alt="">
        <span class="admin_name"><?php echo $data['username']; ?></span>
        <div class="dropdown-menu p-2" style="width: 400px;">
        <div class="text-center">
                <img src="<?php echo $data['img']?>" style="width: 60px; height: 60px; border-radius: 50%;" class="mx-5">
                <p class="pgrf" style="text-align: center;">
                  <h4><?php echo $data['username']?></h4>
                  <h5 class="form-text"><?php echo $data['gmail']?></h5>
                  <hr>
                </p>
                <a href="editppadmin.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                <path d="M3.25233 19.1932H18.744C18.8656 19.1932 18.9821 19.1449 19.0681 19.0589C19.154 18.973 19.2023 18.8564 19.2023 18.7348C19.2023 18.6133 19.154 18.4967 19.0681 18.4107C18.9821 18.3248 18.8656 18.2765 18.744 18.2765H3.25233C3.13077 18.2765 3.0142 18.3248 2.92824 18.4107C2.84229 18.4967 2.794 18.6133 2.794 18.7348C2.794 18.8564 2.84229 18.973 2.92824 19.0589C3.0142 19.1449 3.13077 19.1932 3.25233 19.1932ZM8.90083 15.7483C9.28803 15.64 9.64132 15.4349 9.9275 15.1525L18.6725 6.4075C18.972 6.10684 19.1401 5.69977 19.1401 5.27542C19.1401 4.85106 18.972 4.44399 18.6725 4.14333L17.8108 3.29083C17.5059 2.99957 17.1004 2.83704 16.6787 2.83704C16.2571 2.83704 15.8516 2.99957 15.5467 3.29083L6.80167 12.0267C6.51873 12.311 6.31628 12.6652 6.215 13.0533L5.53667 15.5833C5.50448 15.6989 5.50365 15.821 5.53426 15.9369C5.56487 16.0529 5.62582 16.1587 5.71083 16.2433C5.84058 16.3709 6.01473 16.4432 6.19667 16.445L8.90083 15.7483ZM9.27667 14.5017C9.10768 14.6737 8.89556 14.7972 8.6625 14.8592L7.77333 15.0975L6.85667 14.1808L7.095 13.2917C7.15912 13.0595 7.28228 12.8479 7.4525 12.6775L7.80083 12.3383L9.625 14.1625L9.27667 14.5017ZM10.2758 13.5117L8.45167 11.6875L14.6208 5.51833L16.445 7.3425L10.2758 13.5117ZM18.0217 5.76583L17.0958 6.69167L15.2717 4.8675L16.1975 3.9325C16.2612 3.86853 16.3369 3.81777 16.4203 3.78314C16.5037 3.7485 16.5931 3.73068 16.6833 3.73068C16.7736 3.73068 16.863 3.7485 16.9464 3.78314C17.0297 3.81777 17.1055 3.86853 17.1692 3.9325L18.0217 4.79417C18.1495 4.92354 18.2212 5.0981 18.2212 5.28C18.2212 5.46189 18.1495 5.63646 18.0217 5.76583Z" fill="black"/>
                </svg>
                </a>
                Edit Your Profile</br>
          </div>
        </div>
      </div>
     </div>
    </nav>

    <div class="home-content">
          <div class="card">
             <div class="card-header text-white bg-secondary">
          Users Information
          </div>
          <div class="card-body">
    
         </div>
         <table class="table">
         <thead>
         <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Gmail</th>
            <th scope="col">Password</th>
            <th scope="col">Profile Picture</th>
         </tr>
         </thead>
         <tbody>
          <?php
          $sql1 = "select * from user order by id_user desc";
          $q1 = mysqli_query($info, $sql1);
          $urut = 1;
    
          while($r2 = mysqli_fetch_array($q1)){
            $id = $r2['id_user'];
            $username = $r2['username'];
            $gmail = $r2['gmail'];
            $password = $r2['password'];
            $foto = $r2['img'];
          
          ?>
         <tr id="user">
           <th scope="row"><?php echo $id ?></th>
             <td scope="row"><?php echo $username ?></td>
             <td scope="row"><?php echo $gmail ?></td>
             <td scope="row"><?php echo $password ?></td>
             <td scope="row"> <img src="img/<?php echo $r2['img']?>" width="60px"></td>
             <td scope="row">
               <a href="hapus.php?id_user=<?=$r2['id_user']?>" class="btn btn-danger" style="text-decoration:none;">Hapus</a>
             </td>
            </tr>
         <?php
          }
         ?>
         </tbody>
       </table>
          </div>
    </div>

  <script>
 const sidebar = document.querySelector(".sidebar");
const sidebarBtn = document.querySelector(".sidebarBtn");
const toggleElements = document.querySelectorAll(".toggle-element");

sidebarBtn.onclick = function() {
  toggleSidebar();
};

toggleElements.forEach((element) => {
  element.addEventListener("click", function() {
    toggleElements.forEach((el) => el.classList.remove("active")); // Deactivate all elements
    element.classList.add("active"); // Activate the clicked element
    toggleSidebar();
  });
});

function toggleSidebar() {
  sidebar.classList.toggle("active");
  if (sidebar.classList.contains("active")) {
    sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
  } else {
    sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
  }
}
  </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.42.0/apexcharts.min.js" integrity="sha512-HctQcT5hnI/elQck4950pvd50RuDnjCSGSoHI8CNyQIYVxsUoyJ+gSQIOrll4oM/Z7Kfi7WCLMIbJbiwYHFCpA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>

</html>