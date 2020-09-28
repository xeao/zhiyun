<?php
//以下代码为PHP核心代码 如若不明 智云直播接口采集 请勿修改
error_reporting(0);
header('Content-type:text/html;charset=utf-8');
$info=file_get_contents('http://yys.ppdsw.xyz/zb/');
//print_r($info);
$vname='#<a href="(.*?)"><img src="(.*?)" alt="(.*?)" />#';//取出名字
$fname='#<h5>(.*?)</h5>#';
$vimg='#<img src="(.*?)" alt="(.*?)" />#';

$array = array();
preg_match_all($vname, $info,$namearr);
preg_match_all($vimg, $info,$imgarr);
preg_match_all($fname, $info,$fnamearr);
       for($i =0;$i<36;$i++){   
           $zimg=$imgarr[1][$i];//取出图片链接
           $zname=$namearr[3][$i];//取出名字
		   $fname=$fnamearr[1][$i];//取出观看人数
		   $fname=$fnamearr[1][$i];//取出影片评分
           $gul=$namearr[1][$i];
           $tok=base64_encode($gul);
           //echo $zname;
           //echo $gul;//取出播放链接
           echo "
		   <div class='col-md-2 col-sm-3 col-xs-4'>
							<a class='videopic lazy' href='playm.php?url=$gul' title='' data-original='$zimg' style='background: url($zimg) no-repeat; background-position:50% 50%; background-size: cover;'><span class='play hidden-xs'></span><span class='score'>直播</span></a>
							<div class='title'>
								<h5 class='text-overflow'><a href='playm.php?url=$gul'>$zname</a></h5>
							</div>
							<div class='subtitle text-muted text-muted text-overflow hidden-xs'>$zstar</div>
						</div>";
       }
	   ?>
