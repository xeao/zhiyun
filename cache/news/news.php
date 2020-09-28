<?php include('aik.config.php');
$page=$_GET['page'];
$seach='http://www.1905.com/list-p-catid-220.html?page='.$page;
mkdir('./cache');
mkdir('./cache/news');
$gxpd=time()-filemtime('./cache/news/'.md5($seach));
if($gxpd>3*60*60){
$rurl=curl_file_get_contents($seach);
file_put_contents('./cache/news/'.md5($seach),gzdeflate($rurl));
}
$rurl=gzinflate(file_get_contents('./cache/news/'.md5($seach)));

/*

知识记录：[\s]+? 正则匹配html 过滤带有 空格 换行 内容 


<a data-hrefexp="fr=wwwnews_newslist_news_0_201504" href="https://www.1905.com/news/20190909/1407159.shtml" target="_blank" class="pic-url">
                                        <img src="http://image11.m1905.cn/uploadfile/2019/0909/thumb_1_150_100_20190909095419154660.jpg" alt="新片价格有望突破？约翰尼·德普亮相多伦多电影节" >
                                    </a>
*/
//$szz='#<a data-hrefexp="fr=wwwnews_newslist_news_([0-9])_201504" href="http://www.1905.com/news/([0-9])/([0-9]).shtml" target="_blank" class="pic-url">#';
//$szz='#<a data-hrefexp="fr=wwwnews_newslist_news_(.*)_201504" href="http://www.1905.com/news/(.*)/(.*).shtml" target="_blank" class="pic-url">[\s]+?<img src="(.*)" alt="(.*)" >[\s]+?</a>#';
$szz='#<a data-hrefexp="fr=wwwnews_newslist_news_([0-9]+)_201504" href="https://www.1905.com/news/([0-9]+)/([0-9]+).shtml" target="_blank" class="pic-url">[\s]+?<img src="(.*)" alt="(.*)" >[\s]+?</a>#';
$szz1='#<p>(.*)</p>#';
$sj='#<div class="rel-other clear"><span class="timer fl">(.*)</span>#';
preg_match_all($szz,$rurl,$sarr);
preg_match_all($szz1,$rurl,$sarr1);
preg_match_all($sj,$rurl,$sarr2);
$one=$sarr[5];//标题
$one1=$sarr[2];//地址
$one2=$sarr[3];//地址
$one3=$sarr[4];//图片
$nr=$sarr1[1];//内容
$sj=$sarr2[1];//时间
//print_r($sarr);
include('news/news.php');?>
