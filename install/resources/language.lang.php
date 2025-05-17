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
 * Last Update: 29.12.2024 (v1.8.38)
 */

/* Kurulum Paketi İçin Dil Satırları */
$l['none'] = 'Hiçbiri';
$l['not_installed'] = 'Yüklü Değil';
$l['installed'] = 'Yüklendi';
$l['not_writable'] = 'Yazılabilir Değil';
$l['writable'] = 'Yazılabilir';
$l['done'] = 'Tamamlandı';
$l['next'] = 'İleri';
$l['error'] = 'Hata';
$l['multi_byte'] = 'Multi-Bayt';
$l['recheck'] = 'Tekrar Kontrol Et';

$l['title'] = "MyBB Kurulum Sihirbazı";
$l['welcome'] = 'Hoş Geldiniz';
$l['license_agreement'] = 'Lisans Sözleşmesi';
$l['req_check'] = 'Gereksinim Kontrolü';
$l['db_config'] = 'Veritabanı Yapılandırması';
$l['table_creation'] = 'Tablo Oluşturma';
$l['data_insertion'] = 'Veri Aktarma';
$l['theme_install'] = 'Tema Kurulumu';
$l['board_config'] = 'Forum Ayarları';
$l['admin_user'] = 'Yönetici Kullanıcı Hesabı';
$l['finish_setup'] = 'Kurulum Tamamlandı';
$l['upgrade_complete'] = 'Yükseltme Tamamlandı';

$l['table_population'] = 'Tablo Bilgileri';
$l['theme_installation'] = 'Tema Aktarma';
$l['create_admin'] = 'Yönetici Hesabı Oluştur';

$l['already_installed'] = "Sunucunuzda MyBB Zaten Yüklü";
$l['mybb_already_installed'] = "<p>MyBB {1} için kurulum sihirbazına hoş geldiniz. MyBB bu dizinde zaten yapılandırılmış olduğunu tespit etti.</p>
<p>Lütfen aşağıdan uygun bir eylem seçin:</p>

<div class=\"border_wrapper upgrade_note\" style=\"padding: 4px;\">
	<h3>Eski bir MyBB sürümünü kullanıyorsunuz. Mevcut MyBB kurulumunu {1} sürümüne yükseltin.<span style=\"font-size: 80%; color: maroon;\">(Önerilen)</span></h3>
	<p>Bu seçenek mevcut MyBB sürümünüzü MyBB {1} sürümüne yükseltecektir.</p>
	<p>Mevcut forum konularınızı, mesajlarınızı, kullanıcılarınızı ve diğer bilgilerinizi korumak istediğinizde bu seçeneği seçmelisiniz.</p>
	<form method=\"post\" action=\"upgrade.php\">
		<div class=\"next_button\"><input type=\"submit\" class=\"submit_button\" value=\"MyBB'yi {1} Sürümüne Yükselt &raquo;\" /></div>
	</form>
</div>

<div style=\"padding: 4px;\">
	<h3>MyBB'nin yeni bir kopyasını yükleyin.</h3>
	<p>Bu seçenek <span style=\"color: red;\">kurmuş olabileceğiniz mevcut MyBB kurulumlarını silecek</span> ve MyBB'nin yeni bir sürümünü sıfırdan tekrar yükleyecektir.</p>
	<p>Yeniden başlamak isterseniz mevcut MyBB kurulumunuzu tamamen silmek için bu seçeneği seçmelisiniz.</p>
	<form method=\"post\" action=\"index.php\" onsubmit=\"return confirm('MyBB yeni bir kopyasını yüklemek istediğinizden emin misiniz? Bu mevcut forumunuzu kalıcı olarak silecektir. BU IŞLEM GERI ALINAMAZ.');\">
		<input type=\"hidden\" name=\"action\" value=\"intro\" />
		<div class=\"next_button\"><input type=\"submit\" class=\"submit_button\" value=\"MyBB {1} Kurulumunu Başlat &raquo;\" /></div>
	</form>
</div>";

$l['mybb_incorrect_folder'] = "<div class=\"border_wrapper upgrade_note\" style=\"padding: 4px;\">
	<h3>MyBB, \"Upload\" dizininden çalıştığını tespit etti.</h3>
	<p>Bunda yanlış bir şey olmamakla birlikte, dizinin kendisini değil \"Upload\" dizininin içeriğini yüklemeniz önerilir.<br /><br />Daha fazla bilgi için lütfen <a href=\"https://mybb.pro/forum-mybb-yardim-belgeleri\" target=\"_blank\" rel=\"noopener\">MyBB Yardım Belgeleri</a>'ni inceleyin.</p>
</div>";

