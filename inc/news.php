<?php
//���´���ΪPHP���Ĵ��� �������� ����ֱ���ӿڲɼ� �����޸�
error_reporting(0);
header('Content-type:text/html;charset=utf-8');
$page=$_GET['page'];
if (empty($page)){$page=1;}//ҳ�� 
$info=file_get_contents('http://www.1905.com/list-p-catid-220.html?page='.$page');
//print_r($info);

$vname='#<a data-hrefexp="fr=wwwnews_newslist_news_([0-9]+)_201504" href="https://www.1905.com/news/([0-9]+)/([0-9]+).shtml" target="_blank" class="pic-url">[\s]+?<img src="(.*)" alt="(.*)" >[\s]+?</a>#';//ȡ������
$fname='#<p>(.*)</p>#';
$vimg='#<div class="rel-other clear"><span class="timer fl">(.*)</span>#';

$array = array();
preg_match_all($vname, $info,$namearr);
preg_match_all($vimg, $info,$imgarr);
preg_match_all($fname, $info,$fnamearr);
       for($i =0;$i<12;$i++){   
           $zimg=$namearr[4][$i];//ȡ��ͼƬ����
           $zname=$namearr[3][$i];//ȡ������
		   $fname=$fnamearr[1][$i];//ȡ��ʱ��
		   $fname=$namearr[5][$i];//ȡ������

$zstar=$imgarr[1][$i];//ȡ������
                      $gul=$namearr[2][$i];
           $tok=base64_encode($gul);
           //echo $zname;
           //echo $gul;//ȡ����������
           echo "
		   <div class='col-md-2 col-sm-3 col-xs-4'>
							<a class='videopic lazy' href='playm.php?url=$gul' title='' data-original='$zimg' style='background: url($zimg) no-repeat; background-position:50% 50%; background-size: cover;'><span class='play hidden-xs'></span><span class='score'>ֱ��</span></a>
							<div class='title'>
								<h5 class='text-overflow'><a href='playm.php?url=$gul'>$zname</a></h5>
							</div>
							<div class='subtitle text-muted text-muted text-overflow hidden-xs'>$zstar</div>
						</div>";
       }
	   ?>
