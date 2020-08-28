.<?php
/**
 *
 * DigiWallet.nl
 * DigiWallet plugin for Opencart 2.0+
 *
 *  (C) Copyright TargetMedia B.V 2014
 *
 * @file        DigiWallet Admin Controller
 * @author      TargetMedia B.V / https://digiwallet.nl
 *
 */
require_once ("digiwallet.admin.php");

class ControllerExtensionPaymentEps extends DigiWalletAdmin
{
    protected $error = array();
    protected $type = "eps";
}
