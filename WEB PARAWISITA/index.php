<!DOCTYPE html>
<html lang="en">
<?php
include 'koneksi.php';
include 'wisata.php';

// Fetch data from the "wisata" table
$sqlGunung = "SELECT * FROM gunung";
$result = $conn->query($sqlGunung);

$gunungList = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $gunungList[] = new Wisata($row['nama'], $row['lokasi'], $row['deskripsi'], $row['fasilitas'], $row['harga'], $row['aktivitas'], $row['gambar']);
    }
}

$sqlPantai = "SELECT * FROM pantai";
$result = $conn->query($sqlPantai);

$pantaiList = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $pantaiList[] = new Wisata($row['nama'], $row['lokasi'], $row['deskripsi'], $row['fasilitas'], $row['harga'], $row['aktivitas'], $row['gambar']);
    }
}
?>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Aplikasi Parawisata Kelompok 7</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-plot-listing.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <!--

TemplateMo 564 Plot Listing

https://templatemo.com/tm-564-plot-listing

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.html" class="active">Home</a></li>
                            <li><a href="category.html">Category</a></li>
                            <li><a href="listing.php">Listing</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li>
                                <div class="main-white-button"><a href="#"><i class="fa fa-plus"></i> Add Your
                                        Listing</a></div>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="main-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-text header-text">
                        <h2>Cari Tempat Wisata Yang Kamu Mau</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <form id="search-form" name="gs" method="submit" role="search" action="#">
                        <div class="row">
                            <div class="col-lg-3 align-self-center">
                                <fieldset>
                                    <select name="area" class="form-select" aria-label="Area" id="chooseCategory"
                                        onchange="this.form.click()">
                                        <option selected>All Areas</option>
                                        <option value="New Village">New Village</option>
                                        <option value="Old Town">Old Town</option>
                                        <option value="Modern City">Modern City</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-3 align-self-center">
                                <fieldset>
                                    <input type="address" name="address" class="searchText"
                                        placeholder="Enter a location" autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-3 align-self-center">
                                <fieldset>
                                    <select name="price" class="form-select" aria-label="Default select example"
                                        id="chooseCategory" onchange="this.form.click()">
                                        <option selected>Price Range</option>
                                        <option value="$100 - $250">$100 - $250</option>
                                        <option value="$250 - $500">$250 - $500</option>
                                        <option value="$500 - $1000">$500 - $1,000</option>
                                        <option value="$1000+">$1,000 or more</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-3">
                                <fieldset>
                                    <button class="main-button"><i class="fa fa-search"></i> Search Now</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <ul class="categories">
                        <li><a href="category.html"><span class="icon"><img src="assets/images/mountain-svgrepo-com.svg"
                                        alt="Home"></span> Gunung</a></li>
                        <li><a href="listing.html"><span class="icon"><img
                                        src="assets/images/beach-lounge-svgrepo-com.svg" alt="Food"></span> Pantai &amp;
                                Pulau</a></li>
                        <li><a href="#"><span class="icon"><img src="assets/images/old-monument-svgrepo-com.svg"
                                        alt="Vehicle"></span> Kota Bersejarah</a></li>
                        <li><a href="#"><span class="icon"><img src="assets/images/city-buildings-svgrepo-com.svg"
                                        alt="Shopping"></span>Warisan budaya</a></li>
                        <li><a href="#"><span class="icon"><img src="assets/images/resort-svgrepo-com.svg"
                                        alt="Travel"></span> Resort &amp; Spa</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="popular-categories">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Popular Categories</h2>
                        <h6>Check Them Out</h6>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="grid">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="menu">
                                        <div class="first-thumb active">
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/mountain-svgrepo-com.svg"
                                                        alt=""></span>
                                                Gunung
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/beach-lounge-svgrepo-com.svg"
                                                        alt=""></span>
                                                Pantai &amp; Pulau
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/old-monument-svgrepo-com.svg"
                                                        alt=""></span>
                                                Kota Bersejarah
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img
                                                        src="assets/images/city-buildings-svgrepo-com.svg"
                                                        alt=""></span>
                                                Warisan Budaya
                                            </div>
                                        </div>
                                        <div class="last-thumb">
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/resort-svgrepo-com.svg"
                                                        alt=""></span>
                                                Resort &amp; Spa
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 align-self-center">
                                    <ul class="nacc">
                                        <li class="active">
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-5 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Salah Satu Gunung dengan Jumlah Pariwisata Terbanyak
                                                                    Saat Ini!</h4>
                                                                <p>Di Indonesia, beberapa gunung memiliki pariwisata
                                                                    yang sangat populer dan banyak dikunjungi oleh
                                                                    wisatawan. Salah satu gunung yang memiliki
                                                                    pariwisata yang sangat ramai adalah Gunung Bromo di
                                                                    Jawa Timur.</p>
                                                                <div class="main-white-button"><a href="#"><i
                                                                            class="fa fa-eye"></i> Discover More</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 align-self-center">
                                                            <div class="right-image">
                                                                <img src="assets/images/bromo1.jpeg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-5 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Salah Satu Pantai yang Terkenal Di Indonesia </h4>
                                                                <p>Di Indonesia, banyak pantai yang menjadi tujuan
                                                                    pariwisata populer. Salah satu pantai yang sangat
                                                                    terkenal dan menjadi destinasi pariwisata utama
                                                                    adalah Pantai Kuta, Bali</p>
                                                                <div class="main-white-button"><a href="#"><i
                                                                            class="fa fa-eye"></i> Explore More</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 align-self-center">
                                                            <div class="right-image">
                                                                <img src="assets/images/banner-bg.jpeg"
                                                                    alt="Foods on the table">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-5 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Salah Satu Kota Bersejarah yang Terkenal Di
                                                                    Indonesia </h4>
                                                                <p>Di Indonesia, terdapat banyak tempat bersejarah yang
                                                                    populer dan memiliki nilai historis yang tinggi
                                                                    salah satunya Candi Borobudur, Jawa Tengah </p>
                                                                <div class="main-white-button"><a href="listing.html"><i
                                                                            class="fa fa-eye"></i> More Listing</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 align-self-center">
                                                            <div class="right-image">
                                                                <img src="assets/images/candi-borobudur-1_169.jpeg"
                                                                    alt="cars in the city">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-5 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Salah Satu Tempat Warisan Budaya yang populer Di
                                                                    Indonesia</h4>
                                                                <p>Indonesia memiliki banyak tempat warisan budaya yang
                                                                    populer, mencakup situs-situs bersejarah, bangunan
                                                                    berarsitektur klasik, dan kebudayaan tradisional
                                                                    yang kaya salah satunya adalah Monumen Nasional</p>
                                                                <div class="main-white-button"><a href="#"><i
                                                                            class="fa fa-eye"></i> Discover More</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 align-self-center">
                                                            <div class="right-image">
                                                                <img src="assets/images/monas.jpeg" alt="Shopping Girl">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-5 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Salah Satu Tempat resort dan spa yang populer Di
                                                                    Indonesia</h4>
                                                                <p>Beberapa resort dan spa populer di Indonesia mencakup
                                                                    berbagai destinasi, mulai dari pulau-pulau tropis
                                                                    hingga daerah pegunungan salah satunya adalah
                                                                    Amandara,Bali</p>
                                                                <div class="main-white-button"><a rel="nofollow"
                                                                        href="https://templatemo.com/contact"><i
                                                                            class="fa fa-eye"></i> Read More</a></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 align-self-center">
                                                            <div class="right-image">
                                                                <img src="assets/images/amandara.jpeg"
                                                                    alt="Traveling Beach">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="recent-listing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Tempat Wisata paling banyak di cari bulan ini</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-carousel owl-listing">
                        <div class="item">
                            <div class="row">
                                <?php
                                    $counter = 1;
                                    foreach ($gunungList as $wisata) {
                                        if ($counter < 4) {
                                            echo '<div class="col-lg-12">';
                                                echo '<div class="listing-item">';
                                                    echo '<div class="left-image">';
                                                        echo '<a href="#"><img src="assets/images/'. $wisata->gambar .'" alt="" width="360" height="360"></a>';
                                                    echo '</div>';
                                                    echo '<div class="right-content align-self-center">';
                                                        echo '<a href="#">';
                                                            echo '<h4>' . $counter .'. '. $wisata->nama . '</h4>';
                                                        echo '</a>';
                                                        echo '<ul class="rate">';
                                                            echo '<li><i class="fa fa-star-o"></i></li>';
                                                            echo '<li><i class="fa fa-star-o"></i></li>';
                                                            echo '<li><i class="fa fa-star-o"></i></li>';
                                                            echo '<li><i class="fa fa-star-o"></i></li>';
                                                            echo '<li><i class="fa fa-star-o"></i></li>';
                                                            echo '<li><i class="fa fa-star-o"></i></li>';
                                                            echo '<li>(100) Reviews</li>';
                                                        echo '</ul>';
                                                        echo '<span class="price">';
                                                            echo '<div class="icon"><img src="assets/images/listing-icon-01.png" alt="">';
                                                            echo '</div> Rp.'. $wisata->harga .'';
                                                        echo '</span>';
                                                        echo '<span class="details">Details: <em> <br>'. $wisata->deskripsi .'</em></span>';
                                                        echo '<ul class="info">';
                                                            echo '<li><img src="assets/images/listing-icon-02.png" alt=""> 4 Bedrooms</li>';
                                                            echo '<li><img src="assets/images/listing-icon-03.png" alt=""> 4 Bathrooms';
                                                            echo '</li>';
                                                        echo '</ul>';
                                                        echo '<div class="main-white-button">';
                                                            echo '<a href="contact.html"><i class="fa fa-eye"></i> Contact Now</a>';
                                                        echo '</div>';
                                                    echo '</div>';
                                                echo '</div>';
                                            echo '</div>';
                                            $counter++;
                                        } else {
                                            break; // Exit the loop after displaying three items
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <?php
                                    $counter = 4;
                                    foreach ($pantaiList as $wisata) {
                                        if ($counter < 7) {
                                            echo '<div class="col-lg-12">';
                                                echo '<div class="listing-item">';
                                                    echo '<div class="left-image">';
                                                        echo '<a href="#"><img src="assets/images/'. $wisata->gambar .'" alt="" width="400" height="400"></a>';
                                                    echo '</div>';
                                                    echo '<div class="right-content align-self-center">';
                                                        echo '<a href="#">';
                                                            echo '<h4>' . $counter .'. '. $wisata->nama . '</h4>';
                                                        echo '</a>';
                                                        echo '<ul class="rate">';
                                                            echo '<li><i class="fa fa-star-o"></i></li>';
                                                            echo '<li><i class="fa fa-star-o"></i></li>';
                                                            echo '<li><i class="fa fa-star-o"></i></li>';
                                                            echo '<li><i class="fa fa-star-o"></i></li>';
                                                            echo '<li><i class="fa fa-star-o"></i></li>';
                                                            echo '<li><i class="fa fa-star-o"></i></li>';
                                                            echo '<li>(100) Reviews</li>';
                                                        echo '</ul>';
                                                        echo '<span class="price">';
                                                            echo '<div class="icon"><img src="assets/images/listing-icon-01.png" alt="">';
                                                            echo '</div> Rp.'. $wisata->harga .'';
                                                        echo '</span>';
                                                        echo '<span class="details">Details: <em> <br>'. $wisata->deskripsi .'</em></span>';
                                                        echo '<ul class="info">';
                                                            echo '<li><img src="assets/images/listing-icon-02.png" alt=""> 4 Bedrooms</li>';
                                                            echo '<li><img src="assets/images/listing-icon-03.png" alt=""> 4 Bathrooms';
                                                            echo '</li>';
                                                        echo '</ul>';
                                                        echo '<div class="main-white-button">';
                                                            echo '<a href="contact.html"><i class="fa fa-eye"></i> Contact Now</a>';
                                                        echo '</div>';
                                                    echo '</div>';
                                                echo '</div>';
                                            echo '</div>';
                                            $counter++;
                                        } else {
                                            break; // Exit the loop after displaying three items
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <?php
                                    $counter = 7;
                                    foreach ($gunungList as $wisata) {
                                        if ($counter < 10) {
                                            echo '<div class="col-lg-12">';
                                                echo '<div class="listing-item">';
                                                    echo '<div class="left-image">';
                                                        echo '<a href="#"><img src="assets/images/'. $wisata->gambar .'" alt="" width="300" height="250"></a>';
                                                    echo '</div>';
                                                    echo '<div class="right-content align-self-center">';
                                                        echo '<a href="#">';
                                                            echo '<h4>' . $counter .'. '. $wisata->nama . '</h4>';
                                                        echo '</a>';
                                                        echo '<ul class="rate">';
                                                            echo '<li><i class="fa fa-star-o"></i></li>';
                                                            echo '<li><i class="fa fa-star-o"></i></li>';
                                                            echo '<li><i class="fa fa-star-o"></i></li>';
                                                            echo '<li><i class="fa fa-star-o"></i></li>';
                                                            echo '<li><i class="fa fa-star-o"></i></li>';
                                                            echo '<li><i class="fa fa-star-o"></i></li>';
                                                            echo '<li>(100) Reviews</li>';
                                                        echo '</ul>';
                                                        echo '<span class="price">';
                                                            echo '<div class="icon"><img src="assets/images/listing-icon-01.png" alt="">';
                                                            echo '</div> Rp.'. $wisata->harga .'';
                                                        echo '</span>';
                                                        echo '<span class="details">Details: <em> <br>'. $wisata->deskripsi .'</em></span>';
                                                        echo '<ul class="info">';
                                                            echo '<li><img src="assets/images/listing-icon-02.png" alt=""> 4 Bedrooms</li>';
                                                            echo '<li><img src="assets/images/listing-icon-03.png" alt=""> 4 Bathrooms';
                                                            echo '</li>';
                                                        echo '</ul>';
                                                        echo '<div class="main-white-button">';
                                                            echo '<a href="contact.html"><i class="fa fa-eye"></i> Contact Now</a>';
                                                        echo '</div>';
                                                    echo '</div>';
                                                echo '</div>';
                                            echo '</div>';
                                            $counter++;
                                        } else {
                                            break; // Exit the loop after displaying three items
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="about">
                        <div class="logo">
                            <img src="assets/images/black-logo.png" alt="Plot Listing">
                        </div>
                        <p>If you consider that <a rel="nofollow" href="https://templatemo.com/tm-564-plot-listing"
                                target="_parent">Plot Listing template</a> is useful for your website, please <a
                                rel="nofollow" href="https://www.paypal.me/templatemo" target="_blank">support us</a> a
                            little via PayPal.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="helpful-links">
                        <h4>Helpful Links</h4>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <ul>
                                    <li><a href="#">Categories</a></li>
                                    <li><a href="#">Reviews</a></li>
                                    <li><a href="#">Listing</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Awards</a></li>
                                    <li><a href="#">Useful Sites</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-us">
                        <h4>Contact Us</h4>
                        <p>27th Street of New Town, Digital Villa</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="#">010-020-0340</a>
                            </div>
                            <div class="col-lg-6">
                                <a href="#">090-080-0760</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <p>Copyright © 2021 Plot Listing Co., Ltd. All Rights Reserved.
                            <br>
                            Design: <a rel="nofollow" href="https://templatemo.com" title="CSS Templates">TemplateMo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/custom.js"></script>

</body>

</html>