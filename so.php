<?php
include ('./inc/aik.config.php');
$link=$aik['pcdomain'];
?>
<!DOCTYPE HTML>
<html>
<head>

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
<link href="cs/zy.css" rel="stylesheet" type="text/css" />

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
<link rel="stylesheet" href="static/css/golds.css">
<script type="text/javascript" src="js/sub_res.js"></script>
<script type="text/javascript" src="js/submit_res.js"></script>
<script type="text/javascript" src="js/jquery.autocomplete.js"></script>
<link href="static/css/kkbb.css" rel="stylesheet" type="text/css">	
<link rel="stylesheet" href="static/css/cs1.css">
<link href="static/css/gdicon.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
	$(".stui-header__user li,.stui-header__menu li").click(function(){
		$(this).find(".dropdown").toggle();
	});
	$(".open-search").click(function(){
		var Seacrh=$(".stui-header__search");
		Seacrh.addClass("active").siblings().hide();
		Seacrh.find(".form-control").focus();
		$(".search-close").click(function(){
			Seacrh.removeClass("active").siblings().show();
		});
	});
</script>
<!--head-->
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
  </script><title>全网影片资源聚合搜索|<?php echo $aik['sitename']?></title>
<meta name="keywords" content="<?php echo $_GET['sousuo']?>，<?php echo $aik['keywords']?>" />
    <meta name="description" content="<?php echo $_GET['sousuo']?>，<?php echo $aik['description']?>" />
<!--[if lt IE 9]><script src="static/js/html5.js"></script><![endif]-->
</head>
<body>
<script src="static/js/masonry.pkgd1.js"></script>
<style>

</style>
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
<div class="hy-layout clearfix" style="margin-top: 10px;">


		


