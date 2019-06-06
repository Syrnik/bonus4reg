<?php
/**
 * @package Bonus4reg
 * @author Serge Rodovnichenko <serge@syrnik.com>
 * @copyright (c) 2014-2019, Serge Rodovnichenko
 * @license http://www.webasyst.com/terms/#eula Webasyst
 */
return array(
    'name'          => _wp('Signup Bonus'),
    'img'           => 'img/icon.png',
    'version'       => '1.0.0',
    'vendor'        => '670917',
    'shop_settings' => true,
    'handlers'      =>
        array(
            'backend_settings_affiliate' => 'backendSettingsAffiliate',
            '*'                          => array(array(
                'event_app_id' => '*',
                'event'        => 'signup',
                'class'        => 'shopBonus4regPlugin',
                'method'       => 'signupHandler'
            ))
        ),
);
