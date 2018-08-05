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
    'LBL_DELETE_GROUP_CONFIRM' => 'Biztos benne hogy törölni akarja ezt a Csoport Felhasználót? Nyomja meg az OK gombot a Felhasználói rekord törléséhez. Ezután lehetőséget kap a Csoport felhasználóhoz rendelt rekordok más felhasználóhoz történő újrahozzárendelésére.',
    'LBL_DELETE_PORTAL_CONFIRM' => 'Biztos benne hogy törölni akarja ezt a Portal API Felhasználót? Nyomja meg az OK gombot a Felhasználói rekord törléséhez.',
    'Click OK to delete the User record.',

    'LNK_IMPORT_USERS' => 'Felhasználók importálása',
    'ERR_DELETE_RECORD' => 'Adjon meg egy azonosítót a kliens törléséhez!',
    'ERR_EMAIL_INCORRECT' => 'Adjon meg egy érvényes Email címet amire elküldhetjük a jelszót.',
    'ERR_EMAIL_NO_OPTS' => 'Nem találom a Beérkező Levelek optimális beállításait.',
    'ERR_ENTER_CONFIRMATION_PASSWORD' => 'Kérjük, adja meg a jelszavát ismét!',
    'ERR_ENTER_NEW_PASSWORD' => 'Kérjük, adja meg az új jelszót.',
    'ERR_ENTER_OLD_PASSWORD' => 'Kérjük, adja meg jelenlegi jelszavát.',
    'ERR_IE_FAILURE1' => '[Kattintson ide a visszatéréshez]',
    'ERR_IE_FAILURE2' => 'Az Email-fiókhoz csatlakozáskor probléma merült fel. Kérjük, ellenőrizze a beállításokat, és próbálja újra.',
    'ERR_IE_MISSING_REQUIRED' => "A Beérkező Levelek beállításai hiányosak. Kérem ellenőrizze a beállításokat és próbálja újra, vagy törölje az összes hozzátartozó mező tartalmát.",
    'ERR_INVALID_PASSWORD' => 'Meg kell adnia egy érvényes felhasználónévet és jelszót.',
    'ERR_NO_LOGIN_MOBILE' => 'Az alkalmazásba történő első belépést ne mobil böngészőben, vagy legalábbis normál módban tegye meg. Kérem látogasson vissza egy teljes értékű böngészőben, vagy kattintson alul a normál linkre. A kellemetlenségért elnézését kérjük!',
    'ERR_LAST_ADMIN_1' => 'Felhasználó név "',
    'ERR_LAST_ADMIN_2' => '" az utolsó munkatárs adminisztrátori jogokkal. Legalább egy munkatársnak adminisztrátornak kell maradni!',
    'ERR_PASSWORD_CHANGE_FAILED_1' => 'Felhasználói jelszó megváltoztatása sikertelen',
    'ERR_PASSWORD_CHANGE_FAILED_2' => 'Nem sikerült. Új jelszót kell beállítania.',
    'ERR_PASSWORD_CHANGE_FAILED_3' => '.	The new password is invalid.',
    'ERR_PASSWORD_INCORRECT_OLD_1' => 'A felhasználó jelenlegi jelszava helytelen.',
    'ERR_PASSWORD_INCORRECT_OLD_2' => '. Megerősítéshez adja meg újra a jelszót.',
    'ERR_PASSWORD_MISMATCH' => 'A jelszavak nem egyeznek.',
    'ERR_PASSWORD_USERNAME_MISSMATCH' => 'Meg kell adnia egy érvényes felhasználói névet és e-mail címet.',
    'ERR_PASSWORD_LINK_EXPIRED' => 'A link lejárt, kérjük hozzon létre egy újat!',
    'ERR_REENTER_PASSWORDS' => 'Az új jelszó és a megerősítő jelszó nem egyezik.',
    'ERR_REPORT_LOOP' => 'A rendszer egy jelentés hurkot azonosított. Egy felhasználó nem tud jelentést tenni önmagának, és a menedzserei sem tudnak jelenteni neki.',
    'ERR_RULES_NOT_MET' => 'A megadott jelszó nem felel meg a jelszó követelményeknek. Kérjük, próbálja újra.',
    'ERR_USER_INFO_NOT_FOUND' => 'Felhasználói adatok nem találhatók',
    'ERR_USER_NAME_EXISTS_1' => 'A felhasználói neve',
    'ERR_USER_NAME_EXISTS_2' => 'Már létezik. Azonos felhasználói nevek nem engedélyezettek. Változtassa meg a felhasználó nevét, annak egyedinek kell lennie.',
    'ERR_USER_IS_LOCKED_OUT' => 'This user is locked out of the SuiteCRM application and cannot log in using his/her existing password.',

    'LBL_PASSWORD_SENT' => 'Jelszó frissítve',
    'LBL_CANNOT_SEND_PASSWORD' => 'Nem tudom küldeni a jelszót',
    'ERR_EMAIL_NOT_SENT_ADMIN' => 'Rendszer nem tudja feldolgozni a kérést. Kérjük, ellenőrizze:',
    'ERR_SMTP_URL_SMTP_PORT' => 'SMTP szerver URL-t és Port',
    'ERR_SMTP_USERNAME_SMTP_PASSWORD' => 'SMTP felhasználónév és az SMTP-jelszó',
    'ERR_RECIPIENT_EMAIL' => 'Címzett Email címe',
    'ERR_SERVER_STATUS' => 'A kiszolgáló állapota',
    'ERR_SERVER_SMTP_EMPTY' => 'A rendszer nem tudja elküldeni az e-mailt a felhasználónak. Kérjük, ellenőrizze a kimenő levelek konfiguráció Email beállítások.',

    'LBL_ADDRESS_CITY' => 'Cím Város',
    'LBL_ADDRESS_COUNTRY' => 'Cím ország',
    'LBL_ADDRESS_INFORMATION' => 'Cím információ',
    'LBL_ADDRESS_POSTALCODE' => 'Cím Irányítószám',
    'LBL_ADDRESS_STATE' => 'Cím állam',
    'LBL_ADDRESS_STREET' => 'Cím utca',
    'LBL_ADDRESS' => 'Cím',
    'LBL_ADMIN_USER' => 'Rendszergazda felhasználó',


    'LBL_ADMIN_DESC' => 'A Felhasználó hozzáférhet az Adminisztrációs oldal minden rekordjához, tekintet nélkül a csoport biztonságára.',
    'LBL_REGULAR_DESC' => 'A Felhasználó a csoport biztonsági előírásai és jogai alapján fér hozzá a modulokhoz és rekordokhoz.',

    'LBL_PHOTO' => 'Fénykép',

    'LBL_ADMIN' => 'Rendszergazda',
    'LBL_ADVANCED' => 'Bővebben',
    'LBL_ANY_ADDRESS' => 'Bármilyen cím:',
    'LBL_ANY_EMAIL' => 'Bármilyen Email:',
    'LBL_ANY_PHONE' => 'Bármilyen telefon:',
    'LBL_BUTTON_CREATE' => 'Létrehozás',
    'LBL_BUTTON_EDIT' => 'Szerkeszt',
    'LBL_CALENDAR_OPTIONS' => 'Naptár beállításai',
    'LBL_CHANGE_PASSWORD' => 'Változtassa meg a generált jelszót',
    'LBL_CHANGE_SYSTEM_PASSWORD' => 'Kérjük, adjon meg egy új jelszót.',
    'LBL_CHANGE_PASSWORD_TITLE' => 'Jelszó',
    'LBL_CHOOSE_A_KEY' => 'Válasszon egy kulcsot, hogy elkerülje a személyes naptárjának illetéktelen publikációját',
    'LBL_NO_KEY' => 'Key is not set. Please set key to enable publishing.',
    'LBL_CHOOSE_WHICH' => 'Válassza ki, melyik lapok jelenjenek meg',
    'LBL_CITY' => 'Város',

    'LBL_CLEAR_BUTTON_TITLE' => 'Töröl',


    'LBL_CONFIRM_PASSWORD' => 'Jelszó megismétlése',
    'LBL_CONFIRM_REGULAR_USER' => 'A felhasználó típusát megváltoztatta Rendszer Adminisztrátor Felhasználóról, Normál Felhasználóra. A mentés után a Felhasználónak megszűnnek a rendszer adminisztrátori jogosultságai.\n\nNyomja meg az OK gombot a változtatáshoz\nNyomja meg a Mégsem gombot, ha vissza akar térni a rekordhoz.',
    'LBL_COUNTRY' => 'Ország',
    'LBL_CURRENCY_TEXT' => 'Válassza ki az alapértelmezett fizetőeszközt új rekord létrehozásánál. Ez a fizetőeszköz fog megjelenni a Lehetőségek listázásában az Összeg oszlopban is.',
    'LBL_CURRENCY' => 'Pénznem',
    'LBL_CURRENCY_EXAMPLE' => 'Pénznem megjelenítése (példa)',
    'LBL_CURRENCY_SIG_DIGITS' => 'Valuta számjeggyel',
    'LBL_CURRENCY_SIG_DIGITS_DESC' => 'használt tizedes jegyek száma a valutában',
    'LBL_NUMBER_GROUPING_SEP' => 'Ezres elválasztó',
    'LBL_NUMBER_GROUPING_SEP_TEXT' => 'Használjon 1000-es elválasztó karaktert',
    'LBL_DECIMAL_SEP' => 'Tizedesjel',
    'LBL_DECIMAL_SEP_TEXT' => 'Használjon tizedes elválasztót',
    'LBL_FDOW' => 'First Day of Week',
    'LBL_FDOW_TEXT' => 'First Day displayed in Week, Month, and Year Views',
    'LBL_DATE_FORMAT_TEXT' => 'Dátumok formátumának megadása',
    'LBL_DATE_FORMAT' => 'Dátumformátum',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Felhasználók',
    'LBL_DEPARTMENT' => 'Osztály',
    'LBL_DESCRIPTION' => 'Leírás',
    'LBL_DISPLAY_TABS' => 'Fülek megjenítése',
    'LBL_DOWNLOADS' => 'Letöltések',
    'LBL_DST_INSTRUCTIONS' => 'Nyári időszámítás figyelembevételének jelzése (+DST)',
    'LBL_EDIT_TABS' => 'Fülek szerkesztése',
    'LBL_EDIT' => 'Szerkeszt',
    'LBL_USER_HASH' => 'Jelszó',
    'LBL_AUTHENTICATE_ID' => 'Hitelesítő azonosító',
    'LBL_ACCOUNT_NAME' => 'Kliens neve',
    'LBL_USER_PREFERENCES' => 'Felhasználói beállítások',
    'LBL_EXT_AUTHENTICATE' => 'Külső hitelesítés',
    'LBL_EMAIL_OTHER' => 'Email 2',
    'LBL_EMAIL' => 'Email cím',
    'LBL_EMAIL_CHARSET' => 'Kimenő karakterkészlet',
    'LBL_EMAIL_EDITOR_OPTION' => 'Formátum létrehozása',
    'LBL_EMAIL_GMAIL_DEFAULTS' => 'Alapértelmezett Gmail beállítások kitöltése',
    'LBL_EMAIL_LINK_TYPE' => 'Email kliens',

    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM Mail Client:</b> Send emails using the email client in the SuiteCRM application.<br><b>External Mail Client:</b> Send email using an email client outside of the SuiteCRM application, such as Microsoft Outlook.',

    'LBL_EMAIL_NOT_SENT' => 'Rendszer nem tudja feldolgozni a kérést. Kérjük, lépjen kapcsolatba a rendszergazdával.',
    'LBL_EMAIL_PROVIDER' => 'Email szolgáltató',
    'LBL_EMAIL_SHOW_COUNTS' => 'Mutassa az emailek számát?',
    'LBL_EMAIL_SIGNATURE_ERROR1' => 'Az aláíráshoz szükséges egy név.',
    'LBL_EMAIL_SMTP_SSL' => 'Engedélyezi az SMTP-SSL-t?',
    'LBL_EMAIL_TEMPLATE_MISSING' => 'Nincs sablon kiválasztva az email-hez, ami tartalmazza a Felhasználónak küldendő jelszót. Kérem válasszon egy Email Sablont a Jelszó Managment oldalon.',
    'LBL_EMPLOYEE_STATUS' => 'Munkatárs státusza',
    'LBL_EMPLOYEE_INFORMATION' => 'Információ a munkatársról',
    'LBL_ERROR' => 'Hiba',
    'LBL_EXPORT_CHARSET' => 'Import / Export karakterkészlet',
    'LBL_EXPORT_CHARSET_DESC' => 'Kérem válassza ki azt a karakterkészletet, amit az adatok importálásánál, .csv exportnál és vCard generálásnál kíván használni.',
    'LBL_EXPORT_DELIMITER' => 'Export elválasztó karaktere',
    'LBL_EXPORT_DELIMITER_DESC' => 'Adja meg az exportálandó adatok elválasztó karaktereit.',
    'LBL_FAX_PHONE' => 'Fax',
    'LBL_FAX' => 'Fax',
    'LBL_FIRST_NAME' => 'Keresztnév',
    'LBL_GENERATE_PASSWORD_BUTTON_KEY' => 'G',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Rendszer által generált jelszó',
    'LBL_GENERATE_PASSWORD_BUTTON_LABEL' => 'Új jelszó generálása',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Jelszó [Alt + G]',
    'LBL_GENERATE_PASSWORD' => 'Új jelszó generálása',
    'LBL_GROUP_DESC' => 'Use for assigning items to a group (example: for Inbound Email).  This type cannot login through the SuiteCRM web interface.',
    'LBL_GROUP_USER_STATUS' => 'Felhasználó csoport',
    'LBL_GROUP_USER' => 'Felhasználó csoport',
    'LBL_HIDE_TABS' => 'Fülek elrejtése',
    'LBL_HOME_PHONE' => 'Otthoni telefon',
    'LBL_INBOUND_TITLE' => 'Fiók információ',
    'LBL_IS_ADMIN' => 'egy adminsztrátor',
    'LBL_LANGUAGE' => 'Nyelv',
    'LBL_LAST_NAME' => 'Vezetéknév',
    'LBL_LAST_NAME_SLASH_NAME' => 'Vezetéknév / Név',
    'LBL_LAYOUT_OPTIONS' => 'Elrendezési lehetőségek',
    'LBL_LDAP' => 'LDAP',
    'LBL_LDAP_AUTHENTICATION' => 'LDAP azonosítása',
    'LBL_LIST_ACCEPT_STATUS' => 'Elfogadás státusz',
    'LBL_LIST_ADMIN' => 'Rendszergazda',
    'LBL_LIST_DEPARTMENT' => 'Osztály',
    'LBL_LIST_EMAIL' => 'Email',
    'LBL_LIST_FORM_TITLE' => 'Felhasználók',
    'LBL_LIST_GROUP' => 'Csoport',
    'LBL_LIST_LAST_NAME' => 'Vezetéknév',
    'LBL_LIST_MEMBERSHIP' => 'Tagság',
    'LBL_LIST_NAME' => 'Név',
    'LBL_LIST_PRIMARY_PHONE' => 'Elsődleges telefonszám',
    'LBL_LIST_PASSWORD' => 'Jelszó',
    'LBL_LIST_STATUS' => 'Állapot',
    'LBL_LIST_TITLE' => 'Beosztás',
    'LBL_LIST_USER_NAME' => 'Felhasználó név',
    'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Név kijelzési formátuma',
    'LBL_LOCALE_DESC_FIRST' => '[Első]',
    'LBL_LOCALE_DESC_LAST' => '[Utolsó]',
    'LBL_LOCALE_DESC_SALUTATION' => '[Megszólítás]',
    'LBL_LOCALE_DESC_TITLE' => '[Titulus]',
    'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Példa',
    'LBL_LOCALE_NAME_FORMAT_DESC' => 'Állítsa be a nevek megjelenésének formátumát.',
    'LBL_LOCALE_NAME_FORMAT_DESC_2' => '"S" Megszólítás "F" Keresztnév "L" Vezetéknév',
    'LBL_SAVED_SEARCH' => 'Mentett keresések és elrendezési lehetőségek',
    // LOGIN PAGE STRINGS
    'LBL_LOGIN_BUTTON_KEY' => 'L',
    'LBL_LOGIN_BUTTON_LABEL' => 'Bejelentkezés',
    'LBL_LOGIN_BUTTON_TITLE' => 'Bejelentkezés [Alt + L]',
    'LBL_LOGIN_WELCOME_TO' => 'Üdvözöljük a',
    'LBL_LOGIN_OPTIONS' => 'Beállítások',
    'LBL_LOGIN_FORGOT_PASSWORD' => 'Elfelejtette a jelszavát?',
    'LBL_LOGIN_SUBMIT' => 'Elfogad',
    'LBL_LOGIN_ATTEMPTS_OVERRUN' => 'Túl sok sikertelen belépési kísérlet.',
    'LBL_LOGIN_LOGIN_TIME_ALLOWED' => 'Próbálja újra a belépést',
    'LBL_LOGIN_LOGIN_TIME_DAYS' => 'nap.',
    'LBL_LOGIN_LOGIN_TIME_HOURS' => 'h.',
    'LBL_LOGIN_LOGIN_TIME_MINUTES' => 'prc.',
    'LBL_LOGIN_LOGIN_TIME_SECONDS' => 'mp.',
    'LBL_LOGIN_ADMIN_CALL' => 'Kérjük, lépjen kapcsolatba a rendszergazdával.',
    // END LOGIN PAGE STRINGS
    'LBL_LOGGED_OUT_1' => 'You have been logged out. To login again please click ',
    'LBL_LOGGED_OUT_2' => 'here',
    'LBL_LOGGED_OUT_3' => '.',
    'LBL_MAIL_FROMADDRESS' => 'Válasz cím',
    'LBL_MAIL_FROMNAME' => 'Válasz név',
    'LBL_MAIL_OPTIONS_TITLE' => 'Email beállítások',
    'LBL_MAIL_SENDTYPE' => 'Mail Transfer Agent:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP hitelesítés:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAILMERGE_TEXT' => 'Körlevél engedélyezése (A Körlevelet a Konfigurációs beállításokban is engedélyezni kell a rendszer adminisztrátornak) ',
    'LBL_MAILMERGE' => 'Körlevél',
    'LBL_MAX_TAB' => 'Fülek száma',
    'LBL_MAX_TAB_DESCRIPTION' => 'Látható fülek száma az oldal tetején, mielőtt túl sok menüpont jelenne meg.',
    'LBL_MAX_SUBTAB' => 'Alfülek száma',
    'LBL_MAX_SUBTAB_DESCRIPTION' => 'Látható alfülek száma egy fül alatt.',
    'LBL_MESSENGER_ID' => 'IM (messenger) név',
    'LBL_MESSENGER_TYPE' => 'IM (messenger) típus:',
    'LBL_MOBILE_PHONE' => 'Mobil',
    'LBL_MODIFIED_BY' => 'Módosította',
    'LBL_CREATED_BY_NAME' => 'Létrehozta', //bug 48978
    'LBL_MODIFIED_BY_ID' => 'Módosító azonosítója',
    'LBL_MODULE_NAME' => 'Felhasználók',
    'LBL_MODULE_TITLE' => 'Felhasználók: Főoldal',
    'LBL_NAME' => 'Teljes név',
    'LBL_SIGNATURE_NAME' => 'Név',
    'LBL_NAVIGATION_PARADIGM' => 'Navigáció',
    'LBL_NAVIGATION_PARADIGM_DESCRIPTION' => 'Válassza ki a modul megjelenítendő füleit a navigációs sávban az előre meghatározott csoportok alapján. Ha ez a funkció nincs kiválasztva, akkor minden modul megjelenik a navigációs sávban.',
    'LBL_USE_GROUP_TABS' => 'Csoportosított Modulok',
    'LBL_NEW_FORM_TITLE' => 'Új felhasználó',
    'LBL_NEW_PASSWORD' => 'Új jelszó',
    'LBL_NEW_PASSWORD1' => 'Jelszó',
    'LBL_NEW_PASSWORD2' => 'Jelszó megismétlése',
    'LBL_NEW_USER_PASSWORD_1' => 'Jelszavát sikeresen megváltoztatta.',
    'LBL_NEW_USER_PASSWORD_2' => 'A Felhasználónak küldött levél a rendszer által generált jelszót tartalmaz.',
    'LBL_NEW_USER_PASSWORD_3' => 'Jelszó létrehozása sikeres volt.',
    'LBL_NEW_USER_BUTTON_KEY' => 'N',
    'LBL_NEW_USER_BUTTON_LABEL' => 'Új felhasználó',
    'LBL_NEW_USER_BUTTON_TITLE' => 'Új felhasználó [Alt + N]',
    'LBL_NORMAL_LOGIN' => 'Váltás a normál nézetre',
    'LBL_NOTES' => 'Feljegyzés',
    'LBL_OFFICE_PHONE' => 'Irodai telefon',
    'LBL_OLD_PASSWORD' => 'Jelenlegi jelszó',
    'LBL_OTHER_EMAIL' => 'További Email cím:',
    'LBL_OTHER_PHONE' => 'További telefon:',
    'LBL_OTHER' => 'Egyéb',
    'LBL_PASSWORD' => 'Jelszó',
    'LBL_PASSWORD_GENERATED' => 'Új generált jelszó',
    'LBL_PASSWORD_EXPIRATION_LOGIN' => 'A jelszó lejárt. Kérjük, adja meg egy új jelszavát.',
    'LBL_PASSWORD_EXPIRATION_GENERATED' => 'Jelszava a rendszer által generált',
    'LBL_PASSWORD_EXPIRATION_TIME' => 'A jelszó lejárt. Kérjük, adja meg egy új jelszavát.',

    'LBL_PSW_MODIFIED' => 'Jelszó utolsó változása',
    'LBL_PHONE' => 'Telefon',
    'LBL_PICK_TZ_WELCOME' => 'Üdvözli Önt a SuiteCRM!',
    'LBL_PICK_TZ_DESCRIPTION' => 'Mielőtt folytatná, kérem ellenőrizze az időzónát. Válassza ki a megfelelő időzónát az alábbi listából, és nyomja meg a Mentés gombot. Az időzónát bármikot módosthatja a felhasználói beállításainál.',
    'LBL_PORTAL_ONLY_DESC' => 'Use for the Portal API. This type cannot login through the SuiteCRM web interface.',
    'LBL_PORTAL_ONLY_USER' => 'Portal API felhasználó',
    'LBL_POSTAL_CODE' => 'Irányítószám',
    'LBL_PRIMARY_ADDRESS' => 'Elsődleges cím',
    'LBL_PROMPT_TIMEZONE_TEXT' => 'Válasszon ki az Új Felhasználó Varázsló bejelentkező ablakában új felhasználókat',
    'LBL_PROMPT_TIMEZONE' => 'Felhasználó varázsló',
    'LBL_PROVIDE_USERNAME_AND_EMAIL' => 'Felhasználónév és Email cím megadása',
    'LBL_PUBLISH_KEY' => 'Kulcs publikálása',

    'LBL_RECAPTCHA_NEW_CAPTCHA' => 'Másik CAPTCHA bekérése',
    'LBL_RECAPTCHA_SOUND' => 'Váltás hangra',
    'LBL_RECAPTCHA_IMAGE' => 'Váltás képre',
    'LBL_RECAPTCHA_INSTRUCTION' => 'Írja be a két szót lent',
    'LBL_RECAPTCHA_INSTRUCTION_OPPOSITE' => 'Írja be a két szót jobbra',
    'LBL_RECAPTCHA_FILL_FIELD' => 'Írja be a képen látható szöveget!',
    'LBL_RECAPTCHA_INVALID_PRIVATE_KEY' => 'Helytelen Recaptcha Privát kulcs',
    'LBL_RECAPTCHA_INVALID_REQUEST_COOKIE' => 'Az ellenőrző Recaptcha kód hívó paramétere helytelen.',
    'LBL_RECAPTCHA_UNKNOWN' => 'Ismeretlen Recaptcha hiba',

    'LBL_RECEIVE_NOTIFICATIONS_TEXT' => 'Figyelmeztető email küldése, ha rekordot rendelnek Önhöz.',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Figyelmeztetés hozzárendelésre',
    'LBL_REGISTER' => 'Új felhasználó? Kérjük regisztráljon',
    'LBL_REGULAR_USER' => 'Normál Felhasználó',
    'LBL_REMINDER_TEXT' => 'Set a default for reminders for calls and meetings. Pop-up notifications appear for all invitees using SuiteCRM. Email reminders are sent to all invitees.',
    'LBL_REMINDER' => 'Emlékeztetők',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL' => 'Email',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Email all invitees',

    // new reminders

    'LBL_REMINDERS' => 'Emlékeztetők',
    'LBL_REMINDERS_ACTIONS' => 'Actions:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Email invitees',
    'LBL_REMINDERS_WHEN' => 'When:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Remove reminder',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Add All Invitees',
    'LBL_REMINDERS_ADD_REMINDER' => 'Add reminder',

    'LBL_REMOVED_TABS' => 'Eltávolított fülek',
    'LBL_REPORTS_TO_NAME' => 'Jelentést tesz',
    'LBL_REPORTS_TO' => 'Jelentést tesz',
    'LBL_REPORTS_TO_ID' => 'Jelentést tesz (azonosító)',
    'LBL_REQUEST_SUBMIT' => 'A kérése továbbításra került.',
    'LBL_RESET_TO_DEFAULT' => 'Alapértelmezés visszaállítása',
    'LBL_RESET_PREFERENCES' => 'Az alapbeállítások törlése',
    'LBL_RESET_PREFERENCES_WARNING' => 'Biztos hogy visszaállítja alapállapotba az összes felhasználói beállítást? Figyelem: Ezzel ki is fog jelentkezni az alkalmazásból.',
    'LBL_RESET_PREFERENCES_WARNING_USER' => 'Biztos hogy visszaállítja alapállapotba az összes beállítást erre a felhasználóra?',
    'LBL_RESET_HOMEPAGE' => 'Kezdőoldal visszaállítása',
    'LBL_RESET_DASHBOARD' => 'Műszerfal visszaállítása',
    'LBL_RESET_HOMEPAGE_WARNING' => 'Biztos benne hogy visszaállítja a Kezdőoldalt?',
    'LBL_RESET_HOMEPAGE_WARNING_USER' => 'Biztos benne hogy visszaállítja a Felhasználó Kezdőoldalát?',
    'LBL_SALUTATION' => 'Megszólítás',
    'LBL_ROLES_SUBPANEL_TITLE' => 'Szerepek',
    'LBL_SEARCH_FORM_TITLE' => 'Felhasználó keresése',
    'LBL_SEARCH_URL' => 'Keresés helye',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Kijelölt felhasználók kiválasztása',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Kijelölt felhasználók kiválasztása',
    'LBL_SETTINGS_URL_DESC' => 'Use this URL when establishing login settings for the SuiteCRM Plug-in for Microsoft&reg; Outlook&reg; and the SuiteCRM Plug-in for Microsoft&reg; Word&reg;.',
    'LBL_SETTINGS_URL' => 'URL:',
    'LBL_SIGNATURE' => 'Aláírás',
    'LBL_SIGNATURE_HTML' => 'HTML aláírás',
    'LBL_SIGNATURE_DEFAULT' => 'Aláírás használata?',
    'LBL_SIGNATURE_PREPEND' => 'Aláírás a válasz felett?',
    'LBL_SIGNATURES' => 'Aláírások',
    'LBL_STATE' => 'Állam',
    'LBL_STATUS' => 'Állapot',
    'LBL_SUBPANEL_LINKS' => 'Alfejezet linkek',
    'LBL_SUBPANEL_LINKS_DESCRIPTION' => 'A részletes megjelenítésben az Alfejezet egy sorát kattintható linkkel jeleníti meg.',
    'LBL_SUBPANEL_TABS' => 'Alfejezet fülek',
    'LBL_SUBPANEL_TABS_DESCRIPTION' => 'A részletes megjelenítésben fülekbe csoportosítja az Alfejezeteket, és egyszerre csak egy fület jelenít meg.',
    'LBL_SUGAR_LOGIN' => 'Is SuiteCRM User',
    'LBL_SUPPORTED_THEME_ONLY' => 'Csak azokra a témákra van hatással, amik támogatják ezt az opciót.',
    'LBL_SWAP_LAST_VIEWED_DESCRIPTION' => 'Jelölje be az Utoljára megtekintett sáv oldalt elhelyezéséhez. Egyébként felül kerül megjelenítésre.',
    'LBL_SWAP_SHORTCUT_DESCRIPTION' => 'Bejelölése esetén a gyorsindító ikonsáv felül. Ellenkező esetben az oldalon jelenik meg. ',
    'LBL_SWAP_LAST_VIEWED_POSITION' => 'Utoljára megtekintett oldal',
    'LBL_SWAP_SHORTCUT_POSITION' => 'Parancsikonok a tetején',
    'LBL_TAB_TITLE_EMAIL' => 'Email beállítások',
    'LBL_TAB_TITLE_USER' => 'Felhasználói beállítások',
    'LBL_THEME' => 'Témák',
    'LBL_THEME_COLOR' => 'Színes',
    'LBL_THEME_FONT' => 'Betűtípus',
    'LBL_TIME_FORMAT_TEXT' => 'Az idő megjelenítésének formátuma',
    'LBL_TIME_FORMAT' => 'Idő formátum',
    'LBL_TIMEZONE_DST_TEXT' => 'Nyári időszámítás figyelése',
    'LBL_TIMEZONE_DST' => 'Nyári időszámítás',
    'LBL_TIMEZONE_TEXT' => 'Állítsa be az időzónát',
    'LBL_TIMEZONE' => 'Időzóna',
    'LBL_TITLE' => 'Beosztás',
    'LBL_USE_REAL_NAMES' => 'Teljes nevek megjelenítése',
    'LBL_USE_REAL_NAMES_DESC' => 'A felhasználó teljes nevét jelenítse meg a Felhasználónév helyett a hozzárendelt mezőkben.',
    'LBL_USER_INFORMATION' => 'Felhasználói profil',
    'LBL_USER_LOCALE' => 'Helyi beállítások',
    'LBL_USER_NAME' => 'Felhasználó név',
    'LBL_USER_SETTINGS' => 'Felhasználói beállítások',
    'LBL_USER_TYPE' => 'Felhasználó típusa',
    'LBL_USER_ACCESS' => 'Hozzáférés',
    'LBL_USER' => 'Felhasználók',
    'LBL_WORK_PHONE' => 'Irodai telefon',
    'LBL_YOUR_PUBLISH_URL' => 'Elérési útvonalam publikálása',
    'LBL_ICAL_PUB_URL' => 'iCal integration URL',
    'LBL_ICAL_PUB_URL_HELP' => 'Use this URL to subscribe to the SuiteCRM calendar within iCal.',
    'LBL_YOUR_QUERY_URL' => 'A lekérdezés URL',
    'LNK_NEW_USER' => 'Új felhasználó létrehozása',
    'LNK_NEW_PORTAL_USER' => 'Portál API felhasználó létrehozása',
    'LNK_NEW_GROUP_USER' => 'Felhasználói csoport létrehozása',
    'LNK_USER_LIST' => 'Felhasználók megtekintése',
    'LNK_REASSIGN_RECORDS' => 'Rekordok újra-hozzárendelése',
    'LBL_PROSPECT_LIST' => 'Lehetséges vevők listája',
    'LBL_EMAILS' => 'Email',
    'LBL_PROCESSING' => 'Feldolgozás',
    'LBL_UPDATE_FINISH' => 'Frissítés kész',
    'LBL_AFFECTED' => 'érintett',

    'LBL_USER_NAME_FOR_ROLE' => 'Felhasználók/Csoportok/Szerepkörök',
    'LBL_SESSION_EXPIRED' => 'Ön kijelentkezett, mert a munkamenet lejárt.',

