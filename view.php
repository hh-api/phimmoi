<?php
include 'databases.php';
?>

<?php
$slug = $_GET['slug'];
$sql = mysqli_query($apizophim, "SELECT * FROM phim where `slug`='".$slug."'");
if (mysqli_num_rows($sql) < 1) {
echo '<script>location.href="/index.php";</script>';    
}
$get_info = mysqli_fetch_array($sql);
$ten_phim = $get_info['ten_phim'];
$ten_goc = $get_info['ten_goc'];
$noi_dung = $get_info['noi_dung'];
$nam_chieu = $get_info['nam_chieu'];
$the_loai = $get_info['the_loai'];
$quoc_gia = $get_info['quoc_gia'];
$dien_vien = $get_info['dien_vien'];
$trang_thai = $get_info['trang_thai'];
$thoi_luong = $get_info['thoi_luong'];
$bole = $get_info['bole'];
$thumb = str_replace('.jpg', 'l.jpg', $get_info['thumb']);
$luotxem = $get_info['view'];
$luotxem1 = $luotxem + mt_rand(1,9);
$view_day = $get_info['view_day'];
$view_day1 = $view_day + 1;
$run = mysqli_query($apizophim, "UPDATE phim SET `view`='$luotxem1',`view_day`='$view_day1' where `slug`='".$slug."'");
?>

<!DOCTYPE html>
<html lang="vi" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
	<title>Phim <?php echo $ten_phim; ?> - <?php echo $ten_goc; ?> Việt Sub, Thuyết Minh, Lồng Tiếng</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="index" />
    <meta name="title" content="Phim <?php echo $ten_phim; ?> - <?php echo $ten_goc; ?> Việt Sub, Thuyết Minh, Lồng Tiếng" />
    <meta name="description" content="<?php echo $noi_dung; ?>" />
	<meta name="keywords" content="<?php echo $ten_phim; ?>, <?php echo $ten_goc; ?>, <?php echo $slug; ?>" />
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
	<meta itemprop="name" content="Phim <?php echo $ten_phim; ?> - <?php echo $ten_goc; ?> Việt Sub, Thuyết Minh, Lồng Tiếng">
	<meta itemprop="description" content="<?php echo $noi_dung; ?>">
	<meta itemprop="image" content="<?php echo $thumb; ?>">
	<!-- facebook -->	
	<meta property="og:title" content="Phim <?php echo $ten_phim; ?> - <?php echo $ten_goc; ?> Việt Sub, Thuyết Minh, Lồng Tiếng">
	<meta property="og:description" content="<?php echo $noi_dung; ?>" />
	<meta property="og:url" content="<?php echo $domain.'/'.$slug; ?>.html" />
	<meta property="og:type" content="website"/>
	<meta property="og:image" content="<?php echo $thumb; ?>" />
	<!-- twitter -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="Phim <?php echo $ten_phim; ?> - <?php echo $ten_goc; ?> Việt Sub, Thuyết Minh, Lồng Tiếng">
	<meta name="twitter:description" content="<?php echo $noi_dung; ?>">
	<meta name="twitter:image" content="<?php echo $thumb; ?>">
	<!-- schema -->
	<script type="application/ld+json">
	{"@context": "http://schema.org","@graph": [{"@type": "VideoObject",
	"name": "Phim <?php echo $ten_phim; ?> - <?php echo $ten_goc; ?> Việt Sub, Thuyết Minh, Lồng Tiếng",
	"thumbnailUrl": "<?php echo $thumb; ?>",
	"uploadDate": "<?php echo date("Y-m-d H:i:s"); ?>",
	"contentURL": "<?php echo $domain.'/'.$slug; ?>.html",
	"description": "<?php echo $noi_dung; ?>",
	"aggregateRating": {"@type": "AggregateRating",
	"ratingValue": "<?php echo mt_rand(7, 9); ?>",
	"bestRating": 10,
	"worstRating": 1,
	"ratingCount": "<?php echo mt_rand(199, 99999); ?>"}
	},{"@type": "BreadcrumbList","itemListElement": [{"@type": "ListItem","position": 1,"item": "https://ZingTV.top","name": "TV & Movies"}]}]}
	</script>    <!-- librarie -->
