<?php
error_reporting(0);
header("Content-type:text/html;charset=utf-8");
include "./aik.config.php";
$info = file_get_contents("https://youku.com/");
$vname = "#<div class=\"sub_title focusswiper_sub_title\">(.*?)<div></div></a>#";
$vlist = "#<div class=\"swiper-slide\"><a data-scm=\"(.*?)\" data-spm=\"(.*?)\" data-name=\"a_pos\" href=\"(.*?)\" target=\"_blank\" title=\"(.*?)\">#";
$vimg = "#<div class=\"focusswiper_focus_item\" style=\"position:relative;background-image:url\((.*?)\);background-color:(.*?)\">#";
$array = array();
preg_match_all($vname, $info, $namearr);
preg_match_all($vlist, $info, $listarr);
preg_match_all($vimg, $info, $imgarr);
$i = 0;
while ($i < 7) {
	$gul = $listarr[3][$i];
	$zimg = $imgarr[1][$i];
	$zg = $imgarr[2][$i];
	$zname = $namearr[1][$i];
	$nname = $listarr[4][$i];
	$zstar = 	$player = "vjx.php?url=https:" . $gul;
?>
<div class="swiper-slide">
	<div class="hy-video-slide">
		<a class="videopic" href="<?php echo $player;?>" title="<?php echo $nname;?>" style="padding-top: 60%; background: url(<?php echo $zimg;?>)  no-repeat; background-position:50% 50%; background-size: cover;">	
			<span class="title"><?php echo $nname;?><?php echo $zname;?></span>
	    </a>
	</div>	            					
</div> <?php
	$i = $i + 1;
}




