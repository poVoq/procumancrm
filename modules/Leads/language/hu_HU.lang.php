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
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array(
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'Vezetéknév',
    'db_first_name' => 'Keresztnév',
    'db_title' => 'Beosztás',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',

    //END DON'T CONVERT
    'ERR_DELETE_RECORD' => 'Adjon meg egy azonosítót az ajánlás törléséhez!',
    'LBL_ACCOUNT_DESCRIPTION' => 'Kliens leírása',
    'LBL_ACCOUNT_ID' => 'Kliensazonosító ',
    'LBL_ACCOUNT_NAME' => 'Kliensnév:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Tevékenységek',
    'LBL_ADD_BUSINESSCARD' => 'Névjegykártya hozzáadása',
    'LBL_ADDRESS_INFORMATION' => 'Cím információ',
    'LBL_ALT_ADDRESS_CITY' => 'Alternatív cím (város):',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternatív cím (megye):',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternatív cím (irsz):',
    'LBL_ALT_ADDRESS_STATE' => 'Alternatív cím (állam):',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alternatív cím (közterület2):',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternatív cím (közterület3):',
    'LBL_ALT_ADDRESS_STREET' => 'Alternatív cím',
    'LBL_ALTERNATE_ADDRESS' => 'Egyéb cím:',
    'LBL_ALT_ADDRESS' => 'Egyéb cím:',
    'LBL_ANY_ADDRESS' => 'Bármilyen cím:',
    'LBL_ANY_EMAIL' => 'Bármilyen Email:',
    'LBL_ANY_PHONE' => 'Bármilyen telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Felelős:',
    'LBL_ASSIGNED_TO_ID' => 'Felelős felhasználó:',
    'LBL_BACKTOLEADS' => 'Vissza az ajánlásokhoz',
    'LBL_BUSINESSCARD' => 'Ajánlás konvertálása',
    'LBL_CITY' => 'Város:',
    'LBL_CONTACT_ID' => 'Kapcsolat azonosító',
    'LBL_CONTACT_INFORMATION' => 'Ajánlás áttekitése',
    'LBL_CONTACT_NAME' => 'Ajánlás neve:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Ajánlás-Lehetőség:',
    'LBL_CONTACT_ROLE' => 'Szerepkör:',
    'LBL_CONTACT' => 'Ajánlás:',
    'LBL_CONVERTED_ACCOUNT' => 'Konvertált kliens:',
    'LBL_CONVERTED_CONTACT' => 'Konvertált Kapcsolat:',
    'LBL_CONVERTED_OPP' => 'Konvertált Lehetőség:',
    'LBL_CONVERTED' => 'Konvertált',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Ajánlás konvertálása [Alt+V]',
    'LBL_CONVERTLEAD' => 'Ajánlás konvertálása',
    'LBL_CONVERTLEAD_WARNING' => 'Figyelem: Az Ajánlások állapota "Konvertálva". Kapcsolat és / vagy kliensnév már létrehozva. Folytatáshoz kattintson a Mentés gombra, visszalépéshez a Mégsem gombra!',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Lehetséges kapcsolat:',
    'LBL_COUNTRY' => 'Ország:',
    'LBL_CREATED_NEW' => 'Létrehozva egy új',
    'LBL_CREATED_ACCOUNT' => 'Új kliens létrehozva',
    'LBL_CREATED_CALL' => 'Új hívás létrehozva',
    'LBL_CREATED_CONTACT' => 'Új kapcsolat létrehozva',
    'LBL_CREATED_MEETING' => 'Új találkozó létrehozva',
    'LBL_CREATED_OPPORTUNITY' => 'Új lehetőség létrehozva',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ajánlások',
    'LBL_DEPARTMENT' => 'Osztály:',
    'LBL_DESCRIPTION_INFORMATION' => 'Információ részletezve',
    'LBL_DESCRIPTION' => 'Leírás:',
    'LBL_DO_NOT_CALL' => 'Nem szabad felhívni:',
    'LBL_DUPLICATE' => 'Hasonló ajánlások',
    'LBL_EMAIL_ADDRESS' => 'Email cím:',
    'LBL_EMAIL_OPT_OUT' => 'Elutasítva',
    'LBL_EXISTING_ACCOUNT' => 'Egy létező kliens használata',
    'LBL_EXISTING_CONTACT' => 'Egy létező kapcsolat használata',
    'LBL_EXISTING_OPPORTUNITY' => 'Egy létező lehetőség használata',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Keresztnév:',
    'LBL_FULL_NAME' => 'Teljes név:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Előzmények',
    'LBL_HOME_PHONE' => 'Otthoni telefon:',
    'LBL_IMPORT_VCARD' => 'vCard betöltése',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatikusan létrehoz egy új ajánlást vCard a fájlrendszerből importálással.',
    'LBL_INVALID_EMAIL' => 'Érvénytelen Email:',
    'LBL_INVITEE' => 'Közvetlen jelentések',
    'LBL_LAST_NAME' => 'Vezetéknév:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Ajánlás forrás leírása:',
    'LBL_LEAD_SOURCE' => 'Ajánlás forrása:',
    'LBL_LIST_ACCEPT_STATUS' => 'Elfogadás státusza',
    'LBL_LIST_ACCOUNT_NAME' => 'Kliensnév',
    'LBL_LIST_CONTACT_NAME' => 'Ajánlás neve',
    'LBL_LIST_CONTACT_ROLE' => 'Szerepkör',
    'LBL_LIST_DATE_ENTERED' => 'Létrehozás dátuma',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'Keresztnév',
    'LBL_VIEW_FORM_TITLE' => 'Ajánlás megtekintése',
    'LBL_LIST_FORM_TITLE' => 'Ajánlás lista',
    'LBL_LIST_LAST_NAME' => 'Vezetéknév',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Ajánlás forrásának leírása:',
    'LBL_LIST_LEAD_SOURCE' => 'Ajánlás forrása',
    'LBL_LIST_MY_LEADS' => 'Saját ajánlásaim',
    'LBL_LIST_NAME' => 'Név',
    'LBL_LIST_PHONE' => 'Irodai telefon',
    'LBL_LIST_REFERED_BY' => 'Hivatkozva',
    'LBL_LIST_STATUS' => 'Állapot',
    'LBL_LIST_TITLE' => 'Beosztás',
    'LBL_MOBILE_PHONE' => 'Mobil:',
    'LBL_MODULE_NAME' => 'Ajánlások',
    'LBL_MODULE_TITLE' => 'Ajánlások: Főoldal',
    'LBL_NAME' => 'Név',
    'LBL_NEW_FORM_TITLE' => 'Új ajánlás',
    'LBL_NEW_PORTAL_PASSWORD' => 'Új portál jelszó:',
    'LBL_OFFICE_PHONE' => 'Irodai telefon:',
    'LBL_OPP_NAME' => 'Lehetőség neve:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Lehetőség összege:',
    'LBL_OPPORTUNITY_ID' => 'Lehetőség azonosítója',
    'LBL_OPPORTUNITY_NAME' => 'Lehetőség neve:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Egyéb Email:',
    'LBL_OTHER_PHONE' => 'Egyéb telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_ACTIVE' => 'Portál aktív:',
    'LBL_PORTAL_APP' => 'Portál alkalmazás',
    'LBL_PORTAL_INFORMATION' => 'Portál információ',
    'LBL_PORTAL_NAME' => 'Portál neve:',
    'LBL_PORTAL_PASSWORD_ISSET' => 'Portál jelszó beállítva:',
    'LBL_POSTAL_CODE' => 'Irányítószám:',
    'LBL_STREET' => 'Utca',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Elsődleges cím (város)',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Elsődleges cím (megye)',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Elsődleges cím (irsz)',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Elsődleges cím (állam)',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Elsődleges cím (közterület2)',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Elsődleges cím (közterület3)',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Elsődleges cím (közterület1)',
    'LBL_PRIMARY_ADDRESS' => 'Elsődleges cím:',
    'LBL_REFERED_BY' => 'Hivatkozva:',
    'LBL_REPORTS_TO_ID' => 'Jelentést tesz (azonosító)',
    'LBL_REPORTS_TO' => 'Jelentést tesz:',
    'LBL_REPORTS_FROM' => 'Reports From:',
    'LBL_SALUTATION' => 'Megszólítás',
    'LBL_MODIFIED' => 'Módosította',
    'LBL_MODIFIED_ID' => 'Módosító azonosítója',
    'LBL_CREATED' => 'Létrehozta',
    'LBL_CREATED_ID' => 'Létrehozó azonosítója',
    'LBL_SEARCH_FORM_TITLE' => 'Ajánlás keresése',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Válasszon az ellenőrzött ajánlások közül',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Válasszon az ellenőrzött ajánlások közül',
    'LBL_STATE' => 'Állam:',
    'LBL_STATUS_DESCRIPTION' => 'Állapot leírása:',
    'LBL_STATUS' => 'Állapot:',
    'LBL_TITLE' => 'Beosztás:',
    'LNK_IMPORT_VCARD' => 'Ajánlás létrehozás vCard állományból',
    'LNK_LEAD_LIST' => 'Ajánlások megtekintése',
    'LNK_NEW_ACCOUNT' => 'Kliens létrehozása',
    'LNK_NEW_APPOINTMENT' => 'Találkozó létrehozása',
    'LNK_NEW_CONTACT' => 'Kapcsolat létrehozása',
    'LNK_NEW_LEAD' => 'Ajánlás létrehozása',
    'LNK_NEW_NOTE' => 'Megjegyzés létrehozása',
    'LNK_NEW_TASK' => 'Feladat létrehozása',
    'LNK_NEW_CASE' => 'Eset létrehozása',
    'LNK_NEW_CALL' => 'Hívás naplózása',
    'LNK_NEW_MEETING' => 'Találkozó ütemezése',
    'LNK_NEW_OPPORTUNITY' => 'Lehetőség létrehozása',
    'LNK_SELECT_ACCOUNTS' => 'VAGY válasszon klienst',
    'LNK_SELECT_CONTACTS' => ' <b>OR</b> Select Contact',
    'NTC_COPY_ALTERNATE_ADDRESS' => 'Alternatív cím másolása az elsődleges címbe',
    'NTC_COPY_PRIMARY_ADDRESS' => 'Elsődleges cím másolása az alternatív címbe',
    'NTC_DELETE_CONFIRMATION' => 'Biztosan törölni akarod ezt a rekordot?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Egy ajánlás felviteléhez egy kliens létrehozása szükséges. Kérem, hozzon létre egy klienst, vagy válasszon a meglévők közül!',
    'NTC_REMOVE_CONFIRMATION' => 'Biztosan el akarja választani az ajánlást az esettől?',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Biztosan el akarja távolítani ezt a közvetlen jelentést?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampányok',
    'LBL_TARGET_OF_CAMPAIGNS' => 'Sikeres kampány',
    'LBL_TARGET_BUTTON_LABEL' => 'Célzott',
    'LBL_TARGET_BUTTON_TITLE' => 'Célzott',
    'LBL_TARGET_BUTTON_KEY' => 'T',
    'LBL_CAMPAIGN' => 'Kampány:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Felelős:',
    'LBL_PROSPECT_LIST' => 'Lehetséges vevő lista',
    'LBL_CAMPAIGN_LEAD' => 'Kampányok',
    'LBL_BIRTHDATE' => 'Születési dátum:',
    'LBL_THANKS_FOR_SUBMITTING_LEAD' => 'Köszönjük az ajánlat beküldését.',
    'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' => 'Sajnáljuk a szerver pillanatnyilag nem érhető el, próbálja meg később.',
    'LBL_ASSISTANT_PHONE' => 'Aszisztens telefonja:',
    'LBL_ASSISTANT' => 'Aszisztens',
    'LBL_REGISTRATION' => 'Regisztráció',
    'LBL_MESSAGE' => 'Kérjük, adja meg az alábbi adatokat. Információs és/vagy egy fiók jön létre az Ön számára  jóváhagyásra.',
    'LBL_SAVED' => 'Köszönjük a regisztrációt. Az Ön fiókja létre jött. Rövidesen felveszi Önnel a kapcsolatot valamelyik munkatársunk.',
    'LBL_CLICK_TO_RETURN' => 'Vissza a Portál-ra',
    'LBL_CREATED_USER' => 'Felhasználó létrehozva',
    'LBL_MODIFIED_USER' => 'Felhasználó módosítva',
    'LBL_CAMPAIGNS' => 'Kampányok',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Kampányok',
    'LBL_CONVERT_MODULE_NAME' => 'Modul',
    'LBL_CONVERT_REQUIRED' => 'Szükséges',
    'LBL_CONVERT_SELECT' => 'Kiválasztás engedélyezése',
    'LBL_CONVERT_COPY' => 'Adat másolás',
    'LBL_CONVERT_EDIT' => 'Szerkeszt',
    'LBL_CONVERT_DELETE' => 'Törlés',
    'LBL_CONVERT_ADD_MODULE' => 'Modul hozzáadása',
    'LBL_CREATE' => 'Létrehoz',
    'LBL_SELECT' => 'VAGY válassza ki',
    'LBL_WEBSITE' => 'Honlap',
    'LNK_IMPORT_LEADS' => 'Ajánlások importálása',
    'LBL_NOTICE_OLD_LEAD_CONVERT_OVERRIDE' => 'Megjegyzés: Az aktuális Konvertálási Ajánlás egyéni mezőket tartalmaz. A képernyő testreszabásához  adjon hozzá egyéni mezőket a felülethez, ha szükséges. Az egyéni mezők nem jelennek meg automatikusan a felületen, ahogy korábban sem.',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'A modul létrehoz egy új rekordot:',
    'LBL_REQUIRED_TIP' => 'Kötelező modulokat létre kell hozni vagy a meglévőkből kiválasztani, mielőtt az ajánlást konvertálni lehet.',
    'LBL_COPY_TIP' => 'Ha be van jelölve, a rendszer az ajánlásokban lévő mezőkről készít egy másolatot ugyanazzal a névvel az újonnan létrehozott rekordokban.',
    'LBL_SELECTION_TIP' => 'A Modulokat a Kapcsolatok mezőben lehet kiválasztani a konvertált ajánlási folyamatok létrehozása helyett.',
    'LBL_EDIT_TIP' => 'Módosítsa a konvertálási felületet ebben a modulban.',
    'LBL_DELETE_TIP' => 'Távolítsa el ezt a modult a konvertálási felületből.',

    'LBL_ACTIVITIES_MOVE' => 'Move Activities to',
    'LBL_ACTIVITIES_COPY' => 'Copy Activities to',
    'LBL_ACTIVITIES_MOVE_HELP' => "Select the record to which to move the Lead's activities. Tasks, Calls, Meetings, Notes and Emails will be moved to the selected record(s).",
    'LBL_ACTIVITIES_COPY_HELP' => "Select the record(s) for which to create copies of the Lead's activities. New Tasks, Calls, Meetings and Notes will be created for each of the selected record(s). Emails will be related to the selected record(s).",
    //For export labels
    'LBL_PHONE_HOME' => 'Otthoni telefon',
    'LBL_PHONE_MOBILE' => 'Mobil:',
    'LBL_PHONE_WORK' => 'Munkahelyi telefon',
    'LBL_PHONE_OTHER' => 'Egyéb telefon',
    'LBL_PHONE_FAX' => 'Fax:',
    'LBL_CAMPAIGN_ID' => 'Kampány azonosító',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Felelős felhasználó',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Felelős felhasználó ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Módosítás ID szerint',
    'LBL_EXPORT_CREATED_BY' => 'Létrehozva ID szerint',
    'LBL_EXPORT_PHONE_MOBILE' => 'Mobil telefon',
    'LBL_EXPORT_EMAIL2' => 'Egyéb eMail címek',
    'LBL_EDITLAYOUT' => 'Elrendezés szerkesztése' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Írja be a dátumot' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Loading' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Módosítás' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Események',
);
?>
