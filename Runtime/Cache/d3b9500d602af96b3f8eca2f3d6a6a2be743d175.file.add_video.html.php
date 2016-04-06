<?php /* Smarty version Smarty-3.1.6, created on 2016-04-06 14:26:07
         compiled from "./Application/Admin/View\Video\add_video.html" */ ?>
<?php /*%%SmartyHeaderCode:63835704abffd4c285-13934498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3b9500d602af96b3f8eca2f3d6a6a2be743d175' => 
    array (
      0 => './Application/Admin/View\\Video\\add_video.html',
      1 => 1459923413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63835704abffd4c285-13934498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'name' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5704abfff24d7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5704abfff24d7')) {function content_5704abfff24d7($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
   <title>Role</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link href="<?php echo @A_CSS;?>
bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
    <script src="<?php echo @A_JS;?>
jquery.min.js"></script>
    <script src="<?php echo @A_JS;?>
bootstrap.min.js"></script>
<body >
<div class="content" style="width:800px;">
<div class="col-sm-offset-2">
<form class="form-horizontal" role="form" method = 'post' action="<?php echo @__ACTION__;?>
">
   <input type="hidden" name="auth_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value;?>
"></input>
   <div class="form-group">
      <label for="name" class="col-sm-2 control-label">权限继承</label>
      <div class="col-sm-10">
      <select class="form-control" name="auth_pid">
         <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['name']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
         <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_name'];?>
</option>
         <?php } ?>
      </select>
      </div>
  </div>

   <div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">权限名称</label>
      <div class="col-sm-10">
         <input type="text" class="form-control" name="auth_name" 
            placeholder="请输入名字">
      </div>
   </div>
  <div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">权限模块</label>
      <div class="col-sm-10">
         <input type="text" class="form-control" name="auth_m" 
            placeholder="例:[Admin/index/edit] index为模块名">
      </div>
   </div>
  <div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">权限方法</label>
      <div class="col-sm-10">
         <input type="text" class="form-control" name="auth_a" 
            placeholder="例:[Admin/index/edit] edit为方法名">
      </div>
   </div>
   <div class="form-group">
      <label for="firstname" class="col-sm-2 control-label">菜单显示</label>
         <div class="checkbox col-sm-10">
            <label>
               <input type="checkbox" name="auth_type" value="1"> 菜单可见
            </label>
         </div>
   </div>
   <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
         <button type="submit" class="btn btn-success">添加权限</button>
      </div>
   </div>
</form>
</div>
</div> <!-- end -->
</body>

</html><?php }} ?>