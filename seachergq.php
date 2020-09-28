<?php
include ('./inc/aik.config.php');
$link=$aik['pcdomain'];
?>
<?php
/**
 * template name: 搜索结果页面
 */

if (!$_GET['sousuo']) {
	$tiao=$aik['pcdomain'];
   echo "<meta http-equiv=refresh content='0; url=$tiao'>";
}

?>
<!DOCTYPE HTML>
<html>
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
<script src="static/js/function.js"></script>
<script type='text/javascript' src="static/js/LazyLoad.js"></script>
<script type='text/javascript' src="static/js/swiper.min.js"></script>
<script type="text/javascript " src="static/js/history.js "></script>
<script src="static/css/masonry.pkgd.js"></script>
<link rel="stylesheet" href="static/css/golds.css">
<link href="static/css/kkbb.css" rel="stylesheet" type="text/css" />	
<link rel="stylesheet" href="static/css/cs1.css">
<link href="static/css/gdicon.css" rel="stylesheet" type="text/css" />	
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
<title><?php echo $_GET['sousuo']?>搜索<?php echo $aik['title']?><?php echo $aik['sitename']?></title>
 <meta name="keywords" content="<?php echo $_GET['sousuo']?>，<?php echo $aik['keywords']?>" />
    <meta name="description" content="<?php echo $_GET['sousuo']?>，<?php echo $aik['description']?>" />
<!--[if lt IE 9]><script src="static/js/html5.js"></script><![endif]-->
</head>
<body class="vod-search">
<script src="static/css/clipboard.min.js"></script>
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
<link rel="stylesheet" href="static/css/iconfont.css">
<link rel="stylesheet" href="static/css/iconfont1.css">
<div class="hy-head-menu">
	<div class="container">
	    <div class="row">
		  	<div class="item">
			    <div class="logo hidden-xs">
					<a class="hidden-sm hidden-xs" href="<?php echo $aik['pcdomain']?>"><img src="<?php echo $aik['logo_dh']?>" /></a>
		  			<a class="visible-sm visible-xs" href="./"><img src="<?php echo $aik['logo_dh']?>" /></a>											  
				</div>	
	<?php  include 'head.php';?>		
				</ul>													 
		  	</div>							
	    </div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-9 col-sm-12 hy-main-content">
			<div class="hy-layout clearfix">
				<div class="hy-video-head">
					<span class="text-muted pull-right hidden-xs"></span>
                  <font color="#FFFFFF">
									<h4 class="margin-0">搜索到与<span class="text-color">“<?php echo $_GET['sousuo']?>”</span>相关的结果</h4>
				</div>

				<?php 
$zyso = file_get_contents(''.$aik['zhanwai8'].'?wd='.$_GET['sousuo'].''); 
$data = json_decode($zyso, true);
foreach($data["data"] as $i =>$name){
 $player="./playgq.php?id=".$data['data'][$i]['vod_id'];   
?>
<div class="hy-video-details active clearfix">
					<div class="item clearfix">
						<dl class="content">
							<dt><a class="videopic" href="<?php echo $player?>" style="background: url(<?php echo $data["data"][$i]["vod_pic"]; ?>) no-repeat; background-position:50% 50%; background-size: cover;"><span class="play hidden-xs"></span></a></dt>
							<dd class="clearfix">
							<div class="head">
								<h3><?php echo $data["data"][$i]["vod_name"]; ?></h3>
							</div>
							<div class="score">
								<div class="star">
									<span class="star-cur" id="score-0"></span>
								</div>
								<span class="branch"></span>
								<script type="text/javascript">
												var str = "0%" 
												document.getElementById("score-0").style.width = (str.replace(".", ""))
										    </script>
							</div>
							<ul>
								<li><span>更新时间：<?php echo $data["data"][$i]["vod_addtime"]; ?></span></li>
								<li><span>地区：<?php echo $data["data"][$i]["vod_area"]; ?></span></li>
                                <li>简介：</span><?php echo $data["data"][$i]["vod_content"]; ?></li>

							</ul>
							<div class="block">
								<a class="text-muted" href="<?php echo $player?>">查看详情 <i class="icon iconfont icon-right"></i></a>
							</div>
							</dd>
						</dl>
					</div>
				</div>
    <?php }  ?>


	</div>

<div class="container">
	<div class="row">
		<div class="col-md-9 col-sm-12 hy-main-content">
			<div class="hy-layout clearfix">
				<div class="hy-video-head">
					<span class="text-muted pull-right hidden-xs"></span>
                  <font color="#FFFFFF">
									<h4 class="margin-0">资源搜索<span class="text-color">线路二列表</span>相关的结果</h4>
				</div> 
