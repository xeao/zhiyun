<?php
include ('./inc/aik.config.php');
?>
<div class="search"> 
<form id="ff-search" role="search" action="./seacher.php" method="GET">
                            <input class="form-control" placeholder="输入影片关键词...宁少勿错" type="text" id="ff-wd" name="sousuo" required="">
                            <input type="submit" class="hide"><a href="javascript:" class="btns" title="搜索" onClick="$('#ff-search').submit();"><i class="icon iconfont icon-sou"></i></a></form>
			   </div>			   
			   <ul class="menulist hidden-xs">
					<li><a href="./">首页</a></li>
					<li ><a href="movie.php">影片</a></li>					<li ><a href="zhibo.php">电视</a></li>					<li ><a href="movie.php?page=1&cid=4">动漫</a></li>					<li ><a href="movie.php?page=1&cid=3">综艺</a></li>					<li class="act6">
					<a href="so.php" target="_blank">抢先看<img src="https://p.ssl.qhimg.com/t0180e145329d41255d.png" /></a>					
					</li>
										<li class="act8"><a href="so.php" target="_blank">全网搜索</a></li>
<li class="act9"><a href="javascript:history.back()" target="_blank">返回</a></li>
<li class="dropdown">
<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">导航栏<b class="caret"></b></a>
<ul class="dropdown-menuuu">
<?php echo $aik['dbts']?>
</ul>
