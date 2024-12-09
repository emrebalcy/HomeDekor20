<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="CamKandil" content="Aksesuar Dekor Ev Süs">
    <meta name="EvDekoru" content="Cam Süs Cam Kandil Hediyelik Ev Eşyasi">
    <meta name="Cam" content="hediyelik EVSÜS ev dekoru cam kokulu süs ev cam kandil">
    <meta name="Kandil" content="Cam kandil süs eşya">
    <title>WhatsApp Button</title>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <style>
        /* WhatsApp Button Style */
        .float {
            position: fixed;
            width: 80px;
            height: 80px;
            bottom: 120px; /* Yazıya yer açmak için yukarı çekildi */
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50%;
            text-align: center;
            font-size: 40px; /* Daha büyük simge */
            box-shadow: 2px 2px 5px #999;
            z-index: 100;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .float:hover {
            transform: scale(1.1); /* Hover büyütme efekti */
            box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.3);
        }

        .my-float {
            margin-top: 20px; /* Simgeyi ortalamak için */
        }

        /* Yazı Stili */
        .info-text {
            position: fixed;
            bottom: 60px; /* Butonun hemen altında yer alır */
            right: 40px;
            text-align: center;
            color: #FFF; /* Yazı rengi beyaz */
            font-size: 16px; /* Daha büyük yazı boyutu */
            font-weight: bold;
            line-height: 1.5;
            z-index: 99;
        }

        /* Responsive Tasarım */
        @media (max-width: 768px) {
            .float {
                width: 70px;
                height: 70px;
                font-size: 35px;
            }

            .info-text {
                font-size: 14px; /* Daha küçük ekranlarda yazı boyutu küçülür */
                bottom: 50px;
            }
        }

        @media (max-width: 480px) {
            .float {
                width: 60px;
                height: 60px;
                font-size: 30px;
            }

            .info-text {
                font-size: 12px; /* En küçük ekranlarda yazı boyutu daha da küçülür */
                bottom: 40px;
            }
        }
    </style>
</head>
<body>
    <!-- WhatsApp Button -->
    <a href="https://api.whatsapp.com/send?phone=%2B905551609765&text=Merhaba%21%20Sipariş%20vermek%20istiyorum.%20Lütfen%20bana%20yardımcı%20olur%20musunuz%3F" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    <!-- Alt Metin -->
    <div class="info-text">
        Detaylı Bilgi Ve <br> Sipariş Vermek İçin Tıklayınız
    </div>
</body>
</html>
