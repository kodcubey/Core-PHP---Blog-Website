<!doctype html>
<html lang="tr">

<head>
    <style>
    body {
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 1600px;
        width: 100%;
        margin: 0 auto;
    }

    #menu {
        margin-top: 100px;
        position: sticky;
        top: 0;
        z-index: 100;
        box-shadow: 0px 0px 35px 0px rgba(214, 214, 214, 1);
    }

    #card {
        width: 288px;
        heigth: 200px;
        margin-bottom: 20px;
        margin-top: 5px;
    }

    #slider {
        margin-top: 30px;
        margin-bottom: 20px;

    }

    #footer {

        background-color: dimgray;

    }

    #alt-bolum {
        margin-top: 30px;
    }

    #sayfaiciayar {
        margin-bottom: 35px;
        margin-top: 30px;
        margin-left: 20px;
        margin-right: 20px;
        box-shadow: 0px 0px 35px 0px rgba(214, 214, 214, 1);

    }

    .containerbox {
        float: left;
        display: flex;
        flex-direction: row;
        justify-content: center;
        margin-bottom: 5px;

    }

    .box {
        box-shadow: 0px 0px 16px 0px rgba(59, 59, 59, 1);
    }


    .box:hover {

        transition: 0.5s;
        transform: scale(1.1);
        z-index: 2;

    }

    .yazisinir {
        position: relative;
        height: 59px;
        overflow: hidden;
        line-height: 19px;
    }

    .yazisinir:after {
        content: "";
        text-align: right;
        /* sağa yaslıyoruz */
        position: absolute;
        /* absolute - bağımsız değerini veriyoruz */
        bottom: 0;
        /* aşağı yaslıyoruz */
        right: 0;
        /* sağa yaslıyoruz */
        width: 50%;
        /* genişliğin %50'sini alıyoruz */
        height: 1.2em;
        /* yüksekliği yazı boyutunuza göre değiştirin */
        background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1) 50%);
        /* soldan transparan bağlayarak sağa doğru beyazlaşan arkaplan*/
    }

    .clear {
        clear: left;
    }

    #b1 {
        background-color: none;
        color: black;
        border-color: black;
        border-radius: 2;
    }

    #b1:hover {
        background-color: #262626;
        color: white;
    }

    #b2 {
        background-color: none;
        color: black;
        border-color: black;
        border-radius: 2;
        width: 150px;
        height: 40px;
    }

    #b2:hover {
        background-color: #262626;
        color: white;
    }

    #shr {
        max-width: 200px;
        height: 36px;
        margin-right: 6px;
        border: none;
        border: 0.3px solid black;
        border-radius: 5px;
    }

    .box1:hover {
        transition: 0.5s;
        transform: scale(1.2);

    }

    .media-body {
        margin: 5px 5px 5px 0px;
    }

    #button-detay {

        background-color: white;
        color: black;
    }

    #button-detay:hover {

        background-color: #262626;
        color: white;

    }

    .container .resim img {
        max-width: 100%;
        max-heigth: auto:inherit;
    }

    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;

    }

    .detail-container {
        padding: 10px;
        width: 100%;
        heigth: 100%;
    }

    .title {
        font-famiy: sans-serif;
        font-size: 2.5em;
        text-align: center;
        font-weight: 700;
        letter-spacing: 5px;
        text-transform: uppercase;
        margin: 30px 0;
        color: #5c5c5c;
    }

    .pragrapy-body {
        text-align: center;
        text-indent: 50px;
        padding: 20px;
        font-size: 1.15em;
        font-weight: 460;
        color: #787c82;
    }

    .resim {
        max-width: 90%;
        max-heigth: 500px;
        margin: 20px auto;
    }

    .date {
        display: inline;
        float: right;
        margin-right: 50px;
        font-weight: 299;
        color: #9c9c9c;
        font-size: 1.1em;
    }

    @media only screen and (max-width: 768px) {
        #deneme {
            max-width: 100%;
            max-height: 250px;
        }

        #sayfaiciayar {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        #sayfaiciayar img {
            width: 100%;
            max-height: 400px;
        }

        card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;

        }

    }

    .yorumform {
        background-color: #EAEAEA;
        margin: 50px 0px 30px 0px;
        padding: 30px;
        box-shadow: 0px 0px 35px -14px rgba(64, 64, 64, 1);

    }

    .yorumcontainer {
        max-width: 100%;
        height: 100%;
    }

    .yorumcontainer .yorumiskelet {
        width: 100%;
        height: 100%;
        padding: 10px;
    }

    .yorum img {
        display: block;
        border: 1px solid grey;
        border-radius: 100%;
        float: left;
        margin-right: 9px;
    }

    .yorumad {
        width: 100%;
        padding: 20px 50px 0 0;

    }

    .yorum-title {
        text-align: center;
        margin-top: 50px;
    }

    .yorumicerik {
        padding-top: 7px;
        text-indent: 30px;
    }

    hr {
        color: black;
    }

    #shr1 {
        width: 100%;
        height: 36px;

        border: none;
        border: 0.3px solid grey;
        border-radius: 5px;
    }

    #shr3 {
        width: 100%;
        height: 106px;
        margin-right: 6px;
        border: none;
        border: 0.3px solid grey;
        border-radius: 5px;
    }

    .yorum b {
        text-align: right;
        display: block;
        font-weight: 299;
        color: #9c9c9c;
        font-size: 0.9em;
    }

    #sliderfont h2 {
        text-transform: uppercase;
        letter-spacing: 5px;
    }

    #sliderfont p {
        font-size: 1.1em;
    }








    #iletisim-sayfasi .box2 {
        display: block;
        width: 900px;
        height: 540px;
        margin: 0 auto;
    }

    #iletisim-sayfasi .box2 h3 {
        padding-bottom: 15px;
        border-bottom: 2px solid #d8d8d8;
        margin-top: 0;
    }

    #iletisim-sayfasi .iletisim-box1 {
        width: 370px;
        height: 157px;
    }

    #iletisim-sayfasi .iletisim-box1 p {
        font-size: 14px;
        line-height: 25px;
    }

    #iletisim-sayfasi .iletisim-box2 {

        border: 2px solid #e5e5e5;
        border-radius: 4px;
        background-color: white;

    }

    #iletisim-sayfasi .iletisim-box2 p {
        padding: 20px;
        font-size: 14px;
        color: #626567;
    }

    #iletisim-sayfasi .iletisim-box2 p span {
        color: black;
    }

    #iletisim-sayfasi .iletisim-box3 {
        width: 370px;
    }

    #iletisim-sayfasi .iletisim-box3 p {

        font-size: 12px;
        color: #626567;
    }

    #iletisim-sayfasi .iletisim-box3 p span {
        color: red;
    }

    #iletisim-sayfasi .box3 {
        display: block;
        width: 450px;
        height: 390px;
        margin-top: 70px;
        float: left;

    }

    #iletisim-sayfasi .container2 {
        width: 400px;
        float: left;
        margin-right: 50px;
    }

    #iletisim-sayfasi .box3 form input,
    textarea {
        width: 405px;
        border-radius: 4px;
        border: 2px solid #e5e5e5;
        height: 40px;
        padding: 10px;
        box-sizing: border-box;
        margin-bottom: 15px;
        color: #626567;
    }

    #iletisim-sayfasi .box3 form input[type=submit] {
        background-color: #1f9ed6;
        border-color: #1f9ed6;
        color: white;
        cursor: pointer;
        font-size: 16px;
        font-weight: 600;
        outline: none;
        box-shadow: 0px 5px #1c8ec0;

    }

    #iletisim-sayfasi .box3 form input[type=submit]:hover {
        background-color: #2086d6;
        border-color: #2086d6;
    }

    #iletisim-sayfasi .box3 form label {
        display: inline-block;
        margin-bottom: 7px;
    }

    #iletisim-sayfasi .box3 form label span {
        color: red;
    }

    #iletisim-sayfasi .box3 textarea {
        resize: none;
        overflow: hidden;
        font-size: 12px !important;
        height: 140px;
        font-family: inherit;
    }

    #iletisim-sayfasi .box3 form {
        font-size: 13px;
    }




    @media only screen and (max-width: 768px) {

        #iletisim-sayfasi {
            width: 95%;
            margin: 0 auto;
        }

        #iletisim-sayfasi .box2 {
            width: 100%;
            height: auto;
        }

        #iletisim-sayfasi .container2 {
            width: 100%;
            height: auto;
        }

        #iletisim-sayfasi .box3 {
            width: 100%;
            height: auto;
            margin-top: 20px;
        }

        #iletisim-sayfasi .iletisim-box3 p {
            display: none;
        }

        #iletisim-sayfasi .box3 form input,
        textarea {
            width: 100%;
            height: auto;
        }

        #iletisim-sayfasi .iletisim-box1 {
            width: 100%;
            height: auto;
        }



        #iletisim-sayfasi .box3 form input[type=submit] {
            background-color: white;
            border: 1px solid grey;
            color: black;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
        }



        #iletisim-sayfasi .box3 form input[type=submit]:hover {
            background-color: white;
            border-color: grey;
        }


    }
    </style>

    <!-- Required meta tags background-color:#f8f9fa; -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>myblogwebsite.com</title>
