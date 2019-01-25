#!/bin/bash
rm ./opencart_2n3.ocmod.zip

path27="./upload/catalog/view/theme/default/template/checkout/payment_method.twig";
path26="./upload/catalog/view/theme/default/template/checkout/payment_method.tpl";
path25="./upload/admin/view/template/extension/payment/targetpay.tpl";
path24="./upload/admin/controller/extension/payment/targetpay.php";
path23="./upload/admin/view/template/extension/payment/targetpay.twig";
#images
path22="./upload/catalog/view/theme/default/image/targetpay/*.png"  #change from image/payment to this dir
path21="upload/catalog/view/theme/default/template/extension/payment/bwintro.*"

for i in sofort mrcash creditcard paysafecard ideal afterpay bankwire paypal; do

path0="./upload/admin/controller/extension/payment/$i.php";
path1="./upload/admin/model/extension/payment/$i.php"; 
path2="./upload/catalog/controller/extension/payment/$i.php";
path3="./upload/catalog/model/extension/payment/$i.php";
#view
path4="./upload/catalog/view/theme/default/template/extension/payment/$i.*";
path5="./upload/admin/view/template/extension/payment/$i.*";
#lang 
path6="./upload/admin/language/nl-nl/extension/payment/$i.php";
path7="./upload/admin/language/en-gb/extension/payment/$i.php";
path8="./upload/catalog/language/nl-nl/extension/payment/$i.php";
path9="./upload/catalog/language/en-gb/extension/payment/$i.php";
path10="./upload/admin/view/image/payment/$i.png";

zip -r opencart_2n3.ocmod.zip $path0 $path1 $path2 $path3 $path4 $path5 $path6 $path7 $path8 $path9 $path10

done

#zip controller and target core
path=upload/catalog/controller/extension/payment/tp_callback.php
path2=upload/system/library/targetpay.class.php
path4=upload/catalog/view/theme/default/image/loading.gif
path5=upload/catalog/controller/extension/payment/targetpay.php


zip -r opencart_2n3.ocmod.zip $path $path2 $path4 $path5 $path21 $path22 $path23 $path24 $path25 $path26 $path27

