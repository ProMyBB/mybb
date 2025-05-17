<?php

/**
 * MyBB 1.8 Türkçe Dil Paketi
 * Copyright © 2024 MyBB Pro, Tüm Hakları Saklıdır.
 * 
 * Website: https://mybb.pro
 * Lisans: https://mybb.pro/hakkimizda/lisans/
 * 
 * Support: https://mybb.pro/
 *
 * Last Update: 21.12.2024 (v1.8.38)
 */


$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon, enabled, forcedownload, `groups`,forums, avatarfile) VALUES (1, 'ZIP File', 'application/zip', 'zip', 1024, 'images/attachtypes/zip.png', 1, 0, '-1', '-1', 0);";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon, enabled, forcedownload, `groups`,forums, avatarfile) VALUES (2, 'JPG Image', 'image/jpeg', 'jpg', 500, 'images/attachtypes/image.png', 1, 0, '-1', '-1', 1);";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon, enabled, forcedownload, `groups`,forums, avatarfile) VALUES (3, 'Text Document', 'text/plain', 'txt', 200, 'images/attachtypes/txt.png', 1, 0, '-1', '-1', 0);";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon, enabled, forcedownload, `groups`,forums, avatarfile) VALUES (4, 'GIF Image', 'image/gif', 'gif', 500, 'images/attachtypes/image.png', 1, 0, '-1', '-1', 1);";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon, enabled, forcedownload, `groups`,forums, avatarfile) VALUES (5, 'Adobe Photoshop File', 'application/x-photoshop', 'psd', 1024, 'images/attachtypes/psd.png', 1, 0, '-1', '-1', 0);";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon, enabled, forcedownload, `groups`,forums, avatarfile) VALUES (6, 'PHP File', 'application/x-httpd-php', 'php', 500, 'images/attachtypes/php.png', 1, 0, '-1', '-1', 0);";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon, enabled, forcedownload, `groups`,forums, avatarfile) VALUES (7, 'PNG Image', 'image/png', 'png', 500, 'images/attachtypes/image.png', 1, 0, '-1', '-1', 1);";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon, enabled, forcedownload, `groups`,forums, avatarfile) VALUES (8, 'Microsoft Word Document', 'application/msword', 'doc', 1024, 'images/attachtypes/doc.png', 1, 0, '-1', '-1', 0);";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon, enabled, forcedownload, `groups`,forums, avatarfile) VALUES (9, 'HTM File', 'text/html', 'htm', 100, 'images/attachtypes/html.png', 1, 0, '-1', '-1', 0);";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon, enabled, forcedownload, `groups`,forums, avatarfile) VALUES (10, 'HTML File', 'text/html', 'html', 100, 'images/attachtypes/html.png', 1, 0, '-1', '-1', 0);";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon, enabled, forcedownload, `groups`,forums, avatarfile) VALUES (11, 'JPEG Image', 'image/jpeg', 'jpeg', 500, 'images/attachtypes/image.png', 1, 0, '-1', '-1', 1);";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon, enabled, forcedownload, `groups`,forums, avatarfile) VALUES (12, 'GZIP Compressed File', 'application/x-gzip', 'gz', 1024, 'images/attachtypes/tar.png', 1, 0, '-1', '-1', 0);";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon, enabled, forcedownload, `groups`,forums, avatarfile) VALUES (13, 'TAR Compressed File', 'application/x-tar', 'tar', 1024, 'images/attachtypes/tar.png', 1, 0, '-1', '-1', 0);";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon, enabled, forcedownload, `groups`,forums, avatarfile) VALUES (14, 'CSS Stylesheet', 'text/css', 'css', 100, 'images/attachtypes/css.png', 1, 0, '-1', '-1', 0);";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon, enabled, forcedownload, `groups`,forums, avatarfile) VALUES (15, 'Adobe Acrobat PDF', 'application/pdf', 'pdf', 2048, 'images/attachtypes/pdf.png', 1, 0, '-1', '-1', 0);";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon, enabled, forcedownload, `groups`,forums, avatarfile) VALUES (16, 'Bitmap Image', 'image/bmp', 'bmp', 500, 'images/attachtypes/image.png', 1, 0, '-1', '-1', 0);";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon, enabled, forcedownload, `groups`,forums, avatarfile) VALUES (17, 'Microsoft Word 2007 Document', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'docx', 1024, 'images/attachtypes/doc.png', 1, 0, '-1', '-1', 0);";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon, enabled, forcedownload, `groups`,forums, avatarfile) VALUES (18, 'Microsoft Excel Document', 'application/vnd.ms-excel', 'xls', 1024, 'images/attachtypes/xls.png', 1, 0, '-1', '-1', 0);";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon, enabled, forcedownload, `groups`,forums, avatarfile) VALUES (19, 'Microsoft Excel 2007 Document', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'xlsx', 1024, 'images/attachtypes/xls.png', 1, 0, '-1', '-1', 0);";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon, enabled, forcedownload, `groups`,forums, avatarfile) VALUES (20, 'Microsoft PowerPoint Document', 'application/vnd.ms-powerpoint', 'ppt', 1024, 'images/attachtypes/ppt.png', 1, 0, '-1', '-1', 0);";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon, enabled, forcedownload, `groups`,forums, avatarfile) VALUES (21, 'Microsoft PowerPoint 2007 Document', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'pptx', 1024, 'images/attachtypes/ppt.png', 1, 0, '-1', '-1', 0);";

