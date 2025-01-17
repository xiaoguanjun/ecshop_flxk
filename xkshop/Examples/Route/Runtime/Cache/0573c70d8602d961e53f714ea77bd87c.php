<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>ThinkPHP示例：URL路由</title>
<link rel='stylesheet' type='text/css' href='__PUBLIC__/Css/common.css'>
 </head>
 <body>
 <div class="main">
 <h2>ThinkPHP示例之：URL路由</h2>
配置URL路由定义文件，设置简单路由和泛路由<br/>
 <table  cellpadding=3 cellspacing=3>
  <tr>
	<td><div class="result">当前URL：<br/><?php echo ($_SERVER['PHP_SELF']); ?> <br/>路由到模块 <span style="color:red"><?php echo (MODULE_NAME); ?></span> 的<span style="color:red"><?php echo (ACTION_NAME); ?></span> 操作<br/>
	参数:<br/>
	<?php if(is_array($vars)): $i = 0; $__LIST__ = $vars;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): ++$i;$mod = ($i % 2 )?><?php echo ($key); ?>=><?php echo ($v); ?><br/><?php endforeach; endif; else: echo "" ;endif; ?>
	</div></td>
 </tr>
 <tr>
	<td class="tLeft" >
	简单路由：<a href="__APP__/Category/1">/Category/1</a><br/>
	泛路由1：<a href="__APP__/Blog/1">/Blog/1</a><br/>
	泛路由2：<a href="__APP__/Blog/2008/2">/Blog/2008/2</a><br/>
	</td>
 </tr>
 <tr>
	<td><hr> 示例源码<br/>配置文件config.php<br/> <?php highlight_file(CONFIG_PATH.'config.php'); ?><br/>
	路由定义文件routes.php<br/> <?php highlight_file(CONFIG_PATH.'routes.php'); ?><br/>
	控制器IndexAction类<br/><?php highlight_file(LIB_PATH.'Action/IndexAction.class.php'); ?><br/>
	控制器BlogAction类<br/><?php highlight_file(LIB_PATH.'Action/BlogAction.class.php'); ?>
	</td>
 </tr>
 </table>
</div>
 </body>
</html>