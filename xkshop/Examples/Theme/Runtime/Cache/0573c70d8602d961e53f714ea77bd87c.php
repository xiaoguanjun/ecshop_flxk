<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>ThinkPHP示例：多模板</title>
<link rel='stylesheet' type='text/css' href='__PUBLIC__/Css/common.css'>
 </head>
 <body>
 <div class="main">
 <h2>ThinkPHP示例之：多模板切换</h2>
可以给项目定义多个主题模板，并进行切换。<br/>
我们在模板目录下面定义了default和think两个模板风格，可以进行切换
 <table  cellpadding=3 cellspacing=3>
  <tr>
	<td><div class="result" style="background:#FFFF99">这是default主题</div></td>
 </tr>
 <tr>
	<td class="tLeft" >切换到<a href="?t=think">主题think</a><br/>注意看不同主题的区别</td>
 </tr>
 <tr>
	<td><hr> 示例源码<br/>控制器IndexAction类<br/><?php highlight_file(LIB_PATH.'Action/IndexAction.class.php'); ?>
	</td>
 </tr>
 </table>
</div>
 </body>
</html>