<?php
include 'databases.php';
?>
<!DOCTYPE html>
<html lang="vi" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
	<title><?php echo $title; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="index" />
    <meta name="title" content="<?php echo $title; ?>" />
    <meta name="description" content="<?php echo $description; ?>" />
	<meta name="keywords" content="phimmoi, xem phim, phim online, xem phim online, xem phim nhanh, phim online nhanh, zingtv, bilutv, motphim, motchill, chillhay,dongphim" />
    <meta name="author" content="ZingTV.top" />
    <meta name="revisit-after" content="1 days" />
    <meta name="robots" content="index,follow" />
	<meta http-equiv="content-language" content="vi" />
    <meta name="googlebot" content="index,follow" />
    <meta name="BingBOT" content="index,follow" />
    <meta name="yahooBOT" content="index,follow" />
    <meta name="slurp" content="index,follow" />
    <meta name="msnbot" content="index,follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="referrer" content="no-referrer">
    <meta property="fb:app_id" content=""/>
	<meta property="fb:admins" content=""/>
    <meta name="google-site-verification" content="" />
    <meta name='dmca-site-verification' content='' />
	<link rel="shortcut icon" href="<?php echo $favicon; ?>" />
		
    <!-- google -->
	<meta itemprop="name" content="<?php echo $title; ?>">
	<meta itemprop="description" content="<?php echo $description; ?>">
	<meta itemprop="image" content="https://i.imgur.com/tgtVxr1.jpg">
	<!-- facebook -->	
	<meta property="og:title" content="<?php echo $title; ?>">
	<meta property="og:description" content="<?php echo $description; ?>" />
	<meta property="og:url" content="<?php echo $domain; ?>" />
	<meta property="og:type" content="website"/>
	<meta property="og:image" content="https://i.imgur.com/tgtVxr1.jpg" />
	<!-- twitter -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="<?php echo $title; ?>">
	<meta name="twitter:description" content="<?php echo $description; ?>">
	<meta name="twitter:image" content="https://i.imgur.com/tgtVxr1.jpg">
</head>

<body>

<?php
include 'includes/nav.php';
?>

<div id="main-content">
<div class="container" id="wrapper">
    <div class="left-content">
        <div class="film-top-slide hidden-xs">
<ul id="top-slide" class="owl-carousel owl-theme">
<?php
include 'includes/00.php';
?>            	
</ul>
        </div> 
        
        <div class="block-film">
            <h2 class="caption">
            	<i class="fa fa-fire" aria-hidden="true"></i>Phim Bộ Mới <a class="view-all" title="Phim lẻ mới cập nhật" href="/">Xem tất cả <i class="fa fa-angle-double-right"></i></a>
            </h2>
<ul class="list-film">
<?php
include 'includes/1.php';
?>                
</ul>
        </div>

        
        <div class="block-film" style="padding-top: 10px">
            <h2 class="caption">
            	<i class="fa fa-film" aria-hidden="true"></i><span>Phim Lẻ Mới</span> <a class="view-all" title="Phim bộ mới cập nhật" href="/">Xem tất cả <i class="fa fa-angle-double-right"></i></a>
            </h2>
<ul class="list-film">
<?php
include 'includes/2.php';
?>    
</ul>
        </div>
        
        <div class="block-film" style="padding-top: 10px">
            <h2 class="caption">
            	<i class="fa fa-film" aria-hidden="true"></i><span>Hoạt Hình Update</span> <a class="view-all" title="Phim bộ mới cập nhật" href="/">Xem tất cả <i class="fa fa-angle-double-right"></i></a>
            </h2>
<ul class="list-film">
<?php
include 'includes/3.php';
?>    
</ul>
        </div>
    
    </div><!--end Left-content-->
    
    <div class="right-content">
<?php
include 'includes/BXH.php';
?> 
	</div><!--end Right-content-->
</div><!-- end-container -->
<script type="text/javascript">
$(document).ready(function() {
	//Top slide aaa
	$("#top-slide").owlCarousel({
		singleItem: true,
		autoPlay: true,
		slideSpeed: 200,
		lazyLoad: true,
		stopOnHover: true,
		navigation: true,
		navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
	});

	//Film-hot slide
	$("#film-hot").owlCarousel({
		items: 4,
		itemsTablet: [700, 3],
		itemsMobile: [479, 2],
		lazyLoad: false,
		navigation: true,
		scrollPerPage: true,
		slideSpeed: 800,
		paginationSpeed: 400,
		stopOnHover: true,
		pagination: false,
		autoPlay: 8000,
		navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],

	});
});
</script></div>
<?php
include 'includes/fot.php';
?>