$l['welcome_step'] = '<p>MyBB {1} için Türkçe Kurulum sihirbazına hoş geldiniz. Bu sihirbaz sunucunuza MyBB\'nin bir kopyasını kuracak ve yapılandıracaktır.</p>
<p>Artık MyBB dosyalarını yüklediğinize göre, veritabanı ve ayarların oluşturulması ve içe aktarılması gerekir. Aşağıda, kurulum sırasında hangi aşamalardan geçileceğinin bir listesi bulunmaktadır.</p>
<ul>
	<li>MyBB gereksinimlerinin kontrol edilmesi.</li>
	<li>Veritabanı yapılandırılması.</li>
	<li>Veritabanı tablolarının oluşturulması.</li>
	<li>Varsayılan verilerin veritabanına eklenmesi.</li>
	<li>Varsayılan temalar ve şablonların içe aktarılması.</li>
	<li>Forumunuzu yönetmek için bir yönetici hesabı oluşturma.</li>
	<li>Temel forum ayarları yapılandırılması.</li>
</ul>
<p>Her adım başarıyla tamamlandıktan sonra, bir sonraki adıma geçmek için İleri\'ye tıklayın.</p>
<p>MyBB lisans sözleşmesini görüntülemek için "İleri"ye tıklayın.</p>
<p><input type="checkbox" name="allow_anonymous_info" value="1" id="allow_anonymous" checked="checked" /> <label for="allow_anonymous"> MyBB\'ye sunucu özellikleriniz hakkında anonim istatistikler gönderin.</label> (<a href="https://docs.mybb.com/1.8/install/anonymous-statistics/" style="color: #555;" target="_blank" rel="noopener"><small>MyBB\'ye hangi bilgiler gönderilir?</small></a>)</p>';

$l['license_step'] = '<div class="license_agreement">
{1}
</div>
<p><strong>İleri\'ye tıklayarak, yukarıdaki MyBB Lisans Sözleşmesi\'nde belirtilen şartları kabul etmiş olursunuz.</strong></p>';


$l['req_step_top'] = '<p>MyBB\'yi kurmadan önce, kurulum için minimum gereksinimleri karşıladığınızı kontrol etmeliyiz.</p>';
$l['req_step_reqtable'] = '<div class="border_wrapper">
			<div class="title">Gereksinim Kontrolü</div>
		<table class="general" cellspacing="0">
		<thead>
			<tr>
				<th colspan="2" class="first last">Gereksinimler</th>
			</tr>
		</thead>
		<tbody>
		<tr class="first">
			<td class="first">PHP Sürümü:</td>
			<td class="last alt_col">{1}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Desteklenen DB Uzantıları:</td>
			<td class="last alt_col">{2}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Desteklenen Çeviri Uzantıları:</td>
			<td class="last alt_col">{3}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">PHP XML Uzantıları:</td>
			<td class="last alt_col">{4}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Yapılandırma Dosyası (/inc/config.php):</td>
			<td class="last alt_col">{5}</td>
		</tr>
		<tr>
			<td class="first">Ayarlar Dosyası (/inc/settings.php):</td>
			<td class="last alt_col">{6}</td>
		</tr>
		<tr>
			<td class="first">Önbellek Dizini (/cache/):</td>
			<td class="last alt_col">{7}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Dosya Yüklemeleri Dizini (/uploads/):</td>
			<td class="last alt_col">{8}</td>
		</tr>
		<tr class="last">
			<td class="first">Avatar Yüklemeleri Dizini (/uploads/avatars/):</td>
			<td class="last alt_col">{9}</td>
		</tr>
		</tbody>
		</table>
		</div>';
$l['req_step_reqcomplete'] = '<p><strong>Tebrikler, MyBB\'yi sunucunuzda çalıştırmak için gereken gereksinimleri karşılıyorsunuz.</strong></p>
<p>Yükleme işlemine devam etmek için İleri\'ye tıklayın.</p>';

$l['req_step_span_fail'] = '<span class="fail"><strong>{1}</strong></span>';
$l['req_step_span_pass'] = '<span class="pass">{1}</span>';

