<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SaveHome Landing page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <style>
    #flex-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: start;
      overflow-x: auto;
      background-color: rgb(255, 255, 255);
    }
    

    .carousel-inner {
      min-height: 300px;
      max-height: 600;
      width: 100%;
    }

    ::-webkit-scrollbar {
      display: none;
    }

    footer {
      bottom: 0;
      text-align: center;
      padding: 10px;
      width: 100%;

      height: fit-content;
      color: #fffdfd;
      font-size: 1.2em;
      text-transform: uppercase;
      font-family: "Courier New", Courier, monospace;
      box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
    }

    a {
      text-decoration: none;
    }

    .card {
      background-color: rgb(253, 253, 253);
    }
    .room{
      color: orange;
    }
  </style>
  <script>
    function clearPlaceholder() {
      let =
      document.getElementById('complain-input').value = '';
    }
  </script>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-warning">
    <div class="container-fluid">
      <a href="#scroll">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
          <path d="M22.649 12.8448L13.274 2.42813C12.8792 1.98854 12.1209 1.98854 11.7261 2.42813L2.35107 12.8448C2.21612 12.9944 2.12755 13.1799 2.09611 13.3789C2.06467 13.5779 2.09173 13.7817 2.17398 13.9656C2.34065 14.3417 2.71357 14.5833 3.12502 14.5833H5.20836V21.875C5.20836 22.1513 5.3181 22.4162 5.51345 22.6116C5.7088 22.8069 5.97376 22.9167 6.25002 22.9167H9.37502C9.65129 22.9167 9.91624 22.8069 10.1116 22.6116C10.3069 22.4162 10.4167 22.1513 10.4167 21.875V17.7083H14.5834V21.875C14.5834 22.1513 14.6931 22.4162 14.8885 22.6116C15.0838 22.8069 15.3488 22.9167 15.625 22.9167H18.75C19.0263 22.9167 19.2912 22.8069 19.4866 22.6116C19.6819 22.4162 19.7917 22.1513 19.7917 21.875V14.5833H21.875C22.0768 14.5842 22.2744 14.5263 22.4438 14.4168C22.6132 14.3073 22.7471 14.1509 22.8292 13.9666C22.9112 13.7823 22.9379 13.5781 22.9059 13.3789C22.8739 13.1797 22.7846 12.9941 22.649 12.8448Z" fill="gray"/>
        </svg>
      </a>
      <a class="navbar-brand text-primary" href="#">SaveHome</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-primary" aria-current="page" href="#flex-container">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="#about">Contacts</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link text-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Account
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="sign.php">Register</a></li>
              <li><a class="dropdown-item" href="login.php">Login</a></li>
            </ul>
          </li>
        </ul>
        <form action="https://www.google.com/search" method="get" class="d-flex" role="search">
          <input class="form-control me-2" type="search" name="q" placeholder="Search" aria-label="Search" required>
          <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      </div>
    </div>
  </nav>

  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="foto.jpeg/kondominium7.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="foto.jpeg/kondominium8.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="foto.jpeg/kondominium9.jpg" class="d-block w-100">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- content -->
        
  <div class="container-fluid" id="flex-container">
    <div class="d-flex flex-nowrap">
  <?php
        include 'konek.php';
        $query = "SELECT * FROM property";
        $data=mysqli_query($info, $query);
        while($result=mysqli_fetch_array($data)){?>
      <a href="checkout1.php?id_property=<?=$result['id_property']?>">
        <div class="card m-3" style="width: 15rem;">
          <img src="foto.jpeg/<?php echo $result['img1']?>" class="card-img-top" alt="" style="width: 100%;">
          <div class="card-body">
            <h4 class="room"><?php echo $result['room']?></h4>
            <p class="card-text">Kondomunium dengan desain yang futuristik dan modern</p>
          </div>
        </div>
      </a>
      <?php }?>
    </div>
  </div>
    <br>

    <div class="row"></div>
    <hr>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
      integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
      crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
      integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
      crossorigin="anonymous"></script>

    </div>
    <div class="row">

      <div class="col-6 col-md-6 order-1" id="scroll">
        <img src="foto.jpeg/bg2.jpg" alt="" class="img-fluid border rounded">
      </div>
      <div class="col-6 col-md-6 border rounded p-4">
        <h1 class="mb-4">About Our Company</h1>
        <p>Perusahaan Kondominium "SaveHome" adalah sebuah perusahaan properti yang mengkhususkan diri dalam pengembangan,
          pembangunan, dan pengelolaan kondominium mewah. Kami berkomitmen untuk memberikan lingkungan tinggal yang
          eksklusif dan bergengsi kepada para penghuni kami.
  
          Sebagai perusahaan kondominium terkemuka, kami menawarkan desain yang inovatif, kualitas bangunan yang tinggi,
          dan fasilitas modern yang mewah. Setiap proyek kami dirancang dengan teliti untuk menciptakan lingkungan yang
          nyaman, aman, dan bergaya bagi para penghuni kami.
  
          Kami memiliki tim ahli yang terdiri dari arsitek, insinyur, dan desainer terbaik dalam industri properti. Mereka
          bekerja sama untuk menciptakan bangunan yang indah secara estetika, fungsional, dan ramah lingkungan. Setiap
          detail, mulai dari tata letak interior hingga pemilihan bahan bangunan, dipilih dengan hati-hati untuk
          memberikan pengalaman hidup yang tak tertandingi.</p>
      </div>
    </div>
  <footer id="about" style="margin-top: 100px;">
    <div class="text-center p-3 bg-dark">
      <div class="row">
        <div class="col">
          Contacts: <br>
          <a href="mailto:andikasupriyadi27@gmail.com">
            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="23" viewBox="0 0 31 23" fill="none">
  <g clip-path="url(#clip0_1_20)">
    <path d="M6.93472 22.8868V11.0996L3.27915 7.75529L0.00111389 5.89944V20.8067C0.00111389 21.9576 0.933627 22.8868 2.08124 22.8868H6.93472Z" fill="#4285F4"/>
    <path d="M23.5753 22.8868H28.4288C29.5798 22.8868 30.5089 21.9542 30.5089 20.8067V5.89956L26.796 8.02521L23.5753 11.0996V22.8868Z" fill="#34A853"/>
    <path d="M6.93472 11.0996L6.4373 6.49398L6.93472 2.08597L15.255 8.32624L23.5753 2.08597L24.1317 6.256L23.5753 11.0996L15.255 17.3399L6.93472 11.0996Z" fill="#EA4335"/>
    <path d="M23.5753 2.08597V11.0996L30.5089 5.89944V3.12598C30.5089 0.55367 27.5725 -0.912729 25.5168 0.629939L23.5753 2.08597Z" fill="#FBBC04"/>
    <path d="M0.00111389 5.89946L3.19001 8.29122L6.93472 11.0996V2.08599L4.99319 0.629956C2.93391 -0.912832 0.00111389 0.553686 0.00111389 3.12587V5.89934V5.89946Z" fill="#C5221F"/>
  </g>
  <defs>
    <clipPath id="clip0_1_20">
      <rect width="30.51" height="23" fill="white"/>
    </clipPath>
  </defs>
