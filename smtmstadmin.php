<!DOCTYPE html>
<html lang="tr">

<head>
    <title>Admin Paneli</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>
    <center>
        <div class="limiter">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/img-01.png" alt="IMG">
                </div>
                <!--form başlangıç-->
                <form class="login100-form validate-form" action="" method="POST">
                    <span class="login100-form-title">
                        Giriş Yap
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="E-mail Giriniz">
                        <input class="input100" type="text" name="adminEmail" placeholder="E-Mail">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Şifre Giriniz">
                        <input class="input100" type="password" name="adminSifre" placeholder="Şifre">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="btnAdminGiris" type="submit">
                            Giriş
                        </button>
                    </div>
                    <div class="text-center p-t-12">
                        <span class="txt1"></span>
                    </div>

                </form>
                <!--form bitiş-->
            </div>
        </div>
    </center>

    <?php
	$baglanti = mysqli_connect("localhost","root","","blogSitesi"); mysqli_set_charset($baglanti,"utf8");
	if(isset($_POST["btnAdminGiris"])) {
		
		$adminEmail = $_POST["adminEmail"];
		$adminSifre = $_POST["adminSifre"];
		
		$sorguGiris = mysqli_query($baglanti,"select * from adminkullanici where
		adminEmail='$adminEmail' and adminSifre='$adminSifre'");
		if($dizigiris = mysqli_fetch_array($sorguGiris))
		{
			echo '<center><div class="alert alert-success" role="alert">
				Giriş Başarılı Admin Paneline Yönlendiriliyorsunuz Lütfen Bekleyiniz...
		  		</div></center>';
			header("Refresh:3 adminpanel.php");
		}
		else
		{
			echo '<center><div class="alert alert-danger" role="alert">
				Hatalı Şifre Veya E-mail Girdiniz !
		  		</div></center>';
		}
	}
	?>






    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>