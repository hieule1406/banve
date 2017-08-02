<?php
/**
 * Created by PhpStorm.
 * User: LeHieu
 * Date: 7/11/2017
 * Time: 1:08 AM
 */
require_once '../../configs/config.php';
?>
<head>
    <link type="text/css" rel="stylesheet" href="<?php echo URL_ADMIN?>public/css/style.css">
    <link type="text/css" rel="stylesheet" href="<?php echo URL_ADMIN?>public/css/clear_fix.css">
    <link type="text/css" rel="stylesheet" href="<?php echo URL_ADMIN?>plugin/font-awesome/css/font-awesome.min.css">
</head>
<body>
<div class="main clear_fix">
    <div class="inner clear_fix">
        <div class="btn_back"><a href="?action=showProduct"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back</a></div>
        <div class="logo_top clear_fix">
            <img class="ghi_chu" src="http://localhost/Banve/image/ghi_chu.jpg">
            <img class="man_hinh" src="http://localhost/Banve/image/sk.jpg">
        </div>
        <h3>Lựa chọn ghế</h3>
        <div class="color_red">
        </div>
        <ul>                            <li class="an clear_fix"><span>A</span></li>

            <li class="an clear_fix"><span>A</span></li>

            <li class="an clear_fix"><span>A</span></li>

            <li class="an clear_fix"><span>A</span></li>

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
            <li class="btn_chair ">
                <button id="btn" style="background-color:#08B5FA" class="show">A4</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế A4</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(117)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">A6</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế A6</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(118)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">A8</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế A8</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(119)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">A10</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế A10</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(120)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">A12</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế A12</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(121)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">A14</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế A14</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(122)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">A16</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế A16</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(123)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">A18</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế A18</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(124)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="da_mua clear_fix"><span>A20</span></li>
            <li class="da_mua clear_fix"><span>A22</span></li>
            <li class="da_mua clear_fix"><span>A24</span></li>
            <li class="da_mua clear_fix"><span>A26</span></li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">A28</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế A28</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(129)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="an clear_fix"><span>A</span></li>

            <li class="an clear_fix"><span>A</span></li>

            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">A27</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế A27</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(132)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">A25</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế A25</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(133)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">A23</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế A23</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(134)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">A21</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế A21</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(135)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">A19</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế A19</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(136)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">A17</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế A17</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(137)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">A15</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế A15</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(138)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">A13</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế A13</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(139)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">A11</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế A11</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(140)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">A9</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế A9</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(141)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">A7</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế A7</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(143)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">A5</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế A5</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(144)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">A3</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế A3</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(145)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">A1</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế A1</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(146)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="an clear_fix"><span>A</span></li>

            <li class="an clear_fix"><span>A</span></li>

            <li class="an clear_fix"><span>A</span></li>

            <li class="an clear_fix"><span>A</span></li>

        </ul><ul>                            <li class="an clear_fix"><span>B20</span></li>

            <li class="an clear_fix"><span>B</span></li>

            <li class="an clear_fix"><span>B16</span></li>

            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">B2</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế B2</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(376)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">B4</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế B4</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(374)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">B6</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế B6</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(373)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">B8</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế B8</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(372)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">B10</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế B10</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(371)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">B12</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế B12</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(370)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">B14</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế B14</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(369)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">B16</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế B16</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(368)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">B18</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế B18</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(367)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">B20</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế B20</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(366)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">B22</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế B22</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(365)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">B24</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế B24</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(364)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">B26</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế B26</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(363)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">B28</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế B28</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(362)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">B30</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế B30</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(360)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="an clear_fix"><span>B</span></li>

            <li class="an clear_fix"><span>B</span></li>

            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">B29</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế B29</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(357)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">B27</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế B27</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(356)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">B25</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế B25</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(355)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">B23</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế B23</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(354)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">B21</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế B21</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(353)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">B19</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế B19</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(352)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">B17</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế B17</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(351)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">B15</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế B15</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(350)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">B13</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế B13</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(378)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">B11</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế B11</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(379)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">B9</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế B9</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(380)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">B7</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế B7</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(381)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">B5</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế B5</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(382)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">B3</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế B3</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(383)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">B1</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế B1</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(384)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="an clear_fix"><span>B</span></li>

            <li class="an clear_fix"><span>B</span></li>

            <li class="an clear_fix"><span>B</span></li>

        </ul>
        <ul>                            <li class="an clear_fix"><span>C</span></li>

            <li class="an clear_fix"><span>C</span></li>

            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">C2</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế C2</h3>
                    <p class="gia_ve">Giá vé : 200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(268)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">C4</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế C4</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(163)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">C6</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế C6</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(164)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">C8</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế C8</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(166)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">C10</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế C10</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(167)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">C12</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế C12</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(168)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">C14</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế C14</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(169)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="da_mua clear_fix"><span>C16</span></li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">C18</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế C18</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(171)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">C20</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế C20</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(172)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">C22</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế C22</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(173)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">C24</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế C24</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(174)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">C26</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế C26</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(175)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">C28</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế C28</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(176)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">C30</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế C30</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(177)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="da_mua clear_fix"><span>C32</span></li>
            <li class="an clear_fix"><span>C</span></li>

            <li class="an clear_fix"><span>C</span></li>

            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">C31</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế C31</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(182)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">C29</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế C29</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(183)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">C27</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế C27</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(184)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">C25</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế C25</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(185)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">C23</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế C23</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(186)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">C21</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế C21</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(187)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">C19</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế C19</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(188)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">C17</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế C17</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(189)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">C15</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế C15</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(190)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">C13</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế C13</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(191)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">C11</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế C11</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(192)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">C9</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế C9</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(193)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">C7</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế C7</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(194)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">C5</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế C5</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(195)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">C3</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế C3</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(196)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">C1</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế C1</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(197)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="an clear_fix"><span>C</span></li>

            <li class="an clear_fix"><span>C</span></li>

        </ul><ul>                            <li class="an clear_fix"><span>D</span></li>

            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">D2</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D2</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(231)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">D4</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D4</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(232)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">D6</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D6</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(233)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">D8</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D8</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(234)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">D10</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D10</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(235)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">D12</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D12</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(236)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">D14</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D14</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(237)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">D16</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D16</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(238)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">D18</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D18</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(239)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">D20</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D20</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(240)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">D22</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D22</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(241)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">D24</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D24</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(242)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">D26</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D26</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(243)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">D28</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D28</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(244)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">D30</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D30</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(245)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="da_mua clear_fix"><span>D32</span></li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">D34</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D34</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(247)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="an clear_fix"><span>D</span></li>

            <li class="an clear_fix"><span>D</span></li>

            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">D33</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D33</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(250)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">D31</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D31</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(251)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">D29</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D29</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(252)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">D27</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D27</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(253)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">D25</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D25</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(254)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">D23</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D23</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(255)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">D21</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D21</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(256)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">D19</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D19</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(257)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">D17</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D17</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(258)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">D15</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D15</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(259)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">D13</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D13</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(260)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">D11</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D11</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(261)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">D9</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D9</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(262)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">D7</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D7</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(263)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">D5</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D5</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(264)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">D3</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D3</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(265)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">D1</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế D1</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(266)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="an clear_fix"><span>D</span></li>

        </ul><ul>                            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">Đ2</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ2</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(270)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">Đ4</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ4</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(271)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Đ6</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ6</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(272)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Đ8</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ8</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(273)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">Đ10</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ10</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(281)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">Đ12</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ12</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(275)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">Đ14</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ14</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(276)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">Đ16</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ16</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(277)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">Đ18</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ18</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(278)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">Đ20</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ20</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(282)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">Đ22</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ22</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(283)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">Đ24</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ24</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(284)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">Đ26</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ26</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(285)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">Đ28</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ28</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(286)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">Đ30</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ30</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(287)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">Đ32</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ32</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(288)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">Đ34</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ34</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(289)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">Đ36</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ36</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(290)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="an clear_fix"><span>Đ</span></li>

            <li class="an clear_fix"><span>Đ</span></li>

            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">Đ35</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ35</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(293)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">Đ33</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ33</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(294)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">Đ31</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ31</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(295)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">Đ29</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ29</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(296)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">Đ27</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ27</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(297)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">Đ25</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ25</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(298)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">Đ23</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ23</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(299)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">Đ21</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ21</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(300)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">Đ19</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ19</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(301)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">Đ17</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ17</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(302)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">Đ15</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ15</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(303)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">Đ13</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ13</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(304)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">Đ11</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ11</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(305)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">Đ9</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ9</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(306)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Đ7</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ7</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(307)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Đ5</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ5</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(308)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">Đ3</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ3</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(309)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">Đ1</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Đ1</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(310)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
        </ul><ul>                            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">E2</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E2</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(311)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">E4</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E4</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(312)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">E6</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E6</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(313)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">E8</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E8</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(314)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">E10</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E10</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(315)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">E12</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E12</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(316)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">E14</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E14</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(317)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">E16</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E16</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(318)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">E18</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E18</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(319)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">E20</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E20</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(320)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">E22</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E22</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(321)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">E24</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E24</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(322)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">E26</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E26</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(323)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">E38</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E38</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(324)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">E30</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E30</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(325)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">E32</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E32</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(326)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">E34</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E34</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(327)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">E36</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E36</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(328)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="an clear_fix"><span>E</span></li>

            <li class="an clear_fix"><span>E</span></li>

            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">E35</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E35</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(331)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">E33</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E33</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(332)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">E31</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E31</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(333)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">E29</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E29</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(334)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">E27</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E27</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(335)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">E25</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E25</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(336)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">E23</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E23</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(337)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">E21</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E21</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(338)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">E19</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E19</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(339)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">E17</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E17</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(340)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">E15</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E15</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(341)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">E13</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E13</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(342)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">E11</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E11</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(343)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">E9</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E9</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(344)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">E7</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E7</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(345)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">E5</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E5</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(346)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">E3</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E3</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(347)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">E1</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế E1</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(348)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
        </ul><ul></ul><ul>                            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">G2</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G2</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(388)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">G4</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G4</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(389)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">G6</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G6</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(390)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">G8</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G8</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(391)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">G10</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G10</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(392)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">G12</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G12</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(393)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">G14</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G14</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(394)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">G16</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G16</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(395)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">G18</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G18</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(396)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">G20</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G20</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(397)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">G22</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G22</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(398)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">G24</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G24</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(399)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">G26</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G26</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(400)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">G28</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G28</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(401)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">G30</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G30</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(402)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">G32</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G32</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(403)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">G34</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G34</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(404)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">G36</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G36</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(405)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="an clear_fix"><span>G</span></li>

            <li class="an clear_fix"><span>G</span></li>

            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">G35</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G35</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(408)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">G33</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G33</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(409)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">G31</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G31</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(410)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">G29</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G29</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(411)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">G27</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G27</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(412)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">G25</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G25</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(413)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">G23</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G23</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(414)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">G21</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G21</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(415)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">G19</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G19</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(416)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">G17</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G17</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(417)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">G15</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G15</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(418)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">G13</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G13</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(419)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">G11</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G11</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(420)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">G9</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G9</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(421)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">G7</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G7</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(422)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">G5</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G5</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(423)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">G3</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G3</h3>
                    <p class="gia_ve">Giá vé : 15,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(424)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">G1</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế G1</h3>
                    <p class="gia_ve">Giá vé : 15,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(425)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
        </ul><ul>                            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">H2</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H2</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(428)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">H4</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H4</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(429)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">H6</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H6</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(430)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">H8</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H8</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(431)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">H10</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H10</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(432)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">H12</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H12</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(433)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">H14</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H14</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(434)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">H16</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H16</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(435)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">H18</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H18</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(436)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">H20</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H20</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(437)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">H22</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H22</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(438)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">H24</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H24</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(439)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">H26</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H26</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(440)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">H28</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H28</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(441)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">H30</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H30</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(442)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">H32</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H32</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(443)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">H34</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H34</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(444)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">H36</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H36</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(445)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="an clear_fix"><span>H</span></li>

            <li class="an clear_fix"><span>H</span></li>

            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">H35</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H35</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(448)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">H33</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H33</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(449)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">H31</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H31</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(450)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">H29</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H29</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(451)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">H27</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H27</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(452)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">H25</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H25</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(453)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">H23</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H23</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(454)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">H21</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H21</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(455)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">H19</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H19</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(456)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">H17</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H17</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(457)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">H15</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H15</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(458)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">H13</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H13</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(459)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">H11</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H11</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(460)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">H9</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H9</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(461)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">H7</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H7</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(462)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">H5</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H5</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(463)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">H3</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H3</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(464)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">H1</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế H1</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(465)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
        </ul><ul>                            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">I2</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I2</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(466)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">I4</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I4</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(467)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">I6</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I6</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(468)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">I8</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I8</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(469)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">I10</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I10</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(470)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">I12</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I12</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(471)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">I14</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I14</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(472)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">I16</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I16</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(473)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">I18</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I18</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(474)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">I20</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I20</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(475)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">I22</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I22</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(476)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">I24</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I24</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(477)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">I26</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I26</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(478)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">I28</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I28</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(479)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">I30</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I30</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(480)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">I32</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I32</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(481)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">I34</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I34</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(482)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">I36</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I36</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(483)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="an clear_fix"><span>I</span></li>

            <li class="an clear_fix"><span>I</span></li>

            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">I35</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I35</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(486)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">I33</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I33</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(487)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">I31</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I31</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(488)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">I29</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I29</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(489)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">I27</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I27</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(490)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">I25</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I25</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(491)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">I23</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I23</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(492)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">I21</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I21</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(493)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">I19</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I19</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(494)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">I17</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I17</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(495)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">I15</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I15</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(496)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">I13</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I13</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(497)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">I11</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I11</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(498)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">I9</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I9</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(499)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">I7</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I7</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(500)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">I5</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I5</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(501)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">I3</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I3</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(502)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">I1</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế I1</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(503)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
        </ul><ul>                            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">K2</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K2</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(504)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">K4</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K4</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(505)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">K6</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K6</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(506)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">K8</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K8</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(507)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">K10</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K10</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(508)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">K12</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K12</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(509)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">K14</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K14</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(510)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">K16</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K16</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(511)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">K18</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K18</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(512)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">K20</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K20</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(513)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">K22</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K22</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(514)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">K24</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K24</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(515)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">K26</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K26</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(516)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">K28</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K28</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(517)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">K30</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K30</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(518)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">K32</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K32</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(519)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">K34</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K34</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(520)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">K36</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K36</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(521)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="an clear_fix"><span>K</span></li>

            <li class="an clear_fix"><span>K</span></li>

            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">K35</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K35</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(524)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">K33</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K33</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(525)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">K31</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K31</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(526)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">K29</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K29</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(527)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">K27</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K27</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(528)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">K25</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K25</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(529)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">K23</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K23</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(530)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">K21</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K21</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(531)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">K19</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K19</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(532)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">K17</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K17</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(533)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">K15</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K15</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(534)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">K13</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K13</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(535)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">K11</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K11</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(536)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">K9</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K9</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(537)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">K7</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K7</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(538)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">K5</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K5</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(539)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">K3</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K3</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(540)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">K1</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế K1</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(541)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
        </ul><ul>                            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">L2</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L2</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(542)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">L4</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L4</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(543)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">L6</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L6</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(544)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">L8</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L8</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(545)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">L10</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L10</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(546)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">L12</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L12</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(547)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">L14</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L14</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(548)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">L16</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L16</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(549)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">L18</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L18</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(550)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">L20</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L20</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(551)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">L22</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L22</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(552)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">L24</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L24</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(553)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">L26</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L26</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(554)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">L28</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L28</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(555)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">L30</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L30</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(556)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">L32</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L32</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(557)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">L34</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L34</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(558)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">L36</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L36</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(559)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="an clear_fix"><span>L</span></li>

            <li class="an clear_fix"><span>L</span></li>

            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">L35</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L35</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(562)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">L33</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L33</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(563)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">L31</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L31</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(564)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">L29</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L29</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(565)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">L27</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L27</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(566)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">L25</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L25</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(567)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">L23</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L23</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(568)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">L21</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L21</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(569)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">L19</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L19</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(570)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">L17</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L17</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(571)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">L15</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L15</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(572)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">L13</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L13</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(573)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">L11</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L11</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(574)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">L9</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L9</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(575)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">L7</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L7</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(576)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">L5</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L5</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(577)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">L3</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L3</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(578)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">L1</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế L1</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(579)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
        </ul><ul>                            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">M2</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M2</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(580)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">M4</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M4</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(581)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">M6</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M6</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(582)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">M8</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M8</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(583)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">M10</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M10</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(584)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">M12</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M12</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(585)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">M14</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M14</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(586)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">M16</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M16</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(587)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">M18</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M18</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(588)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">M20</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M20</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(589)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">M22</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M22</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(590)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">M24</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M24</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(591)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">M26</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M26</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(592)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">M28</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M28</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(593)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">M30</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M30</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(594)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">M32</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M32</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(595)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">M34</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M34</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(596)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">M36</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M36</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(597)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="an clear_fix"><span>M</span></li>

            <li class="an clear_fix"><span>M</span></li>

            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">M35</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M35</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(600)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">M33</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M33</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(601)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">M31</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M31</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(602)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">M29</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M29</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(603)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">M27</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M27</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(604)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">M25</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M25</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(605)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">M23</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M23</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(606)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">M21</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M21</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(607)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">M19</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M19</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(608)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#E5412F" class="show">M17</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M17</h3>
                    <p class="gia_ve">Giá vé : 3,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(609)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">M15</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M15</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(610)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">M13</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M13</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(611)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">M11</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M11</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(612)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">M9</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M9</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(613)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">M7</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M7</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(614)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">M5</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M5</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(615)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">M3</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M3</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(616)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">M1</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế M1</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(617)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
        </ul><ul>                            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">N2</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N2</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(618)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">N4</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N4</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(619)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">N6</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N6</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(620)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">N8</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N8</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(621)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">N10</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N10</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(622)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">N12</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N12</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(623)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">N14</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N14</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(624)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">N16</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N16</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(625)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">N18</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N18</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(626)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">N20</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N20</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(627)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">N22</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N22</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(628)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">N24</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N24</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(629)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">N26</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N26</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(630)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">N28</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N28</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(631)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">N30</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N30</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(632)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">N32</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N32</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(633)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">N34</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N34</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(634)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">N36</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N36</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(635)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="an clear_fix"><span>N</span></li>

            <li class="an clear_fix"><span>N</span></li>

            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">N35</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N35</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(638)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">N33</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N33</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(639)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">N31</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N31</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(640)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">N29</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N29</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(641)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">N27</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N27</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(642)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">N25</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N25</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(643)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">N23</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N23</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(644)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">N21</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N21</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(645)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">N19</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N19</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(646)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">N17</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N17</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(647)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">N15</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N15</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(648)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">N13</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N13</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(649)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">N11</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N11</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(650)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">N9</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N9</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(651)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">N7</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N7</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(652)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">N5</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N5</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(653)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">N3</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N3</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(654)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">N1</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế N1</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(655)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
        </ul><ul>                            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">O2</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O2</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(656)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">O4</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O4</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(657)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">O6</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O6</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(658)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">O8</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O8</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(659)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">O10</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O10</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(660)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">O12</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O12</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(661)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">O14</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O14</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(662)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">O16</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O16</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(663)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">O18</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O18</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(664)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">O20</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O20</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(665)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">O22</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O22</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(666)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">O24</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O24</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(667)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">O26</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O26</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(668)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">O28</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O28</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(669)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">O30</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O30</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(670)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">O32</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O32</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(671)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">O34</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O34</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(672)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">O36</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O36</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(673)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="an clear_fix"><span>O</span></li>

            <li class="an clear_fix"><span>O</span></li>

            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">O35</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O35</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(676)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">O33</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O33</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(677)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">O31</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O31</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(678)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">O29</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O29</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(679)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">O27</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O27</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(680)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">O25</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O25</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(681)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">O23</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O23</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(682)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">O21</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O21</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(683)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">O19</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O19</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(684)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">O17</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O17</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(685)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">O15</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O15</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(686)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">O13</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O13</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(687)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">O11</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O11</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(688)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">O9</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O9</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(689)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">O7</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O7</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(690)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">O5</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O5</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(691)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">O3</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O3</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(692)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">O1</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế O1</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(693)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
        </ul><ul>                            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">P2</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P2</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(694)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">P4</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P4</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(695)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">P6</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P6</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(696)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">P8</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P8</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(697)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">P10</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P10</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(698)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">P12</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P12</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(699)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">P14</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P14</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(700)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">P16</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P16</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(701)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">P18</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P18</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(702)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">P20</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P20</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(703)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">P22</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P22</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(704)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">P24</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P24</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(705)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">P26</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P26</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(706)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">P28</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P28</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(707)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">P30</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P30</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(708)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">P32</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P32</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(709)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">P34</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P34</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(710)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">P36</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P36</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(711)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="an clear_fix"><span>P</span></li>

            <li class="an clear_fix"><span>P</span></li>

            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">P35</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P35</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(714)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">P33</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P33</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(715)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">P31</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P31</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(716)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">P29</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P29</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(717)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">P27</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P27</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(718)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">P25</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P25</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(719)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">P23</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P23</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(720)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">P21</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P21</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(721)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">P19</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P19</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(722)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">P17</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P17</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(723)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">P15</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P15</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(724)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">P13</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P13</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(725)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">P11</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P11</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(726)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#08B5FA" class="show">P9</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P9</h3>
                    <p class="gia_ve">Giá vé : 2,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(727)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">P7</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P7</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(728)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">P5</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P5</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(729)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">P3</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P3</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(730)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">P1</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế P1</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(731)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
        </ul><ul>                            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">Q2</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q2</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(732)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">Q4</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q4</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(733)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q6</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q6</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(734)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q8</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q8</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(735)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q10</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q10</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(736)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q12</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q12</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(737)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q14</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q14</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(738)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q16</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q16</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(739)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q18</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q18</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(740)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q20</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q20</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(741)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q22</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q22</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(742)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q24</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q24</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(743)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q26</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q26</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(744)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q28</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q28</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(745)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q30</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q30</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(746)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q32</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q32</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(747)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q34</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q34</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(748)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q36</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q36</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(749)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="an clear_fix"><span>Q</span></li>

            <li class="an clear_fix"><span>Q</span></li>

            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q35</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q35</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(752)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q33</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q33</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(753)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q31</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q31</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(754)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q29</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q29</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(755)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q27</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q27</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(756)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q25</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q25</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(757)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q23</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q23</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(758)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q21</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q21</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(759)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q19</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q19</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(760)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q17</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q17</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(761)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q15</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q15</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(762)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q13</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q13</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(763)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q11</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q11</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(764)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q9</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q9</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(765)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q7</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q7</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(766)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">Q5</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q5</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(767)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">Q3</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q3</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(768)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">Q1</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế Q1</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(769)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
        </ul><ul>                            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">R2</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R2</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(770)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">R4</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R4</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(771)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R6</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R6</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(772)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R8</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R8</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(773)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R10</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R10</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(774)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R12</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R12</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(775)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R14</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R14</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(776)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R16</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R16</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(777)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R18</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R18</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(778)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R20</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R20</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(779)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R22</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R22</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(780)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R24</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R24</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(781)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R26</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R26</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(782)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R28</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R28</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(783)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R30</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R30</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(784)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R32</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R32</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(785)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R34</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R34</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(786)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R36</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R36</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(787)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="an clear_fix"><span>R</span></li>

            <li class="an clear_fix"><span>R</span></li>

            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R35</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R35</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(790)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R33</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R33</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(791)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R31</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R31</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(792)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R29</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R29</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(793)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R27</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R27</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(794)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R25</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R25</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(795)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R23</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R23</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(796)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R21</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R21</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(797)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R19</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R19</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(798)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R17</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R17</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(799)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R15</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R15</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(800)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R13</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R13</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(801)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R11</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R11</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(802)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R9</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R9</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(803)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R7</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R7</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(804)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#EF1F92" class="show">R5</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R5</h3>
                    <p class="gia_ve">Giá vé : 2,000,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(805)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">R3</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R3</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(806)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">R1</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế R1</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(807)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
        </ul><ul>                            <li class="an clear_fix"><span>X</span></li>

        </ul><ul>                            <li class="an clear_fix"><span>W</span></li>

        </ul><ul>                            <li class="an clear_fix"><span>S</span></li>

            <li class="an clear_fix"><span>S</span></li>

            <li class="an clear_fix"><span>S</span></li>

            <li class="an clear_fix"><span>S</span></li>

            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">S2</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế S2</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(814)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">S4</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế S4</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(815)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">S6</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế S6</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(816)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">S8</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế S8</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(817)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">S10</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế S10</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(818)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">S12</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế S12</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(819)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">S14</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế S14</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(820)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">S16</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế S16</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(821)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">S18</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế S18</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(822)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">S20</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế S20</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(823)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">S22</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế S22</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(824)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">S24</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế S24</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(825)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">S26</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế S26</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(826)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">S28</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế S28</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(827)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="an clear_fix"><span>S</span></li>

            <li class="an clear_fix"><span>S</span></li>

            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">S27</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế S27</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(830)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">S25</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế S25</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(831)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">S23</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế S23</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(832)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">S21</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế S21</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(833)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">S19</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế S19</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(834)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">S17</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế S17</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(835)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">S15</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế S15</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(836)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">S13</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế S13</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(837)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">S11</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế S11</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(838)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">S9</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế S9</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(839)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">S7</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế S7</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(840)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">S5</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế S5</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(841)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">S3</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế S3</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(842)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">S1</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế S1</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(843)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="an clear_fix"><span>S</span></li>

            <li class="an clear_fix"><span>S</span></li>

            <li class="an clear_fix"><span>S</span></li>

            <li class="an clear_fix"><span>S</span></li>

        </ul><ul>                            <li class="an clear_fix"><span>T</span></li>

            <li class="an clear_fix"><span>T</span></li>

            <li class="an clear_fix"><span>T</span></li>

            <li class="an clear_fix"><span>T</span></li>

            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">T2</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế T2</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(852)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">T4</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế T4</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(853)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">T6</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế T6</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(854)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">T8</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế T8</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(855)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">T10</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế T10</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(856)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">T12</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế T12</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(857)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">T14</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế T14</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(858)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">T16</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế T16</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(859)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">T18</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế T18</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(860)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">T20</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế T20</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(861)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">T22</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế T22</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(862)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">T24</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế T24</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(863)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">T26</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế T26</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(864)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">T28</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế T28</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(865)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="an clear_fix"><span>T</span></li>

            <li class="an clear_fix"><span>T</span></li>

            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">T27</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế T27</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(868)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">T25</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế T25</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(869)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">T23</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế T23</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(870)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">T21</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế T21</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(871)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">T19</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế T19</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(872)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">T17</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế T17</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(873)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">T15</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế T15</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(874)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">T13</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế T13</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(875)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">T11</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế T11</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(876)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">T9</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế T9</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(877)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">T7</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế T7</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(878)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">T5</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế T5</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(879)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">T3</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế T3</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(880)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#333DA7" class="show">T1</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế T1</h3>
                    <p class="gia_ve">Giá vé : 1,500,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(881)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="an clear_fix"><span>T</span></li>

            <li class="an clear_fix"><span>T</span></li>

            <li class="an clear_fix"><span>T</span></li>

            <li class="an clear_fix"><span>T</span></li>

        </ul><ul>                            <li class="an clear_fix"><span>U</span></li>

            <li class="an clear_fix"><span>U</span></li>

            <li class="an clear_fix"><span>U</span></li>

            <li class="an clear_fix"><span>U</span></li>

            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">U2</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế U2</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(890)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">U4</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế U4</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(891)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">U6</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế U6</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(892)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">U8</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế U8</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(893)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">U10</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế U10</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(894)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">U12</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế U12</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(895)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">U14</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế U14</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(896)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">U16</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế U16</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(897)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">U18</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế U18</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(898)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">U20</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế U20</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(899)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">U22</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế U22</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(900)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">U24</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế U24</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(901)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="an clear_fix"><span>U</span></li>

            <li class="an clear_fix"><span>U</span></li>

            <li class="an clear_fix"><span>U</span></li>

            <li class="an clear_fix"><span>U</span></li>

            <li class="an clear_fix"><span>U</span></li>

            <li class="an clear_fix"><span>U</span></li>

            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">U23</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế U23</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(908)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">U21</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế U21</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(913)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">U19</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế U19</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(911)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">U17</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế U17</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(914)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">U15</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế U15</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(915)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">U13</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế U13</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(916)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">U11</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế U11</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(917)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">U9</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế U9</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(918)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">U7</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế U7</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(919)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">U5</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế U5</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(920)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">U3</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế U3</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(921)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">U1</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế U1</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(922)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="an clear_fix"><span>U</span></li>

            <li class="an clear_fix"><span>U</span></li>

            <li class="an clear_fix"><span>U</span></li>

            <li class="an clear_fix"><span>U</span></li>

        </ul><ul>                            <li class="an clear_fix"><span>V</span></li>

            <li class="an clear_fix"><span>V</span></li>

            <li class="an clear_fix"><span>V</span></li>

            <li class="an clear_fix"><span>V</span></li>

            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">V2</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế V2</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(931)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">V4</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế V4</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(932)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">V6</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế V6</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(933)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">V8</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế V8</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(934)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">V10</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế V10</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(935)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">V12</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế V12</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(936)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">V14</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế V14</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(937)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">V16</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế V16</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(938)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">V18</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế V18</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(939)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">V20</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế V20</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(940)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">V22</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế V22</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(941)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">V24</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế V24</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(942)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">V26</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế V26</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(943)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">V28</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế V28</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(944)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">V30</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế V30</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(945)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">V29</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế V29</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(946)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">V27</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế V27</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(947)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">V25</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế V25</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(948)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">V23</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế V23</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(949)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">V21</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế V21</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(950)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">V19</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế V19</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(951)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">V17</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế V17</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(952)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">V15</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế V15</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(953)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">V13</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế V13</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(954)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">V11</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế V11</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(955)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">V9</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế V9</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(956)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">V7</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế V7</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(95958,id_even, id_rooms7)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">V5</button>