<div class="container">
<div class="row">
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel-box">
			<div class="hy-video-head" style=" text-align: center;">
				<p class="text-center"><a href="so.php" title="全网搜"><img src="<?php echo $aik['logo_dh']?>" width="200" height="133" alt="全网搜"></a></p>
				<h4 class="margin-0"><span style="color:#F05D2E;">请选择下方<span style="color:red">【资源网】</span>进行搜索</span></h4>
					<div class="col-md-1"></div>
							<div class="row" style="padding-left: 15px; padding-right: 15px;">
                                <div class="col-md-2"></div>
                                    <div class=" col-md-4">
										<div class="input-group">
                                        <div class="input-group-addon">影片名称：</div>
										<input tabindex="2" class="form-control searchall" id="searchs" name="sousuo" type="text" placeholder="输入影片关键词" value="<?php echo $_GET['sousuo']?>" required="required" onkeydown='if(event.keyCode==13){cu.click()}'>
										</div>
                                    </div>  
                                    <div class=" col-md-4">
                                        <div class="input-group">
                                            <select style="color:blue;" name="mode" id="mode" class="form-control">
												<option value="">▼&nbsp;==请点击选择==&nbsp;▼</option>
												<option value="<?php echo $aik['wx_ad']?>seacher.php?sousuo=">默认资源搜索&nbsp;&nbsp;▼</option>
												<option value="<?php echo $aik['wx_ad']?>seacherzd.php?sousuo=">最大资源站&nbsp;&nbsp;▼</option>
												<option value="<?php echo $aik['wx_ad']?>seacherky.php?sousuo=">酷云资源站&nbsp;&nbsp;▼</option>
                                              	<option value="<?php echo $aik['wx_ad']?>seacheryj.php?sousuo=">永久资源站&nbsp;&nbsp;▼</option>
                                              	<option value="<?php echo $aik['wx_ad']?>seacherwl.php?sousuo=">卧龙资源站&nbsp;&nbsp;▼</option>
                                              	<option value="<?php echo $aik['wx_ad']?>seacherjsy.php?sousuo=">极速云资源站&nbsp;&nbsp;▼</option>
												<option value="<?php echo $aik['wx_ad']?>seacherkb.php?sousuo=">酷播资源站&nbsp;&nbsp;▼</option>
												<option value="<?php echo $aik['wx_ad']?>seachersb.php?sousuo=">速播资源站&nbsp;&nbsp;▼</option>
												<option value="<?php echo $aik['wx_ad']?>seacherzk.php?sousuo=">最快资源站&nbsp;&nbsp;▼</option>
												<option value="<?php echo $aik['wx_ad']?>seacherok.php?sousuo=">OK资源站&nbsp;&nbsp;▼</option>
												<option value="<?php echo $aik['wx_ad']?>seacherbw.php?sousuo=">百万资源站&nbsp;&nbsp;▼</option>
												<option value="<?php echo $aik['wx_ad']?>seacher131.php?sousuo=">131资源站&nbsp;&nbsp;▼</option>
												<option value="<?php echo $aik['wx_ad']?>seacher.php?sousuo=">135资源站&nbsp;&nbsp;▼</option>
												<option value="<?php echo $aik['wx_ad']?>seacher156.php?sousuo=">156资源站&nbsp;&nbsp;▼</option>
												<option value="<?php echo $aik['wx_ad']?>seacherbj.php?sousuo=">八戒资源站&nbsp;&nbsp;▼</option>
												<option value="<?php echo $aik['wx_ad']?>seacherdb.php?sousuo=">豆瓣资源站&nbsp;&nbsp;▼</option>
												<option value="<?php echo $aik['wx_ad']?>seacherzx.php?sousuo=">最新资源站&nbsp;&nbsp;▼</option>
												<option value="<?php echo $aik['wx_ad']?>seachergq.php?sousuo=">高清资源站&nbsp;&nbsp;▼</option>
                                            </select>
                                            <span class="input-group-btn "> 
												<button id="cu" class="btnn btn-danger" onclick="sub2()"> &nbsp; 搜 &nbsp; 索 &nbsp; </button>
                                            </span>
                                        </div><!-- /input-group -->
                                    </div>
                                        <div class="col-md-2"></div>
                            </div>
                                <p style="text-align: center; margin: 15px 0 10px 0;"><span style="color:#d9534f; padding: 5px;">温馨提示：请输入片名关键字进行搜索，点击资源站选择相关的资源平台进行搜索！</span></p>	
                                </div>
                                <div class="stui-pannel stui-pannel-bg clearfix">
	<div class="single-strong" style="color: #333;"><a href="movie.php" title="今日电影排行榜">今日电影排行榜</a></div>
			
<div class="stui-pannel_bd clearfix">
			<ul class="stui-vodlist clearfix">
			</ul>
</div>
	<ul class="wprm">
	<b>
<?php
	$queryURL = "http://top.baidu.com/buzz?b=26&c=1&fr=topcategory_c1";
	$useragent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)";
	$header = array("Accept-Language: zh-cn", "Connection: Keep-Alive", "Cache-Control: no-cache");
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_REFERER, $queryURL);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_URL, $queryURL);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 6);
	$result = curl_exec($ch);
	$result = mb_convert_encoding($result, "utf-8", "gb2312");
	$result = str_replace("/ct/", "/play?make=dongman&id=", $result);
	$pattern = "#<a class=\"list-title\" target=\"_blank\" href=\"(.*?)\" href_top=\"(.*?)\">(.*?)</a>#";
	preg_match_all($pattern, $result, $matches);
	$xh = 0;
	while ($xh < 50) {
?><li><a href="./seacher.php?sousuo=<?php echo $matches[3][$xh];?>" target="_blank" style="color:#E12B6F;"><?php echo $matches[3][$xh];?></a></li><?php
		$xh = $xh + 1;
	}
?>
	</b>
			</ul>
			</div>
<div class="stui-pannel stui-pannel-bg clearfix">
	<div class="single-strong" style="color: #333;"><a href="/tv.php" title="今日电影排行榜">今日电视剧排行榜</a></div>
			
<div class="stui-pannel_bd clearfix">
			<ul class="stui-vodlist clearfix">
		</ul>
	</div>	
		<ul class="wprm">
	<b>
