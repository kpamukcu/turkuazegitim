-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 24 Oca 2024, 10:02:45
-- Sunucu sürümü: 8.0.31
-- PHP Sürümü: 8.0.26

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
-- Tablo için tablo yapısı `detayli_bilgi`
--

DROP TABLE IF EXISTS `detayli_bilgi`;
CREATE TABLE IF NOT EXISTS `detayli_bilgi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `adi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `tarih` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `durum` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `aciklama` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `detayli_bilgi`
--

INSERT INTO `detayli_bilgi` (`id`, `adi`, `tel`, `email`, `tarih`, `durum`, `aciklama`) VALUES
(1, 'Kaan Pamukcu', '05555555555', 'kaan@deneme.com', '', '', ''),
(2, 'Kaan Dene', '05555555555', 'kaanpamukcu@gmail.com', '', '', ''),
(3, 'Deneme', '05555555555', 'kaanpamukcu@gmail.com', '', '', ''),
(4, 'Deneme 2', '05555555555', 'kaanpamukcu@gmail.com', '24.01.2024', 'Aranmadı', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitimler`
--

DROP TABLE IF EXISTS `egitimler`;
CREATE TABLE IF NOT EXISTS `egitimler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `egitimAdi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `aciklama` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sure` int NOT NULL,
  `katilimci` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `kontenjan` int NOT NULL,
  `kategori` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `gorsel` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `video` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `egitimler`
--

INSERT INTO `egitimler` (`id`, `egitimAdi`, `aciklama`, `sure`, `katilimci`, `kontenjan`, `kategori`, `gorsel`, `video`) VALUES
(1, 'Genel İngilizce', '<p>G&uuml;nl&uuml;k hayatınızda ya da iş hayatınızda gerek yurt i&ccedil;inde gerek yurt dışında İngilizceye ihtiya&ccedil; duyan &ouml;ğrencilerimize &ouml;zel hazırladığımız Genel İngilizce Eğitim Programlarımız: her seviyeye uygun şekilde d&uuml;zenlenmiş (A1 &ndash; A2 &ndash; B1 &ndash; B2 &ndash; C1 &ndash; C2), t&uuml;m beceri alanlarını i&ccedil;eren kapsayıcı i&ccedil;eriği ile (Dinleme &ndash; Konuşma &ndash; Okuma &ndash; Yazma) dili ezberletmektense dili edindirme ilkesinden hareketle sadece kuram ve bilgi bazında değil aynı zamanda uygulamayı da temel alan bir yaklaşıma sahiptir.<br />\r\nBu ama&ccedil;la da verilen eğitimlerimizde eğitim modeline g&ouml;re &ouml;ğrenci değil, &ouml;ğrenciye g&ouml;re eğitim modellerinin &ccedil;ıkarıldığı &ouml;ğrenci merkezli bir yaklaşımla &ouml;ğrencilerimizi derslerimizde etkin, katılımcı ve &uuml;retken olmaya y&ouml;nlendirmekteyiz.</p>\r\n\r\n<p>Eğitim i&ccedil;eriğimiz şu şekildedir:</p>\r\n\r\n<ul>\r\n	<li>Grammar (Dil Bilgisi)</li>\r\n	<li>Writing Skill (Yazma Yetisi)</li>\r\n	<li>Reading Comprehension Skill (Okuduğunu anlama Yetisi)</li>\r\n	<li>Speaking Skill (Konuşma Yetisi)</li>\r\n	<li>Listening Skill (Dinleme Yetisi)</li>\r\n	<li>Pronunciation Skill (Seslendirme Yetisi)</li>\r\n	<li>Vocabulary (Kelime hazinesi)Lisans &ndash; Y&uuml;ksek Lisans &ndash; Doktora eğitimlerinin tamamını İngiliz Dili Eğitimi anabilim dalında yapmış olan akademi k&ouml;kenli eğitimcilerimiz tarafından &ccedil;eyrek aşırı aşkın s&uuml;redir kullanılagelmekte olan Turkuaz Dil Eğitime &ouml;zg&uuml; kaynaklarımızın yanı sıra Oxford University Press tarafından hazırlanmış kaynaklar ile &ouml;ğrencilerimiz gerek y&uuml;z y&uuml;ze gerek sanal ortamlarda kurs i&ccedil;i ve dışı etkinliklerle yoğun, eğlenceli ve edindirici bir eğitim almaktadır.<br />\r\n	<br />\r\n	<strong>GRUPLARIMIZ VE EĞİTİM S&Uuml;RELERİ</strong><br />\r\n	Genel İngilizce Eğitim Programlarımız ve s&uuml;releri şu şekildedir:<br />\r\n	&nbsp;</li>\r\n	<li>Beginner &amp; Elementary (Temel ve İlk Seviye)</li>\r\n	<li>Pre-Intermediate (Orta-alt Seviye)</li>\r\n	<li>Intermediate (Orta Seviye)</li>\r\n	<li>Upper-intermediate (Orta-ileri Seviye)</li>\r\n	<li>Advanced (İleri Seviye)T&uuml;m gruplarımızda derslerimizin dağılımı şu şekildedir:</li>\r\n	<li>8 saat (Main Course / Ana Ders Kitabı &ndash; T&uuml;m becerilerin bir arada bulunduğu dersler)</li>\r\n	<li>4 saat (Speaking Club / Konuşma Kul&uuml;b&uuml; &ndash; Sadece etkin konuşma yapılan dersler)<br />\r\n	Haftada 12 saat olarak verilecek olan derslerimiz 10 hafta s&uuml;rmekte ve de toplamda 120 saatlik bir eğitime denk gelmektedir.<strong>Derslere devam zorunluluğu:</strong>&nbsp;Derslere devamsızlık hakkı toplam ders saatinin %10&rsquo;una denk gelen 12 saattir. Zorunlu durumlar dışında devamsızlığın aşıldığı durumlarda kur bitirme sınavından başarısız olan &ouml;ğrencilerimiz kurs bedelini tekrar &ouml;deyerek kur tekrarı yapmak zorunda kalırlar. Devamsızlık yapmayıp kur bitirme sınavında başarısız olan &ouml;ğrencilerimiz herhangi bir &uuml;cret &ouml;demeksizin aynı kuru &uuml;cretsiz alabilir.Sınavlar: Eğitimlerimiz s&uuml;resince uygulanan sınavlar şu şekildedir:</li>\r\n	<li>&Uuml;nite sonlarında ara sınavlar (8-12 x Quiz)</li>\r\n	<li>D&ouml;nem ortası sınavı (1 x Mid-term Exam)</li>\r\n	<li>D&ouml;nem sonu kur sınavı (1 x Final Exam)<br />\r\n	T&uuml;m sınav t&uuml;rlerinde d&ouml;rt temel becerinin d&ouml;rd&uuml; de (Dinleme &ndash; Konuşma &ndash; Okuma &ndash; Yazma) sınanmaktadır. Ara sınavlar kur ge&ccedil;meye herhangi bir etkisi yoktur. Kur ge&ccedil;mede temel alından d&ouml;nem ortası sınavı ve d&ouml;nem sonu sınavlarının not ağırlığı ise %40 &ndash; %60&rsquo;tır. Ge&ccedil;me aralığı alt sınırı ise genel toplamın %60&rsquo;dır.<br />\r\n	<br />\r\n	<strong>Yazma Yetisi (Writing Skill):</strong>&nbsp;&Uuml;retken becerilerin temelinde yatan ve de kişinin dil bilgisi, kelime hazinesi, yazım ve imla kurallarının tamamının etkin bir şekilde kullandıran yazma yetisi, eğitmenlerimizce kademeli bir şekilde her bir &ouml;ğrenciye ayrı d&uuml;zenlenmiş etkin bir takip sistemi ile geliştirilmektedir.<br />\r\n	Konuşma Yetisi (Speaking Skill): &Ouml;ğrenme ve Edinme arasındaki akademik farkın ayrımında olan eğitmenlerimizce verilmekte olan konuşma eğitimimizde &ouml;ğrencilerimizin dilbilgisi, kelime se&ccedil;imi ya da sahne korkusu gibi olumsuz etmenlerden uzaklaştırılarak rahat ve kaygıdan uzak bir ortamda diledikleri gibi konuşabilecekleri bir ortam sağlanmaktadır. &Ouml;ğrenilmiş bilgiyi kullanmaya y&ouml;nlendiren gerek sınıf i&ccedil;i gerek de sınıf dışı edimsel etkinlikler ile de &ouml;ğrencilerimiz gerekli yeterliliklere ulaşabilmektedir.<br />\r\n	<br />\r\n	<strong>Okuduğunu Anlama Yetisi (Reading Comprehension Skill):</strong>&nbsp;Eğitimlerimizin ilk g&uuml;n&uuml;nden itibaren verilen karşılaştırmalı dil eğitimi sayesinde &ouml;ğrencilerimiz edindikleri gerek TR-İNG gerek de İNG-TR &ccedil;eviri yetileri ile d&uuml;zeylerine uygun her t&uuml;r kitabı sadece anlama ile kalmaz aynı zamanda bilin&ccedil; atlarına yerleşmiş olan &ouml;ge dizimsel farkındalıkları ile metin i&ccedil;lerindeki bilgileri ve kelimeleri de kalıcı hale getirirler. Ezberdense sebep-sonuca dayalı aldıkları edinime dayalı dil eğitimleri sayesinde de okuma yetileri s&uuml;reklilik arz eden bir gelişim ile ilerler.<br />\r\n	<br />\r\n	<strong>Dinleme ve Seslendirme Yetileri (Listening and Pronunciation Skills):</strong>&nbsp;Gerek sınıf i&ccedil;i y&uuml;z y&uuml;ze gerek de sınıf dışı uzaktan erişim vasıtası ile yapılan yazılım temelli alıştırmalar ile &ouml;ğrencilerimizin iş ve eğitim hayatlarında karşılarına &ccedil;ıkabilecek farklı aksanları da g&ouml;zeterek kaynak kitapları ile konulara g&ouml;re harmanlanmış şekilde dinleme ve seslendirme yetileri geliştirilir.<br />\r\n	<br />\r\n	<strong>Yurt Dışında Dil Eğitimi:</strong>&nbsp;&Ouml;ğrencilerimizden dileyenler eğitimleri esnasında ya da &ouml;ncesinde almış oldukları eğitimi ilerletmek, daha fazla yerinde uygulama yapmak i&ccedil;in Turkuaz Yurt Dışı Eğitim B&ouml;l&uuml;m&uuml;m&uuml;z ile iletişime ge&ccedil;ip d&uuml;nya &ccedil;apında resmi birimlerce nitelik onayı almış y&uuml;zden fazla okulda dil eğitimi alabilir. Kurumumuz tarafından verilecek olan danışmanlık hizmeti BEDELSİZ olup &ouml;ğrencimizin yurtdışındaki eğitim s&uuml;recinin en başından &uuml;lkemize d&ouml;nene kadarki en son ana kadar ge&ccedil;en s&uuml;reyi kapsamaktadır.<br />\r\n	<br />\r\n	Ayrıca kurumumuzca verilen Orta Seviye ve sonrasını i&ccedil;eren seviye eğitimleri tamamlayan &ouml;ğrencilerimiz yurt i&ccedil;i (YDS / Y&Ouml;KDİL / TIPDİL / YDT) ve yurt dışı (TOEFL / IELTS / GMAT / CAT / SAT) dil yeterlilik sınavlarına y&ouml;nelik eğitimlerimize diledikleri zaman katılabilecekleri alt yapıya ulaşmış olmaktadırlar.</li>\r\n</ul>\r\n', 120, 'Herkes', 50, 'Dil Eğitimi', '../img/genel-ingilizce-1920x540.webp', 'https://www.youtube.com/watch?v=hbf9cVKMPP8'),
(2, 'Çocuklar için Dil Eğitimi', '<p>Turkuaz Dil Eğitim olarak, kalıplaşmış dil bilgisi ve kelime ezberine dayalı, kısa s&uuml;rede unutulmaya mahk&ucirc;m olan geleneksel eğitim-&ouml;ğretim metotlarından sıyrılarak; alanında uzman akademisyenlerimiz denetiminde oluşturduğumuz &ldquo;&Ccedil;ocuk Dil&rdquo; programımız ile &ccedil;ocuklarımız; İngilizcenin renkli d&uuml;nyası ile eğlenerek tanışacak, yeni bir dile karşı oluşan &ouml;nyargılarını başararak yıkacak, Hafıza Teknikleri ile dili kolayca &ouml;ğrenen, Zihin Haritaları ile &ouml;ğrendiği bilgileri uzun vadede yapılandıran, Yaratıcı Drama ile bilgiyi ger&ccedil;ek hayatla somutlaştırarak kullanan İngilizceyi seven, anlayan, konuşan, yaşayan, &ouml;zg&uuml;veni y&uuml;ksek, &ldquo;dili ezberlemeyen, edinen bireyler&rdquo; olarak hayata hazırlanacaktır.</p>\r\n\r\n<h4><strong>SERTİFİKASYON</strong></h4>\r\n\r\n<p>Kurumumuz tarafından verilen eğitimler neticesinde yapılacak d&uuml;zey belirleme sınavları ardından M.E.B. tarafından onaylı dil yeterlilik sertifikalarının yanı sıra &ouml;ğrencilerimizin &uuml;lkemizde ve d&uuml;nya &ccedil;apında kabul edilen &ccedil;eşitli dil yeterlilik sınavlardan alacakları sınav sonu&ccedil;ları da &ouml;ğrencilerimize gerek eğitim hayatlarında gerek iş hayatlarında diledikleri hedeflerine ulaşmalarında yardımcı olmaktadır.</p>\r\n\r\n<h4><strong>KAZANIMLAR</strong></h4>\r\n\r\n<ul>\r\n	<li>MEB M&uuml;fredatı ile uyumlu Seviyelendirilmiş Tematik &Ouml;ğretim (Hafıza Teknikleri, Zihin Haritaları ve Yaratıcı + Drama Destekli)</li>\r\n	<li>Haftada 4 saat karşılaştırmalı yoğunlaştırılmış dil eğitimi</li>\r\n	<li>Konulara &ouml;zg&uuml; soru &ccedil;&ouml;z&uuml;mleri</li>\r\n	<li>İleri d&uuml;zey anadil ve yabancı dil hakimiyeti</li>\r\n	<li>Başlangı&ccedil;, Orta ve İleri d&uuml;zey anadil ve yabancı dil hakimiyeti</li>\r\n	<li>Başlangı&ccedil;, Orta ve İleri d&uuml;zey dil yeterlilikleri: Okuma, konuşma, yazma, dinleme</li>\r\n</ul>\r\n', 150, 'Herkes', 10, 'Dil Eğitimi', '../img/cocuklar-icin-dil-egitimi-1920x540.webp', 'https://www.youtube.com/watch?v=hbf9cVKMPP8'),
(4, 'Liseler için İngilizce', '<p>Turkuaz Dil Eğitim olarak Liseler i&ccedil;in Dil Eğitim Programımız ile &uuml;niversite ve iş hayatlarının &ouml;ncesinde &ouml;ğrencilerimizin dil eğitimlerini tamamlıyoruz. 2 yıllık eğitimimiz boyunca &ouml;ğrencilerimiz dili t&uuml;m beceri alanları ile &ouml;ğrenmekle kalmıyor aynı zamanda t&uuml;m yurt i&ccedil;i ve dışı dil yeterlilik sınavlarına hazır hale geliyorlar. Yurt dışında eğitim ise bir hayal olmaktan &ccedil;ıkıyor.</p>\r\n\r\n<p><strong>Kazanımlar</strong></p>\r\n\r\n<p><strong>Advanced Level Reading</strong>&nbsp;&ndash; İleri d&uuml;zey metinleri kolaylıkla anlayabilir ve okuduğunu anlamaya dayalı her t&uuml;rl&uuml; soruyu rahatlıkla cevaplayabilir.<br />\r\n<strong>Advanced Level Speaking</strong>&nbsp;&ndash; G&uuml;nl&uuml;k konuşmaların yanısıra ileri d&uuml;zey konular hakkında akademik dilde kendini ifade edebilir.<br />\r\n<strong>Advanced Level Listening</strong>&nbsp;&ndash; Kurallı dil i&ccedil;erisinde duyduğu temel d&uuml;zeyden ileri d&uuml;zeye herhangi bir yapıyı kolaylıkla yakalayıp anlamlandırabilir.<br />\r\n<strong>Advanced Level Writing</strong>&nbsp;&ndash; Yazım bi&ccedil;imlerine g&ouml;re akademik kurallar &ccedil;er&ccedil;evesinde hızlı ve etkin bir şekilde metinler yazabilir.</p>\r\n', 120, 'Herkes', 100, 'Dil Eğitimi', '../img/liseler-icin-ingilizce-1920x540.webp', 'https://www.youtube.com/watch?v=9qUtpmONbx0'),
(5, 'İleri İngilizce', '<p>İleri İngilizce ile ilgili yeni i&ccedil;erik eklenecek</p>\r\n', 150, 'Beginner', 15, 'Dil Eğitimi', '../img/genel-ingilizce-1920x540.webp', 'https://www.youtube.com/watch?v=zWYa4KLLhaw'),
(6, 'Yurt içi Dil Yeterlilik Sınavları', '<p>Turkuaz Dil Eğitim olarak, dil eğitim ve &ouml;ğretimindeki yetersizliğin temelinde yatan kalıplaşmış sadece dilbilgisi ve kelime ezberine dayalı, t&uuml;m bilgilerin kısa s&uuml;rede unutulmaya mahk&ucirc;m olduğu bir sınava hazırlık s&uuml;recinden ziyade konuşma, yazma, okuma, dinleme gibi becerilerin karşılaştırmalı dilbilgisi ile harmanlandığı ve dili kalıcı bir şekilde edindirdiği bir eğitim &ouml;ğretim s&uuml;reci ile &ouml;ğrencilerimizin herhangi yeterlilik sınavına hazırlandığı YDS, Y&Ouml;KDİL, TIPDİL veya YDT &ouml;nem arz etmeksizin TEK FİYAT ve BAŞARI GARANTİSİ ile &ccedil;eyrek asrı aşkın s&uuml;redir eğitimlerimize devam etmekteyiz.</p>\r\n\r\n<h4><strong>SERTİFİKASYON</strong></h4>\r\n\r\n<p>Kurumumuz tarafından verilen eğitimler neticesinde yapılacak d&uuml;zey belirleme sınavları ardından M.E.B. tarafından onaylı dil yeterlilik sertifikalarının yanı sıra &ouml;ğrencilerimizin &uuml;lkemizde ve d&uuml;nya &ccedil;apında kabul edilen &ccedil;eşitli dil yeterlilik sınavlardan alacakları sınav sonu&ccedil;ları da &ouml;ğrencilerimize gerek eğitim hayatlarında gerek iş hayatlarında diledikleri hedeflerine ulaşmalarında yardımcı olmaktadır.</p>\r\n\r\n<h4><strong>KAZANIMLAR</strong></h4>\r\n\r\n<ul>\r\n	<li>120 saatlik karşılaştırmalı yoğunlaştırılmış dil eğitimi</li>\r\n	<li>Konulara &ouml;zg&uuml; soru &ccedil;&ouml;z&uuml;mleri</li>\r\n	<li>İleri d&uuml;zey TR-İNG ve İNG-TR &ccedil;eviri teknikleri</li>\r\n	<li>İleri d&uuml;zey anadil ve yabancı dil hakimiyeti</li>\r\n	<li>İleri d&uuml;zey dil yeterlilikleri: Okuma, konuşma, yazma, dinleme</li>\r\n</ul>\r\n', 120, 'Herkes', 20, 'Sınavlara Hazırlık Kursları', '../img/yurt-ici-dil-yeterlilik-sinavlari-1920x540.webp', 'https://www.youtube.com/watch?v=5vx9EUViCu0'),
(7, 'Yurt dışı Dil Yeterlilik Sınavları', '<p>Turkuaz Dil Eğitim olarak, dil eğitim ve &ouml;ğretimindeki yetersizliğin temelinde yatan kalıplaşmış sadece dilbilgisi ve kelime ezberine dayalı, t&uuml;m bilgilerin kısa s&uuml;rede unutulmaya mahk&ucirc;m olduğu bir sınava hazırlık s&uuml;recinden ziyade konuşma, yazma, okuma, dinleme gibi becerilerin karşılaştırmalı dilbilgisi ile harmanlandığı ve dili kalıcı bir şekilde edindirdiği bir eğitim &ouml;ğretim s&uuml;reci ile &ouml;ğrencilerimizin herhangi yeterlilik sınavına hazırlandığı TOEFL, IELTS, SAT, GMAT veya CAT &ouml;nem arz etmeksizin TEK FİYAT ve BAŞARI GARANTİSİ ile &ccedil;eyrek asrı aşkın s&uuml;redir eğitimlerimize devam etmekteyiz.</p>\r\n\r\n<h4><strong>SERTİFİKASYON</strong></h4>\r\n\r\n<p>Kurumumuz tarafından verilen eğitimler neticesinde yapılacak d&uuml;zey belirleme sınavları ardından M.E.B. tarafından onaylı dil yeterlilik sertifikalarının yanı sıra &ouml;ğrencilerimizin &uuml;lkemizde ve d&uuml;nya &ccedil;apında kabul edilen &ccedil;eşitli dil yeterlilik sınavlardan alacakları sınav sonu&ccedil;ları da &ouml;ğrencilerimize gerek eğitim hayatlarında gerek iş hayatlarında diledikleri hedeflerine ulaşmalarında yardımcı olmaktadır.</p>\r\n\r\n<h4><strong>KAZANIMLAR</strong></h4>\r\n\r\n<ul>\r\n	<li>120 saatlik karşılaştırmalı yoğunlaştırılmış dil eğitimi</li>\r\n	<li>Konulara &ouml;zg&uuml; soru &ccedil;&ouml;z&uuml;mleri</li>\r\n	<li>İleri d&uuml;zey TR-İNG ve İNG-TR &ccedil;eviri teknikleri</li>\r\n	<li>İleri d&uuml;zey anadil ve yabancı dil hakimiyeti</li>\r\n	<li>İleri d&uuml;zey dil yeterlilikleri: Okuma, konuşma, yazma, dinleme</li>\r\n</ul>\r\n', 120, 'Herkes', 20, 'Sınavlara Hazırlık Kursları', '../img/yurt-disi-dil-yeterlilik-sinavlari-1920x540.webp', 'https://www.youtube.com/watch?v=5vx9EUViCu0'),
(8, 'Yurt dışı Üniversitelere Hazırlık', '<p>15+ dersten sorumlu tutulduğunuz TYT ve AYT&rsquo;ye &ccedil;alışıp d&uuml;nya sıralamasında ilk 1000&rsquo;de maalesef bir elin parmağını ge&ccedil;meyecek sayıda &uuml;niversitesi bulunan T&uuml;rkiye&rsquo;de eğitim almak mı, yoksa sadece İngilizce ve Matematik, yani 2 dersten sorumlu tutulduğunuz bir sınava hazırlanarak d&uuml;nyanın en saygın &uuml;niversitelerinde burslu veya T&uuml;rkiye ile aynı maliyetlerde eğitim almak mı? Dahası aylarca &ccedil;alışarak dershane, &ouml;zel ders, &ouml;zel okul ve benzeri pek &ccedil;ok yere y&uuml;kl&uuml; miktarlar &ouml;demek, b&uuml;y&uuml;k stresler yaşamak ve en &ouml;nemlisi lise bitiminde sadece bir tek sınavla hayatınızı belirlemek mi, yoksa 9. Sınıf itibariyle senede 8 defa girebileceğiniz bir sınavla d&uuml;nya sıralamasında ilk 500, 250 ve hatta 100&rsquo;de bulunan &uuml;niversitelerde okumak mı?</p>\r\n\r\n<p>Bir&ccedil;ok kişi gibi siz de yurt dışında &uuml;niversite eğitimi almanın &ccedil;ok zengin olmayı gerektirdiğini d&uuml;ş&uuml;n&uuml;yorsanız, yanılıyorsunuz! Araştırmayan bir toplum olarak yorum yapmaktan &ouml;teye gidemiyoruz. Olay esasında son derece basit &ndash; sadece 2 ders ve &ccedil;ok sayıda burs imkanı ile her b&uuml;t&ccedil;eye uygun, hatta &ccedil;alışma imkanları ile kendi &ccedil;abanızla dahi yurt dışında &uuml;niversite eğitimi alabilirsiniz. Turkuaz Dil Eğitim, yurt dışında lisans, y&uuml;ksek lisans ve doktora eğitimlerini alabilmeniz i&ccedil;in gerekli t&uuml;m eğitimleri ve danışmanlık hizmetlerini geniş bir yelpazede sunuyor.</p>\r\n\r\n<h4>B&Ouml;L&Uuml;MLER VE DİPLOMA GE&Ccedil;ERLİLİĞİ</h4>\r\n\r\n<p>18 yaşınızda, o anki ruh halinizi &ouml;nemsemeksizin, y&uuml;z binlerce insan ile birlikte girdiğiniz tek bir sınavdan alacağınız sonuca g&ouml;re onlarca tercihiniz arasından her hangisi gelecek olur ise razı olmak zorunda kaldığınız&nbsp;T&uuml;rkiye&rsquo;deki sınav sisteminin aksine lise hayatınız boyunca her yıl 8 defa girme hakkınızın bulunduğu ve kabul aldığınız &uuml;niversitede dilediğiniz b&ouml;l&uuml;m&uuml; se&ccedil;ebildiğiniz bir sınav sistemi ile d&uuml;nya &ccedil;apında tanınırlığı olan ve sizlere d&ouml;viz bazında y&uuml;ksek kazan&ccedil;lar sağlayacak lisans, y&uuml;ksek lisans ve doktora d&uuml;zeyinde diplomalara sahip olarak hayallerinizi ger&ccedil;eğe d&ouml;n&uuml;şt&uuml;r&uuml;yorsunuz.&nbsp;TIPtan psikolojiye, mimarlıktan&nbsp; diş hekimliğine, dil biliminden işletmeye, m&uuml;hendislikten fizyoterapiye, havacılık ve pilotajdan turizme kadar pek &ccedil;ok alanda dilediğiniz eğitimi alabiliyorsunuz.&nbsp;</p>\r\n\r\n<h4>HİZMETLERİMİZ</h4>\r\n\r\n<p>Hayatınız boyunca belki de tek ve en &ouml;nemli fırsatınız olacak yurt dışı eğitim deneyiminiz sorunsuz, g&uuml;venli ve verimli olmalıdır. Turkuaz Dil Eğitim&nbsp;ihtiyacınız olan t&uuml;m hizmetleri danışmanlığı ile de sizlere sağlıyor. Danışmanlığımız dahilinde verdiğimiz hizmetlerden şu şekildedir:</p>\r\n\r\n<p>&ndash; IELTS / TOEFL / SAT gibi ileri d&uuml;zey dil yeterliliği isteyen yurt dışı dil yeterlilik sınavlarına sizleri t&uuml;m beceri alanları ile hazır hale getirmek.</p>\r\n\r\n<p>&ndash;&nbsp;Kişisel nitelikleriniz ve istekleriniz doğrultusunda onlarca &uuml;lke, y&uuml;zlerce şehir ve &uuml;niversite arasından size en uygun olanları belirlemek</p>\r\n\r\n<p>&ndash; Devletler, &uuml;niversiteler ve işletmeler tarafından verilen, yemek-konaklama-harcırah gibi her biri ayrı ayrı başvuru gerektiren&nbsp; burslardan sizleri haberdar etmek ve zaman aşımına uğratmadan bu başvuruları yapmak.</p>\r\n\r\n<p>&ndash; Se&ccedil;eceğiniz iş kolu ve &uuml;niversitelere uygun şekilde referans mektuplarını d&uuml;zenlemek.</p>\r\n\r\n<p>&ndash; &Uuml;niversite kabullerinde sınav puanınız kadar &ouml;nem arz eden, başvurulan her &uuml;niversitenin talep ettiği, nerede ise her biri ortalama en az 400 kelimeden oluşan niyet mektuplarını hazırlamak.</p>\r\n\r\n<p>&ndash; &Uuml;lkeden &uuml;lkeye, &uuml;niversiteden &uuml;niversiteye farklılık g&ouml;sterebilen kayıt işlemlerinizi, vize başvurularınızı, oturum ve &ccedil;alışma izinlerinizi, olabilecek en uygun fiyatlarla u&ccedil;ak biletlerinizi ayarlamak.</p>\r\n\r\n<p>Turkuaz Dil Eğitim &ccedil;eyrek asırlık tecr&uuml;besi, akademik kadrosu, y&uuml;zlerce yurt dışı proje ve binlerce &ouml;ğrencisi ile eğitim alanında g&ouml;sterdiği niteliği, ilgiyi, &ouml;zveriyi ve akabinde gelen başarıyı yurt dışı &uuml;niversitelere hazırlıkta da g&ouml;steriyor. &Ccedil;ok daha iyi ve aydınlık bir gelecek i&ccedil;in tek yapmanız gereken bizlerle iletişime ge&ccedil;mek. &nbsp;</p>\r\n', 60, 'Herkes', 30, 'Yurt Dışı Eğitim', '../img/yurt-disi-universitelere-hazirlik-1920x540.webp', 'https://www.youtube.com/watch?v=5vx9EUViCu0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

DROP TABLE IF EXISTS `kategoriler`;
CREATE TABLE IF NOT EXISTS `kategoriler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `katadi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `katturu` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `ustkategori` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `aciklama` text COLLATE utf8mb4_general_ci NOT NULL,
  `gorsel` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`id`, `katadi`, `katturu`, `ustkategori`, `aciklama`, `gorsel`) VALUES
(1, 'İngilizce', 'Alt Kategori', 'Kurslar', 'İngilizce Kursları', '../img/turkuaz-egitim-logo-116x116.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfalar`
--

DROP TABLE IF EXISTS `sayfalar`;
CREATE TABLE IF NOT EXISTS `sayfalar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `baslik` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `aciklama` varchar(5000) COLLATE utf8mb4_general_ci NOT NULL,
  `video` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `meta` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `gorsel` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `alt` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ustMenu` varchar(70) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `sayfalar`
--

INSERT INTO `sayfalar` (`id`, `baslik`, `aciklama`, `video`, `meta`, `gorsel`, `alt`, `ustMenu`) VALUES
(1, 'Niçin Turkuaz?', '<p><strong>HİKAYEMİZ</strong></p>\r\n\r\n<p>Aslında siz sevgili &ouml;ğrencilerimiz ve biz &ouml;ğretmenlerinizin hi&ccedil; bitmeyen ve de bitmeyecek ortak hikayesi...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>BİZ KİMİZ? </strong></p>\r\n\r\n<p>Turkuaz Dil Eğitim Ailesi olarak, eğitime g&ouml;re &ouml;ğrenci değil &ndash; &ouml;ğrenciye g&ouml;re eğitim ilkesi d&acirc;hilinde, bireysel farklılıklara duyarlı, &ouml;ğrenci merkezli, hızla değişen d&uuml;nyanın taleplerine uygun hale getirilmiş, ezberletmektense edindirmeyi ama&ccedil;layan eğitim anlayışımız ile eğitim alanında &ccedil;eyrek asrı aşkın s&uuml;redir &ccedil;alışmalarımızı s&uuml;rd&uuml;rmekteyiz. Ayrıca akademik olarak uzaktan eğitim &uuml;zerine &ccedil;alışmalarını tamamlamış olan kurucularımız nezdinde hazırlanmış olan eğitim programlarımız ile &ouml;ğrencilerimize d&uuml;nyanın neresinde oldukları &ouml;nem arz etmeksizin eğitimlerimizi verebilmekteyiz.</p>\r\n\r\n<p><strong>AMACIMIZ</strong></p>\r\n\r\n<p>Bireysel farklılıkları temel alan bir sistem i&ccedil;erisinde &ccedil;ağdaş yaşamın gerektirdiği donanımlara sahip, Atat&uuml;rk ilke ve inkılaplarına bağlı, ulusal k&uuml;lt&uuml;r&uuml;n&uuml; &ouml;z&uuml;msemiş aynı zamanda k&uuml;resel bakış a&ccedil;ısına sahip, a&ccedil;ık fikirli, &uuml;lk&uuml;lerine ve ilkelerine bağlı, &uuml;retken, toplumsal sorumluluk bilinci gelişmiş, mutlu ve &ouml;zg&uuml;r bireyler yetiştirmektir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4 style=\"text-align:center\">&ldquo;Hi&ccedil;bir başarı gelişig&uuml;zel değildir. Her başarının ardında emek, sabır, &ouml;d&uuml;n ve sevgi yatar. Her nerede, her hangi şartlar altında &ccedil;alışıyor olursanız olun, yaptığınız işi sevin ve de ulusal değerlerimizden, kimliğimizden ve Atat&uuml;rk&rsquo;&uuml;n ışığından asla &ouml;d&uuml;n vermeyin.&rdquo;</h4>\r\n\r\n<p style=\"text-align:center\"><strong>&Ouml;zg&uuml;r AVŞAR, KURUCU</strong></p>\r\n', '', 'Aslında siz sevgili öğrencilerimiz ve biz öğretmenlerinizin hiç bitmeyen ve de bitmeyecek ortak hikayesi...', '../img/turkuaz-egitim-hakkimizda-1920x540.webp', 'Turkuaz Eğitim Hakkımızda', 'Hakkımızda'),
(3, 'Oxford Üniversitesi Sınav Merkezi', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis sem non sollicitudin pharetra. Nulla facilisi. Etiam ut neque neque. Cras ligula sapien, pellentesque at augue et, lacinia pulvinar urna. Vestibulum condimentum elit sit amet nulla dignissim placerat ac a ipsum. Etiam sed enim velit. Quisque iaculis fermentum nulla id pellentesque.</p>\r\n\r\n<p>In non euismod nisi. Etiam quis porttitor risus. Cras lectus nisl, commodo ac laoreet quis, fermentum sollicitudin ipsum. Pellentesque ut rhoncus nunc. Quisque maximus mattis congue. Praesent nec elementum nunc. Aliquam vitae dolor est.</p>\r\n\r\n<p>Aliquam vel risus a odio blandit fringilla eget et magna. Phasellus sed iaculis felis, ac aliquet magna. Integer fermentum nibh vel ex condimentum varius. Pellentesque dictum sodales ipsum vitae pellentesque. Ut eleifend augue sem, non porttitor lorem interdum ac. Suspendisse ac nisi laoreet mauris facilisis sollicitudin non eu purus. Nulla facilisi. Curabitur eu hendrerit nunc, nec egestas enim. Etiam felis ligula, tincidunt ut orci eget, sollicitudin vulputate odio. Phasellus lacinia velit eget consectetur fermentum. Vestibulum vitae urna ex. Nullam finibus ipsum est, a feugiat neque vulputate at. Nunc malesuada, tortor quis tincidunt dapibus, sem nunc vulputate mauris, et viverra orci sapien sit amet turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus sodales convallis enim, sed laoreet felis finibus pulvinar.</p>\r\n\r\n<p>Duis scelerisque arcu eget pharetra pharetra. Cras ac interdum ante. Ut sodales, dolor a consectetur finibus, lorem dui lacinia felis, et interdum tortor purus at velit. Sed interdum egestas ultricies. Curabitur a mollis leo. Fusce blandit sit amet tellus quis tempus. Nulla nec commodo purus. Ut iaculis mi eget mi blandit imperdiet. Etiam rhoncus finibus tortor, non viverra urna varius quis. Integer dapibus id arcu eu fringilla. Cras accumsan convallis nunc ut pellentesque. Integer metus est, venenatis quis consequat nec, condimentum ac neque.</p>\r\n\r\n<p>Ut at porta ante. Sed aliquet, enim ut semper ultrices, enim massa dapibus arcu, bibendum elementum quam elit fermentum massa. Nulla in elit bibendum, dignissim augue id, blandit erat. Praesent vestibulum eget arcu vel condimentum. Duis interdum velit sit amet risus sagittis elementum. Maecenas viverra viverra lorem, nec elementum lacus feugiat vitae. Suspendisse eget diam elit. Mauris ligula augue, porttitor non posuere sit amet, ultricies vel diam. Aenean efficitur vestibulum ligula, ac bibendum libero malesuada quis. Duis et ligula et ex imperdiet tincidunt. Integer rutrum lorem laoreet suscipit tempor. Nullam commodo augue non varius lobortis.</p>\r\n', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis sem non sollicitudin pharetra.', '../img/genel-ingilizce-1920x540.webp', 'Lorem ipsum dolor sit amet', 'Sınav Merkezi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `adi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `kadi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `sifre` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`id`, `adi`, `kadi`, `sifre`) VALUES
(1, 'Turkuaz Eğitim', 'yoneticiAdmin', 'turkuazadmin2023**'),
(2, 'Kaan Deneme', 'kaan', '123456');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazilar`
--

DROP TABLE IF EXISTS `yazilar`;
CREATE TABLE IF NOT EXISTS `yazilar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `baslik` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `blogYazisi` text COLLATE utf8mb4_general_ci NOT NULL,
  `meta` text COLLATE utf8mb4_general_ci NOT NULL,
  `gorsel` text COLLATE utf8mb4_general_ci NOT NULL,
  `alt` text COLLATE utf8mb4_general_ci NOT NULL,
  `tarih` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `lang` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `durum` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `yazilar`
--

INSERT INTO `yazilar` (`id`, `baslik`, `blogYazisi`, `meta`, `gorsel`, `alt`, `tarih`, `lang`, `durum`) VALUES
(1, 'Çocuklara Şarkılarla İngilizce Öğretimi', '<p>Şarkılarla İngilizce &ouml;ğretmek, &ouml;ğrencilerin ilgisini &ccedil;ekmenin ve dil becerilerini geliştirmelerine yardımcı olmanın eğlenceli ve etkili bir yoludur. M&uuml;zik, dikkatimizi ve duygularımızı &ccedil;ekme g&uuml;c&uuml;ne sahiptir ve bu, &ouml;ğrencilerin motivasyonla m&uuml;cadele edebileceği veya geleneksel &ouml;ğrenme y&ouml;ntemlerini sıkıcı bulabileceği bir sınıf ortamında &ouml;zellikle yararlı olabilir.</p>\r\n\r\n<p>İngilizce &ouml;ğretmek i&ccedil;in şarkı kullanmanın en b&uuml;y&uuml;k avantajlarından biri, kelime dağarcığı, gramer, telaffuz ve hatta k&uuml;lt&uuml;rel referanslar dahil olmak &uuml;zere &ccedil;eşitli dil girdileri sunmalarıdır. Şarkılar &ouml;ğrencilerin d&uuml;zeyine ve ilgi alanlarına g&ouml;re se&ccedil;ilebileceği gibi yeni konuların tanıtılması veya &ouml;nceden &ouml;ğrenilen kavramların pekiştirilmesi i&ccedil;in de kullanılabilir.</p>\r\n\r\n<p>Şarkılarla &ouml;ğretim yaparken &ouml;ğrencilerinizin yaşına ve seviyesine uygun m&uuml;zikler se&ccedil;meniz &ouml;nemlidir. Net s&ouml;zlere ve akılda kalıcı melodilere sahip pop&uuml;ler şarkılar, &ouml;ğrencilerin bu şarkılara aşina olma ve birlikte şarkı s&ouml;ylemekten keyif alma olasılıkları daha y&uuml;ksek olduğundan genellikle en iyi se&ccedil;imdir. &Ouml;ğrencilerin materyali anlamalarını ve bunlarla ilgilenmelerini sağlamak i&ccedil;in basit dil yapılarına ve y&ouml;netilebilir miktarda yeni kelime dağarcığına sahip şarkılar kullanmak da iyi bir fikirdir.</p>\r\n\r\n<p>İngilizceyi şarkılarla etkili bir şekilde &ouml;ğretmek i&ccedil;in &ouml;ğrencilere aktif dinlemeyi ve katılımı teşvik eden etkinlikler sağlamak &ouml;nemlidir. Bu, eksik kelimeleri veya c&uuml;mleleri doldurma, kelimeleri tanımlarıyla eşleştirme veya şarkı s&ouml;zlerinin anlamını tartışma gibi alıştırmaları i&ccedil;erebilir. &Ouml;ğrenciler ayrıca &ccedil;iftler veya gruplar halinde &ccedil;alışarak şarkının kendi versiyonlarını oluşturabilir, s&ouml;zlerini kendi deneyimlerini veya k&uuml;lt&uuml;rel ge&ccedil;mişlerini yansıtacak şekilde değiştirebilirler.</p>\r\n\r\n<p>Son olarak, şarkıları yalnızca onlara g&uuml;venmek yerine diğer &ouml;ğretim y&ouml;ntemlerine ek olarak kullanmak &ouml;nemlidir. M&uuml;zik, dil &ouml;ğrenimi i&ccedil;in g&uuml;&ccedil;l&uuml; bir ara&ccedil; olsa da, &ouml;ğrencilere farklı dil becerilerini ve &ouml;ğrenme alanlarını hedefleyen bir dizi etkinlik ve alıştırma sağlamak yine de &ouml;nemlidir.</p>\r\n\r\n<p>&Ouml;zetle, şarkılarla İngilizce &ouml;ğretmek, &ouml;ğrencilerin dil becerilerini geliştirmelerine yardımcı olmak i&ccedil;in eğlenceli ve etkili bir yol olabilir. &Ouml;ğretmenler, uygun şarkıları se&ccedil;erek, ilgi &ccedil;ekici etkinlikler sunarak ve m&uuml;ziği daha geniş bir &ouml;ğretim y&ouml;ntemleri yelpazesine entegre ederek, daha dinamik ve ilgi &ccedil;ekici bir sınıf ortamı yaratmak i&ccedil;in m&uuml;ziğin g&uuml;c&uuml;nden yararlanabilirler.</p>\r\n', 'Şarkılarla İngilizce öğretmek, öğrencilerin ilgisini çekmenin ve dil becerilerini geliştirmelerine yardımcı olmanın eğlenceli ve etkili bir yoludur.', '../img/cocuklara-sarkilarla-ingilizce-ogretimi-1920x540.webp', 'Çocuklara şarkılarla İngilizce öğretimi', '2023-12-27', 'Türkçe', 'Yayınlandı'),
(3, 'deneme', '<p>deneme</p>\r\n', 'deneme', '../img/cocuklar-icin-dil-egitimi-1920x540.webp', 'deneme', '2024-01-11', 'Türkçe', 'Yayınlandı');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
