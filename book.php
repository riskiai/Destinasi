<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

<a href="home.php" class="logo" >Indramayu Exsplore
    </a>
    <div  class="imglogo">
    <img src="images/LOGO.png" alt=""  width = "65px"></img>
   </div>

   <nav class="navbar">
   <a href="home.php">Beranda</a>
      <a href="about.php">Tentang</a>
      <a href="package.php">Pilihan</a>
      <a href="book.php">Pemesanan</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/lau-transformed.jpeg) no-repeat">
   <h1>Pemesanan Wisata</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">DATA PEMESANAN</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>Nama :</span>
            <input type="text" placeholder="Isikan Nama Anda " name="name">
         </div>
         <div class="inputBox">
            <span>Email :</span>
            <input type="email" placeholder="Isikan Email Anda" name="email">
         </div>
         <div class="inputBox">
            <span>Nomor Hp :</span>
            <input type="number" placeholder="Isikan Nomer Hp Anda" name="phone">
         </div>
         <div class="inputBox">
            <span>Alamat :</span>
            <input type="text" placeholder="Isikan Alamat Anda" name="address">
         </div>
         <div class="inputBox">
            <span>Tujuan Kemana :</span>
            <input type="text" placeholder="Tentukan Tujuan Wisata Anda" name="location">
         </div>
         <div class="inputBox">
            <span>Berapa Orang :</span>
            <input type="number" placeholder="Isikan Jumlah Orang Anda" name="guests">
         </div>
         <div class="inputBox">
            <span>Kedatangan :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>Pergi :</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <input type="submit" value="kirim" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

   <div class="box">
         <h1 style="color: black;">Halaman Cepat</h1>
         <a href="home.php"> <i class="fas fa-angle-right"></i> Beranda</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> Tentang</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> Pilihan</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> Pemesanan</a>
      </div>

      <div class="box">
          <h1 style="color: black;">Seputar Wisata Indramayu</h1>
         <a href="#"> <i class="fas fa-angle-right"></i> Ajukan Pertanyaan</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Tentang Indramayu</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Ketentuan</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Persyaratan</a>
      </div>

      <div class="box">
         
      <h1 style="color: black;">Ikuti Kami</h1>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href=

   
   </div>

   

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>