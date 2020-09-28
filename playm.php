<?php
include ('./inc/aik.config.php');
$link=$aik['pcdomain'];
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
<link rel="stylesheet" href="static/css/iconfont1.css">
<link href="static/css/blackcolor.css" rel="stylesheet" type="text/css" />
<link href="static/css/style.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="static/css/golds.css">
<script src="static/js/jquery.min.js"></script>
<script type="text/javascript" src="static/js/bootstrap.min.js"></script>		
<script src="static/js/function.js"></script>
<script type='text/javascript' src="static/js/LazyLoad.js"></script>
<script type='text/javascript' src="static/js/swiper.min.js"></script>
<script type="text/javascript " src="static/js/history.js "></script>
<script src="static/css/masonry.pkgd.js"></script>
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
    <style>  
	.on{
	color: white;background-color: #1A9CD6;padding: 1px 4px 1px 4px;
	}
  </style>
<style type="text/css"> 
.center{text-align:center;} 
.center{color:#FFFF;} 
</style>
<style type="text/css">

body{
background-repeat:repeat;background-size:inherit;background-attachment:fixed;background-position:center center;background: url(<?php echo $aik['logo_ss']?>); 
}
@media (max-width: 767px){
    body:before{background: url() center 0 no-repeat; background-attachment: fixed;background-size: cover;} 
}
</style>
 <script src="static/js/jquery_ldg.js"></script>
<script src="static/js/ldg.js"></script>
<meta name="keywords" content="<?php echo $data['data'][0]['vod_name'];?>-播放页">
<title>高清美女直播-主播正在直播-<?php echo $aik['sitename'];?></title>
<meta name="description" content="智云影音，<?php echo $aik['sitename']?>，联系QQ号2248186422,QQ交流群921019449">
<style type="text/css">
  #timer{background: rgba(0, 0, 0, 0.59);padding: 5px;text-align: center;width: 30px;position: absolute;top: 5%;right: 2%;color: #fff;font-size: 16px;border-radius: 50%;height: 30px;line-height: 20px}
  #xiang{background: rgba(177, 13, 13, 0.87);padding: 5px;text-align: center;width: auto;position: absolute;bottom: 2%;right: 1%;color: #fff;font-size: 16px;border-radius: 10px;height: 20px;line-height: 9px}

        #ys {
            background: 'deepskyblue';
            color: black;
        }
        .jkbtn{
            background: 'deepskyblue';
            color: black;
        }
    </style>
<style type="text/css">
@media screen and (max-width: 1222px) { .none{display:none; }
}
.down_list ul li {

    padding: 8px 0;
    border-bottom: 1px solid #eee;
    overflow: hidden;
    vertical-align: middle;
}

.mi {
    float: left;
    display: inline;
    margin-right: 10px;
    padding: 6px 9px;
    color: #fff;
    line-height: 1;
    cursor: pointer;
	    background-color: #249ff1;
}
</style>  
</head>
<body class="vod-play">
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
					<a class="hidden-sm hidden-xs" href="<?php echo $aik['pcdomain'];?>"><img src="<?php echo $aik['logo_dh']?>" /></a>
		  			<a class="visible-sm visible-xs" href="./"><img src="<?php echo $aik['logo_dh']?>" /></a>											  
				</div>	
<?php  include 'header.php';?>		
</li>	
				</ul>													 
		  	</div>							
	    </div>
	</div>
</div>

<div class="container">
<div class="row none"  style="margin-top:10px"></div>
	<div class="row">
		<div class="hy-player clearfix">
			<div class="item">
				<div class="col-md-9 col-sm-12 padding-0">
