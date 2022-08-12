<!doctype html>
<html lang="tr">

<head>
    <style>
    .girisadsoyad {
        float: right;
    }

    .categori-container1 {
        padding: 30px;
        margin-bottom: 30px;
        box-shadow: 0px 0px 35px -14px rgba(64, 64, 64, 1);
    }

    .categori-header {
        text-align: center;
    }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>{Mesut}Erden</title>
</head>

<body>

    <!-- Veritabanı Bağlantısı -->
    <?php $baglanti = mysqli_connect("localhost","root","","blogSitesi"); mysqli_set_charset($baglanti,"utf8");?>
    <!-- Veritabanı Bağlantısı Bitiş -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="adminpanel.php"><strong>{Mesut}</strong>Erden</a>
        <div class="girisadsoyad">
            <div class="info text-center mb-2">

                <b>Kullanıcı :</b>&nbsp;<span class="badge badge-warning">Jon doye</span>
                <b>Yetki :</b>&nbsp;<span class="badge badge-success">Admin</span>
                <a href="index.php" class="badge badge-danger">Çıkış Yap</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-1" id="sag-golge">
                <br>
                <a href="?a=slider" class="list-group-item list-group-item-action">Slider</a>
                <a href="?a=sosyalmedya" class="list-group-item list-group-item-action">Sosyal Medya İşlemleri</a>
                <a href="?a=kullaniciislem" class="list-group-item list-group-item-action">Kullanıcı İşlemleri</a>
                <a href="?a=kategoriislem" class="list-group-item list-group-item-action">Kategori İşlemleri</a>
                <a href="?a=kategoriicerikislem" class="list-group-item list-group-item-action">Kategori İçerik
                    İşlemleri</a>
                <a href="?a=mesajislem" class="list-group-item list-group-item-action">Mesaj İşlemleri</a>

            </div>
            <div class="col">
                <br>