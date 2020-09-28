<?php 
include('config.php'); 
$tips = '';
include('admincore.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include('inc.php'); ?>
<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/jquery.dragsort-0.4.min.js"></script>


</head>

<body>
<?php $nav = 'setting';include('head.php'); ?>

<div id="hd_main">
  <div align="center"><?php echo $tips?></div>
 <form name="configform" id="configform" action="./setting.php?act=setting&t=<?php echo time()?>" method="post" onsubmit="return subck()">

<table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" class="tablecss">
<tr class="thead">
<td colspan="10" align="center">基本设置</td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">网站名称：</td>
    <td width="690" valign="middle"><input name="edit" id="edit" type="hidden" value="1" /><input type="text" name="aik[sitename]" value="<?php echo $aik['sitename']?>" size="50">
      <span class="gray tips">如：智云影院</span></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">网站域名：</td>
    <td width="690" valign="middle"><input type="text" name="aik[pcdomain]" id="aik_pcdomain" value="<?php echo $aik['pcdomain']?>" size="20"></br>
      <span class="gray tips">域名填写最后要加“/”，如 http://zhiyun.ppdsw.xyz/</span></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">首页标题：</td>
    <td valign="top"><input type="text" name="aik[title]" value="<?php echo $aik['title']?>" size="50">
      <span class="gray tips">显示在首页标题上，一般不超过80个字符</span></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">首页关键字：</td>
    <td valign="top"><span class="gray tips">关键字请用英文逗号分开，一般不超过100个字符</span><br><textarea name="aik[keywords]" cols="80" rows="2"><?php echo $aik['keywords']?></textarea></td>
      
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">首页描述：</td>
    <td valign="top"><span class="gray tips">一般不超过200个字符</span><div class="cl5"></div><textarea name="aik[description]" cols="80" rows="3"><?php echo $aik['description']?></textarea></td>
</tr>
<!--<tr>
    <td width="125" align="right" valign="middle" class="s_title">默认搜索线路二：</td>
    <td valign="top"><font color="red">搜索线路二设置</font><div class="cl5"></div><textarea name="aik[gonggao]" cols="80" rows="1"><?php echo $aik['gonggao']?></textarea></td>
</tr>-->
<tr>
    <td width="125" align="right" valign="middle" class="s_title">播放页提示：</td>
    <td width="690" valign="middle"><input type="text" name="aik[icp]" id="aik_path" value="<?php echo $aik['icp']?>" size="70"></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">版权说明：</td>
    <td valign="top"><textarea name="aik[foot]" cols="80" rows="5"><?php echo $aik['foot']?></textarea></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">统计信息：</td>
    <td valign="top"><textarea name="aik[tongji]" cols="80" rows="5"><?php $aik['tongji'] = str_replace("\\'","'",$aik['tongji']);echo htmlspecialchars($aik['tongji'])?></textarea>
      </td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">友情链接：</td>

    <td valign="top"><font color="red">请保留智云影音链接，</font>感谢朋友们配合！<div class="cl5"></div><textarea name="aik[youlian]" cols="80" rows="5"><?php $aik['youlian'] = str_replace("\\'","'",$aik['youlian']);echo htmlspecialchars($aik['youlian'])?></textarea>
      </td>

</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">首页公告：</td>
    <td valign="top"><input type="text" name="aik[shouquan]" id="aik_shouquan" value="<?php echo $aik['shouquan']?>" size="80"></td>
</tr>
<tr class="thead">
<td colspan="10" align="center">资源网设置</td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">资源网链接1：</td>
    <td valign="top"><input type="text" name="aik[zhanwai]" id="aik_zhanwai" value="<?php echo $aik['zhanwai']?>" size="80"></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">资源网链接2：</td>
    <td valign="top"><input type="text" name="aik[zhanwai1]" id="aik_zhanwai1" value="<?php echo $aik['zhanwai1']?>" size="80"></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">资源网链接3：</td>
    <td valign="top"><input type="text" name="aik[zhanwai2]" id="aik_zhanwai2" value="<?php echo $aik['zhanwai2']?>" size="80"></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">资源网链接4：</td>
    <td valign="top"><input type="text" name="aik[zhanwai3]" id="aik_zhanwai3" value="<?php echo $aik['zhanwai3']?>" size="80"></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">资源网链接5：</td>
    <td valign="top"><input type="text" name="aik[zhanwai4]" id="aik_zhanwai4" value="<?php echo $aik['zhanwai4']?>" size="80"></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">资源网链接6：</td>
    <td valign="top"><input type="text" name="aik[zhanwai5]" id="aik_zhanwai5" value="<?php echo $aik['zhanwai5']?>" size="80"></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">资源网链接7：</td>
    <td valign="top"><input type="text" name="aik[zhanwai6]" id="aik_zhanwai6" value="<?php echo $aik['zhanwai6']?>" size="80"></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">资源网链接8：</td>
    <td valign="top"><input type="text" name="aik[zhanwai7]" id="aik_zhanwai7" value="<?php echo $aik['zhanwai7']?>" size="80"></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">资源网链接9：</td>
    <td valign="top"><input type="text" name="aik[zhanwai8]" id="aik_zhanwai8" value="<?php echo $aik['zhanwai8']?>" size="80"></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">资源网链接10：</td>
    <td valign="top"><input type="text" name="aik[zhanwai9]" id="aik_zhanwai9" value="<?php echo $aik['zhanwai9']?>" size="80"></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">资源网链接11：</td>
    <td valign="top"><input type="text" name="aik[zhanwai10]" id="aik_zhanwai10" value="<?php echo $aik['zhanwai10']?>" size="80"></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">资源网链接12：</td>
    <td valign="top"><input type="text" name="aik[zhanwai11]" id="aik_zhanwai11" value="<?php echo $aik['zhanwai11']?>" size="80"></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">资源网链接13：</td>
    <td valign="top"><input type="text" name="aik[zhanwai12]" id="aik_zhanwai12" value="<?php echo $aik['zhanwai12']?>" size="80"></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">资源网链接14：</td>
    <td valign="top"><input type="text" name="aik[zhanwai13]" id="aik_zhanwai13" value="<?php echo $aik['zhanwai13']?>" size="80"></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">资源网链接15：</td>
    <td valign="top"><input type="text" name="aik[zhanwai14]" id="aik_zhanwai14" value="<?php echo $aik['zhanwai14']?>" size="80"></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">资源网链接16：</td>
    <td valign="top"><input type="text" name="aik[zhanwai15]" id="aik_zhanwai15" value="<?php echo $aik['zhanwai15']?>" size="80"></td>
</tr>

<tr class="thead">
<td colspan="10" align="center">首页影片采集设置</td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">最近更新：</td>
    <td valign="top"><input type="text" name="aik[dyjx]" id="aik_dyjx" value="<?php echo $aik['dyjx']?>" size="80"></td>
</tr>
<tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">电视剧：</td>
    <td valign="top"><input type="text" name="aik[tvjx]" id="aik_tvjx" value="<?php echo $aik['tvjx']?>" size="80"></td>
</tr>
<tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">动漫频道：</td>
    <td valign="top"><input type="text" name="aik[dmjx]" id="aik_dmjx" value="<?php echo $aik['dmjx']?>" size="80"></td>
</tr>
<tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">综艺节目：</td>
    <td valign="top"><input type="text" name="aik[zyjx]" id="aik_zyjx" value="<?php echo $aik['zyjx']?>" size="80"></td>
</tr>
<tr>

<tr class="thead">
<td colspan="10" align="center">视频解析设置</td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">VIP视频解析接口：</td>
    <td valign="top"><font color="red">VIP视频默认解析接口为第一条</font><div class="cl5"></div>
	<textarea name="aik[jiekouyy]" cols="80" rows="1"><?php echo $aik['jiekouyy']?></textarea><br>
<textarea name="aik[jiekouyy1]" cols="80" rows="1"><?php echo $aik['jiekouyy1']?></textarea><br>	
<textarea name="aik[jiekouyy2]" cols="80" rows="1"><?php echo $aik['jiekouyy2']?></textarea><br>	
	</td>
</tr>
<tr class="thead">
<td colspan="10" align="center">账号设置</td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">登录账号：</td>
    <td valign="top"><input type="text" name="aik[admin_name]" value="<?php echo $aik['admin_name']?>" size="30">
      <span class="gray tips"></span></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">登录密码：</td>
    <td valign="top"><input type="text" name="aik[admin_pass]" value="" size="30">
      <span class="gray tips">不修改请留空</span></td>
</tr>
<tr>
    <td width="125" align="right" valign="middle" class="s_title">管理员邮箱：</td>
    <td valign="top"><input type="text" name="aik[admin_email]" value="<?php echo $aik['admin_email']?>" size="30">
</tr>
<tr class="thead">
<td colspan="10" align="center">LOGO图片设置</td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">页面栏LOGO：</td>
    <td valign="top">请投放170x60<div class="cl5"></div><textarea name="aik[logo_dh]" cols="80" rows="1"><?php echo $aik['logo_dh']?></textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">背景图片：</td>
    <td valign="top">请投放图片路径或链接<div class="cl5"></div><textarea name="aik[logo_ss]" cols="80" rows="1"><?php echo $aik['logo_ss']?></textarea></td>
</tr>
<tr class="thead">
<td colspan="10" align="center">首页广告</td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">公告栏广告：</td>
    <td valign="top">请投放1196x150<div class="cl5"></div><textarea name="aik[movie_ad]" cols="80" rows="3"><?php echo $aik['movie_ad']?></textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">热片栏广告：</td>
    <td valign="top">请投放1600x450<div class="cl5"></div><textarea name="aik[tv_ad]" cols="80" rows="3"><?php echo $aik['tv_ad']?></textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">电视剧栏广告：</td>
    <td valign="top">请投放1173x233<div class="cl5"></div><textarea name="aik[zongyi_ad]" cols="80" rows="3"><?php echo $aik['zongyi_ad']?></textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">动漫栏广告：</td>
    <td valign="top">请投放1170x270<div class="cl5"></div><textarea name="aik[dongman_ad]" cols="80" rows="3"><?php echo $aik['dongman_ad']?></textarea></td>
</tr>
<tr class="thead">
<td colspan="10" align="center">播放页广告</td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">综艺栏广告：</td>
    <td valign="top">请投放1173x270<div class="cl5"></div><textarea name="aik[rp_ad]" cols="80" rows="3"><?php echo $aik['rp_ad']?></textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">播放页公告信息：</td>
    <td valign="top">请输入信息<div class="cl5"></div><textarea name="aik[bofang_ad]" cols="80" rows="3"><?php echo $aik['bofang_ad']?></textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">播放器加载图：</td>
    <td valign="top">请投放880x452<div class="cl5"></div><textarea name="aik[jiazai_ad]" cols="80" rows="3"><?php echo $aik['jiazai_ad']?></textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">首页导航栏：</td>
    <td valign="top"><div class="cl5"></div><textarea name="aik[tishi_ad]" cols="80" rows="3"><?php echo $aik['tishi_ad']?></textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">网站顶部导航：</td>
    <td valign="top"><div class="cl5"></div><textarea name="aik[dbts]" cols="80" rows="3"><?php echo $aik['dbts']?></textarea></td>
</tr>
<tr class="thead">
<td colspan="10" align="center">其他设置</td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">首页链接：</td>
    <td valign="top">请输入QQ群链接或其他链接<div class="cl5"></div><textarea name="aik[zfb_ad]" cols="80" rows="3"><?php echo $aik['zfb_ad']?></textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">搜索目录设置：</td>
    <td valign="top">如源码上传二级目录访问请把二级目录名称输入此处，如：yss/后面加个/符号，非上传二级目录访问不用填写<div class="cl5"></div><textarea name="aik[wx_ad]" cols="80" rows="3"><?php echo $aik['wx_ad']?></textarea></td>
</tr>
<tr class="thead">
<td colspan="10" align="center">首页轮播图设置</td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">图位一</td>
    <td valign="top"><div class="cl5"></div><textarea name="aik[cebian1_ad]" cols="80" rows="5"><?php echo $aik['cebian1_ad']?></textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">图位二</td>
    <td valign="top"><div class="cl5"></div><textarea name="aik[cebian2_ad]" cols="80" rows="5"><?php echo $aik['cebian2_ad']?></textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">图位三</td>
    <td valign="top"><div class="cl5"></div><textarea name="aik[cebian3_ad]" cols="80" rows="5"><?php echo $aik['cebian3_ad']?></textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">图位四</td>
    <td valign="top"><div class="cl5"></div><textarea name="aik[cebian4_ad]" cols="80" rows="5"><?php echo $aik['cebian4_ad']?></textarea></td>
</tr>
<tr class="thead">
<td colspan="10" align="center">导航栏广告</td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">APP软件简介：</td>
    <td valign="top"><div class="cl5"></div><textarea name="aik[top1_ad]" cols="80" rows="3"><?php echo $aik['top1_ad']?></textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">软件下载链接：</td>
    <td valign="top"></a><div class="cl5"></div><textarea name="aik[top2_ad]" cols="80" rows="3"><?php echo $aik['top2_ad']?></textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">电脑版导航菜单购物：</td>
    <td valign="top"><div class="cl5"></div><textarea name="aik[top_ad]" cols="80" rows="3"><?php echo $aik['top_ad']?></textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">APP软件截图展示：</td>
    <td valign="top"><div class="cl5"></div><textarea name="aik[weixin_ad]" cols="80" rows="3"><?php echo $aik['weixin_ad'];?></textarea></td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">手机版导航菜单购物：</td>
    <td valign="top"><div class="cl5"></div><textarea name="aik[end_ad]" cols="80" rows="3"><?php echo $aik['end_ad'];?></textarea></td>
</tr>
<tr class="thead">
<td colspan="10" align="center">大淘客设置</td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">大淘客地址：</td>
    <td valign="top"><div class="cl5"></div><textarea name="aik[dtk_ad]" cols="80" rows="1"><?php echo $aik['dtk_ad']?></textarea></td>
</tr>
<tr class="thead">
<td colspan="10" align="center">视频侵权设置</td>
</tr>
<tr>
    <td width="150" align="right" valign="middle" class="s_title">侵权名称：</td>
    <td valign="top"><div class="cl5"></div><textarea name="aik[qq_name]" cols="80" rows="4"><?php echo $aik['qq_name']?></textarea></td>
</tr>

<tr><!--此处为更新及重要补充，请保留-->
<td colspan="10" align="center"><input name="edit" type="hidden" value="1" /><input id="configSave" type="submit" onclick="return getsort()" value="保 存"></td>
</tr>
</table>
</form>
<script type="text/javascript">
	$(".sxlist:first").dragsort();
</script>
</div>
<?php include('foot.php'); ?>
</body>
</html>
