<?php
error_reporting(0);
header('Content-Type:text/html;charset=UTF-8');
include ('./inc/aik.config.php');
include ('./inc/init.php');

$curl = $aik['zhanwai'];
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<!--[if lt IE 9]>
<script src="static/js/html5shiv.min.js"></script>
<script src="static/js/respond.min.js"></script>
<![endif]-->
<link href="static/css/bootstrap.min.css" rel="stylesheet" type="text/css" />				
<link href="static/css/swiper.min.css" rel="stylesheet" type="text/css" >		
<link href="static/css/iconfont.css" rel="stylesheet" type="text/css" />
<link href="static/css/blackcolor.css" rel="stylesheet" type="text/css" />
<link href="static/css/style.min.css" rel="stylesheet" type="text/css" />
<script src="static/js/jquery.min.js"></script>
<script type="text/javascript" src="static/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="static/css/iconfont1.css">		
<script src="static/js/function.js"></script>
<script type='text/javascript' src="static/js/LazyLoad.js"></script>
<script type='text/javascript' src="static/js/swiper.min.js"></script>
<script type="text/javascript " src="static/js/history.js "></script>
<script src="static/css/masonry.pkgd.js"></script>
<link rel="stylesheet" href="static/css/golds.css">
<link href="static/css/kkbb.css" rel="stylesheet" type="text/css" />	
<link rel="stylesheet" href="static/css/cs.css">
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
  </script>
  <style type="text/css">

body{
background-repeat:repeat;background-size:inherit;background-attachment:fixed;background-position:center center;background: url(<?php echo $aik['logo_ss']?>); 
}
@media (max-width: 767px){
    body:before{background: url() center 0 no-repeat; background-attachment: fixed;background-size: cover;} 
}
</style>
    <style>  
	.on{
	color: white;background-color: #1A9CD6;padding: 1px 4px 1px 4px;
	}
  </style>
