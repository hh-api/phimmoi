<?php
include 'databases.php';
?>

<?php
$slug = $_GET['slug'];
$get_tap = $_GET['tap'];
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
	<title>Xem Phim <?php echo $ten_phim; ?> Tập <?php echo $get_tap; ?> Việt Sub, Thuyết Minh</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="index" />
    <meta name="title" content="Xem Phim <?php echo $ten_phim; ?> Tập <?php echo $get_tap; ?> Việt Sub, Thuyết Minh" />
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

    <meta property="fb:app_id" content=""/>
	<meta property="fb:admins" content=""/>
    <meta name="google-site-verification" content="hExv5c5eeAXLd4umRTOVVsHH0C0ahcHd9XuApvsjziM" />
    <meta name='dmca-site-verification' content='WlVndXFRamE2RnFET0djZlgwQWJRQT090' />
	<link rel="shortcut icon" href="<?php echo $favicon; ?>" />
    <!-- google -->
	<meta itemprop="name" content="<?php echo $noi_dung; ?>">
	<meta itemprop="image" content="<?php echo $thumb; ?>">
	<!-- facebook -->	
	<meta property="og:title" content="Xem Phim <?php echo $ten_phim; ?> Tập <?php echo $get_tap; ?> Việt Sub, Thuyết Minh">
	<meta property="og:description" content="<?php echo $noi_dung; ?>" />
	<meta property="og:url" content="/<?php echo $slug; ?>.html" />
	<meta property="og:type" content="movie" />
	<meta property="og:image" content="<?php echo $thumb; ?>" />
	<!-- twitter -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="Xem Phim <?php echo $ten_phim; ?> Tập <?php echo $get_tap; ?> Việt Sub, Thuyết Minh">
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
        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
        	<a itemprop="item" title="Tập <?php echo $get_tap; ?>" href="#">
            <span class="epi" itemprop="name">Tập <?php echo $get_tap; ?></span>
            </a>
            <meta itemprop="position" content="4" />
        </li>
    </ol>

<?php
$sql = mysqli_query($apizophim, "SELECT * FROM VIP where `slug`='".$slug."' and tap ='$get_tap'");
$mysql = mysqli_fetch_array($sql);    
$vs = $mysql['vs'];
$tm = $mysql['tm'];
if ($tm){ 
$auto = 'https://zophim.net/s/'.$tm.'.html'; $ahihi = 'zotm';
//$auto = 'https://ssplay.net/v/'.$tm.'.html'; $ahihi = 'sstm';
} elseif ($vs){
if (strpos($vs, 'ssplay') == true) {    
$auto = $vs; $ahihi = 'ssvs';
} else {
$auto = 'https://zophim.net/s/'.$vs.'.html'; $ahihi = 'zovs';
//$auto = 'https://ssplay.net/v/'.$vs.'.html'; $ahihi = 'ssvs';
}
} else {$ahihi=='0'; }
?>
	<div class="left-content">

		<div class="block">
            <div class="box-player" id="box-player">
 
                <div style="text-align: center;height: 377px;width: 100%;position: relative;background:url() #1f1f1f center no-repeat;">
                <iframe id="ZingTV" width="100%" height="100%" src="<?php echo $auto; ?>" frameborder="0" scrolling="0" allowfullscreen></iframe>    
                </div>
            </div>
        </div>
        <div class="item video-nav">
            <div class="mobius">
                <div id="clicksv" class="server">