<?php
	$queryURL = "http://top.baidu.com/buzz?b=4&c=2&fr=topcategory_c2";
	$useragent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)";
	$header = array("Accept-Language: zh-cn", "Connection: Keep-Alive", "Cache-Control: no-cache");
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_REFERER, $queryURL);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_URL, $queryURL);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 6);
	$result = curl_exec($ch);
	$result = mb_convert_encoding($result, "utf-8", "gb2312");
	$result = str_replace("/ct/", "/play?make=dongman&id=", $result);
	$pattern = "#<a class=\"list-title\" target=\"_blank\" href=\"(.*?)\" href_top=\"(.*?)\">(.*?)</a>#";
	preg_match_all($pattern, $result, $matches);
	$xh = 0;
	while ($xh < 49) {
?><li><a href="./seacher.php?sousuo=<?php echo $matches[3][$xh];?>" target="_blank" style="color:#D5D85C;"><?php echo $matches[3][$xh];?></a></li><?php
		$xh = $xh + 1;
	}
?>
	</b>
			</ul>
			</div>	
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="single-strong" style="color: #333;"><a href="/zongyi.php" title="今日综艺排行榜">今日综艺排行榜</a></div>
			
<div class="stui-pannel_bd clearfix">
			<ul class="stui-vodlist clearfix">
</ul>	
			</div>		
	<ul class="wprm">
	<b>
<?php
	$queryURL = "http://top.baidu.com/buzz?b=19&c=3&fr=topcategory_c3";
	$useragent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)";
	$header = array("Accept-Language: zh-cn", "Connection: Keep-Alive", "Cache-Control: no-cache");
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_REFERER, $queryURL);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_URL, $queryURL);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 6);
	$result = curl_exec($ch);
	$result = mb_convert_encoding($result, "utf-8", "gb2312");
	$result = str_replace("/ct/", "/play?make=dongman&id=", $result);
	$pattern = "#<a class=\"list-title\" target=\"_blank\" href=\"(.*?)\" href_top=\"(.*?)\">(.*?)</a>#";
	preg_match_all($pattern, $result, $matches);
	$xh = 0;
	while ($xh < 49) {
?><li><a href="./seacher.php?sousuo=<?php echo $matches[3][$xh];?>" target="_blank" style="color:#E87964;"><?php echo $matches[3][$xh];?></a></li><?php
		$xh = $xh + 1;
	}
?>
	</b>
			</ul>
			</div>
			<div class="stui-pannel stui-pannel-bg clearfix">
			<div class="single-strong" style="color: #333;"><a href="/dongman.php" title="今日动漫排行榜">今日动漫排行榜</a></div>
			

	<ul class="wprm">
	<b>
<?php
	$queryURL = "http://top.baidu.com/buzz?b=23&c=5&fr=topcategory_c5";
	$useragent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)";
	$header = array("Accept-Language: zh-cn", "Connection: Keep-Alive", "Cache-Control: no-cache");
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_REFERER, $queryURL);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
	curl_setopt($ch, CURLOPT_URL, $queryURL);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 6);
	$result = curl_exec($ch);
	$result = mb_convert_encoding($result, "utf-8", "gb2312");
	$result = str_replace("/ct/", "/play?make=dongman&id=", $result);
	$pattern = "#<a class=\"list-title\" target=\"_blank\" href=\"(.*?)\" href_top=\"(.*?)\">(.*?)</a>#";
	preg_match_all($pattern, $result, $matches);
	$xh = 0;
	while ($xh < 49) {
?><li><a href="./seacher.php?sousuo=<?php echo $matches[3][$xh];?>" target="_blank" style="color:#0FC1CB;"><?php echo $matches[3][$xh];?></a></li><?php
		$xh = $xh + 1;
	}
?>
	</b>
			</ul>
			</div>	








</div>

				</div>
			</div>						
			</div>



</div>	
<div class="hy-gototop hidden-sm hidden-xs">
   <ul class="item clearfix">
    <li><a href="./" title="会员中心"><i class="icon iconfont icon-tubiaozhizuomobanyihuifu-"></i></a></li>
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
