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

define('OC_VERSION', substr(VERSION, 0, 1));
class BaseDigiWalletModel extends Model
{
    /**
     * Get the payment method info
     * @param $address
     * @param $total
     * @param $payment_type
     * @param $img_code
     * @return array|bool
     */
    public function getMethodModel($address, $total, $payment_type, $img_code)
    {
        $this->load->language('extension/payment/' . $payment_type);
        $setting_name = (OC_VERSION == 2) ? '' : 'payment_';

        $checkTable = $this->db->query('show tables like "' . DB_PREFIX . 'digiwallet_'.$payment_type.'"');
        if (! $checkTable->num_rows) {
            return false;
        }

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int) $this->config->get($setting_name . $payment_type . '_geo_zone_id') . "' AND country_id = '" . (int) $address['country_id'] . "' AND (zone_id = '" . (int) $address['zone_id'] . "' OR zone_id = '0')");

        if ($this->config->get($setting_name . $payment_type . '_total') > $total) {
            $status = false;
        } elseif (! $this->config->get($setting_name . $payment_type . '_geo_zone_id')) {
            $status = true;
        } elseif ($query->num_rows) {
            $status = true;
        } else {
            $status = false;
        }

        if (! in_array(strtoupper($this->config->get('config_currency')), $this->currencies)) {
            $status = false;
        }

        $method_data = array();

        if ($status) {
            $method_data = array('code' => $payment_type,
                'title' => $this->language->get('text_title'),
                'sort_order' => $this->config->get($setting_name . $payment_type . '_sort_order'),
                'terms' => '<img src="' . $this->config->get('config_ssl') . 'catalog/view/theme/default/image/digiwallet/'.$img_code.'.png" style="height:30px; display:inline; margin-left: 5px;">');
        }
        return $method_data;
    }
}