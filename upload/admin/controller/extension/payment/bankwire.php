<?php

/**
 *
 * DigiWallet.nl
 * DigiWallet plugin for Opencart 2.0+
 *
 *  (C) Copyright TargetMedia B.V 2014
 *
 * @file        DigiWallet Admin Controller
 * @author      TargetMedia B.V / www.bankwireplugins.nl
 *
 */
require_once ("../system/library/digiwallet.core.php");
require_once ("digiwallet.admin.php");

class ControllerExtensionPaymentBankwire extends DigiWalletAdmin
{
    protected $error = array();
    protected $type = DigiWalletCore::METHOD_BANKWIRE;
}
