<?php
/**
 * Created by PhpStorm.
 * User: LeHieu
 * Date: 7/9/2017
 * Time: 10:49 AM
 */
session_start();
require '../configs/database.php';

class getColor extends DB{

    function getColor($id_chair){

        $sql = "select * from   color_price  WHERE CP_id = $id_chair";
        $qr = $this->exQuery($sql);


        if($qr){

            $color = $qr->fetch_array();
            echo $color['coloer_txt'];
        }
    }
}
$getColor = new getColor();
$id_chair = $_GET['id_chair'];
$getColor->getColor($id_chair);