</head>
<body>
<?php
include 'includes/nav.php';
?>
<div id="main-content">
<div class="container" id="wrapper">
	<ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
            <a itemprop="item" title="XEM PHIM ONLINE" href="/">
                <span itemprop="name">Trang Chủ</span>
            </a>
            <meta itemprop="position" content="1" />
        </li>
        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				<a itemprop="item" title="Phim <?php echo $quoc_gia; ?>" href='/z.php?QG=<?php echo str_replace(' ', '-', $quoc_gia); ?>'><span itemprop="name"><?php echo $quoc_gia; ?></a></span></a>
			<meta itemprop="position" content="2" />
		</li>
		<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
			<a itemprop="item" title="<?php echo $ten_phim; ?>" href="/<?php echo $slug; ?>.html">
            <span itemprop="name"><?php echo $ten_phim; ?></span>
            </a>
            <meta itemprop="position" content="3" />
        </li>
    </ol>
            
	<div class="left-content">
        <div class="film-info">
            <div class="poster">
                <a href="/<?php echo $slug; ?>.html">
                    <img alt="<?php echo $ten_phim; ?>" src="<?php echo $thumb; ?>" />
                </a>
                                <ul class="buttons">
                    <li><a class="btn btn-trailer btn-success" href="#"><i class="fa fa-youtube-play"></i> Trailer</a></li>
                    
                                            <li><a class="btn btn-danger" title="<?php echo $ten_phim; ?> - <?php echo $ten_goc; ?>" href="/<?php echo $slug; ?>/tap-<?php if ($bole=='1') { echo '1'; } else { echo 'Full'; }?>.html"><i class="fa fa-play" aria-hidden="true"></i> Xem Phim</a></li>
                                    </ul>
            </div>
            <h1 class="name"><?php echo $ten_phim; ?></h1>
            <h2 class="real-name"><?php echo $ten_goc; ?></h2>
            <input type="hidden" id="filmid" value="1249"/>
            <ul class="meta-data">
                <li>
                    <label><i class="fa fa-check"></i> Trạng Thái:</label>
                    <strong><?php echo $trang_thai; ?></strong>
                </li>
                <li>
                    <label><i class="fa fa-user-circle"></i> Năm Chiếu:</label>
                    <span><a title="Phim <?php echo $nam_chieu; ?>" href="/z.php?NC=<?php echo $nam_chieu; ?>"><?php echo $nam_chieu; ?></a></span>
                </li>
                <li>
                    <label><i class="fa fa-user-circle-o"></i> Diễn viên:</label>
                    <span><?php echo $dien_vien; ?></span>
                </li>
                <li>
                    <label><i class="fa fa-list-alt"></i> Thể loại:</label>
                    <span><?php echo $the_loai; ?></span>
                </li>
                <li>
                    <label><i class="fa fa-copyright"></i> Nhà sản xuất:</label>
                    <span>N/A</span>
                </li>
                <li>
                    <label><i class="fa fa-globe"></i> Quốc gia:</label>
                    <span><a title="Phim <?php echo $quoc_gia; ?>" href='/z.php?QG=<?php echo str_replace(' ', '-', $quoc_gia); ?>'><?php echo $quoc_gia; ?></a></span>
                </li>
                <li>
                    <label><i class="fa fa-clock-o" aria-hidden="true"></i> Thời lượng:</label>
                    <span><?php echo $thoi_luong; ?></span>
                </li>
                <li>
                    <label><i class="fa fa-eye" aria-hidden="true"></i> Lượt xem:</label>
                    <span><?php echo number_format($luotxem1, 0, '', '.'); ?> 💕</span>
                </li>
                
                <li>
                    <div class="starstruck-wrap">
                        <div class="dt_rating_data">
                            <div class="starstruck">
                                <span class="rating-info">
                                    <span class="rate full"></span><span class="rate full"></span><span class="rate full"></span><span class="rate full"></span><span class="rate full"></span>                                </span>
                            </div>
                            <div class="starstruck-rating">
                                <div class="dt_rating_vgs"><?php echo mt_rand(7, 9); ?>,<?php echo mt_rand(0, 9); ?></div>
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                                <span class="rating-count"><?php echo mt_rand(999, 9999); ?></span><span class="rating-text"> lượt đánh giá</span>
                            </div>
                        </div>
                    </div>
                </li>
                
                <li>
                    <div class="sbox">
                        <div class="dt_social_single">
                            <a rel="nofollow" href="#" target="_blank" class="facebook dt_social" style="color: #fbfbfb;"><b>Facebook</b></a>
                            <a rel="nofollow" href="#" target="_blank" class="twitter dt_social" style="color: #fbfbfb;"><b>Twitter</b></a>
                            <a rel="nofollow" href="#" target="_blank" class="pinterest dt_social" style="color: #fbfbfb;"><b>Pinterest</b></a>
                            <a rel="nofollow" href="#" target="_blank" class="telagram dt_social" style="color: #fbfbfb;"><b>Telegram</b></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
