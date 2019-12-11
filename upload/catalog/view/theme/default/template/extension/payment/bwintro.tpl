<?php

/**
 *
 *	DigiWallet.nl
 * DigiWallet plugin for Opencart 2.0+
 *
 *  (C) Copyright TargetMedia B.V 2014
 *
 *	@file 		DigiWallet Catalog Template
 *	@author		TargetMedia B.V  / https://digiwallet.nl
 *
 */
?>
<?php echo $header; ?>
<style>
<!--
.tm-highlight {
  color: #c94c4c;
}
-->
</style>
<div class="container">
    <ul class="breadcrumb">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
    <?php } ?>
    </ul>

    <div class="col-xs-9">
        <div class="bankwire-info">
            <h2><?=$intro_thx;?></h2>
            <p><?=$intro_l1?></p>
            <p><?=$intro_l2?></p>
            <p><?=$intro_l3?></p>
        </div>
    </div>
</div>
<?php echo $footer; ?>