$l['req_step_error_box'] = '<p><strong>{1}</strong></p>';
$l['req_step_error_phpversion'] = 'MyBB Çalıştırmak için PHP 5.2.0 veya üstü gerekir. Şu anda sizde {1} sürümü yüklü.';
$l['req_step_error_dboptions'] = 'MyBB, bir veya daha fazla uygun veritabanı uzantısının yüklenmesini gerektirir. Sunucunuz hiçbirinin mevcut olmadığını bildirdi.';
$l['req_step_error_xmlsupport'] = 'MyBB, PHP\'nin XML Veri İşleme desteği ile derlenmesini gerektirir. Daha fazla bilgi için lütfen <a href="http://www.php.net/xml" target="_blank" rel="noopener">PHP.net</a> adresine bakın.';
$l['req_step_error_configdefaultfile'] = 'Yapılandırma dosyası (inc/config.default.php) yeniden adlandırılamadı. Lütfen <u>config.default.php</u> dosyasını manuel olarak <u>config.php</u> olarak yeniden adlandırın veya <a href="https://mybb.pro/forum-mybb-turkce-destek" target="_blank" rel="noopener">MyBB.Pro Türkçe Destek</a> ile iletişime geçin.';
$l['req_step_error_configfile'] = 'Yapılandırma dosyası (inc/config.php) yazılabilir değil. Lütfen <a href="https://mybb.pro/mybb-dosya-izinleri-chmod-nasil-ayarlanir.html" target="_blank" rel="noopener">chmod</a> izinlerini dosyanın yazılmasına izin verecek şekilde ayarlayın.';
$l['req_step_error_settingsfile'] = 'Ayarlar dosyası (inc/settings.php) yazılabilir değil. Lütfen <a href="https://mybb.pro/mybb-dosya-izinleri-chmod-nasil-ayarlanir.html" target="_blank" rel="noopener">chmod</a> izinlerini dosyanın yazılmasına izin verecek şekilde ayarlayın.';
$l['req_step_error_cachedir'] = 'Önbellek dizini (/cache/) yazılabilir değil. Lütfen <a href="https://mybb.pro/mybb-dosya-izinleri-chmod-nasil-ayarlanir.html" target="_blank" rel="noopener">chmod</a> izinlerini yazılmasına izin verecek şekilde ayarlayın.';
$l['req_step_error_uploaddir'] = 'Yüklemeler dizini (/uploads/) yazılabilir değil. Lütfen <a href="https://mybb.pro/mybb-dosya-izinleri-chmod-nasil-ayarlanir.html" target="_blank" rel="noopener">chmod</a> izinlerini yazılmasına izin verecek şekilde ayarlayın.';
$l['req_step_error_avatardir'] = 'Avatarlar dizini (/uploads/avatars/) yazılabilir değil. Lütfen <a href="https://mybb.pro/mybb-dosya-izinleri-chmod-nasil-ayarlanir.html" target="_blank" rel="noopener">chmod</a> izinlerini yazılmasına izin verecek şekilde ayarlayın.';
$l['req_step_error_cssddir'] = 'CSS dizini (/css/) yazılabilir değil. Lütfen <a href="https://mybb.pro/mybb-dosya-izinleri-chmod-nasil-ayarlanir.html" target="_blank" rel="noopener">chmod</a> izinlerini yazılmasına izin verecek şekilde ayarlayın.';
$l['req_step_error_tablelist'] = '<div class="error">
<h3>Hata</h3>
<p>MyBB Gereksinimleri kontrolü aşağıdaki nedenlerden dolayı başarısız oldu. MyBB gereksinimlerini karşılamadığınız için MyBB kurulumu devam edemiyor. Lütfen aşağıdaki hataları düzeltin ve tekrar deneyin:</p>
{1}
</div>';


$l['db_step_config_db'] = '<p>Şimdi MyBB\'nin kullanacağı veritabanını ve veritabanı kimlik doğrulama ayrıntılarınızı yapılandırmanın zamanı geldi. Bu bilgilere sahip değilseniz, genellikle web barındırıcınızdan bu bilgileri edinebilirsiniz.</p>';
$l['db_step_config_table'] = '<div class="border_wrapper">
<div class="title">Veritabanı Yapılandırması</div>
<table class="general" cellspacing="0">
<tr>
	<th colspan="2" class="first last">Veritabanı Ayarları</th>
</tr>
<tr class="first">
	<td class="first"><label for="dbengine">Veritabanı Motoru:</label></td>
	<td class="last alt_col"><select name="dbengine" id="dbengine" onchange="updateDBSettings();">{1}</select></td>
</tr>
{2}
</table>
</div>
<p>Bu bilgilerin doğru olduğunu kontrol ettikten sonra devam etmek için ileri düğmesine tıklayın.</p>';

$l['database_settings'] = "Veritabanı Ayarları";
$l['database_path'] = "Veritabanı Yolu:";
$l['database_host'] = "Veritabanı Sunucusu:";
$l['database_user'] = "Veritabanı Kullanıcı Adı:";
$l['database_pass'] = "Veritabanı Şifresi:";
$l['database_name'] = "Veritabanı Adı:";
$l['table_settings'] = "Tablo Ayarları";
$l['table_prefix'] = "Tablo Ön Eki:";
$l['table_encoding'] = "Tablo Kodlaması:";

