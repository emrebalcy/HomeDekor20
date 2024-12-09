<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META -->
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Wize - Creative Portfolio Showcase Template">
    <meta name="keywords" content="personal, portfolio new, html, one page, bootstrap, new html template, design, creative, onepage, clean, modern">
    <meta name="author" content="Tanvir Hossain">
    <!-- PAGE TITLE -->
    <title>HomeDekor20 - Hakkimizda</title>
    <!-- FAVICON ICON -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
    <!-- ALL GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="assets/fonts/remixicon.css" />
    <!-- MAGNIFIC CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- NICE SELECT CSS -->
    <link rel="stylesheet" href="assets/css/nice-select.min.css" />
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <!-- SLICK CSS -->
    <link rel="stylesheet" href="assets/css/slick.min.css" />
    <!-- SPACING CSS -->
    <link rel="stylesheet" href="assets/css/spacing.css" />
    <!-- MAIN STYLE CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- RESPONSIVE CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        /* Genel Alan */
.single-page-hero-area {
    padding: 20px 15px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    margin: 20px auto;
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
}

/* Başlık */
.single-page-hero-area h2 {
    font-size: 1.8rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 10px;
}

/* Paragraflar */
.single-page-hero-area p {
    font-size: 1rem;
    color: #555;
    margin-bottom: 15px;
}

