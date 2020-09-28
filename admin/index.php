<?php 
include('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>智云影视管理后台 - Powered by 官方QQ群：921019449</title>
<meta name="keywords" content="智云影音源码" />
<meta name="description" content="智卓星网，官方联系QQ号2248186422" />
<link href="./images/woaik.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" type="image/x-icon" href="./../favicon.ico">
</head>
<body>
<?php $nav = 'home';include('head.php'); ?>
<div id="hd_main">
   <div style="margin:20px;">

      <table width="600" border="0" class="tablecss" cellspacing="0" cellpadding="0" align="center">
   <tr>
    <td colspan="2" align="center">欢迎使用智云影院管理系统！</td>
    </tr>
  <tr>
    <td align="right">当前使用版：</td>
    <td><span>V1.1</span></td>
  </tr>
  <tr>
    <td align="right">最新版：</td>
    <td><a href="http://w.ppdsw.xyz" target="_blank"><font color="#FF0000">点击查看</font></a></td>
  </tr>
  <tr>
    <td width="213" align="right">服务器操作系统：</td>
    <td width="387"><?php $os = explode(" ", php_uname()); echo $os[0];?> (<?php if('/'==DIRECTORY_SEPARATOR){echo $os[2];}else{echo $os[1];} ?>)</td>
  </tr>
  <tr>
    <td width="213" align="right">服务器解译引擎：</td>
    <td width="387"><?php echo $_SERVER['SERVER_SOFTWARE'];?></td>
  </tr>
  <tr>
    <td width="213" align="right">PHP版本：</td>
    <td width="387"><?php echo PHP_VERSION?></td>
  </tr>
  <tr>
    <td align="right">域名：</td>
    <td><?php echo $_SERVER['HTTP_HOST']?></td>
  </tr>
  <tr>
    <td align="right">allow_url_fopen：</td>
    <td><?php echo ini_get('allow_url_fopen') ? '<span class="green">支持</span>' : '<span class="red">不支持</span>'?></td>
  </tr>
  <tr>
    <td align="right">curl_init：</td>
    <td><?php if ( function_exists('curl_init') ){ echo '<span class="green">支持</span>' ;}else{ echo '<span class="red">不支持</span>';}?></td>
  </tr>

<tr>
    <td align="right">/data/目录权限检测：</td>
    <td><?php echo is_writable('../data/') ? '<span class="green">可写</span>' : '<span class="red">不可写</span>'?></td>
  </tr>  

  <tr>
    <td colspan="2" style="line-height:220%; text-indent:28px;">欢迎使用本程序，源码交流群<font color="red">（QQ群20：916340006；QQ群21：921019449。</br>站长QQ1：2248186422；站长QQ2：1455112844））</font></a>，感谢朋友们的支持！</br>更多精品资源发布：<a href="http://zhiyunzz.simplesite.com" target="_blank">zhiyunzz.simplesite.com</a></font></br></br>
</td>
    </tr>
   
</table>

   </div>

</div>
<?php include('foot.php'); ?>
</body>
</html>
