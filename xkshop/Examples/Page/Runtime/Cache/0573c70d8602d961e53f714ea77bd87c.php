<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
<html xmlns="http://www.w3.org/1999/xhtml">   
<head>   
<title>ThinkPHP: 分页操作</title>      
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />   
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/myPage.css" /> 
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/style.css" /> 
</head>   
<body>   
<h2>ThinkPHP示例之分页操作：普通分页和自定义样式分页</h2>
 本示例主要是展示一下分页的使用方法和基本原理。如果没有看到数据 请在表单处理或者CURD例子里面添加更多的数据。
 <div><A href="__APP__/Index">自定义分页</a>   <a href="__APP__/Index/Mypage">普通分页</a></div> 

<div id="test" >
<table cellpadding=2 cellspacing=2>
	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><tr>
			 <td></td>
			<td style="border-bottom:1px dotted silver"><?php echo ($vo["title"]); ?> <span style="color:gray">[ <?php echo (date('Y-m-d H:i:s',$vo["create_time"])); ?>]</span></td>
	  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
	 <tr>		
	 </tr>
 </table>
</div> <div class="green-black"><?php echo ($page); ?></div>
<table>
<tr>
 <td></td>
	<td><hr> 示例源码<br/>控制器IndexAction类<br/><?php highlight_file(LIB_PATH.'Action/IndexAction.class.php'); ?><br/></td>
 </tr>
 </table>
</body>   
</html>