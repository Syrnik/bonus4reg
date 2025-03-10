<?php
/**
 * Sets plugin status (enabled or disabled)
 *
 * @package Bonus4reg/controller
 * @author Serge Rodovnichenko <serge@syrnik.com>
 * @copyright (c) 2014-2025, Serge Rodovnichenko
 * @license http://www.webasyst.com/terms/#eula Webasyst
 */

declare(strict_types=1);

class shopBonus4regPluginAffiliateEnableController extends waJsonController
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
        $status = waRequest::post('enable', 0, waRequest::TYPE_INT);
        waSystem::getInstance('shop')->getPlugin('bonus4reg')->setStatus($status);
    }
}