<div class="info embed-responsive" id="cms_player">			
<script type="text/javascript"> 
    $(document).ready(function(){
$("#hqxz1").click(function(){
		$.ajax({ 
			type: "POST",  
			url: "./seacher.php", 
			data: "sousuo=",  
			success: function(msg){ 
				if(msg == "true"){
					//location.href='index.php';
					//$("#log_dl").load("index.php");
$("#LoginShowTip").show().text("获取下载列列表失败反馈QQ群921019449"); 
					//$(".log_box").remove();删除					
				}else{
$("#jieguo").show().html(msg); 
				}
			} 
		});
});	
$("#hqxz2").click(function(){
		$.ajax({ 
			type: "POST",  
			url: "./seacher.php", 
			data: "sousuo=",  
			success: function(msg){ 
				if(msg == "true"){
					//location.href='index.php';
					//$("#log_dl").load("index.php");
$("#LoginShowTip").show().text("获取下载列列表失败"); 
					//$(".log_box").remove();删除					
				}else{
$("#jieguo").show().html(msg); 
				}
			} 
		});
});	
    });
function SwitchArea(){
	$.ajax({
                type:'POST',
                url:'./index.php',
                data:{"name":"智云影音"},
                dataType:'json',                
                async:true,
                success:function(data){					
                alert(data);
                }
            });
}
function SwitchAreaa(){
	$.ajax({
                type:'POST',
                url:'index.php',
                data:{"name":"智云影音"},
                dataType:'json',                
                async:true,
                success:function(data){					
                alert(data);
                }
            });
}
          function run(){
        var s = document.getElementById("timer");      
        if(!s){          
            return false;
        }else{
          s.innerHTML = s.innerHTML * 1 - 1;
        }
        
    }
    window.setInterval("run();", 1000);
	$('#cms_player').html('<div style="max-width: 100%;width: auto;height: auto;min-width: 100%;"><img src="<?php echo $aik['jiazai_ad']?>" style="width:100%"></a></div><div id="timer">3</div>');

    //设置延时函数
    function adsUp(){    
        $("#cms_player").html('<iframe allowFullscreen="true" src="http://yys.ppdsw.xyz/zb/player/flv.php?url=<?php echo $_GET['url'];?>" id="video" style="width:100%;border:none" allowtransparency="true" allowfullscreen="true" frameborder="0" scrolling="no"></iframe>');  
    }
    //五秒钟后自动收起
    var t = setTimeout(adsUp,3000); 
</script>
	</div>
					<div class="footer clearfix">
						<ul class="cleafix hidden-sm hidden-xs">
<li><a class="btn btn-sm btn-default"onclick="SwitchArea()"> <i class="icon iconfont icon-collection"></i>求更新</a></li>
<li><a class="btn btn-sm btn-default"onclick="SwitchAreaa()"> <i class="icon iconfont icon-collection"></i>视频报错</a></li>
									<li><a class="btn btn-sm btn-default" href="javascript:void(0);"> <i class="icon iconfont icon-collection"></i> 收 藏</a></li>
						</ul>
						<span class="text-muted" id="xuji">正在为您直播</span>

					</div>
                        <p style="text-align:center;color: #ffff;font-size: 10px;background: #2d6296;padding:11px 8px;border-radius: 2px;"><font color="#FFFFFF"><?php echo $aik['icp'];?></font><font color="#FF0000" size='3'>高清美女直播频道</font></p>

					<div class="footer clearfix" id="xlu" style="display:none; height:auto"><span class="text-muted" ></span></div>
				</div>
					<script type="text/javascript">
function xldata(urls){
	var videourls = document.getElementById('video');
	var xlqieh = document.getElementById('videourlgo');
	videourls.src = urls+xlqieh.href;
}
</script>
				<div class="col-md-3 col-sm-12 padding-0">
					<div class="sidebar">
						<div class="hy-play-list play">
							<div class="item tyui" id="dianshijuid">
								<div class="panel clearfix">
									<a class="option collapsed" data-toggle="collapse" data-parent="#playlist" href="#playlist1">直播线路<span class="text-muted pull-right"><i class="icon iconfont icon-right"></i></span></a>
									<div id="playlist1" class="playlist collapse in dianshijua">
										<ul class="playlistlink-1 list-15256 clearfix">
