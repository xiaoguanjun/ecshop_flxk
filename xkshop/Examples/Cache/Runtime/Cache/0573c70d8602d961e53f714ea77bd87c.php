<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>ThinkPHP示例：数据缓存</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/common.css" />
 </head>
 <script language="JavaScript">
 <!--
	function showTrace(){
		document.getElementById('trace_info').innerHTML = document.getElementById('think_page_trace').innerHTML;
		document.getElementById('think_page_trace').innerHTML = '';
	}
 //-->
 </script>
 <body onload="showTrace()">
 <div class="main">
 <h2>ThinkPHP示例之：动态数据缓存</h2>
ThinkPHP可以方便地对动态数据进行缓存，并设置有效期。<br/>下面的例子把数据库的查询结果缓存，有效期设置为10秒，请<a href="__URL__">刷新页面</a>查看SQL记录和数据是否有变化~<br/>
<div class="result" style="font-weight:normal">
查询的数据结果：<br/>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?>[<?php echo ($vo["id"]); ?>]--<?php echo ($vo["title"]); ?><br/><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<div id="trace_info"></div>
 <table cellpadding=2 cellspacing=2>
 <tr>
 <td></td>
	<td>示例源码<br/>控制器IndexAction类<br/><?php highlight_file(LIB_PATH.'Action/IndexAction.class.php'); ?>
	项目配置<br/><?php highlight_file(CONFIG_PATH.'config.php'); ?></td>
 </tr>
 </table>
</div>
 </body>
</html>