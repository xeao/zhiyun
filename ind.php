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
<link href="static/css/blackcolor.css" rel="stylesheet" type="text/css" />
<link href="static/css/style.min.css" rel="stylesheet" type="text/css" />
<script src="static/js/jquery.min.js"></script>
<script type="text/javascript" src="static/js/bootstrap.min.js"></script>		
<script src="static/js/function.js"></script>
<script type='text/javascript' src="static/js/LazyLoad.js"></script>
<script type='text/javascript' src="static/js/swiper.min.js"></script>
<script src="static/js/generator.js"></script>
<script type="text/javascript" src="static/js/generator.js"></script>	
	<meta name="referrer" content="never">
<script type="text/javascript " src="static/js/history.js "></script>
<script src="static/css/masonry.pkgd.js"></script>
<link href="static/css/kkbb.css" rel="stylesheet" type="text/css" />	
<link rel="stylesheet" href="static/css/golds.css">
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
<title><?php echo $aik['title']?><?php echo $aik['sitename']?></title>
    <meta name="keywords" content="<?php echo $aik['keywords']?>" />
    <meta name="description" content="<?php echo $aik['description']?>" />
<!--<script src="static/js/snowy.js"></script>
<script src="static/js/Snow.js"></script>
<style type="text/css">
.snow-container{position:fixed;top:0;left:0;width:100%;height:100%;pointer-events:none;z-index:100001;}
</style>-->
<style type="text/css">
@media screen and (max-width: 1222px) { .none{display:none; }
}
</style>
<div class="snow-container"></div>
</head>
<body class="index">
<script src="static/css/clipboard.min.js"></script>
<script>
   var clipboard = new Clipboard('.hongbao', {
       text: function () {
          
       return '332nn636VD';
       }
   });
</script>

<link rel="stylesheet" href="static/css/iconfont1.css">
<div class="hy-head-menu">
	<div class="container">
	    <div class="row">
		  	<div class="item">
			    <div class="logo hidden-xs">
					<a class="hidden-sm hidden-xs" href="<?php echo $aik['pcdomain']?>"><img src="<?php echo $aik['logo_dh']?>" /></a>
		  			<a class="visible-sm visible-xs" href="/"><img src="<?php echo $aik['logo_dh']?>" /></a>											  
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
		<div class="hy-layout clearfix">
			<div class="col-lg-7 col-md-6 col-sm-12">
				<div class="swiper-container hy-slide">
					<div class="swiper-wrapper">
	<?php echo $aik['cebian1_ad']?>
	<?php echo $aik['cebian2_ad']?>
	<?php echo $aik['cebian3_ad']?>
	<?php echo $aik['cebian4_ad']?>
	<?php include './inc/lb.php';?>
                  </div>
					<div class="swiper-button-next hidden-xs">
						
					</div>
					<div class="swiper-button-prev hidden-xs">
		
					</div>
					<div class="swiper-pagination">
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-md-6 col-sm-12 padding-0">
				<div class="hy-index-menu clearfix">
					<div class="item">
						<ul class="clearfix">
                            <li><a href="movie.php"><i class="icon iconfont icon-zhibo  text-color"></i><span>聚合资源</span></a></li>						
							<li><a href="so.php"><i class="icon iconfont icon-vip text-color"></i><span>综合搜索</span></a></li>
							<li><a href="./lb.php"><i class="icon iconfont icon-tv_icon text-color"></i><span>最新列表</span></a></li>
							<li><a href="./ly/"><i class="icon iconfont icon-tubiaozhizuomobanyihuifu- text-color"></i><span>信息留言</span></a></li>
							                  
						</ul>
					</div>
				</div>
				<div class="hy-index-tags hidden-md clearfix">
					<div class="item">
						<ul class="clearfix">
	<?php echo $aik['tishi_ad']?>												    
														</ul>
					</div>
				</div>
				<div class="hy-right-qrcode hidden-sm hidden-xs">
					<div class="item">
						<dl class="clearfix">
							<dt><img src="https://egame.qq.com/webapi/qrcode?content=<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].''.$_SERVER['QUERY_STRING'];?>"></dt>
							<dd>
							<h4>微信扫描二维码“手机看大片”</h4>
							<p class="text-muted">
								也可以分享到朋友圈哦！
							</p>
							<p class="margin-0 text-muted">
								<?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>					</p>
                              <a target="_blank" href="<?php echo $aik['zfb_ad']?>"><img border="0" src="//pub.idqqimg.com/wpa/images/group.png" alt="交流" title="交流"></a>
							</dd>
						</dl>
					</div>
				</div>
			</div>
		</div>