// INBOUND EMAIL STRINGS
    'LBL_APPLY_OPTIMUMS' => 'Optimális beállítások alkalmazása',
    'LBL_ASSIGN_TO_USER' => 'Felhasználóhoz rendel',
    'LBL_BASIC' => 'Beérkező levelek beállítása',
    'LBL_CERT_DESC' => 'Levelező szerver biztonsági előírások érvényesítésének kikényszerítése - ne használja ha Ön már bejelentkezett.',
    'LBL_CERT' => 'Érvényesítés tanúsítvány',
    'LBL_FIND_OPTIMUM_KEY' => 'f',
    'LBL_FIND_OPTIMUM_MSG' => 'Optimális kapcsolódási paraméterek keresése.',
    'LBL_FIND_OPTIMUM_TITLE' => 'Optimális beállítások keresése.',
    'LBL_FORCE' => 'Negatív válasz kikényszerítése',
    'LBL_FORCE_DESC' => 'Néhány IMAP/POP szervernek szüksége van speciális csatlakozásokra. Ellenőrizze a beállításokat. (pl.: NOTLS)',
    'LBL_FOUND_OPTIMUM_MSG' => 'Megtalálta az optimális beállításokat. Nyomja meg a lenti gombot a Postaláda beállításához.',
    'LBL_EMAIL_INBOUND_TITLE' => 'Beérkező levelek beállításai',
    'LBL_EMAIL_OUTBOUND_TITLE' => 'Elküldött levelek beállításai',
    'LBL_LOGIN' => 'Felhasználó név',
    'LBL_MAILBOX_DEFAULT' => 'Bejövő levelek',
    'LBL_MAILBOX_SSL_DESC' => 'Használja az SSL-t csatlakozáskor. Hiba esetén ellenőrizze a PHP beállításokat a konfigurációban: "--with-imap-ssl"',
    'LBL_MAILBOX' => 'Megfigyelt mappa',
    'LBL_MAILBOX_TYPE' => 'Lehetséges tevékenységek',
    'LBL_MARK_READ_NO' => 'Importálás után az email-ek bejelölése töröltnek',
    'LBL_MARK_READ_YES' => 'Email maradt a szerveren importálás után',
    'LBL_MARK_READ_DESC' => 'Import esetén az üzenetek jelölése olvasott a szerveren, ne törölje.',
    'LBL_MARK_READ' => 'Üzenetek hagyása a szerveren',
    'LBL_ONLY_SINCE_NO' => 'Nem. Ellenőrizze újra az összes levelet a szerveren.',
    'LBL_ONLY_SINCE_YES' => 'Igen.',
    'LBL_ONLY_SINCE_DESC' => 'A PHP nem látja az új üzeneteket a POP3 használata során. Ellenőrizze a zászlót az utoljára vizsgált levelek közül, amelyek ki voltak választva.',
    'LBL_ONLY_SINCE' => 'Az utolsó ellenőrzés óta importált:',
    'LBL_PORT' => 'Levelező szerver port',
    'LBL_SERVER_OPTIONS' => 'Bővített beállítások',
    'LBL_SERVER_TYPE' => 'Levelező szerver protokoll',
    'LBL_SERVER_URL' => 'Levelező szerver cím',
    'LBL_SSL' => 'SSL használata',
    'LBL_SSL_DESC' => 'Használja a biztonságos csatlakozási szintet amikor csatlakozik a levelező szerverhez.',
    'LBL_TEST_BUTTON_KEY' => 't',
    'LBL_TEST_BUTTON_TITLE' => 'Teszt [Alt+T]',
    'LBL_TEST_SETTINGS' => 'Teszt Beállítások',
    'LBL_TEST_SUCCESSFUL' => 'Csatlakozás sikeresen létrejött',
    'LBL_TLS_DESC' => 'Használja a Szállítási Szintű Biztonságot, amikor a levelező szerverhez csatlakozik - ezt csak akkor használja ha a levelező rendszere támogatja ezt a protokollt.',
    'LBL_TLS' => 'TLS használata',
    'LBL_TOGGLE_ADV' => 'Haladó beállítások megjenítése',
    'LBL_OWN_OPPS' => 'Nincsenek lehetőségek',
    'LBL_EXTERNAL_AUTH_ONLY' => 'Csak ennek a felhasználónak az azonosítása',
    'LBL_ONLY' => 'Csak',
    'LBL_OWN_OPPS_DESC' => 'Válassza ki, ha a felhasználó nem fogja hozzárendelni lehetőségeket. Használja ezt a beállítást a felhasználók számára, akik a vezetők, de nem szerepelnek az értékesítési tevékenységekben. A beállítás használható az előrejelzési modulhoz.',
