<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>KBY Portfolio</title>
        <link href="https://fonts.googleapis.com/css?family=Teko|Jua|Do+Hyeon&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <link rel="stylesheet" href="/assets/css/jquery.mCustomScrollbar.css" />
        <script src="/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <link rel="icon" href="/favicon.ico">
        <style>
            html, body {height: 100%;}
            body {background-image: url('/image/background.jpg'); background-size: cover; margin:0;}
            .main-width {width:900px; height:100%; margin:0 auto; position:relative;}
            .main-width .main-banner {float:left; margin-top:30px; margin-bottom:60px; width:100%; height:80px;}
            .main-width .main-banner .main-name {font-family: 'Jua', sans-serif; color: #ffffff; font-size:40px;}
            .main-width .main-banner .main-sub {font-family: 'Jua', sans-serif; color: #ffffff; font-size:15px;}
            .main-width .main-contents {float:left; margin-bottom:10px; width:100%; height:600px; position:relative;}
            .main-width .main-contents .tab-line{float:left; width:100%; height:10%; background-color:#34343; position:relative; cursor: pointer;}
            .main-width .main-contents .tab-line .tab{float:left; width:25%; height:100%; padding-top:12px; text-align: center; box-sizing: border-box; border-radius: 15px 15px 0 0;}
            .main-width .main-contents .tab-line .tab1{background-color:#FFAF0A;}
            .main-width .main-contents .tab-line .tab2{background-color:#D27D32;}
            .main-width .main-contents .tab-line .tab3{background-color:#3f9062;}
            .main-width .main-contents .tab-line .tab4{background-color:#5F9EA0;}
            .main-width .main-contents .tab-line .tab-name{font-family: 'Teko', sans-serif; color: #000000; font-size:28px;}
            .main-width .main-contents .contents-line{float:left; width:100%; height:90%; position:relative;}
            .main-width .main-contents .contents-line .contents{width:100%; height:100%; display:none; box-sizing: border-box; position:relative;}
            .main-width .main-contents .contents-line .active{display:block;}
            .main-width .main-contents .contents-line .contents .home-font{font-family: 'Do Hyeon', sans-serif; color: #000000; font-size:25px; font-weight: 100; margin-bottom:3px; display:inline-block;}
            .main-width .main-contents .contents-line .contents1{background-color:#FFAF0A; padding:15px; box-sizing: border-box;}
            .main-width .main-contents .contents-line .contents2{background-color:#D27D32; padding:15px; box-sizing: border-box;}
            .main-width .main-contents .contents-line .contents2 .love{height:320px; position:relative; width:268.5px; margin:0 auto; padding-top:220px; box-sizing: border-box;}
            .main-width .main-contents .contents-line .contents3{background-color:#3f9062; padding:15px; box-sizing: border-box;}
            .main-width .main-contents .contents-line .contents4{background-color:#5F9EA0; padding:15px; box-sizing: border-box;}
            .main-width .main-contents .contents-line .contents-sub{width:100%; height:auto; position:relative;}
            .main-width .main-contents .contents-line .contents-sub .sub-half{width:50%; float:left;}
            .main-width .main-contents .contents-line .contents-sub .sub-title{font-family:'Teko', sans-serif; color:#000000; font-size:40px; font-weight:bold; text-decoration:underline; margin-bottom:10px; display:inline-block;}
            .main-width .main-contents .contents-line .contents-sub .about-ul{font-family:'Do Hyeon', sans-serif; color:#000000; font-size:20px; margin:0px; list-style:none; padding-inline-start:10px; line-height: 1.5em;}
            .main-width .main-contents .contents-line .contents-sub .about-ul li{background-image: url(/image/black_box.png); background-repeat: no-repeat; background-position-y: 9px; background-size: 6px; text-indent: 16px;}
            .main-width .main-contents .contents-line .contents-sub .sub-carrer{font-family:'Do Hyeon', sans-serif; color:#000000; font-size:20px; margin:0 5%; padding-bottom:20px; margin-bottom:5px; border-bottom:dashed 1px #000000; line-height: 2.5em;}
            .main-width .main-contents .contents-line .contents-sub .carrer-ul{font-family:'Teko', sans-serif; color:#000000; font-size:15px; margin:0px; list-style:none; padding-inline-start:10px; line-height: 2em;}
            .main-width .main-contents .contents-line .contents-sub .sub-skill{font-family:'Teko', sans-serif; color:#000000; font-size:30px; padding:0 5%; margin-bottom:5px;}
            .main-width .main-contents .contents-line .contents-sub .skill-ul{font-family:'Teko', sans-serif; color:#000000; font-size:20px; margin:0px; list-style:none; padding-inline-start:10px; line-height: 1.3em;}
            .main-width .main-contents .contents-line .contents-sub1{width:80%; margin:0 auto; padding-top: 60px;}
            .main-width .main-contents .contents-line .contents-sub1 .sub1-ul li{margin-bottom:5px;}
            .main-width .main-contents .contents-line .contents-sub2{width:90%; margin:0 auto;}
            .main-width .main-contents .contents-line .contents-sub2 .sub2-left-top{width:100%; padding-top:15px; padding-bottom: 30px; border-bottom:solid 2px #000000;}
            .main-width .main-contents .contents-line .contents-sub2 .sub2-left-bottom{width:100%; padding:15px 0;}
            .main-width .main-contents .contents-line .contents-sub2 .sub2-right-top{width:100%; padding:15px 0;}
            .main-width .main-contents .contents-line .contents-sub4{width:90%; margin:0 auto; margin-top: 160px; text-align: center;}
            .main-width .main-contents .contents-line .contents-sub4 .sub4-icons{width:100%; margin-top:100px;}
            .main-width .main-contents .contents-line .contents-sub4 .icons-center{width: 340px; height: 100px; margin: 0 auto;}
            .main-width .main-contents .contents-line .contents-sub4 .icons-center .icon{width:100px; height:100%; margin-right:20px; float:left; cursor:pointer;}
            .main-width .main-contents .contents-line .contents-sub4 .icons-center .fb_icon{background-image: url('/image/fb_icon.png'); background-repeat: no-repeat; background-size:cover;}
            .main-width .main-contents .contents-line .contents-sub4 .icons-center .insta_icon{background-image: url('/image/insta_icon.png'); background-repeat: no-repeat; background-size:cover;}
            .main-width .main-contents .contents-line .contents-sub4 .icons-center .git_icon{background-image: url('/image/git_icon.png'); background-repeat: no-repeat; background-size:cover;  margin-right:0px;}
        </style>
    </head>
    <body>
        <div class='main-width'>
            <div class='main-banner'>
                <font class='main-name'>Kim B.Y</font>
                </br>
                <font class='main-sub'>PHP(CI) / MySQL(MariaDB) / Linux(CentOS)</font>
            </div>
            <div class='main-contents'>
                <div class='tab-line'>
                  <?php foreach($title as $idx => $item) : ?>
                    <div class='tab tab<?= $idx ?>' idx='<?= $idx ?>'>
                        <font class='tab-name'><?= $item ?><font>
                    </div>
                  <?php endforeach; ?>
                </div>
                <div class='contents-line'>
                  <?php foreach($sub as $idx => $item) : ?>
                    <div class='contents contents<?= $idx ?> <?php if($idx == '1') : ?> active <?php endif; ?>' data-mcs-theme="minimal-dark" idx='<?= $idx ?>'>
                        <?= $item ?>
                    </div>
                  <?php endforeach; ?>
                </div>
            </div>
        </div>

        <script>
            // Add TAB function
            $('.tab').click(function () {
                // clicked tab idx
                var idx = $(this).attr('idx');
                // checking variable (checking clicked tab idx is same displaying tab idx now)
                var check = false;
                $('.contents').each(function () {
                    if ($(this).hasClass('active')) {
                        if (idx != $(this).attr('idx')) {
                            $(this).removeClass('active');
                        } else {
                            check = true;
                        }
                    }
                });
                if (!check) {
                    $('.contents' + idx).addClass('active');
                }
            });

            (function ($) {
                $(window).on("load", function () {
                    $(".contents1").mCustomScrollbar();
                    $(".contents2").mCustomScrollbar();
                    $(".contents3").mCustomScrollbar();
                    $(".contents4").mCustomScrollbar();
                });
            })(jQuery);

        </script>
    </body>
</html>
