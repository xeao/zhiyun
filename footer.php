<?php
include ('./inc/aik.config.php');
?>
<div class="tabbar visible-xs">
		<a href="<?php echo $aik['pcdomain']?>" class="item ">
        <i class="icon iconfont icon-shouye"></i>
        <p class="text">首页</p>
    </a>
	<a href="movie.php" class="item hongbao">
        <i class="icon iconfont icon-caidanicondianyinghui"></i>
        <p class="text">影片</p>
    </a><a href="lb.php" class="item hongbao">
        <i class="icon iconfont icon-tv_icon"></i>
        <p class="text">列表</p>
    </a><a href="movie.php?page=1&cid=4" class="item hongbao">
        <i class="icon iconfont icon-liebiaodaohang_dongman"></i>
        <p class="text">动漫</p>
    </a><a href="movie.php?page=1&cid=3" class="item hongbao">
        <i class="icon iconfont icon-jiemu"></i>
        <p class="text">综艺</p>
    </a><a href="so.php" class="item hongbao">
        <i class="icon iconfont icon-jiemuu"></i>
        <p class="text">搜索</p>
    </a>    
	</div>