<a data-num="1" href="http://yys.ppdsw.xyz/zb/player/flv.php?url=<?php echo $_GET['url'];?>" class="btn-play-source">主播直播</a>
	
	</ul>
	</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



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
								<font color="#FFFFFF"><font color="#FFFFFF"><?php echo $aik['bofang_ad']?>					</font></div>
						</div>
					</div>
				</div>
			</div>

			<div class="hy-layout clearfix">
  <div class="b mb">
<div class="hy-video-head">
					<h3 class="margin-0"><?php echo $aik['sitename']?><font color="#FF0000" size='3'>提示</font></h3>
				</div> 
    <div id="down_1" class="down_list max-height">
     <font color="#FFFFFF"><ul>
<span style="color: #F30;" id="LoginShowTip"></span>
<div id="jieguo"></div>
     </ul>
      </font>
     <font color="#01090e">
       <input type="button" id="0" name="zd" value="更多美女直播请到直播页刷新自动更换最新主播"  />
      
      </font>
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
						<img src="image/ewm.png" id="thisurl" width="250">
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
                    $('#xlus').children('a:eq(0)').addClass('jkbtn');
                    var autourl = $('.lipbtn:eq(0)').attr('data-href');
                    $('.lipbtn:eq(0)').attr('id','ys');
                    var text = $('.lipbtn:eq(0)').text();
                    $('.js').text('-'+text+'');
                    var jiekou = $('#xlus').children('a:eq(0)').attr('data-jk');
                    if(autourl!=''||autourl!=null){
                        setTimeout(function () {
                            $('#video').attr('src', jiekou + autourl);
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
                    var jiekou = $('.jkbtn').attr('data-jk');
                    if (href != '' || href != null) {
                        setTimeout(function () {
                            $('#video').attr('src', jiekou + href);
                        },0)
                    }
                }
                function xldata(obj) {
                    var url = $(obj).attr('data-jk');
                    $.each($('.jkbtn'), function () {
                        $(this).removeClass('jkbtn');
                    });
                    $(obj).addClass('jkbtn');
                    var src = $('#ys').attr('data-href');
                    $('#video').attr('src', url + src);
                }
            </script>
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
						name: '主播正在直播',
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
	<div style="position:fixed;width:300px;height:350px;top:50%;left:0%;margin-left:-150px;margin-top:-175px;display: none;z-index: 9999999;" id="gbewm" onclick="ewmgb()">
	<div style="text-align:center;line-height: 50px;background-color: #2db2ea;color: #fff;font-size: 20px;font-weight: bold;border-radius: 5px 5px 0px 0px;">扫码二维码，手机观看！</div>
	<img src="image/ewm.png" id="ewmtp" style="width: 300px;height: 300px;border-radius: 0px 0px 5px 5px;"/>
</div>
<div class="row" style="margin-top:10px"></div>
		 <div class="hy-layout hidden-xs" style="border-top: 2px solid #204060;">
	         <div class="hy-footer-link">
	             <div class="item clearfix">
	                 <p style="padding: 0 4px;text-align:center" class="container-fluid"><font color="#FFFFFF"><span><?php echo $aik['foot']?><?php echo $aik['admin_email']?></span><br />
<span>Copyright &copy;&nbsp; <?php echo $aik['sitename']?> 版权所有</span></font><?php echo $aik['tongji']?><a href="http://zhiyun.ppdsw.xyz/w/">源码更新</a></p>             
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
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "static/css/hm.js?1b228034eab3f86498adfd4e9d337209";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
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
BODY{cursor:url('static/1.cur'), url(/style/2.cur), auto;}
A{cursor:url('static/3.cur'), url(/style/4.cur), auto;} </STYLE>
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
<script type="text/javascript ">
					$MH.limit = 10;
					$MH.WriteHistoryBox(200, 170, 'font');
					$MH.recordHistory({
						name: '主播正在直播',

                      link: '<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].''.$_SERVER['QUERY_STRING'];?>',
						pic: '/m-992/uploads/allimg/201706/a0a13289528feabb.jpg'
					})
				</script>
