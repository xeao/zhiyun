<?php echo $onee [0]?>-<?php echo $ks[0] ?><?php echo $des[0] ?>
    <h1 class="fed-font-xxiv"><?php echo $onee[0] ?></h1>
    <p class="fed-text-muted"><?php echo $from; ?></p>
   </div>
   <div class="fed-arti-content fed-padding">
<?php
echo $string;
?> 
 </div>
   <script type="text/javascript">if(document.getElementById('fed-now')) document.getElementById('fed-now').innerHTML='1';if(document.getElementById('fed-count')) document.getElementById('fed-count').innerHTML='1';</script>
  </div>
  </div></div></div>
<div class="col-lg-wide-25 stui-pannel-side hidden-md hidden-sm hidden-xs">
<?php
						if (empty($mov[0])){
							$yc = 'style="display: none;"';
						}
						?>
				<div class="stui-pannel stui-pannel-bg clearfix" <?php echo $yc; ?>>
				<div class="stui-pannel-box">
                <div class="stui-pannel_hd">
						<div class="stui-pannel__head active bottom-line clearfix">
						<h3 class="title"><img src="/template/jingpin/img/icon_1.png" />相关电影</h3>
						</div>
				</div>
					<div class="stui-pannel_bd clearfix">
						<ul class="stui-vodlist__text active col-pd clearfix">
						<li class="col-xs-1 padding-0">
						<a class="text-overflow" href="/seacher-<?php echo $mov[0] ?>.html" title="查看《<?php echo $mov[0] ?>》最新影片"><img src="<?php echo $img[0] ?>" data-original="<?php echo $img[0] ?>" onerror=src="/template/jingpin/img/load.gif" alt="$mov[0]" style="width:80%;margin-left:10%;"/></a>
						<a class="text-overflow" href="/seacher-<?php echo $mov[0] ?>.html" title="查看《<?php echo $mov[0] ?>》最新影片"><h4 class="title" style="margin-left:10%;"><i class="icon iconfont icon-more text-muted pull-right"></i><?php echo $mov[0] ?></h4></a>
	<div class="stui-vodlist__detail"><p class="text text-overflow text-muted hidden-xs" tyle="margin-left:10%;">主演：<?php echo $actor[0]; ?>等</p></div></li>
						</ul>
						</div>
                  