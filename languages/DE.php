<?php
/**
 *
 * @category        module
 * @package         Form
 * @author          WebsiteBaker Project
 * @copyright       WebsiteBaker Org. e.V.
 * @link            http://websitebaker.org/
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.8.3
 * @requirements    PHP 5.3.6 and higher
 * @version         $Id: DE.php 67 2017-03-03 22:14:28Z manu $
 * @filesource      $HeadURL: svn://isteam.dynxs.de/wb2.10/tags/WB-2.10.0/wb/modules/form/languages/DE.php $
 * @lastmodified    $Date: 2017-03-03 23:14:28 +0100 (Fr, 03. Mrz 2017) $
 * @description
 */

// Must include code to stop this file being access directly
if(!defined('WB_URL')) {
    require_once(dirname(dirname(dirname(dirname(__FILE__)))).'/framework/globalExceptionHandler.php');
    throw new IllegalFileException();
}
/* -------------------------------------------------------- */

//Modulbeschreibung
$module_description = 'Mit diesem Modul können sie ein beliebiges Formular für ihre Seite erzeugen';

//Variablen fuer backend Texte
$MOD_FORM['SETTINGS'] = 'Formular Einstellungen';
$MOD_FORM['CONFIRM'] = 'Bestätigung';
$MOD_FORM['SUBMIT_FORM'] = 'Absenden';
$MOD_FORM['EMAIL_SUBJECT'] = 'Sie haben eine Nachricht über {{WEBSITE_TITLE}} erhalten';
$MOD_FORM['SUCCESS_EMAIL_SUBJECT'] = 'Sie haben ein Forumlar über {{WEBSITE_TITLE}} gesendet';

$MOD_FORM['SUCCESS_EMAIL_TEXT']  = 'Vielen Dank für die Übermittlung Ihrer Nachricht an {{WEBSITE_TITLE}}. '.PHP_EOL;
$MOD_FORM['SUCCESS_EMAIL_TEXT'] .= 'Wir setzen uns schnellstens mit Ihnen in Verbindung.';

$MOD_FORM['SUCCESS_EMAIL_TEXT_GENERATED'] = "\n"
."******************************************************************************\n"
."Dies ist eine automatisch generierte E-Mail. Die Absenderadresse dieser E-Mail\n"
."ist nur zum Versand, und nicht zum Empfang von Nachrichten eingerichtet!\n"
."Falls Sie diese E-Mail versehentlich erhalten haben, setzen Sie sich bitte\n"
."mit uns in Verbindung und löschen diese Nachricht von Ihrem Computer.\n"
."******************************************************************************\n";

$MOD_FORM['REPLYTO'] = 'E-Mail Antwortadresse';
$MOD_FORM['FROM'] = 'Absender';
$MOD_FORM['TO'] = 'Empfänger';

$MOD_FORM['EXCESS_SUBMISSIONS'] = 'Dieses Formular wurde zu oft aufgerufen. Bitte versuchen Sie es in einer Stunde noch einmal.';
$MOD_FORM['INCORRECT_CAPTCHA'] = 'Die eingegebene Prüfziffer stimmt nicht überein. Wenn Sie Probleme mit dem Lesen der Prüfziffer haben, bitte schreiben Sie eine E-Mail an den <a href="mailto:{{webmaster_email}}">Webmaster</a>';

$MOD_FORM['PRINT']  = 'Versand einer E-Mail Bestätigung ist nicht möglich! ';
$MOD_FORM['PRINT'] .= 'Drucken Sie bitte diese Nachricht aus!';
$MOD_FORM['RECIPIENT'] = 'Die E-Mail Bestätigung erfolgt nur an angemeldete Benutzer!';

$MOD_FORM['REQUIRED_FIELDS'] = 'Bitte folgende Angaben erg&auml;nzen';
$MOD_FORM['ERROR'] = 'E-Mail konnte nicht gesendet werden!!';
$MOD_FORM['SPAM'] = 'ACHTUNG! Beantworten einer ungeprüften E-Mail kann als Spam abgemahnt werden! ';

$MESSAGE['MOD_FORM_INCORRECT_CAPTCHA'] = 'Die eingegebene Prüfziffer stimmt nicht überein. Wenn Sie Probleme mit dem Lesen der Prüfziffer haben, schreiben Sie bitte eine E-Mail an uns: <a href="mailto:{SERVER_EMAIL}">{SERVER_EMAIL}</a>';

$TEXT['GUEST'] = 'Gast';
$TEXT['UNKNOWN'] = 'unbekannt';
$TEXT['PRINT_PAGE'] = 'Seite drucken';
$TEXT['REQUIRED_JS'] = 'Javascript erforderlich';
$TEXT['SUBMISSIONS_PERPAGE'] = 'Gespeicherte Einträge pro Seite';
$TEXT['ADMIN'] = 'Admin';
$MENU['USERS'] = 'Benutzer';
