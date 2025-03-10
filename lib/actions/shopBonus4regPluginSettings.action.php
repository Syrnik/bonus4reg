<?php
/**
 * Plugin Settings stub
 *
 * @package Bonus4reg/controller
 * @author Serge Rodovnichenko <serge@syrnik.com>
 * @copyright (c) 2014-2025, Serge Rodovnichenko
 * @license http://www.webasyst.com/terms/#eula Webasyst
 */

declare(strict_types=1);

class shopBonus4regPluginSettingsAction extends waViewAction
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
        $plugin = waSystem::getInstance('shop')->getPlugin('bonus4reg');
    }
}
