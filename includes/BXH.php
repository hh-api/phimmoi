<div class="most-view block">
            <p class="caption"><i class="fa fa-line-chart" aria-hidden="true"></i> Phim Xem Nhiều Hôm Nay</p>
            <div class="clear"></div>
            <div class="widget-title">
                <span class="tabs" data-target="#tab-click-right">
                    <div class="tab active" data-name="show-list-1">
                        <div class="name">Phim Bộ</div>
                    </div>
                    <div class="tab" data-name="show-list-2">
                        <div class="name">Phim Lẻ</div>
                    </div>
                    <div class="tab" data-name="show-list-3">
                        <div class="name">Hoạt Hình</div>
                    </div>
                </span>
            </div>
       
            <div id="tab-click-right">          
<ul class="list-film show-list-1">
<?php 
$result = mysqli_query($apizophim, "SELECT id,ten_phim,ten_goc,quoc_gia,nam_chieu,thumb,slug,trang_thai,view FROM phim WHERE `bole`='1' and `the_loai` NOT LIKE '%Hoạt%' order by view_day DESC limit 10");
while($qsql4 = mysqli_fetch_array($result)) {
$ten_phim = $qsql4['ten_phim'];
$ten_goc = $qsql4['ten_goc'];
$slug = $qsql4['slug'];
$trang_thai = $qsql4['trang_thai'];
$nam_chieu = $qsql4['nam_chieu'];
$quoc_gia = $qsql4['quoc_gia'];
$view = $qsql4['view'];
$thumb = str_replace('.jpg', 'm.jpg', $qsql4['thumb']);
?>    
                <li class="film-item-ver">
					<a href="/<?php echo $slug; ?>.html" title="<?php echo $ten_phim; ?>">
						<img class="avatar" alt="<?php echo $ten_phim; ?>" src="<?php echo $thumb; ?>" />
						<div class="title">
							<p class="name"><font color="limegreen"><?php echo $ten_phim; ?></font></p>
							<p class="real-name"><font color="orange"><?php echo $ten_goc; ?> (<?php echo $nam_chieu; ?>)</font></p>
						</div>
					</a>
					<p class="view" style="color:#aaa">📚 <font color="white"><?php echo $trang_thai; ?></font></p>
					<p class="view" style="color:#aaa"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo number_format($view, 0, '', '.'); ?> 💕</p>
				</li>
<?php } ?>				
</ul>
                
<ul class="list-film show-list-2 none">
<?php 
$result = mysqli_query($apizophim, "SELECT id,ten_phim,ten_goc,quoc_gia,nam_chieu,thumb,slug,trang_thai,thoi_luong,view FROM phim WHERE `bole`='2' order by view_day DESC limit 10");
while($qsql4 = mysqli_fetch_array($result)) {
$ten_phim = $qsql4['ten_phim'];
$ten_goc = $qsql4['ten_goc'];
$slug = $qsql4['slug'];
$trang_thai = $qsql4['trang_thai'];
$thoi_luong = $qsql4['thoi_luong'];
$nam_chieu = $qsql4['nam_chieu'];
$quoc_gia = $qsql4['quoc_gia'];
$view = $qsql4['view'];
$thumb = str_replace('.jpg', 'm.jpg', $qsql4['thumb']);
?>    
                <li class="film-item-ver">
					<a href="/<?php echo $slug; ?>.html" title="<?php echo $ten_phim; ?>">
						<img class="avatar" alt="<?php echo $ten_phim; ?>" src="<?php echo $thumb; ?>" />
						<div class="title">
							<p class="name"><font color="limegreen"><?php echo $ten_phim; ?></font></p>
							<p class="real-name"><font color="orange"><?php echo $ten_goc; ?> (<?php echo $nam_chieu; ?>)</font></p>
						</div>
					</a>
					<p class="view" style="color:#aaa">⚖️ <font color="white"><?php echo $thoi_luong; ?> <?php echo $trang_thai; ?></font></p>
					<p class="view" style="color:#aaa"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo number_format($view, 0, '', '.'); ?> 💕</p>
				</li>
<?php } ?>				
</ul>
                
                <ul class="list-film show-list-3 none">
<?php 
$result = mysqli_query($apizophim, "SELECT id,ten_phim,ten_goc,quoc_gia,nam_chieu,thumb,slug,trang_thai,view FROM phim WHERE `bole`='1' and `the_loai` like '%Hoạt%' order by view_day DESC limit 10");
while($qsql4 = mysqli_fetch_array($result)) {
$ten_phim = $qsql4['ten_phim'];
$ten_goc = $qsql4['ten_goc'];
$slug = $qsql4['slug'];
$trang_thai = $qsql4['trang_thai'];
$nam_chieu = $qsql4['nam_chieu'];
$quoc_gia = $qsql4['quoc_gia'];
$view = $qsql4['view'];
$thumb = str_replace('.jpg', 'm.jpg', $qsql4['thumb']);
?>                    
                <li class="film-item-ver">
					<a href="/<?php echo $slug; ?>.html" title="<?php echo $ten_phim; ?>">
						<img class="avatar" alt="<?php echo $ten_phim; ?>" src="<?php echo $thumb; ?>" />
						<div class="title">
							<p class="name"><font color="limegreen"><?php echo $ten_phim; ?></font></p>
							<p class="real-name"><font color="orange"><?php echo $ten_goc; ?> (<?php echo $nam_chieu; ?>)</font></p>
						</div>
					</a>
					<p class="view" style="color:#aaa">📚 <font color="white"><?php echo $trang_thai; ?></font></p>
					<p class="view" style="color:#aaa"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo number_format($view, 0, '', '.'); ?> 💕</p>
				</li>
<?php } ?>				
</ul>
            </div> 
</div>




<div class="most-view block">
            <p class="caption"><i class="fa fa-line-chart" aria-hidden="true"></i> Bình Luận Mới</p>
            <div class="clear"></div>
            <div id="tab-click-right">          
<ul class="list-film show-list-1">
<?php 
$sql1_bxh = mysqli_query($apizophim,"SELECT slug,name,comment,time FROM comment order by id DESC limit 10");
while($sql_bxh = mysqli_fetch_array($sql1_bxh)) {
$slug = $sql_bxh['slug'];
$name = $sql_bxh['name'];
$comment = $sql_bxh['comment'];
$time = $sql_bxh['time'];
$sql1 = mysqli_query($apizophim, "SELECT thumb,ten_phim FROM phim WHERE slug='$slug'");
$sql2 = mysqli_fetch_array($sql1);
$ten_phim = $sql2['ten_phim'];
$thumb = str_replace('.jpg', 'm.jpg', $sql2['thumb']);

?>    
                <li class="film-item-ver">
					<a href="/<?php echo $slug; ?>.html" title="<?php echo $ten_phim; ?>">
						<img class="avatar" alt="<?php echo $ten_phim; ?>" src="<?php echo $thumb; ?>" />
						<div class="title">
							<p class="name"><font color="yellow"><?php echo $ten_phim; ?></font></p>
							<p class="real-name"><font color="limegreen"><?php echo $ten_goc; ?> (<?php echo $nam_chieu; ?>)</font></p>
						</div>
					</a>
					<img width="32px" alt="<?php echo $name;?>" src="https://cdn.jsdelivr.net/gh/hh-api/img@main/<?php echo $name;?>.jpg" style="padding-top:5px; padding-right:5px; float:left;"/> <div class="title" style="white-space: nowrap;"><b><font color="pink"><?php echo $name;?></font></b><br/><span style="font-size:11px;"><?php echo $comment; ?></span></div>
				</li>
<?php } ?>				
</ul>
            </div> 
        </div>
