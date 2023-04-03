<div id="sub">

<?

if($board['bo_table'] == 'notice_Thanks') {
    $nav_num = 1;
    $bg_num = 6;
    $gnb_num = 6;
} 
    else if ($board['bo_table'] == 'event_Thanks') {
    $nav_num = 2;
    $bg_num = 6;
    $gnb_num = 6;
}else if ($board['bo_table'] == 'freeboard_Thanks') {
    $nav_num = 3;
    $bg_num = 6;
    $gnb_num = 6;
}

?>







            <div class="sub_head">
                <div class="inner">
                <? include G5_THEME_PATH.'/doc/sub_bg0'.$bg_num.'.php';?>
                    <div class="sub_nav">
                    <? include G5_THEME_PATH.'/doc/sub_nav0'.$gnb_num.'.php';?>
                    </div>
                </div>
            </div>
            <div class="sub_container">
                <article class="article">