$inserts[] = "INSERT INTO mybb_calendars (name,disporder,startofweek,showbirthdays,eventlimit,moderation,allowhtml,allowmycode,allowimgcode,allowvideocode,allowsmilies) VALUES ('Default Calendar',1,0,1,4,0,0,1,1,1,1);";

$inserts[] = "INSERT INTO mybb_forums (fid, name, description, linkto, type, pid, parentlist, disporder, active, open, threads, posts, lastpost, lastposter, lastposttid, allowhtml, allowmycode, allowsmilies, allowimgcode, allowvideocode, allowpicons, allowtratings, usepostcounts, usethreadcounts, password, showinjump, style, overridestyle, rulestype, rulestitle, rules) VALUES (1, 'İlk Kategori', 'Bu sizin ilk MyBB kategorinizdir. Admin Panelinizden Kategoriler & Forumlar kısmından düzenleyebilirsiniz.', '', 'c', 0, '1', 1, 1, 1, 0, 0, 0, '0', 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, '', 1, 0, 0, 0, '', '');";
$inserts[] = "INSERT INTO mybb_forums (fid, name, description, linkto, type, pid, parentlist, disporder, active, open, threads, posts, lastpost, lastposter, lastposttid, allowhtml, allowmycode, allowsmilies, allowimgcode, allowvideocode, allowpicons, allowtratings, usepostcounts, usethreadcounts, password, showinjump, style, overridestyle, rulestype, rulestitle, rules) VALUES (2, 'İlk Forum', 'Bu sizin ilk MyBB forumunuzdur. Admin Panelinizden Kategoriler & Forumlar kısmından düzenleyebilirsiniz.', '', 'f', 1, '1,2', 1, 1, 1, 0, 0, 0, '0', 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, '', 1, 0, 0, 0, '', '');";

