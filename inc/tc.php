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
<div class='swiper-slide'>
								<div class='item'>
									<a class='videopic lazy mkcms' href='<?php echo $player;?>' title='' data-original='<?php echo $zimg;?>'><span class='play hidden-xs'></span><span class='score'>ÍÆ¼ö</span></a>
									<div class='title'>
										<h5 class='text-overflow'><a href='<?php echo $player;?>'><?php echo $nname;?></a></h5>
									</div>
									<div class='subtitle text-muted text-muted text-overflow hidden-xs'>
																			</div>
								</div>
							</div> <?php
	$i = $i + 1;
}






