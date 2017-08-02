<?php
/**
 * Created by PhpStorm.
 * User: LeHieu
 * Date: 8/1/2017
 * Time: 9:53 PM
 */
    $id_event = $_GET['id_pro'];
?>
<div class="inner clear_fix">
    <div class="btn_back"><a href="?action=showProduct"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back</a></div>
    <div class="logo_top clear_fix">
        <img class="ghi_chu" src="http://localhost/Banve/image/ghi_chu.jpg">
        <img class="man_hinh" src="http://localhost/Banve/image/sk.jpg">
    </div>
    <h3>Lựa chọn ghế</h3>
    <div class="color_red">
    </div>
    <?php
        for($id_chair = 1; $id_chair <= 1000; $id_chair++){
            ?>
            <li class="btn_chair ">
<!--                <button id="btn"  style="background-color:#08B5FA" class="show">A2</button>-->

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
<!--                    <h3>Ghế A2</h3>-->
<!--                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>-->
                    <button class="buy" onclick="changeToHide(<?=$id_chair?>)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <?php
        }

    ?>
    <ul>                            <li class="an clear_fix"><span>A</span></li>



        <li class="btn_chair ">
            <button id="btn"  style="background-color:#08B5FA" class="show">A2</button>

            <div class="sub">
                <!--                                    <input type="hidden" name="action" value="buy">-->
                <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                <h3>Ghế A2</h3>
                <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                <button class="buy" onclick="changeToHide(116)">Đặt mua</button>
                <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
            </div>
        </li>
    </ul>