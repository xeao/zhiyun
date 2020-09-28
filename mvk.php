<?php
include ('./inc/aik.config.php');
$link=$aik['pcdomain'];
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta http-equiv="cache-control" content="no-siteapp">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">

<!--[if lt IE 9]>
<script src="static/js/html5shiv.min.js"></script>
<script src="static/js/respond.min.js"></script>
<![endif]-->
<link href="static/css/bootstrap.min.css" rel="stylesheet" type="text/css">				
<link href="static/css/swiper.min.css" rel="stylesheet" type="text/css">		
<link href="static/css/iconfont.css" rel="stylesheet" type="text/css">
<link href="static/css/blackcolor.css" rel="stylesheet" type="text/css">
<link href="static/css/style.min.css" rel="stylesheet" type="text/css">
<script src="static/js/jquery.min.js"></script>
<script type="text/javascript" src="static/js/bootstrap.min.js"></script>		
<script src="static/js/function.js"></script>
<script type='text/javascript' src="static/js/LazyLoad.js"></script>
<script type='text/javascript' src="static/js/swiper.min.js"></script>
<script type="text/javascript " src="static/js/history.js"></script>
<script src="static/js/masonry.pkgd.js"></script>
<link href="static/css/kkbb.css" rel="stylesheet" type="text/css">	
<link rel="stylesheet" href="static/css/cs1.css">
<link href="//cdn.staticfile.org/aplayer/1.10.1/APlayer.min.css" rel="stylesheet" type="text/css" />
<link href="//cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="static/css/gdicon.css" rel="stylesheet" type="text/css">	
<script>
    $(document).ready(function(){
        $(".up-ul a").each(function(){
            $this = $(this);
            if($this[0].href==String(window.location)){  
                $(".up-ul a").removeClass("on");
                $this.addClass("on");  
            }  
        });  
	        $(".up-ul2 a").each(function(){
            $this = $(this);
            if($this[0].href==String(window.location)){  
                $(".up-ul2 a").removeClass("on");
                $this.addClass("on");  
            }  
        }); 
	        $(".up-ul3 a").each(function(){
            $this = $(this);
            if($this[0].href==String(window.location)){  
                $(".up-ul3 a").removeClass("on");
                $this.addClass("on");  
            }  
        }); 
       $(".up-ul4 a").each(function(){
            $this = $(this);
            if($this[0].href==String(window.location)){  
                $(".up-ul4 a").removeClass("on");
                $this.addClass("on");  
            }  
        }); 
    });
  </script><title>在线音乐MV-<?php echo $aik['sitename']?></title>
<meta name="keywords" content="<?php echo $_GET['sousuo']?>，<?php echo $aik['keywords']?>" />
    <meta name="description" content="<?php echo $_GET['sousuo']?>，<?php echo $aik['description']?>" />
<!--[if lt IE 9]><script src="static/js/html5.js"></script><![endif]-->

<script language="javascript" type="text/javascript">
<!--
document.oncontextmenu=new Function('event.returnValue=false;');
document.onselectstart=new Function('event.returnValue=false;');
-->
  </script>
<script>
function onKeyDown()
{
 if ((event.keyCode==116)||(window.event.ctrlKey)||(window.event.shiftKey)||(event.keyCode==122))
 {
 event.keyCode=0;
 event.returnValue=false;
 }
}
</script>
<script>
function yxl() { 
if(window.event.altKey) 
{
window.event.returnValue=false;
}
}
document.onkeydown=yxl 
</script>

</head>
<body class="vod-type apptop">
<script src="static/js/clipboard.min.js"></script>
<script>
   var clipboard = new Clipboard('.hongbao', {
       text: function () {
          
       return '332nn636VD';
       }
   });
 function changeAction(){
var selectValue=document.getElementById('search_from').value;
document.forms[0].action=selectValue;
}
 function changeActionn(){
var url = document.getElementById('search_fromm').value;
    //更改form的action
    $("#mc-search").attr("action", url);
}
</script>
<link rel="stylesheet" href="static/css/iconfont1.css">
<div class="hy-head-menu">
	<div class="container">
	    <div class="row">
		  	<div class="item">
			    <div class="logo hidden-xs">
					<a class="hidden-sm hidden-xs" href="<?php echo $aik['pcdomain'];?>"><img src="<?php echo $aik['logo_dh']?>"></a>
		  			<a class="visible-sm visible-xs" href="./"><img src="<?php echo $aik['logo_dh']?>"></a>											  
				</div>	
				<?php  include 'head.php';?>
				</ul>													 
		  	</div>							
	    </div>
	</div>
