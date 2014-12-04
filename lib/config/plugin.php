<?php
/**
 * @package Bonus4reg
 * @author Serge Rodovnichenko <serge@syrnik.com>
 * @version 1.0.0
 * @copyright (c) 2014, Serge Rodovnichenko
 * @license http://www.webasyst.com/terms/#eula Webasyst
 */
return array(
    'name' => _wp('Signup Bonus'),
    'img' => 'img/icon.png',
    'version' => '1.0.0',
    'vendor' => '670917',
    'shop_settings' => TRUE,
    'handlers' =>
    array(
        'backend_settings_affiliate' => 'backendSettingsAffiliate',
        'signup' => 'signupHandler'
    ),
);
