<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>ThinkPHP示例：调试方法</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/common.css" />
 </head>
 <body>
 <div class="main">
 <h2>ThinkPHP示例之：调试方法</h2>
ThinkPHP可以在没有IDE工具的情况下很好的进行调试~相关的调试方法包括：<br/>
<div class="result" style="font-weight:normal;background:#ECECFF"><pre>
halt($msg)  //输出错误信息，并中止执行
system_out($msg) //输出调试信息到日志文件
dump($var, $echo=true, $label=null)  //输出变量信息
debug_start($label='') //记录调试开始时间
debug_end($label='')  //输出调试范围运行时间（相同label属于一个调试范围）
get_include_contents($filename) //获取载入文件的内容
	更高级的调试方法是使用Debug类
Debug::mark($name); // 标记一个调试位置
Debug::useTime($start,$end); // 返回区间所用的时间
Debug::useMemory($start,$end); // 返回区间所用的内存
</pre>
</div>
<table cellpadding=2 cellspacing=2>
 <tr>
 <td></td>
	<td>下面是一些调试方法的输出：<br/><div class="result" style="font-weight:normal">
		<span style="width:120px;text-align:right">实例化：</span><?php echo ($time1); ?><br/>
		<span style="width:120px;text-align:right">数 据 查 询：</span><?php echo ($time2); ?><br/>
		<span style="width:120px;text-align:right">实例化并查询：</span><?php echo ($time3); ?><br/>
		查询数据结果：<?php echo ($list); ?></div>
		<span style="color:red">如果配合页面Trace功能可以更加直观和方便地输出调试信息。</span>
		</td>
 </tr>
 <tr>
 <td></td>
	<td>示例源码<br/>控制器IndexAction类<br/><?php highlight_file(LIB_PATH.'Action/IndexAction.class.php'); ?></td>
 </tr>
 </table>

</div>
 </body>
</html>