<?php $id_event ?>
                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế V5</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(958,<?php echo $id_event?>, id_rooms )">Đặt mua</button>
                            <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">V3</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế V3</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(959)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="btn_chair ">
                <button style="background-color:#02A359" class="show">V1</button>

                <div class="sub">
                    <!--                                    <input type="hidden" name="action" value="buy">-->
                    <!--                                    <input type="hidden" name="id" value="--><!--?//= $item['id'] ?--><!--">-->
                    <h3>Ghế V1</h3>
                    <p class="gia_ve">Giá vé : 1,200,000 VNĐ</p>
                    <button class="buy" onclick="changeToHide(960)">Đặt mua</button>
                    <b class="hide"><i class="fa fa-window-close" aria-hidden="true"></i></b>
                </div>
            </li>
            <li class="an clear_fix"><span>V</span></li>

            <li class="an clear_fix"><span>V</span></li>

            <li class="an clear_fix"><span>V</span></li>

            <li class="an clear_fix"><span>V</span></li>

        </ul>            </div>
</div>
<?php

//var myObj,x;
//myObj ={
//    "name" : "Hieu";
//    $myObj->age = 22;
//}
//$myJson =json_encode($myObj);
//echo $myJson;
echo x;
?>

<script>
var myObj,x;
  myObj= {
      "name":"hieu",
      "agen":23,
      "cart":["hieu",22]
  };
  x=myObj.cart[0];
  document.getElementById("btn").innerHTML=x;



    $(document).ready(function(){

        $('.show').click(function(){
            $('.sub').hide(500);
            $(this).next('.sub').show(500);
        });
        $('.hide').click(function(){
            $('.sub').hide(500);
        });


    });
    function changeToHide(id) {
        var acept = confirm("Bạn có chắc muốn đặt ghế này?");
        if(acept == true){
            $.ajax({
                url: "../ajax/changToHide.php",
                method: "POST",
                data: {id: id},
                dataType: "text",
                success: function(){
                    window.location = "?action=showChairPage";
                }
            });
        }

    }

</script>

</body>
