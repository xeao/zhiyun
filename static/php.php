
<?php
ini_set('user_agent','Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; SV1; .NET CLR 1.1.4322)');

$arta= file_get_contents('http://www.yy.com/shenqu/show/info.do?resid=' .$_GET['post']. '');

$uu1 = '#"resurl":"(.*?)"#';
$uu2 = '#"anchorName":"(.*?)"#';
$uu3 = '#"snapshotUrl":"(.*?)"#';
$uu4 = '#"songName":"(.*?)"#';
preg_match_all($uu1,$arta, $lj);
preg_match_all($uu2,$arta, $name);
preg_match_all($uu3,$arta, $img);
preg_match_all($uu4,$arta, $cname);
$bf = $lj[1];
$timu = $name[1];
$imge = $img[1];
$xarr = $cname[1];
foreach ($bf as $gg => $qz1){
?>



<?php echo $qz1;?><?php echo $timu;?>

<?php
}
?>

