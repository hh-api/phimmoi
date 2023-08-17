<script>
var $menu = $("#main-menu"),
    hw = $(window).height();

function set_height_menu() {
    var e = $(window).scrollTop();
    pos_top_menu = e >= 50 ? 0 : 50 - e, $menu.css("top", pos_top_menu + "px"), $("#overlay_menu").css("top", pos_top_menu + "px")
}

function open_menu() {
    $menu.height(hw), $menu.addClass("expanded"), set_height_menu(), $("#overlay_menu").removeClass("hide"), $("body,html").addClass("overlow-hidden"), $(".btn-humber").addClass("active")
}

function close_menu() {
    $menu.removeClass("expanded");
    var e = $(window).scrollTop();
    pos_top_menu = e >= 50 ? 0 : e, set_height_menu(), $("#overlay_menu").addClass("hide"), $("body,html").removeClass("overlow-hidden"), $(".btn-humber").removeClass("active")
}
$(document).ready(function() {
    $(window).scroll(function() {
        return $(window).scrollTop() > 72 ? ($("#main-menu").addClass("fix-nav"), !1) : ($("#main-menu").removeClass("fix-nav"), !1)
    }), $(window).width() < 979 && ($("#main-menu .container ul li").each(function() {
        $(this).find("ul").length > 0 && ($(this).addClass("parent-menu"), $(this).find("ul").removeClass("span-2 span-3 span-4").attr("style", "display:none"), $(this).find("a").first().append('<i class="fa fa-expand fa-angle-down"></i>'))
    }), $(".btn-humber").click(function() {
        $menu.hasClass("expanded") ? close_menu() : open_menu()
    }), $(window).scroll(function() {
        set_height_menu()
    }), $(".parent-menu").click(function() {
        $this = $(this), $arrow = $this.find(".fa-expand"), $arrow.hasClass("fa-angle-down") ? $arrow.removeClass("fa-angle-down").addClass("fa-angle-up") : $arrow.addClass("fa-angle-down").removeClass("fa-angle-up"), $this.find(".sub-menu").toggle()
    }))				
});
</script>

<div id="footer">
	<div class="container">
		<div class="content">
			<div class="views-row views-row-1" style="width: 100%;text-align: center;">
			
                <div class="logo-footer">
                    <a href="https://phimbom.net"><img alt="logo" style="width: 200px;" src="https://i.imgur.com/GPX7KV2.png"/></a>
                </div>
                <div class="copy-right">
                    <p>Copyright © 2023 <font color="yellow"><b>ZingTV</b></font>. All Rights Reserved</p>
	                <p>Disclaimer: This site <a href="/" title="Xem Phim Mới Online"><font color="lime">ZingTV.top</font></a> does not store any files on its server. All contents are provided by non-affiliated third parties.</p>
                </div>
			
			</div>
		</div>
	</div>
</div>
</body>
</html>
