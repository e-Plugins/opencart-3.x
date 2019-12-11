<?php

/**
 *  DigiWallet.nl
 * DigiWallet plugin for Opencart 2.0+
 *
 *  (C) Copyright TargetMedia B.V 2014
 *
 * @file       DigiWallet Catalog Controller
 * @author   TargetMedia B.V / www.sofortplugins.nl
 * @release    5 nov 2014
 */

require_once ("digiwallet.frontend.php");


class ControllerExtensionPaymentSofort extends DigiwalletFrontEnd
{
    public $paymentType = 'DEB';
    public $paymentName = DigiWalletCore::METHOD_SOFORT;
    
    public function setAdditionParameter($digiWallet, $order = null)
    {
        if (!empty($this->request->post['country_id'])) {
            $digiWallet->setCountryId($this->request->post['country_id']);
        }
        return true;
    }
    
    public function setListConfirm($data)
    {
        $targetCore = new DigiWalletCore($this->paymentType);
        $data['custom'] = $this->session->data['order_id'];
        $data['banks'] = $targetCore->getCountryList();
        return $data;
    }
}