$l['db_step_error_config'] = '<div class="error">
<h3>Hata</h3>
<p>Sağladığınız veritabanı yapılandırma bilgilerinde bir veya daha fazla hata var gibi görünüyor:</p>
{1}
<p>Yukarıdakiler düzeltildikten sonra kuruluma devam edin.</p>
</div>';
$l['db_step_error_invalidengine'] = 'Geçersiz bir veritabanı motoru seçtiniz. Lütfen seçiminizi aşağıdaki listeden yapınız.';
$l['db_step_error_noconnect'] = 'Verilen kullanıcı adı ve parola ile \'{1}\' adresindeki veritabanı sunucusuna bağlanılamadı. Veritabanı sunucusu ve kullanıcı bilgilerinin doğru olduğundan emin misiniz?';
$l['db_step_error_nodbname'] = '\'{1}\' veritabanı seçilemedi. Veritabanının var olduğundan ve belirtilen kullanıcı adı ve şifrenşn veritabanına erişimi olduğundan emin misiniz?';
$l['db_step_error_missingencoding'] = 'Henüz bir kodlama seçmediniz. Lütfen devam etmeden önce bir kodlama seçtiğinizden emin olun. (Emin değilseniz \'UTF-8 Unicode\'u seçin)';
$l['db_step_error_sqlite_invalid_dbname'] = 'SQLite veritabanları için göreceli URL\'ler kullanamazsınız. SQLite veritabanınız için lütfen bir dosya sistemi yolu kullanın (örn: /home/kullanici/veritabani.db).';
$l['db_step_error_invalid_tableprefix'] = 'Bir tablo ön ekinde yalnızca alt çizgi (_) ve alfanümerik karakterler kullanabilirsiniz. Devam etmeden önce lütfen geçerli bir tablo ön eki kullanın.';
$l['db_step_error_tableprefix_too_long'] = 'Yalnızca 40 karakter veya daha kısa uzunlukta bir tablo ön eki kullanabilirsiniz. Lütfen devam etmeden önce daha kısa bir tablo ön eki kullanın.';
$l['db_step_error_utf8mb4_error'] = '\'4-Byte UTF-8 Unicode\' kodlaması MySQL 5.5.3 veya üstünü gerektirir. Lütfen MySQL sürümünüzle uyumlu bir kodlama seçin.';

$l['tablecreate_step_connected'] = '<p>Belirttiğiniz veritabanı sunucusuna ve veritabanına bağlantı başarılı bir şekilde gerçekleştirildi.</p>
<p>Veritabanı Motoru: {1} {2}</p>
<p>MyBB veritabanı tabloları şimdi oluşturulacaktır.</p>';
$l['tablecreate_step_created'] = '{1} Tablosu oluşturuluyor...';
$l['tablecreate_step_done'] = '<p>Tüm tablolar oluşturuldu, tabloları doldurmak için İleri\'ye tıklayın.</p>';

$l['populate_step_insert'] = '<p>Artık temel tablolar oluşturulduğuna göre, varsayılan verileri veritabanı tablolarının içine ekleme zamanı gelmiştir.</p>';
$l['populate_step_inserted'] = '<p>Varsayılan veriler veritabanındaki tablolara başarıyla eklenmiştir. Varsayılan MyBB teması ve şablon setlerini eklemek için İleri\'ye tıklayın.</p>';


$l['theme_step_importing'] = '<p>Varsayılan Tema ve şablon setleri yükleniyor...</p>';
$l['theme_step_imported'] = '<p>Varsayılan tema ve şablon setleri başarıyla eklenmiştir. Forumunuzun temel seçeneklerini yapılandırmak için İleri\'ye tıklayın.</p>';


