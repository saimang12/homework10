<?
$nav_num = 1;
$bg_num = 2;
$gnb_num = 2;
include '../../../common.php';
include_once(G5_THEME_PATH.'/head.php');

?>










<section class="tsFood">
                        <h2>
                            <img src="<?= G5_THEME_URL ?>/img/t_logo3_1.png" alt="">
                        </h2>
                        <div class="inner">
                            <div class="info">
                                <div class="left">
                                    <ul>
                                        <li>
                                            <b>회사명</b>
                                            <p>TS FOOD</p>
                                        </li>
                                        <li>
                                            <b>대표이사</b>
                                            <p>정경문</p>
                                        </li>
                                        <li>
                                            <b>브랜드</b>
                                            <p>땅스부대찌개</p>
                                        </li>
                                        <li>
                                            <b>자본금</b>
                                            <p>5,000만원</p>
                                        </li>
                                        <li>
                                            <b>주요사업</b>
                                            <p>프랜차이즈</p>
                                        </li>
                                        <li>
                                            <b>설립일</b>
                                            <p>2016년 5월</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="right">
                                    <ul>
                                        <li>
                                            <b>본사</b>
                                            <p><?= $as_address ?></p>
                                        </li>
                                        <li>
                                            <b>물류센터</b>
                                            <p><?= $as_hub ?></p>
                                        </li>
                                        <li>
                                            <b>교육센터</b>
                                            <p><?= $as_study ?></p>
                                        </li>
                                        <li>
                                            <b>연락처</b>
                                            <p><?= $as_tel ?>
                                                <br />
                                                Fax. <?= $as_fax ?>
                                                <br />
                                                Email. <?= $as_email ?>
                                            </p>
                                        </li>
                                        <li>
                                            <b>홈페이지</b>
                                            <p>www.tsbudae.com</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="maps_link">
                                <ul>
                                    <li><a href="https://map.naver.com/v5/search/%EA%B2%BD%EA%B8%B0%EB%8F%84%20%EA%B4%91%EB%AA%85%EC%8B%9C%20%EA%B0%80%ED%95%99%EB%A1%9C%2093,%201%EC%B8%B5(%EA%B0%80%ED%95%99%EB%8F%99)/address/14121907.980708588,4497321.7183340695,%EA%B2%BD%EA%B8%B0%EB%8F%84%20%EA%B4%91%EB%AA%85%EC%8B%9C%20%EA%B0%80%ED%95%99%EB%A1%9C%2093,new?c=19,0,0,0,dh&isCorrectAnswer=true"
                                            target="_blank">네이버
                                            지도보기</a></li>
                                    <li><a href="https://map.kakao.com/?q=%EA%B2%BD%EA%B8%B0%EB%8F%84%20%EA%B4%91%EB%AA%85%EC%8B%9C%20%EA%B0%80%ED%95%99%EB%A1%9C%2093,%201%EC%B8%B5(%EA%B0%80%ED%95%99%EB%8F%99)"
                                            target="_blank">다음 지도보기</a></li>
                                    <li><a href="https://www.google.com/maps/place/%EA%B2%BD%EA%B8%B0%EB%8F%84%20%EA%B4%91%EB%AA%85%EC%8B%9C%20%EA%B0%80%ED%95%99%EB%A1%9C%2093,%201%EC%B8%B5(%EA%B0%80%ED%95%99%EB%8F%99)"
                                            target="_blank">구글 지도보기</a></li>
                                </ul>
                            </div>
                        </div>
                    </section>

























<?php
include_once(G5_THEME_PATH.'/tail.php');
?>