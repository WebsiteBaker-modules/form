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
 * @version         $Id: info.php 67 2017-03-03 22:14:28Z manu $
 * @filesource      $HeadURL: svn://isteam.dynxs.de/wb2.10/tags/WB-2.10.0/wb/modules/form/info.php $
 * @lastmodified    $Date: 2017-03-03 23:14:28 +0100 (Fr, 03. Mrz 2017) $
 * @description
 */

// Must include code to stop this file being access directly
if(!defined('WB_URL')) {
    require_once(dirname(dirname(dirname(__FILE__))).'/framework/globalExceptionHandler.php');
    throw new IllegalFileException();
}
/* -------------------------------------------------------- */
$module_directory = 'form';
$module_name = 'Form Modul v3.1.4';
$module_function = 'page';
$module_version = '3.1.4';
$module_platform = '2.10.0';
$module_author = 'Ryan Djurovich & Rudolph Lartey - additions John Maats - PCWacht, dev-team';
$module_license = 'GNU General Public License';
$module_description = 'This module allows you to create customised online forms, such as a feedback form. '.
'Thank-you to Rudolph Lartey who help enhance this module, providing code for extra field types, etc.';