<?php 
$zyso = file_get_contents(''.$aik['gonggao'].'?wd='.$_GET['sousuo'].''); 
$data = json_decode($zyso, true);
foreach($data["data"] as $i =>$name){
 $player="./splay.php?id=".$data['data'][$i]['vod_id'];   
?>
<div class="hy-video-details active clearfix">
					<div class="item clearfix">
						<dl class="content">
							<dt><a class="videopic" href="<?php echo $player?>" style="background: url(<?php echo $data["data"][$i]["vod_pic"]; ?>) no-repeat; background-position:50% 50%; background-size: cover;"><span class="play hidden-xs"></span></a></dt>
							<dd class="clearfix">
							<div class="head">
								<h3><?php echo $data["data"][$i]["vod_name"]; ?></h3>
							</div>
							<div class="score">
								<div class="star">
									<span class="star-cur" id="score-0"></span>
								</div>
								<span class="branch"></span>
								<script type="text/javascript">
												var str = "0%" 
												document.getElementById("score-0").style.width = (str.replace(".", ""))
										    </script>
							</div>
							<ul>
								<li><span>更新时间：<?php echo $data["data"][$i]["vod_addtime"]; ?></span></li>
								<li><span>地区：<?php echo $data["data"][$i]["vod_area"]; ?></span></li>
                                <li><i>简&nbsp;&nbsp;介&nbsp;：</i></span><?php echo $data["data"][$i]["vod_content"]; ?></li>

							</ul>
							<div class="block">
								<a class="text-muted" href="<?php echo $player?>">查看详情 <i class="icon iconfont icon-right"></i></a>
							</div>
							</dd>
						</dl>
					</div>
				</div>
    <?php }  ?>



				</div>
		</div>
		<div class="col-md-3 col-sm-12 hy-main-side hidden-sm hidden-xs">
			<div class="hy-layout clearfix">
              				<div class="hy-video-ranking side clearfix">
					<div class="head">
						<a class="text-muted pull-right" href="so.php?sousuo=<?php echo $_GET['sousuo']?>">更多 <i class="icon iconfont icon-right"></i></a>
						<h4><i class="icon iconfont icon-top text-color"></i> 最近更新</h4>
					</div>
					<div class="item">
						<ul class="clearfix">
					<?php include './inc/zxjx.php';?>		

						</ul>
					</div>
				</div>
				<div class="hy-video-ranking side clearfix">
					<div class="head">
						<a class="text-muted pull-right" href="movie.php">更多 <i class="icon iconfont icon-right"></i></a>
						<h4><i class="icon iconfont icon-top text-color"></i> 综艺排行榜</h4>
					</div>
					<div class="item">
						<ul class="clearfix">
					<?php include './inc/zxzy.php';?>

						</ul>
					</div>
				</div>
				<div class="hy-video-ranking side clearfix">
					<div class="head">
						<a class="text-muted pull-right" href="movie.php">更多 <i class="icon iconfont icon-right"></i></a>
						<h4><i class="icon iconfont icon-top text-color"></i> 动漫排行榜</h4>
					</div>
					<div class="item">
						<ul class="clearfix">
					<?php include './inc/zxdm.php';?>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	    var swiper = new Swiper('.hy-slide', {
	        pagination: '.swiper-pagination',
	        paginationClickable: true,
	        autoplay: 3000,
	    });	    
	    </script>
</font>
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
						name: '<?php echo $_GET['sousuo']?>',
						link: '<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];?>',
						pic: ''
					})
				</script>

			</div>	
			</li>		
    <!--<li><a class="" href="javascript:#" title="扫码手机观看" onclick="ewm()" style="z-index:9999999;"><i class="icon iconfont icon-erweima"></i></a></li>--> 
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
	<img src="image/ewm.png" id="ewmtp" style="width: 300px;height: 300px;border-radius: 0px 0px 5px 5px;"/>
</div>
<div class="row" style="margin-top:10px"></div>
		 <div class="hy-layout hidden-xs" style="border-top: 2px solid #204060;">
	         <div class="hy-footer-link">
	             <div class="item clearfix">
	                 <p style="padding: 0 4px;text-align:center" class="container-fluid"><font color="#FFFFFF"><span><?php echo $aik['foot']?><?php echo $aik['admin_email']?></span><br /><span>Copyright ©  <?php echo $aik['sitename']?> 版权所有</span></font>

<?php echo $aik['tongji']?><a href="<?php echo $aik['pcdomain']?>">返回首页</a>
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
		var url = "https://egame.qq.com/webapi/qrcode?content="+window.location.href;
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
