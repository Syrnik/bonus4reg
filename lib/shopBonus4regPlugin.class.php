<?php
/**
 * Main plugin file
 *
 * @package Bonus4reg
 * @author Serge Rodovnichenko <serge@syrnik.com>
 * @copyright (c) 2014-2025, Serge Rodovnichenko
 * @license http://www.webasyst.com/terms/#eula Webasyst
 */

class shopBonus4regPlugin extends shopPlugin
{
    /**
     * @return array
     * @throws waException
     */
    public function backendSettingsAffiliate(): array
    {
        return array(
            'id'   => 'bonus4reg',
            'name' => _wp('Signup Bonus'),
            'url'  => '?plugin=bonus4reg&module=affiliate&action=settings'
        );
    }

    /**
     * Бонусный счет есть только у покупателей магазина.
     * Поэтому перед начислением создаем нового покупателя из
     * контакта
     *
     * @param waContact|mixed $contact
     * @throws waException
     */
    public function signupHandler($contact): void
    {
        if (shopAffiliate::isEnabled() && $this->getSettings('enabled') && ($contact instanceof waContact) && $contact->getId()) {
            $AffiliateTransaction = new shopAffiliateTransactionModel();
            $ShopCustomer = new shopCustomerModel();

            $ShopCustomer->createFromContact($contact->getId());

            $AffiliateTransaction->applyBonus(
                $contact->getId(),
                $this->getSettings('rate'),
                NULL,
                _wp('Signup bonus'),
                shopAffiliateTransactionModel::TYPE_DEPOSIT);
        }
    }

    /**
     * Turns plugin on or off
     *
     * @param int|string $status 0 - disabled, 1 - enabled
     */
    public function setStatus($status): void
    {
        $this->getSettingsModel()->set($this->getSettingsKey(), 'enabled', $status);
    }
}
