<?php
    $altkategoriicerikid =$_GET["page"];
      
	    $sorguicerik = mysqli_query($baglanti,"select ki.altkategoriicerikid,ki.altkategoriicerikresim,ki.altkategoriicerikbaslik,ki.altkategoriicerikyazi,ki.altkategoriid,k.KategoriId from altkategoriicerik ki JOIN kategori k on ki.altkategoriid=k.KategoriId where altkategoriid=$altkategoriicerikid");
			while($diziicerik = mysqli_fetch_array($sorguicerik)) { ?>

          <div class="media position-relative" id="sayfaiciayar">
          <div class="box-img">
            <img src="<?= $diziicerik["altkategoriicerikresim"] ?>" class="mr-3" alt="" height="149px">
          </div>
            
            <div class="media-body">
              <h5 class="mt-0"><?= $diziicerik["altkategoriicerikbaslik"] ?></h5>
              <p><div class="yazisinir"><?= $diziicerik["altkategoriicerikyazi"] ?></div></p>
              <a href="?s=fulldetaysayfasi&page=<?= $diziicerik["KategoriId"] ?>&id=<?= $diziicerik["altkategoriicerikid"] ?>"  style="color:grey; float:right;" >İçeriğe Gitmek İçin Tıklayın</a>
            </div>
          </div>
<?php } ?>










     
