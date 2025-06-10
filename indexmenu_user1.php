<?php
	session_start();
	if(isset($_SESSION['username'])){
		include "koneksi.php";
	}else{
		header("location:indexuser.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOESKAS </title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style_menuuser.css">

</head>
<body>

<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i> @Tangkas.28 </a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#features">Features</a>
        <a href="#products">Products</a>
        <a href="#categories">Notes</a>
        <a href="#review">Review</a>

    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>



    <form action="cekloginuser.php"method="post" class="login-form">
       <a href="user_profile.php"> <h3>MY PROFILE</h3></a>


    <form action="cekloginuser.php"method="post" class="login-form">
       <a href="indexuser.php"> <h3>LOGOUT</h3></a>
      </form>
    </form>


</header>

<!-- header section ends -->

<!-- home section starts  -->


<section class="home" id="home">

    <div class="content">

  <img src="img_item/gambar3.jpg" height="70" width="200" alt="">
        <h3>FHASION <span>PRODUK SEPATU </span></h3>
        <p>VISI DAN MISI SHOESKAS</p>
        <tr>

                       <p> ○---VISI---○</p>

<p>Menjadi toko sepatu Online yang mampu memberikan
  kesan puas dan nyaman di hati pelanggannya</p>

                                  <tr>

                       <p>○---Misi---○</p>

<p>1. Mampu menyediakan variasi pilihan
  sepatu yang selalu mengikuti trend masa kini</p>


<p>2. Kepuasan pelanggan adalah tujuan utama kami</p>

                  <h3>○-----------------○</h3>

                 <h1>ANDA PUAS KAMI SENANG!</h1>

                  <h3>○-----------------○</h3>
    </div>

</section>

<!-- home section ends -->

<!-- features section starts  -->

<section class="features" id="features">

    <h1 id="#features"class="heading">Feature<span>Fitur</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="img_item/gambar1.jpg" alt="">
            <h3>Hight Quality</h3>
            <p>Produk Berkualitas Terbaik</p>
            <h3>○-----------------○</h3>

        </div>

        <div class="box">
            <img src="img_item/gambar2.jpg" alt="">
            <h3>free Postage</h3>
            <p>Gratis  Ongkir Seluruh Indonesia</p>
            <h3>○-----------------○</h3>


        </div>

        <div class="box">
            <img src="img_item/gambar4.jpg" alt="">
            <h3>Simple Transaction</h3>
            <p>Proses Transaksi Sederhana</p>
            <h3>○-----------------○</h3>


        </div>

    </div>

</section>

<!-- features section ends -->

<!-- products section starts  -->

<section class="products" id="products">

    <h1 class="heading"> Product <span>Produk</span> </h1>

    <div class="swiper product-slider">

    <div class="swiper-wrapper">

              <?php
    include "koneksi.php";

    $no=1;
    $sql="SELECT * FROM tb_barang";
    $query= mysqli_query($db_link,$sql);
    while($data = mysqli_fetch_array($query)){
    ?>
  <div class="swiper-slide box">
        <img src="<?php echo "img_barang/$data[Gambar_barang]"; ?>">

        <tr>
        <h3><?php echo "$data[Merek_Sepatu]"; ?></h3>

        <tr>
        <div class="price">Rp. <?php echo number_format($data['Harga_Sepatu']) ?>

                    <tr>
                     <div class="price">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                      </div>


        <tr>
          <h3> <a href='user_detailproduk.php?id=<?php echo "$data[Codebarang]"; ?>' >DETAIL </a></h3></div></div>
        <tr>


    <?php
				$no++;
				}
		?></div>



          </div>





</section>

<!-- products section ends -->

<!-- categories section starts  -->

<section class="categories" id="categories">

    <h1 class="heading"> Notes <span>Catatan</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/Qu.jpg" alt="">
            <h3>MEMBELI = SETUJU</h3>
            <p>Sebelum melakukan transaksi pastikan anda telah membaca dan setuju dengan persyaratan dari toko Shoeskas</p>

          <p>○--------------------------------○</p>

          <p> Apabila barang tidak sesuai/rusak saat
            diterima, bisa di kembalikan dengan syarat
            wajib mengirimkan bukti berupa video Unboxing
            pada akun IG yang tersedia</p>

          <p>○--------------------------------○</p>

          <p>  Berikan ulasan anda tentang produk kami</p>
        </div>

        <div class="box">
            <img src="image/Mei.jpg" alt="">
            <a href="#products" class="btn">Pilih Produk Sekarang</a>

        </div>

    </div>

</section>

<!-- categories section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> Reviews <span>Ulasan </span> </h1>

    <div class="swiper review-slider">

    <div class="swiper-wrapper">

              <?php
    include "koneksi.php";

    $no=1;
    $sql="SELECT * FROM tb_rate";
    $query= mysqli_query($db_link,$sql);
    while($data = mysqli_fetch_array($query)){
    ?>
  <div class="swiper-slide box">
        <img src="<?php echo "img_profile/$data[foto]"; ?>">

        <tr>
        <h3><?php echo "$data[nama]"; ?></h3>

        <tr>
        <a><?php echo "$data[star]"; ?></a>
        </tr>


         <h1>○-----------------------○</h1>

        <tr>
        <h3><?php echo "$data[rate]"; ?></h3></tr></div>



    <?php
				$no++;
				}
		?></div>

        <div class="box">
            <a href="user_rate.php" class="btn">Review/Ulas</a>

        </div>


          </div>







</section>

<!-- review section ends -->

<!-- blogs section starts  -->



<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3> SHOESKAS <i class="fas fa-shopping-basket"></i> </h3>
            <p>Instagram Admin </p>
            <div class="share">

                <a href="https://instagram.com/tangkas.28?igshid=OTJhZDVkZWE=" class="fab fa-instagram"></a>


            </div>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a class="links"> <i class="fas fa-phone"></i> +6285 738 620 478 </a>
            <a class="links"> <i class="fas fa-envelope"></i> tangkas28@gmail.com </a>
            <a  class="links"> <i class="fas fa-map-marker-alt"></i> Bali,Jembrana,Negara,Baluk </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#home" class="links"> <i class="fas fa-arrow-right"></i> Home </a>
            <a href="#features" class="links"> <i class="fas fa-arrow-right"></i>Feature/Fitur</a>
            <a href="#products" class="links"> <i class="fas fa-arrow-right"></i> Product/Produk </a>
            <a href="#categories" class="links"> <i class="fas fa-arrow-right"></i> Notes/Catatan</a>
            <a href="#review" class="links"> <i class="fas fa-arrow-right"></i> review/Ulasan</a>

        </div></div>

         <h1>○-----------------------○</h1>

    <div class="credit"> Terimaksih  <span> Telah Berkunjung</span> | kas28 </div>

</section>

<!-- footer section ends -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>