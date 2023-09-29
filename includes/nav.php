<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $domain; ?>/css/main.css?v=122135141" />
<script type="text/javascript" src="<?php echo $domain; ?>/css/main.js?v=12132132191"></script>
<div id="header">
	<div class="container only-pc">
		<a class="logo" href="/" title="Trang chủ"><img src="https://i.imgur.com/GPX7KV2.png" alt="ZingTV - Xem Phim Mới, Phim Bom Tấn, Phim Chiếu Rạp Hay HD"/></a>
		<div class="search-container relative">
			<form method="GET" action="/search.php" class="form-search">
				<input name="s" type="text" autocomplete="off" placeholder="Nhập tên phim, diễn viên..." class="keyword" /><i class="fa fa-search" style="cursor:pointer"></i>
				<div id="suggestions" class="suggestions top-search-box">
				</div>
			</form>
		</div>
		<ul id="menu-user">
			<li><a href="#"><i class="fa fa-envelope"></i><span>Đăng Nhập</span></a></li>
		</ul>
	</div>
	<div class="only-mb">
		<div class="btn-humber">
			<i class="fa fa-bars"></i>
		</div>
		<a class="logo" href="/" title="Trang chủ"><img src="https://i.imgur.com/GPX7KV2.png" alt="ZingTV - Xem Phim Mới, Phim Bom Tấn, Phim Chiếu Rạp Hay HD"/></a>
		<i class="fa fa-search btn-search" onClick="if ($('.mobile-search-bar').length>0) { $('.form-search #keyword').remove(); $('#form_search > input').attr('id','keyword'); $('.mobile-search-bar').removeClass('hide'); $('#keyword').focus(); }"></i>
		<div class="mobile-search-bar hide">
			<form method="GET" action="/search.php" id="form_search">
				<input class="keyword" name="s" autocomplete="off" type="text" placeholder="Nhập tên phim, diễn viên,..."/>
				<div id="suggestions" class="suggestions msuggestions top-search-box">
				</div>
			</form>
			<i class="fa fa-search mobile-search-submit" onClick="do_search();"></i><i class="fa fa-times close-button" onClick="$('.mobile-search-bar').addClass('hide')"></i>
		</div>
	</div>
</div>
<div id="main-menu" class="desktop">
	<div class="container">
		<ul>
			<li class="menu-home only-pc"><a href="/" title="Trang chủ"><i class="fa fa-home"></i></a></li>
			<li><a href="/z.php?BL=1" title="Phim Bộ Mới Cập Nhật"><i class="fa fa-th-list"></i><span>Phim Bộ</span></a></li>
			<li><a href="/z.php?BL=2" title="Phim Lẻ Mới Cập Nhật"><i class="fa fa-film"></i><span>Phim Lẻ</span></a></li>
			<li><a href="/z.php?TL=Hoat-Hinh" title="Hoạt Hình Mới Cập Nhật"><i class="fa fa-empire"></i><span>Hoạt Hình</span></a></li>
			<li><a href="javascript:void(0)" title="Thể loại phim"><i class="fa fa-clone"></i><span>Thể loại <i class="fa fa-caret-down"></i></span></a>
                <ul class="sub-menu span-2 absolute">
                <li><a href="/z.php?TL=Viễn-Tưởng">👽 Viễn Tưởng</a></li>
                <li><a href="/z.php?TL=Hành-Động">🔫 Hành Động</a></li>
                <li><a href="/z.php?TL=Cổ-Trang">🏹 Cổ Trang</a></li>
                <li><a href="/z.php?TL=Thần-Thoại">🐉 Thần Thoại</a></li>
                <li><a href="/z.php?TL=Tình-Yêu">👬 Tình Yêu</a></li>
                <li><a href="/z.php?TL=Kinh-Dị">👿 Kinh Dị</a></li>
                <li><a href="/z.php?TL=Phiêu-Lưu">🏄 Phiêu Lưu</a></li>
                <li><a href="/z.php?TL=Võ-Thuật">🕵 Võ Thuật</a></li>
                <li><a href="/z.php?TL=Hình-Sự<">⚖️ Hình Sự</a></li>
                <li><a href="/z.php?TL= Hài-Hước">☕️️ Hài Hước</a></li>
                <li><a href="/z.php?TL=18-Plus">🐷 18 Plus</a></li>
                <li><a href="/z.php?TL=LBGT">☘️ LBGT</a></li>
                </ul>
			</li>

			<li><a href="javascript:void(0)" title="Phim các nước"><i class="fa fa-globe"></i><span>Quốc Gia <i class="fa fa-caret-down"></i></span></a>
            <ul class="sub-menu span-3 absolute">
<li><a href="/z.php?QG=Âu-Mỹ"><img style="width:15px" src="/css/Âu Mỹ.jpg"/> Âu Mỹ</a></li>
<li><a href="/z.php?QG=Trung-Quốc"><img style="width:15px" src="/css/Trung Quốc.jpg"/> Trung Quốc</a></li>
<li><a href="/z.php?QG=Hàn-Quốc"><img style="width:15px" src="/css/Hàn Quốc.jpg"/> Hàn Quốc</a></li>
<li><a href="/z.php?QG=Nhật-Bản"><img style="width:15px" src="/css/Nhật Bản.jpg"/> Nhật Bản</a></li>
<li><a href="/z.php?QG=Thái-Lan"><img style="width:15px" src="/css/Thái Lan.jpg"/> Thái Lan</a></li>
<li><a href="/z.php?QG=Ấn-Độ"><img style="width:15px" src="/css/Ấn Độ.jpg"/> Ấn Độ</a></li>
            </ul>
            </li>
			
			<li><a href="#" title="Phim hoạt hình"><i class="fa fa-empire"></i><span>Phim Đề Cử</span></a></li>
			<li><a href="#" title="Phim chiếu rạp"><i class="fa fa-tasks"></i><span>Phim Chiếu Rạp</span></a></li>
			<li><a href="#" title="TOP Phim Imdb"><i class="fa fa-bolt"></i><span>TOP IMDB</span></a></li>
			<li class="only-mb"><a href="#"><i class="fa fa-envelope"></i><span>Đăng Nhập</span></a></li>
		</ul>
	</div>
</div>
