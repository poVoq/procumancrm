<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004 - 2011 SugarCRM Inc.
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
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
     // Replaced by RAPIRA -->
 ********************************************************************************/
  /*********************************************************************************
  *
  * This file was generated by the RAPIRA Translation Suite ----------
  *
  ***********************************************************************likhobory*/

  /*********************************************************************************
  * Description : Defines the Russian language pack for the base application.
  * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc. All Rights Reserved.
  * Contributor(s):
  *********************************************************************************/
 // Replaced by RAPIRA <--
global $timedate;

$mod_strings = array (

    'LBL_GOOD_FILE' => 'Файл импорта успешно прочитан',
    'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Строки не импортированы из-за возникшей ошибки',
    'LBL_UPDATE_SUCCESSFULLY' => 'записей успешно обновлены',
    'LBL_SUCCESSFULLY_IMPORTED' => 'записей создано',
    'LBL_STEP_4_TITLE' => 'Шаг {0}: Импорт файла',
    'LBL_STEP_5_TITLE' => 'Шаг {0}: Просмотр результата импорта',
    'LBL_CUSTOM_ENCLOSURE' => 'Поля ограничены символом:',
    'LBL_ERROR_UNABLE_TO_PUBLISH' => 'Нельзя опубликовать схему. Уже существует другая схема импорта с аналогичным названием.',
    'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'Нельзя отменить публикацию схемы импорта, принадлежащую другому пользователю. Необходимо чтобы схема импорта с аналогичным названием принадлежала вам.',
    'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'Импорт не настроен для данного типа модуля',
    'LBL_IMPORT_TYPE' => 'Параметры импорта',
    'LBL_IMPORT_BUTTON' => 'Создание новых записей',
    'LBL_UPDATE_BUTTON' => 'Создание новых и обновление существующих записей',
	'LBL_CREATE_BUTTON_HELP' => 'Данная опция используется только для создания новых записей. Примечание: если идентификатор импортируемой записи (ID) совпадает с идентификатором записи в БД, то такая запись импортирована не будет.',
    'LBL_UPDATE_BUTTON_HELP' => 'Данная опция используется для создания новых и обновления существующих записей. Примечание: обновлению подвергнутся записи, у которых идентификатор (ID) совпадает с идентификатором импортируемой записи.',
    'LBL_ERROR_INVALID_BOOL'=>'Неверное значение (должно быть 1 или 0)',
    'LBL_NO_ID' => 'Требуется ID',
    'LBL_PRE_CHECK_SKIPPED' => 'Предварительная проверка пропущена',
    'LBL_IMPORT_ERROR' => 'Ошибки импорта:',
    'LBL_ERROR' => 'Ошибка:',
    'LBL_NOLOCALE_NEEDED' => 'Перекодировка не требуется',
    'LBL_FIELD_NAME' => 'Название поля',
    'LBL_VALUE' => 'Значение',
    'LBL_ROW_NUMBER' => 'Номер строки',
    'LBL_NONE' => 'Нет',
    'LBL_REQUIRED_VALUE' => 'Требуемое значение отсутствует',
	'LBL_ERROR_SYNC_USERS' => 'Эти данные не могут быть синхронизированы с Outlook: ',
    'LBL_ID_EXISTS_ALREADY' => 'Данный ID уже присутствует в этой таблице',
    'LBL_ASSIGNED_USER' => 'Если пользователь не существует - используйте текущего пользователя',
    'LBL_SHOW_HIDDEN' => 'Показать поля, которые не могут быть корректно импортированы',                           ///
    'LBL_UPDATE_RECORDS' => 'Обновление существующих записей (операцию нельзя отменить)',
    'LBL_TEST'=> 'Тестирование импорта (данные НЕ добавляются и НЕ изменяются)',
    'LBL_TRUNCATE_TABLE' => 'Очистить таблицу перед импортом (удаление всех записей)',
    'LBL_RELATED_ACCOUNTS' => 'Do not create related accounts',                    ///
    'LBL_NO_DATECHECK' => 'Пропустить проверку даты (это ускорит выполнение операции, но приведёт к ошибке, если будет обнаружена хотя бы одна неверная дата)',

    'LBL_NO_EMAILS' => 'Не отсылать предупреждения по E-mail при осуществлении импорта',
    'LBL_NO_PRECHECK' => 'Native Format mode',   ///
    'LBL_STRICT_CHECKS' => 'Use strict ruleset (Check Email addresses and phone numbers too)',  ///
    'LBL_ERROR_SELECTING_RECORD' => 'Ошибка выбора записи:',
    'LBL_ERROR_DELETING_RECORD' => 'Ошибка удаления записи:',
    'LBL_NOT_SET_UP' => 'Нельзя выполнить импорт в данном типе модуля',
    'LBL_ARE_YOU_SURE' => 'Вы уверены? В результате будут удалены все данные из этого модуля.',
    'LBL_NO_RECORD' => 'Нет записи для обновления с данным ID',
    'LBL_NOT_SET_UP_FOR_IMPORTS' => 'Нельзя выполнить импорт в данном типе модуля',
    'LBL_DEBUG_MODE' => 'Включение режима отладки',
    'LBL_ERROR_INVALID_ID' => 'Указано слишком длинное значение ID. В поле может быть введено не более 36 символов.',
    'LBL_ERROR_INVALID_PHONE' => 'Неверный телефонный номер',
    'LBL_ERROR_INVALID_NAME' => 'Слишком длинное значение',
    'LBL_ERROR_INVALID_VARCHAR' => 'Слишком длинное значение',
    'LBL_ERROR_INVALID_DATE' => 'Неверное значение даты',
    'LBL_ERROR_INVALID_DATETIME' => 'Неверное значение даты/времени',
	'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Неверное значение даты/времени',
    'LBL_ERROR_INVALID_TIME' => 'Неверное значение времени',
    'LBL_ERROR_INVALID_INT' => 'Неверное целое значение',
    'LBL_ERROR_INVALID_NUM' => 'Неверный номер',
    'LBL_ERROR_INVALID_TIME' => 'Неверное значение времени',
    'LBL_ERROR_INVALID_EMAIL'=>'Неверный E-mail',
    'LBL_ERROR_INVALID_BOOL'=>'Неверное значение (должно быть 1 или 0)',
    'LBL_ERROR_INVALID_DATE'=>'Неверное значение даты',
    'LBL_ERROR_INVALID_USER'=>'Неверное имя пользователя или ID',
    'LBL_ERROR_INVALID_TEAM' => 'Invalid team name or ID',
    'LBL_ERROR_INVALID_ACCOUNT' => 'Неверная учётная запись или ID',
    'LBL_ERROR_INVALID_RELATE' => 'Неверное отношение',
    'LBL_ERROR_INVALID_CURRENCY' => 'Неверное значение валюты',
    'LBL_ERROR_INVALID_FLOAT' => 'Неверное число с плавающей запятой',
    'LBL_ERROR_NOT_IN_ENUM' => 'Значение отсутствует в списке. Допустимые значения: ',
    'LBL_NOT_MULTIENUM' => 'Not a MultiEnum',                                                   ///
    'LBL_IMPORT_MODULE_NO_TYPE' => 'Нельзя выполнить импорт в данном типе модуля',
    'LBL_IMPORT_MODULE_NO_USERS' => 'ПРЕДУПРЕЖДЕНИЕ: В системе не зарегистрировано ни одного пользователя. Если импорт будет произведён до того, как в систему будет добавлен пользователь - все записи будут присвоены администратору.',
    'LBL_IMPORT_MODULE_MAP_ERROR' => 'Нельзя опубликовать схему. Уже существует другая схема импорта с аналогичным названием.',
    'LBL_IMPORT_MODULE_MAP_ERROR2' => 'Нельзя отменить публикацию схемы импорта, принадлежащую другому пользователю. Необходимо чтобы схема импорта с аналогичным названием принадлежала вам.',


'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'Директория ' ,
'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => ' отсутствует или недоступна для записи' ,
'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'Файл загружен неудачно. Возможно, значение \'upload_max_filesize\' в Вашем файле php.ini слишком мало' ,
'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'Файл слишком большой. Допустимый размер:' ,
'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'байт. Измените параметр \'upload_maxsize\' в файле config.php' ,
'LBL_MODULE_NAME' => 'Импорт' ,
'LBL_TRY_AGAIN' => 'Попробовать ещё раз' ,
 'LBL_START_OVER' => 'Начать сначала',
'LBL_ERROR' => 'Ошибка:' ,
'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'Импортируемый файл содержит {0} строк, что превышает оптимальное значение, равное {1}. Превышение данного значения может замедлить процесс импорта. Нажмите на кнопку "ОК" для продолжения импорта или на кнопку "Отмена" для возможности изменения и повторной загрузки импортируемого файла.',
'ERR_IMPORT_SYSTEM_ADMININSTRATOR'  => 'Вы не можете импортировать пользователя, имеющего права системного администратора',
'ERR_MULTIPLE' => 'Несколько полей имеют одни и те же имена.' ,
'ERR_MISSING_REQUIRED_FIELDS' => 'Пропущены обязательные поля:' ,
'ERR_MISSING_MAP_NAME' => 'Отсутствует название схемы импорта',
'ERR_SELECT_FULL_NAME' => 'Вы не можете выбрать Полное имя, когда Имя и Фамилия уже выбраны.' ,
'ERR_SELECT_FILE' => 'Выбор файла для загрузки.' ,
'LBL_SELECT_FILE' => 'Выбор файла:' ,
'LBL_CUSTOM' => 'Пользовательский' ,
'LBL_CUSTOM_CSV' => 'Текстовый файл с запятой в качестве разделителя' ,
'LBL_CSV' => 'файл на этом компьютере',
'LBL_EXTERNAL_SOURCE' => 'внешнее приложение или сервис', ///
'LBL_TAB' => 'Текстовый файл с символом табуляции в качестве разделителя',
'LBL_CUSTOM_DELIMITED' => 'Текстовый файл с указанным символом в качестве разделителя',
'LBL_CUSTOM_DELIMITER' => 'Поля разделены при помощи:',
'LBL_FILE_OPTIONS' => 'Параметры файла',
'LBL_CUSTOM_TAB' => 'Табулированный текстовый файл' ,
'LBL_DONT_MAP' => '-- Не импортировать это поле --' ,
'LBL_STEP_MODULE' => 'В какой модуль необходимо импортировать данные?',
'LBL_STEP_1_TITLE' => 'Шаг 1: Выбор источника данных' ,
'LBL_CONFIRM_TITLE' => 'Шаг {0}: Подтверждение параметров импортируемого файла',
'LBL_CONFIRM_EXT_TITLE' => 'Шаг {0}: Подтверждение параметров внешнего источника', ///
'LBL_WHAT_IS' => 'Укажите источник данных:' ,
'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
'LBL_MICROSOFT_OUTLOOK_HELP' => 'Microsoft Outlook в качестве разделителя использует запятую (csv). Если в импортируемом файле в качестве разделителя используется символ табуляции, то результат импорта будет отличен от ожидаемого.',
'LBL_ACT' => 'Act!' ,
'LBL_ACT_2005' => 'Act! 2005' ,
'LBL_SALESFORCE' => 'Salesforce.com' ,
'LBL_MY_SAVED' => 'Для использования одной из ранее сохранённых схем импорта - выберите её из списка:',
'LBL_PUBLISH' => 'Опубликовать схему' ,
'LBL_DELETE' => 'Удалить схему' ,
'LBL_PUBLISHED_SOURCES' => 'Для использования одной из сохранённых схем импорта - выберите её из списка:',
'LBL_UNPUBLISH' => 'Отменить публикацию' ,
'LBL_NEXT' => 'Дальше >' ,
'LBL_BACK' => '< Назад' ,
'LBL_STEP_2_TITLE' => 'Шаг {0}: Загрузка файла импорта' ,
'LBL_HAS_HEADER' => 'Содержит строку заголовка:' ,
'LBL_NUM_1' => '1.' ,
'LBL_NUM_2' => '2.' ,
'LBL_NUM_3' => '3.' ,
'LBL_NUM_4' => '4.' ,
'LBL_NUM_5' => '5.' ,
'LBL_NUM_6' => '6.' ,
'LBL_NUM_7' => '7.' ,
'LBL_NUM_8' => '8.' ,
'LBL_NUM_9' => '9.' ,
'LBL_NUM_10' => '10.' ,
'LBL_NUM_11' => '11.' ,
'LBL_NUM_12' => '12.' ,
'LBL_NOTES' => 'Примечание:',
'LBL_NOW_CHOOSE' => 'Выберите файл для импорта:' ,
'LBL_IMPORT_OUTLOOK_TITLE' => 'Microsoft Outlook 98 - Outlook 2007 могут экспортировать данные в <b>CVS</b> формат, который может использоваться для импорта данных в эту систему.<br> Для экспорта Ваших данных из Outlook, следуйте шагам, приведённым ниже:' ,
'LBL_OUTLOOK_NUM_1' => 'Запустите <b>Outlook</b>' ,
'LBL_OUTLOOK_NUM_2' => 'Выберите меню <b>Файл</b>, затем пункт меню <b>Импорт и Экспорт...</b>' ,
'LBL_OUTLOOK_NUM_3' => 'Выберите <b>Экспорт в файл</b> и нажмите на кнопку <b>Далее</b>' ,
'LBL_OUTLOOK_NUM_4' => 'Выберите <b>Значения, разделённые запятыми (Windows)</b> и нажмите кнопку <b>Далее</b>.<br>  Замечание: Вы можете получить сообщение о необходимости установки компоненты экспортирования' ,
'LBL_OUTLOOK_NUM_5' => 'Выберите папку <b>Контакты</b> и нажмите кнопку <b>Дальше</b>. Вы можете выбрать различные папки контактов, если Ваши контакты размещены в нескольких папках' ,
'LBL_OUTLOOK_NUM_6' => 'Выберите имя файла и нажмите кнопку <b>Далее</b>' ,
'LBL_OUTLOOK_NUM_7' => 'Нажмите кнопку <b>Готово</b>' ,


'LBL_IMPORT_SF_TITLE' => 'Система Salesforce.com может экспортировать данные в формате <b>CSV</b>, который можно использовать для импорта данных в систему. Для экспорта Ваших данных из Salesforce.com, следуйте шагам, приведённым ниже:' ,
'LBL_SF_NUM_1' => 'Откройте Ваш браузер, перейдите на http://www.salesforce.com, и авторизуйтесь, указав Ваш E-mail и пароль' ,
'LBL_SF_NUM_2' => 'Нажмите на закладку <b>Отчёты</b> в верхнем меню' ,
'LBL_SF_NUM_3' => '<b>Для экспортирования Контрагентов:</b> Нажмите на ссылке <b>Активные контрагенты</b> <br><b>Для экспортирования Контактов:</b> Нажмите на ссылке <b>Список рассылок</b>' ,
'LBL_SF_NUM_4' => 'На <b>Шаге 1: Выберите Ваш тип отчёта</b>, затем выберите <b>Табулированный отчёт</b> и нажмите кнопку <b>Дальше</b>' ,
'LBL_SF_NUM_5' => 'На <b>Шаге 2: Выберите колонки отчёта</b>, затем выберите колонки, которые Вы хотите экспортировать и нажмите кнопку <b>Дальше</b>' ,
'LBL_SF_NUM_6' => 'На <b>Шаге 3: Выберите информацию для суммирования</b> и нажмите кнопку <b>Дальше</b>' ,
'LBL_SF_NUM_7' => 'На <b>Шаге 4: Упорядочите колонки отчёта</b> и нажмите кнопку <b>Дальше</b>' ,
'LBL_SF_NUM_8' => 'На <b>Шаге 5: Выберите Ваш критерий отчёта</b>; в качестве <b>Даты начала</b> укажите по возможности наименьшее значение, чтобы заведомо включить всех Ваших Контрагентов. Вы можете также экспортировать подмножество Ваших Контрагентов, используя более точные критерии. По завершении нажмите кнопку <b>Запустить отчёт</b>' ,
'LBL_SF_NUM_9' => 'Отчёт будет сгенерирован, и страница покажет <b>Статус генерации отчёта: завершён.</b> Теперь нажмите кнопку <b>Экспорт в Excel</b>' ,
'LBL_SF_NUM_10' => 'Выберите <b>Экспортировать отчёт:</b>, в качестве <b>Формата файла экспорта:</b> укажите <b>Разделённые запятой .csv</b>. Нажмите кнопку <b>Экспорт</b>.' ,
'LBL_SF_NUM_11' => 'Всплывающий диалог позволит Вам сохранить экспортируемый файл на Ваш компьютер.' ,

    'LBL_IMPORT_ACT_TITLE' => 'Act! может экспортировать данные в формат <b>CSV</b> (значения, разделённые запятой), который может быть использован для импорта данных в систему. Для экспорта данных из Act! выполните следующее:',
    'LBL_ACT_NUM_1' => 'Запустите <b>ACT!</b>',
    'LBL_ACT_NUM_2' => 'В меню <b>File</b> выберите <b>Data Exchange</b>, затем <b>Export...</b>',
    'LBL_ACT_NUM_3' => 'В качестве типа файла экспорта выберите <b>Text-Delimited</b>',
    'LBL_ACT_NUM_4' => 'Укажите имя и место сохранения файла с экспортируемыми данными и нажмите кнопку <b>Далее</b>',
    'LBL_ACT_NUM_5' => 'Выберите <b>Contacts records only</b>',
    'LBL_ACT_NUM_6' => 'Нажмите кнопку <b>Options...</b>',
    'LBL_ACT_NUM_7' => 'Выберите <b>Comma</b> в качестве разделителя полей',
    'LBL_ACT_NUM_8' => 'Отметьте параметр <b>Yes, export field names</b> и нажмите кнопку <b>OK</b>',
    'LBL_ACT_NUM_9' => 'Нажмите кнопку <b>Далее</b>',
    'LBL_ACT_NUM_10' => 'Выберите <b>All Records</b> и нажмите кнопку <b>Готово</b>',

'LBL_IMPORT_CUSTOM_TITLE' => 'Многие приложения имеют возможность экспортировать данные в <b>Текстовый файл со значениями, разделёнными запятой (.csv)</b> подобным образом:' ,
'LBL_CUSTOM_NUM_1' => 'Запуск приложения и открытие файла с данными' ,
'LBL_CUSTOM_NUM_2' => 'Выбор опции меню <b>Сохранить как...</b> или <b>Экспорт...</b>' ,
'LBL_CUSTOM_NUM_3' => 'Сохранение файла в формате <b>CSV</b> или <b>Значения, разделённые запятой</b>' ,
'LBL_IMPORT_TAB_TITLE' => 'Многие приложения имеют возможность экспортировать данные в формате <b>Табулированный текстовый файл (.tsv или .tab)</b> подобным образом:' ,
'LBL_TAB_NUM_1' => 'Запуск приложения и открытие файла с данными' ,
'LBL_TAB_NUM_2' => 'Выбор опции меню <b>Сохранить как...</b> или <b>Экспорт...</b>' ,
'LBL_TAB_NUM_3' => 'Сохранение файла в формате <b>TSV</b> или <b>Табулированные значения</b>' ,
'LBL_STEP_3_TITLE' => 'Шаг {0}: Сопоставление полей' ,
'LBL_STEP_DUP_TITLE' => 'Шаг {0}: Поиск возможных дубликатов',
'LBL_SELECT_FIELDS_TO_MAP' => 'В списке выберите поля, которые должны быть импортированы в систему. <br>По окончании нажмите кнопку <b>Начать импорт</b>.' ,
'LBL_DATABASE_FIELD' => 'Поле модуля' ,
'LBL_HEADER_ROW' => 'Строка заголовков' ,
'LBL_HEADER_ROW_OPTION_HELP' => 'Отметьте эту опцию, если первая строка импортируемого файла содержит названия полей.',
'LBL_ROW' => 'Строка' ,
'LBL_SAVE_AS_CUSTOM' => 'Сохранить пользовательскую схему импорта как:' ,
'LBL_SAVE_AS_CUSTOM_NAME' => 'Название пользовательской схемы импорта:',                              ///
'LBL_CONTACTS_NOTE_1' => 'Должна быть указана либо <b>Фамилия</b>, либо <b>Полное имя</b>.' ,
'LBL_CONTACTS_NOTE_2' => 'Если будет указано <b>Полное имя</b>, то поля <b>Имя</b> и <b>Фамилия</b> будут игнорироваться.' ,
'LBL_CONTACTS_NOTE_3' => 'Если будет указано <b>Полное имя</b>, то данные из этого поля будут разделены между полями <b>Имя</b> и <b>Фамилия</b> при вставке в базу данных.' ,
'LBL_CONTACTS_NOTE_4' => 'Поля <b>Улица 2</b> и <b>Улица 3</b> будут объединены вместе с основным адресным полем при вставке в базу данных.' ,
'LBL_ACCOUNTS_NOTE_1' => 'Поля <b>Улица 2</b> и <b>Улица 3</b> будут объединены вместе с основным адресным полем при вставке в базу данных.' ,
'LBL_REQUIRED_NOTE' => 'Обязательные поля: ',

//'LBL_OPPORTUNITIES_NOTE_1' => 'Поля <b>Имя сделки</b>, <b>Имя контрагента</b>, <b>Ожидаемая дата закрытия</b> и <b>Стадия продаж</b> являются обязательными для заполнения.' ,
'LBL_IMPORT_NOW' => 'Начать импорт' ,
'LBL_' => '' ,
'LBL_CANNOT_OPEN' => 'Не удаётся открыть файл для чтения' ,
'LBL_NOT_SAME_NUMBER' => 'Нет аналогичного количества полей в строке импортируемого файла' ,
'LBL_NO_LINES' => 'В импортируемом файле строки не обнаружены. Убедитесь, что файл не содержит пустых строк или укажите другой файл.' ,
'LBL_FILE_ALREADY_BEEN_OR' => 'Импортируемый файл или уже обработан или не существует' ,
'LBL_SUCCESS' => 'Готово:' ,
'LBL_FAILURE' => 'Импорт не выполнен:',
'LBL_SUCCESSFULLY' => 'Импорт успешно завершён' ,
'LBL_LAST_IMPORT_UNDONE' => 'Импорт был отменён' ,
'LBL_NO_IMPORT_TO_UNDO' => 'Нечего отменять, т.к. ничего не импортировано.' ,
'LBL_FAIL' => 'Ошибка:' ,
'LBL_RECORDS_SKIPPED' => 'Записи пропущены, так как пропущены одно или несколько обязательных полей' ,
'LBL_IDS_EXISTED_OR_LONGER' => 'Записи пропущены, так как подобные ID уже существуют в базе или их размер превышает 36 символов' ,
'LBL_RESULTS' => 'Результаты' ,
'LBL_CREATED_TAB' => 'Добавленные записи',
'LBL_DUPLICATE_TAB' => 'Дубликаты',
'LBL_ERROR_TAB' => 'Ошибки',
'LBL_IMPORT_MORE' => 'Повторить импорт' ,
'LBL_FINISHED' => 'Готово' ,
'LBL_UNDO_LAST_IMPORT' => 'Отменить импорт' ,
'LBL_LAST_IMPORTED' => 'Созданные значения' ,
'ERR_MULTIPLE_PARENTS' => 'Вы можете определить только один родительский код' ,
'LBL_DUPLICATES' => 'дубликатов обнаружено',
'LNK_DUPLICATE_LIST' => 'Загрузить файл со списком дубликатов',
'LNK_ERROR_LIST' => 'Загрузить список ошибок',
'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Загрузить строки, которые не были импортированы.',
'LBL_UNIQUE_INDEX' => 'Выберите индекс для сравнения дубликатов',
'LBL_VERIFY_DUPS' => 'Для поиска дубликатов выберите поля, в которых будет происходить проверка соответствующих значений.',
'LBL_INDEX_USED' => 'Проверяемые поля:',
'LBL_INDEX_NOT_USED' => 'Доступные поля:',
'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => 'Файл не был загружен.  Проверьте права доступа к файлу в cache-директории SuiteCRM.',

  'LBL_IMPORT_FIELDDEF_ID' => 'Уникальный ID',
    'LBL_IMPORT_FIELDDEF_RELATE' => 'Название или ID',
    'LBL_IMPORT_FIELDDEF_PHONE' => 'Номер телефона',
    'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'Team Name or ID',
    'LBL_IMPORT_FIELDDEF_NAME' => 'Любой текст',
    'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Любой текст',
    'LBL_IMPORT_FIELDDEF_TEXT' => 'Любой текст',
    'LBL_IMPORT_FIELDDEF_TIME' => 'Время',
    'LBL_IMPORT_FIELDDEF_DATE' => 'Дата',
    'LBL_IMPORT_FIELDDEF_DATETIME' => 'Datetime',   ///
    'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Имя пользователя или ID',
    'LBL_IMPORT_FIELDDEF_BOOL' => '\'0\' или \'1\'',
    'LBL_IMPORT_FIELDDEF_ENUM' => 'Список',
    'LBL_IMPORT_FIELDDEF_EMAIL' => 'Адрес E-Mail',
    'LBL_IMPORT_FIELDDEF_INT' => 'Цифра (только целое значение)',
    'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Цифра (только целое значение)',
    'LBL_IMPORT_FIELDDEF_NUM' => 'Цифра (только целое значение)',
    'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Цифра (допустимо дробное значение)',
    'LBL_IMPORT_FIELDDEF_FLOAT' => 'Цифра (допустимо дробное значение)',
    'LBL_DATE_FORMAT' => 'Формат даты:',
    'LBL_TIME_FORMAT' => 'Формат времени:',
    'LBL_TIMEZONE' => 'Часовой пояс:',
    'LBL_ADD_ROW' => 'Добавить поле',
    'LBL_REMOVE_ROW' => 'Удалить поле',
    'LBL_DEFAULT_VALUE' => 'Значение по умолчанию',
    'LBL_SHOW_ADVANCED_OPTIONS' => 'Показать параметры импортируемого файла',
    'LBL_HIDE_ADVANCED_OPTIONS' => 'Скрыть параметры импортируемого файла',
	'LBL_SHOW_NOTES' => 'Показать примечания',
    'LBL_HIDE_NOTES' => 'Скрыть примечания',
    'LBL_SHOW_PREVIEW_COLUMNS' => 'Show Preview Columns',    ///
    'LBL_HIDE_PREVIEW_COLUMNS' => 'Hide Preview Columns',     ///
    'LBL_SAVE_MAPPING_AS' => 'Сохранить схему импорта как:',               ///
    'LBL_OPTION_ENCLOSURE_QUOTE' => 'Одинарная кавычка (\')',
    'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => 'Двойная кавычка (")',
    'LBL_OPTION_ENCLOSURE_NONE' => 'Нет',
    'LBL_OPTION_ENCLOSURE_OTHER' => 'Другое:',
	'LBL_IMPORT_COMPLETE' => 'Отмена',
    'LBL_IMPORT_COMPLETED' => 'Импорт завершён',
    'LBL_IMPORT_ERROR' => 'Ошибки импорта:',
    'LBL_IMPORT_RECORDS' => 'Импорт записей с',
    'LBL_IMPORT_RECORDS_OF' => 'из',
    'LBL_IMPORT_RECORDS_TO' => 'по',
    'LBL_CURRENCY' => 'Валюта:',
	'LBL_CURRENCY_SIG_DIGITS' => 'Значащие цифры валюты',
	'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Пример',
    'LBL_NUMBER_GROUPING_SEP' => 'Символ разделителя разрядов:',
    'LBL_DECIMAL_SEP' => 'Символ десятичного разделителя:',
    'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Формат имени по умолчанию',
    'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Пример',
    'LBL_LOCALE_NAME_FORMAT_DESC' => '<i>"s" Приветствие, "f" Имя, "l" Фамилия</i>',
    'LBL_CHARSET' => 'Кодировка:',
	'LBL_MY_SAVED_HELP' => 'Вы можете использовать ранее сохранённые схемы импорта, содержащие параметры импорта, параметры сопоставления полей, а также настройки поиска дубликатов.<br><br>Нажмите на кнопку <b>Удалить</b> для удаления схемы (схема станет недоступной для всех пользователей).',
	'LBL_MY_SAVED_ADMIN_HELP' => 'Вы можете использовать ранее сохранённые схемы импорта, содержащие параметры импорта, параметры сопоставления полей, а также настройки поиска дубликатов.<br><br>Нажмите на кнопку  <b>Опубликовать</b>, чтобы сделать схему импорта доступной для других пользователей.<br>Нажмите кнопку <b>Отменить публикацию</b>, чтобы сделать схему импорта недоступной для других пользователей.<br>Нажмите на кнопку <b>Удалить</b> для удаления схемы (схема станет недоступной для всех пользователей).',
    'LBL_MY_PUBLISHED_HELP' => 'Используйте эту опцию для применения ранее сохранённых схемы импорта, содержащих параметры импорта, параметры сопоставления полей, а также настройки поиска дубликатов.',
    'LBL_ENCLOSURE_HELP' => '<p><b>Ограничивающий символ</b> используется для разграничения содержимого полей, включая любые символы, которые используются в качестве разделителей.<br><br>Пример: Если в качестве разделителя используется запятая <b>(,)</b>, а в качестве ограничивающего символа используется двойная кавычка <b>(")</b>, то строка <br><b>"Токсово, Ленинградская область"</b> импортируется в одно поле в виде <b>Токсово, Ленинградская область</b>.<br>Если ограничивающие символы отсутствуют, или в качестве таковых используются другие символы, то строка <br><b>`Токсово, Ленинградская область`</b> импортируется в два соседних поля в виде <b>Токсово</b> и <b>Ленинградская область</b>.<br><br>Примечание: Импортируемый файл может не содержать ограничивающих символов.<br> В Excel для файлов, значения которых разделены точкой с запятой или символом табуляции, ограничивающим символом по умолчанию является двойная кавычка.</p>',
    'LBL_DELIMITER_COMMA_HELP' => 'Выберите эту опцию для загрузки файла импорта, у которого в качестве символа, разделяющего поля, используется <b>запятая</b> (например, файл экспорта Microsoft Outlook или любой другой csv-файл).',
    'LBL_DELIMITER_TAB_HELP' => 'Выберите эту опцию, если в качестве символа, разделяющего поля, используется символ табуляции <b>(TAB)</b> и если в качестве расширения файла указано .txt.',
    'LBL_DELIMITER_CUSTOM_HELP' => 'Выберите эту опцию, если в качестве символа, разделяющего поля,  НЕ используется запятая или символ табуляции. Введите символ в расположенном рядом поле.',
    'LBL_DATABASE_FIELD_HELP' => 'Данный список содержит все доступные поля модуля. Выберите необходимые поля для их сопоставления с полями импортируемого файла.',
    'LBL_HEADER_ROW_HELP' => 'В данной колонке отображаются значения строки заголовка импортируемого файла.',
    'LBL_DEFAULT_VALUE_HELP' => 'В данной колонке отображается значение по умолчанию для поля в создаваемой или обновляемой записи, если поле в импортируемом файле не содержит данных.',
    'LBL_ROW_HELP' => 'В данной колонке отображается первая строка с данными импортируемого файла. Если в этой колонке отображаются значения строки заголовка импортируемого файла, то вернитесь на предыдущую страницу и отметьте опцию <b>Содержит строку заголовка</b>',
    'LBL_SAVE_MAPPING_HELP' => 'Здесь вы можете сохранить указанные параметры импорта (включая параметры сопоставления полей и настройки поиска дубликатов) в виде схемы импорта. Сохранённая схема может быть использована при следующем процессе импорта.',
    'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Параметры импортируемого файла определяются системой автоматически. При необходимости вы можете изменить установленные значения. Примечание: указанные здесь параметры относятся только к текущему процессу импорта и никак не повлияют на настройки, указанные в параметрах пользователя.',
    'LBL_VERIFY_DUPLCATES_HELP' => 'Поиск записей, которые могут содержать дублирующиеся данные. Поля, перемещённые в колонку <b>Проверяемые поля</b> будут использованы при поиске дубликатов. Список строк импортируемого файла, содержащие дублирующиеся данные будет показан на следующей странице.',
	'LBL_IMPORT_STARTED' => 'Импорт начат', 
	'LBL_IMPORT_FILE_SETTINGS' => 'Параметры импортируемого файла',
    'LBL_RECORD_CANNOT_BE_UPDATED' => 'Недостаточно прав для обновления записи',
	'LBL_DELETE_MAP_CONFIRMATION' => 'Вы действительно хотите удалить данную схему импорта?',
	'LBL_THIRD_PARTY_CSV_SOURCES' => 'Выберите необходимый пункт, если источником данных является одно из следующих приложений:',
    'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'Выберите источник данных для автоматического сопоставления полей на следующем шаге импорта.',
    'LBL_EXTERNAL_SOURCE_HELP' => 'Используйте данную опцию для импорта данных напрямую из внешнего приложения или сервиса, например из Gmail.', ///
    'LBL_EXAMPLE_FILE' => 'Загрузить шаблон импортируемого файла',
    'LBL_CONFIRM_IMPORT' => 'Вы выбрали обновление существующих записей в процессе импорта. ОБНОВЛЕНИЕ существующих записей не может быть отменено. Однако, процесс СОЗДАНИЯ записей при желании может быть отменён. Нажмите на кнопку "Отмена" или на кнопку "ОК" для продолжения обновления.',
    'LBL_CONFIRM_MAP_OVERRIDE' => 'Внимание: схема импорта уже была указана ранее, желаете продолжить?',
    'LBL_EXTERNAL_FIELD' => 'Внешнее поле', ///
    'LBL_SAMPLE_URL_HELP' => 'Загрузка примера импортируемого файла, содержащего строку заголовка, которая может быть использована для определения полей модуля. Данный файл может использоваться в качестве шаблона файла, содержащего необходимые для импорта данные.',
    'LBL_AUTO_DETECT_ERROR' => 'Разделители и ограничители полей в данном файле не обнаружены. Проверьте настройки в параметрах импортируемого файла.',
    'LBL_MIME_TYPE_ERROR_1' => 'Вероятно, данный файл не содержит разделителей. Проверьте тип файла. Рекомендуется использовать текстовый файл с запятой в качестве разделителя (.csv).',
    'LBL_MIME_TYPE_ERROR_2' => 'Для импортирования выбранного файла нажмите на кнопку <b>ОК</b>. Для загрузки нового файла нажмите на кнопку <b>Попробовать ещё раз</b>',
    'LBL_FIELD_DELIMETED_HELP' => 'Символ, использующийся в качестве разделителя полей.',
    'LBL_FILE_UPLOAD_WIDGET_HELP' => 'Выберите файл, в котором данные разделены определённым символом, например, запятой (рекомендуется) или символом табуляции.',
    'LBL_EXTERNAL_ERROR_NO_SOURCE' => 'Не удалось получить данные из указанного источника, повторите попытку позже.', ///
    'LBL_EXTERNAL_ERROR_FEED_CORRUPTED' => 'Unable to retrieve external feed, please try again later.', ///
    'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'Кэш-папка импорта не доступна для записи.',
	'LBL_ADD_FIELD_HELP' => 'Добавление значения в указанное поле обновляемых/создаваемых записей. Выберите необходимое поле и при необходимости укажите значение по умолчанию.',
    'LBL_MISSING_HEADER_ROW' => 'Строка заголовка не обнаружена',
    'LBL_CANCEL' => 'Отмена',
    'LBL_SELECT_DS_INSTRUCTION' => 'Готовы начать импорт? Выберите источник импортируемых данных.',
    'LBL_SELECT_UPLOAD_INSTRUCTION' => 'Выберите файл, содержащий данные для импорта, либо загрузите шаблон, на основе которого может быть создан подобный файл.',
    'LBL_SELECT_PROPERTY_INSTRUCTION' => 'Это предварительный показ первых строк импортируемого файла, выполненный на основе автоматического анализа его параметров. Если была обнаружена строка заголовка, то она отображается в крайнем левом столбце. Вы можете просмотреть автоматически определённые параметры файла и при необходимости внести желаемые изменения. Отображаемая в столбцах информация будет автоматически обновлена при изменении какого-либо параметра импортируемого файла.',
    'LBL_SELECT_MAPPING_INSTRUCTION' => 'Данная таблица содержит все доступные поля модуля, которые могут быть сопоставлены с полями импортируемого файла. Если файл содержит строку заголовка, то её поля отображаются в крайнем левом столбце. Проверьте все имеющиеся сопоставления и при необходимости внесите желаемые изменения. Для проверки корректности сопоставления в таблице отображается первая строка с данными импортируемого файла. <b>Обратите внимание:</b> должны быть сопоставлены все необходимые поля (отмечены в списке красной звёздочкой).',
    'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'Во избежание создания дублирующихся записей рекомендуется указать поля, в которых в процессе импорта будет осуществлена проверка данных: значения полей базы данных будут сравниваться с данными в импортируемом файле. Строки файла, в которых будут обнаружены дублирующиеся данные, будут отображены в результатах импорта на отдельной закладке.',
    'LBL_EXT_SOURCE_SIGN_IN' => 'Sign In', ///
    'LBL_DUP_HELP' => 'Здесь представлены строки, которые НЕ БЫЛИ импортированы в систему, поскольку они содержат данные, уже имеющиеся в базе данных системы. Для осуществления повторного импорта вы можете загрузить файл со списком дубликатов, внести в него необходимые изменения и нажать на кнопку <b>Повторить импорт</b>.',
    'LBL_DESELECT' => 'deselect', ///
    'LBL_SUMMARY' => 'Результаты импорта',
    'LBL_OK' => 'OK',
    'LBL_ERROR_HELP' => 'Здесь представлены строки, которые НЕ БЫЛИ импортированы в систему из-за возникших ошибок. Для осуществления повторного импорта вы можете загрузить файл со списком ошибочных строк, внести в него необходимые изменения и нажать на кнопку <b>Повторить импорт</b>.',

	'LBL_EXTERNAL_MAP_HELP' => 'The table below contains the fields in the external source and the module fields to which they are mapped. Check the mappings to make sure that they are what you expect, and make changes, as necessary. Be sure to map to all of the required fields (noted by an asterisk).', ///
    'LBL_EXTERNAL_MAP_NOTE' => 'The import will be attempted for contacts within all Google Contacts groups.', ///
    'LBL_EXTERNAL_MAP_NOTE_SUB' => 'The User Names of the newly created users will be the Full Names of the Google Contact by default. The User Names can be changed after the user records are created.',
	'LBL_EXTERNAL_MAP_SUB_HELP' => 'Click <b>Import Now</b> to begin the import. Records will only be created for entries that include last names. Records will not be created for data identified as duplicate based on names and/or email addresses matching existing records.', ///
    'LBL_EXTERNAL_FIELD_TOOLTIP' => 'This column displays the fields in the external source containing data that will be used to create new records.', ///
    'LBL_EXTERNAL_DEFAULT_TOOPLTIP' => 'Indicate a value to use for the field in the created record if the field in the external source contains no data.', ///
    'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'To assign the new records to a user other than yourself, use the Default Value column to select a different user.', ///
    'LBL_EXTERNAL_TEAM_TOOLTIP' => 'To assign the new records to teams other than your default team(s), use the Default Value column to select different teams.', ///
    'LBL_SIGN_IN_HELP' => 'To enable this service, please sign in under the External Accounts tab within your user settings page.' ///



);

?>