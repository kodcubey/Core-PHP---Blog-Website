<div class = "categori-header">
        <h1>Mesaj İşlemleri </h1>
</div><br>
<div class = "categori-header">
        <h1>Onaylanmamış Mesajlar </h1>
</div>
<div class= "categori-container1">
<?php ob_start() ?>


<br>
<?php
//mesaj onaylama
if(isset($_GET["islem"])) {
    if($_GET["islem"]=="Guncelle") {

    $mesajid=$_GET["id"];

    $sorguguncelle=("update mesajlar set onaydurum='Onaylandı' where mesajid=$mesajid");

    if(mysqli_query($baglanti,$sorguguncelle))
    {
        echo '<div class="alert alert-success" role="alert">
                    Yorum Ekleniyor Lütfen Bekleyiniz...
                </div>';header("Refresh:2  adminpanel.php?a=mesajislem");
    }
    else
    {
            echo '<div class="alert alert-danger" role="alert">
                    Yorum Eklenirken Hata Oluştu
                </div>';
    }
}
}

//mesaj oynaylamama
if(isset($_GET["islem2"])) {
    if($_GET["islem2"]=="Guncelle") {

    $mesajid=$_GET["id"];

    $sorguguncelle2=("update mesajlar set onaydurum='Onaylanmadı' where mesajid=$mesajid");

    if(mysqli_query($baglanti,$sorguguncelle2))
    {
        echo '<div class="alert alert-success" role="alert">
                    Yorum Kaldırılıyor Lütfen Bekleyiniz...
                </div>';header("Refresh:2  adminpanel.php?a=mesajislem");
    }
    else
    {
            echo '<div class="alert alert-danger" role="alert">
                    Yorum Kaldırılırken Hata Oluştu
                </div>';
    }
}
}


if(isset($_GET["islem"])) {
    if($_GET["islem"]=="Sil") {

    $mesajid=$_GET["id"];

    $sorgusil=("delete from mesajlar where mesajid=$mesajid");

    if(mysqli_query($baglanti,$sorgusil))
    {
        echo '<div class="alert alert-success" role="alert">
                    Yorum Siliniyor Lütfen Bekleyiniz...
                </div>';header("Refresh:2  adminpanel.php?a=mesajislem");
    }
    else
    {
            echo '<div class="alert alert-danger" role="alert">
                    Yorum Silinirken Hata Oluştu
                </div>';
    }
}
}


