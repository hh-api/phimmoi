<?php 
$result = mysqli_query($apizophim, "SELECT id,ten_phim,ten_goc,quoc_gia,nam_chieu,thumb,slug,trang_thai,view FROM phim WHERE `bole`='1' and `the_loai` like '%Hoạt%' order by time DESC limit 8");
while($qsql4 = mysqli_fetch_array($result)) {
$ten_phim = $qsql4['ten_phim'];
$ten_goc = $qsql4['ten_goc'];
$slug = $qsql4['slug'];
$trang_thai = $qsql4['trang_thai'];
$nam_chieu = $qsql4['nam_chieu'];
$quoc_gia = $qsql4['quoc_gia'];
$view = $qsql4['view'];
$thumb = str_replace('.jpg', 'l.jpg', $qsql4['thumb']);
?> 
<li class="film-item">
                    <span class="current-quality"><?php echo $trang_thai; ?></span>
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