$l['config_step_table'] = '<p>Artık forum siteniz için forum adı, forum URL, web sitenizin diğer ayrıntıları, "çerez" alanınız ve çerez yollarınız gibi temel ayarları yapılandırmanın zamanı geldi. Bu ayarlar gelecekte MyBB Admin Kontrol Paneli aracılığıyla kolayca değiştirilebilir.</p>
		<div class="border_wrapper">
			<div class="title">Forum Yapılandırması</div>
			<table class="general" cellspacing="0">
				<tbody>
				<tr>
					<th colspan="2" class="first last">Forum Detayları</th>
				</tr>
				<tr class="first">
					<td class="first"><label for="bbname">Forum Adı:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="bbname" id="bbname" value="{1}" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="bburl">Forum URL\'si (Sondaki eğik çizgi yok):</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="bburl" id="bburl" value="{2}" onkeyup="warnUser(this, \'
					Bu seçenek otomatik olarak ayarlanmıştır. Doğru değerden emin değilseniz değiştirmeyin, aksi takdirde forumunuzdaki bağlantılar bozulabilir.\')" onchange="warnUser(this, \'Bu seçenek otomatik olarak ayarlanmıştır. Doğru değerden emin değilseniz değiştirmeyin, aksi takdirde forumunuzdaki bağlantılar bozulabilir.\')" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Websitesi Detayları</th>
				</tr>
				<tr>
					<td class="first"><label for="websitename">Website Adı:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="websitename" id="websitename" value="{3}" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="websiteurl">Website URL:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="websiteurl" id="websiteurl" value="{4}" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Çerez Ayarları <a title="Ne Anlama Geliyor?" target="_blank" rel="noopener" href="https://mybb.pro/forum-mybb-yardim-belgeleri">(?)</a></th>
				</tr>
				<tr>
					<td class="first"><label for="cookiedomain">Çerez Etki Alanı (Domain):</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="cookiedomain" id="cookiedomain" value="{5}" onkeyup="warnUser(this, \'Bu seçenek otomatik olarak ayarlanmıştır. Doğru değerden emin değilseniz değiştirmeyin, aksi takdirde forumunuzda oturum açma veya kapatma işlemleri bozulabilir.\')" onchange="warnUser(this, \'Bu seçenek otomatik olarak ayarlanmıştır. Doğru değerden emin değilseniz değiştirmeyin, aksi takdirde forumunuzda oturum açma veya kapatma işlemleri bozulabilir.\')" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="cookiepath">Çerez Yolu:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="cookiepath" id="cookiepath" value="{6}" onkeyup="warnUser(this, \'Bu seçenek otomatik olarak ayarlanmıştır. Doğru değerden emin değilseniz değiştirmeyin, aksi takdirde forumunuzda oturum açma veya kapatma işlemleri bozulabilir.\')" onchange="warnUser(this, \'Bu seçenek otomatik olarak ayarlanmıştır. Doğru değerden emin değilseniz değiştirmeyin, aksi takdirde forumunuzda oturum açma veya kapatma işlemleri bozulabilir.\')" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">İletişim Bilgileri</th>
				</tr>
				<tr class="last">
					<td class="first"><label for="contactemail">İletişim E-Postası:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="contactemail" id="contactemail" value="{7}" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Güvenlik Ayarları</th>
				</tr>
				<tr class="last">
					<td class="first"><label for="acppin">Admin KP Güvenlik Kodu:</label><br />Admin panelinize girişte ekstra güvenlik önlemi oluşturmak için bir güvenlik kodu oluşturmanızı <strong>kesinlikle</strong> tavsiye ederiz.<br/>Eğer güvenlik kodunu ayarlamak istemiyorsanız bu alanı boş bırakın. <br />Daha sonra ayarlamak isterseniz eğer yapılandırma dosyanız olan <strong>/inc/config.php</strong> dosyasından güvenlik kodu satırını düzenleyebilirsiniz.</td>
					<td class="last alt_col"><input type="password" class="text_input" name="pin" id="acppin" value="" /></td>
				</tr>
				</tbody>
			</table>
		</div>

	<p>Yukarıdaki bilgileri doğru bir şekilde girdikten ve devam etmeye hazır olduktan sonra İleri\'ye tıklayın.</p>';

$l['config_step_error_config'] = '<div class="error">
<h3>Hata</h3>
<p>Sağladığınız forum yapılandırmasında bir veya daha fazla hata var gibi görünüyor:</p>
{1}
<p>Yukarıda hataları düzeltildikten sonra kuruluma devam edebilirsiniz.</p>
</div>';
$l['config_step_error_url'] = 'Forumunuz için bir URL adresi girmediniz.';
$l['config_step_error_name'] = 'Forumunuz için bir isim/ad girmediniz.';
$l['config_step_revert'] = 'Bu ayarı orijinal değerine geri döndürmek için tıklayın.';


$l['admin_step_setupsettings'] = '<p>Temel forum ayarları yapılandırılıyor...</p>';
$l['admin_step_insertesettings'] = '<p>{2} adlı ayar grubuna {1} adet ayar eklendi.</p>
<p>Ayarlar kullanıcının tanımladığı değerlerle güncellendi.</p>';
$l['admin_step_insertedtasks'] = '<p>{1} adet zamanlanmış görev eklendi.</p>';
$l['admin_step_insertedviews'] = '<p>{1} adet yönetici hesabı eklendi.</p>';
$l['admin_step_createadmin'] = '<p>Forumunuza giriş yapmanız ve yönetmeniz için bir yönetici hesabı oluşturmanız gerekiyor. Bu hesabı oluşturmak için lütfen aşağıdaki gerekli alanları doldurun.</p>';
$l['admin_step_admintable'] = '<div class="border_wrapper">
			<div class="title">Yönetici Hesap Bilgileri</div>

		<table class="general" cellspacing="0">
		<thead>
		<tr>
			<th colspan="2" class="first last">Hesap Ayrıntıları</th>
		</tr>
		</thead>
		<tr class="first">
			<td class="first"><label for="adminuser">Kullanıcı Adı:</label></td>
			<td class="alt_col last"><input type="text" class="text_input" name="adminuser" id="adminuser" value="{1}" /></td>
		</tr>
		<tr class="alt_row">
			<td class="first"><label for="adminpass">Şifre:</label></td>
			<td class="alt_col last"><input type="password" class="text_input" name="adminpass" id="adminpass" value="" autocomplete="off" onchange="comparePass()" /></td>
		</tr>
		<tr class="last">
			<td class="first"><label for="adminpass2">Şifre Tekrar:</label></td>
			<td class="alt_col last"><input type="password" class="text_input" name="adminpass2" id="adminpass2" value="" autocomplete="off" onchange="comparePass()"  /></td>
		</tr>
		<tr>
			<th colspan="2" class="first last">İletişim Bilgileri</th>
		</tr>
		<tr class="first last">
			<td class="first"><label for="adminemail">E-Posta Adresi:</label></td>
			<td class="alt_col last"><input type="text" class="text_input" name="adminemail" id="adminemail" value="{2}" /></td>
		</tr>
	</table>
	</div>

	<p>Yukarıdaki bilgileri doğru bir şekilde girdikten ve devam etmeye hazır olduktan sonra İleri\'ye tıklayın.</p>';