</svg>
</a><br>

          <a href="https://wa.me/+6281224265685">
           <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
  <g clip-path="url(#clip0_1_26)">
    <path d="M0.491159 11.3624C0.490625 13.2948 0.995555 15.1817 1.95567 16.8448L0.399338 22.5273L6.21459 21.0025C7.82301 21.8781 9.62514 22.3369 11.4565 22.337H11.4613C17.5068 22.337 22.428 17.4176 22.4306 11.371C22.4317 8.441 21.2917 5.68582 19.2205 3.61296C17.1496 1.54029 14.3954 0.398222 11.4608 0.396885C5.41459 0.396885 0.493745 5.31603 0.491249 11.3624" fill="url(#paint0_linear_1_26)"/>
    <path d="M0.099538 11.3588C0.098914 13.3608 0.621941 15.3151 1.61629 17.0378L0.00415039 22.924L6.02792 21.3445C7.68767 22.2495 9.55637 22.7266 11.4579 22.7273H11.4628C17.7252 22.7273 22.8232 17.6309 22.8259 11.3679C22.8269 8.3326 21.6459 5.47837 19.5007 3.33126C17.3552 1.18441 14.5024 0.00124806 11.4628 0C5.1993 0 0.102034 5.09566 0.099538 11.3588ZM3.68682 16.7411L3.46191 16.3841C2.51641 14.8807 2.01736 13.1434 2.01808 11.3595C2.02013 6.15375 6.25676 1.91845 11.4664 1.91845C13.9892 1.91952 16.3602 2.90299 18.1435 4.68736C19.9267 6.47191 20.9079 8.84412 20.9073 11.3672C20.905 16.5729 16.6683 20.8088 11.4628 20.8088H11.459C9.76408 20.8079 8.10175 20.3527 6.65204 19.4925L6.30704 19.2879L2.73241 20.2251L3.68682 16.7411V16.7411Z" fill="url(#paint1_linear_1_26)"/>
    <path d="M8.62273 6.61009C8.41002 6.13734 8.18617 6.1278 7.9839 6.11951C7.81826 6.11238 7.62891 6.11292 7.43974 6.11292C7.25039 6.11292 6.94275 6.18415 6.6827 6.46808C6.42239 6.75228 5.68889 7.43907 5.68889 8.83592C5.68889 10.2329 6.70633 11.5828 6.84816 11.7724C6.99017 11.9617 8.81234 14.92 11.6982 16.058C14.0966 17.0038 14.5847 16.8157 15.1052 16.7682C15.6259 16.721 16.7851 16.0816 17.0216 15.4186C17.2583 14.7557 17.2583 14.1875 17.1874 14.0688C17.1164 13.9505 16.9271 13.8794 16.6431 13.7375C16.3591 13.5955 14.9632 12.9086 14.703 12.8139C14.4427 12.7192 14.2534 12.6719 14.0641 12.9562C13.8747 13.2401 13.331 13.8794 13.1653 14.0688C12.9998 14.2586 12.834 14.2822 12.5502 14.1402C12.2661 13.9977 11.3517 13.6983 10.2669 12.7311C9.42282 11.9785 8.85299 11.0492 8.68736 10.7649C8.52172 10.481 8.66962 10.3272 8.81199 10.1857C8.93956 10.0585 9.09601 9.85416 9.23811 9.68844C9.37968 9.52262 9.42692 9.40432 9.5216 9.21497C9.61636 9.02545 9.56893 8.85963 9.49806 8.71762C9.42692 8.57561 8.87519 7.17145 8.62273 6.61009Z" fill="white"/>
  </g>
  <defs>
    <linearGradient id="paint0_linear_1_26" x1="1101.96" y1="2213.43" x2="1101.96" y2="0.396885" gradientUnits="userSpaceOnUse">
      <stop stop-color="#1FAF38"/>
      <stop offset="1" stop-color="#60D669"/>
    </linearGradient>
    <linearGradient id="paint1_linear_1_26" x1="1141.09" y1="2292.4" x2="1141.09" y2="0" gradientUnits="userSpaceOnUse">
      <stop stop-color="#F9F9F9"/>
      <stop offset="1" stop-color="white"/>
    </linearGradient>
    <clipPath id="clip0_1_26">
      <rect width="22.83" height="23" fill="white"/>
    </clipPath>
  </defs>
