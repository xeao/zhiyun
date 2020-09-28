<?php
//以下代码为PHP核心代码 如若不明 智云直播接口采集 请勿修改
error_reporting(0);
header('Content-type:text/html;charset=utf-8');
$page=$_GET['page'];
if (empty($page)){$page=1;}//页数 
$info=file_get_contents('http://www.1905.com/list-p-catid-220.html?page='.$page');
//print_r($info);

$vname='#<a data-hrefexp="fr=wwwnews_newslist_news_([0-9]+)_201504" href="https://www.1905.com/news/([0-9]+)/([0-9]+).shtml" target="_blank" class="pic-url">[\s]+?<img src="(.*)" alt="(.*)" >[\s]+?</a>#';//取出名字
$fname='#<p>(.*)</p>#';
$vimg='#<div class="rel-other clear"><span class="timer fl">(.*)</span>#';

$array = array();
preg_match_all($vname, $info,$namearr);
preg_match_all($vimg, $info,$imgarr);
preg_match_all($fname, $info,$fnamearr);
       for($i =0;$i<12;$i++){   
           $zimg=$namearr[4][$i];//取出图片链接
           $zname=$namearr[3][$i];//取出名字
		   $fname=$fnamearr[1][$i];//取出时间
		   $fname=$namearr[5][$i];//取出标题

$zstar=$imgarr[1][$i];//取出内容
                      $gul=$namearr[2][$i];
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
