<?php
/**
 * View Affiliate Settings form action
 *
 * @package Bonus4reg/controller
 * @author Serge Rodovnichenko <serge@syrnik.com>
 * @copyright (c) 2014-2025, Serge Rodovnichenko
 * @license http://www.webasyst.com/terms/#eula Webasyst
 */

declare(strict_types=1);

class shopBonus4regPluginAffiliateSettingsAction extends waViewAction
{
    /**
     * @return void
     * @throws waException
     * @throws waRightsException
     */
    public function execute(): void
    {
        if (!$this->getUser()->getRights('shop', 'settings')) {
            throw new waRightsException(_w('Access denied'));
        }

        $shop_affiliate_enabled = shopAffiliate::isEnabled();
        $settings = waSystem::getInstance('shop')->getPlugin('bonus4reg')->getSettings();
        $enabled = ifset($settings['enabled']);

        $this->view->assign(compact('enabled', 'settings', 'shop_affiliate_enabled'));
    }
}
