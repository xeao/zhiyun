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
    if (mb_strpos($data['data'][$i], '') === false) {
    if (mb_strpos($data['data'][$i], '') === false) {
    if (mb_strpos($data['data'][$i], '') === false) {
    if (mb_strpos($data['data'][$i], '') === false) {
            $player="./mplay.php?id=".$data['data'][$i]['vod_id'];
    ?>
<li class="text-overflow"><span class="pull-right text-color">->></span><a href="<?php echo $player;?>" title="<?php echo $data['data'][$i]['vod_name'];?>">
						<em class="number active ">最新</em><?php echo $data['data'][$i]['vod_name'];?></a></li>	
        <?php }}}}}?> 

