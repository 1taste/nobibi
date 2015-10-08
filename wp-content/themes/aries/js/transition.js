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
});