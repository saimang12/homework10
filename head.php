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
                            가맹문의 <?= $as_tel ?>
                        </strong>
                    </div>
                    <div class="h_icon">
                        <i class="xi-bars"></i>
                    </div>
                </div>
            </div>
            <div class="gnb_bar">
                <nav class="gnb">
                    <ul>
                        <li>
                            <a href="<?= G5_THEME_URL?>/doc/m01-01.php">창업문의</a>
                            <ul class="s_menu">
                                <li><a href="<?= G5_THEME_URL?>/doc/m01-01.php">성공노하우</a></li>
                                <li><a href="">창업절차</a></li>
                                <li><a href="">창업조건</a></li>
                                <li><a href="">가맹혜택</a></li>
                                <li><a href="">창업비용</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= G5_THEME_URL?>/doc/m02-01.php">티에스푸드</a>
                            <ul class="s_menu">
                                <li><a href="<?= G5_THEME_URL?>/doc/m02-01.php">개요</a></li>
                                <li><a href="">CEO인사말</a></li>
                                <li><a href="">부서안내</a></li>
                                <li><a href="">연혁</a></li>
                                <li><a href="">찾아오시는 길</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= G5_THEME_URL?>/doc/m03-01.php">브랜드</a>
                            <ul class="s_menu">
                                <li><a href="<?= G5_THEME_URL?>/doc/m03-01.php">땅스부대찌개</a></li>
                                <li><a href="">푸담소곱창전골</a></li>
                                <li><a href="">땅스떡볶이</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">메뉴</a>
                            <ul class="s_menu">
                                <li><a href="">땅스부대찌개</a></li>
                                <li><a href="">푸담소곱창전골</a></li>
                                <li><a href="">땅스떡볶이</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">매장찾기</a>
                            <ul class="s_menu">
                                <li><a href="">국내 매장찾기</a></li>
                                <li><a href="">해외 매장찾기</a></li>
                                <li><a href="">신규매장</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">땅스오더</a>
                            <ul class="s_menu">
                                <li><a href="">앱 다운로드</a></li>
                                <li><a href="">e금액권 사용법</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/bbs/board.php?bo_table=notice_Thanks">땅스소식</a>
                            <ul class="s_menu">
                                <li><a href="/bbs/board.php?bo_table=notice_Thanks">뉴스 및 공지</a></li>
                                <li><a href="/bbs/board.php?bo_table=event_Thanks">이벤트 및 소식</a></li>
                                <li><a href="/bbs/board.php?bo_table=freeboard_Thanks">자유게시판</a></li>
                                <li><a href="">땅스TV</a></li>
                                <li><a href="">캐릭터</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>

        </header>









<?php
    if(!defined('_INDEX_')) { // index가 아닐 떄...
        include G5_THEME_PATH.'/sub_h.php'; // 서버페이지 해드...
    }
?>
