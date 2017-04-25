<?php
/**
 *
 * @category        module
 * @package         Form
 * @author          WebsiteBaker Project
 * @copyright       2004-2009, Ryan Djurovich
 * @copyright       2009-2011, Website Baker Org. e.V.
 * @link            http://www.websitebaker2.org/
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.8.x
 * @requirements    PHP 5.2.2 and higher
 * @version         $Id: move_down.php 67 2017-03-03 22:14:28Z manu $
 * @filesource        $HeadURL: svn://isteam.dynxs.de/wb2.10/tags/WB-2.10.0/wb/modules/form/move_down.php $
 * @lastmodified    $Date: 2017-03-03 23:14:28 +0100 (Fr, 03. Mrz 2017) $
 * @description
 */

//require('../../config.php');
// Include the configuration file
if (!defined('WB_PATH')) {
    $sStartupFile = dirname(dirname(__DIR__)).'/config.php';
    if (is_readable($sStartupFile)) {
        require($sStartupFile);
    } else {
        die(
            'tried to read a nonexisting or not readable startup file ['
          . basename(dirname($sStartupFile)).'/'.basename($sStartupFile).']!!'
        );
    }
}
// Include WB admin wrapper script
require(WB_PATH.'/modules/admin.php');

// Get id
$field_id = $admin->checkIDKEY('field_id', false, 'GET');
if (!$field_id) {
 $admin->print_error($MESSAGE['GENERIC_SECURITY_ACCESS'], ADMIN_URL.'/pages/modify.php?page_id='.$page_id);
}

// Include the ordering class
if (!class_exists('order', false)){require(WB_PATH.'/framework/class.order.php');}

// Create new order object an reorder
$order = new order(TABLE_PREFIX.'mod_form_fields', 'position', 'field_id', 'section_id');
if($order->move_down($field_id)) {
    $admin->print_success($TEXT['SUCCESS'], ADMIN_URL.'/pages/modify.php?page_id='.$page_id);
} else {
    $admin->print_error($TEXT['ERROR'], ADMIN_URL.'/pages/modify.php?page_id='.$page_id);
}

// Print admin footer
$admin->print_footer();
