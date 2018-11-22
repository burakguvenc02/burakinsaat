-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 02 Kas 2018, 22:47:54
-- Sunucu sürümü: 10.1.35-MariaDB
-- PHP Sürümü: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `insaats`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_title` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_description` varchar(150) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_keywords` varchar(150) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_author` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `üst_logo` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_url` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_mesai` varchar(150) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_telefon` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_adres` varchar(200) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_gsm` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_il` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_ilce` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_facebook` varchar(150) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_twitter` varchar(150) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_gmail` varchar(150) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_recapctha` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_goooglemap` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_analytic` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_google` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_smtphost` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_smtpuser` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_smtppassword` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `alt_logo` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_smtpport` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_footer` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ayar_mail` varchar(150) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`ayar_id`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_author`, `üst_logo`, `ayar_url`, `ayar_mesai`, `ayar_telefon`, `ayar_adres`, `ayar_gsm`, `ayar_il`, `ayar_ilce`, `ayar_facebook`, `ayar_twitter`, `ayar_gmail`, `ayar_recapctha`, `ayar_goooglemap`, `ayar_analytic`, `ayar_google`, `ayar_smtphost`, `ayar_smtpuser`, `ayar_smtppassword`, `alt_logo`, `ayar_smtpport`, `ayar_footer`, `ayar_mail`) VALUES
(0, 'BuYAZILIM İNŞAAT SCRİPTİ', 'BuYAZILIM İNŞAAT SCRİPTİ DENEMESİ', 'PHP İNŞAAT BUYAZILIM ', 'Burak Guvenc', 'resimg/8997-1_Primary_logo_on_transparent_192x71.png', 'http://localhost/insaat/', 'Hafta İçi Hergün  : 07:00 - 19:00  Hafta Sonu: -', '+905314307659', 'Adıyaman Besni Atmalı Köyü', '0531 823 44 30', 'Adıyaman ', 'Besni', 'http://www.facebook.com', 'https://www.twitter.com', 'https://www.gmail.com', 'DENEME', 'DENEME', 'DENEME', 'DENEME', 'DENEME', 'DENEME', 'DENEME', 'resimg/8056-5_White_logo_on_black_192x71.png', '2222', 'Copyright ©Buyazılım  tarafından kodlanmıştır | Design by BURAK GUVENC ', 'burakbayapex@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberler`
--

