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
require_once ("system/library/digiwallet.class.php");
require_once ("digibase_model.php");

class ModelExtensionPaymentMrcash extends BaseDigiWalletModel
{

    public $currencies = array('EUR');

    public $minimumAmount = 0.49;

    public $maximumAmount = 5000;

    public function getMethod($address, $total)
    {
        return $this->getMethodModel($address, $total, "mrcash", "MRC");
    }
}
