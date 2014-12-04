<?php
/**
 * View Affiliate Settings form action
 * 
 * @package Bonus4reg/controller
 * @author Serge Rodovnichenko <serge@syrnik.com>
 * @version 1.0.0
 * @copyright (c) 2014, Serge Rodovnichenko
 * @license http://www.webasyst.com/terms/#eula Webasyst
 */
class shopBonus4regPluginAffiliateSettingsAction extends waViewAction
{
    public function execute()
    {
        $shop_affiliate_enabled = shopAffiliate::isEnabled();
        $settings = waSystem::getInstance('shop')->getPlugin('bonus4reg')->getSettings();
        $enabled = ifset($settings['enabled']);
        
        $this->view->assign(compact('enabled', 'settings', 'shop_affiliate_enabled'));
    }
}
