<?php
/**
 * @author Serge Rodovnichenko <serge@syrnik.com>
 * @copyright Serge Rodovnichenko, 2019
 * @license Webasyst
 */
$plugin_dir = wa('shop')->getConfig()->getPluginPath('bonus4reg');

$files = [
    '/README.md',
    '/README_en.md',
];

foreach ($files as $file) {
    try {
        waFiles::delete($plugin_dir . $file);
    } catch (Exception $e) {
        waLog::log('Bonus for signup plugin update (' . __FILE__ . "): Error deleting old vendor file $file: " . $e->getMessage());
    }
}