</div>

<div class="container">
<div class="row" style="margin-top:10px"></div>
	<div class="row">
		<div class="hy-player clearfix">
			<div class="item">
				<div class="col-sm-12 padding-0">
				<ul class="stui-vodlist clearfix">

<?php
ini_set("error_reporting","E_ALL & ~E_NOTICE");
header("Content-type: text/html;charset=utf-8");
date_Default_TimeZone_set("PRC");

//分割线内是可以修改的部分
//*******************************我是淫荡的分割线*******************************//

$bati = "";//网站标题

//*******************************我是淫荡的分割线*******************************//

//下面代码请勿修改，否则可能会出现致命错误！
//下面代码请勿修改，否则可能会出现致命错误！
//下面代码请勿修改，否则可能会出现致命错误！
$ururll = "//".$_SERVER["SERVER_NAME"].$_SERVER['PHP_SELF'];
$weburl = str_replace("index.php","",$ururll);//主页地址
$error = "<script>alert('地址错误或者音乐不存在!');top.location.href='?home'</script>";
$no_img = "http://y.gtimg.cn/mediastyle/global/img/mv_300.png";//mv未加载图片
if(isset($_GET['v'])){
//*******************************播放页面*******************************//
	$le = substr($_GET['v'],-11,-10);
	$id = substr($_GET['v'],-10).substr($_GET['v'],0,-11);
	switch ($le) {
		case "V":
		//*******************************视频播放页面*******************************//
		$x_url = "http://m.kugou.com/app/i/mv.php?cmd=100&ext=mp4&hash=".$id;
		$data = curl_get($x_url);
		preg_match('/songname":"(.*?)",/is', $data, $nm2);
		preg_match('/singer":"(.*?)",/is', $data, $nm1);
		preg_match('/mvicon":"(.*?)",/is', $data, $img);
		preg_match_all('/downurl":"(.*?)",/is', $data, $mp4);
		preg_match_all('/backupdownurl":\["(.*?)"\]/is', $data, $bmp4);
		$mv_name = $nm1[1]." - ".$nm2[1];
		$mv_url = stripslashes($mp4[1][0]);
		$title = $mv_name." 在线免费试听下载,".$nm1[1]."歌曲".$nm2[1]."mp4下载,".$nm1[1]."专辑 ,".$nm2[1]."(单曲),正版试听下载_".$bati;
		$song_img = stripslashes(str_replace("{size}","400",$img[1]));
		$a=array("流畅","标清","高清","超清");
		$main = "<script type=\"text/javascript\"> function player(url) { var frameid = Math.random(); window.webmvplayer = '<video width=\"100%\" height=\"100%\" controls=\"controls\" autoplay=\"autoplay\" poster=\"$song_img\" object-fit:fill><source src=\"'+url+'\" type=\"video/mp4\"><embed id=\"webmvplayer\" name=\"webmvplayer\" src=\"http://static.kgimg.com/common/swf/video/videoPlayer.swf\" height=\"100%\" width=\"100%\" allowscriptaccess=\"always\" quality=\"high\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" flashvars=\"skinurl=http%3a%2f%2fstatic.kgimg.com%2fcommon%2fswf%2fvideo%2fskin.swf&amp;aspect=true&amp;url='+url+'&amp;autoplay=true&amp;fullscreen=true&amp;initfun=flashinit\" type=\"application/x-shockwave-flash\" wmode=\"Transparent\" allowfullscreen=\"true\"></embed></video><script>window.onload = function() { parent.document.getElementById(\''+frameid+'\').height = document.body.scrollWidth*0.565+\'px\'; }<'+'/script>';	document.write('<iframe id=\"'+frameid+'\" src=\"javascript:parent.webmvplayer;\" frameBorder=\"0\" scrolling=\"no\" width=\"100%\" width=\"1000px\" frameborder=\"0\" vsspace=\"0\" hspace=\"0\" marginwidth=\"0\" marginheight=\"0\"></iframe>'); } </script><div class=\"main\"><h2 style=\"margin-bottom:10px;width:100%;white-space:nowrap;overflow:hidden;\"><a href=\"?v=".$_GET['v']."\" title=\"".$mv_name."\">".$mv_name."</a></h2></div>
		<div style=\"text-align:center;max-width:640px;min-width:320px;margin:10px auto;background-color:#fff;\"><script type=\"text/javascript\">player('".$mv_url."');</script></div>".mv().random();
		break;
		default:
		exit($error);
	}
}elseif(isset($_GET['ac'])){
//*******************************搜索页面*******************************//
	$w = htmlspecialchars($_GET['ac']);
	$title = $w."的搜索结果,".$bati;
	$url = "http://mobilecdn.kugou.com/api/v3/search/song?keyword=".$w."&page=1&pagesize=40";
	$data = curl_get($url);
	$json = json_decode($data,true);
	$count_json = count($json['data']['info']);
	$mp3_main = "<div class=\"plr10\"><div id=\"wlsong\"><ul>";
	$mv_main = "<ul class=\"mv_list\">";;
	for($i = 0; $i < $count_json; $i++){
		$nnmm = $json['data']['info'][$i]['filename'];
		$name = str_ireplace($w,"<font color='red'>".$w."</font>",$nnmm);//关键字红色显示
		$hash = $json['data']['info'][$i]['hash'];
		$mvhash = $json['data']['info'][$i]['mvhash'];

		if(!empty($mvhash)){
			$mvhref = substr($mvhash,10)."V".substr($mvhash,0,10);
			$mpic = "http://imge.kugou.com/mvpic/".substr($mvhash,0,2)."/".substr($mvhash,2,2)."/".$mvhash.".jpg";
			$mv_main .= "<li><a href=\"?v=".$mvhref."\" ><img src=\"".$mpic."\" title=\"".$nnmm."\"></a><span><a href=\"?v=".$mvhref."\"  title=\"".$nnmm."\">".$name."</a></span></li>";
		}
	}
	$mp3_main .= "</ul></div></div>";
	$mv_main .= "</ul>";
	if(empty($count_json)){
	$main = "<div class=\"main\">没有找到关键词：【<font color='red'>".$w."</font>】的任何mp3音频及MV视频，请换个关键词从新搜索！</div>";
	}else{
	$main = "<div class=\"main\">关键词：【<font color='red'>".$w."</font>】的搜索结果</div>".$mp3_main.$mv_main;
	}
	$main .= "<script type=\"text/javascript\" src=\"//gitee.com/byihan/vagrancy/raw/master/c.js\" charset=\"utf-8\"></script>";	
}elseif(isset($_GET['m'])){
//*******************************MV页面*******************************//
	$p=$_GET['m'];
	if(preg_match("/^\+?[1-9][0-9]*$/",$p)){
		$mvurl = "http://www.kugou.com/mvweb/html/index_9_".$p.".html";
		$data = curl_get($mvurl);
		preg_match('/id="mvNum">(.*?)<\/label>/is',$data,$total);
		preg_match('/class="mvlist">(.*?)<\/div>/is',$data,$mvlist);
		$num = "20";
		$nums = $total[1];
		$pnum = ceil($nums/$num);
		if($p > $pnum){	exit($error); }
		$main = "<div class=\"main\"><div style=\"float:left;\">热舞MV大放送！</div><div style=\"float:right;\"><a class=\"btn\">共".$pnum."页</a>&nbsp;&nbsp;<select  onchange=\"javascript:location.href=this.options[this.selectedIndex].value\"><option disabled selected hidden>第".$p."页</option>";
		for($i = $p-4; $i<$p+5; $i++){
			if(($i>0)&&($i<=$pnum)){
				$main .= "<option value=\"?m=".$i."\" >第".$i."页</option>";
			}
		}
		$main .= "</select></div></div>";
		$title = "热舞MV大放送 第".$p."页 - ".$bati;
		$main .= "<ul class=\"mv_list\">";
		preg_match_all("/<span>(.*)<\/span>/", $mvlist[1], $name);
		preg_match_all('/src="(.*)"/', $mvlist[1], $img);
		for($i = 0; $i < 18; $i++){
			$gq = $name[1][$i];
			$mpic = $img[1][$i];
			$hash = substr(strrchr($mpic,"/"),1,32);
			$href = substr($hash,10)."V".substr($hash,0,10);
			if($mpic){
				$main .= "<li><a href=\"?v=".$href."\" title=\"".$gq."\"><img src=\"".$mpic."\" onerror=\"this.src='".$no_img."'\"><span>".$gq."</span></a></li>";
			}
		}
		$main .= "</ul></div></div>";
	}else{
		exit($error);
	}
}else{
	$title = $bati;
	$main = mv().bang();
}
function mv(){
	global $no_img;
	$output = "<div class=\"main\"><div class=\"lr\">热门推荐 - 刷新自动换</div><div class=\"fr\"><a href=\"?m=1\"><i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></a></div></div><div class=\"mv_list\">";
	$kbang = "http://www.kugou.com/mvweb/html/index_13_".rand(1,300).".html";
	$data = curl_get($kbang);
	preg_match('/class="mvlist">(.*?)<\/div>/is',$data,$mvlist);
	preg_match_all("/<span>(.*)<\/span>/", $mvlist[1], $name);
	preg_match_all('/src="(.*)"/', $mvlist[1], $img);
	$dd = rand(0,14);
	for($i = 0; $i < 15; $i++){
		$gq = $name[1][$i];
		$mpic = $img[1][$i];
		$hash = substr(strrchr($mpic,"/"),1,32);
		if($mpic){
			if($i==$dd){
				$href = "";
			}else{
				$href = "?v=".substr($hash,10)."V".substr($hash,0,10);
			}
			$output .= "<li><a href=\"".$href."\"title=\"".$gq."\"><img src=\"".$mpic."\" onerror=\"this.src='".$no_img."'\"><span>".$gq."</span></a></li>";

		}
	}
	$output .= "</div>";
return $output;
}
function bang(){
	global $no_img;
	$output = "<div class=\"main\"><div class=\"lr\">热门推荐 - 刷新自动换</div><div class=\"fr\"><a href=\"?m=1\"><i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></a></div></div><div class=\"mv_list\">";
	$kbang = "http://www.kugou.com/mvweb/html/index_13_".rand(1,300).".html";
	$data = curl_get($kbang);
	preg_match('/class="mvlist">(.*?)<\/div>/is',$data,$mvlist);
	preg_match_all("/<span>(.*)<\/span>/", $mvlist[1], $name);
	preg_match_all('/src="(.*)"/', $mvlist[1], $img);
	$dd = rand(0,14);
	for($i = 0; $i < 15; $i++){
		$gq = $name[1][$i];
		$mpic = $img[1][$i];
		$hash = substr(strrchr($mpic,"/"),1,32);
		if($mpic){
			if($i==$dd){
				$href = "";
			}else{
				$href = "?v=".substr($hash,10)."V".substr($hash,0,10);
			}
			$output .= "<li><a href=\"".$href."\" title=\"".$gq."\"><img src=\"".$mpic."\" onerror=\"this.src='".$no_img."'\"><span>".$gq."</span></a></li>";

		}
	}
	$output .= "</div>";
return $output;
}
function random(){
	global $no_img;
	$output = "<div class=\"main\"><div class=\"lr\">热门推荐 - 刷新自动换</div><div class=\"fr\"><a href=\"?m=1\"><i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></a></div></div><div class=\"mv_list\">";
	$kbang = "http://www.kugou.com/mvweb/html/index_13_".rand(1,300).".html";
	$data = curl_get($kbang);
	preg_match('/class="mvlist">(.*?)<\/div>/is',$data,$mvlist);
	preg_match_all("/<span>(.*)<\/span>/", $mvlist[1], $name);
	preg_match_all('/src="(.*)"/', $mvlist[1], $img);
	$dd = rand(0,14);
	for($i = 0; $i < 15; $i++){
		$gq = $name[1][$i];
		$mpic = $img[1][$i];
		$hash = substr(strrchr($mpic,"/"),1,32);
		if($mpic){
			if($i==$dd){
				$href = "";
			}else{
				$href = "?v=".substr($hash,10)."V".substr($hash,0,10);
			}
			$output .= "<li><a href=\"".$href."\" title=\"".$gq."\"><img src=\"".$mpic."\" onerror=\"this.src='".$no_img."'\"><span>".$gq."</span></a></li>";

		}
	}
	$output .= "</div>";
return $output;
}
function curl_get($url){
	$temp = parse_url($url);
	$header = array (
	"Host: {$temp['host']}",
	"Referer: http://{$temp['host']}/"
	);
    $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate');
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    $output = curl_exec($ch);
    curl_close($ch);
return $output;
}
?>
<link href="//cdn.staticfile.org/aplayer/1.10.1/APlayer.min.css" rel="stylesheet" type="text/css" />
<link href="//cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<style type="text/css">
/* 内容 */
.main{background-color:#fff;height:60px;line-height:60px;text-align:left;padding-left:10px;padding-right:10px;max-width:620px;min-width:300px;margin:10px auto;}#wlsong ul{color:#0763BF;padding:0;}#wlsong ul li{border-bottom: 1px solid #F2F2F2;height:60px;line-height:60px;overflow:hidden}#wlsong ul li img{margin:10px;margin-top:20px;float:left;width:41px;height:41px;}.numb{float:left;display:inline-block;text-align:left;height:60px;overflow:hidden;text-indent: 0.5em;width:40px;color:#FA3B00;}.gname{width:65%;display:inline-block;text-align:left;height:60px;overflow:hidden;color: #044CB8;float:left;}#wlsong ul li i{line-height:60px;color:#5888D0;margin-right:10px;}a:hover.gname{color:#ff0000;}.h1{border-bottom:1px solid #D9DEE1;color:#FA3B00;padding:10px;}.d_w{text-align:center;height:34px;line-height:34px;color:#fff;}
/* MV */
.mv_list{background-color:#fff;max-width:640px;min-width:320px;overflow:hidden;clear:both;margin:0 auto;padding:0;text-align:center;}.mv_list a:hover{color:#ff0000;}.mv_list li{display:inline-block;width:29%;margin:10px 2%;}.mv_list span{float:left;overflow:hidden;width:100%;text-overflow: ellipsis;white-space:nowrap;height:24px;line-height:28px;}.mv_list img{width:100%;border-radius:10px;}.btn{padding:1px 5px;border-radius:5px;background-color:#0795FA;color:#fff;height:26px;line-height:20px;}.btn:hover{background-color:#0795FA;color:#fff;cursor:pointer;}select{height:26px;border-radius:5px;background-color:#0b0905;color:#fff;}.plr10{padding-left:10px;padding-right:10px;max-width:620px;min-width:300px;margin:10px auto;background-color:#fff;}.aplayer{margin:0;box-shadow:0;max-width:640px;min-width:320px;margin:10px auto;background-color:#fff;}
</style>
<script type="text/javascript" src="//gitee.com/byihan/vagrancy/raw/master/aplayer.js"></script>
</head>
<body>
<div id="header">
<!--[if IE]><div style="background:rgb(255,255,225);text-align:center;color:#333;padding:2px 20px;font-size:14px;overflow:hidden;height:40px;line-height:40px;">温馨提示：您的浏览器版本过低，请您升级至更快速安全的Chrome内核浏览器！<a style="text-decoration:none;color:#f00;" href="https://jifendownload.2345.cn/jifen_2345/p8_ki6x_v2.0.exe">点击下载最新版安全浏览器</a></div><![endif]-->

<?php echo $main;?>
<script type="text/javascript">
function getkey(){
	if(get_key.keyword.value==""){
		alert("请输入歌曲名称!");
		get_key.keyword.focus();
		return false;
	}
}
function opens(){
	if(showdiv = document.getElementById('menu_box').style.display=='none'){
		document.getElementById('menu_box').style.display='block';
	}else{
		document.getElementById('menu_box').style.display='none';
	}
}
</script>
</div>
<div class="footer clearfix" id="xlu" style="display:none; height:auto"><span class="text-muted"></span></div></div>
 <div class="footer clearfix" id="xlu" style="display:inline-block; height:auto; background:none">
<span class="text-muted" id="xlus">
						</span></div>
	</div>
</div></div>
<div class="hy-gototop hidden-sm hidden-xs">
   <ul class="item clearfix">
    <li><a href="./" title="会员中心"><i class="icon iconfont icon-tubiaozhizuomobanyihuifu-"></i></a></li>
    <li><a href="./ly/" title="留言求片"><i class="icon iconfont icon-qiu"></i></a></li>
	<li><a href="javascript:()" title="观看记录"><i class="icon iconfont icon-icon-"></i></a><div class="history clearfix" style="width:200px">
				<div class="head">
					<h5 class="margin-0 text-muted">观看历史</h5>
				</div>
<script type="text/javascript ">
					$MH.limit = 8;
					$MH.WriteHistoryBox(200, 170, 'font');
					$MH.recordHistory({
						name: '在线音乐',
						link: '<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].''.$_SERVER['QUERY_STRING'];?>',
						pic: ''
					})
				</script>

			</div>	
			</li>		
   <!-- <li><a class="" href="javascript:#" title="扫码手机观看" onclick="ewm()" style="z-index:9999999;"><i class="icon iconfont icon-erweima"></i></a></li> -->
    <li class="">
<a href="javascript:()" title="二维码"><i class="icon iconfont icon-erweima"></i></a>
     <div class="code clearfix">
      <p class="margin-0">
	  <img class="pic-responsive" src="image/ewm.png" alt="扫描二维码">
	  </p>
     </div>
	 </li> 
    <li><a data-toggle="tooltip" data-placement="top" class="" href="javascript:scroll(0,0)" title="TOP"><i class="icon iconfont icon-top02"></i></a></li>   
	</ul>
  </div>
<?php  include 'footer.php';?>    
	</div>
	<div style="position:fixed;width:300px;height:350px;top:50%;left:0%;margin-left:-150px;margin-top:-175px;display: none;z-index: 9999999;" id="gbewm" onclick="ewmgb()">
	<div style="text-align:center;line-height: 50px;background-color: #2db2ea;color: #fff;font-size: 20px;font-weight: bold;border-radius: 5px 5px 0px 0px;">扫码二维码，手机观看！</div>
	<img src="image/ewm.png" id="ewmtp" style="width: 300px;height: 300px;border-radius: 0px 0px 5px 5px;">
</div>
<div class="row" style="margin-top:10px"></div>
		 <div class="hy-layout hidden-xs" style="border-top: 2px solid #204060;">
	         <div class="hy-footer-link">
	             <div class="item clearfix">
	                 <p style="padding: 0 4px;text-align:center" class="container-fluid"><font color="#FFFFFF"><span><?php echo $aik['foot']?><?php echo $aik['admin_email']?> </span><br><span>Copyright ©  <?php echo $aik['sitename']?> 版权所有</span></font>
<?php echo $aik['tongji']?>
<script type="text/javascript" src="static/js/z_stat-5665993_5665993.js"></script><a href="<?php echo $aik['pcdomain'];?>">返回首页</a>
<script src="static/js/eord_cc-1599.js"></script>
</p>             
<div class="center"> 
<span id="sitetime">
<script language="javascript">
    function siteTime(){
        window.setTimeout("siteTime()", 1000);
        var seconds = 1000;
        var minutes = seconds * 60;
        var hours = minutes * 60;
        var days = hours * 24;
        var years = days * 365;
        var today = new Date();
        var todayYear = today.getFullYear();
        var todayMonth = today.getMonth()+1;
        var todayDate = today.getDate();
        var todayHour = today.getHours();
        var todayMinute = today.getMinutes();
        var todaySecond = today.getSeconds();
        /* Date.UTC() -- 返回date对象距世界标准时间(UTC)1970年1月1日午夜之间的毫秒数(时间戳)
        year - 作为date对象的年份，为4位年份值
        month - 0-11之间的整数，做为date对象的月份
        day - 1-31之间的整数，做为date对象的天数
        hours - 0(午夜24点)-23之间的整数，做为date对象的小时数
        minutes - 0-59之间的整数，做为date对象的分钟数
        seconds - 0-59之间的整数，做为date对象的秒数
        microseconds - 0-999之间的整数，做为date对象的毫秒数 */
        var t1 = Date.UTC(2018,06,01,00,00,00); //北京时间2016-12-1 00:00:00
        var t2 = Date.UTC(todayYear,todayMonth,todayDate,todayHour,todayMinute,todaySecond);
        var diff = t2-t1;
        var diffYears = Math.floor(diff/years);
        var diffDays = Math.floor((diff/days)-diffYears*365);
        var diffHours = Math.floor((diff-(diffYears*365+diffDays)*days)/hours);
        var diffMinutes = Math.floor((diff-(diffYears*365+diffDays)*days-diffHours*hours)/minutes);
        var diffSeconds = Math.floor((diff-(diffYears*365+diffDays)*days-diffHours*hours-diffMinutes*minutes)/seconds);
        document.getElementById("sitetime").innerHTML="本站已运行"+diffYears+" 年 "+diffDays+" 天 "+diffHours+" 小时 "+diffMinutes+" 分钟 "+diffSeconds+" 秒";
    }
    siteTime();	
</script>
</span>
</div>				 
               </div>
			 </div>
	     </div>
<script type="text/javascript" charset="utf-8">
    $(function() {
        $(".videopic.lazy").lazyload({effect: "fadeIn"});  
        $("[data-toggle='tooltip']").tooltip();
    });
	function ewm(){
		var url = "http://qr.liantu.com/api.php?text="+window.location.href;
		$("#ewmtp").attr('src',url);
		$("#gbewm").css("display","block");
		$("#gbewm").animate({left:'50%'});
	}
	function ewmgb(){
		$("#gbewm").animate({left:'100%'});
		$("#gbewm").css("display","none");
	}
</script>	
<div style="display:none;">

</div>
<!--百度自动推送-->


<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>

	<style type="text/css"> 
BODY{cursor:url('static/image/1.jpg'), url(static/image/2.jpg), auto;}
A{cursor:url('static/image/3.jpg'), url(static/image/4.jpg), auto;} </style>
<script type="text/javascript">
/* 影视鼠标点击特效 */
var a_idx = 0;
jQuery(document).ready(function($) {
    $("body").click(function(e) {
var a = new Array("免费电影", "高清电影", "抢先看", "在线播放" ,"免VIP","最新影视");
var $i = $("<span/>").text(a[a_idx]);
        a_idx = (a_idx + 1) % a.length;
var x = e.pageX,
        y = e.pageY;
        $i.css({
"z-index": 999999999999999999999999999999999999999999999999999999999999999999999,
"top": y - 20,
"left": x,
"position": "absolute",
"font-weight": "bold",
"color": "#ff6651"
        });
        $("body").append($i);
        $i.animate({
"top": y - 180,
"opacity": 0
        },
        1500,
function() {
            $i.remove();
        });
    });
});
</script>
  <script>
function fuckyou(){
window.close(); 
window.location="about:blank"; 
}

function click(e) {
if (document.all) {
  if (event.button==2||event.button==3) { 
alert("欢迎光临寒舍，有什么需要帮忙的话，请与站长联系！谢谢您的合作！！！");
oncontextmenu='return false';
}

}
if (document.layers) {
if (e.which == 3) {
oncontextmenu='return false';
}
}
}
if (document.layers) {
fuckyou();
document.captureEvents(Event.MOUSEDOWN);
}
document.onmousedown=click;
//document.oncontextmenu = new Function("return false;")
document.onkeydown =document.onkeyup = document.onkeypress=function(){ 
if(window.event.keyCode == 123) { 
fuckyou();
window.event.returnValue=false;
return(false); 
} 
}
</script>
</body>
</html>

