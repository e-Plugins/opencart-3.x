<?php

/**
 *
 *  DigiWallet.nl
 * DigiWallet plugin for Opencart 2.0+
 *
 *  (C) Copyright TargetMedia B.V 2014
 *
 *  @file     DigiWallet Catalog Model
 *  @author TargetMedia B.V / https://digiwallet.nl
 *
 */
require_once("system/library/digiwallet.core.php");
require_once ("digibase_model.php");

class ModelExtensionPaymentPaysafecard extends BaseDigiWalletModel
{

    public $currencies = array('EUR');

    public $minimumAmount = 0.10;

    public $maximumAmount = 150;

    public function getMethod($address, $total)
    {
        return $this->getMethodModel($address, $total, "paysafecard", "WAL");
    }
}
