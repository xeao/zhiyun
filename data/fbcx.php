
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
<?php
//新功能添加的影片推荐 start
if(is_file('./data/aik.seturl.php')){
include('./data/aik.seturl.php');
  if(is_array($seturl)){
  //print_r($seturl['title'][0]);//打印输出
    if(count($seturl['title'])>0){
        for($i=0;$i<count($seturl['title']);$i++){
          $urls=array(
            'name' => $seturl['title'][$i],
            'urls' => array(
              'type' => array($seturl['type'][$i]),
              'url' => array($seturl['newurl'][$i]),            
              'ly' => array('自定义')
            )
          );
          $mbz=str_replace('+','imjh',base64_encode($seturl['newurl'][$i]));
        echo '<div class="col-md-2 col-sm-3 col-xs-4">
							<a class="videopic lazy"  href="pl.php?url='.$seturl['newurl'][$i].'" title="" data-original="'.$seturl['img'][$i].'" style="background: url(./style/load.gif) no-repeat; background-position:50% 50%; background-size: cover;"><span class="play hidden-xs"></span><span class="score">推存</span></a>
							<div class="title">
								<h5 class="text-overflow"><a href="pl.php?url='.$seturl['newurl'][$i].'" >'.$seturl['title'][$i].'</a></h5>
							</div>
							<div class="subtitle text-muted text-muted text-overflow hidden-xs">影片'.$seturl['title'][$i].'</div>
						</div> ';
        } 
      echo '</div>';
    }
  }
}
//新功能添加的影片推荐 start
?>


