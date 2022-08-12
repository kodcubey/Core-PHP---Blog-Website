<?php ob_start() ?>
<?php

//$altkategoriid =$_GET["page"];
$altkategoriicerikid =$_GET["id"];
	    $sorguicerik = mysqli_query($baglanti,"select * from altkategoriicerik where altkategoriicerikid =$altkategoriicerikid");
			while($diziicerik = mysqli_fetch_array($sorguicerik)) { ?>

          
          <div class="detail-container">
            <div class="resim">
              <img src="<?= $diziicerik["altkategoriicerikresim"] ?>" alt="resim">
            </div>
            <div class="title"><?= $diziicerik["altkategoriicerikbaslik"] ?></div>
            <div class="pragrapy-body"><?= $diziicerik["altkategoriicerikyazi"] ?></div>
          <div class="date">
          Yazıldığı Tarih :  <?= $diziicerik["yazitarih"] ?>
          </div>

          </div>
          
<?php } ?>


<div class="yorum-title"><h1>Yorumlar</h1></div>
<div class="yorumcontainer">
    <div class="yorumiskelet">
    <hr width="100%" color="grey" size="1">
<?php

//$altkategoriid =$_GET["page"];
$altkategoriicerikid =$_GET["id"];
	    $sorguicerik2 = mysqli_query($baglanti,"select * from mesajlar where altkategoriicerikid =$altkategoriicerikid and onaydurum='Onaylandı'");
			while($diziicerik2 = mysqli_fetch_array($sorguicerik2)) { ?>

            

            
                      <div class= "yorum">
                          <b>Yorum Tarihi : <?= $diziicerik2["yorumtarih"] ?></b>
                          <img src="images/icons/person1.png" alt="aslşfksşalf">
                        <div class="yorumad">
                          <h4><?= $diziicerik2["kişiad"] ?>&nbsp;<?= $diziicerik2["kişisoyad"] ?></h4>
                        </div>
                        <div class = "clear"></div>
                        <div class="yorumicerik">
                          <p>
                          <?= $diziicerik2["mesaj"] ?>             
                          </p>
                        </div>
                      </div>
                      <hr width="100%" color="grey" size="1">
                  
          
          
<?php } ?>
</div>
</div>

<div class="yorumform">
<form action="" method="POST">
  
<div style = "text-align: center;">
<img src="images/icons/message.png" alt="asşfas">
<h3>Düşüncelerinizi İletin</h3></div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Ad</label><br>
    <input type="text" name="kişiad" id="shr1" placeholder="Adınızı Giriniz">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Soyad</label><br>
    <input type="text" name="kişisoyad" id="shr1" placeholder="Soyadınızı Giriniz">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Mesajınız</label> <br>
    <textarea  id="shr3" name="mesaj" placeholder="Mesajınızı Yazınız"></textarea><br>
  </div>
  
  <div class="buton-sitil">
    <button class="btn btn-outline-success my-2 my-sm-0" id = "b2" name="btnmesajekle" type="submit">Gönder</button>
  </div>
  <div class = "clear"></div>
  
</form>
</div>




<?php
   
if(isset($_POST["btnmesajekle"]))
{
    $page=$_GET["page"];
    $altkategoriicerikid =$_GET["id"]; 
    $kişiad=$_POST["kişiad"];
    $kişisoyad=$_POST["kişisoyad"];
    $mesaj=$_POST["mesaj"];
    
    $sorguekle= ("insert into mesajlar (kişiad,kişisoyad,mesaj,altkategoriicerikid,yorumtarih,onaydurum) 
                        values ('$kişiad','$kişisoyad','$mesaj','$altkategoriicerikid',SYSDATE(),'Onaylanmadı')");

        if(mysqli_query($baglanti,$sorguekle)) 
        {
            echo '<div class="alert alert-success" role="alert">
                        Mesajınız Admin Tarafından Kontrol Edilip Onaylanacaktır Lütfen Bekleyiniz.
                        <meta http-equiv="refresh" content="4;">
                </div>';
        }
        
        else
        {
            echo '<div class="alert alert-danger" role="alert">
                            Mesajınız İletilirken Hata Oluştu Lütfen Sayfayı Yenileyip Tekrar Deneyiniz.
                </div>';
        }
}
          
?>

 







     
