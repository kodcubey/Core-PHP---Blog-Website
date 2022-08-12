<div class="card text-center" id = "alt-bolum">
          <div class="card-header">
              
          </div>
            <div class="card-body">
              <h5 class="card-title">Sosyal Medya Hesaplarım</h5>
              <p class="card-text">Bize Ulaşmak İçin</p>
            </div>
            <div class="containerbox">

            <?php
	            $sorgufooter = mysqli_query($baglanti,"select * from footer");
		        	while($dizifooter = mysqli_fetch_array($sorgufooter)) { ?>
                     
              <a href="<?= $dizifooter["sosyalmedyahesaplinki"] ?>" target="_blank"><div class="box1"><img src="<?= $dizifooter["medyaresim"]?>" height="40px" width="40px" alt=""></div></a>&nbsp;&nbsp;
               
            <?php } ?>

            </div>
            <div class="card-footer text-muted">
            <br>
              Her Hakkı Saklıdır Bu sitede yayınlanan yazılar orjinal içeriktir. Yazarın izni olmaksızın alıntı yapılamaz, kopyalanamaz. Kaynak göstermek kaydıyla (Yazının adı, yazar adı ve link) kısmen alıntı yapılabilir. 
            </div>
</div>
        


     

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <br>
  </body>
</html>