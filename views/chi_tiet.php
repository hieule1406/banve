<?php
/**
 * Created by PhpStorm.
 * User: LeHieu
 * Date: 7/7/2017
 * Time: 2:34 PM
 */

require_once 'head.php';
?>

<!------------module_right-->
<div class="wap_content_right">
    <div><?php require_once 'module_right.php'; ?></div>

</div>
<!---------end---module_right-->

<!------------main_left_chi tiết-->
    <div class="content_left">
        <div class="inner_main">
            <?php
            $rows=$result;
            if(count($rows)>0)
                foreach($rows as $item){
                    ?>

                    <div class="img_banner"><img class="img_poster" src="<?php echo URL_BANVE_ADMIN.'upload/'.$item['image_pro']?>"></li>

                        <ul class="txt_infor">
                            <li class="title">  <?php echo $item['name']?></li>
                            <li class="text_info"><i class="fa fa-folder-open" aria-hidden="true"></i>  <b><?php echo $item['category_name']?></b></li>
                            <li class="text_info"><i class="fa fa-map-marker" aria-hidden="true"></i>   <?php echo $item['address']?> - <?php echo $item['city']?></li>
                            <li class="text_info"><i class="fa fa-clock-o" aria-hidden="true"></i>   <?php echo $item['start_date']?></li>

                        </ul>
                    </div>
                    <div class="infor">
<!--                        ---check sự kiện đã dien ra chưa thi cho chọn ghế-->
                        <?php if($item['status_pro']==1){?>
                        <div class="chon_ghe"><a href="?action=showChairPage&id_pro=<?php echo $item['id_pro'] ?>">Bấm vào để Chọn Ghế</a> <i class="fa fa-hand-o-left" aria-hidden="true"></i></div>
                        <?php } ?>
<!--                        ---------------->
                        <div class="content_infor">
                        <h2>Thông Tin</h2>

                        <div class="event-content full-100" > <?php echo $item['infor']?></div>
                        </div>
                    </div>
                <?php } ?>
        </div>
    </div>
<!---------end---main_left_chi tiết-->


<!------------footer-->
<?php require_once 'footer.php';?>