$l['admin_step_error_config'] = '<div class="error">
<h3>Hata</h3>
<p>Sağladığınız forum ayarlarında bir veya daha fazla hata var gibi görünüyor:</p>
{1}
<p>Yukarıda hatalar düzeltildikten sonra kuruluma devam edebilirsiniz.</p>
</div>';
$l['admin_step_error_nouser'] = 'Yönetici hesabınız için bir kullanıcı adı girmediniz.';
$l['admin_step_error_nopassword'] = 'Yönetici hesabınız için bir şifre girmediniz.';
$l['admin_step_error_nomatch'] = 'Girdiğiniz şifreler eşleşmiyor.';
$l['admin_step_error_noemail'] = 'Yöneticinin hesabı için e-posta adresinizi girmediniz.';
$l['admin_step_nomatch'] = 'Tekrar yazılan şifre ilk girilen şifreyle eşleşmiyor. Lütfen devam etmeden önce düzeltin.';

$l['done_step_usergroupsinserted'] = "<p>Kullanıcı grupları içe aktarıldı.";
$l['done_step_admincreated'] = '<p>Yönetici hesabı oluşturuldu.';
$l['done_step_adminoptions'] = '<p>Yönetici izinleri ayarlandı.';
$l['done_step_cachebuilding'] = '<p>Veri önbellekleri oluşturuldu.';
$l['done_step_success'] = '<p class="success">Tebrikler, MyBB\'nin bir kopyası başarıyla kuruldu ve doğru bir şekilde yapılandırıldı.</p>
<p><a href="https://mybb.com" target="_blank" title="MyBB Resmi Sitesi" rel="noopener"><strong>MyBB Group</strong></a> tarafından geliştirilen ve <a href="https://mybb.pro" target="_blank" title="MyBB Türkçe Destek Forumu" rel="noopener"><strong>MyBB.Pro</strong></a> tarafından Türkçe\'ye çevrilen ve dünyanın en çok tercih edilen açık kaynaklı ücretsiz forum yazılımı olan MyBB\'yi tercih ettiğiniz teşekkür ederiz.</p>
<p>MyBB ile ilgili yaşadığınız her türlü soru ve sorunda MyBB\'nin Türkçe Destek sitesi olan MyBB.Pro\'dan destek alabilirsiniz. [<a href="https://mybb.pro/forum-mybb-turkce-destek" target="_blank" rel="noopener" title="MyBB Türkçe Destek">MyBB Türkçe Destek</a>]</p>
<p>MyBB Türkçe çevirisinde hata, sorun, eksik veya yanlış çeviri tespit etmeniz halinde lütfen MyBB.Pro üzerinden çeviri hatası bildiriminde bulunun. [<a href="https://mybb.pro/forum-ceviri-hatasi-ve-sorun-bildirimi" target="_blank" rel="noopener" title="MyBB Türkçe Çeviri Hatası ve Sorun Bildirimi">Çeviri Hatası ve Sorun Bildirimi</a>]</p>';
$l['done_step_locked'] = '<p>MyBB kurulum sihirbazı kilitlendi. MyBB\'yi tekrar kurmak isterseniz eğer <strong>install</strong> klasörü içinde oluşturulan <span style="color:red"><strong>\'lock\'</strong></span> adlı dosyayı kaldırın. Dosyayı kaldırdığınız da MyBB kurulum sihirbazını tekrar çalıştırabilirsiniz.</p><p>Şimdi, forumunuzu görüntülemek için <a href="../index.php">Forum Ana Sayfası</a>\'na gidebilir veya forum ayarlarınızı yönetmek için <a href="../admin/index.php">Admin Kontrol Paneli</a>\'nize gidebilirsiniz.</p>';
$l['done_step_dirdelete'] = '<p><strong>ÖNEMLİ UYARI:<span style="color:red">MyBB kurulumundan sonra lütfen install adlı MyBB Kurulum klasörünü sitenizin ana dizininden kaldırın.</span></strong></p>';
$l['done_whats_next'] = '<div class="error"><p><strong>Başka bir forum yazılımından MyBB\'ye mi geçiş yapıyorsunuz?</strong></p><p>MyBB, çeşitli farklı popüler forum yazılımlarından birden fazla forumun kolayca birleştirilmesi için bir birleştirme sistemi sunar,MyBB\'ye kolay bir dönüşüm süreci sağlar. Eğer MyBB\'ye geçmek istiyorsanız, doğru yoldasınız! Daha fazla bilgi için <a target="_blank" rel="noopener" href="https://mybb.pro/forum-mybb-merge-sistemi">MyBB Merge Sistemi</a> sayfasına göz atın.</p>';

