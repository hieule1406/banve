<?php
/**
 * Created by PhpStorm.
 * User: LeHieu
 * Date: 8/1/2017
 * Time: 9:53 PM
 */

    $id_event = $_GET['id_pro'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="<?php echo URL_BANVE?>public/css/style.css">
    <link type="text/css" rel="stylesheet" href="<?php echo URL_BANVE?>public/css/clear_fix.css">
    <link type="text/css" rel="stylesheet" href="<?php echo URL_BANVE?>plugin/font-awesome/css/font-awesome.min.css">
    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous">
    </script>
</head>
<body>
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

        foreach (range('A','Z') as $key => $row ) {
            echo "<ul>";


            for ($id_chair = 1; $id_chair <= 38; $id_chair++) {
                ?>
                <li class="btn_chair ">
                                    <button id="<?=$id_chair?>"  style="background-color:#08B5FA" class="show"><?=$row.$id_chair?></button>

                    <div class="sub">
                        <!--                                    <input type="hidden" name="action" value="buy">-->
                        <!--                                    <input type="hidden" name="id" value="-->
                        <!--?//= $item['id'] ?--><!--">-->
                        <!--                    <h3>Ghế A2</h3>-->
                        <!--                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>-->
                        <button class="buy" onclick="changeToHide(<?= $id_chair . ',' . $id_event ?>)">Đặt mua</button>
                        <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                    </div>
                </li>
                <?php

            }
            echo "</ul>";
        }
    ?>
    <script>
        var id = $('#<?=$id_chair?>');
        $.ajax({
            url: "../ajax/getColor.php",
            method: "GET",
            data: {id_chair:<?=$id_chair?>},
            dataType: "text",
            success: function(data){
//                id.attr("background",data);
                alert(data);
            }
        });
    </script>
</body>
</html>