</svg>
</a><br>

          <a href="https://www.instagram.com/itsmedikaa_/"> 
          <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
           <g clip-path="url(#clip0_1_15)">
            <path d="M17.6094 0H5.39062C2.41347 0 0 2.41347 0 5.39062V17.6094C0 20.5865 2.41347 23 5.39062 23H17.6094C20.5865 23 23 20.5865 23 17.6094V5.39062C23 2.41347 20.5865 0 17.6094 0Z" fill="url(#paint0_radial_1_15)"/>
            <path d="M17.6094 0H5.39062C2.41347 0 0 2.41347 0 5.39062V17.6094C0 20.5865 2.41347 23 5.39062 23H17.6094C20.5865 23 23 20.5865 23 17.6094V5.39062C23 2.41347 20.5865 0 17.6094 0Z" fill="url(#paint1_radial_1_15)"/>
            <path d="M11.5008 2.51562C9.06083 2.51562 8.75455 2.52632 7.79628 2.56989C6.8398 2.61373 6.18691 2.76512 5.61568 2.9873C5.02469 3.21677 4.52345 3.52376 4.0241 4.02329C3.5243 4.52273 3.2173 5.02397 2.98713 5.6147C2.76431 6.1861 2.61275 6.83927 2.56971 7.79529C2.52686 8.75366 2.51562 9.06002 2.51562 11.5001C2.51562 13.9402 2.52641 14.2454 2.56989 15.2037C2.61391 16.1602 2.7653 16.8131 2.9873 17.3843C3.21695 17.9753 3.52394 18.4765 4.02347 18.9759C4.52273 19.4757 5.02397 19.7834 5.61452 20.0129C6.18619 20.2351 6.83918 20.3864 7.79547 20.4303C8.75384 20.4739 9.05984 20.4846 11.4997 20.4846C13.94 20.4846 14.2453 20.4739 15.2035 20.4303C16.16 20.3864 16.8136 20.2351 17.3853 20.0129C17.976 19.7834 18.4765 19.4757 18.9757 18.9759C19.4755 18.4765 19.7824 17.9753 20.0127 17.3846C20.2335 16.8131 20.3852 16.16 20.4301 15.2039C20.4731 14.2456 20.4844 13.9402 20.4844 11.5001C20.4844 9.06002 20.4731 8.75384 20.4301 7.79547C20.3852 6.839 20.2335 6.18619 20.0127 5.61496C19.7824 5.02397 19.4755 4.52273 18.9757 4.02329C18.476 3.52358 17.9762 3.21659 17.3848 2.98739C16.812 2.76512 16.1588 2.61364 15.2023 2.56989C14.2439 2.52632 13.9388 2.51562 11.498 2.51562H11.5008ZM10.6948 4.1347C10.9341 4.13434 11.201 4.1347 11.5008 4.1347C13.8997 4.1347 14.184 4.14332 15.1313 4.18636C16.0073 4.22643 16.4827 4.37279 16.7994 4.49578C17.2187 4.65858 17.5176 4.85327 17.8319 5.16781C18.1464 5.48227 18.341 5.78171 18.5042 6.20102C18.6272 6.51727 18.7738 6.99272 18.8136 7.8687C18.8567 8.81583 18.866 9.10027 18.866 11.498C18.866 13.8958 18.8567 14.1803 18.8136 15.1274C18.7736 16.0033 18.6272 16.4788 18.5042 16.7951C18.3414 17.2144 18.1464 17.513 17.8319 17.8272C17.5175 18.1417 17.2189 18.3363 16.7994 18.4992C16.4831 18.6227 16.0073 18.7687 15.1313 18.8088C14.1842 18.8518 13.8997 18.8612 11.5008 18.8612C9.1018 18.8612 8.81745 18.8518 7.8704 18.8088C6.99443 18.7684 6.51897 18.622 6.202 18.499C5.78279 18.3361 5.48325 18.1415 5.1688 17.8271C4.85435 17.5126 4.65975 17.2139 4.4965 16.7944C4.3735 16.4781 4.22697 16.0026 4.18708 15.1266C4.14404 14.1795 4.13542 13.8951 4.13542 11.4958C4.13542 9.09659 4.14404 8.81358 4.18708 7.86645C4.22715 6.99047 4.3735 6.51502 4.4965 6.19832C4.65939 5.77902 4.85435 5.47957 5.16889 5.16512C5.48334 4.85066 5.78279 4.65597 6.20209 4.49282C6.51879 4.36928 6.99443 4.22328 7.8704 4.18303C8.69921 4.14557 9.0204 4.13434 10.6948 4.13245V4.1347ZM16.2967 5.62646C15.7015 5.62646 15.2185 6.10893 15.2185 6.70423C15.2185 7.29945 15.7015 7.78236 16.2967 7.78236C16.8919 7.78236 17.3748 7.29945 17.3748 6.70423C17.3748 6.10902 16.8919 5.62611 16.2967 5.62611V5.62646ZM11.5008 6.88616C8.95284 6.88616 6.88697 8.95203 6.88697 11.5001C6.88697 14.0481 8.95284 16.113 11.5008 16.113C14.0489 16.113 16.114 14.0481 16.114 11.5001C16.114 8.95212 14.0487 6.88616 11.5006 6.88616H11.5008ZM11.5008 8.50524C13.1547 8.50524 14.4957 9.84598 14.4957 11.5001C14.4957 13.154 13.1547 14.4949 11.5008 14.4949C9.84679 14.4949 8.50605 13.154 8.50605 11.5001C8.50605 9.84598 9.84679 8.50524 11.5008 8.50524Z" fill="white"/>
           </g>
   <defs>
    <radialGradient id="paint0_radial_1_15" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(6.10937 24.7714) rotate(-90) scale(22.7947 21.2009)">
      <stop stop-color="#FFDD55"/>
      <stop offset="0.1" stop-color="#FFDD55"/>
      <stop offset="0.5" stop-color="#FF543E"/>
      <stop offset="1" stop-color="#C837AB"/>
    </radialGradient>
    <radialGradient id="paint1_radial_1_15" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(-3.85259 1.65681) rotate(78.681) scale(10.1894 42.0009)">
      <stop stop-color="#3771C8"/>
      <stop offset="0.128" stop-color="#3771C8"/>
      <stop offset="1" stop-color="#6600FF" stop-opacity="0"/>
    </radialGradient>
    <clipPath id="clip0_1_15">
      <rect width="23" height="23" fill="white"/>
    </clipPath>
  </defs>
