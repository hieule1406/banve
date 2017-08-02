<?php
/**
 * Created by PhpStorm.
 * User: LeHieu
 * Date: 7/7/2017
 * Time: 4:40 AM
 */

if(!defined('URL_BANVE')){define('URL_BANVE','http://localhost/Banve/');}
//if(!defined('URL_BANVE')){define('URL_BANVE','http://192.168.1.4/Banve/');}
if(!defined('URL_BANVE_ADMIN')){define('URL_BANVE_ADMIN','http://localhost/Banve/admin/');}
//if(!defined('URL_BANVE_ADMIN')){define('URL_BANVE_ADMIN','http://192.168.1.4/Banve/admin/');}
if(!defined('price_VIP')){define('priceVIP',2500000);}

if(!defined('price_SUPER_VIP')){define('price_SUPER_VIP',3000000);}
if(!defined('STATUS_ACTIVE')){define('STATUS_ACTIVE',1);}

if(!defined('STATUS_ACTIVE_STRING')){define('STATUS_ACTIVE_STRING','Sắp diễn ra');}

if(!defined('STATUS_UN_ACTIVE')){define('STATUS_UN_ACTIVE',0);}
if(!defined('STATUS_UN_ACTIVE_STRING')){define('STATUS_UN_ACTIVE_STRING','Đã diễn ra');}

function render_status($status_value=STATUS_ACTIVE){
    $result=STATUS_ACTIVE_STRING;
    if($status_value==STATUS_UN_ACTIVE){
        $result =STATUS_UN_ACTIVE_STRING;
    }
    return $result;

}

?>