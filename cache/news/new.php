</div>
					</div>
<?php
foreach ($one as $ni=>$cs){ 
?>

        <a class="fed-list-pics fed-lazy fed-part-16by9" href="content-<?php echo $one1[$ni] ?>-<?php echo $one2[$ni] ?>.html" target="_blank" style="background-image: url(&quot;<?php echo $one3[$ni] ?>&quot;);"><span class="fed-list-play fed-list-arts fed-hide-xs"></span></a>
      </dt>
      <dd class="fed-deta-content fed-col-xs7 fed-col-sm8 fed-col-lg9">
       <h3 class="fed-visible"><a class="fed-part-etwo fed-visible" href="content-<?php echo $one1[$ni] ?>-<?php echo $one2[$ni] ?>.html"target="_blank" ><?php echo $cs ?></a></h3>
       <div class="fed-hide-xs fed-text-muted">
        <p class="fed-part-etwo"><?php echo $nr[$ni] ?></p>
       </div>
       <span class="fed-visible fed-text-muted"><?php echo $sj[$ni] ?></span>
      </dd>
     </dl></div>
<?php } ?>
<ul class="stui-page text-center cleafix">
<?php echo getPageHtmll($page,99,'');?><li><a>共99页</a></li>
</ul>
</div>
