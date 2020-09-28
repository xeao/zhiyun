<?php
error_reporting(0);
include ('./inc/aik.config.php');
$id=$_GET['id'];
$cxurl = $aik['zhanwai14'];
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
<script src="stat/js/html5shiv.min.js"></script>
<script src="stat/js/respond.min.js"></script>
<![endif]-->
<link href="stat/css/bootstrap.min.css" rel="stylesheet" type="text/css">				
<link href="stat/css/swiper.min.css" rel="stylesheet" type="text/css">		
<link href="stat/css/iconfont.css" rel="stylesheet" type="text/css">
<link href="stat/css/blackcolor.css" rel="stylesheet" type="text/css">
<link href="stat/css/style.min.css" rel="stylesheet" type="text/css">
<script src="stat/js/jquery.min.js"></script>
<script type="text/javascript" src="stat/js/bootstrap.min.js"></script>		
<script src="stat/js/function.js"></script>
<script type='text/javascript' src="stat/js/LazyLoad.js"></script>
<script type='text/javascript' src="stat/js/swiper.min.js"></script>
<script type="text/javascript " src="stat/js/history.js"></script>
<script src="stat/js/masonry.pkgd.js"></script>
<link rel="stylesheet" href="static/css/golds.css">
<link href="stat/css/kkbb.css" rel="stylesheet" type="text/css">	
<link rel="stylesheet" href="stat/css/cs1.css">
<link href="stat/css/gdicon.css" rel="stylesheet" type="text/css">	
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
  </script><style type="text/css">

body{
background-repeat:repeat;background-size:inherit;background-attachment:fixed;background-position:center center;background: url(<?php echo $aik['logo_ss']?>); 
}
@media (max-width: 767px){
    body:before{background: url() center 0 no-repeat; background-attachment: fixed;background-size: cover;} 
}
</style>

