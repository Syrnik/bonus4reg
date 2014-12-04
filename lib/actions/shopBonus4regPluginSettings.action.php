<?php
/**
 * Plugin Settings stub
 *
 * @package Bonus4reg/controller
 * @author Serge Rodovnichenko <serge@syrnik.com>
 * @version 1.0.0
 * @copyright (c) 2014, Serge Rodovnichenko
 * @license http://www.webasyst.com/terms/#eula Webasyst
 */
class shopBonus4regPluginSettingsAction extends waViewAction
{
    public function execute()
    {
        $plugin = waSystem::getInstance('shop')->getPlugin('bonus4reg');
    }
}
