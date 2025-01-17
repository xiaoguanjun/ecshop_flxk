<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>ThinkPHP示例：URL伪静态</title>
<link rel='stylesheet' type='text/css' href='__PUBLIC__/Css/common.css'>
 </head>
 <body>
 <div class="main">
 <h2>ThinkPHP示例之：URL伪静态</h2>
  可以轻而易举地通过配置来实现URL伪静态<br/>
 <table  cellpadding=3 cellspacing=3>
  <tr>
	<td><div class="result">当前URL：<br/><?php echo ($_SERVER['PHP_SELF']); ?> <br/>实际操作 <span style="color:red"><?php echo (MODULE_NAME); ?></span>模块 的<span style="color:red"><?php echo (ACTION_NAME); ?></span> 操作</div></td>
 </tr>
 <tr>
	<td class="tLeft" >正常URL：<a href="__URL__/read/id/5">/Index/read/id/5</a><br/>
	伪静态URL：<a href="__URL__/read/id/5.shtml">/Index/read/id/5.shtml</a>
	</td>
 </tr>
 <tr>
	<td><hr> 示例源码<br/>配置文件config.php<br/> <?php highlight_file(CONFIG_PATH.'config.php'); ?><br/>
	控制器IndexAction类<br/><?php highlight_file(LIB_PATH.'Action/IndexAction.class.php'); ?><br/>
	</td>
 </tr>
 </table>
</div>
 </body>
</html>