</svg>
</a>

        </div>
        <div class="col">
          About Us: <br>
          <a href="information.html">
          <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
  <g clip-path="url(#clip0_1_30)">
    <path d="M11.5 0C17.8514 0 23 5.14855 23 11.5C23 17.8514 17.8514 23 11.5 23C5.14855 23 0 17.8514 0 11.5C0 5.14855 5.14855 0 11.5 0ZM11.3332 8.2915C11.1206 8.2915 10.9166 8.37591 10.7661 8.5262C10.6156 8.67649 10.5309 8.88036 10.5305 9.09305V17.7847C10.5384 17.9922 10.6264 18.1886 10.7759 18.3326C10.9255 18.4766 11.125 18.5571 11.3327 18.5571C11.5403 18.5571 11.7399 18.4766 11.8894 18.3326C12.039 18.1886 12.1269 17.9922 12.1348 17.7847V9.09305C12.1348 8.88036 12.0504 8.67636 11.9001 8.52586C11.7498 8.37536 11.5459 8.2918 11.3332 8.2915ZM11.3655 5.08185C11.0818 5.08185 10.8098 5.19453 10.6092 5.3951C10.4086 5.59567 10.2959 5.8677 10.2959 6.15135C10.2959 6.435 10.4086 6.70703 10.6092 6.9076C10.8098 7.10817 11.0818 7.22085 11.3655 7.22085C11.6491 7.22085 11.9211 7.10817 12.1217 6.9076C12.3223 6.70703 12.4349 6.435 12.4349 6.15135C12.4349 5.8677 12.3223 5.59567 12.1217 5.3951C11.9211 5.19453 11.6491 5.08185 11.3655 5.08185Z" fill="black"/>
  </g>
  <defs>
    <clipPath id="clip0_1_30">
      <rect width="23" height="23" fill="white"/>
    </clipPath>
  </defs>
