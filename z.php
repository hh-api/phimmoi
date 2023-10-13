<?php
include 'databases.php';
$BL= $_GET['BL'];
$QG = $_GET['QG'];
$quoc_gia = str_replace('-', ' ', $QG);
$TL = $_GET['TL'];
$the_loai = str_replace('-', ' ', $TL);
$NC = $_GET['NC'];
$trang = $_GET['trang'];
if(!$trang){ $trang = 1; }
?>
<!DOCTYPE html>
<html lang="vi" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
	<title>Xem Phim Online, Xem Phim Mới, Phim HD, Xem Phim Nhanh, Xem Phim Thuyết Minh, Lồng Tiếng</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="index" />
    <meta name="title" content="<?php echo $title; ?>" />
    <meta name="description" content="<?php echo $description; ?>" />
	<meta name="keywords" content="phim, xem phim, phim online, xem phim online, xem phim nhanh, phim online nhanh" />
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
	<meta property="og:url" content="ZingTV.top" />
	<meta property="og:type" content="website"/>
	<meta property="og:image" content="https://i.imgur.com/tgtVxr1.jpg" />
	<!-- twitter -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="<?php echo $title; ?>">
	<meta name="twitter:description" content="<?php echo $description; ?>">
	<meta name="twitter:image" content="https://i.imgur.com/tgtVxr1.jpg">
	<!-- schema -->
</head>

<body>

<?php
include 'includes/nav.php';
?>

<div id="main-content">
<div class="container" id="wrapper">
    <div class="left-content">
        
        <div class="block-film">
            <h2 class="caption">
            	<i class="fa fa-fire" aria-hidden="true"></i>Lọc Phim <?php echo $the_loai;?><?php if($quoc_gia) echo " + ".$quoc_gia;?><?php if ($NC) echo " + ".$NC;?>
            </h2>

<form class="form-filter" action="/z.php" method="GET">
   <div class="filter-item">
        <select class="input form-control" name="BL">
                    <?php if ($BL) { ?> 
                        <option value="<?php echo $BL;?>"><?php if ($BL=='1') { echo 'Phim Bộ'; } else { echo 'Phim Lẻ'; }?></option>
                    <?php } else { ?>
                        <option value="">-- Loại --</option>
                    <?php } ?>    
                        <option value="1">Phim Bộ</option>
                        <option value="2">Phim Lẻ</option>
        </select>
    </div>
   <div class="filter-item">
      <select class="form-control" name="TL">
                    <?php if ($TL) { ?> 
                        <option value="<?php echo $TL;?>"><?php echo $the_loai;?></option>
                    <?php } else { ?>
                        <option value="">-- Thể Loại --</option>
                    <?php } ?>
                        <option value="Viễn-Tưởng">Viễn Tưởng</option>
                        <option value="Hành-Động">Hành Động</option>
                        <option value="Cổ-Trang">Cổ Trang</option>
                        <option value="Thần-Thoại">Thần Thoại</option>
                        <option value="Tình-Yêu">Tình Yêu</option>
                        <option value="Kinh-Dị">Kinh Dị</option>
                        <option value="Phiêu-Lưu">Phiêu Lưu</option>
                        <option value=">Võ-Thuật">Võ Thuật</option>
                        <option value="Hình-Sự">Hình Sự</option>
                        <option value="Hài-Hước">Hài Hước</option>
                        <option value="18-Plus">18 Plus</option>
                        <option value="LBGT">LBGT</option>
        </select>
   </div>
   <div class="filter-item">
        <select class="form-control" name="QG">
                    <?php if ($QG) { ?> 
                        <option value="<?php echo $QG;?>"><?php echo $quoc_gia;?></option>
                    <?php } else { ?>
                        <option value="">-- Quốc Gia --</option>
                    <?php } ?>    
                        <option value="Âu-Mỹ">Âu Mỹ</option>
                        <option value="Trung-Quốc">Trung Quốc</option>
                        <option value="Hàn-Quốc">Hàn Quốc</option>
                        <option value="Nhật-Bản">Nhật Bản</option>
                        <option value="Thái-Lan">Thái Lan</option>
                        <option value="Ấn-Độ">Ấn Độ</option>
        </select>
    </div>
   	<div class="filter-item">
        <select class="form-control" name="NC">
                    <?php if ($NC) { ?> 
                        <option value="<?php echo $NC;?>"><?php echo $NC;?></option>
                    <?php } else { ?>
                        <option value="">-- Năm Chiếu --</option>
                    <?php } ?>    
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
        </select>
            </div>
   <input type="submit" class="btn btn-success" value="Lọc phim" />