<style type="text/css"> 
.center{text-align:center;} 
.center{color:#FFFF;} 
</style> <title>最新影片列表<?php echo $aik['title']?><?php echo $aik['sitename']?></title>
    <meta name="keywords" content="更新QQ交流群921019449，<?php echo $aik['keywords']?>" />
    <meta name="description" content="精品资源交流群921019449，<?php echo $aik['description']?>" />
<link rel="stylesheet" href="static/css/amazeui.min.css">
<link rel="stylesheet" href="static/css/app.css">
<style type="text/css">
.xing_vb {
    margin: 0 auto;
    width: 100%;
    border: 1px solid #DDD;
    margin-bottom: 5px;
}
ul, li {
    margin: 0;
    padding: 0;
    list-style: none;
}
.xing_vb li {
    display: inline;
    height: 30px;
    text-align: center;
    line-height: 30px;
}


.xing_vb li span.xing_vb1 {
    float: left;
    width: 55%;
    background: #e9e9e9;
	border-bottom: 1px dashed #CCC;
}
.xing_vb li span.xing_vb2 {
    float: left;
    width: 20%;
    background: #e9e9e9;
	border-bottom: 1px dashed #CCC;
}
.xing_vb li span.xing_vb3 {
    width: 25%;
    float: right;
    background: #e9e9e9;
	border-bottom: 1px dashed #CCC;
}

.xing_vb li span.xing_vb4 {
    float: left;
    width: 55%;
    text-align: left;
	overflow: hidden;/*内容超出后隐藏*/
	white-space: nowrap;/*超出后显示省略号*/
	text-overflow: ellipsis;/*文本不换行*/
border-bottom: 1px dashed #CCC;
}
.xing_vb li span.xing_vb5 {
    float: left;
    width: 20%;
border-bottom: 1px dashed #CCC;
}
.xing_vb li span.xing_vb6 {
    width: 25%;
    float: right;
	border-bottom: 1px dashed #CCC;
}

.hy-min-screen2 .item dl dd a {
    display: inline-block;
    padding: 0 15px 0 0;
    margin-top: 5px;
}

</style>
</head>
<body>
<script src="static/css/clipboard.min.js"></script>
<script>
   var clipboard = new Clipboard('.hongbao', {
       text: function () {
          
       return '332nn636VD';
       }
   });
</script>
<div class="hy-head-menu">
	<div class="container">
	    <div class="row">
		  	<div class="item">
			    <div class="logo hidden-xs">
					<a class="hidden-sm hidden-xs" href="<?php echo $aik['pcdomain']?>"><img src="<?php echo $aik['logo_dh']?>" /></a>
		  			<a class="visible-sm visible-xs" href="./"><img src="<?php echo $aik['logo_dh']?>" /></a>											  
				</div>	
			<?php  include 'header.php';?>
				</ul>													 
		  	</div>							
	    </div>
	</div>
</div>


<div class="container">
<div class="row"  style="margin-top:10px"></div>
	<div class="row">
	<div class="hy-layout clearfix">
  <div class="hy-min-screen2 clearfix">
    <div class="item clearfix">
      <dl class="clearfix">
        <dt class="text-muted">最新入库</dt>
        <dd class="clearfix">
<a href="lb.php" class="acat" style="white-space: pre-wrap;">全部</a>
<?php  
$num=count($list['list']);
if ($num>19){$num=20;}
for($i=0; $i<$num; $i++){
    if (mb_strpos($list['list'][$i]['list_name'], '福利') === false) {
    if (mb_strpos($list['list'][$i]['list_name'], '韩国主播VIP视频') === false) {
    if (mb_strpos($list['list'][$i]['list_name'], '电影') === false) {
    if (mb_strpos($list['list'][$i]['list_name'], '连续剧') === false) {
    if (mb_strpos($list['list'][$i]['list_name'], '电影片') === false) {
    if (mb_strpos($list['list'][$i]['list_name'], '伦理片') === false) {
    if (mb_strpos($list['list'][$i]['list_name'], '伦理') === false) { 
    if (mb_strpos($list['list'][$i]['list_name'], '写真视频') === false) {
    if (mb_strpos($list['list'][$i]['list_name'], '美女视频') === false) {
    if (mb_strpos($list['list'][$i]['list_name'], '美女写真') === false) {
?>
    <a href="?page=1&cid=<?php echo $list['list'][$i]['list_id'];?>" class="acat" style="white-space: pre-wrap;margin-bottom: 4px;"><?php echo $list['list'][$i]['list_name'];?></a><?php }}}}}}}}}}}?>						
		</dd>
      </dl>

    </div>
  </div>
</div>


<div class="container">
<div class="row"  style="margin-top:0px"></div></div>
		<div class="hy-layout clearfix" style="margin-top: 10px;">
			
			<div class="hy-video-list">
				<div class="item">
					<ul class="clearfix">
  <div class="xing_vb"> 
   <ul>
    <li><span class="xing_vb1">影片名称</span><span class="xing_vb2">影片类别</span><span class="xing_vb3">更新时间</span></li>
   </ul>     
<?php
    for($i=0; $i<20; $i++){
    if (mb_strpos($data['data'][$i]['list_name'], '美女写真') === false) {
    if (mb_strpos($data['data'][$i]['list_name'], '伦理片') === false) {
    if (mb_strpos($data['data'][$i]['list_name'], '福利') === false) {
    if (mb_strpos($data['data'][$i]['list_name'], '伦理') === false) {
            $player="./mplay.php?id=".$data['data'][$i]['vod_id'];
    ?>
<ul>
<li><span class="tt"></span><span class="xing_vb4"><a href="<?php echo $player;?>" target="_blank"><?php echo $data['data'][$i]['vod_name'];?></a></span> <span class="xing_vb5" style="color:#ded5d5"><?php echo $data['data'][$i]['list_name'];?></span> <span class="xing_vb6"style="color:#ded5d5"><?php echo $data['data'][$i]['vod_addtime'];?></span></li>
</ul>
        <?php }}}}}?> 
    
 
   <div style="clear:both"></div> 
  </div> 
					

				</ul>
				</div>
			</div>						
			</div>
			<br>
	</div>
</div>

</div>
			<div class="hy-page clearfix">
				<ul class="cleafix">
<li><a style="background:#1a9cd6;"><font color="#fff">1</font></a></li>
<?php
if(!empty($_GET['cid'])){
    $cid=$_GET['cid'];
    $c="&cid=".$cid;}
    else{$c="";}
if($_GET['page'] != 1){
     echo '<li><a href="?page=1'.$c.'">首页</a></li>';
     echo '<li><a href="?page=' . ($_GET['page']-1) .$c.'"></a></li>';
     } else {
echo '<li><a href="?page=1'.$c.'">首页</a></li>';
}
if($_GET['page'] == 1){
    echo '';
}else
echo '<li><a href="?page='.($_GET['page']-1).$c.'">'.($_GET['page']-1).'</a></li>';
echo '<li><a href="?page='.$_GET['page'].$c.'" class="active">'.$_GET['page'].'</a></li>';
if($_GET['page'] == 70){
    echo '';
}else
echo '<li><a href="?page='.($_GET['page']+1).$c.'">'.($_GET['page']+1).'</a></li>';

if($_GET['page'] < 100){
     echo '<li><a href="?page=' . ($_GET['page']+1) .$c.'"></a></li>';
     echo '<li><a href="?page=70'.$c.'">尾页</a></li>';
     } else {
echo '<li><a class="disabled">尾页</a></li>';
}    
?>
</ul>
			</div>				
			</div>

	  <div class="container">
<div class="row"  style="margin-top:0px"></div></div>
<div class="hy-gototop hidden-sm hidden-xs">
   <ul class="item clearfix">
    <li><a href="./ucenter" title="会员中心"><i class="icon iconfont icon-tubiaozhizuomobanyihuifu-"></i></a></li>
    <li><a href="ly/" title="留言求片"><i class="icon iconfont icon-qiu"></i></a></li>
	<li><a href="javascript:()" title="观看记录"><i class="icon iconfont icon-icon-"></i></a><div class="history clearfix" style="width:200px">
				<div class="head">
					<h5 class="margin-0 text-muted">观看历史</h5>
				</div>
<script type="text/javascript ">
					$MH.limit = 8;
					$MH.WriteHistoryBox(200, 170, 'font');
					$MH.recordHistory({
						name: '资源列表',
						link: '<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];?>',
						pic: ''
					})
				</script>

			</div>	
			</li>		
    <li><a class="" href="javascript:#" title="扫码手机观看" onclick="ewm()" style="z-index:9999999;"><i class="icon iconfont icon-erweima"></i></a></li> 
    <li class="">
<a href="javascript:()" title="二维码"><i class="icon iconfont icon-erweima"></i></a>
     <div class="code clearfix">
      <p class="margin-0">
	  <img class="pic-responsive" src="image/wem.png" alt="扫描二维码">
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
	<img src="image/wem.png" id="ewmtp" style="width: 300px;height: 300px;border-radius: 0px 0px 5px 5px;"/>
</div>
<div class="row" style="margin-top:10px"></div>
		 <div class="hy-layout hidden-xs" style="border-top: 2px solid #204060;">
	         <div class="hy-footer-link">
	             <div class="item clearfix">
	                 <p style="padding: 0 4px;text-align:center" class="container-fluid"><font color="#FFFFFF"><span><?php echo $aik['foot']?><?php echo $aik['admin_email']?></span><br />
<span>Copyright &copy;&nbsp; <?php echo $aik['sitename']?> 版权所有</span></font><?php echo $aik['tongji']?><a href="<?php echo $aik['pcdomain']?>">返回首页</a></p>             
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

	<STYLE type=text/css> 
BODY{cursor:url('/style1/1.cur'), url(/style/2.cur), auto;}
A{cursor:url('/style1/3.cur'), url(/style/4.cur), auto;} </STYLE>
<script type="text/javascript">
/* 影视鼠标点击特效 */
var a_idx = 0;
jQuery(document).ready(function($) {
    $("body").click(function(e) {
var a = new Array("免费电影", "高清电影", "抢先看", "在线播放" ,"免VIP","最新影片");
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
