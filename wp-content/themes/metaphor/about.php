<?php
/*
Template Name:about
*/
?>
<!DOCTYPE html>
<html id="page-about">
<head>
    <?php
    get_header();
?>
    <style>
        .about-main {
            margin: 48px 0;
            padding: 48px 0;
            width: 100%;
            background: #eee;
            box-sizing: border-box;
        }
        .middle {
            margin: 0 auto;
        }
        .c-wrap {
            width: 100%;
            height: 480px;
            position: relative;
            overflow: hidden;
        }

        .separator {
            position: relative;
            top: 50%;
            left: 50%;
            width: 1px;
            height: 0;
            background: #000;
            opacity: .5;
            transition: all .3s ease-out;

        }
        .active {
            top: 0;
            height: 100%;
            opacity: 1;
        }
        .avatar {
            margin: 36px auto;
            height: 180px;
            width: 180px;
            background: url(<?php bloginfo('template_url')?>/images/ani-circle.png)  no-repeat;
            box-sizing: border-box;
            margin-bottom: 24px;
            padding: 4px;
            overflow: hidden;
        }
        .avatar img {
            height: 171px;
            width: 171px;
            display: none;
        }
        .info {
            float: left;
            width: 50%;
        }
        .author,
        .desc {
            display: none;
        }
        .author {
            font-size: 16px;
            text-align: center;
            width: 220px;
            margin: 0 auto;
            border-bottom: 1px solid #9C27B0;
            padding-bottom: 8px;
            font-weight: bold;
            color: #212121;
        }
        .desc {
            width: 220px;
            text-align: center;
            margin: 32px auto;
        }
        .desc p {
            padding-bottom: 4px;
        }
    </style>


</head>
<body>
<?php get_template_part('nav')?>

<div class="about-main">
<div class="middle">
    <div class="c-wrap">
        <div class="info">
            <div class="avatar" >
                <img src="<?php bloginfo('template_url')?>/images/avatar1.png" >
            </div>
            <div class="author">
                Wizard
            </div>
            <div class="desc">
                <p>爱玄学, 爱处女座</p>
                <p>nobibi1024@163.com</p>
            </div>
        </div>
        <div class="info">
            <div class="avatar">
                <img src="<?php bloginfo('template_url')?>/images/avatar2.png" >
            </div>
            <div class="author">
                Koppia
            </div>
            <div class="desc">
                <p>爱艺术, 爱天马行空</p>
                <p>nobibi1024@163.com</p>
            </div>
        </div>
        <div class="separator"></div>

    </div>
</div>
</div>
<?php get_footer();?>
<script>
    var $avatar = $('.avatar'),
        $avatarImg = $('.avatar img'),
        $author = $('.author'),
        $desc = $('.desc');
    setTimeout(function () {
        $('.separator').addClass('active');
        setTimeout(function () {
            var count = 0;
            var taskId = setInterval(function () {
                count++;
                $avatar.each(function(index, item) {
                    $(item).css('backgroundPosition', (-count*180)+'px');
                })
                if (count >= 24) {
                    clearInterval(taskId);
                    setTimeout(function () {
                        $avatarImg.each(function(index, item) {
                            $(item).fadeIn();
                        });
                    }, 0);

                    setTimeout(function () {
                        $author.each(function(index, item) {
                            $(item).fadeIn();
                        });
                    }, 200);
                    setTimeout(function () {
                        $desc.each(function(index, item) {
                            $(item).fadeIn();
                        });
                    }, 400);
                }
            }, 35);
        }, 200);

    },800);
</script>
</body>