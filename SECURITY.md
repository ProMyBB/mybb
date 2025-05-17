# MyBB'de Güvenlik

## MyBB'yi Güvenli Bir Şekilde Çalıştırmak İçin Öneriler

MyBB'yi güvenli bir şekilde çalıştırmak için öncelikle [MyBB Güvenlik](https://mybb.pro/forum-mybb-guvenlik) sayfasında paylaşılan güvenlik önlemlerini kullanın.<br/> Modern güvenlik önlemleri olan SSL (HTTPS) kullanmak, U2F/2FA yöntemlerini kullanmak ve sunucu taraflı güvenlik önlemlerinin alınması ve
karmaşık, güçlü şifre kullanımı gibi çeşitli temel güvenlik önlemlerini almanız gerekiyor. Ayrıca, MyBB'nin stabil ve güvenli bir şekilde çalışması için gerekli gereksinimleri karşıladığınızdan emin olun.

> [!NOTE]
> [MyBB İçin Gerekli Gereksinimler](https://mybb.pro/mybb-icin-gerekli-gereksinimler.html)<br />
> [MyBB Güvenlik Önlemleri](https://mybb.pro/forum-mybb-guvenlik)

## Güvenlik İhlali ve Kurtama 
Sistem açıklarını tespit etme, admin ve kullanıcı hesaplarının şifrelerini ele geçirilmiş olması durumunda bu şifreleri nasıl yenileyeceğinizi ve MyBB tabanlı forumunuzda bir güvenlik ihlali olması durumunda yapmanız gerekenler ile ilgili dökümantasyonu aşağıda ki bağlantıda bulabilirsiniz.

>[MyBB Güvenlik İhlali Sonrası Yapılacaklar](https://mybb.pro/forum-mybb-guvenlik)


## Güvenlik Açıklarını Bildirme
MyBB'de tespit ettiğiniz güvenlik açıklarını bildirmek için [Açık Bildir](https://community.mybb.com/forum-135.html) adresinde konu açabilir ya da [security@mybb.com](mailto:security@mybb.com) veya [security@mybb.pro](mailto:security@mybb.pro) mail adreslerine tespit ettiğiniz güvenlik açıklarını bildirebilirsiniz.<br />
Türkçe olarak güvenlik açıklarını bildirmek için ise [MyBB Güvenlik Bildirimi](https://mybb.pro/forum-mybb-guvenlik-bildirimi) adlı forum kategorisini kullanarak tespit ettiğiniz güvenlik açıklarını bildirebilirsiniz.

## Bilinen Güvenlik Sorunları
### Yönetici Özeti

MyBB 1.x'in Yönetici Kontrol Paneli (Admin CP) tarafında, buraya erişimi olan üyeler tarafından gerçekleştirebilecek XSS saldırıları için güvenlik açıkların olduğunu biliyoruz. Yönetim Panelinde ki bazı ayarlar, input (veri girişi) alanları yapısı gereği HTML desteğine sahip olmak zorunda bundan dolayı bu alanlarda yetersiz kontrollerin olması, yetkisiz işlemleri engellemek için gereken kontrollerin tam olarak yapılamamasından kaynaklı XSS açıkları oluşmakta.<br />
Bu açıklar bilinen ve gelecek olan yeni çekirdek sürüm MyBB 1.9 ile bu açıkların önüne geçmeyi planlıyoruz. Yönetim panelinde kullanılan 3.parti kütüphaneler ve kullanım ömrü dolmuş eski ve işlevsiz bazı komutlar, kodlar XSS açıklarının oluşmasına neden olabilmekte.<br />

MyBB'nin basit şifre algoritmasında yaşanan kırılmalar, yetersiz yetki ve grup kontrolleri, eval() ifadelerinin yaygın kullanımı. MyCode yapısının XSS açığı oluşturabilme potansiyeli, ayrıştırma ve parse etme aşamasında ki kontrollerin yetersizliği gibi durumlarda bilinen XSS açıkları oluştuğu bilinmektedir.

__Belgelenmiş, ele alınmamış ve öngörülen güvenlik açıkları, veri ve sunucularda hasara ve/veya kayba yol açabilir ve forum yöneticilerinin ve son kullanıcılarının gizliliği, güvenliği ve/veya emniyeti için tehdit oluşturabilir.__

__Bu nedenle, yukarıda belirtilen sorunlar çözülene kadar hassas bilgilerin MyBB kullanılarak depolanmasını önermiyoruz.__ *(T.C kimlik numarası, kredi kartı bilgileri vb.)*

## Güvenlik Sorunları İle İlgi Teknik Detaylar

- [ACP XSS issues (#3126)](https://github.com/mybb/mybb/issues/3126)<br/>
MyBB serisi 1.x'ten 1.8.x'e kadar Yönetici Kontrol Panelini (ACP) etkileyen XSS güvenlik sorunları bulunmaktadır.
* eval()-based template system ([#3689](https://github.com/mybb/mybb/issues/3689))<br />
MyBB serisi 1.x'ten 1.8.x'e kadar, HTML Şablonlarını ve değişkenleri dinamik içerikle birleştirmek için eval() ifadelerini kullanır. İşlev çağrıları içerebilen Şablonlar, Admin CP'de oluşturma ve değiştirme sırasında reddedilirken, başka türlü hiçbir kontrol gerçekleştirilmez ve Şablonların alındığı forumun veritabanına yazma erişimi, bir saldırganın PHP kodunu yürütmesini sağlayabilir.

Ek olarak, Şablonlarda erişilebilen değişkenlerin erişim kapsamı sınırlı değildir, bu da kötü niyetli olarak hazırlanmış veya uygunsuz şekilde oluşturulmuş Temalar aracılığıyla hassas bilgilerin ifşa edilmesine yol açabilir.

## MyBB Sürüm Destekleri
| Version | Supported          |
| ------- | ------------------ |
| v1.8.x   | :white_check_mark: |
| v1.6   | :x:                |
