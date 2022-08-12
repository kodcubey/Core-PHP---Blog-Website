<div class = "categori-header">
        <h1>Kategori İşlemleri </h1>
</div>
<div class= "categori-container1">
<?php ob_start() ?>

<?php
if(isset($_GET["islem"])){
		if($_GET["islem"]=="Guncelle"){
			$KategoriId = $_GET["id"];
			
			$sorgukategoriSec = mysqli_query($baglanti, "select * from kategori where 
                                                     KategoriId=$KategoriId");
			$dizikategoriSec = mysqli_fetch_array($sorgukategoriSec);		
        }
    }
?>	

<form class="ust15bosluk" action="" method="POST" >

<div class="form-group">
		<input name="KategoriAdi" type="text" placeholder="Kategori Adı Yazınız" class="form-control"
		value="<?php if(isset($dizikategoriSec)) echo $dizikategoriSec["KategoriAdi"]; ?>">
</div>

<button name="btnkategoriekle" type="submit" class="btn btn-success"><image src="images/icons/goruntule.png"  width='30' height='30'>Kategori Ekle</button>

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
		
	
	name="btnkategoriguncelle" type="submit" class="btn btn-warning"><image src="images/icons/updateveri.png"  width='30' height='30'>Kategori Güncelle</button>


</form>
<br>
<?php

if(isset($_POST["btnkategoriguncelle"])){

    $KategoriAdi=$_POST["KategoriAdi"];

    $kullaniciguncelle=("update kategori set KategoriAdi='$KategoriAdi' where KategoriId=$KategoriId");

    if(mysqli_query($baglanti,$kullaniciguncelle)){

        echo '<div class="alert alert-success" role="alert">
                    Kategori Güncelleniyor Lütfen Bekleyiniz...
                </div>';header("Refresh:2  adminpanel.php?a=kategoriislem");
    }
    else
    {
         echo '<div class="alert alert-danger" role="alert">
                    Kategori Güncellenirken  Hata Oluştu
                </div>';
    }

}


if(isset($_POST["btnkategoriekle"]))
{
    $UstKategoriId=0;
    $KategoriAdi=$_POST["KategoriAdi"];
    
    $sorguekle= ("insert into kategori (UstKategoriId,KategoriAdi) 
                        values ('$UstKategoriId','$KategoriAdi')");

        if(mysqli_query($baglanti,$sorguekle)) 
        {
            echo '<div class="alert alert-success" role="alert">
                    Kategori Ekleniyor Lütfen Bekleyiniz...
                </div>';header("Refresh:2  adminpanel.php?a=kategoriislem");
        }
        else
        {
            echo '<div class="alert alert-danger" role="alert">
                    Kategori Eklenirken Hata Oluştu
                </div>';
        }
}

if(isset($_GET["islem"])) {
    if($_GET["islem"]=="Sil") {
        $KategoriId =$_GET["id"];

    $sorgusil=("delete from kategori where KategoriId=$KategoriId");

    if(mysqli_query($baglanti,$sorgusil))
    {
        echo '<div class="alert alert-success" role="alert">
                Kategori Siliniyor Lütfen Bekleyiniz...
                </div>';header("Refresh:0.9  adminpanel.php?a=kategoriislem");
    }
    else
    {
            echo '<div class="alert alert-danger" role="alert">
                    Kategori Resmi Silinirken Hata Oluştu
                </div>';
    }
}
}


?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Kategori Adı</th>
    </tr>
  </thead>
  <tbody>

  <?php
	   
       $sorgukategori = mysqli_query($baglanti,"select * from kategori where UstKategoriId=0");
           while($dizikategori = mysqli_fetch_array($sorgukategori)) { ?>
        <tr>	
       <td>
         <a href="?a=kategoriislem&islem=Sil&id=<?= $dizikategori["KategoriId"] ?>"><image src="images/icons/copkutusu.png"  width='25' height='25'></a>
         |
         <a href="?a=kategoriislem&islem=Guncelle&id=<?= $dizikategori["KategoriId"] ?>"><image src="images/icons/guncelle.png"  width='25' height='25'></a>
       </td>
       <td><?= $dizikategori["KategoriAdi"] ?></td>
       </tr>
       <?php } ?>
    
  </tbody>
</table>
</div>






















<div class = "categori-header">
        <h1>Alt Kategori İşlemleri </h1>
</div>
<div class = "categori-container1">

<?php
if(isset($_GET["islem2"])){
		if($_GET["islem2"]=="Guncelle"){
			$KategoriId = $_GET["id"];
			
			$sorgukategoriSec2 = mysqli_query($baglanti, "select * from kategori where 
                                            KategoriId=$KategoriId");
			$dizikategoriSec2 = mysqli_fetch_array($sorgukategoriSec2);		
        }
    }
?>	

<form class="ust15bosluk" action="" method="POST" >

<div class="form-group">
		<select class="form-control" name="UstKategoriId">
			<option value="-1">Kategori Seçiniz...</option>
			<?php
			$sogrukategoriliste = mysqli_query($baglanti, "select * from kategori where UstKategoriId=0");
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

<div class="form-group">
		<input name="KategoriAdi" type="text" placeholder="Alt Kategori Adı Yazınız" class="form-control"
		value="<?php if(isset($dizikategoriSec2)) echo $dizikategoriSec2["KategoriAdi"]; ?>">
</div>


<button name="btnaltkategoriekle" type="submit" class="btn btn-success"><image src="images/icons/goruntule.png"  width='30' height='30'>Alt Kategori Ekle</button>

<button name="btnkategoriara" type="submit" class="btn btn-light"><image src="images/icons/search.png"  width='30' height='30'>Ara</button>

<button
		
		<?php
			if(isset($_GET["islem2"])) {
				if($_GET["islem2"]=="Guncelle")
					echo "visible";
				else
					echo "hidden";
			}
			else
				echo "hidden";
		?>
		
	
	name="btnaltkategoriguncelle" type="submit" class="btn btn-warning"><image src="images/icons/updateveri.png"  width='30' height='30'>Alt Kategori Güncelle</button>


</form>
<br>
<?php
 
if(isset($_POST["btnaltkategoriguncelle"])){

    $UstKategoriId=$_POST["UstKategoriId"];
    $KategoriAdi=$_POST["KategoriAdi"];

    $kategoriguncelle2=("update kategori set KategoriAdi='$KategoriAdi',UstKategoriId='$UstKategoriId' where KategoriId=$KategoriId");

    if(mysqli_query($baglanti,$kategoriguncelle2)){

        echo '<div class="alert alert-success" role="alert">
                    Alt Kategori Güncelleniyor Lütfen Bekleyiniz...
                </div>';header("Refresh:2  adminpanel.php?a=kategoriislem");
    }
    else
    {
         echo '<div class="alert alert-danger" role="alert">
                    Alt Kategori Güncellenirken  Hata Oluştu
                </div>';
    }

}


if(isset($_POST["btnaltkategoriekle"]))
{
    $UstKategoriId=$_POST["UstKategoriId"];
    $KategoriAdi=$_POST["KategoriAdi"];
    

    $sorguekle2= ("insert into kategori (UstKategoriId,KategoriAdi) 
                        values ('$UstKategoriId','$KategoriAdi')");

        if(mysqli_query($baglanti,$sorguekle2)) 
        {
            echo '<div class="alert alert-success" role="alert">
                    Alt Kategori Lütfen Bekleyiniz...
                </div>';header("Refresh:2  adminpanel.php?a=kategoriislem");
        }
        else
        {
            echo '<div class="alert alert-danger" role="alert">
                    Alt Kategori Eklenirken Hata Oluştu
                </div>';
        }
}

if(isset($_GET["islem2"])) {
    if($_GET["islem2"]=="Sil") {
        $KategoriId=$_GET["id"];

    $sorgusil2=("delete from kategori where KategoriId=$KategoriId");

    if(mysqli_query($baglanti,$sorgusil2))
    {
        echo '<div class="alert alert-success" role="alert">
                    Alt Kategori Siliniyor Lütfen Bekleyiniz...
                </div>';header("Refresh:0.9  adminpanel.php?a=kategoriislem");
    }
    else
    {
            echo '<div class="alert alert-danger" role="alert">
                    Alt Kategori Silinirken Hata Oluştu
                </div>';
    }
}
}


?>

<?php

if(isset($_POST["btnkategoriara"]))
{?>

    <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Alt Kategori Adı</th>
      </tr>
    </thead>
    <tbody>
  
    <?php
         $KategoriId=$_POST["KategoriId"];
         $sorgukategori2 = mysqli_query($baglanti,"select * from kategori where UstKategoriId!=0 and UstKategoriId='$KategoriId'");
             while($dizikategori2 = mysqli_fetch_array($sorgukategori2)) { ?>
             
             
         <tr>	
         <td>
           <a href="?a=kategoriislem&islem2=Sil&id=<?= $dizikategori2["KategoriId"] ?>"><image src="images/icons/copkutusu.png"  width='25' height='25'></a>
           |
           <a href="?a=kategoriislem&islem2=Guncelle&id=<?= $dizikategori2["KategoriId"] ?>"><image src="images/icons/guncelle.png"  width='25' height='25'></a>
         </td>
         <td><?= $dizikategori2["KategoriAdi"] ?></td>
         </tr>
         <?php } ?>
      
    </tbody>
  </table>
<?php }

else{ ?>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Alt Kategori Adı</th>
      </tr>
    </thead>
    <tbody>
  
    <?php
         
         $sorgukategori2 = mysqli_query($baglanti,"select * from kategori where UstKategoriId !=0 and UstKategoriId !=-1 and UstKategoriId !=-2");
             while($dizikategori2 = mysqli_fetch_array($sorgukategori2)) { ?>
             
             
         <tr>	
         <td>
           <a href="?a=kategoriislem&islem2=Sil&id=<?= $dizikategori2["KategoriId"] ?>"><image src="images/icons/copkutusu.png"  width='25' height='25'></a>
           |
           <a href="?a=kategoriislem&islem2=Guncelle&id=<?= $dizikategori2["KategoriId"] ?>"><image src="images/icons/guncelle.png"  width='25' height='25'></a>
         </td>
         <td><?= $dizikategori2["KategoriAdi"] ?></td>
         </tr>
         <?php } ?>
      
    </tbody>
  </table>

<?php } ?>
</div>