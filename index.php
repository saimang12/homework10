<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>






<main>
            <section class="mainVisual">
                <div class="main_slide">
                    <div class="itm itm01">
                        <img src="<?= G5_THEME_URL?>/img/main_slide01.jpg" alt="">
                    </div>
                    <div class="itm itm02">
                        <img src="<?= G5_THEME_URL?>/img/main_slide02.jpg" alt="">
                    </div>
                    <div class="itm itm03">
                        <img src="<?= G5_THEME_URL?>/img/main_slide03.jpg" alt="">
                    </div>
                </div>
            </section>
            <section class="sang">
                <div class="inner">
                    <ul>
                        <li><img src="<?= G5_THEME_URL?>/img/sang01.png" alt=""></li>
                        <li><img src="<?= G5_THEME_URL?>/img/sang02.png" alt=""></li>
                        <li><img src="<?= G5_THEME_URL?>/img/sang03.png" alt=""></li>
                        <li><img src="<?= G5_THEME_URL?>/img/sang04.png" alt=""></li>
                        <li><img src="<?= G5_THEME_URL?>/img/sang05.png" alt=""></li>
                        <li><img src="<?= G5_THEME_URL?>/img/sang06.png" alt=""></li>
                        <li><img src="<?= G5_THEME_URL?>/img/sang07.png" alt=""></li>
                        <li><img src="<?= G5_THEME_URL?>/img/sang08.png" alt=""></li>
                    </ul>
                </div>
            </section>
            <section class="mainNews">
                <div class="inner">
                    <div class="notice">
                        <div class="tit">
                            <strong>공지사항</strong>
                            <a href="/bbs/board.php?bo_table=notice"><span>더보기<i class="xi-plus"></i></span></a>
                        </div>
                        <?php echo latest('theme/notice', 'notice', 5, 23);?>
                        <!-- <ul>
                            <li>
                                <a href="">공지사항공지사항공지사항공지사항ddddd</a>
                                <p>2021-03-05</p>
                            </li>
                            <li>
                                <a href=""></a>
                                <p>2021-03-04</p>
                            </li>
                            <li>
                                <a href="">공지사항공지사항공지사항공지사항</a>
                                <p>2021-03-03</p>
                            </li>
                            <li>
                                <a href="">공지사항공지사항공지사항공지사항</a>
                                <p>2021-03-02</p>
                            </li>
                            <li>
                                <a href="">공지사항공지사항공지사항공지사항</a>
                                <p>2021-03-01</p>
                            </li>
                        </ul> -->
                    </div>
                    <div class="event">
                        <div class="tit">
                            <strong>자유게시판</strong>
                            <a href="/bbs/board.php?bo_table=free"><span>더보기<i class="xi-plus"></i></span></a>
                        </div>
                        <?php echo latest('theme/notice', 'free', 5, 23);?>
                        <!-- <ul>
                            <li>
                                <a href="">공지사항공지사항공지사항공지사항</a>
                                <p>2021-03-05</p>
                            </li>
                            <li>
                                <a href="">공지사항공지사항공지사항공지사항</a>
                                <p>2021-03-04</p>
                            </li>
                            <li>
                                <a href="">공지사항공지사항공지사항공지사항</a>
                                <p>2021-03-03</p>
                            </li>
                            <li>
                                <a href="">공지사항공지사항공지사항공지사항</a>
                                <p>2021-03-02</p>
                            </li>
                            <li>
                                <a href="">공지사항공지사항공지사항공지사항</a>
                                <p>2021-03-01</p>
                            </li>
                        </ul> -->
                    </div>
                    <div class="media">
                        <div class="tit">
                            <strong>이벤트</strong>
                            <a href="/bbs/board.php?bo_table=event"><span>더보기<i class="xi-plus"></i></span></a>
                        </div>
                        <?php echo latest('theme/notice', 'event', 5, 23);?>
                        <!-- <ul>
                            <li>
                                <a href="">공지사항공지사항공지사항공지사항</a>
                                <p>2021-03-05</p>
                            </li>
                            <li>
                                <a href="">공지사항공지사항공지사항공지사항</a>
                                <p>2021-03-04</p>
                            </li>
                            <li>
                                <a href="">공지사항공지사항공지사항공지사항</a>
                                <p>2021-03-03</p>
                            </li>
                            <li>
                                <a href="">공지사항공지사항공지사항공지사항</a>
                                <p>2021-03-02</p>
                            </li>
                            <li>
                                <a href="">공지사항공지사항공지사항공지사항</a>
                                <p>2021-03-01</p>
                            </li>
                        </ul> -->
                    </div>
                </div>
            </section>
            <section class="storeInfo">
                <div class="tit">
                    <h2>신규 오픈매장</h2>
                    <a href="">MORE</a>
                </div>
                <div class="inner">
                    <div class="store_slide">
                        <div class="itm itm01">
                            <a href="">
                                <figure>
                                    <img src="<?= G5_THEME_URL?>/img/store_05.jpg" alt="">
                                </figure>
                                <div class="text_box">
                                    <strong>551호점</strong>
                                    <h3>경주안강점</h3>
                                    <p>23.01.03 오픈</p>
                                </div>
                            </a>
                        </div>
                        <div class="itm itm02">
                            <a href="">
                                <figure>
                                    <img src="<?= G5_THEME_URL?>/img/store_06.jpg" alt="">
                                </figure>
                                <div class="text_box">
                                    <strong>552호점</strong>
                                    <h3>인청장기점</h3>
                                    <p>23.01.04 오픈</p>
                                </div>
                            </a>
                        </div>
                        <div class="itm itm03">
                            <a href="">
                                <figure>
                                    <img src="<?= G5_THEME_URL?>/img/store_07.jpg" alt="">
                                </figure>
                                <div class="text_box">
                                    <strong>553호점</strong>
                                    <h3>부천옥길점</h3>
                                    <p>23.01.05 오픈</p>
                                </div>
                            </a>
                        </div>
                        <div class="itm itm04">
                            <a href="">
                                <figure>
                                    <img src="<?= G5_THEME_URL?>/img/store_04.jpg" alt="">
                                </figure>
                                <div class="text_box">
                                    <strong>554호점</strong>
                                    <h3>아산장재점</h3>
                                    <p>23.01.06 오픈</p>
                                </div>
                            </a>
                        </div>
                        <div class="itm itm05">
                            <a href="">
                                <figure>
                                    <img src="<?= G5_THEME_URL?>/img/store_05.jpg" alt="">
                                </figure>
                                <div class="text_box">
                                    <strong>555호점</strong>
                                    <h3>남양주다산지금점</h3>
                                    <p>23.01.07 오픈</p>
                                </div>
                            </a>
                        </div>
                        <div class="itm itm06">
                            <a href="">
                                <figure>
                                    <img src="<?= G5_THEME_URL?>/img/store_06.jpg" alt="">
                                </figure>
                                <div class="text_box">
                                    <strong>556호점</strong>
                                    <h3>보은점</h3>
                                    <p>23.01.08 오픈</p>
                                </div>
                            </a>
                        </div>
                        <div class="itm itm07">
                            <a href="">
                                <figure>
                                    <img src="<?= G5_THEME_URL?>/img/store_07.jpg" alt="">
                                </figure>
                                <div class="text_box">
                                    <strong>557호점</strong>
                                    <h3>충북괴산점</h3>
                                    <p>23.01.09 오픈</p>
                                </div>
                            </a>
                        </div>
                        <div class="itm itm08">
                            <a href="">
                                <figure>
                                    <img src="<?= G5_THEME_URL?>/img/store_08.jpg" alt="">
                                </figure>
                                <div class="text_box">
                                    <strong>558호점</strong>
                                    <h3>제주표선점</h3>
                                    <p>23.01.10 오픈</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <i class="xi-angle-left"></i>
                    <i class="xi-angle-right"></i>
                </div>
            </section>
            <section class="mainDetail">
                <div class="full_inner">
                    <figure>
                        <a href="">
                            <img src="<?= G5_THEME_URL?>/img/detail01.png" alt="">
                        </a>
                    </figure>
                    <figure>
                        <a href="">
                            <img src="<?= G5_THEME_URL?>/img/detail02.png" alt="">
                        </a>
                    </figure>
                    <figure>
                        <a href="">
                            <img src="<?= G5_THEME_URL?>/img/detail03.png" alt="">
                        </a>
                    </figure>
                </div>
            </section>
        </main>













<?php
include_once(G5_THEME_PATH.'/tail.php');