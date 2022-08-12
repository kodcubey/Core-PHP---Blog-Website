<div class = "categori-header">
        <h1>Kullanıcı İşlemleri </h1>
</div>
<div class= "categori-container1">
<?php ob_start() ?>

<?php
if(isset($_GET["islem"])){
		if($_GET["islem"]=="Guncelle"){
			$adminid = $_GET["id"];
			
			$sorgukullaniciSec = mysqli_query($baglanti, "select * from adminkullanici where 
                                                    adminid=$adminid");
			$diziKullaniciSec = mysqli_fetch_array($sorgukullaniciSec);		
        }
    }
?>	

<form class="ust15bosluk" action="" method="POST" >

<div class="form-group">
		<input name="adminEmail" type="text" placeholder="Admin Email Giriniz" class="form-control"
		value="<?php if(isset($diziKullaniciSec)) echo $diziKullaniciSec["adminEmail"]; ?>">
</div>

<div class="form-group">
		<input name="adminSifre" type="password" placeholder="Admin Şifre Giriniz" class="form-control"
		value="<?php if(isset($diziKullaniciSec)) echo $diziKullaniciSec["adminSifre"]; ?>">
</div>

<div class="form-group">
		<input name="adminAd" type="text" placeholder="Admin Adı Giriniz" class="form-control"
		value="<?php if(isset($diziKullaniciSec)) echo $diziKullaniciSec["adminAd"]; ?>">
</div>

<div class="form-group">
		<input name="adminSoyad" type="text" placeholder="Admin Soyadı Giriniz" class="form-control"
		value="<?php if(isset($diziKullaniciSec)) echo $diziKullaniciSec["adminSoyad"]; ?>">
</div>

<button name="btnkullaniciekle" type="submit" class="btn btn-success"><image src="images/icons/goruntule.png"  width='30' height='30'>Kullanıcı Ekle</button>

<button
		
		<?php
			if(isset($_GET["islem"])) {
				if($_GET["islem"]=="Guncelle")
					echo "visible";
				else
					echo "hidden";
			}
			else
				echo "hidden";
		?>
		
	
	name="btnshesapguncelle" type="submit" class="btn btn-warning"><image src="images/icons/updateveri.png"  width='30' height='30'>Kullanıcı Güncelle</button>


</form>
<br>
<?php

if(isset($_POST["btnshesapguncelle"])){
    $adminid =$_GET["id"];
    $adminEmail=$_POST["adminEmail"];
    $adminSifre=$_POST["adminSifre"];
    $adminAd=$_POST["adminAd"];
    $adminSoyad = $_POST["adminSoyad"];

    $kullaniciguncelle=("update adminkullanici set adminEmail='$adminEmail',adminSifre='$adminSifre',adminAd='$adminAd',adminSoyad='$adminSoyad' where adminid=$adminid");

    if(mysqli_query($baglanti,$kullaniciguncelle)){

        echo '<div class="alert alert-success" role="alert">
                    Kullanıcı Güncelleniyor Lütfen Bekleyiniz...
                </div>';header("Refresh:2  adminpanel.php?a=kullaniciislem");
    }
    else
    {
         echo '<div class="alert alert-danger" role="alert">
                    Kullanıcı Güncellenirken  Hata Oluştu
                </div>';
    }

}


if(isset($_POST["btnkullaniciekle"]))
{
    $adminEmail=$_POST["adminEmail"];
    $adminSifre=$_POST["adminSifre"];
    $adminAd=$_POST["adminAd"];
    $adminSoyad=$_POST["adminSoyad"];

    $sorguekle= ("insert into adminkullanici (adminEmail,adminSifre,adminAd,adminSoyad) 
                        values ('$adminEmail','$adminSifre','$adminAd','$adminSoyad')");

        if(mysqli_query($baglanti,$sorguekle)) 
        {
            echo '<div class="alert alert-success" role="alert">
                    Kullanıcı Ekleniyor Lütfen Bekleyiniz...
                </div>';header("Refresh:2  adminpanel.php?a=kullaniciislem");
        }
        else
        {
            echo '<div class="alert alert-danger" role="alert">
                    Kullanıcı Eklenirken Hata Oluştu
                </div>';
        }
}

if(isset($_GET["islem"])) {
    if($_GET["islem"]=="Sil") {
        $adminid=$_GET["id"];

    $sorgusil=("delete from adminkullanici where adminid=$adminid");

    if(mysqli_query($baglanti,$sorgusil))
    {
        echo '<div class="alert alert-success" role="alert">
                    Kullanıcı Siliniyor Lütfen Bekleyiniz...
                </div>';header("Refresh:0.9  adminpanel.php?a=kullaniciislem");
    }
    else
    {
            echo '<div class="alert alert-danger" role="alert">
                    Kullanıcı Resmi Silinirken Hata Oluştu
                </div>';
    }
}
}


?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Admin Email</th>
      <th scope="col">Admin Şifre</th>
      <th scope="col">Admin Ad</th>
      <th scope="col">Admin Soyad</th>
    </tr>
  </thead>
  <tbody>

  <?php
	   
       $sorgukullanici = mysqli_query($baglanti,"select * from adminkullanici");
           while($dizikullanici = mysqli_fetch_array($sorgukullanici)) { ?>
           
           
       <tr>	
       <td>
         <a href="?a=kullaniciislem&islem=Sil&id=<?= $dizikullanici["adminid"] ?>"><image src="images/icons/copkutusu.png"  width='25' height='25'></a>
         |
         <a href="?a=kullaniciislem&islem=Guncelle&id=<?= $dizikullanici["adminid"] ?>"><image src="images/icons/guncelle.png"  width='25' height='25'></a>
       </td>
       <td><?= $dizikullanici["adminEmail"] ?></td>
       <td>*****</td>
       <td><?= $dizikullanici["adminAd"] ?></td>
       <td><?= $dizikullanici["adminSoyad"] ?></td>
       </tr>
       <?php } ?>
    
  </tbody>
</table>

</div>