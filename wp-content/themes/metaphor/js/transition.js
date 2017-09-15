$(function () {
    $(document).on('click', '.wave', function (e) {
        var $this = $(this),
            $ripple = $('<span class="ripple"></span>'),
            raduis = Math.max($this.outerWidth(),$this.outerHeight()),
            offset = $this.offset(),
            x = e.pageX,
            y = e.pageY;

        if ($this.css('position') == 'static') {
            $this.css('position', 'relative');
        }
        $this.css('overflow', 'hidden');
        $ripple.css({
            width: raduis + 'px',
            height: raduis + 'px'
        });

        $this.find('.ripple').remove();  // 移除上一次动画创建的dom元素

        $ripple.appendTo(this).css({
            left: x - offset.left - raduis / 2,
            top: y - offset.top  - raduis / 2
        }).show();
        $ripple.addClass('transition-wave');
    });

    (function() {
        var $header = $('header'),
            $toc = $('#toc_container'),
            tocScrollTop;
        window.onscroll = function () {
           fixedHeader();
           if ($toc.length) {
               fixedToc();
           }
        }
        
        // 固定header
        function fixedHeader() {
            var t = document.documentElement.scrollTop || document.body.scrollTop;
            if (t > 80) {
                if (!$header.hasClass('scroll')) {
                    $header.addClass('scroll')
                }
            }else {
                $header.removeClass('scroll');
            }
        }

        // 固定文章目录
        function fixedToc() {
            var scrollTop = $(document).scrollTop(),
                offsetTop = $toc.offset().top - scrollTop;
            if (offsetTop <= 20) {
                if (!$toc.hasClass('toc-fixed')) {
                    $toc.css({
                        "position": "fixed",
                        "top":"20px",
                        "left": $toc.offset().left+"px"
                    });
                    $toc.addClass('toc-fixed');
                    tocScrollTop =  scrollTop;
                }
            }
            if (tocScrollTop > scrollTop) {
                if ($toc.hasClass('toc-fixed')) {
                    $toc.removeClass('toc-fixed')
                    $toc.css({
                        "position": "absolute",
                        "left": "-200px",
                        "top": "160px"
                    });
                    tocScrollTop = 0;
                }
            }
        }

    })();

});