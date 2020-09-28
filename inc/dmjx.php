<?php
error_reporting(0);
header('Content-Type:text/html;charset=UTF-8');
include ('./aik.config.php');
include ('./init.php');

$curl = $aik['dmjx'];
if (empty($_GET['cid'])) {
    $cxurl = $curl;
    $x=$_GET['page'];
    $url = $cxurl."?p=".$x;
} else {
    $cxurl = $curl."?cid=".$_GET["cid"];
    $x=$_GET['page'];
    $y=$_GET['cid'];
    $url = $curl."?p=".$x."&cid=".$y;
}
if(empty($_GET['page'])){
    $_GET['page']='1';
}
$list=json_decode(file_get_contents($cxurl),true);
$data=json_decode(file_get_contents($url),true);
$recordcount = $data['page']['recordcount'];
$pagesize = $data['page']['pagesize'];
?>
<?php
    for($i=0; $i<12; $i++){
    if (mb_strpos($data['data'][$i]['list_name'], '美女写真') === false) {
    if (mb_strpos($data['data'][$i]['list_name'], '伦理片') === false) {
    if (mb_strpos($data['data'][$i]['list_name'], '福利') === false) {
    if (mb_strpos($data['data'][$i]['list_name'], '伦理') === false) {
            $player="./mplay.php?id=".$data['data'][$i]['vod_id'];
    ?>

<div class="col-md-2 col-sm-3 col-xs-4">
							<a class="videopic lazy" href="<?php echo $player;?>" title="<?php echo $data['data'][$i]['vod_name'];?>" data-original="<?php echo $data['data'][$i]['vod_pic'];?>" style="background: url(./imge/load.gif) no-repeat; background-position:50% 50%; background-size: cover;"><span class="play hidden-xs"></span><span class="score"><?php echo $data['data'][$i]['vod_addtime'];?></span></a>
							<div class="title">
								<h5 class="text-overflow"><a href="<?php echo $player;?>"><?php echo $data['data'][$i]['vod_name'];?></a></h5>
							</div>
							<div class="subtitle text-muted text-muted text-overflow hidden-xs"></div>
						</div>
        <?php }}}}}?> 
