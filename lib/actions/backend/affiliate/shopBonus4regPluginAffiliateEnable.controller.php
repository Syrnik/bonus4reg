<?php
/**
 * Sets plugin status (enabled or disabled)
 *
 * @package Bonus4reg/controller
 * @author Serge Rodovnichenko <serge@syrnik.com>
 * @version 1.0.0
 * @copyright (c) 2014, Serge Rodovnichenko
 * @license http://www.webasyst.com/terms/#eula Webasyst
 */
class shopBonus4regPluginAffiliateEnableController extends waJsonController
{
    public function execute()
    {
        if (!$this->getUser()->getRights('shop', 'settings')) {
            throw new waRightsException(_w('Access denied'));
        }
        $status = waRequest::post('enable', 0, waRequest::TYPE_INT);
        waSystem::getInstance('shop')->getPlugin('bonus4reg')->setStatus($status);
    }
}