// END INBOUND EMAIL STRINGS
    'LBL_LDAP_ERROR' => 'LDAP Hiba: Kérem lépjen kapcsolatba a Rendszergazdával',
    'LBL_LDAP_EXTENSION_ERROR' => 'LDAP Hiba: Hosszabbítás nincs betöltve',

// PROJECT RESOURCES STRINGS
    'LBL_USER_HOLIDAY_SUBPANEL_TITLE' => 'A felhasználó szabadságai',
    'LBL_RESOURCE_NAME' => 'Név',
    'LBL_RESOURCE_TYPE' => 'Típus',

    'LBL_PDF_SETTINGS' => 'PDF-beállítások',
    'LBL_PDF_PAGE_FORMAT' => 'Oldal Formátum',
    'LBL_PDF_PAGE_FORMAT_TEXT' => 'Oldalak formátuma',
    'LBL_PDF_PAGE_ORIENTATION' => 'Oldal Elrendezése',
    'LBL_PDF_PAGE_ORIENTATION_TEXT' => '',
    'LBL_PDF_PAGE_ORIENTATION_P' => 'Álló',
    'LBL_PDF_PAGE_ORIENTATION_L' => 'Fekvő',
    'LBL_PDF_MARGIN_HEADER' => 'Fejléc margó',
    'LBL_PDF_MARGIN_HEADER_TEXT' => '',
    'LBL_PDF_MARGIN_FOOTER' => 'Lábléc margó',
    'LBL_PDF_MARGIN_FOOTER_TEXT' => '',
    'LBL_PDF_MARGIN_TOP' => 'Felső margó',
    'LBL_PDF_MARGIN_TOP_TEXT' => '',
    'LBL_PDF_MARGIN_BOTTOM' => 'Alsó margó',
    'LBL_PDF_MARGIN_BOTTOM_TEXT' => '',
    'LBL_PDF_MARGIN_LEFT' => 'Bal margó',
    'LBL_PDF_MARGIN_LEFT_TEXT' => '',
    'LBL_PDF_MARGIN_RIGHT' => 'Jobb margó',
    'LBL_PDF_MARGIN_RIGHT_TEXT' => '',
    'LBL_PDF_FONT_NAME_MAIN' => 'Fejléc és tartalmi rész betűtípusa',
    'LBL_PDF_FONT_NAME_MAIN_TEXT' => 'A kijelölt betűtípus alkalmazása a PDF dokumentum fejlécének és tartalmi részének szövegében. ',
    'LBL_PDF_FONT_SIZE_MAIN' => 'Elsődleges betűméret',
    'LBL_PDF_FONT_SIZE_MAIN_TEXT' => '',
    'LBL_PDF_FONT_NAME_DATA' => 'Lábléc betűtípusa',
    'LBL_PDF_FONT_NAME_DATA_TEXT' => 'A kijelölt betűtípus alkalmazása a PDF dokumentum láblécének szövegében. ',
    'LBL_PDF_FONT_SIZE_DATA' => 'Adat betűmérete',
    'LBL_PDF_FONT_SIZE_DATA_TEXT' => '',
    'LBL_LAST_ADMIN_NOTICE' => 'Ön saját magát választotta ki. Felhasználói Típus vagy Státusz önmagában nem módosítható.',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Mail szerver:',
    'LBL_SMTP_SERVER_HELP' => 'Ez az SMTP levelező szerver a kimenő levelekért felelős. Adjon meg egy felhasználó nevet és jelszót levelező fiókjához.',
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Rendszergazdai jogosultság nincs beállítva alapértelmezetten a kimenő fiókban. Teszt email nem küldhető.',
    'LBL_MAIL_SMTPPASS' => 'SMTP jelszó:',
    'LBL_MAIL_SMTPUSER' => 'SMTP felhasználónév',
    'LBL_MAIL_SMTPTYPE' => 'SMTP szerver típusa:',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP szerver specifikációja',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Válassza ki az e-mail szolgáltatóját:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Jelszó:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail azonosító:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail jelszó:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail Email cím:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange jelszó',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange felhasználónév:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Port',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server:',
    'LBL_OK' => 'OK',
    'LBL_CANCEL' => 'Mégsem',
    'LBL_DELETE_USER' => 'Felhasználó törlése',
    // Wizard
    'LBL_WIZARD_TITLE' => 'Felhasználó varázsló',
    'LBL_WIZARD_WELCOME_TAB' => 'Üdvözöljük',
    'LBL_WIZARD_WELCOME_TITLE' => 'Üdvözli Önt a SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Click <b>Next</b> to configure a few basic settings for using SuiteCRM.',
    'LBL_WIZARD_WELCOME_NOSMTP' => 'Click <b>Next</b> to configure a few basic settings for using SuiteCRM.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Következő>',
    'LBL_WIZARD_BACK_BUTTON' => '<Vissza',
    'LBL_WIZARD_SKIP_BUTTON' => 'Kihagy',
    'LBL_WIZARD_FINISH_BUTTON' => 'Befejezés',
    'LBL_WIZARD_FINISH_TAB' => 'Befejezés',
    'LBL_WIZARD_FINISH_TITLE' => 'Ön már használja a SuiteCRM-et!',

    'LBL_WIZARD_FINISH' => 'Click <b>Finish</b> below to save your settings and to begin using SuiteCRM. For more information on using SuiteCRM:<br /><br />
