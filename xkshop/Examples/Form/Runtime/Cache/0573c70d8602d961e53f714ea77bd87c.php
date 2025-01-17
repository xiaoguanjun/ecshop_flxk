<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>ThinkPHP示例：表单提交、自动验证和自动填充</title>
<link rel='stylesheet' type='text/css' href='__PUBLIC__/Css/common.css'>
 </head>
 <body>
 <div class="main">
 <h2>ThinkPHP示例之表单处理：自动获取表单数据生成数据对象</h2>
 本示例对提交的表单数据进行处理，自动创建数据对象和进行自动验证和填充。
 <form method='post' action="__URL__/insert">
 <table cellpadding=2 cellspacing=2>
 <tr>
	<td class="tRight" width="12%">标题：</td>
	<td class="tLeft" ><input type="text" name="title" style="height:23px" class="large bLeft"></td>
 </tr>
  <tr>
	<td class="tRight" >邮箱：</td>
	<td class="tLeft" ><input type="text" name="email" style="height:23px" class="large bLeft"></td>
 </tr>
 <tr>
	<td class="tRight tTop" >内容：</td>
	<td><textarea name="content" class="large bLeft" rows="8" cols="25"></textarea></td>
 </tr>
 <tr>
	<td></td>
	<td><input type="submit" class="button" value="提 交"> <input type="reset" class="button" value="清 空"></td>
 </tr>
 <tr>
 <td></td>
	<td><hr></td>
 </tr>
  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><tr>
  <td></td>
	<td style="border-bottom:1px dotted silver"><?php echo ($vo["title"]); ?> <span style="color:gray">[<?php echo ($vo["email"]); ?> <?php echo (date('Y-m-d H:i:s',$vo["create_time"])); ?>]</span></td>
  </tr>
  <tr >
  <td></td>
	<td><div class="content"><?php echo (nl2br($vo["content"])); ?></div></td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
 <tr>
 <td></td>
	<td><hr> 示例源码<br/>控制器IndexAction类<br/><?php highlight_file(LIB_PATH.'Action/IndexAction.class.php'); ?><br/>模型FormModel类<br/><?php highlight_file(LIB_PATH.'Model/FormModel.class.php'); ?></td>
 </tr>
 </table>
   </form>
</div>
 </body>
</html>