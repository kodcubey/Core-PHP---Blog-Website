
<main>
    <div class="main">
        
        <div class="clear"></div>

        <div class="clear"></div>
        <div id="iletisim-sayfasi">
            <div class="box2">
                <div class="container2">
                    <h3></h3>
                    <div class="iletisim-box1" ">
                        <p><br>
                        Her Hakkı Saklıdır Bu sitede yayınlanan yazılar orjinal içeriktir. 
                        Yazarın izni olmaksızın alıntı yapılamaz, kopyalanamaz.
                         Kaynak göstermek kaydıyla (Yazının adı, yazar adı ve link) kısmen alıntı yapılabilir. 
                        </p>
                    </div>
                    <div class="iletisim-box2" style="margin-bottom: 10px">
                        <p>
                            <span style="font-weight: 600">Jon Doye Blog Sitesi</span>
                            <br><br>
                            <span>Yetkili Kişi: </span>Jon Doye<br><br>
                            <span>E-Posta:</span> jondoye@gmail.com
                        </p>
                    </div>
                    </div>
                <div class="box3">
                    <form action="" method="POST">
                        <label for="ad-soyad">Ad<span>* </span></label><br>
                        <input type="text" rows="10" name="kişiad" >

                        <label for="e-posta">Soyad<span> *</span></label><br>
                        <input type="text" name="kişisoyad" >
                        
                        <label for="e-posta">E-mail<span> *</span></label><br>
                        <input type="text" name="onaydurum" >
                        <br>
                        <label for="message">Mesaj<span> *</span></label>
                        <textarea name="mesaj" cols="40" rows="5" placeholder="Mesajınızı Yazınız" ></textarea>
                        <br>
                        <input type="submit" value="Mesaj Gönder" name="btnmsjgonder" >
                        <br>
                    </form>

                    <?php  
                    
                        
                    
                    ?>
                    
                    <?php
                    if(isset($_POST["btnmsjgonder"]))
                    {
                    if(isset($_POST['kişiad']) && isset($_POST['kişisoyad']) && isset($_POST['mesaj']) && isset($_POST['onaydurum'])){

                        if(empty($_POST['kişiad']) && isset($_POST['kişisoyad']) && isset($_POST['mesaj']) && isset($_POST['onaydurum'])){

                             echo '<div class="alert alert-danger" role="alert">
                            Bütün alanlar dolu olmalıdır!
                        </div>';
                        } else{
                            $kişiad=$_POST["kişiad"];
                            $kişisoyad=$_POST["kişisoyad"];
                            $mesaj=$_POST["mesaj"];
                            $onaydurum=$_POST["onaydurum"];

                        $sorguekle= ("insert into mesajlar (kişiad,kişisoyad,mesaj,yorumtarih,onaydurum) 
                                            values ('$kişiad','$kişisoyad','$mesaj',SYSDATE(),'$onaydurum')");

                            if(mysqli_query($baglanti,$sorguekle)) 
                            {
                                echo '<div class="alert alert-success" role="alert">
                                        Mesaj Gönderiliyor Lütfen Bekleyiniz...
                                        <meta http-equiv="refresh" content="2;">
                                    </div>';
                            }
                            else
                            {
                                echo '<div class="alert alert-danger" role="alert">
                                        Mesaj Gönderilirken Hata Oluştu
                                    </div>';
                            }
                        }

                    }
                    }
                    ?>


                </div>

            </div>
        </div>
        <clear class="div"></clear>
</div>
</main>
<div class="clear"></div>


