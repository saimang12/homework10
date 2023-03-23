<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

<?php
    if(!defined('_INDEX_')) { // index가 아닐 떄...
        include G5_THEME_PATH.'/sub_t.php'; // 서버페이지 푸터...
    }
?>




<footer class="footer">
            <div class="inner">
                <div class="top">
                    <figure>
                        <img src="<?= G5_THEME_URL?>/img/f_logo_01.png" alt="">
                    </figure>
                    <figure>
                        <img src="<?= G5_THEME_URL?>/img/f_logo_02.png" alt="">
                    </figure>
                    <figure>
                        <img src="<?= G5_THEME_URL?>/img/f_logo_03.png" alt="">
                    </figure>
                    <figure>
                        <img src="<?= G5_THEME_URL?>/img/f_logo_04.png" alt="">
                    </figure>
                </div>
                <div class="bot">
                    <div class="desc">
                        <ul>
                            <li class="bold"><a href="">개인정보처리방침</a></li>
                            <li><a href="">홈페이지이용약관</a></li>
                            <li><a href="">이메일무단수집거부</a></li>
                        </ul>
                        <ul>
                            <li><?= $as_company ?></li>
                            <li>사업자등록번호 : <?= $as_num ?></li>
                            <li>대표이사 : 정경문</li>
                            <li>본사 대표전화 및 가맹상담전화 : <?= $as_tel ?></li>
                        </ul>
                        <ul>
                            <li>주소 : <?= $as_address ?></li>
                            <li>팩스 : <?= $as_fax ?></li>
                            <li>E-mail : <?= $as_email ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <div class="toTop">
            <i class="xi-angle-up"></i>
        </div>

    </div>















<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");