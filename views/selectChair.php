<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đặt ghế</title>
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


	<div class="main clear_fix">
        <div class="top clear_fix">
            <a class="btn_back" href="?action=showProduct"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back</a>
            <a class="top_text"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Giỏ hàng</a>
            <a class="top_text top_texts" href="#"><i class="fa fa-sign-in" aria-hidden="true"></i> Đăng ký</a>
            <a class="top_text" href="#"><i class="fa fa-user" aria-hidden="true"></i> Đăng nhập</a>

            <a class="top_text" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Thoát</a>
        </div>
        <div class="inner clear_fix">
            <div class="logo_top clear_fix">
                <img class="ghi_chu" src="<?php echo URL_BANVE?>image/ghi_chu.jpg">
                <img class="man_hinh" src="<?php echo URL_BANVE?>image/sk.jpg">
            </div>
                <h3>Lựa chọn ghế</h3>
            <div class="color_red">
                <?php
                    $id_event = $_GET['id_pro'];
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                    }

                ?>
            </div>
            <div class="chair_tang1">
                <?php

                    for($i = 0; $i< count($chair); $i++) {

                        echo "<ul>";
                        foreach($chair[$i] as $item){
                            if($item['isShow'] == 1) {
                                ?>
                                <li class="btn_chair ">
                                    <button title="<?= $item['name']?>" style="background-color:<?php echo $item['color'] ?>"
                                            class="show"><?= $item['name'] ?></button>

                                    <div  class="sub" >
                                        <!--                                    <input type="hidden" name="action" value="buy">-->
                                        <input type="hidden" name="id_chair" value="<?= $item['id_chair'] ?>">
                                        <h3>Ghế <?= $item['name'] ?></h3>
                                        <p class="gia_ve">Giá vé : <?= number_format($item['price']) ?> VNĐ</p>
                                        <button class="buy" onclick="changeToHide(<?=$item['id_chair'].','.$id_event?>)">Chọn ghế</button>

                                        <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                                        <div>
                                            <br>
                                            <i class="fa fa-money" aria-hidden="true"></i> Tổng tiền : <?= number_format($item['price']) ?> VNĐ
                                            <br>

                                            </br>
                                            <i class="fa fa-phone-square" aria-hidden="true"></i> Hotline:0968326818
                                            <br>

                                            <i>Gọi Hotline để được hỗ trợ</i>
                                        </div>
                                    </div>
                                </li>
                                <?php
                            }elseif($item['isShow'] == 2){
                                ?>
                                <li class="an clear_fix"><span><?=$item['name']?></span></li>

                                <?php
                            }else{
                                ?>
                                    <li class="da_mua clear_fix"><span ><?=$item['name']?></span></li>
                                <?php
                            }

                        }
                        echo "</ul>";
                     }
                ?>
            </div>
            <div class="chair_tang2">

            </div>
        </div>
    </div>


		<script>
			$(document).ready(function(){
				
				$('.show').click(function(){
					$('.sub').hide(300);
					$(this).next('.sub').show(300);
				});
				$('.hide').click(function(){
					$('.sub').hide(500);
				});

				
			});
            function changeToHide(id_chair,id_pro) {
                var acept = confirm("Bạn có chắc muốn đặt ghế này?");
                if(acept == true){
                    $.ajax({
                        url: "../ajax/changToHide.php",
                        method: "POST",
                        data: {id_chair:id_chair,id_pro:id_pro},
                        dataType: "text",
                        success: function(){
                            window.location = "?action=showChairPage";
                        }
                    });
                }

            }

		</script>
</body>
</html>