CREATE TABLE `haberler` (
  `id` int(11) NOT NULL,
  `haber_ad` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `haber_zaman` datetime NOT NULL,
  `haber_resim` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `haber_detay` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `haber_keyword` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `haber_sira` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `haber_durum` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `haberler`
--

INSERT INTO `haberler` (`id`, `haber_ad`, `haber_zaman`, `haber_resim`, `haber_detay`, `haber_keyword`, `haber_sira`, `haber_durum`) VALUES
(3, 'Şirketimiz Bunları Şunları Yaptı', '2018-10-24 20:27:00', 'haberresim/1073-architecture_competition_02_by_sayeh_roshan-d3fgy7o.jpg', '<p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>\r\n', '', '3', '1'),
(4, 'Şirketimiz Üstün Başarılara İmza Atıyor', '2018-10-24 20:34:00', 'haberresim/5453-71796h3405t27.jpg', '<p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>\r\n\r\n<p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>\r\n\r\n<p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>\r\n', 'burak', '2', '1'),
(5, 'Şirketimiz Bunları Şunları Yaptı', '2018-10-24 21:14:00', 'haberresim/8228-x1080-j83.jpg', '<p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>\r\n\r\n<p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>\r\n\r\n<p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>\r\n', '', '1', '1'),
(6, 'Şirketimizde Olup Bitenler', '2018-10-24 21:20:00', 'haberresim/4987-x1080-c88.jpg', '<p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>\r\n\r\n<p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>\r\n\r\n<p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>\r\n', '', '4', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkımızda`
--

CREATE TABLE `hakkımızda` (
  `hakkımızda_id` int(11) NOT NULL,
  `hakkımızda_baslik` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `hakkımızda_icerik` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `hakkımızda_video` varchar(450) COLLATE utf8mb4_turkish_ci NOT NULL,
  `hakkımızda_resim` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `hakkımızda_vizyon` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `hakkımızda_misyon` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `hakkımızda`
--

INSERT INTO `hakkımızda` (`hakkımızda_id`, `hakkımızda_baslik`, `hakkımızda_icerik`, `hakkımızda_video`, `hakkımızda_resim`, `hakkımızda_vizyon`, `hakkımızda_misyon`) VALUES
(1, 'Hakkımızda', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id nulla vitae leo sodales dictum eget a dolor. Aliquam varius purus non dui maximus tempor. Etiam fermentum turpis orci, et aliquam augue venenatis a. Vestibulum vulputate efficitur velit, ac commodo mi vestibulum id. Fusce eu metus lorem. Morbi porta eros a purus finibus aliquam. Fusce cursus arcu quis leo aliquam condimentum. Vivamus id arcu id dolor laoreet suscipit eu sit amet lacus. Integer velit turpis, venenatis facilisis eleifend quis, sodales efficitur mi. Ut non dui ac metus mattis consectetur. Nullam vel tortor id nulla congue bibendum a a neque. Quisque eget ultricies lorem, in tempor elit. Nullam nec mi eu ante semper vehicula. Fusce in feugiat ex, ac venenatis nisi.</p>\r\n\r\n<p><img alt=\"\" src=\"https://i1.wp.com/www.kerimusta.com/wp-content/uploads/2017/01/at-resimleri_184984.jpg\" style=\"height:75px; width:120px\" />Donec sed posuere orci. Phasellus vulputate dolor malesuada enim tempor bibendum. Mauris ultrices eros at arcu vulputate dictum. Suspendisse egestas nibh vitae mattis feugiat. Curabitur iaculis malesuada rutrum. Praesent mi erat, congue vel auctor et, auctor vel dui. Mauris auctor maximus justo, vel egestas magna lobortis elementum. Nam non ultrices lacus. Proin ac tincidunt neque, ut efficitur purus. Sed mattis id ante sit amet viverra. In sit amet porta felis, ut varius urna. Donec sed mollis sapien, at vestibulum risus.</p>\r\n\r\n<p>Donec lorem velit, semper ut metus vel, sollicitudin pellentesque turpis. Duis blandit, odio nec sodales euismod, ex neque congue nisl, sit amet commodo libero tortor ac ligula. Ut aliquet lorem sit amet consectetur rhoncus. Morbi quis consequat sapien. Praesent nec ligula sit amet massa suscipit placerat. Donec mollis tempor risus eget blandit. Suspendisse porta bibendum ullamcorper. Cras nec elit nec lectus suscipit molestie.</p>\r\n\r\n<p>Morbi pulvinar massa id orci porta, ut lobortis metus condimentum. Morbi et tincidunt ligula. Suspendisse at vehicula diam, vitae luctus dui. Duis a hendrerit mauris. Proin vel tellus quis mi maximus faucibus vehicula ut metus. Nulla condimentum sollicitudin dui, quis tincidunt urna scelerisque et. Integer consequat, leo a vulputate aliquet, mauris ante consequat quam, sed condimentum metus turpis vel risus. Sed finibus sem id rhoncus lobortis. Cras arcu tellus, mollis fermentum varius sit amet, hendrerit fringilla justo. Vestibulum bibendum pellentesque lacus vitae porta.</p>\r\n\r\n<p>Vivamus semper ante ut malesuada tincidunt. Vivamus nec fringilla ligula. Suspendisse porttitor tempor tortor ut porta. Maecenas odio ante, varius fermentum feugiat quis, vestibulum sed nisi. Proin ac neque a dolor sollicitudin porta. Donec lorem dui, ultricies quis ullamcorper a, placerat id diam. Nullam sed aliquet erat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam tempus elit in pellentesque iaculis. Cras dignissim cursus nulla, in egestas augue consequat sit amet.</p>\r\n', '5lkyWK6iR40', '', 'Yinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda birçok masaüstü yayıncılık paketi ve web sayfa düzenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında \'lorem ipsum\' anahtar sözcükleri ile arama yapıldığında henüz tasarım aşamasında olan çok sayıda site listelenir. Yıllar içinde, bazen kazara, bazen bilinçli olarak (örneğin mizah katılarak), çeşitli sürümleri geliştirilmiştir.', 'Yinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda birçok masaüstü yayıncılık paketi ve web sayfa düzenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında \'lorem ipsum\' anahtar sözcükleri ile arama yapıldığında henüz tasarım aşamasında olan çok sayıda site listelenir. Yıllar içinde, bazen kazara, bazen bilinçli olarak (örneğin mizah katılarak), çeşitli sürümleri geliştirilmiştir.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kadro`
--

CREATE TABLE `kadro` (
  `kadro_id` int(11) NOT NULL,
  `kadro_resim` varchar(150) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kadro_ad` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kadro_detay` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `kadro_adres` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kadro_yetki` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kadro`
--

INSERT INTO `kadro` (`kadro_id`, `kadro_resim`, `kadro_ad`, `kadro_detay`, `kadro_adres`, `kadro_yetki`) VALUES
(5, 'kadroresim/4305-burak.jpg', 'Burak Guvenc', 'Yinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda birçok masaüstü yayıncılık paketi ve web sayfa düzenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında \'lorem ipsum\' anahtar sözcükleri ile arama yapıldığında henüz tasarım aşamasında olan çok sayıda site listelenir. Yıllar içinde, bazen kazara, bazen bilinçli olarak (örneğin mizah katılarak), çeşitli sürümleri geliştirilmiştir.\r\n\r\n', 'Adıyaman Besni Atmalı Köyü', '1'),
(6, 'kadroresim/4527-img.jpg', 'Hasan Papuc', 'Yinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda birçok masaüstü yayıncılık paketi ve web sayfa düzenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında \'lorem ipsum\' anahtar sözcükleri ile arama yapıldığında henüz tasarım aşamasında olan çok sayıda site listelenir. Yıllar içinde, bazen kazara, bazen bilinçli olarak (örneğin mizah katılarak), çeşitli sürümleri geliştirilmiştir.\r\n\r\n', 'İstanbul', '3'),
(7, 'kadroresim/2399-page1-img1.jpg', 'Bayram Güvenc', 'Yinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda birçok masaüstü yayıncılık paketi ve web sayfa düzenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında \'lorem ipsum\' anahtar sözcükleri ile arama yapıldığında henüz tasarım aşamasında olan çok sayıda site listelenir. Yıllar içinde, bazen kazara, bazen bilinçli olarak (örneğin mizah katılarak), çeşitli sürümleri geliştirilmiştir.\r\n\r\n', 'Adıyaman Besni Atmalı Köyü', '2');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_zaman` datetime NOT NULL,
  `kullanici_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_password` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_zaman`, `kullanici_ad`, `kullanici_password`) VALUES
(1, '0000-00-00 00:00:00', 'burak', 'fe01ce2a7fbac8fafaed7c982a04e229');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menuler`
--

CREATE TABLE `menuler` (
  `menu_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `menu_ust` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `menu_icon` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `menu_ad` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `menu_detay` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `menu_url` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `menu_kategori` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `menu_sira` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `menu_durum` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `proje_sira` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `proje_durum` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `menuler`
--

INSERT INTO `menuler` (`menu_id`, `kategori_id`, `menu_ust`, `menu_icon`, `menu_ad`, `menu_detay`, `menu_url`, `menu_kategori`, `menu_sira`, `menu_durum`, `proje_sira`, `proje_durum`) VALUES
(8, 0, '7', '', 'Adıyaman Haberleri', '<p>dsadas</p>\r\n', '', '', '1', '1', '', ''),
(9, 0, '7', '', 'Adıyaman Haberleri', '<p>dsadas</p>\r\n', '', '', '1', '1', '', ''),
(10, 0, '', '', 'Anasayfa', '', 'anasayfa', '', '1', '1', '', ''),
(12, 0, '', '', 'Anasayfa', '', 'index.php', '', '1', '1', '', ''),
(13, 0, '13', '', 'Haberler', '', 'haberler.php', '', '2', '1', '', ''),
(14, 0, '', '', 'Hakkımızda', '', 'hakkımızda', '', '3', '1', '', ''),
(20, 0, '', '', 'Anasayfa', '', 'anasayfa', '', '1', '1', '', ''),
(21, 0, '', '', 'Anasayfa', '', 'anasayfa', '', '1', '1', '', ''),
(22, 0, '22', '', 'Anasayfa', '<p>dasda</p>\r\n', 'dasdsad', '', '', '1', '', ''),
(23, 0, '', '', 'Adıyaman Haberleri', '', 'dsadasd', '', '', '1', '', ''),
(24, 0, '22', '', 'Adıyaman Haberleri', '', '', '', '', '1', '', ''),
(25, 0, '13', '', 'Projeler', '<p>sdada</p>\r\n', '', '', '1', '1', '', ''),
(26, 0, '26', '', 'Haberler', '', 'haberler', '', '2', '1', '', ''),
(27, 0, '27', '', 'Haberler', '', 'haberler', '', '2', '1', '', ''),
(29, 0, '29', '', 's', '', 's', '', '', '0', '', ''),
(31, 0, '31', '', 'Adıyaman Haberleri', '<p>dsadas</p>\r\n', '', '', '', '1', '', ''),
(32, 0, '32', '', 'Anasayfa', '', 'anasayfa', '', '1', '1', '', ''),
(36, 0, '34', '', 'Projelerimiz', '', 'projeler', '', '1', '1', '', ''),
(37, 0, '37', '', 'Şirketimiz', '', 'sirketimiz.php', '', '2', '1', '', ''),
(38, 0, '38', '', 'Şirketimiz', '', 'sirketimiz', '', '2', '1', '', ''),
(40, 0, '0', '', 'Şirketimiz', '', 'sirketimiz.php', '', '2', '1', '', ''),
(41, 0, '0', '', 'İletisim', '', 'bize-ulasin', '', '3', '1', '', ''),
(42, 0, '42', '', 'Haberler', '<p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.dsada</p>\r\n', 'haberler', '', '0', '1', '', ''),
(44, 0, '0', '', 'Anasayfa', '', 'anasayfa', '', '0', '1', '', ''),
(45, 0, '0', '', 'Basın', '', 'haberler', '', '3', '1', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projeler`
--

CREATE TABLE `projeler` (
  `proje_id` int(11) NOT NULL,
  `proje_resim` varchar(150) COLLATE utf8mb4_turkish_ci NOT NULL,
  `proje_ad` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `proje_detay` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `proje_zaman` datetime NOT NULL,
  `proje_durum` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `proje_sira` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `projeler`
--

INSERT INTO `projeler` (`proje_id`, `proje_resim`, `proje_ad`, `proje_detay`, `proje_zaman`, `proje_durum`, `proje_sira`) VALUES
(30, 'projeresim/1272-architecture_competition_02_by_sayeh_roshan-d3fgy7o.jpg', 'Proje1', '<p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>\r\n', '2018-10-26 22:14:00', '2', '1'),
(31, 'projeresim/6399-x1080-c88.jpg', 'Proje2', '<p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>\r\n', '2018-10-26 22:14:00', '2', '2'),
(32, 'projeresim/7676-x1080-j83.jpg', 'proje3', '<p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>\r\n', '2018-10-26 22:15:00', '2', '3'),
(33, 'projeresim/6854-71796h3405t27.jpg', 'proje4', '<p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>\r\n', '2018-10-26 22:15:00', '2', '4'),
(34, 'projeresim/8076-71796h3405t27.jpg', 'Proje1', '<p>Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir.</p>\r\n', '2018-10-26 22:16:00', '0', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sirket`
--

CREATE TABLE `sirket` (
  `sirket_id` int(11) NOT NULL,
  `sirket_ad` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `sirket_resim` varchar(150) COLLATE utf8mb4_turkish_ci NOT NULL,
  `sirket_detay` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `yedek` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `slider_ad` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `slider_resimyol` varchar(200) COLLATE utf8mb4_turkish_ci NOT NULL,
  `slider_link` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `slider_sira` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `slider_durum` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`id`, `slider_ad`, `slider_resimyol`, `slider_link`, `slider_sira`, `slider_durum`) VALUES
(12, 'slider2', 'sliderresim/1754-architecture_competition_02_by_sayeh_roshan-d3fgy7o.jpg', 'yok', '2', '1'),
(13, 'slider3', 'sliderresim/4088-x1080-c88.jpg', 'yok', '3', '1'),
(14, 'slider4', 'sliderresim/6333-x1080-HVW.jpg', 'yok', '4', '1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `haberler`
--
ALTER TABLE `haberler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hakkımızda`
--
ALTER TABLE `hakkımızda`
  ADD PRIMARY KEY (`hakkımızda_id`);

--
-- Tablo için indeksler `kadro`
--
ALTER TABLE `kadro`
  ADD PRIMARY KEY (`kadro_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `menuler`
--
ALTER TABLE `menuler`
  ADD PRIMARY KEY (`menu_id`);

--
-- Tablo için indeksler `projeler`
--
ALTER TABLE `projeler`
  ADD PRIMARY KEY (`proje_id`);

--
-- Tablo için indeksler `sirket`
--
ALTER TABLE `sirket`
  ADD PRIMARY KEY (`sirket_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `ayar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `haberler`
--
ALTER TABLE `haberler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `kadro`
--
ALTER TABLE `kadro`
  MODIFY `kadro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `menuler`
--
ALTER TABLE `menuler`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Tablo için AUTO_INCREMENT değeri `projeler`
--
ALTER TABLE `projeler`
  MODIFY `proje_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Tablo için AUTO_INCREMENT değeri `sirket`
--
ALTER TABLE `sirket`
  MODIFY `sirket_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
