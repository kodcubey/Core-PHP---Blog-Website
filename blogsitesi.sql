-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 Tem 2020, 03:26:24
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blogsitesi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adminkullanici`
--

CREATE TABLE `adminkullanici` (
  `adminid` int(11) NOT NULL,
  `adminEmail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `adminSifre` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `adminAd` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `adminSoyad` varchar(15) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `adminkullanici`
--

INSERT INTO `adminkullanici` (`adminid`, `adminEmail`, `adminSifre`, `adminAd`, `adminSoyad`) VALUES
(1, 'emreceylan569@gmail.com', 'emre.ceylan24', 'Tevfik Emre', 'Ceylan'),
(6, 'mst2416@gmail.com', 'mesut1969', 'Mesut', 'Erden'),
(7, 'smterdn2406@gmail.com', 'sameterden123', 'Samet', 'Erden');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `altkategoriicerik`
--

CREATE TABLE `altkategoriicerik` (
  `altkategoriicerikid` int(11) NOT NULL,
  `altkategoriicerikresim` text COLLATE utf8_turkish_ci NOT NULL,
  `altkategoriicerikbaslik` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `altkategoriicerikyazi` longtext COLLATE utf8_turkish_ci NOT NULL,
  `altkategoriid` int(11) NOT NULL,
  `yazitarih` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `altkategoriicerik`
--

INSERT INTO `altkategoriicerik` (`altkategoriicerikid`, `altkategoriicerikresim`, `altkategoriicerikbaslik`, `altkategoriicerikyazi`, `altkategoriid`, `yazitarih`) VALUES
(12, 'https://images.pexels.com/photos/169573/pexels-photo-169573.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260', 'C++ Dersleri Bölüm-1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae sapien purus. Donec vel justo ultrices, aliquam turpis ac, bibendum metus. Phasellus aliquet, purus ullamcorper porta vestibulum, ligula leo finibus nunc, eu laoreet metus metus non nunc. Suspendisse et vulputate lorem. In rutrum nulla ut ante commodo, ac blandit lacus bibendum. Ut molestie, nunc sed commodo laoreet, orci mi dapibus urna, eu congue arcu tellus bibendum urna. Vestibulum nec nunc pellentesque, elementum tortor eu, vestibulum urna. Sed a pellentesque quam.', 4, '2020-07-12'),
(13, '', 'Mesut Erden', 'Mesut Erden Üniversitesinde Bilgisayar ve Öğretim Teknolojileri Eğitmenliği. Cardinal Stefan Wyszynski University Bilgisayar Bilimi öğrencisiyim. Aynı zamanda Web Programcılığı mezunuyum. Alanımda kisisel bloglar, videolar ve forum siteleri en büyük yardımcım diyebilirim. Blog yazmaya 2016 yılında karar verdim ve siz değerli ziyaretçilerim ile paylasmayı esas alarak yayın hayatıma basladım.\r\n\r\nhakkımda için bir fotoğraf bırakarak devam edeyim.\r\nhakkımda sayfası için bir fotograf bırakarak devam edeyim.\r\n\r\n      Seyehat etmeyi insanlarla tanısmayı,yolculuk yapmayı seviyorum.Sosyal yasantılarını, günlük rutinlerini  sentezlemek, filtreleyip tanımanın verdiği heyecanla gezmek beni epey heyecanlandırıyor. Birçok Avrupa ülkesine seyehat ettim. Fransa, Çek Cumhuriyeti, Macaristan, Avusturya, Ukrayna, Almanya, İsveç haricinde Avrupa’da olmayan Gürcistan. Hatırlamanızı istediğim bir sey var “Türkiye Gerçekten Cennet”…\r\n\r\n     Her türden ve dilden müzik dinlerim.\r\n\r\n     Yaklaşık 7 yıl taekwondo sporu ile ilgilendim. 2012 yılında geçirdiğim sakatlıktan sonra tamamen bitirmek zorunda kaldım. Bu arada futbol oynamasını değil izlemesini tercih edenlerdenim. TV izlemesini sevmem, daha önce hiç bir diziyi 3 bölüm arka arkaya izlemedim ve film izlemeyide sevmiyorum.\r\n\r\n      Öğrenim hayatım boyunca birçok programlama dili ve araçla tanıstım. Kullanırken keyif aldıklarımsa PHP, HTML, CSS, PHOTOSHOP ve WORDPRESS. Türkiye’nin önde gelen e-ticaret siteleri ve web programlama firmalarında Web Master,Yazılımcı ve Grafiker olarak projelere katılma fırsatı buldum.\r\n\r\nTanıdığım programlama dilleri ve araçları: PHP, ASPX, HTML, CSS, JAVA, MYSQL, SQL, VISUAL BASIC, C#,3DsMAX, ADOBE PHOTOSHOP, FREEWORKS, FLASH,DREAMWEAVER.\r\n\r\n      Burada sizlere birlikte yapacaklarımın listesi:\r\n\r\nDijital çağın yeniliklerini takip edeceğiz\r\nHayatımızı kolaylastıracak masaüstü ve mobil programlar keşfedeceğiz.\r\nYazılımsal ve donanımsal ipuçlarına bakacağız.\r\nProgramlama dillerini tanıyacağız.\r\nSeo için teknikler gelistireceğiz\r\nMobil Yazılım hakkında bilgi sahibi olacağız.\r\nSıfırdan baslayıp e-ticaret sitesi hakkında tercihler yapacağız.\r\nWebmaster ve blogger olmak için neler gerekiyor inceleyeceğiz.\r\nSeçilmis kaynaklarla birlikte bizi ilgilendiren doyurucu yazıları paylasacağım bloğuma hosgeldiniz.Haydi birlikte harekete geçelim!\r\n\r\n', 25, '2020-07-13');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `footer`
--

CREATE TABLE `footer` (
  `footerid` int(11) NOT NULL,
  `sosyalmedyahesaplinki` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `medyaresim` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `footer`
--

INSERT INTO `footer` (`footerid`, `sosyalmedyahesaplinki`, `medyaresim`) VALUES
(9, 'https://tr.linkedin.com/', 'https://img.icons8.com/color/48/000000/linkedin.png'),
(10, 'https://gmail.com/', 'https://img.icons8.com/fluent/48/000000/gmail.png'),
(11, 'https://www.youtube.com/', 'https://img.icons8.com/color/48/000000/youtube-squared.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE `kategori` (
  `UstKategoriId` int(11) NOT NULL,
  `KategoriId` int(11) NOT NULL,
  `KategoriAdi` varchar(30) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`UstKategoriId`, `KategoriId`, `KategoriAdi`) VALUES
(0, 1, 'Devreler'),
(0, 2, 'Projelerim'),
(1, 3, 'Elektrik Devreleri'),
(1, 4, 'Güç Devreleri'),
(2, 5, 'Motor Kontrol Projesi'),
(2, 6, 'Arm Mimarisi Projesi'),
(0, 15, 'Yazılım'),
(15, 19, 'E-Ticaret Scripti'),
(-1, 25, 'Hakkımda'),
(-2, 26, 'İletişim');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
  `mesajid` bigint(20) NOT NULL,
  `kişiad` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `kişisoyad` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` text COLLATE utf8_turkish_ci NOT NULL,
  `altkategoriicerikid` int(11) NOT NULL,
  `yorumtarih` datetime NOT NULL,
  `onaydurum` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`mesajid`, `kişiad`, `kişisoyad`, `mesaj`, `altkategoriicerikid`, `yorumtarih`, `onaydurum`) VALUES
(22, 'Emre', 'Ceylan', 'Güzel.', 12, '2020-07-13 01:54:50', 'Onaylandı'),
(26, 'Yağmur', 'Gümüş', 'site tasarımı ve renk uyumu gerçekten harika olmuş', 0, '2020-07-13 03:48:30', 'yagmurgms@gmail.com'),
(27, 'Mesut', 'Erden', 'Teşekkürler.', 12, '2020-07-13 03:55:10', 'Onaylandı'),
(30, '', '', '', 0, '2020-07-13 04:09:18', ''),
(31, '', '', '', 0, '2020-07-13 04:09:21', ''),
(32, '', '', '', 0, '2020-07-13 04:09:24', ''),
(33, '', '', '', 0, '2020-07-13 04:09:27', ''),
(34, '', '', '', 0, '2020-07-13 04:09:30', ''),
(35, '', '', '', 0, '2020-07-13 04:09:33', ''),
(36, '', '', '', 0, '2020-07-13 04:09:36', ''),
(37, '', '', '', 0, '2020-07-13 04:09:38', ''),
(38, '', '', '', 0, '2020-07-13 04:09:41', ''),
(39, '', '', '', 0, '2020-07-13 04:09:44', ''),
(40, '', '', '', 0, '2020-07-13 04:09:47', ''),
(41, '', '', '', 0, '2020-07-13 04:09:50', ''),
(42, '', '', '', 0, '2020-07-13 04:09:53', ''),
(43, '', '', '', 0, '2020-07-13 04:09:56', ''),
(44, '', '', '', 0, '2020-07-13 04:09:59', ''),
(45, '', '', '', 0, '2020-07-13 04:10:01', ''),
(46, '', '', '', 0, '2020-07-13 04:10:04', ''),
(47, '', '', '', 0, '2020-07-13 04:10:07', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `sliderid` int(1) NOT NULL,
  `sliderResimAdi` text COLLATE utf8_turkish_ci NOT NULL,
  `sliderYazıBaslik` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sliderYaziIcerik` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`sliderid`, `sliderResimAdi`, `sliderYazıBaslik`, `sliderYaziIcerik`) VALUES
(15, 'https://images.pexels.com/photos/1448561/pexels-photo-1448561.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260', 'elektronik devreler', 'saföasmfölsamlkfnlkafkamfa');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `adminkullanici`
--
ALTER TABLE `adminkullanici`
  ADD PRIMARY KEY (`adminid`);

--
-- Tablo için indeksler `altkategoriicerik`
--
ALTER TABLE `altkategoriicerik`
  ADD PRIMARY KEY (`altkategoriicerikid`);

--
-- Tablo için indeksler `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`footerid`);

--
-- Tablo için indeksler `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`KategoriId`);

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`mesajid`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`sliderid`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `adminkullanici`
--
ALTER TABLE `adminkullanici`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `altkategoriicerik`
--
ALTER TABLE `altkategoriicerik`
  MODIFY `altkategoriicerikid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `footer`
--
ALTER TABLE `footer`
  MODIFY `footerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `kategori`
--
ALTER TABLE `kategori`
  MODIFY `KategoriId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `mesajid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `sliderid` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
