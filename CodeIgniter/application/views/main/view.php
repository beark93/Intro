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
        <link rel="stylesheet" href="/assets/css/main.css" />
        <script src="/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <link rel="icon" href="/favicon.ico">
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
