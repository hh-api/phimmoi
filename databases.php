<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
$apizophim = mysqli_connect('localhost', 'root', '123456789', 'zingtv');
$apizophim -> set_charset("utf8");
function curl($url){
		$ch = @curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		$head[] = "Connection: keep-alive";
		$head[] = "Keep-Alive: 300";
		$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
		$head[] = "Accept-Language: en-us,en;q=0.5";
		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.80 Safari/537.36');
		curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
		$page = curl_exec($ch);
		curl_close($ch);
		return $page;
}
$domain = 'https://zingtv.top';
$favicon = 'https://i.imgur.com/C0YwHGhm.png';
$title = 'Xem Phim Online, Xem Phim Mới, Phim HD, Xem Phim Nhanh, Xem Phim Thuyết Minh, Lồng Tiếng';
$description = 'ZingTV là website xem phim trực tuyến miễn phí với tiêu chí cập nhật nhanh nhất, chính xác và chất lượng. Chúc các bạn có những giây phút xem phim vui vẻ!';
$root_folder = '/www/wwwroot/zingtv.top';
?>
