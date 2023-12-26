-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 26 Ara 2023, 22:49:50
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `turkuaze_main`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitimler`
--

CREATE TABLE `egitimler` (
  `id` int(11) NOT NULL,
  `egitimAdi` varchar(50) NOT NULL,
  `aciklama` text NOT NULL,
  `sure` int(11) NOT NULL,
  `katilimci` varchar(25) NOT NULL,
  `kontenjan` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `gorsel` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `egitimler`
--

INSERT INTO `egitimler` (`id`, `egitimAdi`, `aciklama`, `sure`, `katilimci`, `kontenjan`, `kategori`, `gorsel`) VALUES
(1, 'Genel İngilizce', '<p>G&uuml;nl&uuml;k hayatınızda ya da iş hayatınızda gerek yurt i&ccedil;inde gerek yurt dışında İngilizceye ihtiya&ccedil; duyan &ouml;ğrencilerimize &ouml;zel hazırladığımız Genel İngilizce Eğitim Programlarımız: her seviyeye uygun şekilde d&uuml;zenlenmiş (A1 &ndash; A2 &ndash; B1 &ndash; B2 &ndash; C1 &ndash; C2), t&uuml;m beceri alanlarını i&ccedil;eren kapsayıcı i&ccedil;eriği ile (Dinleme &ndash; Konuşma &ndash; Okuma &ndash; Yazma) dili ezberletmektense dili edindirme ilkesinden hareketle sadece kuram ve bilgi bazında değil aynı zamanda uygulamayı da temel alan bir yaklaşıma sahiptir.<br />\r\nBu ama&ccedil;la da verilen eğitimlerimizde eğitim modeline g&ouml;re &ouml;ğrenci değil, &ouml;ğrenciye g&ouml;re eğitim modellerinin &ccedil;ıkarıldığı &ouml;ğrenci merkezli bir yaklaşımla &ouml;ğrencilerimizi derslerimizde etkin, katılımcı ve &uuml;retken olmaya y&ouml;nlendirmekteyiz.</p>\r\n\r\n<p>Eğitim i&ccedil;eriğimiz şu şekildedir:</p>\r\n\r\n<ul>\r\n	<li>Grammar (Dil Bilgisi)</li>\r\n	<li>Writing Skill (Yazma Yetisi)</li>\r\n	<li>Reading Comprehension Skill (Okuduğunu anlama Yetisi)</li>\r\n	<li>Speaking Skill (Konuşma Yetisi)</li>\r\n	<li>Listening Skill (Dinleme Yetisi)</li>\r\n	<li>Pronunciation Skill (Seslendirme Yetisi)</li>\r\n	<li>Vocabulary (Kelime hazinesi)Lisans &ndash; Y&uuml;ksek Lisans &ndash; Doktora eğitimlerinin tamamını İngiliz Dili Eğitimi anabilim dalında yapmış olan akademi k&ouml;kenli eğitimcilerimiz tarafından &ccedil;eyrek aşırı aşkın s&uuml;redir kullanılagelmekte olan Turkuaz Dil Eğitime &ouml;zg&uuml; kaynaklarımızın yanı sıra Oxford University Press tarafından hazırlanmış kaynaklar ile &ouml;ğrencilerimiz gerek y&uuml;z y&uuml;ze gerek sanal ortamlarda kurs i&ccedil;i ve dışı etkinliklerle yoğun, eğlenceli ve edindirici bir eğitim almaktadır.<br />\r\n	<br />\r\n	<strong>GRUPLARIMIZ VE EĞİTİM S&Uuml;RELERİ</strong><br />\r\n	Genel İngilizce Eğitim Programlarımız ve s&uuml;releri şu şekildedir:<br />\r\n	&nbsp;</li>\r\n	<li>Beginner &amp; Elementary (Temel ve İlk Seviye)</li>\r\n	<li>Pre-Intermediate (Orta-alt Seviye)</li>\r\n	<li>Intermediate (Orta Seviye)</li>\r\n	<li>Upper-intermediate (Orta-ileri Seviye)</li>\r\n	<li>Advanced (İleri Seviye)T&uuml;m gruplarımızda derslerimizin dağılımı şu şekildedir:</li>\r\n	<li>8 saat (Main Course / Ana Ders Kitabı &ndash; T&uuml;m becerilerin bir arada bulunduğu dersler)</li>\r\n	<li>4 saat (Speaking Club / Konuşma Kul&uuml;b&uuml; &ndash; Sadece etkin konuşma yapılan dersler)<br />\r\n	Haftada 12 saat olarak verilecek olan derslerimiz 10 hafta s&uuml;rmekte ve de toplamda 120 saatlik bir eğitime denk gelmektedir.<strong>Derslere devam zorunluluğu:</strong>&nbsp;Derslere devamsızlık hakkı toplam ders saatinin %10&rsquo;una denk gelen 12 saattir. Zorunlu durumlar dışında devamsızlığın aşıldığı durumlarda kur bitirme sınavından başarısız olan &ouml;ğrencilerimiz kurs bedelini tekrar &ouml;deyerek kur tekrarı yapmak zorunda kalırlar. Devamsızlık yapmayıp kur bitirme sınavında başarısız olan &ouml;ğrencilerimiz herhangi bir &uuml;cret &ouml;demeksizin aynı kuru &uuml;cretsiz alabilir.Sınavlar: Eğitimlerimiz s&uuml;resince uygulanan sınavlar şu şekildedir:</li>\r\n	<li>&Uuml;nite sonlarında ara sınavlar (8-12 x Quiz)</li>\r\n	<li>D&ouml;nem ortası sınavı (1 x Mid-term Exam)</li>\r\n	<li>D&ouml;nem sonu kur sınavı (1 x Final Exam)<br />\r\n	T&uuml;m sınav t&uuml;rlerinde d&ouml;rt temel becerinin d&ouml;rd&uuml; de (Dinleme &ndash; Konuşma &ndash; Okuma &ndash; Yazma) sınanmaktadır. Ara sınavlar kur ge&ccedil;meye herhangi bir etkisi yoktur. Kur ge&ccedil;mede temel alından d&ouml;nem ortası sınavı ve d&ouml;nem sonu sınavlarının not ağırlığı ise %40 &ndash; %60&rsquo;tır. Ge&ccedil;me aralığı alt sınırı ise genel toplamın %60&rsquo;dır.<br />\r\n	<br />\r\n	<strong>Yazma Yetisi (Writing Skill):</strong>&nbsp;&Uuml;retken becerilerin temelinde yatan ve de kişinin dil bilgisi, kelime hazinesi, yazım ve imla kurallarının tamamının etkin bir şekilde kullandıran yazma yetisi, eğitmenlerimizce kademeli bir şekilde her bir &ouml;ğrenciye ayrı d&uuml;zenlenmiş etkin bir takip sistemi ile geliştirilmektedir.<br />\r\n	Konuşma Yetisi (Speaking Skill): &Ouml;ğrenme ve Edinme arasındaki akademik farkın ayrımında olan eğitmenlerimizce verilmekte olan konuşma eğitimimizde &ouml;ğrencilerimizin dilbilgisi, kelime se&ccedil;imi ya da sahne korkusu gibi olumsuz etmenlerden uzaklaştırılarak rahat ve kaygıdan uzak bir ortamda diledikleri gibi konuşabilecekleri bir ortam sağlanmaktadır. &Ouml;ğrenilmiş bilgiyi kullanmaya y&ouml;nlendiren gerek sınıf i&ccedil;i gerek de sınıf dışı edimsel etkinlikler ile de &ouml;ğrencilerimiz gerekli yeterliliklere ulaşabilmektedir.<br />\r\n	<br />\r\n	<strong>Okuduğunu Anlama Yetisi (Reading Comprehension Skill):</strong>&nbsp;Eğitimlerimizin ilk g&uuml;n&uuml;nden itibaren verilen karşılaştırmalı dil eğitimi sayesinde &ouml;ğrencilerimiz edindikleri gerek TR-İNG gerek de İNG-TR &ccedil;eviri yetileri ile d&uuml;zeylerine uygun her t&uuml;r kitabı sadece anlama ile kalmaz aynı zamanda bilin&ccedil; atlarına yerleşmiş olan &ouml;ge dizimsel farkındalıkları ile metin i&ccedil;lerindeki bilgileri ve kelimeleri de kalıcı hale getirirler. Ezberdense sebep-sonuca dayalı aldıkları edinime dayalı dil eğitimleri sayesinde de okuma yetileri s&uuml;reklilik arz eden bir gelişim ile ilerler.<br />\r\n	<br />\r\n	<strong>Dinleme ve Seslendirme Yetileri (Listening and Pronunciation Skills):</strong>&nbsp;Gerek sınıf i&ccedil;i y&uuml;z y&uuml;ze gerek de sınıf dışı uzaktan erişim vasıtası ile yapılan yazılım temelli alıştırmalar ile &ouml;ğrencilerimizin iş ve eğitim hayatlarında karşılarına &ccedil;ıkabilecek farklı aksanları da g&ouml;zeterek kaynak kitapları ile konulara g&ouml;re harmanlanmış şekilde dinleme ve seslendirme yetileri geliştirilir.<br />\r\n	<br />\r\n	<strong>Yurt Dışında Dil Eğitimi:</strong>&nbsp;&Ouml;ğrencilerimizden dileyenler eğitimleri esnasında ya da &ouml;ncesinde almış oldukları eğitimi ilerletmek, daha fazla yerinde uygulama yapmak i&ccedil;in Turkuaz Yurt Dışı Eğitim B&ouml;l&uuml;m&uuml;m&uuml;z ile iletişime ge&ccedil;ip d&uuml;nya &ccedil;apında resmi birimlerce nitelik onayı almış y&uuml;zden fazla okulda dil eğitimi alabilir. Kurumumuz tarafından verilecek olan danışmanlık hizmeti BEDELSİZ olup &ouml;ğrencimizin yurtdışındaki eğitim s&uuml;recinin en başından &uuml;lkemize d&ouml;nene kadarki en son ana kadar ge&ccedil;en s&uuml;reyi kapsamaktadır.<br />\r\n	<br />\r\n	Ayrıca kurumumuzca verilen Orta Seviye ve sonrasını i&ccedil;eren seviye eğitimleri tamamlayan &ouml;ğrencilerimiz yurt i&ccedil;i (YDS / Y&Ouml;KDİL / TIPDİL / YDT) ve yurt dışı (TOEFL / IELTS / GMAT / CAT / SAT) dil yeterlilik sınavlarına y&ouml;nelik eğitimlerimize diledikleri zaman katılabilecekleri alt yapıya ulaşmış olmaktadırlar.</li>\r\n</ul>\r\n', 120, 'Herkes', 45, 'Dil Eğitimi', '../img/genel-ingilizce-1920x540.webp');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `id` int(11) NOT NULL,
  `katadi` varchar(50) NOT NULL,
  `katturu` varchar(50) NOT NULL,
  `ustkategori` varchar(50) NOT NULL,
  `aciklama` text NOT NULL,
  `gorsel` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`id`, `katadi`, `katturu`, `ustkategori`, `aciklama`, `gorsel`) VALUES
(1, 'İngilizce', 'Alt Kategori', 'Kurslar', 'İngilizce Kursları', '../img/turkuaz-egitim-logo-116x116.png'),
(3, 'Kurslar', 'Üst Kategori', '-', 'Turkuaz eğitim kurumları olarak öğrencilerimize sağladığımı kurslar', '../img/turkuaz-egitim-logo-116x116.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `adi` varchar(50) NOT NULL,
  `kadi` varchar(50) NOT NULL,
  `sifre` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`id`, `adi`, `kadi`, `sifre`) VALUES
(1, 'Turkuaz Eğitim', 'yoneticiAdmin', 'turkuazadmin2023**'),
(2, 'Kaan Deneme', 'kaan', '123456');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `egitimler`
--
ALTER TABLE `egitimler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `egitimler`
--
ALTER TABLE `egitimler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