$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (1, 1, 'Kullanıcı Kaydı', 'Kullanıcı kaydı için avantajlar ve ayrıcalıklar.', 'Bu forumun bazı bölümleri oturum açmanızı ve kayıt olmanızı gerektirebilir. Kayıt ücretsizdir ve tamamlanması birkaç dakika sürer.<br />\r\n<br />\r\nKayıt olmanız tavsiye edilir; kayıt olduktan sonra konu/yorum gönderebilir, kendi tercihlerinizi belirleyebilir ve bir profil oluşturabilirsiniz.<br />\r\n<br />\r\nGenel olarak kayıt gerektiren özelliklerden bazıları abonelikler, stil değiştirme, Kişisel Defterinize (basit not defteri) erişim ve forum üyelerine e-posta ve özel mesaj göndermedir.', 1, 1, 1);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (2, 1, 'Profil Güncelleme', 'Şu anda kayıt altında olan profil bilgilerinizin değiştirilmesi.', 'Sitemize ziyaretleriniz sırasında bir noktada, özel  mesajlaşma bilgileriniz, şifreniz veya belki de e-posta adresiniz gibi bazı bilgileri güncellemeniz gerektiğine karar verebilirsiniz. Bu bilgilerden herhangi birini kullanıcı kontrol panelinizden değiştirebilirsiniz. Bu kontrol paneline erişmek için, hemen hemen her sayfanın sağ üst köşesindeki \"Kullanıcı KP\" başlıklı bağlantıya tıklamanız yeterlidir. Buradan \"Profili Düzenle\" seçeneğini seçin ve istediğiniz öğeleri değiştirin veya güncelleyin, ardından değişikliklerin geçerli olması için sayfanın altında bulunan profili güncelle düğmesine tıklayın.', 1, 1, 2);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (3, 1, 'MyBB\\de Çerez Kullanımı', 'MyBB, forumu ziyaretiniz ve oturum açma/kapama ile ilgili belirli bilgileri saklamak için çerezleri kullanır.', 'MyBB, kayıtlı iseniz giriş bilgilerinizi, değilseniz son ziyaretinizi saklamak için çerezlerden yararlanır.<br />\r\n<br />\r\nÇerezler bilgisayarınızda saklanan küçük metin belgeleridir; bu forum tarafından ayarlanan çerezler yalnızca bu web sitesinde kullanılabilir ve hiçbir güvenlik riski oluşturmaz.<br />\r\n<br />\r\nBu forumdaki çerezler ayrıca okuduğunuz belirli konuları ve bunları en son ne zaman okuduğunuzu da izler.<br />\r\n<br />\r\nBu forum tarafından ayarlanan tüm çerezleri temizlemek için <a href=\"misc.php?action=clearcookies&amp;my_post_key={1}\">buraya</a> tıklayın.', 1, 1, 3);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (4, 1, 'Oturum Açma ve Kapatma', 'Nasıl giriş ve çıkış yapılır.', 'Oturum açtığınızda, cihazınıza bir çerez yerleştirirsiniz, böylece her seferinde kullanıcı adınızı ve şifrenizi girmek zorunda kalmadan forumlarda gezinebilirsiniz. Oturumu kapatmak, başka hiç kimsenin foruma sizin gibi göz atamamasını sağlamak için bu çerezi temizler.<br />\r\n<br />\r\nGiriş yapmak için forumun sağ üst köşesindeki giriş linkine tıklamanız yeterlidir. Oturumu kapatmak için aynı yerdeki oturumu kapat bağlantısını tıklayın. Oturumu kapatamamanız durumunda, cihazınızdaki çerezleri temizlemek de aynı etkiyi yaratacaktır.', 1, 1, 4);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (5, 2, 'Yeni Konu Gönderme', 'Bir forumda yeni bir konu başlatmak.', 'İlgilendiğiniz bir foruma gittiğinizde ve yeni bir konu (veya başlık) oluşturmak istediğinizde, forumların üst ve alt kısımlarında yer alan \"Yeni Konu\" başlıklı düğmeye tıklamanız yeterlidir. Lütfen her forumda yeni bir konu açma izniniz olmayabileceğini unutmayın, çünkü forum yöneticiniz o forumda gönderi yapmayı forum yöneticileri ile sınırlamış veya forumu tamamen yeni konulara kapatmış/arşivlemiş olabilir.', 1, 1, 1);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (6, 2, 'Yanıt Gönderme', 'Forum içindeki bir konuya yanıt verme.', 'Ziyaretiniz sırasında, yanıt vermek istediğiniz bir konuyla karşılaşabilirsiniz. Bunu yapmak için, başlığın altındaki veya üstündeki \"Yanıt Gönder\" düğmesine tıklamanız yeterlidir. Lütfen yöneticinizin söz konusu forumda belirli kişilerin gönderi yapmasını kısıtlamış olabileceğini unutmayın.<br />\r\n<br />\r\nAyrıca, bir forumun moderatörü bir konuyu kapatmış/kilitlemiş olabilir, bu da kullanıcıların bu konuya yanıt veremeyeceği anlamına gelir. Bir kullanıcının bir moderatör veya yöneticinin yardımı olmadan kapatılmış/kilitlenmiş bir konuyu açması mümkün değildir.', 1, 1, 2);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (7, 2, 'MyCode - BBCode Kullanımı', 'Gönderilerinizi geliştirmek için MyCode ve BBCodeları  nasıl kullanacağınızı öğrenin.', 'Belirli efektler oluşturmak için gönderilerinizde HTML yapısının basitleştirilmiş bir sürümü olan MyCode veya BBCode kullanabilirsiniz.\r\n<p><br />\r\n[b]Bu metin bir kalın yazıdır.[/b]<br />\r\n&nbsp;&nbsp;&nbsp;<b>Bu metin bir kalın yazıdır.</b>\r\n<p>\r\n[i]Bu metin bir eğik (italic) yazıdır.[/i]<br />\r\n&nbsp;&nbsp;&nbsp;<i>Bu metin bir eğik (italic) yazıdır.</i>\r\n<p>\r\n[u]Bu metnin altı çizilmiştir.[/u]<br />\r\n&nbsp;&nbsp;&nbsp;<u>Bu metnin altı çizilmiştir.</u>\r\n<p><br />\r\n[url]https://www.siteadi.com/[/url]<br />\r\n&nbsp;&nbsp;&nbsp;<a href=\"https://www.siteadi.com/\">https://www.siteadi.com/</a>\r\n<p>\r\n[url=https://www.siteadi.com/]Sideadi.com[/url]<br />\r\n&nbsp;&nbsp;&nbsp;<a href=\"https://www.siteadi.com/\">Siteadi.com</a>\r\n<p>\r\n[email]ornek@ornekmail.com[/email]<br />\r\n&nbsp;&nbsp;&nbsp;<a href=\"mailto:ornek@ornekmail.com\">ornek@ornekmail.com</a>\r\n<p>\r\n[email=ornek@ornekmail.com]Bana E-Posta Gönder![/email]<br />\r\n&nbsp;&nbsp;&nbsp;<a href=\"mailto:ornek@ornekmail.com\">Bana E-Posta Gönder!</a>\r\n<p>\r\n[email=ornek@ornekmail.com?subject=konuadi]Konu Başlığı ile E-Posta[/email]<br />\r\n&nbsp;&nbsp;&nbsp;<a href=\"mailto:ornek@ornekmail.com?subject=konuadi\">Konu Başlığı ile E-Posta</a>\r\n<p><br />\r\n[quote]Alıntılanan metin burada olacak[/quote]<br />\r\n&nbsp;&nbsp;&nbsp;<quote>Alıntılanan metin burada olacak</quote>\r\n<p>\r\n[code]Biçilendirilmiş metin burada [Kod] [/code]<br />\r\n&nbsp;&nbsp;&nbsp;<code>Biçilendirilmiş metin burada [Kod]</code>\r\n<p><br />\r\n[img]https://secure.php.net/images/php.gif[/img]<br />\r\n&nbsp;&nbsp;&nbsp;<img src=\"https://secure.php.net/images/php.gif\">\r\n<p>\r\n[img=50x50]https://secure.php.net/images/php.gif[/img]<br />\r\n&nbsp;&nbsp;&nbsp;<img src=\"https://secure.php.net/images/php.gif\" width=\"50\" height=\"50\">\r\n<p><br />\r\n[color=red]Bu bir kırmızı renkte yazıdır.[/color]<br />\r\n&nbsp;&nbsp;&nbsp;<font color=\"red\">Bu bir kırmızı renkte yazıdır.</font>\r\n<p>\r\n[size=3]Bu metnin yazı boyutu 3 punto boyutundadır.[/size]<br />\r\n&nbsp;&nbsp;&nbsp;<font size=\"3\">Bu metnin yazı boyutu 3 punto boyutundadır.</font>\r\n<p>\r\n[font=Tahoma]Bu yazı tipi Tahoma[/font]<br />\r\n&nbsp;&nbsp;&nbsp;<font face=\"Tahoma\">Bu yazı tipi Tahoma</font>\r\n<p><br />\r\n[align=center]Bu yazı ortalanmış bir yazıdır.[/align]<div align=\"center\">Bu yazı ortalanmış bir yazıdır.</div>\r\n<p>\r\n[align=right]Bu yazı sağ tarafa hizalanmış bir yazıdır.[/align]<div align=\"right\">Bu yazı sağ tarafa hizalanmış bir yazıdır.</div>\r\n<p><br />\r\n[list]<br />\r\n[*]Liste Öğesi #1<br />\r\n[*]Liste Öğesi #2<br />\r\n[*]Liste Öğesi #3<br />\r\n[/list]<br />\r\n<ul>\r\n<li>Liste Öğesi #1</li>\r\n<li>Liste Öğesi #2</li>\r\n<li>Liste Öğesi #3</li>\r\n</ul><p><font size=1>Numaralı bir liste için [list=1] ve alfabetik bir liste için [list=a] kullanarak sıralı bir liste oluşturabilirsiniz.</size>', 1, 1, 3);";

