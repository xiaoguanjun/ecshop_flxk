<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>ThinkPHP示例：Hello,ThinkPHP</title>
<link rel='stylesheet' type='text/css' href='__PUBLIC__/Css/common.css'>
 </head>
 <body>
 <div class="main">
 <h2>ThinkPHP示例之Hello,ThinkPHP</h2>
最简单的示例。
 <table  cellpadding=3 cellspacing=3>
  <tr>
	<td><div class="result"><?php echo ($hello); ?></div></td>
 </tr>
 <tr>
	<td><hr> 示例源码<br/>控制器IndexAction类<br/><?php highlight_file(LIB_PATH.'Action/IndexAction.class.php'); ?>
	</td>
 </tr>
 </table>
</div>
 </body>
</html>