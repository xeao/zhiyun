<?php
include('./aik.config.php');
$dz=$_GET['dz'];
$seachh=file_get_contents('https://www.1905.com/news'.$dz);//��ȡҳ�����
$zz_sxx='#<h1 class="title">(.*)</h1>#';
$zz_nr='#<!--�������ͼ������-->[\s\S]+?<!-- ��ҳ start-->#';//����
$ke='#<meta content="(.*)" name="keywords" />#';
$des='#<meta content="(.*)" name="description" />#';
preg_match_all($zz_sxx,$seachh,$sarrr);//����
preg_match_all($zz_nr,$seachh,$sarrrr);//����
preg_match_all($ke,$seachh,$sarrrr1);//
preg_match_all($des,$seachh,$sarrrr2);//
$onee=$sarrr[1];//����
$onebt=$sarrrr[0];//����
$ks=$sarrrr1[1];//
$des=$sarrrr2[1];//
$string = $onebt[0];
$string = strip_tags($string, '<p><img>');
include('../zxnews.php');
?>
	<h1 class="myui-article__title"><?php echo $onee [0]?></h1>				
								<p class="myui-article__sub bottom-line"><span class="text-muted hidden-xs">���ߣ�</span><?php echo $aik_a_name;?><span class="split-line"></span><span class="text-muted hidden-xs">���ࣺ</span>Ӱ����Ѷ<span class="split-line"></span><span class="text-muted">������</span><span class="split-line"></span><span class="text-muted">ʱ�䣺</span></p>
								<div class="myui-article__content mt20">
<?php
echo $string;
?> 
								</div>							
							</div>
						</div>
					</div>	
					
						
				</div>
				<div class="col-md-wide-3 col-xs-1 myui-sidebar">
					<div class="myui-panel myui-panel-bg clearfix">
	<div class="myui-panel-box clearfix">
		<div class="myui-panel_bd col-pd">
			<ul class="myui-vodlist__media myui-panel-bg2 clearfix" style="padding: 20px;">
				<li>
					<div class="thumb">
						<a class="myui-vodlist__thumb square img-xs-130" style="background: url(<?php echo $records[0]['a_wximg'];?>);"></a>