<div class="details">
		<div class="episodes info-desc">
                    <div id="tab-click-server">
					<div class="list_episodes show-list-1">
<?php
$cache_movie = './cache/movie/'.$slug.'.php';
$list = './list/'.$slug.'.php';

if (file_exists($cache_movie)) { $time_cache = filemtime($cache_movie);
if (time() > ($time_cache + 600)) { $cache = '0'; } } 
if ((!file_exists($cache_movie)) or ($cache == '0')) { 
$html = curl('https://api-zophim.blogspot.com/2023/01/'.$slug.'.html');    
if (strpos($html, 'class="ALL"') == true)  {
$list_all = explode('</td>', explode('<td style="vertical-align: top;" class="ALL">', $html)['1'])['0'];
$list_all = preg_replace('/\R+/', "\n", trim($list_all));
if ($list_all) {
$myfile = fopen($list, "w");
fwrite($myfile, '<?php $list_sv="
'.$list_all.';" ?>');
fclose($myfile);
}
file_put_contents($cache_movie, '');
}
}

if (file_exists($list)) {
include 'list/'.$slug.'.php';
$get_list = explode('<br/>', $list_sv);
foreach ($get_list as $get_list) {
if (strpos($get_list, '|') == true) {    
$list_tap = explode("|", $get_list)['0'];
echo '<span><a href="/'.$slug.'/tap-'.$list_tap.'.html">'.$list_tap.'</a></span>';
}}
} else {
$sql10 = mysqli_query($apizophim, "SELECT tap FROM VIP where `slug`='".$slug."' order by ABS(tap)");
while($qsql10 = mysqli_fetch_array($sql10)){
$list_tap = $qsql10['tap'];
echo '<span><a href="/'.$slug.'/tap-'.$list_tap.'.html">'.$list_tap.'</a></span>';
} 
}
?>					    
</div>
</div>
</div>

</div>
		<div class="block-film" id="film-trailer">
            <p class="caption"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Nội dung phim</p>
            <div class="film-content"><?php echo $noi_dung; ?></div>
        </div>

<div class="bottom-content">
                <div class="block-film">
                    <p class="caption"><i class="fa fa-facebook-square" aria-hidden="true"></i>Góc Bình Luận</p>
<?php
include 'includes/zComment.php';
?>
                </div>
        </div>
        <!-- xx -->
<div class="clear"></div>

        <div class="block-film">
            <h2 class="caption"><i class="fa fa-film" aria-hidden="true"></i><span>Có Thể Bạn Muốn Xem</span></h2>
<ul class="list-film">
<?php
include 'includes/000.php';
?>
</ul>
        </div>

	</div><!-- end left-content -->

    <div class="right-content">
<?php
include 'includes/BXH.php';
?>         
	</div><!--end Right-content-->
</div><!-- end container -->
</div>
<?php
include 'includes/fot.php';
?>
