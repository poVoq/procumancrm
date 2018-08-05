<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2016 Salesagility Ltd.
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
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array(
    'LBL_DELETE_USER_CONFIRM' => 'When the User record is deleted, the corresponding Employee record will also be deleted. After the user is deleted, any workflow definitions and reports involving the user might need to be updated.<br/><br/>' .
        'Deleting a User record cannot be undone.',
    'LBL_DELETE_GROUP_CONFIRM' => 'Grup Kullanıcısını silmek istediğinizden emin misiniz? Kullanıcı kaydını silmek için OK\'i tıklayın. OK\'i tıkladıktan sonra, Grup Kullanıcısına atanmış tüm kayıtları başka bir kullanıcıya atayabileceksiniz.',
    'LBL_DELETE_PORTAL_CONFIRM' => 'Bu Portal API kullanıcısını silmek istediğinizden emin misiniz? Kullanıcı kaydını silmek için Tamam\'ı tıklatın.',
    'Click OK to delete the User record.',

    'LNK_IMPORT_USERS' => 'Kullanıcı al',
    'ERR_DELETE_RECORD' => 'Müşteriyi silmek için bir kayıt nosu belirtilmelidir.',
    'ERR_EMAIL_INCORRECT' => 'Şifre yaratılabilmesi ve gönderilebilmesi için geçerli bir E-Posta temin edin.',
    'ERR_EMAIL_NO_OPTS' => '"Gelen E-Postalar" için optimum ayarlar bulunamadı.',
    'ERR_ENTER_CONFIRMATION_PASSWORD' => 'Lütfen şifre onayınızı girin.',
    'ERR_ENTER_NEW_PASSWORD' => 'Lütfen yeni şifrenizi girin.',
    'ERR_ENTER_OLD_PASSWORD' => 'Lütfen eski şifrenizi girin.',
    'ERR_IE_FAILURE1' => '[Geri Dönmek İçin Buraya Tıklayın]',
    'ERR_IE_FAILURE2' => 'E-Posta hesapına bağlanırken hata oluştu. Lütfen ayarlarınızı kontrol edip, tekrar deneyin.',
    'ERR_IE_MISSING_REQUIRED' => "\"Gelen E-Posta\" ayarlarında zorunlu bilgide eksiklik var. Lütfen ayarlarınızı gözden geçirip tekrar deneyiniz. Eğer \"Gelen E-Posta\" ayarlarını değiştiremiyorsanız, lütfen bu bölümdeki tüm alanları temizleyiniz.",
    'ERR_INVALID_PASSWORD' => 'Geçerli bir kullanıcı ve şifre girmelisiniz.',
    'ERR_NO_LOGIN_MOBILE' => 'Bu uygulamaya ilk bağlantınız mobil olmayan bir web tarayıcıdan veya normal modda tamamlanmalıdır. Lütfen tam web tarayıcısı ile dönün veya aşağıdaki normal link\'e tıklayın. Ortaya çıkan sorun nedeniyle özür dileriz.',
    'ERR_LAST_ADMIN_1' => 'Kullanıcı Adı "',
    'ERR_LAST_ADMIN_2' => 'sistem yöneticisi erişimine sahip son kullanıcıdır. En az bir kullanıcı sistem yöneticisi olmak zorundadır.',
    'ERR_PASSWORD_CHANGE_FAILED_1' => 'Kullanıcı şifresi değişikliği hatalı:',
    'ERR_PASSWORD_CHANGE_FAILED_2' => 'başarısız.     Yeni şifre tanımlanmalı.',
    'ERR_PASSWORD_CHANGE_FAILED_3' => '. Yeni şifre geçersiz.',
    'ERR_PASSWORD_INCORRECT_OLD_1' => 'Kullanıcı için mevcut şifre yanlış:',
    'ERR_PASSWORD_INCORRECT_OLD_2' => '. Şifre bilgisini tekrar giriniz.',
    'ERR_PASSWORD_MISMATCH' => 'Şifreler uyuşmuyor.',
    'ERR_PASSWORD_USERNAME_MISSMATCH' => 'Geçerli bir Kullanıcı Adı ve E-Posta Adresi belirtmek zorundasınız.',
    'ERR_PASSWORD_LINK_EXPIRED' => 'Link\'iniz zaman aşımına uğradı, lütfen yeni bir tane oluşturun',
    'ERR_REENTER_PASSWORDS' => 'Yeni Şifre ve Onay Şifreleri uyuşmuyor.',
    'ERR_REPORT_LOOP' => 'Sistem bir organizasyonel raporlama döngüsü farketti. Bir kullanıcı kendisine rapor edemez veya yöneticilerinden herhangi biri rapor edemez.',
    'ERR_RULES_NOT_MET' => 'Girmiş olduğunuz şifre, şifre ihtiyaçlarını karşılamamaktadır.  Lütfen tekrar deneyiniz.',
    'ERR_USER_INFO_NOT_FOUND' => 'Kullanıcı Bilgisi bulunamadı',
    'ERR_USER_NAME_EXISTS_1' => 'Kullanıcı Adı',
    'ERR_USER_NAME_EXISTS_2' => 'zaten mevcut.   Mevcut isim girişine izin verilmez.  Olmayan bir kullanıcı ismiyle değiştiriniz.',
    'ERR_USER_IS_LOCKED_OUT' => 'This user is locked out of the SuiteCRM application and cannot log in using his/her existing password.',

    'LBL_PASSWORD_SENT' => 'Şifre Güncellendi',
    'LBL_CANNOT_SEND_PASSWORD' => 'Şifre gönderilemiyor',
    'ERR_EMAIL_NOT_SENT_ADMIN' => 'Sistem talebinizi işleyemiyor. Lütfen kontrol edin:',
    'ERR_SMTP_URL_SMTP_PORT' => 'SMTP Sunucu URL ve Portu',
    'ERR_SMTP_USERNAME_SMTP_PASSWORD' => 'SMTP Kullanıcı Adı ve SMTP Şifresi',
    'ERR_RECIPIENT_EMAIL' => 'Alıcı E-Posta Adresi',
    'ERR_SERVER_STATUS' => 'Sunucunuzun Durumu',
    'ERR_SERVER_SMTP_EMPTY' => 'Sistem kullanıcıya E-Posta gönderemiyor. Lütfen E-Posta Ayarlarındaki Giden E-Posta Yapılandırma değerlerini kontrol ediniz.',

    'LBL_ADDRESS_CITY' => 'Adres Şehir',
    'LBL_ADDRESS_COUNTRY' => 'Adres Ülke',
    'LBL_ADDRESS_INFORMATION' => 'Adres Bilgisi',
    'LBL_ADDRESS_POSTALCODE' => 'Adres Posta Kodu',
    'LBL_ADDRESS_STATE' => 'Adres Eyalet',
    'LBL_ADDRESS_STREET' => 'Adres Sokak',
    'LBL_ADDRESS' => 'Adres',
    'LBL_ADMIN_USER' => 'Sistem Yöneticisi Kullanıcı',


    'LBL_ADMIN_DESC' => 'Kullanıcı Sistem Yönetimi sayfasındaki bütün kayıtlara ulaşabilir.',
    'LBL_REGULAR_DESC' => 'Kullanıcı modüllere ve kayıtlara roller temelinde ulaşabilir.',

    'LBL_PHOTO' => 'Resim',

    'LBL_ADMIN' => 'Sistem Yöneticisi',
    'LBL_ADVANCED' => 'Geliştirilmiş',
    'LBL_ANY_ADDRESS' => 'Adres:',
    'LBL_ANY_EMAIL' => 'E-Posta',
    'LBL_ANY_PHONE' => 'Telefon',
    'LBL_BUTTON_CREATE' => 'Oluştur',
    'LBL_BUTTON_EDIT' => 'Düzenle',
    'LBL_CALENDAR_OPTIONS' => 'Takvim Seçenekleri',
    'LBL_CHANGE_PASSWORD' => 'Üretilen Şifreyi Değiştir',
    'LBL_CHANGE_SYSTEM_PASSWORD' => 'Lütfen yeni bir şifre belirtin.',
    'LBL_CHANGE_PASSWORD_TITLE' => 'Şifre',
    'LBL_CHOOSE_A_KEY' => 'İzinsiz olarak takviminizin yayınlanmasını engellemek için bir anahtar seçiniz',
    'LBL_NO_KEY' => 'Key is not set. Please set key to enable publishing.',
    'LBL_CHOOSE_WHICH' => 'Gösterilecek sekmeleri seçiniz',
    'LBL_CITY' => 'Şehir',

    'LBL_CLEAR_BUTTON_TITLE' => 'Temizle',


    'LBL_CONFIRM_PASSWORD' => 'Şifreyi Onaylayın',
    'LBL_CONFIRM_REGULAR_USER' => 'Kullanıcı tipini Sistem Yöneticisinden Normal Kullanıcıya değiştirdiniz.  Bu değişikliği kaydettikten sonra, kullanıcı artık sistem yöneticisi haklarına sahip olmayacak.\n\n Devam etmek için OK tuşuna basın.\nİptal tuşuna basarak kayıda dönebilirsiniz.',
    'LBL_COUNTRY' => 'Ülke',
    'LBL_CURRENCY_TEXT' => 'Varsayılan para birimi seç',
    'LBL_CURRENCY' => 'Para Birimi',
    'LBL_CURRENCY_EXAMPLE' => 'Para Birimi Örnek Görüntüleme',
    'LBL_CURRENCY_SIG_DIGITS' => 'Para Birimi Ondalık Basamakları',
    'LBL_CURRENCY_SIG_DIGITS_DESC' => 'Para biriminde gösterilen ondalık basamak sayısı',
    'LBL_NUMBER_GROUPING_SEP' => '1000\'ler ayracı',
    'LBL_NUMBER_GROUPING_SEP_TEXT' => 'Binleri ayırmak için kullanılan karakter',
    'LBL_DECIMAL_SEP' => 'Ondalık Sembolü',
    'LBL_DECIMAL_SEP_TEXT' => 'Ondalık kısmı ayırmak için kullanılan karakter',
    'LBL_FDOW' => 'Haftanın İlk Günü',
    'LBL_FDOW_TEXT' => 'First Day displayed in Week, Month, and Year Views',
    'LBL_DATE_FORMAT_TEXT' => 'Tarih formatını belirtin',
    'LBL_DATE_FORMAT' => 'Tarih Formatı',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kullanıcılar',
    'LBL_DEPARTMENT' => 'Departman',
    'LBL_DESCRIPTION' => 'Tanım',
    'LBL_DISPLAY_TABS' => 'Sekmeleri Göster',
    'LBL_DOWNLOADS' => 'İndirilenler',
    'LBL_DST_INSTRUCTIONS' => '(+DST) Günışığı Koruma Zamanı uyumluluğunu gösterir',
    'LBL_EDIT_TABS' => 'Sekmeleri Düzenle',
    'LBL_EDIT' => 'Düzenle',
    'LBL_USER_HASH' => 'Şifre',
    'LBL_AUTHENTICATE_ID' => 'Doğrulama ID\'si',
    'LBL_ACCOUNT_NAME' => 'Müşteri İsmi',
    'LBL_USER_PREFERENCES' => 'Kullanıcı Tercihleri',
    'LBL_EXT_AUTHENTICATE' => 'Dışarıdaki Sistemden Otorizasyon',
    'LBL_EMAIL_OTHER' => 'E-Posta 2',
    'LBL_EMAIL' => 'E-Posta Adresi',
    'LBL_EMAIL_CHARSET' => 'Gönderilen E-Posta Karakter Seti',
    'LBL_EMAIL_EDITOR_OPTION' => 'Format oluştur',
    'LBL_EMAIL_GMAIL_DEFAULTS' => 'Gmail&#153; Varsaylan Ayarları İle Doldur',
    'LBL_EMAIL_LINK_TYPE' => 'E-Posta İstemcisi',

    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM Mail Client:</b> Send emails using the email client in the SuiteCRM application.<br><b>External Mail Client:</b> Send email using an email client outside of the SuiteCRM application, such as Microsoft Outlook.',

    'LBL_EMAIL_NOT_SENT' => 'Sistem talebinizi yerine getiremiyor. Lütfen sistem yöneticisine başvurun.',
    'LBL_EMAIL_PROVIDER' => 'E-posta sağlayıcısı',
    'LBL_EMAIL_SHOW_COUNTS' => 'E-Posta sayısını göster?',
    'LBL_EMAIL_SIGNATURE_ERROR1' => 'Bu imza bir isim gerektiriyor.',
    'LBL_EMAIL_SMTP_SSL' => 'SSL üzerinden SMTP\'yi aktif hale getir',
    'LBL_EMAIL_TEMPLATE_MISSING' => 'Kullanıcıya gönderilecek olan şifreyi içeren E-Posta için E-Posta şablonu seçilmedi. Lütfen Şifre Yönetimi (Password Management) sayfasında bir E-Posta şablonu seçiniz.',
    'LBL_EMPLOYEE_STATUS' => 'Çalışan Durumu',
    'LBL_EMPLOYEE_INFORMATION' => 'Çalışan Bilgileri',
    'LBL_ERROR' => 'Hata',
    'LBL_EXPORT_CHARSET' => 'Veri Yükleme/Veri Aktarma Karakter Seti',
    'LBL_EXPORT_CHARSET_DESC' => 'Yerel ayarlarınızda kullanılan karakter setini seçin.  Bu değer veri yüklemelerinde, giden E-Postalarda, .cvs veri aktarımlarında ve vCard oluşturulurken kullanılacaktır.',
    'LBL_EXPORT_DELIMITER' => 'Veri Aktarımı Ayracı',
    'LBL_EXPORT_DELIMITER_DESC' => 'Dışa aktarılan veri için ayraç karakter(lerini) belirtiniz.',
    'LBL_FAX_PHONE' => 'Faks',
    'LBL_FAX' => 'Faks',
    'LBL_FIRST_NAME' => 'Adı',
    'LBL_GENERATE_PASSWORD_BUTTON_KEY' => 'G',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Sistem Tarafından Üretilen Şifre',
    'LBL_GENERATE_PASSWORD_BUTTON_LABEL' => 'Şifre Sıfırla',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Şifre Sıfırla [Alt+G]',
    'LBL_GENERATE_PASSWORD' => 'Şifre Sıfırla',
    'LBL_GROUP_DESC' => 'Use for assigning items to a group (example: for Inbound Email).  This type cannot login through the SuiteCRM web interface.',
    'LBL_GROUP_USER_STATUS' => 'Grup Kullanıcısı',
    'LBL_GROUP_USER' => 'Grup Kullanıcısı',
    'LBL_HIDE_TABS' => 'Sekmeleri Gizle',
    'LBL_HOME_PHONE' => 'Ev Telefonu',
    'LBL_INBOUND_TITLE' => 'Müşteri Bilgisi',
    'LBL_IS_ADMIN' => 'Sistem Yöneticisi',
    'LBL_LANGUAGE' => 'Dil',
    'LBL_LAST_NAME' => 'Soyadı',
    'LBL_LAST_NAME_SLASH_NAME' => 'Soyad/Ad',
    'LBL_LAYOUT_OPTIONS' => 'Sayfa Düzeni Seçenekleri',
    'LBL_LDAP' => 'LDAP',
    'LBL_LDAP_AUTHENTICATION' => 'LDAP Kimlik Denetimi',
    'LBL_LIST_ACCEPT_STATUS' => 'Kabul Durumu',
    'LBL_LIST_ADMIN' => 'Sistem Yöneticisi',
    'LBL_LIST_DEPARTMENT' => 'Departman',
    'LBL_LIST_EMAIL' => 'E-Posta',
    'LBL_LIST_FORM_TITLE' => 'Kullanıcılar',
    'LBL_LIST_GROUP' => 'Grup',
    'LBL_LIST_LAST_NAME' => 'Soyadı',
    'LBL_LIST_MEMBERSHIP' => 'Üyelik',
    'LBL_LIST_NAME' => 'İsim',
    'LBL_LIST_PRIMARY_PHONE' => 'Asıl Telefon',
    'LBL_LIST_PASSWORD' => 'Şifre',
    'LBL_LIST_STATUS' => 'Durum',
    'LBL_LIST_TITLE' => 'Ünvan',
    'LBL_LIST_USER_NAME' => 'Kullanıcı Adı',
    'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'İsim Gösterme Formatı',
    'LBL_LOCALE_DESC_FIRST' => '[İlk]',
    'LBL_LOCALE_DESC_LAST' => '[Son]',
    'LBL_LOCALE_DESC_SALUTATION' => '[Önad]',
    'LBL_LOCALE_DESC_TITLE' => '[Başlık]',
    'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Örnek',
    'LBL_LOCALE_NAME_FORMAT_DESC' => 'İsimlerin nasıl gösterileceğini belirt.',
    'LBL_LOCALE_NAME_FORMAT_DESC_2' => '\\"s\\" Önad \\"f\\" İsim \\"I\\" Soyad',
    'LBL_SAVED_SEARCH' => 'Kayıtlı  Arama & Düzen',
    // LOGIN PAGE STRINGS
    'LBL_LOGIN_BUTTON_KEY' => 'L',
    'LBL_LOGIN_BUTTON_LABEL' => 'Giriş',
    'LBL_LOGIN_BUTTON_TITLE' => 'Giriş [Alt+L]',
    'LBL_LOGIN_WELCOME_TO' => 'Hoşgeldiniz',
    'LBL_LOGIN_OPTIONS' => 'Seçenekler',
    'LBL_LOGIN_FORGOT_PASSWORD' => 'Şifrenizi mi unuttunuz?',
    'LBL_LOGIN_SUBMIT' => 'Gönder',
    'LBL_LOGIN_ATTEMPTS_OVERRUN' => 'Çok fazla başarısız oturum açma girişimleri.',
    'LBL_LOGIN_LOGIN_TIME_ALLOWED' => 'Girişi tekrar deneyebileceğiniz süre:',
    'LBL_LOGIN_LOGIN_TIME_DAYS' => 'gün.',
    'LBL_LOGIN_LOGIN_TIME_HOURS' => 'sa.',
    'LBL_LOGIN_LOGIN_TIME_MINUTES' => 'dk.',
    'LBL_LOGIN_LOGIN_TIME_SECONDS' => 'sn.',
    'LBL_LOGIN_ADMIN_CALL' => 'Lütfen sistem yöneticisine başvurun.',
    // END LOGIN PAGE STRINGS
    'LBL_LOGGED_OUT_1' => 'You have been logged out. To login again please click ',
    'LBL_LOGGED_OUT_2' => 'Buraya',
    'LBL_LOGGED_OUT_3' => '.',
    'LBL_MAIL_FROMADDRESS' => 'Yanıtlanacak Adres',
    'LBL_MAIL_FROMNAME' => 'Yanıtlanacak İsim',
    'LBL_MAIL_OPTIONS_TITLE' => 'E-Posta Ayarları',
    'LBL_MAIL_SENDTYPE' => 'Mesaj Aktarım Servisi',
    'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP Kimlik Denetimi?',
    'LBL_MAIL_SMTPPORT' => 'SMTP Portu',
    'LBL_MAILMERGE_TEXT' => 'Posta Birleştirmeyi aktif hale getir (Posta Birleştirme, sistem yöneticisi tarafından Ayarları Düzenle bölümünde de etkinleştirilmelidir)',
    'LBL_MAILMERGE' => 'Posta Birleştir',
    'LBL_MAX_TAB' => 'Sekmelerin Sayısı',
    'LBL_MAX_TAB_DESCRIPTION' => 'Diğerleri menüsü gözükmeden önce, sayfanın üstünde gösterilecek sekme sayısı.',
    'LBL_MAX_SUBTAB' => 'Alt Sekme Sayısı',
    'LBL_MAX_SUBTAB_DESCRIPTION' => 'Diğerleri menüsü gözükmeden önce, her sekmede gösterilecek alt sekme sayısı.',
    'LBL_MESSENGER_ID' => 'IM Adı',
    'LBL_MESSENGER_TYPE' => 'IM Tipi',
    'LBL_MOBILE_PHONE' => 'Cep Telefonu',
    'LBL_MODIFIED_BY' => 'Değiştiren',
    'LBL_CREATED_BY_NAME' => 'Oluşturan:', //bug 48978
    'LBL_MODIFIED_BY_ID' => 'Değiştiren ID:',
    'LBL_MODULE_NAME' => 'Kullanıcılar',
    'LBL_MODULE_TITLE' => 'Kullanıcılar: Ana Sayfa',
    'LBL_NAME' => 'Tam İsim',
    'LBL_SIGNATURE_NAME' => 'İsim',
    'LBL_NAVIGATION_PARADIGM' => 'Dolaşım',
    'LBL_NAVIGATION_PARADIGM_DESCRIPTION' => 'Modüller sekmesinin daha önceden tanımlanmış gruplara göre gösterilmesi için işaretleyin. Eğer bu kutu işaretlenmez ise, tüm modüller navigasyon çubuğunda gösterilecektir.',
    'LBL_USE_GROUP_TABS' => 'Gruplanmış Modüller',
    'LBL_NEW_FORM_TITLE' => 'Yeni Kullanıcı',
    'LBL_NEW_PASSWORD' => 'Yeni Şifre',
    'LBL_NEW_PASSWORD1' => 'Şifre',
    'LBL_NEW_PASSWORD2' => 'Onay Şifresi',
    'LBL_NEW_USER_PASSWORD_1' => 'Şifre başarıyla değiştirildi.',
    'LBL_NEW_USER_PASSWORD_2' => 'Kullanıcıya sistem-tarafından-üretilen şifreyi de içeren E-Posta gönderildi.',
    'LBL_NEW_USER_PASSWORD_3' => 'Şifre başarıyla oluşturuldu.',
    'LBL_NEW_USER_BUTTON_KEY' => 'N',
    'LBL_NEW_USER_BUTTON_LABEL' => 'Yeni Kullanıcı',
    'LBL_NEW_USER_BUTTON_TITLE' => 'Yeni Kullanıcı [Alt+N]',
    'LBL_NORMAL_LOGIN' => 'Normal Görünüme geç',
    'LBL_NOTES' => 'Notlar',
    'LBL_OFFICE_PHONE' => 'Ofis Telefonu',
    'LBL_OLD_PASSWORD' => 'Şimdiki Şifre',
    'LBL_OTHER_EMAIL' => 'Diğer E-Posta Adresi',
    'LBL_OTHER_PHONE' => 'Diğer Telefon',
    'LBL_OTHER' => 'Diğer',
    'LBL_PASSWORD' => 'Şifre',
    'LBL_PASSWORD_GENERATED' => 'Yeni şifre oluşturuldu',
    'LBL_PASSWORD_EXPIRATION_LOGIN' => 'Şifrenin süresi sona erdi. Lütfen bir şifre tanımlayınız.',
    'LBL_PASSWORD_EXPIRATION_GENERATED' => 'Şifreniz sistem tarafından üretildi',
    'LBL_PASSWORD_EXPIRATION_TIME' => 'Şifrenizin süresi sona erdi. Lütfen yeni şifre tanımlayınız.',

    'LBL_PSW_MODIFIED' => 'Son Şifre Değişimi',
    'LBL_PHONE' => 'Telefon',
    'LBL_PICK_TZ_WELCOME' => 'SuiteCRM Uygulamasına Hoşgeldiniz.',
    'LBL_PICK_TZ_DESCRIPTION' => 'Devam etmeden önce, lütfen bulunduğunuz zaman dilimini seçiniz ve Kaydet tuşuna basarak devam ediniz.  İstediğinizde zaman dilimini \\"Hesabım\\"  bölümünden değiştirebilirsiniz.',
    'LBL_PORTAL_ONLY_DESC' => 'Use for the Portal API. This type cannot login through the SuiteCRM web interface.',
    'LBL_PORTAL_ONLY_USER' => 'Portal API Kullanıcısı',
    'LBL_POSTAL_CODE' => 'Posta Kodu',
    'LBL_PRIMARY_ADDRESS' => 'Asıl Adresi',
    'LBL_PROMPT_TIMEZONE_TEXT' => 'İlk girişte kullanıcıların Yeni Kullanıcı Sihirbazını kullanmaları için işaretleyin.',
    'LBL_PROMPT_TIMEZONE' => 'Kullanıcı Sihirbazı',
    'LBL_PROVIDE_USERNAME_AND_EMAIL' => 'Hem Kullanıcı adını hem de E-Posta adresini konumlandırın.',
    'LBL_PUBLISH_KEY' => 'Anahtarı yayınla',

    'LBL_RECAPTCHA_NEW_CAPTCHA' => 'Başka bir CAPTCHA Al',
    'LBL_RECAPTCHA_SOUND' => 'Sese Geç',
    'LBL_RECAPTCHA_IMAGE' => 'Resme Geç',
    'LBL_RECAPTCHA_INSTRUCTION' => 'Aşağıdaki İki Kelimeyi Giriniz',
    'LBL_RECAPTCHA_INSTRUCTION_OPPOSITE' => 'İki Kelimeyi Sağa Giriniz',
    'LBL_RECAPTCHA_FILL_FIELD' => 'Resim içinde görünen metni Giriniz.',
    'LBL_RECAPTCHA_INVALID_PRIVATE_KEY' => 'Hatalı Recaptcha Özel Anahtarı',
    'LBL_RECAPTCHA_INVALID_REQUEST_COOKIE' => 'Recaptcha scriptinin "challenge" parametresi hatalıydı.',
    'LBL_RECAPTCHA_UNKNOWN' => 'Bilinmeyen Recaptcha Hatası',

    'LBL_RECEIVE_NOTIFICATIONS_TEXT' => 'Bir kayıt size atandığında, bilgilendirme E-Postası alın.',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Atamalarda Bilgilendir',
    'LBL_REGISTER' => 'Yeni Kullanıcı? Lütfen Kayıt Olun',
    'LBL_REGULAR_USER' => 'Normal kullanıcı',
    'LBL_REMINDER_TEXT' => 'Set a default for reminders for calls and meetings. Pop-up notifications appear for all invitees using SuiteCRM. Email reminders are sent to all invitees.',
    'LBL_REMINDER' => 'Hatırlatıcılar',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL' => 'E-posta',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Email all invitees',

    // new reminders

    'LBL_REMINDERS' => 'Hatırlatıcılar',
    'LBL_REMINDERS_ACTIONS' => 'Eylemler:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Email invitees',
    'LBL_REMINDERS_WHEN' => 'Ne zaman:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Remove reminder',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Add All Invitees',
    'LBL_REMINDERS_ADD_REMINDER' => 'Add reminder',

    'LBL_REMOVED_TABS' => 'Yönetici Sekmeleri Sil',
    'LBL_REPORTS_TO_NAME' => 'Rapor Edilen Kişi:',
    'LBL_REPORTS_TO' => 'Rapor Edilen Kişi:',
    'LBL_REPORTS_TO_ID' => 'Rapor Edilen ID:',
    'LBL_REQUEST_SUBMIT' => 'Talebiniz gönderildi.',
    'LBL_RESET_TO_DEFAULT' => 'Varsayılanları Sıfırla',
    'LBL_RESET_PREFERENCES' => 'Kullanıcı Tercihlerini Sıfırla',
    'LBL_RESET_PREFERENCES_WARNING' => 'Tüm tercihlerinizi sıfırlamak istediğinizden emin misiniz? Uyarı: Bu işlem ayrıca sizi uygulama dışına çıkartacaktır.',
    'LBL_RESET_PREFERENCES_WARNING_USER' => 'Bu kullanıcı için tüm tercihleri sıfırlamak istediğinizden emin misiniz?',
    'LBL_RESET_HOMEPAGE' => 'Ana Sayfayı Sıfırla',
    'LBL_RESET_DASHBOARD' => 'Gösterge Panosunu Sıfırla',
    'LBL_RESET_HOMEPAGE_WARNING' => 'Ana Sayfanızı sıfırlamak istediğinizden emin misiniz?',
    'LBL_RESET_HOMEPAGE_WARNING_USER' => 'Bu kullanıcı için Anasayfayı sıfırlamak istediğinizden emin misiniz?',
    'LBL_SALUTATION' => 'Hitap',
    'LBL_ROLES_SUBPANEL_TITLE' => 'Roller',
    'LBL_SEARCH_FORM_TITLE' => 'Kullanıcı Arama',
    'LBL_SEARCH_URL' => 'Lokasyon Arama',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'İşaretli Kullanıcıları Seç',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'İşaretli Kullanıcıları Seç',
    'LBL_SETTINGS_URL_DESC' => 'Use this URL when establishing login settings for the SuiteCRM Plug-in for Microsoft&reg; Outlook&reg; and the SuiteCRM Plug-in for Microsoft&reg; Word&reg;.',
    'LBL_SETTINGS_URL' => 'URL',
    'LBL_SIGNATURE' => 'İmza',
    'LBL_SIGNATURE_HTML' => 'HTML İmza',
    'LBL_SIGNATURE_DEFAULT' => 'İmza Kullan?',
    'LBL_SIGNATURE_PREPEND' => 'Yanıt üstünde İmza?',
    'LBL_SIGNATURES' => 'İmzalar',
    'LBL_STATE' => 'Eyalet',
    'LBL_STATUS' => 'Durum',
    'LBL_SUBPANEL_LINKS' => 'Altpanel Link\'leri',
    'LBL_SUBPANEL_LINKS_DESCRIPTION' => 'Detay Görünümünde, Altpanel kısayol link\'lerini bir satırda göster.',
    'LBL_SUBPANEL_TABS' => 'Altpanel Sekmeleri',
    'LBL_SUBPANEL_TABS_DESCRIPTION' => 'Detay Görünümünde, Altpanelleri sekme olarak gruplayıp, her seferinde bir sekme göster.',
    'LBL_SUGAR_LOGIN' => 'Is SuiteCRM User',
    'LBL_SUPPORTED_THEME_ONLY' => 'Yalnız bu seçeneği destekleyen temaları etkiler.',
    'LBL_SWAP_LAST_VIEWED_DESCRIPTION' => 'Eğer işaretlenmiş ise, Son Görüntülenenler Sekmesini yanda gösterir. Aksi takdirde üstte görünecektir.',
    'LBL_SWAP_SHORTCUT_DESCRIPTION' => 'Eğer işaretlenmişse, Kısayollar Sekmesini üstte gösterir. Aksi takdirde yanda görünecektir.',
    'LBL_SWAP_LAST_VIEWED_POSITION' => 'Son Görüntülenenler yanda',
    'LBL_SWAP_SHORTCUT_POSITION' => 'Kısayollar üstte',
    'LBL_TAB_TITLE_EMAIL' => 'E-Posta Ayarları',
    'LBL_TAB_TITLE_USER' => 'Kullanıcı Ayarları',
    'LBL_THEME' => 'Temalar',
    'LBL_THEME_COLOR' => 'Renk',
    'LBL_THEME_FONT' => 'Yazı tipi',
    'LBL_TIME_FORMAT_TEXT' => 'Saat formatını belirleyin',
    'LBL_TIME_FORMAT' => 'Saat Formatı',
    'LBL_TIMEZONE_DST_TEXT' => 'Gün Işığından Tasarrufu İzle',
    'LBL_TIMEZONE_DST' => 'Gün Işığından Faydalanma',
    'LBL_TIMEZONE_TEXT' => 'Zaman dilimini belirleyin',
    'LBL_TIMEZONE' => 'Zaman dilimi',
    'LBL_TITLE' => 'Ünvan',
    'LBL_USE_REAL_NAMES' => 'Ad - soyadı göster',
    'LBL_USE_REAL_NAMES_DESC' => 'Kullanıcı adı yanında kullanıcının ad - soyadını da göster.',
    'LBL_USER_INFORMATION' => 'Kullanıcı Bilgisi',
    'LBL_USER_LOCALE' => 'Yerel Ayarlar',
    'LBL_USER_NAME' => 'Kullanıcı Adı',
    'LBL_USER_SETTINGS' => 'Kullanıcı Ayarları',
    'LBL_USER_TYPE' => 'Kullanıcı Tipi',
    'LBL_USER_ACCESS' => 'Erişim',
    'LBL_USER' => 'Kullanıcılar',
    'LBL_WORK_PHONE' => 'İş Telefonu',
    'LBL_YOUR_PUBLISH_URL' => 'Benim lokasyonumda yayınla',
    'LBL_ICAL_PUB_URL' => 'iCal integration URL',
    'LBL_ICAL_PUB_URL_HELP' => 'Use this URL to subscribe to the SuiteCRM calendar within iCal.',
    'LBL_YOUR_QUERY_URL' => 'Sorgu URL\'iniz',
    'LNK_NEW_USER' => 'Yeni Kullanıcı Oluştur',
    'LNK_NEW_PORTAL_USER' => 'Portal API Kullanıcısı Oluştur',
    'LNK_NEW_GROUP_USER' => 'Grup Kullanıcısı Oluştur',
    'LNK_USER_LIST' => 'Kullanıcıları Görüntüle',
    'LNK_REASSIGN_RECORDS' => 'Kayıtları Yeniden Ata',
    'LBL_PROSPECT_LIST' => 'Olası Müşteriler ',
    'LBL_EMAILS' => 'E-posta',
    'LBL_PROCESSING' => 'İşleniyor',
    'LBL_UPDATE_FINISH' => 'Güncelleme tamam',
    'LBL_AFFECTED' => 'etkilendi',

    'LBL_USER_NAME_FOR_ROLE' => 'Kullanıcılar/Takımlar/Roller',
    'LBL_SESSION_EXPIRED' => 'açtığınız oturumun süresi dolduğundan sistemden çıktınız.',

// INBOUND EMAIL STRINGS
    'LBL_APPLY_OPTIMUMS' => 'Optimum Değerleri Uygula',
    'LBL_ASSIGN_TO_USER' => 'Kullanıcıya ata',
    'LBL_BASIC' => 'Gelen Kurulumu',
    'LBL_CERT_DESC' => 'Posta sunucusunun Güvenlik Sertifikasının denetlenmesini zorla - "self-signing" ise kullanmayınız.',
    'LBL_CERT' => 'Sertifikayı Denetleyin',
    'LBL_FIND_OPTIMUM_KEY' => 'f',
    'LBL_FIND_OPTIMUM_MSG' => '<br>Optimum bağlantı değişkenlerini buluyor.',
    'LBL_FIND_OPTIMUM_TITLE' => 'Optimum Konfigürasyonu Bul',
    'LBL_FORCE' => 'Tersine Zorla',
    'LBL_FORCE_DESC' => 'Bazı IMAP/POP3 sunucular için özel opsiyon ihtiyacı bulunmaktadır. Bağlanırken opsiyonun tersine zorlayın (örneğin, /notls)',
    'LBL_FOUND_OPTIMUM_MSG' => '<br>Optimum ayarlar bulundu.  Lütfen aşağıdaki tuşa basarak, posta hesabınıza uygulayınız.',
    'LBL_EMAIL_INBOUND_TITLE' => 'Gelen E-Posta Ayarları',
    'LBL_EMAIL_OUTBOUND_TITLE' => 'Gönderilen E-Posta Ayarları',
    'LBL_LOGIN' => 'Kullanıcı Adı',
    'LBL_MAILBOX_DEFAULT' => 'Gelen Kutusu',
    'LBL_MAILBOX_SSL_DESC' => 'Bağlanırken SSL kullan. Eğer bu yöntem çalışmazsa, PHP kurulumu konfigurasyonunda "--with-imap-ssl" seçeneğinin olduğunu kontrol edin.',
    'LBL_MAILBOX' => 'İzlenen Dosya',
    'LBL_MAILBOX_TYPE' => 'Olası Aksiyonlar',
    'LBL_MARK_READ_NO' => 'E-Posta içeri aktarmadan sonra silindi olarak işaretlendi',
    'LBL_MARK_READ_YES' => 'İçeri aktarmadan sonra sunucuda kalan E-Posta',
    'LBL_MARK_READ_DESC' => 'Yükleme sırasında, posta sunucusundaki mesajları okundu olarak işaretle; silme.',
    'LBL_MARK_READ' => 'Mesajları sunucuda bırak',
    'LBL_ONLY_SINCE_NO' => 'Hayır. Posta sunucusundaki tüm E-Postaları kontrol et.',
    'LBL_ONLY_SINCE_YES' => 'Evet.',
    'LBL_ONLY_SINCE_DESC' => 'POP3 kullanırken, PHP Yeni/Okunmamış mesajları filtreleyemez.  Bu seçenek, posta hesabına son bağlantıdan sonra oluşan mesajların kontrolüne izin verir.  Bu sunucunuz IMAP kullanmıyorsa, performansın önemli ölçüde artmasını sağlayacaktır.',
    'LBL_ONLY_SINCE' => 'Yalnızca Son Kontrolden sonrasını Yükle:',
    'LBL_PORT' => 'Posta Sunucusu Portu',
    'LBL_SERVER_OPTIONS' => 'Gelişmiş Kurulum',
    'LBL_SERVER_TYPE' => 'Posta Sunucu Protokolü',
    'LBL_SERVER_URL' => 'Posta Sunucu Adresi',
    'LBL_SSL' => 'SSL Kullan',
    'LBL_SSL_DESC' => 'Posta sunucusuna bağlanırken Secure Socket Layer kullan.',
    'LBL_TEST_BUTTON_KEY' => 't',
    'LBL_TEST_BUTTON_TITLE' => 'Test [Alt + T]',
    'LBL_TEST_SETTINGS' => 'Ayarları Test Et',
    'LBL_TEST_SUCCESSFUL' => 'Bağlantı başarıyla tamamlandı.',
    'LBL_TLS_DESC' => 'Posta sunucusuna bağlanırken "Transport Layer Security" kullanın - yalnızca posta sunucunuz bu protokol desteğini sağlıyorsa kullanılabilir.',
    'LBL_TLS' => 'TLS Kullan',
    'LBL_TOGGLE_ADV' => 'Detaylı Gösterim',
    'LBL_OWN_OPPS' => 'Fırsat mevcut değil',
    'LBL_EXTERNAL_AUTH_ONLY' => 'Bu kullanıcının kimliğinin doğrulanma tek yöntemi:',
    'LBL_ONLY' => 'Yalnızca',
    'LBL_OWN_OPPS_DESC' => 'Eğer bu kullanıcıya Fırsat atanmayacaksa seçiniz. Satış aktivitelerinde yer almayan yöneticiler için bu ayarı kullanabilirsiniz. Bu ayar Tahmin Modülü için kullanılmaktadır.',
// END INBOUND EMAIL STRINGS
    'LBL_LDAP_ERROR' => 'LDAP Hatası: Sistem Yöneticisi ile bağlantı kurun',
    'LBL_LDAP_EXTENSION_ERROR' => 'LDAP Hatası: Eklemeler yüklenmedi',

// PROJECT RESOURCES STRINGS
    'LBL_USER_HOLIDAY_SUBPANEL_TITLE' => 'Kullanıcı Tatilleri',
    'LBL_RESOURCE_NAME' => 'İsim',
    'LBL_RESOURCE_TYPE' => 'Tipi:',

    'LBL_PDF_SETTINGS' => 'PDF ayarları',
    'LBL_PDF_PAGE_FORMAT' => 'Sayfa Formatı',
    'LBL_PDF_PAGE_FORMAT_TEXT' => 'Sayfalar için kullanılan format',
    'LBL_PDF_PAGE_ORIENTATION' => 'Sayfa Yönlendirmesi',
    'LBL_PDF_PAGE_ORIENTATION_TEXT' => '',
    'LBL_PDF_PAGE_ORIENTATION_P' => 'Düşey (Portrait)',
    'LBL_PDF_PAGE_ORIENTATION_L' => 'Yatay (Landscape)',
    'LBL_PDF_MARGIN_HEADER' => 'Başlık Kenar Boşluğu',
    'LBL_PDF_MARGIN_HEADER_TEXT' => '',
    'LBL_PDF_MARGIN_FOOTER' => 'Sayfa Altı Kenar Boşluğu',
    'LBL_PDF_MARGIN_FOOTER_TEXT' => '',
    'LBL_PDF_MARGIN_TOP' => 'Üst Kenar Boşluğu',
    'LBL_PDF_MARGIN_TOP_TEXT' => '',
    'LBL_PDF_MARGIN_BOTTOM' => 'Alt Kenar Boşluğu',
    'LBL_PDF_MARGIN_BOTTOM_TEXT' => '',
    'LBL_PDF_MARGIN_LEFT' => 'Sol Kenar Boşluğu',
    'LBL_PDF_MARGIN_LEFT_TEXT' => '',
    'LBL_PDF_MARGIN_RIGHT' => 'Sağ Kenar Boşluğu',
    'LBL_PDF_MARGIN_RIGHT_TEXT' => '',
    'LBL_PDF_FONT_NAME_MAIN' => 'Başlık ve Gövde Yazı Tipi',
    'LBL_PDF_FONT_NAME_MAIN_TEXT' => 'Seçilen yazı tipi, PDF Dokümanı sayfa üstünde ve sayfa içindeki metinde kullanılacak',
    'LBL_PDF_FONT_SIZE_MAIN' => 'Ana Yazı Tipi Boyutu',
    'LBL_PDF_FONT_SIZE_MAIN_TEXT' => '',
    'LBL_PDF_FONT_NAME_DATA' => 'Alt Bilgi için Yazı Tipi',
    'LBL_PDF_FONT_NAME_DATA_TEXT' => 'Seçilen yazı tipi, PDF Dokümanı sayfa altındaki metinde kullanılacak',
    'LBL_PDF_FONT_SIZE_DATA' => 'Veri Yazı Tipi Boyutu',
    'LBL_PDF_FONT_SIZE_DATA_TEXT' => '',
    'LBL_LAST_ADMIN_NOTICE' => 'Kendinizi seçtiniz. Kendinizin Kullanıcı Tipi veya Durumunu değiştiremezsiniz.',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Sunucusu',
    'LBL_SMTP_SERVER_HELP' => 'Bu SMTP Mail Sunucusu giden posta için kullanılabilir. E-Posta sunucusu kullanmak için, E-Posta hesabınızın kullanıcı adı ve şifresini girin.',
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Yönetim henüz varsayılan giden hesabı yapılandırmamış. Test E-Postası gönderemezsiniz.',
    'LBL_MAIL_SMTPPASS' => 'SMTP Şifresi:',
    'LBL_MAIL_SMTPUSER' => 'SMTP Kullanıcı adı:',
    'LBL_MAIL_SMTPTYPE' => 'SMTP Sunucu Tipi:',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Sunucu Özellikleri',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'E-Posta konumlandırıcınızı seçiniz:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! E-Posta Şifresi:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! E-Posta ID:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Şifresi:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail E-Posta Adresi:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Şifresi:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange Kullanıcı Adı:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Sunucu Portu:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Sunucusu:',
    'LBL_OK' => 'Tamam',
    'LBL_CANCEL' => 'İptal et',
    'LBL_DELETE_USER' => 'Kullanıcıyı Sil',
    // Wizard
    'LBL_WIZARD_TITLE' => 'Kullanıcı Yeteneği',
    'LBL_WIZARD_WELCOME_TAB' => 'Hoşgeldiniz',
    'LBL_WIZARD_WELCOME_TITLE' => 'SuiteCRM\'a Hoşgeldiniz!',
    'LBL_WIZARD_WELCOME' => 'Click <b>Next</b> to configure a few basic settings for using SuiteCRM.',
    'LBL_WIZARD_WELCOME_NOSMTP' => 'Click <b>Next</b> to configure a few basic settings for using SuiteCRM.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Sonraki >',
    'LBL_WIZARD_BACK_BUTTON' => '< Önceki',
    'LBL_WIZARD_SKIP_BUTTON' => 'Atla',
    'LBL_WIZARD_FINISH_BUTTON' => 'Bitir',
    'LBL_WIZARD_FINISH_TAB' => 'Bitir',
    'LBL_WIZARD_FINISH_TITLE' => 'SuiteCRM\'ı kullanmaya hazırsınız!',

    'LBL_WIZARD_FINISH' => 'Click <b>Finish</b> below to save your settings and to begin using SuiteCRM. For more information on using SuiteCRM:<br /><br />
<table cellpadding=0 cellspacing=0>
<tr><td><!--not_in_theme!-->Visit www.suitecrm.com <img src=include/images/suitecrm_login.png style="margin-right: 5px;"></td><td><a href="http://www.suitecrm.com/" target="_blank"><b>SuiteCRM</b></a></td></tr>
</table>',

    'LBL_WIZARD_FINISH1' => 'What would you like to do next?',
    'LBL_WIZARD_FINISH2' => 'Start Using SuiteCRM',
    'LBL_WIZARD_FINISH3' => 'Veri Içeri Aktar ',
    'LBL_WIZARD_FINISH4' => 'Import data from external sources into the application.',
    'LBL_WIZARD_FINISH5' => 'Kullanıcı Oluştur',
    'LBL_WIZARD_FINISH6' => 'Create new user accounts for people to use to access the application.',
    'LBL_WIZARD_FINISH7' => 'View and Manage Application Settings',
    'LBL_WIZARD_FINISH8' => 'Manage advanced settings, including default application settings.',
    'LBL_WIZARD_FINISH9' => 'Uygulama Yapılandırma ',
    'LBL_WIZARD_FINISH10' => 'Use Studio to create and manage application fields and layouts.',
    'LBL_WIZARD_FINISH11' => 'SuiteCRM Sitesini Ziyaret Edin ',
    'LBL_WIZARD_FINISH12' => 'Find training materials and classes that will help you get started as a system administrator or end user of the application.',
    'LBL_WIZARD_FINISH14' => 'Belge ',
    'LBL_WIZARD_FINISH15' => 'Ürün Kılavuzları ve Sürüm Notları ',
    'LBL_WIZARD_FINISH16' => 'Bilgi Bankası ',
    'LBL_WIZARD_FINISH17' => 'SuiteCRM İpuçları',
    'LBL_WIZARD_FINISH18' => 'Forumlar ',
    'LBL_WIZARD_FINISH19' => 'Forums dedicated to the SuiteCRM Community to discuss topics of interest with each other and with SuiteCRM Developers ',
    'LBL_WIZARD_FINISH2DESC' => 'Go directly to the application Home page.',
    'LBL_WIZARD_PERSONALINFO' => 'Bilginiz',
    'LBL_WIZARD_LOCALE' => 'Bölgeniz',
    'LBL_WIZARD_SMTP' => 'E-Posta Hesabınız',
    'LBL_WIZARD_PERSONALINFO_DESC' => 'Provide information about yourself. The information you provide about yourself will be visible to other SuiteCRM users.<br />Fields marked with <span class="required">*</span> are required.',
    'LBL_WIZARD_LOCALE_DESC' => 'Specify your time zone and how you would like dates, currencies and names to appear in SuiteCRM.',
    'LBL_WIZARD_SMTP_DESC' => 'Varsayılan giden E-Posta sunucusu için E-Posta hesabınızın kullanıcı adı ve şifresini girin.',
    'LBL_EAPM_SUBPANEL_TITLE' => 'Dış hesaplar',

    'LBL_EDITLAYOUT' => 'Sayfa Görünümü Düzenleme' /*for 508 compliance fix*/,
    'LBL_HELP' => 'Yardım' /*for 508 compliance fix*/,
    'LBL_CHECKMARK' => 'Checkmark' /*for 508 compliance fix*/,
    'LBL_THEMEPREVIEW' => 'Ön görünüm' /*for 508 compliance fix*/,

    'LBL_OAUTH_TOKENS' => 'OAuth belirteçleri',
    'LBL_OAUTH_TOKENS_SUBPANEL_TITLE' => "OAuth Access Tokens",

    //For export labels
    'LBL_MODIFIED_USER_ID' => 'Modified User ID',
    'LBL_PHONE_HOME' => 'Telefon ev',
    'LBL_PHONE_MOBILE' => 'Cep Telefonu',
    'LBL_PHONE_WORK' => 'Telefon iş',
    'LBL_PHONE_OTHER' => 'Diğer telefon',
    'LBL_PHONE_FAX' => 'Faks',
    'LBL_PORTAL_ONLY' => 'Sadece Portal',
    'LBL_SHOW_ON_EMPLOYEES' => 'Display Employee Record',
    'LBL_IS_GROUP' => 'Is Group',
    'LBL_EXPORT_CREATED_BY' => 'Oluşturan Id:',

    'LBL_DATE_MODIFIED' => 'Değiştirilme Tarihi',
    'LBL_DATE_ENTERED' => 'Giriş Tarihi',
    'LBL_DELETED' => 'Silindi',
    'LBL_HIDEOPTIONS' => 'Seçeneklerini gizle',
    'LBL_SHOWOPTIONS' => 'Seçenekleri göster',

    'LBL_SUITE_SUPERCHARGED' => "Supercharged by SuiteCRM",
    'LBL_SUITE_POWERED_BY' => "SugarCRM tarafından desteklenmektedir",
    'LBL_SUITE_TOP' => "Başa dön",
    'LBL_SUITE_PRINT' => "Bu Sayfayı Yazdır",
    'LBL_SUITE_DESC1' => 'SuiteCRM has been written and assembled by SalesAgility, one of the worlds most knowledgeable SugarCRM consultancies.',
    'LBL_SUITE_DESC2' => 'SuiteCRM is intended to deliver on the promise of SugarCRM - a freely available open source CRM project that combines great functionality, with community and commitment.',
    'LBL_SUITE_DESC3' => 'There will be no licenced software as part of the project managed by SalesAgility. All the code is free. All the code is available for free download. There is no hidden agenda to charge for access to the code. It is and always will be free and open source. There will be no paid-for versions.',
    'LBL_QUICK_ACCOUNT' => 'Müşteri Yarat',
    'LBL_QUICK_CONTACT' => 'İlgili Oluştur',
    'LBL_QUICK_OPPORTUNITY' => 'Fırsat Oluştur',
    'LBL_QUICK_LEAD' => 'Talep Oluştur',
    'LBL_QUICK_DOCUMENT' => 'Belge Oluştur',
    'LBL_QUICK_CALL' => 'Tel.Araması Planlama',
    'LBL_QUICK_TASK' => 'Görev Oluştur',

    'LBL_ENABLE_NOTIFICATIONS' => 'Masaüstü Bildirimlerini Etkinleştir',
    'LBL_LIST_NONINHERITABLE' => "Devredilemez",
    'LBL_PRIMARY_GROUP' => "Birincil grup",

); // END STRINGS DEFS

?>
