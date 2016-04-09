<?php /* Smarty version Smarty-3.1.6, created on 2016-04-09 12:06:57
         compiled from "./Application/Admin/View\Video\index.html" */ ?>
<?php /*%%SmartyHeaderCode:52065705e07c7f7480-13880228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ac9003193327e84a3747f86e2ade9d16225d138' => 
    array (
      0 => './Application/Admin/View\\Video\\index.html',
      1 => 1460174814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52065705e07c7f7480-13880228',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5705e07c9202d',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5705e07c9202d')) {function content_5705e07c9202d($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\movie\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html>
<head>
   <title>后台影视首页</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <link href="<?php echo @A_CSS;?>
bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet/less" type="text/css" href="<?php echo @A_CSS;?>
ans.less" />
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
    <script src="<?php echo @A_JS;?>
jquery.min.js"></script>
    <script src="<?php echo @A_JS;?>
bootstrap.min.js"></script>
    <script src="<?php echo @A_JS;?>
less.min.js"></script>

    <script type="text/javascript">
 $(document).ready(function(){
   console.log($(".table tr:odd td"));
   $(".table tr:odd").css("background-color","#EAF5F5");
   $(".table tr:even").css("background-color","#FAFAF0");
});

    </script>
<body >
<div class="container">
<div class="row video-top">
<div class="row" id="nav-top">
<dl class="dl-horizontal" >
    <dt>电影筛选</dt>
    <dd> 
    <div class="selected">
      
    </div> 
    </dd>
</dl>
</div>
<div class="row">
    <div class="type-list">
          <dl class="dl-horizontal" id="af-type">
          <dt>按类型</dt>
          <dd>
                <span><a href="<?php echo @__ACTION__;?>
">全部</a></span>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['v']->value['type_de']==1){?>
                <span><a href="<?php echo @__ACTION__;?>
/type_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['type_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['type_data'];?>
</a></span>
                <?php }?>
                <?php } ?>
           </dd>
           </dl>
           <dl class="dl-horizontal">
           <dt>按地区</dt>
           <dd>
                <span><a href="<?php echo @__ACTION__;?>
">全部</a></span>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['v']->value['type_de']==3){?>
                <span><a href="<?php echo @__ACTION__;?>
/type_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['type_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['type_data'];?>
</a></span>
                <?php }?>
                <?php } ?>
           </dd>
           </dl>
           <dl class="dl-horizontal">
           <dt>按年份</dt>
           <dd>
                <span><a href="<?php echo @__ACTION__;?>
">全部</a></span>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['v']->value['type_de']==2){?>
                <span><a href="<?php echo @__ACTION__;?>
/type_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['type_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['type_data'];?>
</a></span>
                <?php }?>
                <?php } ?>
           </dd>
           </dl>
           <dl class="dl-horizontal">
           <dt>按明星</dt>
           <dd>
                <span><a href="<?php echo @__ACTION__;?>
">全部</a></span>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['v']->value['type_de']==4){?>
                <span><a href="<?php echo @__ACTION__;?>
/type_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['type_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['type_data'];?>
</a></span>
                <?php }?>
                <?php } ?>
            </dd>
            </dl>
        </div>
    </div>
</div>


<div class="row video-wrap">
<div class="table-responsive">
  <table class="table table-hover table-condensed">
    <!--<caption><h4>视屏列表</h4></caption>-->
   <thead>
      <tr>
         <th>编号</th>
         <th>名称</th>
         <th>分类</th>
         <th>来源</th>
         <th>人气</th>
         <th>推荐</th>
         <th>更新时间</th>
         <th>操作</th>
      </tr>
   </thead>
   <tbody>
      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['name']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
      <tr>
         <td><p><?php echo $_smarty_tpl->tpl_vars['v']->value['m_id'];?>
</p></td>
         <td><p><?php echo $_smarty_tpl->tpl_vars['v']->value['m_name'];?>
</p></td>
         <td><p><?php echo $_smarty_tpl->tpl_vars['v']->value['m_type'];?>
</p></td>
         <td><p><?php echo $_smarty_tpl->tpl_vars['v']->value['m_area'];?>
</p></td>
         <td><p><?php echo $_smarty_tpl->tpl_vars['v']->value['m_hits'];?>
</p></td>
         <td><p><?php echo $_smarty_tpl->tpl_vars['v']->value['m_level'];?>
</p></td>
         <td><p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['m_addtime'],"%Y/%m/%d %H:%M:%S");?>
</td>
         <td>
         <div>
         <a class="btn btn-success" href="<?php echo @__MODULE__;?>
/Video/edit_video/m_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['m_id'];?>
" role="button">修改</a>
         <a class="btn btn-info" href="#" role="button">删除</a>     
         </div>
         </td>
      </tr>
      <?php } ?>
   </tbody>
  </table>
</div>

</div>

</div><!--end div-->
</body>
</html><?php }} ?>