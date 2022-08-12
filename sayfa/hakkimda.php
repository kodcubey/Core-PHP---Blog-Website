<?php

//$altkategoriid =$_GET["page"];

	    $sorguicerik = mysqli_query($baglanti,"select * from altkategoriicerik where altkategoriicerikid =13");
			while($diziicerik = mysqli_fetch_array($sorguicerik)) { ?>

          
          <div class="detail-container">
            
            <div class="title"><?= $diziicerik["altkategoriicerikbaslik"] ?></div>
            <div class="pragrapy-body"><?= $diziicerik["altkategoriicerikyazi"] ?></div>
          <div class="date">
          Yazıldığı Tarih :  <?= $diziicerik["yazitarih"] ?>
          </div>

          </div>
          
<?php } ?>