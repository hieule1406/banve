<?php
/**
 * Created by PhpStorm.
 * User: LeHieu
 * Date: 7/9/2017
 * Time: 10:49 AM
 */
session_start();
require '../configs/database.php';

class IsHide extends DB{

    function buy($id_chair){

        $sql = "UPDATE  chair SET isShow = 0 WHERE id_chair = $id_chair";
        $qr = $this->exQuery($sql);


        if($qr){

            $_SESSION['msg'] = "* Bạn đã đặt ghế thành công.";
        }else {
            $_SESSION['msg'] = "* Lỗi không thể đặt ghế.";
        }
    }
}
$IsHide = new IsHide();
$id_chair = $_POST['id_chair'];
$IsHide->buy($id_chair);

