<?
$nav_num = 1;
$bg_num = 5;
$gnb_num = 5;
include '../../../common.php';
include_once(G5_THEME_PATH.'/head.php');

?>









<section class="downApp">
                        <div class="inner">
                            <figure>
                                <img src="<?= G5_THEME_URL?>/img/download.jpg" alt="앱 다운로드 이미지" usemap="#download">
                                <map name="download">
                                    <area shape="rect" coords="390,268,537,433" alt="android link"
                                        href="https://play.google.com/store/apps/details?id=com.wmpoplus.tsbudae"
                                        target="_blank">
                                    <area shape="rect" coords="644,263,804,433" alt="ios link"
                                        href=" https://apps.apple.com/kr/app/%EB%95%85%EC%8A%A4%EC%98%A4%EB%8D%94/id1592017042"
                                        target="_blank">
                                </map>
                            </figure>
                        </div>
                    </section>

























<?php
include_once(G5_THEME_PATH.'/tail.php');
?>