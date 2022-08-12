
  <!-- İçerik Kısmı  -->

  <!-- Slider Başla  -->

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
<div class="carousel-inner" id="slider">
    <div class="carousel-item active">
      <img src="https://images.pexels.com/photos/163100/circuit-circuit-board-resistor-computer-163100.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="d-block w-100" alt="..."  width="100%"  height="600px" id = "deneme">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>
<?php
	  $sorguslider = mysqli_query($baglanti,"select * from slider");
			while($dizislider = mysqli_fetch_array($sorguslider)) { ?>
         
          <div class="carousel-item" >
            <img class="d-block w-100" src="<?= $dizislider["sliderResimAdi"] ?>"  alt="First slide"  width="100%" height="600px" id = "deneme">
          <div class="carousel-caption d-none d-md-block" id = "sliderfont">
            <h2><?= $dizislider["sliderYazıBaslik"]?></h2>
            <p><?= $dizislider["sliderYaziIcerik"]?></p>
          </div>
        </div>
<?php } ?>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  <!-- Slider Bitiş  -->
  

        <?php 
        
        if(isset($_POST["btnara"]))
        {?>
          <div class="card-container">
          <?php
          $aramaveri = $_POST["ara"];
          $sorguicerik = mysqli_query($baglanti,"select ki.altkategoriicerikid,ki.altkategoriicerikresim,ki.altkategoriicerikbaslik,ki.altkategoriicerikyazi,ki.altkategoriid,k.KategoriId from altkategoriicerik ki JOIN kategori k on ki.altkategoriid=k.KategoriId 
          where ki.altkategoriicerikbaslik LIKE '%$aramaveri%' or ki.altkategoriicerikyazi LIKE '%$aramaveri%' and ki.altkategoriid !=25");
          while($diziicerik = mysqli_fetch_array($sorguicerik)) { ?>
         
             <div id="card" >
              <div class="box" style="width: 18rem;" id=card>
                <img src="<?= $diziicerik["altkategoriicerikresim"] ?>" class="card-img-top" alt="..." height="200px">
                <div class="card-body">
                  <h5 class="card-title"><?= $diziicerik["altkategoriicerikbaslik"] ?></h5>
                  <p class="card-text" ><div class="yazisinir"><?= $diziicerik["altkategoriicerikyazi"] ?></div></p>
                  <center><a href="?s=fulldetaysayfasi&page=<?= $diziicerik["KategoriId"] ?>&id=<?= $diziicerik["altkategoriicerikid"] ?>" class="btn btn-dark" id="button-detay">Detay</a></center>
                </div>
              </div>
            </div>
            <?php } ?>
            </div>

          <?php } else{ ?>

            <div class="card-container">
        <!-- Anasayfa İçerik Kısmı  -->
            <?php
    
          $sorguicerik = mysqli_query($baglanti,"select ki.altkategoriicerikid,ki.altkategoriicerikresim,ki.altkategoriicerikbaslik,ki.altkategoriicerikyazi,ki.altkategoriid,k.KategoriId from altkategoriicerik ki JOIN kategori k on ki.altkategoriid=k.KategoriId where ki.altkategoriid !=25");
          while($diziicerik = mysqli_fetch_array($sorguicerik)) { ?>
        
            <div id="card" >
              <div class="box" style="width: 18rem;" id=card>
                <img src="<?= $diziicerik["altkategoriicerikresim"] ?>" class="card-img-top" alt="..." height="200px">
                <div class="card-body">
                  <h5 class="card-title"><?= $diziicerik["altkategoriicerikbaslik"] ?></h5>
                  <p class="card-text" ><div class="yazisinir"><?= $diziicerik["altkategoriicerikyazi"] ?></div></p>
                  <center><a href="?s=fulldetaysayfasi&page=<?= $diziicerik["KategoriId"] ?>&id=<?= $diziicerik["altkategoriicerikid"] ?>" class="btn btn-dark" id="button-detay">Detay</a></center>
                </div>
              </div>
            </div>
            <?php } ?>
            </div>
        
        
        <div class = "clear"></div>
          
          <?php } ?>


          
       
  <!-- İçerik Kısmı  bitiş-->