/* Liste */
.highlight-list {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.highlight-list li {
    margin-bottom: 10px;
    font-size: 1rem;
    color: #444;
}

.highlight-list strong {
    color: #007bff;
}

/* Alt Metin */
.single-page-hero-area em {
    color: #888;
    font-size: 0.9rem;
    display: block;
    margin-top: 15px;
}

        .video-section-simple {
    text-align: center;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #fff;
    max-width: 500px;
    margin: 20px auto;
}

.video-section-simple h3 {
    font-size: 1.4rem;
    color: #333;
    margin-bottom: 10px;
}

.video-section-simple p {
    font-size: 1rem;
    color: #555;
    margin-bottom: 15px;
}

.simple-btn {
    display: inline-block;
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    font-size: 1rem;
    font-weight: 500;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

.simple-btn:hover {
    background-color: #0056b3;
}

        .video-section-box {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 40px;
    background-color: #f9fafb;
    border: 2px solid #ddd;
    border-radius: 10px;
    max-width: 600px;
    margin: 0 auto;
}

.box-content {
    text-align: center;
}

.box-title {
    font-size: 1.8rem;
    font-weight: 700;
    color: #222;
    margin-bottom: 15px;
}

.box-description {
    font-size: 1.1rem;
    color: #555;
    margin-bottom: 20px;
}

.box-btn {
    display: inline-block;
    background-color: #ff5722;
    color: #fff;
    padding: 10px 20px;
    font-size: 1rem;
    font-weight: 500;
    text-decoration: none;
    border-radius: 5px;
    transition: transform 0.2s ease;
}

.box-btn:hover {
    background-color: #e64a19;
    transform: scale(1.05);
}

        .video-section-modern {
    text-align: center;
    padding: 30px;
    background: linear-gradient(to bottom right, #ffffff, #f1f1f1);
    border: 1px solid #eee;
    border-radius: 12px;
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    margin: 0 auto;
}

.icon-wrapper {
    font-size: 3rem;
    color: #007bff;
    margin-bottom: 15px;
}

.section-title {
    font-size: 1.5rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
}

.section-description {
    font-size: 1rem;
    color: #666;
    margin-bottom: 20px;
}

.theme-btn.video-btn-modern {
    display: inline-block;
    background-color: #28a745;
    color: #fff;
    padding: 12px 25px;
    font-size: 1rem;
    font-weight: 600;
    text-decoration: none;
    border-radius: 6px;
    transition: all 0.3s ease-in-out;
}

.theme-btn.video-btn-modern:hover {
    background-color: #218838;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
    color: #fff;
}

        .video-section {
    text-align: center;
    padding: 20px;
    background-color: #f8f9fa;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    margin: 0 auto;
}

.section-title {
    font-size: 1.5rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 10px;
}

.section-description {
    font-size: 1rem;
    color: #555;
    margin-bottom: 20px;
}

.theme-btn.video-btn {
    display: inline-block;
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    font-size: 1rem;
    font-weight: 500;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

.theme-btn.video-btn:hover {
    background-color: #0056b3;
    color: #fff;
}

/* Genel Alan Stili */
.call-to-action-area {
    background: linear-gradient(135deg, #ff9a9e, #fad0c4);
    padding: 50px 0;
    border-radius: 15px;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
    text-align: center;
}

/* WhatsApp İkon Stili */
.cta-icon a {
    display: inline-block;
    background-color: #25d366;
    color: #fff;
    font-size: 5rem; /* Büyük boyut */
    width: 120px;
    height: 120px;
    border-radius: 50%;
    line-height: 120px;
    text-align: center;
    margin-bottom: 30px;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    animation: bounce 2s infinite; /* Animasyon */
}

/* Hover Etkisi */
.cta-icon a:hover {
    transform: scale(1.2);
    box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.4);
}

/* Başlık ve Alt Başlık */
.cta-title {
    font-size: 2.2rem;
    font-weight: bold;
    color: #fff;
    margin-bottom: 10px;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
}

.cta-subtitle {
    font-size: 1.2rem;
    color: #fff;
    margin-bottom: 20px;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
}

/* Buton Stili */
.call-to-action-button {
    background-color: #25d366;
    color: #fff;
    font-weight: bold;
    padding: 10px 30px;
    border-radius: 50px;
    box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease;
}

.call-to-action-button:hover {
    background-color: #1da851;
    transform: translateY(-3px);
    box-shadow: 0px 7px 15px rgba(0, 0, 0, 0.3);
}

/* Responsive Tasarım */
@media (max-width: 768px) {
    .cta-icon a {
        font-size: 4rem; /* Daha küçük boyut */
        width: 90px;
        height: 90px;
        line-height: 90px;
    }

    .cta-title {
        font-size: 1.8rem; /* Başlık boyutunu küçült */
    }

    .cta-subtitle {
        font-size: 1rem; /* Alt başlık boyutunu küçült */
    }

    .call-to-action-button {
        padding: 8px 20px;
        font-size: 0.9rem; /* Buton boyutunu küçült */
    }
}
</style>
</head>

<body>
    <?php include 'whatsapp-button.php';?>
    <!-- START PRELOADER AREA-->
    <div class="preloader">
        <svg viewbox="0 0 1000 1000" preserveaspectratio="none">
            <path id="preloaderSvg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>
        <div class="preloader-heading">
            <div class="load-text">
                <span>L</span>
                <span>o</span>
                <span>a</span>
                <span>d</span>
                <span>i</span>
                <span>n</span>
                <span>g</span>
            </div>
        </div>
    </div>
    <!-- END PRELOADER AREA -->
    <!-- START MAGIC CURSOR AND BALL AREA-->
    <div id="magic-cursor">
        <div id="ball"></div>
    </div>
    <div id="magic-cursor">
        <div id="ball"></div>
    </div>
    <!-- / END MAGIC CURSOR AND BALL AREA-->
    <!-- START MENU DESIGN AREA -->
    <?php include 'header.php';?>
    <!-- / END MENU DESIGN AREA -->
    <!-- START MENU DESIGN AREA -->
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main class="main-bg o-hidden">
                <!-- START HEADER DESIGN AREA -->
                <section class="single-page-hero-area">
    <div class="container text-center">
        <h2>Cam Kandillerin Dekorasyondaki Yeri</h2>
        <p>Cam kandiller, yaşam alanlarınıza estetik ve sıcaklık katar.</p>
        <ul class="highlight-list">
            <li><strong>Oturma Odası:</strong> Sıcak bir atmosfer.</li>
            <li><strong>Yemek Masası:</strong> Şık bir dokunuş.</li>
            <li><strong>Banyo:</strong> Huzurlu bir ambiyans.</li>
            <li><strong>Balkon & Bahçe:</strong> Doğal bir hava.</li>
        </ul>
        <p><em>Evinizi güzelleştirin, cam kandillerle fark yaratın.</em></p>
    </div>
</section>

                <!-- / END HEADER DESIGN AREA -->
                <!-- START VLOG DESIGN AREA -->
                <div class="blog-area" id="blog">
                    <div class="container">
                        <div class="row">
                            <div class="blog-list">
                                <div class="col-lg-12">
                                    <!-- START SINGLE VLOG DESIGN AREA -->
                                    <div class="row blog-post-box align-items-center">
                                        <div class="col-lg-6">
                                            <div class="blog-post-img">
                                                
                                                    <img src="assets/images/foto/foto30.jpg" alt="">
                                                
                                                <div class="blog-post-category">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="video-section-box">
    <div class="box-content">
        <h3 class="box-title">Cam Kandil Videoları</h3>
        <p class="box-description">Cam kandillerin büyüleyici dünyasına adım atın. Özel hazırlanmış videolarımızı izleyerek ilham alın.</p>
        <a class="box-btn" href="single-blog.php">Videoları Görüntüle</a>
    </div>
</div>




                                        </div>
                                    </div>
                                    <!-- START SINGLE VLOG DESIGN AREA -->
                                    <!-- START SINGLE VLOG DESIGN AREA -->
                                    <div class="row blog-post-box align-items-center">
                                        <div class="col-lg-6">
                                            <div class="blog-post-img">
                                                
                                                    <img src="assets/images/foto/foto31.jpg" alt="">
                                                
                                                <div class="blog-post-category">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="video-section-box">
    <div class="box-content">
        <h3 class="box-title">Cam Kandil Videoları</h3>
        <p class="box-description">Özenle hazırlanmış videoları izleyerek cam kandillerin zarafetini yakından görün.</p>
        <a class="box-btn" href="single-blog.php">Videoları Görüntüle</a>
    </div>
</div>


                                        </div>
                                    </div>
                                    <!-- START SINGLE VLOG DESIGN AREA -->
                                    <!-- START SINGLE VLOG DESIGN AREA -->
                                    <div class="row blog-post-box align-items-center">
                                        <div class="col-lg-6">
                                            <div class="blog-post-img">
                                                
                                                    <img src="assets/images/foto/foto32.jpg" alt="">
                                                
                                                <div class="blog-post-category">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="video-section-box">
    <div class="box-content">
        <h3 class="box-title">Cam Kandil Videoları</h3>
        <p class="box-description">Cam kandillerin büyüleyici dünyasını keşfetmek için videolarımızı izleyin</p>
        <a class="box-btn" href="single-blog.php">Videoları Görüntüle</a>
    </div>
</div>

                                        </div>
                                    </div>
                                    <!-- START SINGLE VLOG DESIGN AREA -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / END VLOG DESIGN AREA -->
                <!-- START CALL TO ACTION DESIGN AREA -->
                <section class="call-to-action-area">
                <section class="call-to-action-area">
    <div class="container">
        <div class="row">
            <!-- START WHATSAPP CALL-TO-ACTION AREA -->
            <div class="col-lg-12 text-center">
                <div class="call-to-action-part wow fadeInUp delay-0-2s">
                    <!-- WhatsApp Icon -->
                    <div class="cta-icon">
                        <a href="https://wa.me/905325724526" target="_blank" class="theme-btn whatsapp-btn">
                            <i class="ri-whatsapp-fill"></i>
                        </a>
                    </div>
                    <h2 class="cta-title">Kendi Tasarımlarınızı Oluşturmak ve Sipariş Vermek İçin</h2>
                    <p class="cta-subtitle">Hayallerinizi gerçeğe dönüştürmek için bir tık uzağınızdayız! 💫</p>
                    <div class="cta-btn">
                        <a href="https://wa.me/905551609765" target="_blank" class="theme-btn call-to-action-button">Tıklayınız <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
            <!-- / END WHATSAPP CALL-TO-ACTION AREA -->
        </div>
    </div>
</section>
</section>
                <!--  // END CALL TO ACTION DESIGN AREA -->
                <!-- START FOOTER DESIGN AREA -->
                <?php include 'footer.php';?>
            </main>
        </div>
    </div>
    <!-- / END FOOTER DESIGN AREA -->
    <!-- START SCROOL UP DESIGN AREA -->
    <div class="progress-wrap cursor-pointer">
        <i class="ri-arrow-up-s-line"></i>
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- / END SCROOL UP DESIGN AREA -->
    <!-- JQUERY JS -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- BOOTSTRAP JS-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- APPEAR JS -->
    <script src="assets/js/appear.min.js"></script>
    <!-- MAGNIFICANT JS -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- SLICK JS-->
    <script src="assets/js/slick.min.js"></script>
    <!-- GSAP AND LOCOMOTIV JS-->
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollSmoother.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/smoother-script.js"></script>
    <!-- NICE SELECT JS-->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- IMAGE LOADER JS-->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- ISOTOPE JS-->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!--  WOW ANIMATION JS-->
    <script src="assets/js/wow.min.js"></script>
    <!-- SCRIPT JS-->
    <script src="assets/js/script.js"></script>
</body>

</html>