<table cellpadding=0 cellspacing=0>
<tr><td><!--not_in_theme!-->Visit www.suitecrm.com <img src=include/images/suitecrm_login.png style="margin-right: 5px;"></td><td><a href="http://www.suitecrm.com/" target="_blank"><b>SuiteCRM</b></a></td></tr>
</table>',

    'LBL_WIZARD_FINISH1' => 'What would you like to do next?',
    'LBL_WIZARD_FINISH2' => 'Start Using SuiteCRM',
    'LBL_WIZARD_FINISH3' => 'Import Data ',
    'LBL_WIZARD_FINISH4' => 'Import data from external sources into the application.',
    'LBL_WIZARD_FINISH5' => 'Create Users',
    'LBL_WIZARD_FINISH6' => 'Create new user accounts for people to use to access the application.',
    'LBL_WIZARD_FINISH7' => 'View and Manage Application Settings',
    'LBL_WIZARD_FINISH8' => 'Manage advanced settings, including default application settings.',
    'LBL_WIZARD_FINISH9' => 'Configure the Application ',
    'LBL_WIZARD_FINISH10' => 'Use Studio to create and manage application fields and layouts.',
    'LBL_WIZARD_FINISH11' => 'Visit SuiteCRM Site ',
    'LBL_WIZARD_FINISH12' => 'Find training materials and classes that will help you get started as a system administrator or end user of the application.',
    'LBL_WIZARD_FINISH14' => 'Documentation ',
    'LBL_WIZARD_FINISH15' => 'Product Guides and Release Notes ',
    'LBL_WIZARD_FINISH16' => 'Knowledge Base ',
    'LBL_WIZARD_FINISH17' => 'Tips from SuiteCRM',
    'LBL_WIZARD_FINISH18' => 'Forums ',
    'LBL_WIZARD_FINISH19' => 'Forums dedicated to the SuiteCRM Community to discuss topics of interest with each other and with SuiteCRM Developers ',
    'LBL_WIZARD_FINISH2DESC' => 'Go directly to the application Home page.',
    'LBL_WIZARD_PERSONALINFO' => 'Az Ön adatai',
    'LBL_WIZARD_LOCALE' => 'Az Ön tartózkodási helye',
    'LBL_WIZARD_SMTP' => 'Az Ön Emailfiókja',
    'LBL_WIZARD_PERSONALINFO_DESC' => 'Provide information about yourself. The information you provide about yourself will be visible to other SuiteCRM users.<br />Fields marked with <span class="required">*</span> are required.',
    'LBL_WIZARD_LOCALE_DESC' => 'Specify your time zone and how you would like dates, currencies and names to appear in SuiteCRM.',
    'LBL_WIZARD_SMTP_DESC' => 'Adjon meg egy felhasználó nevet és jelszót alapértelmezett levelező fiókjához.',
    'LBL_EAPM_SUBPANEL_TITLE' => 'Kiterjesztett Klienslisták',

    'LBL_EDITLAYOUT' => 'Elrendezés szerkesztése' /*for 508 compliance fix*/,
    'LBL_HELP' => 'Súgó' /*for 508 compliance fix*/,
    'LBL_CHECKMARK' => 'Checkmark' /*for 508 compliance fix*/,
    'LBL_THEMEPREVIEW' => 'Előnézet' /*for 508 compliance fix*/,

    'LBL_OAUTH_TOKENS' => 'OAuth Tokens',
    'LBL_OAUTH_TOKENS_SUBPANEL_TITLE' => "OAuth Access Tokens",

    //For export labels
    'LBL_MODIFIED_USER_ID' => 'Modified User ID',
    'LBL_PHONE_HOME' => 'Otthoni telefon',
    'LBL_PHONE_MOBILE' => 'Mobil:',
    'LBL_PHONE_WORK' => 'Munkahelyi telefon',
    'LBL_PHONE_OTHER' => 'Egyéb telefon',
    'LBL_PHONE_FAX' => 'Fax:',
    'LBL_PORTAL_ONLY' => 'Portál-Only Felhasználó:',
    'LBL_SHOW_ON_EMPLOYEES' => 'Display Employee Record',
    'LBL_IS_GROUP' => 'Is Group',
    'LBL_EXPORT_CREATED_BY' => 'Létrehozva ID szerint',

    'LBL_DATE_MODIFIED' => 'Módosítás dátuma',
    'LBL_DATE_ENTERED' => 'Létrehozás dátuma',
    'LBL_DELETED' => 'Törölve',
    'LBL_HIDEOPTIONS' => 'Beállítások elrejtése',
    'LBL_SHOWOPTIONS' => 'Beállítások megjelenítése',

    'LBL_SUITE_SUPERCHARGED' => "Supercharged by SuiteCRM",
    'LBL_SUITE_POWERED_BY' => "Powered By SugarCRM",
    'LBL_SUITE_TOP' => "Vissza az elejére",
    'LBL_SUITE_PRINT' => "Print this page",
    'LBL_SUITE_DESC1' => 'SuiteCRM has been written and assembled by SalesAgility, one of the worlds most knowledgeable SugarCRM consultancies.',
    'LBL_SUITE_DESC2' => 'SuiteCRM is intended to deliver on the promise of SugarCRM - a freely available open source CRM project that combines great functionality, with community and commitment.',
    'LBL_SUITE_DESC3' => 'There will be no licenced software as part of the project managed by SalesAgility. All the code is free. All the code is available for free download. There is no hidden agenda to charge for access to the code. It is and always will be free and open source. There will be no paid-for versions.',
    'LBL_QUICK_ACCOUNT' => 'Cég lérehozása',
    'LBL_QUICK_CONTACT' => 'Kapcsolat lérehozása',
    'LBL_QUICK_OPPORTUNITY' => 'Lehetőség lérehozása',
    'LBL_QUICK_LEAD' => 'Megkeresés lérehozása',
    'LBL_QUICK_DOCUMENT' => 'Dokumentum létrehozása',
    'LBL_QUICK_CALL' => 'Hívások ütemezése',
    'LBL_QUICK_TASK' => 'Feladat lérehozása',

    'LBL_ENABLE_NOTIFICATIONS' => 'Enable Desktop Notifications',
    'LBL_LIST_NONINHERITABLE' => "Nem Örökölhető",
    'LBL_PRIMARY_GROUP' => "elsodleges csoport",

); // END STRINGS DEFS

?>