<div class = "categori-header">
        <h1>Kategori İçerik İşlemleri </h1>
</div>
<div class= "categori-container1">
<?php ob_start() ?>

<?php
if(isset($_GET["islem"])){
		if($_GET["islem"]=="Guncelle"){
			$altkategoriicerikid=$_GET["id"];
			
			$sorguicerikSec = mysqli_query($baglanti, "select * from altkategoriicerik where 
                                    altkategoriicerikid=$altkategoriicerikid");
			$diziicerikSec = mysqli_fetch_array($sorguicerikSec);		
        }
    }
?>	

<form class="ust15bosluk" action="" method="POST" >

<div class="input-group mb-3">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3" ><a href="https://www.pexels.com/" target = "_blank">https://www.pexels.com/</a></span>
  </div>
  <input type="text" class="form-control" name = "altkategoriicerikresim" id="basic-url" aria-describedby="basic-addon3" placeholder="Kopyaladığınız Resimin Urlsini Yapıştırınız">
</div>
</div>

<div class="form-group">
		<input name="altkategoriicerikbaslik" type="text" placeholder="Kategori İçerik Başlığı Yazınız" class="form-control"
		value="<?php if(isset($diziicerikSec)) echo $diziicerikSec["altkategoriicerikbaslik"]; ?>">
</div>

<div class="form-group">
        <textarea name="altkategoriicerikyazi" class="form-control"  placeholder="Kategori İçerik Yazısı Giriniz"><?php if(isset($diziicerikSec)) echo $diziicerikSec["altkategoriicerikyazi"];?></textarea>
</div>

<div class="form-group">
		<select class="form-control" name="altkategoriid">
			<option value="1000">Alt Kategori Seçiniz...</option>
			<?php
			$sogrukategoriliste = mysqli_query($baglanti, "select * from kategori where UstKategoriId !=0 and kategoriid !=26");
			while($dizikategoriliste = mysqli_fetch_array($sogrukategoriliste)) { ?>
				
				<option 
				
					<?php
						if(isset($dizikategoriliste)){
							if($dizikategoriliste["UstKategoriId"]== $dizikategoriliste["KategoriAdi"])
							{
								echo "selected";
							}
						}	
					?>
				
				value="<?= $dizikategoriliste["KategoriId"] ?>"><?= $dizikategoriliste["KategoriAdi"] ?></option>
			
			<?php } ?>
		</select>
</div>

<button name="btnicerikekle" type="submit" class="btn btn-success"><image src="images/icons/goruntule.png"  width='30' height='30'>Kategori İçerik Ekle</button>

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
		
	
	name="btnicerikguncelle" type="submit" class="btn btn-warning"><image src="images/icons/updateveri.png"  width='30' height='30'>Kategori İçerik Güncelle</button>


</form>
<br>
<?php

if(isset($_POST["btnicerikguncelle"])){
    $altkategoriicerikid=$_GET["id"];

    $altkategoriicerikresim=$_POST["altkategoriicerikresim"];
    $altkategoriicerikbaslik=$_POST["altkategoriicerikbaslik"];
    $altkategoriicerikyazi=$_POST["altkategoriicerikyazi"];
    $altkategoriid=$_POST["altkategoriid"];

    $kullaniciguncelle=("update altkategoriicerik set altkategoriicerikresim='$altkategoriicerikresim',altkategoriicerikbaslik='$altkategoriicerikbaslik',altkategoriicerikyazi='$altkategoriicerikyazi',altkategoriid='$altkategoriid' where altkategoriicerikid=$altkategoriicerikid");

    if(mysqli_query($baglanti,$kullaniciguncelle)){

        echo '<div class="alert alert-success" role="alert">
                    Kategori İçeriği Güncelleniyor Lütfen Bekleyiniz...
                </div>';header("Refresh:2  adminpanel.php?a=kategoriicerikislem");
    }
    else
    {
         echo '<div class="alert alert-danger" role="alert">
                    Kategori İçeriği Güncellenirken  Hata Oluştu
                </div>';
    }

}


if(isset($_POST["btnicerikekle"]))
{
    $altkategoriicerikresim=$_POST["altkategoriicerikresim"];
    $altkategoriicerikbaslik=$_POST["altkategoriicerikbaslik"];
    $altkategoriicerikyazi=$_POST["altkategoriicerikyazi"];
    $altkategoriid=$_POST["altkategoriid"];

    $sorguekle= ("insert into altkategoriicerik (altkategoriicerikresim,altkategoriicerikbaslik,altkategoriicerikyazi,altkategoriid,yazitarih) 
                        values ('$altkategoriicerikresim','$altkategoriicerikbaslik','$altkategoriicerikyazi','$altkategoriid',CURRENT_DATE())");

        if(mysqli_query($baglanti,$sorguekle)) 
        {
            echo '<div class="alert alert-success" role="alert">
                        Kategori İçeriği Ekleniyor Lütfen Bekleyiniz...
                </div>';header("Refresh:2  adminpanel.php?a=kategoriicerikislem");
        }
        else
        {
            echo '<div class="alert alert-danger" role="alert">
                            Kategori İçeriği Eklenirken Hata Oluştu
                </div>';
        }
}

if(isset($_GET["islem"])) {
    if($_GET["islem"]=="Sil") {
        $altkategoriicerikid=$_GET["id"];

    $sorgusil=("delete from altkategoriicerik where altkategoriicerikid=$altkategoriicerikid");

    if(mysqli_query($baglanti,$sorgusil))
    {
        echo '<div class="alert alert-success" role="alert">
                    Kategori İçeriği Siliniyor Lütfen Bekleyiniz...
                </div>';header("Refresh:0.9  adminpanel.php?a=kategoriicerikislem");
    }
    else
    {
            echo '<div class="alert alert-danger" role="alert">
                    Kategori İçeriği Silinirken Hata Oluştu
                </div>';
    }
}
}


?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">İçerik Resimi</th>
      <th scope="col">İçerik Başlık</th>
      <th scope="col">İçerik Yazı</th>
      <th scope="col">Alt Kategori Adı</th>
    </tr>
  </thead>
  <tbody>

  <?php
	   
       $sorguicerik = mysqli_query($baglanti,"select ki.altkategoriicerikid,ki.altkategoriicerikresim,ki.altkategoriicerikbaslik,ki.altkategoriicerikbaslik ,ki.altkategoriicerikyazi,k.KategoriAdi from kategori k INNER join altkategoriicerik ki on k.KategoriId=ki.altkategoriid ");
           while($diziicerik = mysqli_fetch_array($sorguicerik)) { ?>
        
        <tr>	
       <td>
         <a href="?a=kategoriicerikislem&islem=Sil&id=<?= $diziicerik["altkategoriicerikid"] ?>"><image src="images/icons/copkutusu.png"  width='25' height='25'></a>
         |
         <a href="?a=kategoriicerikislem&islem=Guncelle&id=<?= $diziicerik["altkategoriicerikid"] ?>"><image src="images/icons/guncelle.png"  width='25' height='25'></a>
       </td>
       <td><img src="<?= $diziicerik["altkategoriicerikresim"] ?>" height="90px" width="150px"></td>
       <td><?= $diziicerik["altkategoriicerikbaslik"] ?></td>
       <td><?= $diziicerik["altkategoriicerikyazi"] ?></td>
       <td><?= $diziicerik["KategoriAdi"] ?></td>
       </tr>
       <?php } ?>
    
  </tbody>
</table>

</div>