<?php if ($tm) { ?><button onclick="document.getElementById('ZingTV').src = 'https://zophim.net/s/<?php echo $tm; ?>.html'" class="btn btn-sm <?php if($ahihi == 'zotm') { echo 'redd'; } else { echo 'grayy'; } ?>">Z-TM</button><?php } ?> 
<?php if ($tm) { ?><button onclick="document.getElementById('ZingTV').src = 'https://ssplay.net/v/<?php echo $tm; ?>.html'" class="btn btn-sm <?php if($ahihi == 'sstm') { echo 'redd'; } else { echo 'grayy'; } ?>">S-TM</button><?php } ?>
<?php if ($vs) { if (strpos($vs, 'ssplay') == false) { ?>
<button onclick="document.getElementById('ZingTV').src = 'https://zophim.net/s/<?php echo $vs; ?>.html'" class="btn btn-sm <?php if($ahihi == 'zovs') { echo 'redd'; } else { echo 'grayy'; } ?>">Z-VS</button>
<button onclick="document.getElementById('ZingTV').src = 'https://ssplay.net/v/<?php echo $vs; ?>.html'" class="btn btn-sm <?php if($ahihi == 'ssvs') { echo 'redd'; } else { echo 'grayy'; } ?>">S-VS</button>
<?php } else { ?>
<button onclick="document.getElementById('ZingTV').src = '<?php echo $vs; ?>'" class="btn btn-sm grayy">S-VS</button><?php } } ?>
                </div>
                
<style>
.grayy{
    color: white;
    font-size: 12px;
    background: #333;
    padding: 1px 11px;
    border-radius: 3px;
    margin-left: 5px;
}
.redd {
    color: white;
    font-size: 12px;
    background: #d9534f;
    border-color: #d43f3a;
    padding: 1px 11px;
    border-radius: 3px;
    margin-left: 5px;
}
</style>

<script type="text/javascript">
function go(loc) {
    document.getElementById('ZingTV').src = loc;
     }
var buttons = $('button').click(function(){
  buttons.not(this).addClass('grayy');
  buttons.not(this).removeClass('redd');
  $(this).addClass('redd');
});
</script>                
                
                <div class="iconx">
                    <div class="icol download" style="border: 1px solid#aaa;">
                    <a href="<?php if (($get_tap > 1) and ($get_tap != 'Full'))  { echo '/'.$slug.'/tap-'.($get_tap - 1).'.html'; } else { echo '#'; } ?>">⫷ Trước</a>
                    </div>
                    <div class="icol download" style="border: 1px solid#aaa;">
                    <a href="<?php if (($get_tap > 0 ) and ($get_tap != 'Full')) { echo '/'.$slug.'/tap-'.($get_tap + 1).'.html'; } else { echo '#'; } ?>">Sau ⫸</a>
                    </div>
                </div>
            </div>
        </div><!--End video nav-->

        <div class="clear" style="margin-bottom:10px"></div> 
		
        <div class="film-note">
        	<b><i class="fa fa-info-circle" aria-hidden="true"></i> Thông báo :</b>
            <br />- Nếu không xem được phim, các bạn hãy tải lại trang hoặc bấm vào link dự phòng <span style="color:red">Z-VS, S-VS, Z-TM, S-TM</span>. Nếu vẫn không được hãy báo lỗi để chúng tôi khắc phục.
        </div>
        
        <!-- xx -->
        <div class="details">
            <div class="control-box clear">
                 
        		<div class="list-servers" data-target="#tab-click-server">
					<div data-name="show-list-1" class="server active"><i class="playing"></i> <font color="yellow">Danh Sách</font></div>                    
                </div>
                <div class="clear"></div>

                <div class="episodes info-desc">
                    <div id="tab-click-server">
					<div class="list_episodes show-list-1">
<?php
$sql10 = mysqli_query($apizophim, "SELECT tap FROM VIP where `slug`='".$slug."' order by ABS(tap)");
while($qsql10 = mysqli_fetch_array($sql10)){
$list_tap = $qsql10['tap'];
?>
<span <?php if ($get_tap == $list_tap) echo 'class="current"'; ?>><a href="/<?php echo $slug; ?>/tap-<?php echo $list_tap; ?>.html"><?php echo $list_tap; ?></a></span>
<?php } ?>					   
			</div>
			</div>
                </div>
            </div><!-- end-control-box -->
            <div class="clear"></div>
        </div><!-- end-details -->
        <!-- xx -->
                                    
        <div class="bottom-content">
                <div class="block-film">
                    <p class="caption"><i class="fa fa-facebook-square" aria-hidden="true"></i>Góc Bình Luận</font></p>
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

        <div class="clear"></div>

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
