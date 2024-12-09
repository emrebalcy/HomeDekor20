<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META -->
    <!-- META -->
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Wize - Creative Portfolio Showcase Template">
    <meta name="keywords" content="personal, portfolio new, html, one page, bootstrap, new html template, design, creative, onepage, clean, modern">
    <meta name="author" content="Tanvir Hossain">
    
    <!-- PAGE TITLE -->
    <title>HomeDekor20 - Bizimle İletisime Geç</title>
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
/* Arka Plan */
.call-to-action-area {
    background: radial-gradient(circle, #ff9a9e, #fad0c4);
    padding: 60px 0;
    border-radius: 15px;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
    color: #fff;
    text-align: center;
}

/* Başlık */
.section-title {
    font-size: 3rem;
    font-weight: 800;
    color: #ffffff;
    text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
    margin-bottom: 20px;
    letter-spacing: 1px;
}

/* Açıklama Metni */
.cta-description {
    font-size: 1.2rem;
    font-weight: 500;
    color: #ffffff;
    margin-bottom: 30px;
    text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
}

/* WhatsApp Buton */
.whatsapp-btn {
    display: inline-flex;
    align-items: center;
    background: linear-gradient(45deg, #25D366, #128C7E);
    color: #fff;
    padding: 15px 35px;
    border-radius: 50px;
    font-size: 1.4rem;
    font-weight: 700;
    text-decoration: none;
    transition: all 0.3s ease-in-out;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3);
    animation: pulse 2s infinite;
}

.whatsapp-btn:hover {
    background: linear-gradient(45deg, #128C7E, #25D366);
    transform: translateY(-5px);
    box-shadow: 0px 15px 25px rgba(0, 0, 0, 0.4);
}

/* WhatsApp İkon */
.whatsapp-icon {
    font-size: 2.5rem;
    margin-right: 15px;
    animation: bounce 1.5s infinite;
}

/* Animasyonlar */
@keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
    }
    40% {
        transform: translateY(-10px);
    }
    60% {
        transform: translateY(-5px);
    }
}

@keyframes pulse {
    0% {
        box-shadow: 0 0 20px rgba(37, 211, 102, 0.5);
    }
    50% {
        box-shadow: 0 0 40px rgba(37, 211, 102, 0.8);
    }
    100% {
        box-shadow: 0 0 20px rgba(37, 211, 102, 0.5);
    }
}

/* Responsive */
@media (max-width: 768px) {
    .section-title {
        font-size: 2.2rem;
    }

    .cta-description {
        font-size: 1rem;
    }

    .whatsapp-btn {
        font-size: 1rem;
        padding: 12px 25px;
    }

    .whatsapp-icon {
        font-size: 2rem;
    }
}
</style>
</head>

<body>
<?php include "whatsapp-button.php";?>
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
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <h2>MERHABA</h2>
                                <hr>
                                <span>
                                Evinizi, ofisinizi ya da sevdiklerinizin alanlarını özel kılın! El işçiliği ile özenle tasarlanmış cam kandillerimiz, her ortamda zarif bir aydınlatma sağlar ve sıcak bir atmosfer yaratır. Modern tasarımlarıyla geleneksel dokunuşları harmanlayan bu özel ürünler, sadece ışık değil, aynı zamanda bir sanat eseridir. Her biri özgün ve benzersizdir, bu yüzden her bir kandil, kendi hikayesini anlatır. Şimdi sipariş verin ve evinizdeki her köşeye eşsiz bir ışıltı katın. </span>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- / END HEADER DESIGN AREA -->
                <!-- START CONTACT DESIGN AREA -->
                <section id="contact" class="contact-area">
                <section id="contact" class="contact-area">
    <div class="container">
        <div class="container-inner">
            <div class="row">
                <!-- START CONTACT BUTTON DESIGN AREA -->
                <div class="col-lg-12 text-center">
                    <h2 class="section-title wow fadeInUp delay-0-2s">WhatsApp ile İletişime Geçin</h2>
                    <p class="wow fadeInUp delay-0-4s">Evinize zarif bir dokunuş katın! El yapımı cam kandillerimizle atmosferi dönüştürün. Şimdi sipariş verin, sıcak ışığın keyfini çıkarın!

</p>
<section class="call-to-action-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="call-to-action-part wow fadeInUp delay-0-2s">
                    <h2 class="section-title">Kendi Tasarımlarınızı Oluşturmak ve Sipariş Vermek İçin Buradayız!</h2>
                    <p class="cta-description">Hayallerinizdeki Şık Tasarımı gerçeğe dönüştürmek için bir tık uzağınızdayız! 💫</p>
                    
                    <!-- WhatsApp Button -->
                    <a href="https://wa.me/905551609765" target="_blank" class="whatsapp-btn">
                        <span class="whatsapp-icon"><i class="ri-whatsapp-line"></i></span>
                        <span class="whatsapp-text">WhatsApp ile İletişime Geç</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
</section>

                <!-- / END CONTACT DESIGN AREA -->
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