<?php
include ('./inc/aik.config.php');
?>
<div class="search hidden-xs"> 
               <form id="ff-search" role="search" action="seacher.php" method="GET">
			   <div class="select hidden-xs">
               <select id="search_from" onchange="changeAction();">
               <option value="./seacher.php" selected title="本站采集视频">本站搜</option>
               <option value="so.php"  title="资源比较全面">全网搜</option>
               </select>
               </div>
                            <input class="form-control" placeholder="输入影片关键词...宁少勿错" type="text" id="ff-wd" name="sousuo" required="">
                            <input type="submit" class="hide"><a href="javascript:" class="btns" title="搜索" onClick="$('#ff-search').submit();">
							<i class="icon iconfont icon-sou"></i></a></form>
			   </div>
				<div class="search visible-xs" style="width:70%;float: left;position: relative;margin-left: 15%;">
				<form id="mc-search" role="search" action="seacher.php" method="get">
				<div class="select">
               <select id="search_fromm" onchange="changeActionn();">
               <option value="seacher.php" selected title="本站采集视频">本站搜</option>
               <option value="so.php" title="资源比较全面">全网搜</option>
               </select>
               </div>
						<input class="form-control" placeholder="输入影片关键词..." type="text" id="ff-wd" name="sousuo" required="">
			           <input type="submit" class="hide"><a href="javascript:" class="btns" title="搜索" onClick="$('#mc-search').submit();">
					<i class="icon iconfont icon-sou"></i></a>
					</form>
			   	</div>
				<div class="visible-xs" style="width:15%;float:left;margin: 10px 0px 0px 0px;">
					<a class="btn btn-default" data-toggle="dropdown"><i class="icon iconfont icon-gengduo" style="font-size:16px;"></i></a>
					<ul class="dropdown-menu">
<li><a href="music.php" target="_blank">听音乐</a></li>
<li><a href="./ly/" target="_blank">去聊天</a></li>
<li><a href="zhibo.php" target="_blank">看直播</a></li>
<li><a href="yy.php" target="_blank">看舞曲</a></li>
<li><a href="mvk.php?m=1" target="_blank">MV视频</a></li>
<li><a href="./so.php" target="_blank">全网搜索</a></li>
<li><a href="lb.php" target="_blank">最新采集</a></li>
<li><a href="zbm.php" target="_blank">美女直播</a></li>
					</ul>
    			</div>
<div id="tagnav" class="weui-navigator weui-navigator-wrapper visible-xs"> 
					<ul class="weui-navigator-list" style="transition-timing-function: cubic-bezier(0.1, 0.57, 0.1, 1); transition-duration: 0ms; transform: translate(0px, 0px) translateZ(0px);">
                    <li ><a href="./">首页</a></li>					<li ><a href="movie.php">影片</a></li>					<li ><a href="yy.php">舞曲</a></li>					<li ><a href="movie.php?page=1&cid=4">动漫</a></li>					<li ><a href="movie.php?page=1&cid=3">综艺</a></li>                    <li ><a href="zhibo.php">电视</a></li>					<li ><a href="./zbm.php">美播</a></li>                  </ul>
				</div>			   
			   <ul class="menulist hidden-xs">
					<li><a href="./">首页</a></li>
					<li ><a href="movie.php">影片</a></li>					<li ><a href="zbm.php">美女播</a></li>					<li ><a href="movie.php?page=1&cid=4">动漫</a></li>					<li ><a href="movie.php?page=1&cid=3">综艺</a></li>					<li class="act6">
					<a href="so.php" target="_blank">搜索<img src="https://p.ssl.qhimg.com/t0180e145329d41255d.png" /></a>					
					</li>
										<li class="act9"><a href="javascript:history.back()" target="_blank">返回上页</a></li>
<li class="dropdown">
<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">导航栏<b class="caret"></b></a>
<ul class="dropdown-menuuu">
<?php echo $aik['dbts']?>
</ul>
</li>
