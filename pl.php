<?php
error_reporting(0);
include ('./inc/aik.config.php');
$id=$_GET['id'];
$cxurl = $aik['zhanwai'];
$url = $cxurl."?vodids=".$id;
$data=json_decode(file_get_contents($url),true);            

?>
<?php
$pizza = $aik['qq_name'];
$pieces = explode("#", $pizza); 
if ((!empty($pizza))&&(in_array($timu, $pieces))) {
 echo "<meta http-equiv=refresh content='0; url=404.php'>";
die();
}
?>
<?php
$url= $_GET['url'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
<link href="static/css/kkbb.css" rel="stylesheet" type="text/css">	
<link rel="stylesheet" href="static/css/cs1.css">
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
  </script>
  <style type="text/css">

body{
background-repeat:repeat;background-size:inherit;background-attachment:fixed;background-position:center center;background: url(<?php echo $aik['logo_ss']?>); 
}
@media (max-width: 767px){
    body:before{background: url() center 0 no-repeat; background-attachment: fixed;background-size: cover;} 
}
</style>
<title>高清影片推存<?php echo $aik['title']?><?php echo $aik['sitename']?></title>
    <meta name="keywords" content="最新影片资源，<?php echo $aik['keywords']?>" />
    <meta name="description" content="免费精品源码QQ交流群921019449，源码开发联系QQ1455112844,<?php echo $aik['description']?>" />
<style type="text/css">
  #timer{background: rgba(0, 0, 0, 0.59);padding: 5px;text-align: center;width: 30px;position: absolute;top: 5%;right: 2%;color: #fff;font-size: 16px;border-radius: 50%;height: 30px;line-height: 20px}
  #xiang{background: rgba(177, 13, 13, 0.87);padding: 5px;text-align: center;width: auto;position: absolute;bottom: 2%;right: 1%;color: #fff;font-size: 16px;border-radius: 10px;height: 20px;line-height: 9px}
  #ys,.jkbtn {background: #1e7ad6;color: #fff;}
    </style>
</head>
<body class="vod-play">
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
					<a class="hidden-sm hidden-xs" href="<?php echo $aik['pcdomain']?>"><img src="<?php echo $aik['logo_dh']?>"></a>
		  			<a class="visible-sm visible-xs" href="<?php echo $aik['pcdomain']?>"><img src="<?php echo $aik['logo_dh']?>"></a>											  
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
				<div class="col-md-9 col-sm-12 padding-0">
					<div class="info embed-responsive">
<div id="shiping_box"></div>
<script type="text/javascript"> 

          function run(){
        var s = document.getElementById("timer");      
        if(!s){          
            return false;
        }else{
          s.innerHTML = s.innerHTML * 1 - 1;
        }
        
    }
    window.setInterval("run();", 1000);
	$('#shiping_box').html('<div style="text-align:center;width:100%;"><img src="<?php echo $aik['jiazai_ad']?>" style="width:100%"></a></div><div id="timer">3</div>');
    //设置延时函数
    function adsUp(){    
        $("#shiping_box").html('<iframe id="video" src="<?php echo $url ?>"  allowfullscreen="true" allowtransparency="true" style="width:100%;border:none"></iframe>');  
    }
    //五秒钟后自动收起
    var t = setTimeout(adsUp,0); 
    
</script>

</div>

					<div class="footer clearfix">

						<ul class="cleafix hidden-sm hidden-xs">
									<li><a class="btn btn-sm btn-default" id="btn-pre"><i class="icon iconfont icon-rewind1"></i> 上一集</a></li>
									<li class=""><a class="btn btn-sm btn-default" id="btn-next">下一集 <i class="icon iconfont icon-fastforward"></i></a></li>
									<li><a class="btn btn-sm btn-default" href="javascript:;"> <i class="icon iconfont icon-collection"></i> 收 藏</a></li>
						</ul>
						
						<span class="text-muted" id="xuji">正在为您播放-高清影片<span class="js"></span></span>
					</div>
				</div>

				<div class="col-md-3 col-sm-12 padding-0">
				
					<div class="sidebar">
						<div class="hy-play-list play">
									<div class="item tyui" id="dianshijua">	
									<div class="panel clearfix visible-sm visible-xs">
<div id="playlist1" class="playlist collapse in dianshijua">
<ul class="playlistlink-1 list-15256 clearfix">								
<a id="btn-pre1" class="btn btn-sm btn-default" style='width:48%;float:left'>上一集</a><a id="btn-next1" class="btn btn-sm btn-default" style='width:48%;float:left'>下一集</a></ul></div></div>
<div class="panel clearfix">
									<a class="option collapsed" data-toggle="collapse" data-parent="#playlist" href="#playlist1">播放列表<span class="text-muted pull-right"><i class="icon iconfont icon-right"></i></span></a>
									<div id="playlist1" class="playlist collapse in dianshijua">
										<ul class="playlistlink-1 list-15256 clearfix">

    <div class="ji-tab-content js-tab-content" style="opacity:0;">       
            <div class="num-tab js-tabs">
 <div class="num-tab-main js-tab g-clear" style="display:">
 <a data-num='1' href='<?php echo $url ?>' class='btn-play-source'>影片资源</a></div>
 </div>
</div>
</ul>
</div>
</div>					
</div>
				</div>
			</div>
		</div>
	</div>
</div>
 <script>
                $(function () {
                    $.each($('.num-tab.js-tabs'),function () {
                        if($(this).children('.num-tab-main').length>1){
                            $(this).children('.num-tab-main:eq(0)').remove();
                        }
                        $(this).children('.num-tab-main:eq(0)').children('a').addClass('am-btn am-btn-default lipbtn');

                    });
                    $('.ji-tab-content.js-tab-content').css('opacity',1)
                    $.each($('.lipbtn'),function () {
                        var url = $(this).attr('href');
                        $(this).attr('data-href',url);
                        $(this).attr('href','javascript:;');
                        $(this).attr('onclick','bofang(this)');
                    });
                    //var biaoti = $('#xuji').text();
                   // $('title').text(biaoti);
                    $('#xlus').children('a:eq(0)').addClass('jkbtn');
                    var autourl = $('.lipbtn:eq(0)').attr('data-href');
                    $('.lipbtn:eq(0)').attr('id','ys');
                    var text = $('.lipbtn:eq(0)').text();
                    $('.js').text('-'+text+'');
                    var jiekou = $('#xlus').children('a:eq(0)').attr('data-jk');
                    if(autourl!=''||autourl!=null){
                        setTimeout(function () {
                            $('#video').attr('src', autourl);
                        },0)
                    }
					    // 上一集
    $("#btn-pre").click(function() {
        $("#ys.btn-play-source").prev().click();
    });
    
    // 下一集
    $("#btn-next").click(function() {
        $("#ys.btn-play-source").next().click();
    });
					    // 上一集
    $("#btn-pre1").click(function() {
        $("#ys.btn-play-source").prev().click();
    });
    
    // 下一集
    $("#btn-next1").click(function() {
        $("#ys.btn-play-source").next().click();
    });
                })
            </script>
            <script>
                function bofang(obj) {
                    var href = $(obj).attr('data-href');
                    var text = $(obj).text();
                    $('.js').text('-' + text+'');
                    $.each($('.lipbtn'), function () {
                        $(this).attr('id','');
                    });
                    $(obj).attr('id','ys');
                    if (href != '' || href != null) {
                        $('#video').attr('src', '/jzad');
                        setTimeout(function () {
                            $('#video').attr('src', href);
                        },0)
                    }
                }

			
            </script>


<div class="container">
	<div class="row">
		<div class="col-md-9 col-sm-12 hy-main-content">
		
			<div class="hy-layout clearfix"><div style="margin-top:0px"></div>
				<div class="hy-switch-tabs">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#list3" data-toggle="tab">官方发布</a></li>
											</ul>
				</div>
				<div class="tab-content">
					<div class="hy-play-list tab-pane fade in active" id="list3">
						<div class="item">
							<div class="plot">
								<font color="#FFFFFF"><?php echo $aik['bofang_ad']?></font>
								</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hy-layout clearfix">
				<div class="hy-video-head">
					<h3 class="margin-0">高清影片推存播放页</h3>
				</div>
				
</div>
</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-12 hy-main-side hidden-sm hidden-xs">
			<div class="hy-layout clearfix">
				<div class="hy-details-qrcode side clearfix">
					<div class="item">
						<h5 class="text-muted">扫一扫用手机观看</h5>
				<p>
						<img src="" id="thisurl" width="250">
						</p>
                      <script>
                      $(document).ready(function () {  
                        var url= "https://egame.qq.com/webapi/qrcode?content="+this.location.href;
                        	$("#thisurl").attr("src", url);
                      }); 
                      </script>
						<p class="text-muted">
							分享到朋友圈
						</p>
					</div>
				</div>
				<div class="hy-video-ranking side clearfix">
					<div class="head">
						<a class="text-muted pull-right" href="movie.php">更多 <i class="icon iconfont icon-right"></i></a>
						<h4><i class="icon iconfont icon-top text-color"></i> 最近更新</h4>
					</div>
					<div class="item">
						<ul class="clearfix">
							<?php include './inc/zxjx.php';?>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
					
<span class="ff-hits" id="ff-hits-insert" data-id="37432" data-sid="vod" data-type="insert"></span>		<script>
	    var swiper = new Swiper('.hy-switch', {
	        pagination: '.swiper-pagination',
	        paginationClickable: true,
	        slidesPerView: 5,
	        spaceBetween: 0,
	        nextButton: '.swiper-button-next',
	        prevButton: '.swiper-button-prev',
	        breakpoints: {
	            1200: {
	                slidesPerView: 4,
	                spaceBetween: 0
	            },
	            767: {
	                slidesPerView: 3,
	                spaceBetween: 0					            
	            }
	        }
	    });	 
	    </script>
<span class="ff-record-set" data-sid="1" data-id="37432" data-id-sid="1" data-id-pid="1">
</span>



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
						name: '最新高清影片在线观看',
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
	<img src="image/wem.png" id="ewmtp" style="width: 300px;height: 300px;border-radius: 0px 0px 5px 5px;">
</div>
<div class="row" style="margin-top:10px"></div>
		 <div class="hy-layout hidden-xs" style="border-top: 2px solid #204060;">
	         <div class="hy-footer-link">
	             <div class="item clearfix">
	                 <p style="padding: 0 4px;text-align:center" class="container-fluid"><font color="#FFFFFF"><span><?php echo $aik['foot']?><?php echo $aik['admin_email']?> </span><br><span>Copyright ©  <?php echo $aik['sitename']?> 版权所有<?php echo $aik['tongji']?></span></font>

<script type="text/javascript" src="static/js/z_stat-5665993_5665993.js"></script><a href="<?php echo $aik['pcdomain']?>">网站首页</a>
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
</div></div></body>
</html>
<script type="text/javascript ">
					$MH.limit = 10;
					$MH.WriteHistoryBox(200, 170, 'font');
					$MH.recordHistory({
						name: '最新高清影片推存',
						link: '<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].''.$_SERVER['QUERY_STRING'];?>',
						pic: '/m-992/uploads/allimg/201706/a0a13289528feabb.jpg'
					})
				</script>