<!--公告-->
<div class="container hidden-xs">
     <div class="row">
		 <div class="hy-layout clearfix">
		     <li class="active">
			
			 <tr>
			 <td width="12" height="22"></td>
			 <td><strong><marquee scrollamount="10" direction="left" align="Middle" style="font-weight:bold;line-height:20px;font-size:20px;"><img border="0" width="32" src="image/new.gif" /><font color="#FFFFFF"><?php echo $aik['shouquan']?></font></marquee></strong></td>
			 </tr>
			
			 </li>
		</div>
	</div>
</div><!--公告-->  		<!--抢先看-->
<div class="container">
<div class="row"  style="margin-top:10px"><?php echo $aik['movie_ad']?></div></div>
<div class="hy-layout clearfix">
				<div class="hy-video-list">
					<div class="hy-video-head">			
						<h3 class="margin-0">热片推荐</h3>
					</div>
					<div class="swiper-container hy-switch">
						<div class="swiper-wrapper">


<?php include './inc/db.php';?>
</div>
						<div class="swiper-button-next" style="color:#fff;">

						</div>
						<div class="swiper-button-prev" style="color:#fff;">

						</div>
					</div>
					
				</div>
			</div>

<script>
	    var swiper = new Swiper('.hy-switch', {
	        pagination: '.swiper-pagination',
	        paginationClickable: true,
	        slidesPerView: 7,
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
		<div class="hy-layout clearfix">
			<div class="hy-video-head">
				<h3 class="margin-0"><i class="icon iconfont icon-vip text-color"></i> 影片推存</h3><font color="#FF0000"></font>
				<ul class="pull-right">
<li class="text-muted hidden-md hidden-sm hidden-xs"><a href="movie.php?page=1&cid=5"class="text-muted border-right">动作片</a> /</li><li class="text-muted hidden-md hidden-sm hidden-xs"><a href="movie.php?page=1&cid=6"class="text-muted border-right">喜剧片</a> /</li><li class="text-muted hidden-md hidden-sm hidden-xs"><a href="movie.php?page=1&cid=7"class="text-muted border-right">爱情片</a> /</li><li class="text-muted hidden-md hidden-sm hidden-xs"><a href="movie.php?page=1&cid=8"class="text-muted border-right">科幻片</a> /</li><li class="text-muted hidden-md hidden-sm hidden-xs"><a href="movie.php?page=1&cid=9"class="text-muted border-right">恐怖片</a> /</li><li class="text-muted hidden-md hidden-sm hidden-xs"><a href="movie.php?page=1&cid=10"class="text-muted border-right">剧情片</a> /</li><li class="text-muted hidden-md hidden-sm hidden-xs"><a href="movie.php?page=1&cid=11"class="text-muted border-right">战争片</a> /</li><li class="text-muted hidden-md hidden-sm hidden-xs"><a href="movie.php?page=1&cid=22"class="text-muted border-right">纪录片</a> /</li>
					<li class="active"><a href="movie.php" class="text-muted">更多 <i class="icon iconfont icon-xiangyou"></i></a></li>
				</ul>
			</div>
			<div class="clearfix">
				<div class="hy-video-list cleafix">
					<div class="item">
					    
<?php include './data/fbcx.php';?>						
						
				
			</div></div></div>
			<div class="hy-video-footer visible-xs clearfix">
				<a href="movie.php" class="text-muted">查看更多 <i class="icon iconfont icon-xiangyou pull-right"></i></a>
			</div>
		</div>
		<!--抢先看-->
<div class="container">
<div class="row"  style="margin-top:10px"><?php echo $aik['tv_ad']?></div></div>
		<!--电影-->
		<div class="hy-layout clearfix">
			<div class="hy-video-head">
				<ul class="pull-right">
				<li class="text-muted hidden-md hidden-sm hidden-xs"><a href="movie.php?page=1&cid=5"class="text-muted border-right">动作片</a> /</li><li class="text-muted hidden-md hidden-sm hidden-xs"><a href="movie.php?page=1&cid=6"class="text-muted border-right">喜剧片</a> /</li><li class="text-muted hidden-md hidden-sm hidden-xs"><a href="movie.php?page=1&cid=7"class="text-muted border-right">爱情片</a> /</li><li class="text-muted hidden-md hidden-sm hidden-xs"><a href="movie.php?page=1&cid=8"class="text-muted border-right">科幻片</a> /</li><li class="text-muted hidden-md hidden-sm hidden-xs"><a href="movie.php?page=1&cid=9"class="text-muted border-right">恐怖片</a> /</li><li class="text-muted hidden-md hidden-sm hidden-xs"><a href="movie.php?page=1&cid=10"class="text-muted border-right">剧情片</a> /</li><li class="text-muted hidden-md hidden-sm hidden-xs"><a href="movie.php?page=1&cid=11"class="text-muted border-right">战争片</a> /</li>

					<li class="active"><a href="movie.php" class="text-muted">更多 <i class="icon iconfont icon-right"></i></a></li>
				</ul>
				<h3 class="margin-0"><i class="icon iconfont icon-caidanicondianyinghui text-color"></i>最近更新</h3>
			</div>
			<div class="clearfix">
<?php include './inc/dyjx.php';?>


				<div class="hy-video-footer visible-xs clearfix">
					<a href="movie.php" class="text-muted">查看更多 <i class="icon iconfont icon-xiangyou pull-right"></i></a>
				</div>
			</div>
		</div>		<!--电影-->
		<div class="container">
<div class="row"  style="margin-top:10px"><?php echo $aik['zongyi_ad']?></div></div>
		<!--电视剧-->
		<div class="hy-layout clearfix">
			<div class="hy-video-head">
				<ul class="pull-right">
			<li class="text-muted hidden-md hidden-sm hidden-xs"><a href="movie.php?page=1&cid=12"class="text-muted border-right">国产剧</a> /</li><li class="text-muted hidden-md hidden-sm hidden-xs"><a href="movie.php?page=1&cid=13"class="text-muted border-right">港剧</a> /</li><li class="text-muted hidden-md hidden-sm hidden-xs"><a href="movie.php?page=1&cid=14"class="text-muted border-right">日剧</a> /</li><li class="text-muted hidden-md hidden-sm hidden-xs"><a href="movie.php?page=1&cid=15"class="text-muted border-right">欧美剧</a> /</li><li class="text-muted hidden-md hidden-sm hidden-xs"><a href="movie.php?page=1&cid=16"class="text-muted border-right">台剧</a> /</li><li class="text-muted hidden-md hidden-sm hidden-xs"><a href="movie.php?page=1&cid=17"class="text-muted border-right">韩剧</a> /</li>
<li class="text-muted hidden-md hidden-sm hidden-xs"><a href="movie.php?page=1&cid=21"class="text-muted border-right">泰剧</a> /</li>                
					<li class="active"><a href="movie.php" class="text-muted">更多 <i class="icon iconfont icon-right"></i></a></li>
				</ul>
				<h3 class="margin-0"><i class="icon iconfont icon-tv_icon text-color"></i>电视剧</h3>
			</div>
			<div class="clearfix">
<?php include './inc/tvjx.php';?>
		</div>
		<!--电视剧-->
						
<div class="container">
<div class="row"  style="margin-top:10px"><?php echo $aik['rp_ad']?></div></div>
<!--电视剧-->
		<div class="hy-layout clearfix">
			<div class="hy-video-head">
				<ul class="pull-right">
				<li class="text-muted hidden-md hidden-sm hidden-xs"><a href="movie.php?page=1&cid=3" class="text-muted border-right">综艺</a> /</li>
<li class="text-muted hidden-md hidden-sm hidden-xs"><a href="movie.php?page=1&cid=22"class="text-muted border-right">纪录片</a> /</li>             
					<li class="active"><a href="movie.php" class="text-muted">更多 <i class="icon iconfont icon-right"></i></a></li>
				</ul>
				<h3 class="margin-0"><i class="icon iconfont icon-jiemu text-color"></i>综艺</h3>
			</div>
			<div class="clearfix">
				 <?php include './inc/zyjx.php';?>
				 				</div><div class="hy-video-footer visible-xs clearfix">
					<a href="movie.php?page=1&cid=3" class="text-muted">查看更多 <i class="icon iconfont icon-xiangyou pull-right"></i></a>
				</div>
			</div>
		</div>		<!--综艺-->
									
<div class="container">
<div class="row"  style="margin-top:10px"><?php echo $aik['dongman_ad']?></div></div>
		<div class="hy-layout clearfix">
			<div class="hy-video-head">
				<ul class="pull-right">
				<li class="text-muted hidden-md hidden-sm hidden-xs"><a href="movie.php?page=1&cid=4" class="text-muted border-right">动漫</a> /</li>
               
					<li class="active"><a href="movie.php?page=1&cid=4" class="text-muted">更多 <i class="icon iconfont icon-right"></i></a></li>
				</ul>
				<h3 class="margin-0"><i class="icon iconfont icon-liebiaodaohang_dongman text-color"></i>动漫</h3>
			</div>
			<div class="clearfix">
				 <?php include './inc/dmjx.php';?>
						</div>				<div class="hy-video-footer visible-xs clearfix">
					<a href="movie.php" class="text-muted">查看更多 <i class="icon iconfont icon-xiangyou pull-right"></i></a>
				</div>
			</div>
		</div>		<!--动漫-->
				<!--合作伙伴--><div class="hy-layout hidden-md hidden-sm hidden-xs clearfix"><div class="hy-video-head"><h3 class="margin-0">合作伙伴</h3></div><div class="hy-footer-partner"><div class="item clearfix"><a href="http://www.iqiyi.com/" target="_blank" class="iqiyi"><span></span></a><a href="http://www.letv.com/" target="_blank" class="letv"><span></span></a><a href="http://www.wasu.cn/" target="_blank" class="wasu"><span></span></a><a href="http://www.fun.tv/" target="_blank" class="fun"><span></span></a><a href="http://www.hunantv.com/" target="_blank" class="hunantv"><span></span></a><a href="http://www.cntv.cn/" target="_blank" class="cntv"><span></span></a><a href="http://v.ifeng.com/" target="_blank" class="ifeng line-last"><span></span></a><a href="http://www.pptv.com/" target="_blank" class="pptv"><span></span></a><a href="http://www.kankan.com/?id=731032" target="_blank" class="kankan"><span></span></a><a href="http://www.56.com/" target="_blank" class="v56"><span></span></a><a href="http://www.ku6.com/" target="_blank" class="ku6"><span></span></a><a href="http://www.1905.com/" target="_blank" class="m1905"><span></span></a><a href="https://v.qq.com/" target="_blank" class="sina"><span></span></a><a href="http://www.yinyuetai.com/" target="_blank" class="yinyuetai line-last"><span></span></a></div></div></div><!--end 合作伙伴 -->
<div class="container">
<div class="row"  style="margin-top:10px"></div></div>
		<div class="hy-layout hidden-sm hidden-xs clearfix">
			<div class="hy-video-head">
				<h3 class="margin-0">友情链接</h3>
			</div>
			<div class="hy-footer-link">
				<div class="item clearfix">
					<ul class="clearfix">
						<?php echo $aik['youlian']?>								</ul>
				</div>
			</div>
		</div>		</div></div>
		<script>
	    var swiper = new Swiper('.hy-slide', {
	        pagination: '.swiper-pagination',
	        paginationClickable: true,
	        autoplay: 3000,
	        nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
	    });	    
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
						name: '点击查看',
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
	  <img class="pic-responsive" src="https://egame.qq.com/webapi/qrcode?content=<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];?>" alt="扫描二维码">
	  </p>
     </div>
	 </li> 
    <li><a data-toggle="tooltip" data-placement="top" class="" href="javascript:scroll(0,0)" title="TOP"><i class="icon iconfont icon-top02"></i></a></li>   
	</ul>
  </div>
<?php  include 'footer.php';?>
	<div style="position:fixed;width:300px;height:350px;top:50%;left:0%;margin-left:-150px;margin-top:-175px;display: none;z-index: 9999999;" id="gbewm" onclick="ewmgb()">
	<div style="text-align:center;line-height: 50px;background-color: #2db2ea;color: #fff;font-size: 20px;font-weight: bold;border-radius: 5px 5px 0px 0px;">扫码二维码，手机观看！</div>
	<img src="image/wem.png" id="ewmtp" style="width: 300px;height: 300px;border-radius: 0px 0px 5px 5px;"/>
</div>
<div class="row" style="margin-top:10px"></div>
		 <div class="hy-layout hidden-xs" style="border-top: 2px solid #204060;">
	         <div class="hy-footer-link">
	             <div class="item clearfix">
	                 <p style="padding: 0 4px;text-align:center" class="container-fluid"><font color="#FFFFFF"><span><?php echo $aik['foot']?><?php echo $aik['admin_email']?></span><br />
<span>Copyright &copy;&nbsp; <?php echo $aik['sitename']?> 版权所有</span></font><?php echo $aik['tongji']?><a href="http://w.ppdsw.xyz">源码更新</a></p>             
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

