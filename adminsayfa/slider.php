<div class = "categori-header">
        <h1>Slider İşlemleri </h1>
</div>
<div class= "categori-container1">
<?php ob_start() ?>

<?php
if(isset($_GET["islem"])){
		if($_GET["islem"]=="Guncelle"){
			$sliderid = $_GET["id"];
			
			$sorgusliderSec = mysqli_query($baglanti, "select * from slider where 
											sliderid=$sliderid");
			$dizisliderSec = mysqli_fetch_array($sorgusliderSec);		
        }
    }
?>	

<form class="ust15bosluk" action="" method="POST" >

<div class="input-group mb-3">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3" ><a href="https://www.pexels.com/" target = "_blank">https://www.pexels.com/</a></span>
  </div>
  <input type="text" class="form-control" name = "sliderResimAdi" id="basic-url" aria-describedby="basic-addon3" placeholder="Kopyaladığınız Resimin Urlsini Yapıştırınız">
</div>
</div>

<div class="form-group">
		<input name="sliderYazıBaslik" type="text" placeholder="Slider Başlık Yazısı Giriniz" class="form-control"
		value="<?php if(isset($dizisliderSec)) echo $dizisliderSec["sliderYazıBaslik"]; ?>">
</div>

<div class="form-group">
        <textarea name="sliderYaziIcerik" class="form-control"  placeholder="Slider İçerik Yazısı Giriniz"><?php if(isset($dizisliderSec)) echo $dizisliderSec["sliderYaziIcerik"];?></textarea>
</div>


<button name="btnsliderekle" type="submit" class="btn btn-success"><image src="images/icons/goruntule.png"  width='30' height='30'>Slider Resim Ekle</button>

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
		
	
	name="btnsliderguncelle" type="submit" class="btn btn-warning"><image src="images/icons/updateveri.png"  width='30' height='30'>Slider Güncelle</button>


</form>
<br>
<?php

if(isset($_POST["btnsliderguncelle"])){
    $sliderid=$_GET["id"];
    $sliderResimAdi=$_POST["sliderResimAdi"];
    $sliderYazıBaslik=$_POST["sliderYazıBaslik"];
    $sliderYaziIcerik=$_POST["sliderYaziIcerik"];

    $sliderguncelle=("update slider set sliderResimAdi='$sliderResimAdi',sliderYazıBaslik='$sliderYazıBaslik',sliderYaziIcerik='$sliderYaziIcerik' where sliderid=$sliderid");

    if(mysqli_query($baglanti,$sliderguncelle)){

        echo '<div class="alert alert-success" role="alert">
                    Slider Resmi Güncellendi 
                </div>';header("Refresh:2  adminpanel.php?a=slider");
    }
    else
    {
         echo '<div class="alert alert-danger" role="alert">
                    Slider Resmi Güncellenirken  Hata Oluştu
                </div>';
    }

}


if(isset($_POST["btnsliderekle"]))
{
    $sliderResimAdi=$_POST["sliderResimAdi"];
    $sliderYazıBaslik=$_POST["sliderYazıBaslik"];
    $sliderYaziIcerik=$_POST["sliderYaziIcerik"];

    $sorguekle= ("insert into slider (sliderResimAdi,sliderYazıBaslik,sliderYaziIcerik) 
                        values ('$sliderResimAdi','$sliderYazıBaslik','$sliderYaziIcerik')");

        if(mysqli_query($baglanti,$sorguekle)) 
        {
            echo '<div class="alert alert-success" role="alert">
                    Slider Resmi Eklendi
                </div>';header("Refresh:2  adminpanel.php?a=slider");
        }
        else
        {
            echo '<div class="alert alert-danger" role="alert">
                    Slider Resmi Eklenirken Hata Oluştu
                </div>';
        }
}

if(isset($_GET["islem"])) {
    if($_GET["islem"]=="Sil") {

    $sliderid=$_GET["id"];

    $sorgusil=("delete from slider where sliderid=$sliderid");

    if(mysqli_query($baglanti,$sorgusil))
    {
        echo '<div class="alert alert-success" role="alert">
                    Slider Resmi Silindi
                </div>';header("Refresh:0.9  adminpanel.php?a=slider");
    }
    else
    {
            echo '<div class="alert alert-danger" role="alert">
                    Slider Resmi Silinirken Hata Oluştu
                </div>';
    }
}
}


?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Resim</th>
      <th scope="col">Slider Başlık</th>
      <th scope="col">Slider İçerik</th>
    </tr>
  </thead>
  <tbody>

  <?php
	   
       $sorguorgenci = mysqli_query($baglanti,"select * from slider");
           while($diziogrenci = mysqli_fetch_array($sorguorgenci)) { ?>
           
           
       <tr>	
       <td>
         <a href="?a=slider&islem=Sil&id=<?= $diziogrenci["sliderid"] ?>"><image src="images/icons/copkutusu.png"  width='25' height='25'></a>
         |
         <a href="?a=slider&islem=Guncelle&id=<?= $diziogrenci["sliderid"] ?>"><image src="images/icons/guncelle.png"  width='25' height='25'></a>
       </td>
       <td><img src="<?= $diziogrenci["sliderResimAdi"] ?>" height="90px" width="150px"></td>
       <td><?= $diziogrenci["sliderYazıBaslik"] ?></td>
       <td><?= $diziogrenci["sliderYaziIcerik"] ?></td>
       
       </tr>
       <?php } ?>
    
  </tbody>
</table>
</div>