?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ad Soyad</th>
      <th scope="col">Mesaj</th>
      <th scope="col">Kategori Adı</th>
      <th scope="col">Yorum Tarihi</th>
      <th scope="col">Onay Durumu</th>  
      <th scope="col">Onay Durumu Değiştir</th>  

    </tr>
  </thead>
  <tbody>

  <?php
	   
       $sorgumesaj = mysqli_query($baglanti,"select m.mesajid,m.kişiad,m.kişisoyad,m.mesaj,k.KategoriAdi,m.yorumtarih,m.onaydurum from altkategoriicerik aki 
       inner JOIN mesajlar m on aki.altkategoriicerikid=m.altkategoriicerikid 
       INNER join kategori k on aki.altkategoriid=k.KategoriId where onaydurum='Onaylanmadı'" );
           while($dizimesaj = mysqli_fetch_array($sorgumesaj)) { ?>
           
           
       <tr>	
       <td>
         <a href="?a=mesajislem&islem=Sil&id=<?= $dizimesaj["mesajid"] ?>"><image src="images/icons/copkutusu.png"  width='25' height='25'></a>
        </td>
       <td><?= $dizimesaj["kişiad"] ?>&nbsp;<?= $dizimesaj["kişisoyad"] ?></td>
       <td><?= $dizimesaj["mesaj"] ?></td>
       <td><?= $dizimesaj["KategoriAdi"] ?></td>
       <td><?= $dizimesaj["yorumtarih"] ?></td>
       <td><img src="https://img.icons8.com/color/48/000000/do-not-disturb.png" alt=""></td>
       <td><a href="?a=mesajislem&islem=Guncelle&id=<?= $dizimesaj["mesajid"] ?>"  style="color:grey;" ><img src="https://img.icons8.com/color/50/000000/checked-checkbox.png" alt="">Onayla</a></td>
       </tr>
       <?php } ?>
    
  </tbody>
</table>
</div>

<br>
<div class = "categori-header">
        <h1>Onaylanmış Mesajlar </h1>
</div>
<div class= "categori-container1">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ad Soyad</th>
      <th scope="col">Mesaj</th>
      <th scope="col">Kategori Adı</th>
      <th scope="col">Yorum Tarihi</th>
      <th scope="col">Onay Durumu</th>  
      <th scope="col">Onay Durumu Değiştir</th>

    </tr>
  </thead>
  <tbody>

  <?php
	   
       $sorgumesaj2 = mysqli_query($baglanti,"select m.mesajid,m.kişiad,m.kişisoyad,m.mesaj,k.KategoriAdi,m.yorumtarih,m.onaydurum from altkategoriicerik aki 
       inner JOIN mesajlar m on aki.altkategoriicerikid=m.altkategoriicerikid 
       INNER join kategori k on aki.altkategoriid=k.KategoriId where onaydurum='Onaylandı'" );
           while($dizimesaj2 = mysqli_fetch_array($sorgumesaj2)) { ?>
           
           
       <tr>	
       <td>
         <a href="?a=mesajislem&islem=Sil&id=<?= $dizimesaj2["mesajid"] ?>"><image src="images/icons/copkutusu.png"  width='25' height='25'></a>
        </td>
       <td><?= $dizimesaj2["kişiad"] ?>&nbsp;<?= $dizimesaj2["kişisoyad"] ?></td>
       <td><?= $dizimesaj2["mesaj"] ?></td>
       <td><?= $dizimesaj2["KategoriAdi"] ?></td>
       <td><?= $dizimesaj2["yorumtarih"] ?></td>
       <td><img src="https://img.icons8.com/color/50/000000/checked-checkbox.png" alt=""></td>
       <td><a href="?a=mesajislem&islem2=Guncelle&id=<?= $dizimesaj2["mesajid"] ?>" style="color:grey;" ><img src="https://img.icons8.com/color/48/000000/do-not-disturb.png" alt="">Onaylama</a></td>
       </tr>
       <?php } ?>
    
  </tbody>
</table>
</div>

<br>
<div class = "categori-header">
        <h1>İletişimden Gelen Mesajlar </h1>
</div>
<div class= "categori-container1">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ad Soyad</th>
      <th scope="col">Mesaj</th>
      <th scope="col">Kategori Adı</th>
      <th scope="col">Yorum Tarihi</th>
      <th scope="col">E-mail</th>

    </tr>
  </thead>
  <tbody>

  <?php
	   
       $sorgumesaj3 = mysqli_query($baglanti,"select * from mesajlar where altkategoriicerikid=0" );
           while($dizimesaj3 = mysqli_fetch_array($sorgumesaj3)) { ?>
           
           
       <tr>	
       <td>
         <a href="?a=mesajislem&islem=Sil&id=<?= $dizimesaj3["mesajid"] ?>"><image src="images/icons/copkutusu.png"  width='25' height='25'></a>
        </td>
       <td><?= $dizimesaj3["kişiad"] ?>&nbsp;<?= $dizimesaj3["kişisoyad"] ?></td>
       <td><?= $dizimesaj3["mesaj"] ?></td>
       <td>İletişim Mesajı</td>
       <td><?= $dizimesaj3["yorumtarih"] ?></td>
       <td><?= $dizimesaj3["onaydurum"] ?></td>
       </tr>
       <?php } ?>
    
  </tbody>
</table>
</div>