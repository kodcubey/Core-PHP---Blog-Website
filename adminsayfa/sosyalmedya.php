<div class = "categori-header">
        <h1>Sosyal Medya İşlemleri </h1>
</div>
<div class= "categori-container1">
<?php ob_start() ?>

<?php
if(isset($_GET["islem"])){
		if($_GET["islem"]=="Guncelle"){
			$footerid = $_GET["id"];
			
			$sorguHesapSec = mysqli_query($baglanti, "select * from footer where 
											footerid=$footerid");
			$diziHesapSec = mysqli_fetch_array($sorguHesapSec);		
        }
    }
?>	

<form class="ust15bosluk" action="" method="POST" >

<div class="form-group">
		<input name="sosyalmedyahesaplinki" type="text" placeholder="Yönlendirilmesini İstediğiniz Hesap Linkini Yapıştırınız" class="form-control"
		value="<?php if(isset($diziHesapSec)) echo $diziHesapSec["sosyalmedyahesaplinki"]; ?>">
</div>

<div class="input-group mb-3">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3" ><a href="https://icons8.com/icons/set/social-media-icons" target = "_blank">https://icons8.com/icons/set/social-media-icons</a></span>
  </div>
  <input type="text" class="form-control" name = "medyaresim" id="basic-url" aria-describedby="basic-addon3" placeholder="Kopyaladığınız Resimin Urlsini Yapıştırınız">
</div>
</div>

<button name="btnhesapekle" type="submit" class="btn btn-success"><image src="images/icons/goruntule.png"  width='30' height='30'>Sosyal Medya Ekle</button>

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
		
	
	name="btnshesapguncelle" type="submit" class="btn btn-warning"><image src="images/icons/updateveri.png"  width='30' height='30'>Hesap Güncelle</button>


</form>
<br>
<?php

if(isset($_POST["btnshesapguncelle"])){
    $footerid=$_GET["id"];
    $sosyalmedyahesaplinki=$_POST["sosyalmedyahesaplinki"];
    $medyaresim=$_POST["medyaresim"];

    $sliderguncelle=("update footer set sosyalmedyahesaplinki='$sosyalmedyahesaplinki',medyaresim='$medyaresim' where footerid=$footerid");

    if(mysqli_query($baglanti,$sliderguncelle)){

        echo '<div class="alert alert-success" role="alert">
                    Hesap Güncelleniyor Lütfen Bekleyiniz...
                </div>';header("Refresh:2  adminpanel.php?a=sosyalmedya");
    }
    else
    {
         echo '<div class="alert alert-danger" role="alert">
                    Hesap Güncellenirken  Hata Oluştu
                </div>';
    }

}


if(isset($_POST["btnhesapekle"]))
{
    $sosyalmedyahesaplinki=$_POST["sosyalmedyahesaplinki"];
    $medyaresim=$_POST["medyaresim"];
    

    $sorguekle= ("insert into footer (sosyalmedyahesaplinki,medyaresim) 
                        values ('$sosyalmedyahesaplinki','$medyaresim')");

        if(mysqli_query($baglanti,$sorguekle)) 
        {
            echo '<div class="alert alert-success" role="alert">
                    Hesap Ekleniyor Lütfen Bekleyiniz...
                </div>';header("Refresh:2  adminpanel.php?a=sosyalmedya");
        }
        else
        {
            echo '<div class="alert alert-danger" role="alert">
                    Hesap Eklenirken Hata Oluştu
                </div>';
        }
}

if(isset($_GET["islem"])) {
    if($_GET["islem"]=="Sil") {

    $footerid=$_GET["id"];

    $sorgusil=("delete from footer where footerid=$footerid");

    if(mysqli_query($baglanti,$sorgusil))
    {
        echo '<div class="alert alert-success" role="alert">
                    Hesap Siliniyor Lütfen Bekleyiniz...
                </div>';header("Refresh:0.9  adminpanel.php?a=sosyalmedya");
    }
    else
    {
            echo '<div class="alert alert-danger" role="alert">
                    Hesap Silinirken Hata Oluştu
                </div>';
    }
}
}


?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Hesap Linki</th>
      <th scope="col">Hesap Resmi</th>
    </tr>
  </thead>
  <tbody>

  <?php
	   
       $sorgufooter = mysqli_query($baglanti,"select * from footer");
           while($dizifooter = mysqli_fetch_array($sorgufooter)) { ?>
           
           
       <tr>	
       <td>
         <a href="?a=sosyalmedya&islem=Sil&id=<?= $dizifooter["footerid"] ?>"><image src="images/icons/copkutusu.png"  width='25' height='25'></a>
         |
         <a href="?a=sosyalmedya&islem=Guncelle&id=<?= $dizifooter["footerid"] ?>"><image src="images/icons/guncelle.png"  width='25' height='25'></a>
       </td>
       <td><?= $dizifooter["sosyalmedyahesaplinki"] ?></td>
       <td><img src="<?= $dizifooter["medyaresim"] ?>" height="40px" width="40px"></td>
       
       
       </tr>
       <?php } ?>
    
  </tbody>
</table>
</div>