<title><?php echo $data['data'][0]['vod_name'];?>-正在播放-<?php echo $aik['sitename'];?></title>
<meta name="description" content="智云影音，<?php echo $aik['sitename']?>，联系QQ号2248186422,QQ交流群921019449"> 
<meta name="keywords" content="<?php echo $data['data'][0]['vod_name'];?>-播放页">
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
        .xianlucss{background-color:#1A9CD6;color: white;}
    </style>
<style type="text/css">
@media screen and (max-width: 1222px) { .none{display:none; }
}
</style>
</head>
<body class="vod-play">
<script src="stat/js/clipboard.min.js"></script>
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
<link rel="stylesheet" href="stat/css/iconfont1.css">
<div class="hy-head-menu">
	<div class="container">
	    <div class="row">
		  	<div class="item">
			    <div class="logo hidden-xs">
					<a class="hidden-sm hidden-xs" href="./"><img src="<?php echo $aik['logo_dh']?>"></a>
		  			<a class="visible-sm visible-xs" href="<?php echo $aik['pcdomain']?>"><img src="<?php echo $aik['logo_dh']?>"></a>											  
				</div>	
				<?php  include 'head.php';?>		
				</ul>													 
		  	</div>							
	    </div>
	</div>
</div>

<div class="container">
<div class="row none" style="margin-top:10px"></div>
	<div class="row">
		<div class="hy-player clearfix">
			<div class="item">
				<div class="col-md-9 col-sm-12 padding-0">
<div class="info embed-responsive" id="cms_player">
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
	$('#cms_player').html('<div style="text-align:center;width:100%;"><img src="<?php echo $aik['jiazai_ad']?>" style="width:100%"></a></div><div id="timer">3</div>');
    //设置延时函数
    function adsUp(){    
        $("#cms_player").html('<iframe id="video" src=""  style="width:100%;border:none" allowtransparency="true" allowfullscreen="true" frameborder="0" scrolling="no"></iframe><a style="display:none" id="videourlgo" href=""></a>');  
    }
    //五秒钟后自动收起
    var t = setTimeout(adsUp,0); 
    
</script>
</div>

						<div class="footer clearfix">
												<ul class="cleafix hidden-sm hidden-xs" style="position: absolute;right: 0;">
						<li><a class="btn btn-sm btn-default" id="btn-prev" href="javascript:void(0);"><i class="icon iconfont icon-rewind1"></i> 上一集</a></li>
						<li class=""><a class="btn btn-sm btn-default" id="btn-next" href="javascript:void(0);">下一集 <i class="icon iconfont icon-fastforward"></i></a></li>
						<li><a class="btn btn-sm btn-default" href="javascript:location.reload()"> <i class="icon iconfont icon-collection"></i> 刷 新</a></li>
						</ul>
												<ul class="cleafix hidden-sm hidden-xs" style="position: absolute;right: 0;">
                        <li><a class="btn btn-sm btn-default" href="javascript:history.back()"> <i class="icon iconfont icon-collection"></i> 返 回</a></li>
						</ul>
						<span class="text-muted" id="xuji">正在播放-<?php echo $data['data'][0]['vod_name'];?></span><span id="jishu" style="display:none;"></span>
					</div>
																<div class="head visible-sm visible-xs" style="height: 43px;  margin: 4px 0 0 0;">
					<a class="btn btn-sm btn-primaryy nextepisode" id="btn-prev-m" style="left: 20px;" onclick="btnprev()">上一集</a>
					<a class="btn btn-sm btn-primaryy nextepisode" id="btn-next-m" style="right: 20px;" onclick="btnnext()">下一集</a>
				</div>	
										
  <p style="text-align:center;color: #ffff;font-size: 10px;background: #2d6296;padding:11px 8px;border-radius: 2px;"><font color="#FFFFFF"><?php echo $aik['icp'];?></font></p>	
  <div class="footer clearfix" id="xlu" style="display:none; height:auto">													
  <span class="text-muted">

<a onclick="xldata('ck/?url=',this)" data-url="ck/?url=" class="btn btn-sm btn-default xianlucss" id="xl0">默认</a>    
<script src='stat/js/27.js'></script>

</span>
</div>
</div>
<script type="text/javascript">
function xldata(urls,t){
	var videourls = document.getElementById('video');
	var xlqieh = document.getElementById('videourlgo');
	videourls.src = urls+xlqieh.href;
	$(".xianlucss").removeClass("xianlucss");
	$(t).addClass("xianlucss");
}
</script>
				<div class="col-md-3 col-sm-12 padding-0">				
				<div class="sidebar">
				<div class="hy-play-list play">
				<div class="item tyui" id="dianshijua">							
<div class="panel clearfix">
<a class="option collapsed" data-toggle="collapse" data-parent="#playlist" href="#playlistqq">点击播放<span class="text-muted pull-right"><i class="icon iconfont icon-right"></i></span></a>
<div id="playlistqq" class="playlist collapse dianshijua in"><ul class="playlistlink-1 list-15256 clearfix">
            <div class="num-tab js-tabs">
                <div class="num-tab-main js-tab g-clear">
<?php
                $str = $data['data'][0]['vod_url'];
                $suArr = explode("$$$",$str);
                foreach($suArr as $a=>$b){  
                    $v = explode("\n",$b);
                    $d[] =$v; 
                }
                foreach($d as $k=>$v){    
                    foreach ($v as $cc){
                         $u = explode("$",$cc);
                        if(strpos($u[1] ,'.m3u8')){
                        $urls= $u[1];
                        $title= $u[0];
                        echo
                        '<li><a href="'.$urls.'" class="btn1" target="ajax" id="'.$title.'" p_name="'.$title.'">'.$title.'</a></li>';
                        }
                    }   
                }
?>                             </div>
</div>
</ul></div>

</div></div>
             </div>
            

</div></div>
</div>            
</div>

</div>
</div>					


<style>
.nav-tabs   {border-bottom: 0px solid #ddd;}
 .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover
{color: #fff;
    cursor: default;
    background-color: #00a0e9;
    border: 0px solid #ddd; 
    border-bottom-color: transparent;}   
.nav-tabs>li>a
{    margin-right: 2px;
    line-height: 1.42857143;
     border: 0px solid transparent; 
    border-radius: 0px;
    font-size: 12px;
    color: #fff;}
.nav>li>a
{
position: relative;
    display: block;
    padding: 7px 7px;
}
.nav>li>a:focus, .nav>li>a:hover
{text-decoration: none;
    background-color: #00a0e9;
}
.nav>li
{
    position: relative;
    display: block;
    height: 35px;
    margin: 5px 0 5px 0;}
.hy-player .item .sidebar
{
/* height: 776px; */
}
.nav-tabs>li{
	margin-left: 2px;
	}
    .nextepisode {width: 40%;
    padding: 9px;
    background-color:#000000;
    border: 1px solid #00a0e9;
    position: absolute;
    border-radius: 10px;} 
</style>
<script type="text/javascript">

	var al = $('.dianshijua a');
	al.attr('class','am-btn am-btn-default lipbtn btn1');
	var ji= new Array();
	var btnji= new Array();
	for(var g=0;g<al.length;g++){
		ji.push(al[g].href);
		btnji.push(al[g].id);
		al[g].href = 'javascript:void(0)';
		al[g].target = '_self';
		al.eq(g).attr('onclick','bofang(\''+ji[g]+'\',\''+btnji[g]+'\')');
	};
	document.getElementById('xuji').style.display='block';
	document.getElementById('xlu').style.display = 'block';
</script>
<script type="text/javascript">
	jiazainame(1);
	function bofang(mp4url,jiid){
		jiazainame(jiid)
		var xuanjk=$(".xianlucss");
		//$("#"+xuanjk.attr("id")).click();
		document.getElementById('videourlgo').href=mp4url;
		document.getElementById('video').src=xuanjk.attr("data-url")+mp4url;
		/*//点击之后
		function test() {

			document.getElementById('addid').style.display = 'none';
		}
		setTimeout(test, 5000);*/
	};
	var shang="btn-prev";
		var xia="btn-next";
	function jiazainame(jiid){
		var name=$("#"+jiid).attr("p_name");
		var tishi="";
		if (name=="") {
			tishi=('正在播放：<?php echo $data['data'][0]['vod_name'];?> - '+$("#"+jiid).text()+'');
		}else{
			 tishi = ('正在播放：<?php echo $data['data'][0]['vod_name'];?> - '+name+'');
		}
		/*if (tishi.length>30) {
			tishi=tishi.substring(0,30)+"...";
		}*/
		$(".btn-play-active").attr("style","");
        $(".btn-play-active").removeClass("btn-play-active");
		document.getElementById('xuji').innerHTML = tishi;
		document.getElementById('jishu').innerHTML = jiid;
		$("#"+jiid).addClass("btn-play-active");
		$("#"+jiid).attr("style","background: #00a0e9;color: #ffffff;border:1px solid #00a0e9;");
		if (!IsPC()) {
			shang="btn-prev-m";
			xia="btn-next-m";
		}
		if (jiid != 1) {
			$("#"+shang).show();
		}else{
			$("#"+shang).hide();
		}
		var jitotal = $(".lipbtn").length;
		if (jiid != jitotal) {
			$("#"+xia).show();
		}else{
			$("#"+xia).hide();
		}
	}
	function IsPC() {
    var userAgentInfo = navigator.userAgent;
    var Agents = ["Android", "iPhone",
                "SymbianOS", "Windows Phone",
                "iPad", "iPod"];
    var flag = true;
    for (var v = 0; v < Agents.length; v++) {
        if (userAgentInfo.indexOf(Agents[v]) > 0) {
            flag = false;
            break;
        }
    }
    return flag;
}
function btnnext(){
    	var obj = $(".btn-play-active");
        if(obj!=null){
        	$(".btn-play-active").attr("style","");
            $(".btn-play-active").removeClass("btn-play-active");
            obj.parent().next().children(0).click();
             //$(this).focus();
              $("#"+xia).focus();
        }
    }
    function btnprev(){
    	 var obj = $(".btn-play-active");
        if(obj!=null){
        	$(".btn-play-active").attr("style","");
            $(".btn-play-active").removeClass("btn-play-active");
            obj.parent().prev().children(0).click();
            $("#"+shang).focus();
        }
    }
</script>
<script type="text/javascript">

	$("#btn-prev").click(function(){
       var obj = $(".btn-play-active");
        if(obj!=null){
        	$(".btn-play-active").attr("style","");
            $(".btn-play-active").removeClass("btn-play-active");
            obj.parent().prev().children(0).click();
            $(this).focus();
        }
    });
    $("#btn-next").click(function(){
       var obj = $(".btn-play-active");
        if(obj!=null){
        	$(".btn-play-active").attr("style","");
            $(".btn-play-active").removeClass("btn-play-active");
            obj.parent().next().children(0).click();
             $(this).focus();
        }
    });

</script>
<div class="container">
	<div class="row">
		<div class="col-md-9 col-sm-12 hy-main-content">
		
			<div class="hy-layout clearfix"><div style="margin-top:0px"></div>
<div class="hy-video-details active clearfix">
					<div class="item clearfix">
						<dl class="content">
                            							<dt><img src="<?php echo $data['data'][0]['vod_pic'];?>" alt="" style=" width: 100%;"></dt>
							<dd class="clearfix">
							<div class="head">
								<h3><?php echo $data['data'][0]['vod_name'];?></h3>
							</div>
							
							<ul>
                              								
								<font color="#FFFFFF"><li><span>演员 ： <?php echo $star=$data['data'][0]['vod_actor']=''?'未知':$data['data'][0]['vod_actor'];?>                                                                                      </span></li>
								<li><span class="text-muted">简介：</span><?php echo $data['data'][0]['vod_content'];?></li>
                             </font>  
							</ul>							
							</dd>
						</dl>
					</div>
				</div>
			</div>
			<div class="hy-layout clearfix">
				<div class="hy-video-head">
					<h3 class="margin-0">官方发布</h3>
				</div>
				<div class="ff-forum" id="ff-forum" data-id="37432" data-sid="1">
<?php echo $aik['bofang_ad']?>
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
						<a class="text-muted pull-right" href="movie.php">更多 <i class="icon iconfont icon-xiangyou"></i></a>
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
<span class="ff-record-set" data-sid="1" data-id="37432" data-id-sid="1" data-id-pid="1"></span>
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
						name: '<?php echo $data['data'][0]['vod_name'];?>',
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

<script type="text/javascript" src="stat/js/z_stat-5665993_5665993.js"></script><a href="<?php echo $aik['pcdomain']?>">返回首页</a>
<script src="stat/js/eord_cc-1599.js"></script>
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
        bp.src = 'https://zz.bdstat.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>

	<style type="text/css"> 
BODY{cursor:url('stat/image/1.jpg'), url(stat/image/2.jpg), auto;}
A{cursor:url('stat/image/3.jpg'), url(stat/image/4.jpg), auto;} </style>
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
<script type="text/javascript ">
					$MH.limit = 10;
					$MH.WriteHistoryBox(200, 170, 'font');
					$MH.recordHistory({
						name: '<?php echo $data['data'][0]['vod_name'];?>',
						link: '<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].''.$_SERVER['QUERY_STRING'];?>',
						pic: '/m-992/uploads/allimg/201706/a0a13289528feabb.jpg'
					})
				</script>
