<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

/*********************************************************************************

 * Description:    Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 ********************************************************************************/

 
$mod_strings = array (
    'LBL_GOOD_FILE' => 'Veri Yükleme Dosyası Başarıyla Okundu',
    'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Hata nedeniyle kayıt(lar) atlandı',
    'LBL_UPDATE_SUCCESSFULLY' => 'Kayıt başarıyla güncellendi',
    'LBL_SUCCESSFULLY_IMPORTED' => 'Kayıt başarıyla yaratıldı',
    'LBL_STEP_4_TITLE' => 'Adım 4: Dosyadan Veri Yükle',
    'LBL_STEP_5_TITLE' => 'Adım 5: Sonuçları Göster',
    'LBL_CUSTOM_ENCLOSURE' => 'Alanları Nitelendiren:',
    'LBL_ERROR_UNABLE_TO_PUBLISH' => 'Yayınlanamıyor. Aynı isimle yayınlanmış başka bir Veri Yükleme eşleştirmesi var.',
    'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'Başka bir kullanıcıya ait eşleştirme yayından kaldırılamıyor. Siz de ayni isimli Veri Yükleme Eşleştirmesine sahipsiniz.',
    'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'Veri Yükleme bu modül tipi için düzenlenmedi',
    'LBL_IMPORT_TYPE' => 'Veri Yükleme Aksiyonu',
    'LBL_IMPORT_BUTTON' => 'Kayıtları Oluştur',
    'LBL_UPDATE_BUTTON' => 'Kayıtları Oluştur ve Güncelle',
    'LBL_CREATE_BUTTON_HELP' => 'Use this option to create new records. Note: Rows in the import file containing values that match the IDs of existing records will not be imported if the values are mapped to the ID field.',
    'LBL_UPDATE_BUTTON_HELP' => 'Use this option to update existing records. The data in the import file will be matched to existing records based on the record ID in the import file.',
    'LBL_ERROR_INVALID_BOOL'=>'Geçersiz değer (1 veya 0 olması gerekmektedir)',
    'LBL_NO_ID' => 'ID Zorunlu',
    'LBL_PRE_CHECK_SKIPPED' => 'Ön-Kontrol atlandı',
    'LBL_IMPORT_ERROR' => 'Veri Yükleme Hataları Oluştu',
    'LBL_ERROR' => 'Hata:',
    'LBL_NOLOCALE_NEEDED' => 'Yerel çevrim gerekmemektedir',
    'LBL_FIELD_NAME' => 'Alan Adı',
    'LBL_VALUE' => 'Değer',
    'LBL_ROW_NUMBER' => 'Satır Numarası',
    'LBL_NONE' => 'Boş',
    'LBL_REQUIRED_VALUE' => 'Zorunlu değer eksik',
    'LBL_ERROR_SYNC_USERS' => 'Invalid value to sync to Outlook: ',
    'LBL_ID_EXISTS_ALREADY' => 'ID zaten bu tabloda mevcut',
    'LBL_ASSIGNED_USER' => 'Eğer kullanıcı yok ise, şu anki kullanıcıyı kullan',
    'LBL_SHOW_HIDDEN' => 'Normal koşullarda Veri Yükleme yapılamayacak alanları göster',
    'LBL_UPDATE_RECORDS' => 'Verileri Yüklemek yerine, kayıtları güncelle (Geri Almak mümkün değil)',
    'LBL_TEST'=> 'Veri Yüklemeyi Test Et (veriyi saklama veya değiştirme)',
    'LBL_TRUNCATE_TABLE' => 'Veri Yükleme öncesinde tabloyu sil (bütün kayıtları sil)',
    'LBL_RELATED_ACCOUNTS' => 'İlişkili Müşterileri Oluşturma',
    'LBL_NO_DATECHECK' => 'Tarih kontrolünü atla (daha hızlı olmasına rağmen yanlış tarih durumunda hata oluşacak)',
    'LBL_NO_EMAILS' => 'E-Posta bilgilendirmelerini Veri Yükleme sırasında gönderme',
    'LBL_NO_PRECHECK' => 'Doğal Format modu',
    'LBL_STRICT_CHECKS' => 'Tam kuralseti kullan (E-Posta adreslerini ve telefonları da kontrol et)',
    'LBL_ERROR_SELECTING_RECORD' => 'Kayıt seçiminde hata:',
    'LBL_ERROR_DELETING_RECORD' => 'Kayıt siliminde hata:',
    'LBL_NOT_SET_UP' => 'Veri Yükleme bu modül tipi için düzenlenmedi',
    'LBL_ARE_YOU_SURE' => 'Emin misiniz? Bu işlem, bu modüldeki bütün verinin silinmesine neden olacak.',
    'LBL_NO_RECORD' => 'Güncellemek için bu ID\'ye sahip kayıt yok',
    'LBL_NOT_SET_UP_FOR_IMPORTS' => 'Veri Yükleme bu modül tipi için düzenlenmedi',
    'LBL_DEBUG_MODE' => '"Debug" modunda çalıştır',
    'LBL_ERROR_INVALID_ID' => 'ID alana sığamayacak kadar uzun (maksimum uzunluk 36 karakter)',
    'LBL_ERROR_INVALID_PHONE' => 'Geçersiz telefon numarası',
    'LBL_ERROR_INVALID_NAME' => '"String" sığamayacak kadar uzun',
    'LBL_ERROR_INVALID_VARCHAR' => '"String" sığamayacak kadar uzun',
    'LBL_ERROR_INVALID_DATE' => 'Geçersiz tarih "string"',
    'LBL_ERROR_INVALID_DATETIME' => 'Geçersiz tarih-saat',
    'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Geçersiz tarihsaat',
    'LBL_ERROR_INVALID_TIME' => 'Geçersiz saat',
    'LBL_ERROR_INVALID_INT' => 'Geçersiz tamsayı değeri',
    'LBL_ERROR_INVALID_NUM' => 'Geçersiz sayısal değer',
    'LBL_ERROR_INVALID_EMAIL'=>'Geçersiz E-Posta Adresi',
    'LBL_ERROR_INVALID_USER'=>'Geçersiz kullanıcı adı veya ID\'si',
    'LBL_ERROR_INVALID_TEAM' => 'Geçersiz takım adı veya ID\'si',
    'LBL_ERROR_INVALID_ACCOUNT' => 'Geçersiz müşteri adı veya ID',
    'LBL_ERROR_INVALID_RELATE' => 'Geçersiz iliskili alanlar',
    'LBL_ERROR_INVALID_CURRENCY' => 'Geçersiz para birimi değeri',
    'LBL_ERROR_INVALID_FLOAT' => 'Geçersiz kayan noktalı değer',
    'LBL_ERROR_NOT_IN_ENUM' => 'Değer listede bulunmuyor. Izin verilen değerler:',
    'LBL_NOT_MULTIENUM' => '"MultiEnum" değil',
    'LBL_IMPORT_MODULE_NO_TYPE' => 'Veri Yükleme bu modül tipi için düzenlenmedi',
    'LBL_IMPORT_MODULE_NO_USERS' => 'UYARI: Sistemde tanımlanmış kullanıcınız yok. Önce kullanıcıları eklemeden veri yükleme durumunda, bütün kayıtlar Sistem Yöneticisi tarafından sahip olunacak.',
    'LBL_IMPORT_MODULE_MAP_ERROR' => 'Yayınlanamıyor. Aynı isimde başka bir Veri Yükleme Eşleştirmesi yayınlanmış durumda.',
    'LBL_IMPORT_MODULE_MAP_ERROR2' => 'Başka bir kullanıcıya ait eşleştirme yayından kaldırılamıyor. Siz de aynı isimli Veri Yükleme Eşleştirmesine sahipsiniz.',
    'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'Dizin',
    'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => 'mevcut degil veya yazılamaz durumda.',
    'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'Dosya başarıyla yüklenemedi. php.ini dosyasındaki \'upload_max_filesize\' değeri çok küçük belirlenmiş olabilir',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'Dosya çok büyük. Maksimum:',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'Bytes. Change \'upload_maxsize\' in config.php',
    'LBL_MODULE_NAME' => 'Veri Yükle',
    'LBL_TRY_AGAIN' => 'Tekrar Dene',
    'LBL_START_OVER' => 'Start Over',
    'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'The import file contains {0} rows. The optimal number of rows is {1}. More rows may slow the import process. Click OK to continue importing. Click Cancel to revise and re-upload the import file.',
    'ERR_IMPORT_SYSTEM_ADMININSTRATOR'  => 'Sistem Yöneticisi kullanıcısini yükleyemezsiniz',
    'ERR_MULTIPLE' => 'Aynı alan ismiyle birden fazla kolon tanımlanmış durumda.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Doldurulması zorunlu alanlar eksik:',
    'ERR_MISSING_MAP_NAME' => 'Eksik standart dışı eşleştirme ismi',
    'ERR_SELECT_FULL_NAME' => 'Ad ve Soyad seçili iken, Tam Adı seçilemez',
    'ERR_SELECT_FILE' => 'Yüklemek için bir dosya seçiniz.',
    'LBL_SELECT_FILE' => 'Dosya Seçin:',
    'LBL_CUSTOM' => 'Özel',
    'LBL_CUSTOM_CSV' => 'Özel virgül ile ayrılmış dosya',
    'LBL_CSV' => 'Virgül ile ayrılmış dosya',
    'LBL_EXTERNAL_SOURCE' => 'an external application or service',
    'LBL_TAB' => 'Tab ile ayrılmış dosya',
    'LBL_CUSTOM_DELIMITED' => 'Özel ayrılmış dosya',
    'LBL_CUSTOM_DELIMITER' => 'Alanları Ayıran Karakter:',
    'LBL_FILE_OPTIONS' => 'Dosya opsiyonlari',
    'LBL_CUSTOM_TAB' => 'Özel sekme (tab) ile ayrılmış dosya',
    'LBL_DONT_MAP' => '-- Bu alanları eşleştirme --',
    'LBL_STEP_MODULE' => 'Which module do you want to import data into?',
    'LBL_STEP_1_TITLE' => 'Adım 1: Veri Kaynağı ve Veri Yükleme Aksiyonu seçin',
    'LBL_CONFIRM_TITLE' => 'Step {0}: Confirm Import File Properties',
    'LBL_CONFIRM_EXT_TITLE' => 'Step {0}: Confirm External Source Properties',
    'LBL_WHAT_IS' => 'Veri Kaynağı nedir?',
    'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
    'LBL_MICROSOFT_OUTLOOK_HELP' => 'The custom mappings for Microsoft Outlook rely on the import file being comma-delimited (.csv). If your import file is tab-delimited, the mappings will not be applied as expected.',
    'LBL_ACT' => 'Harekete Geç!',
    'LBL_SALESFORCE' => 'Salesforce.com',
    'LBL_MY_SAVED' => 'Kaydedilmiş Eşleştirmelerim:',
    'LBL_PUBLISH' => 'Yayınla',
    'LBL_DELETE' => 'Sil',
    'LBL_PUBLISHED_SOURCES' => 'Yayınlanmış Eşleştirmeler:',
    'LBL_UNPUBLISH' => 'Yayından Kaldır',
    'LBL_NEXT' => 'Sonraki >',
    'LBL_BACK' => '< Önceki',
    'LBL_STEP_2_TITLE' => 'Adım 2: Veri Yükleme dosyasını yükle',
    'LBL_HAS_HEADER' => 'Başlığı Var',
    'LBL_NUM_1' => '1.',
    'LBL_NUM_2' => '2.',
    'LBL_NUM_3' => '3.',
    'LBL_NUM_4' => '4.',
    'LBL_NUM_5' => '5.',
    'LBL_NUM_6' => '6.',
    'LBL_NUM_7' => '7.',
    'LBL_NUM_8' => '8.',
    'LBL_NUM_9' => '9.',
    'LBL_NUM_10' => '10.',
    'LBL_NUM_11' => '11.',
    'LBL_NUM_12' => '12.',
    'LBL_NOTES' => 'Notlar:',
    'LBL_NOW_CHOOSE' => 'Şimdi Veri Yükleme için dosya seçiniz',
    'LBL_IMPORT_OUTLOOK_TITLE' => 'Microsoft Outlook 98 ve 2000 veriyi sisteme yüklemeye uygun olan "Virgül İle Ayrılmış" formatta aktarabilir. Outlook\'tan verileri aktarmak için aşağıdaki adımları uygulayın:',
    'LBL_OUTLOOK_NUM_1' => '"Outlook" uygulamasını başlat',
    'LBL_OUTLOOK_NUM_2' => '"Dosya" menüsünde "Veri Yükle ve Veri Çık ..." adımını seçin',
    'LBL_OUTLOOK_NUM_3' => '"Bir dosyaya çık"seçip Sonraki tuşuna basınız',
    'LBL_OUTLOOK_NUM_4' => '"Virgül ile Ayrılmış Değerler (Windows)" seçip "Sonraki" tuşuna basın.<br />Not: Veri çıkma uygulamasının kurulması gerektiğine dair uyarı gelebilir',
    'LBL_OUTLOOK_NUM_5' => '"Kontaklar" dizinini seçip, "Sonraki" tuşuna tıklayınız. Kontak kayıtları birden fazla dizinde ise, birden fazla seçim yapabilirsiniz',
    'LBL_OUTLOOK_NUM_6' => 'Bir dosya adi seçip "Sonraki" tuşuna tıklayınız',
    'LBL_OUTLOOK_NUM_7' => '"Bitir" tuşuna tıklayınız',
    'LBL_IMPORT_SF_TITLE' => 'Salesforce.com veriyi sisteme yüklemeye uygun olan "Virgül İle Ayrılmış Değerler" formatında aktarabilir. Salesforce.com\'dan verileri aktarmak için aşağıdaki adımları uygulayın:',
    'LBL_SF_NUM_1' => 'Internet tarayıcınızı açın ve http://www.salesforce.com adresine gidin, ardından, e-posta ve şifreniz ile giriş yapın',
    'LBL_SF_NUM_2' => 'Yukarıdaki menüde "Raporlar" başlığına tıklayınız',
    'LBL_SF_NUM_3' => 'Müşterileri aktarmak için: "Active Accounts" link\'ine tıklayın<br />"Kontakları aktarmak için: "Postalama" link\'ine tıklayın',
    'LBL_SF_NUM_4' => '"Adım 1: Rapor tipini seçin" üzerinde "Tabular Rapor" \'u seçip "Next" tuşuna basın',
    'LBL_SF_NUM_5' => '"Adım 2: Rapor kolonlarını seçin", aktarmak istediginiz kolonlari seçip "Sonraki" tuşuna basın',
    'LBL_SF_NUM_6' => '"Adım 3: Özetlenecek bilgiyi seçin" üzerinde, yalnızca "Sonraki" tuşuna basın',
    'LBL_SF_NUM_7' => '"Adım 4: Rapor kolonlarını sıralayın" üzerinde, sadece "Sonraki" tuşuna basın',
    'LBL_SF_NUM_8' => '"Adım 5: Rapor kriterini seçin" üzerinde, "Başlangıç Tarihi" altında, bütün Müşterilerinizi içerecek kadar eski bir tarihi seçin. Ayrıca daha detaylı kriterler ile müşterilerinizin bir kısmını seçebilirsiniz. Tamamladığınızda, "Raporu Çalıştır" tuşuna basın',
    'LBL_SF_NUM_9' => 'Bir rapor üretilerek, sayfada "Rapor Üretme Durumu: Tamamlandı." görünecek. Şimdi "Excel\'e veri çık" tuşuna basın',
    'LBL_SF_NUM_10' => '"Rapora veri çık"seçeneğinde, "Dosya Formatına Veri çık" için "Virgülle Ayrılan.csv" formatını seçin. "Veri çık" tuşuna basın.',
    'LBL_SF_NUM_11' => 'Çıktı dosyasını bilgisayarınıza kaydetmek için bir pencere açılacak.',
    'LBL_IMPORT_ACT_TITLE' => 'Harekete Geç! veriyi sisteme yüklemeye uygun olan "Virgül İle Ayrılmış" formatta aktarabilir. Harekete Geç! uygulamasından verileri aktarmak için aşağıdaki adımları uygulayın:',
    'LBL_ACT_NUM_1' => '"Harekete Geç!" Başlat',
    'LBL_ACT_NUM_2' => '"Dosya" menüsünü seç, "Veri DeğişTokuşu" menü opsiyonunu seçin, ve daha sonra "Veri çık..." menü opsiyonuna girin',
    'LBL_ACT_NUM_3' => 'Dosya türü olarak "Metin-Ayrımı"seçin',
    'LBL_ACT_NUM_4' => 'Çıktı dosyası için lokasyon ve dosya ismi belirleyerek "Sonraki" tuşuna basın',
    'LBL_ACT_NUM_5' => '"Sadece Kontak Kayıtları" \'nı seçin',
    'LBL_ACT_NUM_6' => '"Opsiyonlar..." tuşuna tıklayın',
    'LBL_ACT_NUM_7' => 'Alan ayıraç karakteri olarak "Virgül" seçin',
    'LBL_ACT_NUM_8' => '"Evet, alan adlarını çıkın" opsiyonunu seçin ve "OK" tuşuna basın',
    'LBL_ACT_NUM_9' => '"Sonraki" tuşuna tıklayın',
    'LBL_ACT_NUM_10' => '"Tüm Kayıtlar" \'ı seçip "Bitir" tuşuna basın',
    'LBL_IMPORT_CUSTOM_TITLE' => 'Pek çok uygulama aşağıdaki adımları uygulayarak veriyi "Virgül İle Ayrılmış metin dosyası (.csv)" olarak üretmeye izin vermektedir:',
    'LBL_CUSTOM_NUM_1' => 'Uygulamayı başlatın ve veri dosyasını açın',
    'LBL_CUSTOM_NUM_2' => '"Farklı Kaydet..." veya "Veri Aktar..." menü adımını seçin',
    'LBL_CUSTOM_NUM_3' => 'Dosyayı  "CSV" veya "Virgülle Ayrılan Değerler" formatında kaydedin',
    'LBL_IMPORT_TAB_TITLE' => 'Pek çok uygulama aşağıdaki adımları uygulayarak veriyi "Sekme (Tab) İle Ayrılmış metin dosyası (.tsv or .tab)" olarak üretmeye izin vermektedir:',
    'LBL_TAB_NUM_1' => 'Uygulamayı başlatıp dosya menüsünü açın',
    'LBL_TAB_NUM_2' => '"Farklı Kaydet..." veya "Veri Aktar..." menü adımını seçin',
    'LBL_TAB_NUM_3' => 'Dosyayı "TSV"veya "Sekme ile Ayrılan Değerler" formatında kaydedin',
    'LBL_STEP_3_TITLE' => 'Adım 3: Alanları ve Veri Yüklemeyi onaylayın',
    'LBL_STEP_DUP_TITLE' => 'Step {0}: Check for Possible Duplicates',
    'LBL_SELECT_FIELDS_TO_MAP' => 'Aşağıdaki listede, veri yükleme dosyanızdaki alanlardan sisteme yüklenmesi gereken alanları seçiniz. Bitirdiginizde "Veri Yüklemeyi Şimdi Başlat" tuşuna basınız:',
    'LBL_DATABASE_FIELD' => 'Veritabani Alanı',
    'LBL_HEADER_ROW' => 'Başlık Satırı',
    'LBL_HEADER_ROW_OPTION_HELP' => 'Select if the top row of the import file is a Header Row containing field labels.',
    'LBL_ROW' => 'Satır',
    'LBL_SAVE_AS_CUSTOM' => 'Standard Dışı Eşleştirme Olarak Kaydet:',
    'LBL_SAVE_AS_CUSTOM_NAME' => 'Standard Dışı Eşleştirme İsmi:',
    'LBL_CONTACTS_NOTE_1' => 'Soyadı veya Tam Adı eşleştirilmelidir.',
    'LBL_CONTACTS_NOTE_2' => 'Eğer Tam Adı eşleştirildi ise, Adı ve Soyadı dikkate alınmaz.',
    'LBL_CONTACTS_NOTE_3' => 'Eger Tam Adı eşleştirildi ise, Ad ve Soyad ayrılarak veritabanına kayıt yazılacaktır.',
    'LBL_CONTACTS_NOTE_4' => 'Veritabanına yazılırken, Adres Sokak 2 ve Adres Sokak 3 alanları Asıl Adres Sokağı alanında birleştirilerek veritabanında kayıt yaratılacaktır.',
    'LBL_ACCOUNTS_NOTE_1' => 'Veritabanına yazılırken, Adres Sokak 2 ve Adres Sokak 3 alanları Asıl Adres Sokağı alanında birleştirilerek veritabanında kayıt yaratılacaktır.',
    'LBL_REQUIRED_NOTE' => 'Zorunlu Alan(lar):',
    'LBL_IMPORT_NOW' => 'Veri Yüklemeyi Şimdi Başlat',
    'LBL_' => '',
    'LBL_CANNOT_OPEN' => 'Yüklenen dosya okunmak üzere açılamıyor',
    'LBL_NOT_SAME_NUMBER' => 'Dosyanızın her satırında eşit sayıda alan yoktu',
    'LBL_NO_LINES' => 'Yüklediğiniz dosyada satır yok',
    'LBL_FILE_ALREADY_BEEN_OR' => 'Yüklenecek dosya zaten işlendi veya bulunamadı',
    'LBL_SUCCESS' => 'Başarılı:',
	'LBL_FAILURE' => 'Import Failed:',
    'LBL_SUCCESSFULLY' => 'Veriler Başarıyla Yüklendi',
    'LBL_LAST_IMPORT_UNDONE' => 'Son yüklemeniz geri alınmıştı.',
    'LBL_NO_IMPORT_TO_UNDO' => 'Geri alınacak herhangi bir yükleme yok.',
    'LBL_FAIL' => 'Başarısız:',
    'LBL_RECORDS_SKIPPED' => 'Bir veya daha fazla zorunlu alan olmadığı için kayıt(lar) atlandı',
    'LBL_IDS_EXISTED_OR_LONGER' => 'Id\'lerin zaten var olmasından veya 36 karakterden uzun olmasından dolayı, kayıt(lar) atlandı',
    'LBL_RESULTS' => 'Sonuçlar',
    'LBL_CREATED_TAB' => 'Created Records',
    'LBL_DUPLICATE_TAB' => 'Duplicates',
    'LBL_ERROR_TAB' => 'Errors',
    'LBL_IMPORT_MORE' => 'Daha fazla yükle',
    'LBL_FINISHED' => 'Dön:',
    'LBL_UNDO_LAST_IMPORT' => 'Son Yüklemeyi Geri Al',
    'LBL_LAST_IMPORTED'=>'Son Oluşturuldu',
    'ERR_MULTIPLE_PARENTS' => 'Yalnızca bir adet Üst ID tanımlayabilirsiniz',
    'LBL_DUPLICATES' => 'Aynı Olabilecek Kayıtlar Bulundu',
    'LNK_DUPLICATE_LIST' => 'Aynı Olabilecek Listesini İndirin',
    'LNK_ERROR_LIST' => 'Hatalı Kayıtların Listesini İndirin',
    'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Yüklenemeyen kayıtları indirin.',
    'LBL_UNIQUE_INDEX' => 'Aynı olabilecek kayıtların karşılatırması için indeks seç',
    'LBL_VERIFY_DUPS' => 'Aynı olabilecek girişleri seçilen indekslere göre doğrula',
    'LBL_INDEX_USED' => 'Kullanılan Indeks(ler):',
    'LBL_INDEX_NOT_USED' => 'Kullanılmayan Indeks(ler):',
    'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => 'File was not successfully uploaded.    Check the file permissions in your SuiteCRM installation cache directory.',
    'LBL_IMPORT_FIELDDEF_ID' => 'Tekil ID numarası',
    'LBL_IMPORT_FIELDDEF_RELATE' => 'İsim veya ID',
    'LBL_IMPORT_FIELDDEF_PHONE' => 'Telefon Numarası',
    'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'Takım Adı veya ID',
    'LBL_IMPORT_FIELDDEF_NAME' => 'Herhangi Bir Metin',
    'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Herhangi Bir Metin',
    'LBL_IMPORT_FIELDDEF_TEXT' => 'Herhangi Bir Metin',
    'LBL_IMPORT_FIELDDEF_TIME' => 'Saat',
    'LBL_IMPORT_FIELDDEF_DATE' => 'Tarih',
    'LBL_IMPORT_FIELDDEF_DATETIME' => 'TarihSaat',
    'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Kullanıcı Adı veya ID',
    'LBL_IMPORT_FIELDDEF_BOOL' => '\'0\' veya \'1\'',
    'LBL_IMPORT_FIELDDEF_ENUM' => 'Liste',
    'LBL_IMPORT_FIELDDEF_EMAIL' => 'E-Posta Adresi',
    'LBL_IMPORT_FIELDDEF_INT' => 'Sayısal (Ondalık Değil)',
    'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Sayısal (Ondalık Değil)',
    'LBL_IMPORT_FIELDDEF_NUM' => 'Sayısal (Ondalık Değil)',
    'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Sayısal (Ondalık İzin Veriliyor)',
    'LBL_IMPORT_FIELDDEF_FLOAT' => 'Sayısal (Ondalık İzin Veriliyor)',
    'LBL_DATE_FORMAT' => 'Tarih Formatı:',
    'LBL_TIME_FORMAT' => 'Saat Formatı:',
    'LBL_TIMEZONE' => 'Saat Dilimi:',
    'LBL_ADD_ROW' => 'Alan Ekle',
    'LBL_REMOVE_ROW' => 'Alan Kaldır',
    'LBL_DEFAULT_VALUE' => 'Varsayılan Değer',
    'LBL_SHOW_ADVANCED_OPTIONS' => 'Gelişmiş Opsiyonları Göster',
    'LBL_HIDE_ADVANCED_OPTIONS' => 'Gelişmiş Opsiyonları Gizle',
    'LBL_SHOW_NOTES' => 'Notlar',
    'LBL_HIDE_NOTES' => 'Hide Notes',
    'LBL_SHOW_PREVIEW_COLUMNS' => 'Önizleme Kolonlarını Göster',
    'LBL_HIDE_PREVIEW_COLUMNS' => 'Önizleme Kolonlarını Gizle',
    'LBL_SAVE_MAPPING_AS' => 'Eşleştirmeleri Farklı İsimle Kaydet',
    'LBL_OPTION_ENCLOSURE_QUOTE' => 'Tek Tırnak (\')',
    'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => 'Çift Tırnak (")',
    'LBL_OPTION_ENCLOSURE_NONE' => 'Boş',
    'LBL_OPTION_ENCLOSURE_OTHER' => 'Diğer:',
    'LBL_IMPORT_COMPLETE' => 'Veri Yükleme Tamamlandı',
    'LBL_IMPORT_COMPLETED' => 'Import Completed',
    'LBL_IMPORT_RECORDS' => 'Kayıtları Yüklüyor',
    'LBL_IMPORT_RECORDS_OF' => 'adedinin',
    'LBL_IMPORT_RECORDS_TO' => 'kadar',
    'LBL_CURRENCY' => 'Para Birimi',
	'LBL_CURRENCY_SIG_DIGITS' => 'Para Birimi Anlamlı Ondalık Kısmı',
    'LBL_NUMBER_GROUPING_SEP' => '1000\'ler ayıracı',
    'LBL_DECIMAL_SEP' => 'Ondalık Sembolü',
    'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Isim Gösterim Formatı',
    'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Örnek',
    'LBL_LOCALE_NAME_FORMAT_DESC' => '<i>"s" Hitap, "f" İsim, "l" Soyad</i>',
    'LBL_CHARSET' => 'Dosya Karakter Seti',
    'LBL_MY_SAVED_HELP' => 'Kaydedilmiş Eşleştirme belirli veri kaynağı için veritabanı alanları ile yükleme dosyası içindeki alanlar arasındaki eşleştirmeleri tanımlar.<br /><br />"Yayınla" tuşuna basarak eşleştirmenin diğer kullanıcılar tarafından da kullanılmasını sağlayabilirsiniz.<br /><br />"Yayından Kaldır" tuşuna basarak eşleştirmenin diğer kullanıcılar tarafından erişilmesini engelleyebilirsiniz.',
    'LBL_MY_SAVED_ADMIN_HELP' => 'Use this option to apply your pre-set import settings, including import properties, mappings, and any duplicate check settings, to this import.<br><br>Click <b>Publish</b> to make the mapping available to other users.<br>Click <b>Un-Publish</b> to make the mapping unavailable to other users.<br>Click <b>Delete</b> to delete a mapping for all users.',
    'LBL_MY_PUBLISHED_HELP' => 'Yayınlanmış Eşleştirme belirli veri kaynağı için veritabanı alanları ile yükleme dosyası içindeki alanlar arasındaki eşleştirmeleri tanımlar.',
    'LBL_ENCLOSURE_HELP' => '"Niteliyici Karakter" alan içeriğini, ayıraç karakteri de dahil olmak üzere kapsamak için kullanılmaktadır. Örneğin: Eğer ayıraç karakteri virgül (,) ise ve niteliyici karakter çift tırnak (") ise,"Cupertino, California" tek bir alan olarak yüklenip uygulamada "Cupertino, California" olarak görünecektir. Eğer niteliyici karakter olmaması durumunda, veya farklı bir karakter olması durumunda, "Cupertino, California" metni, "Cupertino" ve "California" olmak üzere iki bitişik alan olarak yüklenecektir. Not: Yüklenecek dosya herhangi bir niteliyici karakter barındırmayabilir. Excel\'de virgül veya tab ile ayrılmış olarak oluşturulan dosyalarda, varsayılan niteliyici karakter çift tırnak işaretidir.',
    'LBL_DELIMITER_COMMA_HELP' => 'Bu opsiyonu yüklenecek dosyadaki ayıraç karakterinin "virgül" olması durumunda, veya dosya uzantısı .csv ise seçin.',
    'LBL_DELIMITER_TAB_HELP' => 'Bu opsiyonu yüklenecek dosyadaki ayıraç karakterinin "SEKME" olması durumunda, veya dosya uzantısı .txt ise seçin',
    'LBL_DELIMITER_CUSTOM_HELP' => 'Bu opsiyonu yüklenecek dosyadaki ayıraç karakterinin virgül veya SEKME olmaması durumunda seçin ve karakteri bitişik alana girin.',
    'LBL_DATABASE_FIELD_HELP' => 'Veritabanında Modül için varolan bütün alanlardan birini seçin.',
    'LBL_HEADER_ROW_HELP' => 'Bunlar yüklenecek dosyanın başlık satırındaki alan başlıklarıdır.',
    'LBL_DEFAULT_VALUE_HELP' => 'Kayıt oluşturma veya güncelleme sırasında, yüklenen dosyada bir alan için değer olmaması durumunda kullanılacak değeri belirtin.',
    'LBL_ROW_HELP' => 'Yüklenecek dosyanın başlık olmayan ilk satırındaki veridir.',
    'LBL_SAVE_MAPPING_HELP' => 'Yüklenecek dosyadaki alanlar ile eşleştirilen veritabanı alanlarına grup ismi giriniz.<br />Bu grup alanları, Veri Yükleme Adım 1\'de seçilmiş olan veri kaynağı ve alanların sıralaması dahil olmak üzere, yükleme denemesinde kaydedilecek.<br />Kaydedilmiş eşleştirme Veri Yükleme Adım 1\'de başka bir yükleme için kullanılabilecek.',
    'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Verinin doğru yüklendiğinden emin olmak için, yüklenen dosyadaki ayarları belirtiniz. Bu ayarlar tercihlerinizi ezmeyecek. Oluşturulan veya güncellenen kayıtlar Hesabım sayfasında belirtilen ayarları içerecek.',
    'LBL_VERIFY_DUPLCATES_HELP' => 'Yüklenen dosyada aynı olabilecek kayıtların kontrolü için kullanılacak alanları seçin.<br />Eğer seçilen alanlardaki veri, var olan kayıtlardaki veri ile eşleşirse, aynı olabilecek değerleri içeren satırlar için yeni kayıt yaratılmayacak.<br />Aynı olabilecek alan verisi içeren satırlar Yükleme Sonucunda belirtilecek.',
    'LBL_IMPORT_STARTED' => 'Veri Yükleme Başladı:',
    'LBL_IMPORT_FILE_SETTINGS' => 'Veri Yükleme Dosya Ayarları',
    'LBL_RECORD_CANNOT_BE_UPDATED' => 'Kayıt yetki problemleri nedeniyle güncellenemedi',
    'LBL_DELETE_MAP_CONFIRMATION' => 'Are you sure you want to delete this saved set of import settings?',
    'LBL_THIRD_PARTY_CSV_SOURCES' => 'If the import file data was exported from any of the following sources, select which one.',
    'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'Select the source to automatically apply custom mappings in order to simplify the mapping process (next step).',
    'LBL_EXTERNAL_SOURCE_HELP' => 'Use this option to import data directly from an external application or service, such as Gmail.',
    'LBL_EXAMPLE_FILE' => 'Download Import File Template',
    'LBL_CONFIRM_IMPORT' => 'You have selected to update records during the import process. Updates made to existing records cannot be undone. However, records created during the import process can be undone (deleted), if desired. Click Cancel to select to create new records only, or click OK to continue.',
    'LBL_CONFIRM_MAP_OVERRIDE' => 'Warning: You have already selected a custom mapping for this import, do you want to continue?',
    'LBL_EXTERNAL_FIELD' => 'External Field',
    'LBL_SAMPLE_URL_HELP' => 'Download a sample import file containing a header row of the module fields. The file can be used as a template to create an import file containing the data that you would like to import.',
    'LBL_AUTO_DETECT_ERROR' => 'The field delimiter and qualifier in the import file could not be detected. Please verify the settings in the Import File Properties.',
    'LBL_MIME_TYPE_ERROR_1' => 'The selected file does not appear to contain a delimited list. Please check the file type. We recommend comma-delimited files (.csv).',
    'LBL_MIME_TYPE_ERROR_2' => 'To proceed with importing the selected file, click OK. To upload a new file, click Try Again',
    'LBL_FIELD_DELIMETED_HELP' => 'The field delimiter specifies the character used to separate the field columns.',
    'LBL_FILE_UPLOAD_WIDGET_HELP' => 'Select a file containing data that is separated by a delimiter, such as a comma- or tab- delimited file.  Files of the type .csv are recommended.',
    'LBL_EXTERNAL_ERROR_NO_SOURCE' => 'Unable to retrieve source adapter, please try again later.',
    'LBL_EXTERNAL_ERROR_FEED_CORRUPTED' => 'Unable to retrieve external feed, please try again later.',
    'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'Import cache directory is not writable.',
    'LBL_ADD_FIELD_HELP' => 'Use this option to add a value to a field in all records created and/or updated. Select the field and then enter or select a value for that field in the Default Value column.',
    'LBL_MISSING_HEADER_ROW' => 'No Header Row Found',
    'LBL_CANCEL' => 'Vazgeç',
    'LBL_SELECT_DS_INSTRUCTION' => 'Ready to start importing? Select the source of the data that you would like to import.',
    'LBL_SELECT_UPLOAD_INSTRUCTION' => 'Select a file on your computer that contains the data that you would like to import, or download the template to get a head start on creating the import file.',
    'LBL_SELECT_PROPERTY_INSTRUCTION' => 'Here is how the the first several rows of the import file appear with the detected file properties. If a header row was detected, it is displayed in the top row of the table. View the import file properties to make changes to the detected properties and to set additional properties. Updating the settings will update the data appearing in the table.',
    'LBL_SELECT_MAPPING_INSTRUCTION' => 'The table below contains all of the fields in the module that can be mapped to the data in the import file. If the file contains a header row, the columns in the file have been mapped to matching fields. Check the mappings to make sure that they are what you expect, and make changes, as necessary. To help you check the mappings, Row 1 displays the data in the file. Be sure to map to all of the required fields (noted by an asterisk).',
    'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'To avoid creating duplicate records, select which of the mapped fields you would like to use to perform a duplicate check while data is being imported. Values within existing records in the selected fields will be checked against the data in the import file. If matching data is found, the rows in the import file containing the data will be displayed along with the import results (next page). You will then be able to select which of these rows to continue importing.',
    'LBL_EXT_SOURCE_SIGN_IN' => 'Sign In',
    'LBL_DUP_HELP' => 'Here are the rows in the import file that were not imported because they contain data that matches values in existing records based on the duplicate check. The data that matches is highlighted. To re-import these rows, download the list, make changes and click <b>Import Again</b>.',
    'LBL_DESELECT' => 'deselect',
    'LBL_SUMMARY' => 'Özet',
    'LBL_OK' => 'Tamam',
    'LBL_ERROR_HELP' => 'Here are the rows in the import file that were not imported due to errors. To re-import these rows, download the list, make changes and click <b>Import Again</b>',
    'LBL_EXTERNAL_MAP_HELP' => 'The table below contains the fields in the external source and the module fields to which they are mapped. Check the mappings to make sure that they are what you expect, and make changes, as necessary. Be sure to map to all of the required fields (noted by an asterisk).',
    'LBL_EXTERNAL_MAP_NOTE' => 'The import will be attempted for contacts within all Google Contacts groups.',
    'LBL_EXTERNAL_MAP_NOTE_SUB' => 'The User Names of the newly created users will be the Full Names of the Google Contact by default. The User Names can be changed after the user records are created.',
    'LBL_EXTERNAL_MAP_SUB_HELP' => 'Click <b>Import Now</b> to begin the import. Records will only be created for entries that include last names. Records will not be created for data identified as duplicate based on names and/or email addresses matching existing records.',
    'LBL_EXTERNAL_FIELD_TOOLTIP' => 'This column displays the fields in the external source containing data that will be used to create new records.',
    'LBL_EXTERNAL_DEFAULT_TOOPLTIP' => 'Indicate a value to use for the field in the created record if the field in the external source contains no data.',
    'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'To assign the new records to a user other than yourself, use the Default Value column to select a different user.',
    'LBL_EXTERNAL_TEAM_TOOLTIP' => 'To assign the new records to teams other than your default team(s), use the Default Value column to select different teams.',
    'LBL_SIGN_IN_HELP' => 'To enable this service, please sign in under the External Accounts tab within your user settings page.'
);

global $timedate;
?>