/* GÜNCELLEME PAKETİ İÇİN DİL SATIRLARI */
$l['upgrade'] = "MyBB Sürüm Yükseltme Sihirbazı";
$l['upgrade_not_needed'] = '<p>Bu sürüm için yükseltme işlemine gerek yoktur.</p><p>Bunun bir hata olabileceğini düşünüyorsanız, <a href="upgrade.php?force=1">yükseltmeyi zorlayabilirsiniz</a>. Aksi takdirde, yükleyiciyi kilitlemek için lütfen İleri\'ye basın.</p>';
$l['upgrade_welcome'] = "<p>MyBB {1} için sürüm yükseltme sihirbazına hoş geldiniz.</p><p>Devam etmeden önce, lütfen daha önce hangi MyBB sürümünü çalıştırdığınızı bildiğinizden emin olun, çünkü aşağıda bunu seçmeniz gerekecektir.</p><p><strong>Sürüm yükseltme işlemine başlamadan önce sitenizin tam bir yedeğini almanızı şiddetle tavsiye ederiz.</strong> Yükseltme sırasında oluşabilecek bir hatadan dolayı veri kaybını en aza indirmek ve eski çalışan sürüme geri dönebilmek için sitenizin yedeğini aldığınızdan ve bu yedeğin güvenli bir yerde sakladığınızdan emin olun. Aksi takdirde, sürüm yükseltme işlemine başlamanız halinde veri kaybınız olur ise geri dönüşü yoktur.</p><p>Yükseltme işleminin her adımında yalnızca <u>BİR KEZ İleri</u>'ye tıkladığınızdan emin olun. Forumunuzun boyutuna bağlı olarak sayfaların yüklenmesi biraz zaman alabilir.</p><p>Hazır olduğunuzda, lütfen aşağıdan eski sürümünüzü seçin ve devam etmek için İleri'ye tıklayın.</p>";
$l['upgrade_templates_reverted'] = 'Varsayılan Şablonlar Orijinaline Geri Döndürüldü.';
$l['upgrade_templates_reverted_success'] = "<p>Tüm varsayılan şablonlar başarılı bir şekilde bu sürümde yer alan yeni şablonlara geri döndürülmüştür. Yükseltme işlemine devam etmek için lütfen ileri tuşuna basın.</p>";
$l['upgrade_settings_sync'] = 'Ayarların Senkronizasyonu Tamamlandı.';
$l['upgrade_settings_sync_success'] = "<p>Forum ayarları MyBB'deki en son ayarlarla senkronize edildi.</p><p>{1} yeni ayar {2} yeni ayar grupları ile birlikte forumunuza eklenmiştir.</p><p>Yükseltmeyi tamamlamak için lütfen aşağıdaki ileri düğmesine tıklayın.</p>";
$l['upgrade_datacache_building'] = 'Veri Önbellekleri Yeniden Oluşturuldu.';
$l['upgrade_building_datacache'] = '<p>Önbellekler oluşturuluyor...';
$l['upgrade_continue'] = 'Devam etmek için lütfen ileri tuşuna basın';
$l['upgrade_locked'] = "<p>MyBB Sürüm Yükseltme Sihirbazı kilitlendi. Sürüm Yükseltme sihirbazını tekrar çalıştırmak isterseniz eğer <strong>install</strong> klasörü içinde oluşturulan <strong>'lock'</strong> adlı dosyayı kaldırın. Dosyayı kaldırdığınız da MyBB'nin Sürüm Yükseltme Sihirbazını tekrar çalıştırabilirsiniz.</p><p>Şimdi, forumunuzu görüntülemek için <a href=\"../index.php\">Forum Ana Sayfası</a>'na gidebilir veya forum ayarlarınızı yönetmek için <a href=\"../admin/index.php\">Admin Kontrol Paneli</a>'nize gidebilirsiniz.</p>";
$l['upgrade_removedir'] = '<p><strong>ÖNEMLİ UYARI:<span style="color:red">MyBB sürüm yükseltme işleminden sonra lütfen <strong>install</strong> adlı MyBB sürüm yükseltme klasörünü sitenizin ana dizininden kaldırın.</span></strong></p>';
$l['upgrade_congrats'] = "<p>Tebrikler, forumunuz MyBB {1} sürümüne başarıyla yükseltildi.</p>{2}
<p><strong>Yükseltme İşleminden Sonra Yapılması Gerekenler Nedir?</strong></p>
<ul><li>Bu yükseltme işlemi sırasında güncellenen tema şablonlarını bulmak için lütfen Admin Kontrol Panel'indeki 'Güncellenmiş Şablonları Bul' aracını kullanın.</li>
<li>Özel olarak oluşturulan bir MyBB teması kullanıyorsanız eğer yeni sürümde değişen tema şablonlarını ve tema kodlarını tespit edip, özel temanızda bu değişimleri yapmanız gerekiyor. Eğer, varsayılan MyBB temasını kullanıyorsanız ve değişikliklerin yapılmadığını tespit ettiyseniz eğer ilgili şablonları 'Orijinaline Çevir' aracını kullanarak güncelleyebilirsiniz.</li>
<li>Forumunuzun tüm fonksiyonlarının sorunsuz ve eksiksiz bir şekilde çalıştığından emin olun.</li>
<li>Forumunuzda bir veri kaybı olup olmadığını kontrol edin. Aktif olarak kullandığınız eklentilerin çalışıp, çalışmadığından emin olun.</li>
<li>Her türlü yardım ve destek için <a href=\"https://mybb.pro\" target=\"_blank\" rel=\"noopener\" title=\"MyBB Türkçe Destek Forumu\">MyBB.Pro Türkçe Destek</a> sitemizi ziyaret edebilir, destek talebinde bulunabilirsiniz.</li></ul>";
$l['upgrade_template_reversion'] = "Tema Şablonların Geri Döndürülmesi Hakkında";
$l['upgrade_template_reversion_success'] = "<p>Forumunuz yükseltmek için gerekli tüm veritabanı değişiklikleri başarıyla yapılmış ve tüm varsayılan tema şablonları güncel sürüme geri döndürülmüştür.</p><p>Bu yükseltme, tüm tema şablonlarının yükseltme paketinde bulunan yenileriyle değiştirilmesini gerektirir, bu nedenle lütfen ileri düğmesine tıklamadan önce yaptığınız tüm özel tema şablonlarını ve değişikliklerini yedekleyin.";
$l['upgrade_send_stats'] = "<p><input type=\"checkbox\" name=\"allow_anonymous_info\" value=\"1\" id=\"allow_anonymous\" checked=\"checked\" /> <label for=\"allow_anonymous\"> MyBB'ye sunucu özellikleriniz hakkında anonim istatistikler gönderin.</label> (<a href=\"https://docs.mybb.com/1.8/install/anonymous-statistics/\" style=\"color: #555;\" target=\"_blank\" rel=\"noopener\"><small>Hangi bilgiler gönderilir?</small></a>)</p>";

