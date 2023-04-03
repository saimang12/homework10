<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
?>










<div class="Wrap">
        <header class="header">
            <div class="inner">
                <div class="h_top">
                    <h1>
                        <a href="/">
                            <img src="<?= G5_THEME_URL?>/img/gt_mainlogo.png" alt="">
                        </a>
                    </h1>
                    <div class="tel">
                        <strong>
                            <a href="tel:060-700-5454">
                            가맹문의 <?= $as_tel ?>
                            </a>
                        </strong>
                    </div>
                    <div class="h_icon">
                        <i class="xi-bars"></i>
                    </div>
                </div>
            </div>
            <div class="gnb_bar">
                <nav class="gnb">
                <? include G5_THEME_PATH.'/doc/nav.php';?>
                </nav>
            </div>

        </header>









<?php
    if(!defined('_INDEX_')) { // index가 아닐 떄...
        include G5_THEME_PATH.'/sub_h.php'; // 서버페이지 해드...
    }
?>