$inserts[] = "INSERT INTO mybb_helpsections (sid, name, description, usetranslation, enabled, disporder) VALUES (1, 'Kullanıcı Hesap ve Temel Forum Kullanımı', 'Bir forum hesabını kullanmak ve yönetebilmek için temel bilgileri burada bulabilirsiniz..', 1, 1, 1);";
$inserts[] = "INSERT INTO mybb_helpsections (sid, name, description, usetranslation, enabled, disporder) VALUES (2, 'Konu ve Gönderi Yapma', 'Konu gönderme, konu yanıtlama ve forumun kullanımı ile ilgili temel bilgileri burada bulabilirsiniz.', 1, 1, 2);";

$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(1, 'Bug', 'images/icons/bug.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(2, 'Exclamation', 'images/icons/exclamation.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(3, 'Question', 'images/icons/question.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(4, 'Smile', 'images/icons/smile.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(5, 'Sad', 'images/icons/sad.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(6, 'Wink', 'images/icons/wink.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(7, 'Big Grin', 'images/icons/biggrin.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(8, 'Tongue', 'images/icons/tongue.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(9, 'Brick', 'images/icons/brick.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(10, 'Heart', 'images/icons/heart.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(11, 'Information', 'images/icons/information.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(12, 'Lightbulb', 'images/icons/lightbulb.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(13, 'Music', 'images/icons/music.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(14, 'Photo', 'images/icons/photo.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(15, 'Rainbow', 'images/icons/rainbow.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(16, 'Shocked', 'images/icons/shocked.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(17, 'Star', 'images/icons/star.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(18, 'Thumbs Down', 'images/icons/thumbsdown.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(19, 'Thumbs Up', 'images/icons/thumbsup.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(20, 'Video', 'images/icons/video.png');";

$inserts[] = "INSERT INTO mybb_profilefields (fid, name, description, disporder, type, regex, length, maxlength, required, registration, profile, postbit, viewableby, editableby, postnum) VALUES (1, 'Konum', 'Dünyanın neresinde yaşıyorsun?', 1, 'text', '', 0, 255, 0, 0, 1, 0, -1, -1, 0);";
$inserts[] = "INSERT INTO mybb_profilefields (fid, name, description, disporder, type, regex, length, maxlength, required, registration, profile, postbit, viewableby, editableby, postnum) VALUES (2, 'Bio', 'Kendiniz, hayat hikayeniz vb. hakkında birkaç kısa bilgi girin.', 2, 'textarea', '', 0, 0, 0, 0, 1, 0, -1, -1, 0);";
$inserts[] = "INSERT INTO mybb_profilefields (fid, name, description, disporder, type, regex, length, maxlength, required, registration, profile, postbit, viewableby, editableby, postnum) VALUES (3, 'Cinsiyet', 'Lütfen aşağıdaki listeden cinsiyetinizi seçiniz.', 3, 'select\nBelirtmek İstemiyorum\nErkek\nKadın\nDiğer', '', 0, 0, 0, 0, 1, 0, -1, -1, 0);";

$inserts[] = "INSERT INTO mybb_questions (qid, question, answer, shown, correct, incorrect, active) VALUES(1, '2+2 Kaç Eder?', '4\nDört\ndört', 0, 0, 0, 1);";


$inserts[] = "INSERT INTO mybb_reportreasons (rid, title, appliesto, extra, disporder) VALUES(1, '<lang:report_reason_other>', 'all', 1, 99);";
$inserts[] = "INSERT INTO mybb_reportreasons (rid, title, appliesto, extra, disporder) VALUES(2, '<lang:report_reason_rules>', 'all', 0, 1);";
$inserts[] = "INSERT INTO mybb_reportreasons (rid, title, appliesto, extra, disporder) VALUES(3, '<lang:report_reason_bad>', 'all', 0, 2);";
$inserts[] = "INSERT INTO mybb_reportreasons (rid, title, appliesto, extra, disporder) VALUES(4, '<lang:report_reason_spam>', 'all', 0, 3);";
$inserts[] = "INSERT INTO mybb_reportreasons (rid, title, appliesto, extra, disporder) VALUES(5, '<lang:report_reason_wrong>', 'post', 0, 4);";

$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(1, 'Smile', ':)', 'images/smilies/smile.png', 1, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(2, 'Wink', ';)', 'images/smilies/wink.png', 2, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(3, 'Cool', ':cool:', 'images/smilies/cool.png', 3, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(4, 'Big Grin', ':D', 'images/smilies/biggrin.png', 4, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(5, 'Tongue', ':P', 'images/smilies/tongue.png', 5, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(6, 'Rolleyes', ':rolleyes:', 'images/smilies/rolleyes.png', 6, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(7, 'Shy', ':shy:', 'images/smilies/shy.png', 7, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(8, 'Sad', ':(', 'images/smilies/sad.png', 8, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(9, 'At', ':at:', 'images/smilies/at.png', 9, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(10, 'Angel', ':angel:', 'images/smilies/angel.png', 10, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(11, 'Angry', ':@', 'images/smilies/angry.png', 11, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(12, 'Blush', ':blush:', 'images/smilies/blush.png', 12, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(13, 'Confused', ':s', 'images/smilies/confused.png', 13, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(14, 'Dodgy', ':dodgy:', 'images/smilies/dodgy.png', 14, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(15, 'Exclamation', ':exclamation:', 'images/smilies/exclamation.png', 15, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(16, 'Heart', ':heart:', 'images/smilies/heart.png', 16, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(17, 'Huh', ':huh:', 'images/smilies/huh.png', 17, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(18, 'Idea', ':idea:', 'images/smilies/lightbulb.png', 18, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(19, 'Sleepy', ':sleepy:', 'images/smilies/sleepy.png', 19, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(20, 'Undecided', ':-/', 'images/smilies/undecided.png', 20, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(21, 'Cry', ':cry:', 'images/smilies/cry.png', 21, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(22, 'Sick', ':sick:', 'images/smilies/sick.png', 22, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(23, 'Arrow', ':arrow:', 'images/smilies/arrow.png', 23, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(24, 'My', ':my:', 'images/smilies/my.png', 24, 1);";

$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Google','Googlebot');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Bing','bingbot');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Alexa Internet','ia_archiver');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Ask.com','Teoma');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Baidu','Baiduspider');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Yandex','YandexBot');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Facebook','facebookexternalhit');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Twitter','Twitterbot');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Internet Archive','archive.org_bot');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Discord','Discordbot');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Applebot','Applebot');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('CheckHost','CheckHost');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Pingdom','Pingdom.com_bot');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('DuckDuckGo','DuckDuckBot');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('UptimeRobot','UptimeRobot');";

$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('1','calendar','<lang:group_calendar>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('2','editpost','<lang:group_editpost>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('3','forumbit','<lang:group_forumbit>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('4','forumjump','<lang:group_forumjump>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('5','forumdisplay','<lang:group_forumdisplay>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('6','index','<lang:group_index>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('7','error','<lang:group_error>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('8','memberlist','<lang:group_memberlist>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('9','multipage','<lang:group_multipage>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('10','private','<lang:group_private>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('11','portal','<lang:group_portal>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('12','postbit','<lang:group_postbit>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('13','posticons','<lang:group_posticons>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('14','showthread','<lang:group_showthread>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('15','usercp','<lang:group_usercp>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('16','online','<lang:group_online>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('17','moderation','<lang:group_moderation>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('18','nav','<lang:group_nav>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('19','search','<lang:group_search>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('20','showteam','<lang:group_showteam>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('21','reputation','<lang:group_reputation>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('22','newthread','<lang:group_newthread>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('23','newreply','<lang:group_newreply>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('24','member','<lang:group_member>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('25','warnings','<lang:group_warning>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('26','global','<lang:group_global>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('27','header','<lang:group_header>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('28','managegroup','<lang:group_managegroup>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('29','misc','<lang:group_misc>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('30','modcp','<lang:group_modcp>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('31','announcement','<lang:group_announcement>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('32','polls','<lang:group_polls>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('33','post','<lang:group_post>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('34','printthread','<lang:group_printthread>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('35','report','<lang:group_report>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('36','smilieinsert','<lang:group_smilieinsert>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('37','stats','<lang:group_stats>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('38','xmlhttp','<lang:group_xmlhttp>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('39','footer','<lang:group_footer>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('40','video','<lang:group_video>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('41','sendthread','<lang:group_sendthread>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('42','mycode','<lang:group_mycode>','1');";

$inserts[] = "INSERT INTO mybb_usertitles (utid, posts, title, stars, starimage) VALUES (1, 0, 'Çaylak Üye', 1, '');";
$inserts[] = "INSERT INTO mybb_usertitles (utid, posts, title, stars, starimage) VALUES (2, 1, 'Acemi Üye', 2, '');";
$inserts[] = "INSERT INTO mybb_usertitles (utid, posts, title, stars, starimage) VALUES (3, 50, 'Üye', 3, '');";
$inserts[] = "INSERT INTO mybb_usertitles (utid, posts, title, stars, starimage) VALUES (4, 250, 'Kıdemli Üye', 4, '');";
$inserts[] = "INSERT INTO mybb_usertitles (utid, posts, title, stars, starimage) VALUES (5, 750, 'Uzman Üye', 5, '');";
