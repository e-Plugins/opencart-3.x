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

class ControllerExtensionPaymentPaysafecard extends DigiwalletFrontEnd
{
    public $paymentType = 'WAL';
    public $paymentName = DigiWalletCore::METHOD_PAYSAFE;
}