</svg>

          </a><br>
          <a href="cs.html"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
  <path d="M17.94 14.145C18.2754 13.3304 18.4575 12.4583 18.4575 11.5C18.4575 10.81 18.3521 10.1487 18.17 9.53542C17.5471 9.67917 16.8954 9.75583 16.215 9.75583C14.8216 9.75733 13.4482 9.42379 12.2106 8.78334C10.9731 8.14288 9.90766 7.21429 9.10416 6.07583C8.24463 8.15558 6.62316 9.82848 4.57125 10.7525C4.53291 10.9921 4.53291 11.2508 4.53291 11.5C4.53291 12.4149 4.71312 13.3209 5.06325 14.1662C5.41338 15.0115 5.92657 15.7795 6.57353 16.4265C7.88011 17.7331 9.65221 18.4671 11.5 18.4671C12.5062 18.4671 13.4742 18.2467 14.3462 17.8537C14.8925 18.8983 15.1417 19.4158 15.1225 19.4158C13.5508 19.9429 12.3337 20.2017 11.5 20.2017C9.18083 20.2017 6.96708 19.2912 5.33791 17.6525C4.34699 16.6646 3.61039 15.4512 3.19125 14.1162H1.91666V9.75583H2.96125C3.27773 8.21533 4.00534 6.78923 5.06689 5.62886C6.12843 4.46849 7.4843 3.61714 8.99063 3.16514C10.497 2.71315 12.0976 2.67736 13.6226 3.06159C15.1476 3.44582 16.5402 4.23573 17.6525 5.3475C18.8602 6.55045 19.684 8.0846 20.0196 9.75583H21.0833V14.1162H21.0258L17.6142 17.25L12.535 16.675V15.0746H17.1637L17.94 14.145ZM8.88375 11.2796C9.17125 11.2796 9.44916 11.3946 9.65041 11.6054C9.85267 11.8093 9.96615 12.0849 9.96615 12.3721C9.96615 12.6593 9.85267 12.9348 9.65041 13.1387C9.44916 13.34 9.17125 13.455 8.88375 13.455C8.28 13.455 7.79125 12.9758 7.79125 12.3721C7.79125 11.7683 8.28 11.2796 8.88375 11.2796ZM14.1067 11.2796C14.7104 11.2796 15.1896 11.7683 15.1896 12.3721C15.1896 12.9758 14.7104 13.455 14.1067 13.455C13.5029 13.455 13.0142 12.9758 13.0142 12.3721C13.0142 12.0823 13.1293 11.8045 13.3341 11.5996C13.539 11.3947 13.8169 11.2796 14.1067 11.2796Z" fill="black"/>
