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

$movie = './movie/'.$slug.'.txt';
if (file_exists($movie)) { $time_cache = file_get_contents($movie);
if (time() > ($time_cache + 86400)) { $cache = '0'; } } 
if ((!file_exists($movie)) or ($cache == '0')) { 
$html = curl('https://api-zophim.blogspot.com/2023/01/'.$slug.'.html');    
$list_vs = explode('</td>', explode('<td style="vertical-align: top;" class="VS">', $html)['1'])['0'];
$all_links = explode("<br/>", $list_vs);
foreach ($all_links as $all_links) {
if(strlen($all_links) >1)	{
if (strpos($all_links, '|') == true) {
$tap = preg_replace('/\s+/', ' ', trim(explode("|", $all_links)['0']));
$file = explode("|", $all_links)['1'];  
$sql2 = mysqli_query($apizophim, "SELECT id FROM VIP where `slug`='".$slug."' AND `tap` = '$tap'");
$check = mysqli_num_rows($sql2);
if($check > 0){
$run = mysqli_query($apizophim, "UPDATE VIP SET vs='$file' where `slug`='".$slug."' AND tap = '$tap'");
}else{
$run = mysqli_query($apizophim, "INSERT INTO `VIP` (`slug`, `tap`, `vs`) VALUES ('".$slug."', '".$tap."', '".$file."')");
}
}}}


$list_tm = explode('</td>', explode('<td style="vertical-align: top;" class="TM">', $html)['1'])['0'];
$all_links = explode("<br/>", $list_tm);
foreach ($all_links as $all_links) {
if(strlen($all_links) >1)	{
if (strpos($all_links, '|') == true) {
$tap = preg_replace('/\s+/', ' ', trim(explode("|", $all_links)['0']));
$file = explode("|", $all_links)['1'];  
$sql2 = mysqli_query($apizophim, "SELECT id FROM VIP where `slug`='".$slug."' AND `tap` = '$tap'");
$check = mysqli_num_rows($sql2);
if($check > 0){
$run = mysqli_query($apizophim, "UPDATE VIP SET tm='$file' where `slug`='".$slug."' AND tap = '$tap'");
}else{
$run = mysqli_query($apizophim, "INSERT INTO `VIP` (`slug`, `tap`, `tm`) VALUES ('".$slug."', '".$tap."', '".$file."')");
}
}}}

$myfile = fopen($movie, "w"); fwrite($myfile, time()); fclose($myfile);

}

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
    <meta name="google-site-verification" content="hExv5c5eeAXLd4umRTOVVsHH0C0ahcHd9XuApvsjziM" />
    <meta name='dmca-site-verification' content='WlVndXFRamE2RnFET0djZlgwQWJRQT090' />
	<link rel="shortcut icon" href="<?php echo $favicon; ?>" />
    <!-- google -->
	<meta itemprop="name" content="Phim <?php echo $ten_phim; ?> - <?php echo $ten_goc; ?> Việt Sub, Thuyết Minh, Lồng Tiếng">
	<meta itemprop="description" content="<?php echo $noi_dung; ?>">
	<meta itemprop="image" content="<?php echo $thumb; ?>">
	<!-- facebook -->	
	<meta property="og:title" content="Phim <?php echo $ten_phim; ?> - <?php echo $ten_goc; ?> Việt Sub, Thuyết Minh, Lồng Tiếng">
	<meta property="og:description" content="<?php echo $noi_dung; ?>" />
	<meta property="og:url" content="/<?php echo $slug; ?>.html" />
	<meta property="og:type" content="website"/>
	<meta property="og:image" content="<?php echo $thumb; ?>" />
	<!-- twitter -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="Phim <?php echo $ten_phim; ?> - <?php echo $ten_goc; ?> Việt Sub, Thuyết Minh, Lồng Tiếng">
	<meta name="twitter:description" content="<?php echo $noi_dung; ?>">
	<meta name="twitter:image" content="<?php echo $thumb; ?>">
	<!-- schema -->
	<script type="application/ld+json">
	{"@context": "http://schema.org","@graph": [{"@type": "VideoObject","name": "Phim <?php echo $ten_phim; ?> - <?php echo $ten_goc; ?> Việt Sub, Thuyết Minh, Lồng Tiếng","thumbnailUrl": "<?php echo $thumb; ?>","description": "<?php echo $noi_dung; ?>","aggregateRating": {"@type": "AggregateRating","ratingValue": "9.0","bestRating": 10,"worstRating": 1,"ratingCount": "159"}
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
                                <div class="dt_rating_vgs">9.5</div>
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                                <span class="rating-count">99</span><span class="rating-text"> lượt đánh giá</span>
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
$sql10 = mysqli_query($apizophim, "SELECT tap FROM VIP where `slug`='".$slug."' order by ABS(tap)");
while($qsql10 = mysqli_fetch_array($sql10)){
$list_tap = $qsql10['tap'];
?>
<span><a href="/<?php echo $slug; ?>/tap-<?php echo $list_tap; ?>.html"><?php echo $list_tap; ?></a></span>
<?php } ?>					    
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
