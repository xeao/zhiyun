<?php
error_reporting(0);
header("Content-type:text/html;charset=utf-8");
include "./aik.config.php";
$info = file_get_contents("https://movie.douban.com/cinema/nowplaying/");

$vname = "#data-title=\"(.*?)\"#";
$vlist = "#href=\"https://movie.douban.com/subject/(.*?)/?from=showing\" class=\"\">(.*?)</a>#";
$vl = "#data-actors=\"(.*?)\"#";
$vstar = "#data-score=\"(.*?)\"#";
$vimg = "#<img src=\"(.*?)\" alt=\"(.*?)\" rel=\"nofollow\" class=\"\" />#";
$nname = "#data-release=\"(.*?)\"#";
$fname = "#data-actors=\"(.*?)\"#";
$array = array();
preg_match_all($vname, $info, $namearr);
preg_match_all($vlist, $info, $listarr);
preg_match_all($vl, $info, $lt);
preg_match_all($vstar, $info, $stararr);
preg_match_all($vimg, $info, $imgarr);
preg_match_all($nname, $info, $nnamearr);
preg_match_all($fname, $info, $fnamearr);
$i = 0;
while ($i < 18) {
	$gul = $listarr[1][$i];
	$gl = $lt[1][$i];
	$zimg = $imgarr[1][$i];
	$zg = $imgarr[2][$i];
	$zname = $namearr[1][$i];
	$fname = $fnamearr[1][$i];
	$nname = $nnamearr[1][$i];
	$zstar = $stararr[1][$i];
	$player = "seacher.php?sousuo=" . $gul;
?>
<div class="swiper-slide">
			<div class="item">
			<a class="videopic lazy xtcms"  href="<?php echo $player;?><?php echo $zg;?>" title="<?php echo $zname;?>" data-original="<?php echo $zimg;?>" style="background: url(<?php echo $zimg;?>) no-repeat; background-position:50% 50%; background-size: cover;"><span class="play hidden-xs"></span><span class="score"><?php echo $nname;?></span></a>
			<div class="title">
			<h5 class="text-overflow"><a href="<?php echo $player;?><?php echo $zg;?>" ><?php echo $zname;?></a></h5>
			</div>
							<div class="subtitle text-muted text-muted text-overflow hidden-xs"><?php echo $gl;?></div>
						</div></div> <?php
	$i = $i + 1;
}
