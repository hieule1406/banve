<?php
/**
 * Created by PhpStorm.
 * User: LeHieu
 * Date: 7/7/2017
 * Time: 3:59 AM
 */
require_once 'head.php';
?>
<!---------main-list product-->

<div class="wap clear_fix ">
    <div class="inner clear_fix ">
    <?php
    $rows=$result;
    if(count($rows)>0)
        foreach($rows as $item){
       $status=render_status($item['status_pro']);
    ?>
    <div class="_product ">
        <ul class="fom_img clear_fix">
            <li class="txt_s " ><a href="?action=showPageDetail&id_pro=<?php echo $item['id_pro'] ?>"><img class="img" title="<?php echo $item['name'] ?>" src="<?php echo URL_BANVE_ADMIN.'upload/'.$item['image_pro']?>"></a></li>
<!--            <li class="txt_s text_ss"><a href="#">--><?php //echo $item['category_name'] ?><!--</a></li>-->
            <li class="txt_s text_ss dam"><a href="?action=showPageDetail&id_pro=<?php echo $item['id_pro'] ?>"><?php echo $item['name'] ?></a></li>
            <li class="txt_s t_1 text_ss"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $item['address'] ?></li>
            <li class="txt_s t_1 text_ss"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $item['start_date'] ?></li>
            <?php if($item['status_pro']==1) {?>
            <li class="txt_s t_1 text_ss text_boder "><a href="#"><?php echo $status ?></a></li>
            <?php }
            else{ ?>
            <li class="txt_s t_1 text_ss text_boder_hide "><a><?php echo $status ?></a></li>
            <?php }?>
            <li class="txt_s _boder_bottom"><i class="fa fa-calendar" aria-hidden="true"></i> <a href="?action=showCategory"><?php echo $item['category_name'] ?></a> <a href="#"><?php echo $item['city'] ?></a><a class="chi_tiet" href="?action=showPageDetail&id_pro=<?php echo $item['id_pro'] ?>">Xem chi tiết</a></li>

        </div>
        <?php
        }

        ?>
    </div>

</div>
<!-----------footer-->
<?php require_once 'footer.php';?>