</head>
<body>
    <!-- Veritabanı Bağlantısı -->
    <?php $baglanti = mysqli_connect("localhost","root","","blogSitesi"); mysqli_set_charset($baglanti,"utf8");?>
    <!-- Veritabanı Bağlantısı Bitiş -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="menu">
            <a class="navbar-brand" href="index.php"><strong>{CODE}</strong> Blog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <?php
	            $sorgukategori = mysqli_query($baglanti,"select * from kategori where UstKategoriId=0");
		        	while($dizikategori = mysqli_fetch_array($sorgukategori)) { ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= $dizikategori["KategoriAdi"] ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
                        $sorgukategori2 = mysqli_query($baglanti,"select * from kategori where UstKategoriId=".$dizikategori["KategoriId"]);
                        while($dizikategori2 = mysqli_fetch_array($sorgukategori2)) { ?>
                            <a class="dropdown-item"
                                href="?s=detaysayfasi&page=<?= $dizikategori2["KategoriId"] ?>"><?= $dizikategori2["KategoriAdi"] ?></a>
                            <?php } ?>
                        </div>

                    </li>
                    <?php } ?>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="?s=hakkimda">Hakkımda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="?s=iletisim">İletişim <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" action="index.php" method="POST">
                    <input id="shr" type="search" name="ara" placeholder="Ara" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" id="b1" name="btnara"
                        type="submit">Ara</button>
                </form>


            </div>
        </nav>