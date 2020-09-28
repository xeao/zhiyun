<?php
include ('./inc/aik.config.php');
include ('./inc/zby.php');
$link=$aik['pcdomain'];
?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <script src="static/js/dropload.min.js"></script>
    <link href="static/css/app1.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="static/css/weuix.min.css">
    <script src="static/js/jquery.min2.js"></script>
    <script src="static/js/common.js"></script>
    <script>var SitePath='/',SiteAid='',SiteTid='',SiteId='';</script>

<style type="text/css">

body{
background-repeat:repeat;background-size:inherit;background-attachment:fixed;background-position:center center;background: url(<?php echo $aik['logo_ss']?>); 
}
@media (max-width: 767px){
    body:before{background: url() center 0 no-repeat; background-attachment: fixed;background-size: cover;} 
}
</style>
<title><?php echo $aik['title']?><?php echo $aik['sitename']?></title>
    <meta name="keywords" content="高清电视直播，<?php echo $aik['keywords']?>" />
    <meta name="description" content="在线电视直播，<?php echo $aik['description']?>" />
</head>

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
<body>
    <div class="icon">
        <div class="container izb">
            <nav class="zb-nav"><a href="javascript:;" class="taba cur">央视频道</a><a href="javascript:;" class="taba">卫视频道</a><a href="javascript:;" class="taba">电影频道</a><a href="javascript:;" class="taba">影视电视</a></nav>
            <div class="zb-con">
                <ul class="zb-list"><!--http://183.251.61.207/PLTV/88888888/224/3221225812/index.m3u8-->
                   <?php
foreach ($zb['cctv'] as $key1 => $value1) {
?>	    
<li><a href="javascript:;" data-url="jx/zb.php?url=<?php echo $value1['url']; ?>"><b><img src="<?php echo $value1['img']; ?>"></b><span><?php echo $value1['name']; ?></span></a></li>
<?php
}
?> 
                </ul>
                <ul class="zb-list hide">
                    <?php
foreach ($zb['wszb'] as $key1 => $value1) {
?>	    
<li><a href="javascript:;" data-url="jx/zb.php?url=<?php echo $value1['url']; ?>"><b><img src="<?php echo $value1['img']; ?>"></b><span><?php echo $value1['name']; ?></span></a></li>
<?php
}
?>
                </ul>
                <ul class="zb-list hide">

<?php
foreach ($zb['dyzb'] as $key1 => $value1) {
?>	    
<li><a href="javascript:;" data-url="jx/zb.php?url=<?php echo $value1['url']; ?>"><b><img src="<?php echo $value1['img']; ?>"></b><span><?php echo $value1['name']; ?></span></a></li>
<?php
}
?>


				
                 <!--<p style="text-align: center;padding: 25px">敬请期待</p> */-->
                </ul>
			<ul class="zb-list hide">
<?php
foreach ($zb['dyjs'] as $key1 => $value1) {
?>	    
<li><a href="javascript:;" data-url="jx/zb.php?url=<?php echo $value1['url']; ?>"><b><img src="<?php echo $value1['img']; ?>"></b><span><?php echo $value1['name']; ?></span></a></li>
<?php
}
?>		
                 <!--<p style="text-align: center;padding: 25px">敬请期待</p> */-->
                </ul>
            </div>
        </div>
    </div>
 
    <span style="display:none"><script src="static/js/tj.js"></script></span>
    <script src="static/js/lazyload.min.js"></script>
    <script src="static/js/app1.js"></script>
    <div class="zb-plays">
        <div class="mask"></div>
        <div class="zb-play"><a href="javascript:;" class="close"><i class="iconfont">&#xe622;</i></a>
            <div class="ipcon" id="ipcon">
                <iframe id="frmLive" allowtransparency="true" allowfullscreen="true" frameborder="0" scrolling="no" width="100%" src=""></iframe>
            </div>
        </div>
    </div>

    <script>
    
    var $a = $('.zb-nav a'),
        $ul = $('.zb-con ul'),
        $alast = $('.sitenav a:last-child'),
        $abtn = $('.zb-list li a');
    $alast.addClass('cur');
    $a.click(function() {
        var $this = $(this);
        var $t = $this.index();
        $a.removeClass();
        $this.addClass('cur');
        $ul.addClass('hide').removeClass('show');
        $ul.eq($t).addClass('show');
    });
    $abtn.on('click', function(e) {
        var vurl = $(this).attr("data-url");
        var w = document.documentElement ? document.documentElement.clientWidth : document.body.clientWidth;
        $('#frmLive').attr('src', vurl);
        if (w < 767) {
            $('#frmLive').height = 260;
        } else {
            $('#frmLive').height = 600;
        };
        $('html').addClass('show');
        e.stopPropagation();
    });
    $('.zb-plays .mask,.zb-plays .close').on('click', function() {
        $('html').removeClass('show');
        document.getElementById('frmLive').src = '';
    })
    $('.izbs').addClass('cur');
    $('.iapp').removeClass('cur');
    </script>
</body>
<script language="javascript" type="text/javascript" src="http://js.users.51.la/18759442.js"></script>
</html>
