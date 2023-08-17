<?php
include 'databases.php';
ob_start('minify_output');

  if(isset($_POST['slug']) && isset($_POST['comment'])) {
    $post_id = $_POST['slug'];
    $name = $_POST['name'];
    $comment = $_POST['comment'];

if(strlen($comment) >3)	{
$run = mysqli_query($apizophim, "INSERT INTO `comment` (`slug`, `name`, `comment`) VALUES ('".$post_id."', '".$name."', '".$comment."')");
} else {
$comment = 'Bình luận ngắn quá sẽ không được hiển thị !';    
}
$_SESSION['chat'] = time(); 
$_SESSION['name'] = $name; 
 
?>

<div class="user-comment" style="background: #e1f4ff;border: 1px solid #bce7ff;">
  <div class="flex bg-comment">
    <div class="left center">
      <div class="avatar">
    <img src="https://cdn.jsdelivr.net/gh/hh-api/img@main/<?php echo $name;?>.jpg" class="avatar-main">
    <img src="https://dataqq.net/store/avatar/11.png" class="avatar-level">
      </div>
    </div>
    <div class="right">
      <div class="flex flex-column">
        <div class="flex flex-space-auto">
          <div class="flex flex-hozi-center">
          <span class="nickname_flex">
          <span class="vip_icon vip_icon_3"></span>
          <span class="nickname0"><?php echo $name; ?></span>
          </div>
        </div>
        <div class="content"><?php echo $comment; ?></div>
        <div class="flex fs-12 toolbarr">
          <label>
            <a class="reply_cmt">Trả lời</a>
          </label>
          <span class="cmt-time color-gray">1 phút trước</span>
        </div>
      </div>
    </div>
  </div> 
</div>

<?php } ?>