$l['please_login'] = "Lütfen Giriş Yapın";
$l['login'] = "Giriş Yap";
$l['login_desc'] = "Yükseltme işlemine başlamak için lütfen yönetici hesabınıza ait kullanıcı adınızı ve şifrenizi girin. Yükseltme işlemini gerçekleştirmek için geçerli bir forum yöneticisi olmanız gerekir.";
$l['login_username'] = "Kullanıcı Adı";
$l['login_password'] = "Şifre";
$l['login_password_desc'] = "Lütfen şifrelerin büyük/küçük harfe duyarlı olduğunu unutmayın.";

/* Hata mesajları */
$l['development_preview'] = "<div class=\"error\"><h2 class=\"fail\">Uyarı</h2><p>MyBB'nin bu sürümü bir geliştirme önizlemesidir ve yalnızca test amacıyla kullanılmalıdır.</p><p>Bu sürüm için eklentiler ve tema geliştirme dışında hiçbir resmi destek sağlanmayacaktır. Bu yüklemeye/yükseltmeye devam ederek riski kendiniz üstlenmiş olursunuz.</p></div>";
$l['locked'] = 'Kurulum & Yükseltme sihirbazı şu anda kilitli, devam etmek için lütfen \'lock\' dosyasını <strong>install</strong> dizininden kaldırın.';
$l['no_permision'] = "Bu işlemi gerçekleştirmek için izniniz yok. Yükseltme prosedürünü çalıştırabilmek için yönetici izinlerine ihtiyacınız vardır.<br /><br />Oturumu kapatmanız gerekiyorsa lütfen <a href=\"upgrade.php?action=logout&amp;logoutkey={1}\">buraya</a> tıklayın. Buradan yönetici hesabınızla tekrar giriş yapabileceksiniz.";
$l['no_theme_functions_file'] = 'Tema için gerekli olan fonksiyon dosyası bulunamadı. Tüm tema dosyalarının düzgün yüklendiğinden emin olun.';

$l['task_versioncheck_ran'] = "Sürüm kontrolü görevi başarıyla çalıştırıldı.";
$l['task_versioncheck_ran_errors'] = "Sürüm kontrolü için MyBB'ye bağlanılamadı.";