</svg>
</a><br>

          <a href="help.html">
          <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
  <path d="M11.4521 17.25C11.7875 17.25 12.0712 17.134 12.3031 16.9021C12.535 16.6702 12.6506 16.3869 12.65 16.0521C12.65 15.7167 12.5344 15.433 12.3031 15.2011C12.0718 14.9692 11.7881 14.8535 11.4521 14.8542C11.1167 14.8542 10.8333 14.9701 10.602 15.202C10.3708 15.434 10.2548 15.7173 10.2542 16.0521C10.2542 16.3875 10.3701 16.6712 10.602 16.9031C10.834 17.135 11.1173 17.2506 11.4521 17.25ZM10.5896 13.5604H12.3625C12.3625 13.0333 12.4226 12.6181 12.5427 12.3146C12.6628 12.0111 13.002 11.5958 13.5604 11.0687C13.9757 10.6535 14.3031 10.258 14.5427 9.88233C14.7823 9.50667 14.9021 9.05561 14.9021 8.52917C14.9021 7.63472 14.5746 6.94792 13.9198 6.46875C13.2649 5.98958 12.4903 5.75 11.5958 5.75C10.6854 5.75 9.94654 5.98958 9.37921 6.46875C8.81187 6.94792 8.41672 7.52292 8.19375 8.19375L9.775 8.81667C9.85486 8.52917 10.0347 8.21771 10.3145 7.88229C10.5944 7.54687 11.0215 7.37917 11.5958 7.37917C12.1069 7.37917 12.4903 7.51908 12.7458 7.79892C13.0014 8.07875 13.1292 8.38606 13.1292 8.72083C13.1292 9.04028 13.0333 9.33992 12.8417 9.61975C12.65 9.89958 12.4104 10.159 12.1229 10.3979C11.4201 11.0208 10.9889 11.492 10.8292 11.8115C10.6694 12.1309 10.5896 12.7139 10.5896 13.5604ZM11.5 21.0833C10.1743 21.0833 8.92847 20.8316 7.7625 20.3282C6.59653 19.8247 5.58229 19.1421 4.71979 18.2802C3.85729 17.4177 3.17464 16.4035 2.67183 15.2375C2.16903 14.0715 1.9173 12.8257 1.91666 11.5C1.91666 10.1743 2.16839 8.92847 2.67183 7.7625C3.17528 6.59653 3.85793 5.58229 4.71979 4.71979C5.58229 3.85729 6.59653 3.17464 7.7625 2.67183C8.92847 2.16903 10.1743 1.9173 11.5 1.91667C12.8257 1.91667 14.0715 2.16839 15.2375 2.67183C16.4035 3.17528 17.4177 3.85793 18.2802 4.71979C19.1427 5.58229 19.8257 6.59653 20.3291 7.7625C20.8326 8.92847 21.084 10.1743 21.0833 11.5C21.0833 12.8257 20.8316 14.0715 20.3282 15.2375C19.8247 16.4035 19.1421 17.4177 18.2802 18.2802C17.4177 19.1427 16.4035 19.8257 15.2375 20.3291C14.0715 20.8326 12.8257 21.084 11.5 21.0833Z" fill="black"/>
</svg>
          </a><br>
          
        </div>
        <div class="col">
          Give us feedback :
          <form action="mailto:andikasupriyadi27@gmail.com" method="post" enctype="text/plain">
            <input id="complain-input" type="text" value="" name="complain" ><br><br>
            <input type="submit" value="Send" name="submit" onclick="clearPlaceholder()"><br>
        </form>
        </div>
      </div>
    </div>
  </footer>
  
</body>

</html>