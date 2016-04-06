<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
   <title>Role</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link href="<?php echo ($smarty["const"]["A_CSS"]); ?>bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
    <script src="<?php echo ($smarty["const"]["A_JS"]); ?>jquery.min.js"></script>
    <script src="<?php echo ($smarty["const"]["A_JS"]); ?>bootstrap.min.js"></script>
<body >
<div class="content" style="width:800px;">
<div class="col-sm-offset-2">
<form class="form-horizontal" role="form" method = 'post' action="<?php echo ($smarty["const"]["/index.php/Admin/Video/add_video"]); ?>">
   <input type="hidden" name="auth_id" value="<?php echo ($info); ?>"></input>
   <div class="form-group">
      <label for="name" class="col-sm-2 control-label">权限继承</label>
      <div class="col-sm-10">
      <select class="form-control" name="auth_pid">
         {foreach $name as $k => $v}
         <option value="<?php echo ($v["auth_id"]); ?>"><?php echo ($v["auth_name"]); ?></option>
         {/foreach}
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

</html>