</form>            

<div class="navigation">
<a class="page-numbers" title="Trang Đầu" href="<?php echo '/z.php?BL='.$BL.'&TL='.$TL.'&QG='.$QG.'&NC='.$NC.'&trang=1'; ?>"><i class="fa fa-angle-double-left"></i></a>
<?php if($trang > 2) {?>
<a class="page-numbers" href="<?php echo '/z.php?BL='.$BL.'&TL='.$TL.'&QG='.$QG.'&NC='.$NC.'&trang='.($trang - 2); ?>"><?php echo ($trang - 2); ?></a>
<?php } ?>
<?php if($trang > 1) {?>
<a class="page-numbers" href="<?php echo '/z.php?BL='.$BL.'&TL='.$TL.'&QG='.$QG.'&NC='.$NC.'&trang='.($trang - 1); ?>"><?php echo ($trang - 1); ?></a>
<?php } ?>
<a class="currentpage"><?php echo $trang; ?></a>
<a class="page-numbers" href="<?php echo '/z.php?BL='.$BL.'&TL='.$TL.'&QG='.$QG.'&NC='.$NC.'&trang='.($trang+1); ?>"><?php echo ($trang + 1); ?></a>
<a class="page-numbers" href="<?php echo '/z.php?BL='.$BL.'&TL='.$TL.'&QG='.$QG.'&NC='.$NC.'&trang='.($trang+2); ?>"><?php echo ($trang + 2); ?></a>
</div>
            
<ul class="list-film">
<?php 
//phan trang	            
$sodu_lieu = mysqli_query($apizophim, "SELECT id FROM phim where bole like '%$BL%' and quoc_gia like '%$quoc_gia%' and the_loai like '%$the_loai%' and nam_chieu like '%$NC%'");
$sodu_lieu = mysqli_num_rows($sodu_lieu);
$baitren_mottrang = 40;
$sotrang = ceil($sodu_lieu/$baitren_mottrang);
$dau = ($trang-1)*$baitren_mottrang;
$cuoi = $baitren_mottrang;
									
$result = mysqli_query($apizophim, "SELECT id,ten_phim,ten_goc,quoc_gia,nam_chieu,thumb,slug,trang_thai,thoi_luong,view,bole FROM phim where bole like '%$BL%' and quoc_gia like '%$quoc_gia%' and the_loai like '%$the_loai%' and nam_chieu like '%$NC%' order by time DESC limit $dau, $cuoi");
while($qsql4 = mysqli_fetch_array($result)) {
$ten_phim = $qsql4['ten_phim'];
$ten_goc = $qsql4['ten_goc'];
$slug = $qsql4['slug'];
$bole = $qsql4['bole'];
$trang_thai = $qsql4['trang_thai'];
$thoi_luong = $qsql4['thoi_luong'];
$nam_chieu = $qsql4['nam_chieu'];
$quoc_gia = $qsql4['quoc_gia'];
$view = $qsql4['view'];
$thumb = $qsql4['thumb'];
if (strpos($thumb, 'imgur.com') == true)  {
$thumb = str_replace('.jpg', 'm.jpg', $qsql4['thumb']);
}
?> 
<li class="film-item">
                    <span class="current-quality"><?php if($bole=='2') { echo $thoi_luong.' '.$trang_thai; } else { echo $trang_thai; } ?></span>
					<span class="current-status"><?php echo number_format($view, 0, '', '.'); ?> 💕</span>
					<span class="current-rating"><?php echo $nam_chieu; ?></span>
					<span class="current-quocgia"><img alt="<?php echo $quoc_gia; ?>" style="width:25px !important;position:static;" src="/css/<?php echo $quoc_gia; ?>.jpg"/></span>
                    <a href="/<?php echo $slug; ?>.html" title="<?php echo $ten_phim; ?> - <?php echo $ten_goc; ?>">
                    <div style="padding-top: 133.3333% !important; background-image:url('<?php echo $thumb; ?>');background-size: cover;"></div>
                        <div class="title">
                            <div class="post-title">
                                <p class="name"><?php echo $ten_phim; ?></p>
                                <p class="real-name"><?php echo $ten_goc; ?></p>
                            </div>
                        </div>
						<div class="ply">
							<span class="overlay"></span>
						</div>
                    </a>
</li>
<?php } ?>                
</ul>
        </div>
    
    </div><!--end Left-content-->
    
    <div class="right-content">
<?php
include 'includes/BXH.php';
?> 
	</div><!--end Right-content-->
</div><!-- end-container -->
</div>
<?php
include 'includes/fot.php';
?>
