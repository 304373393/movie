<?php /* Smarty version Smarty-3.1.6, created on 2016-04-07 17:30:10
         compiled from "./Application/Admin/View\Video\edit_video.html" */ ?>
<?php /*%%SmartyHeaderCode:22131570613224d4f17-31035292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '483406355e4890c505c1aa0c7850c050ab1b5c29' => 
    array (
      0 => './Application/Admin/View\\Video\\edit_video.html',
      1 => 1460021407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22131570613224d4f17-31035292',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5706132293dea',
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5706132293dea')) {function content_5706132293dea($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
   <title>添加影视</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
    $(function($) {
      $("#tianjia").click( function () {
       MarStr();
       });
       $("#add-url").click(function(){
       playurl_add();
       })
   });
   function MatchDemo(restr,matchstr){
   r = matchstr.match(restr);               // 在字符串 s 中查找匹配。
   return(r);                     // 返回匹配结果。}
   }
   function MarStr(){
    var setext=$(".sele-2").find("option:selected").text();
       var btntext=$("#type-edit").val();
       if(btntext){
        if(MatchDemo(setext,btntext)){
          setext=setext+" 已经添加了!";
          alert(setext);
          return false;
        }
        btntext=btntext+" "+setext;
        $("#type-edit").val(btntext);
       }else{
        //setext=setext+" ";
        $("#type-edit").val(setext);
      }
   }

   function playurl_add(){
    var player=$("#player").find("option:selected").text();
    var setnum=$("#set").val();
    var play_url=$(".play-url").val();
    if(player&&setnum&&play_url)
    {
      setext=setnum+"|"+player+"|"+play_url;
      list_text=$("#text-list2")[0].value;
      if(list_text==""){
        $("#text-list2").val(setext);
      }else{
        setext=list_text+"\n"+setext;
        $("#text-list2").val(setext);
      }

    }else{
      alert("播放器来源 或 集数 和 播放地址 不能为空");}
   }

    </script>
<body >
<form role="form" method = 'post' action="<?php echo @__ACTION__;?>
/m_id/<?php echo $_smarty_tpl->tpl_vars['name']->value['m_id'];?>
">
<div class="container">
<div class="row top">
</div>
<div class="row wrap" id="top1">
<div class="form-group">
      <label for="firstname" class="col-md-2 control-label">电影名称:</label>
      <div class="col-md-2">
        <input type="text" class="form-control" name="m_name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value['m_name'];?>
">
      </div>
      <label for="firstname" class="col-md-1 control-label">演员:</label>
      <div class="col-md-2">
        <input type="text" class="form-control" name="m_actor"value="<?php echo $_smarty_tpl->tpl_vars['name']->value['m_actor'];?>
">
      </div>
      <label for="firstname" class="col-md-1 control-label">导演:</label>
      <div class="col-md-2">
        <input type="text" class="form-control" name="m_regisseur"value="<?php echo $_smarty_tpl->tpl_vars['name']->value['m_regisseur'];?>
">
      </div>
</div>
</div>
<div class="row wrap" id="top2">
<div class="form-group">
      <label for="firstname" class="col-md-2 control-label">播放地区:</label>
      <div class="col-md-2">
        <select class="form-control select-box" name="m_area">
         <option value="">请选择地区</option>
         <option value="内地" <?php if ($_smarty_tpl->tpl_vars['name']->value['m_area']=="内地"){?>selected="selected"<?php }?> >内地</option>
         <option value="香港" <?php if ($_smarty_tpl->tpl_vars['name']->value['m_area']=="香港"){?>selected="selected"<?php }?>>香港</option>
         <option value="台湾" <?php if ($_smarty_tpl->tpl_vars['name']->value['m_area']=="台湾"){?>selected="selected"<?php }?>>台湾</option>
         <option value="韩国" <?php if ($_smarty_tpl->tpl_vars['name']->value['m_area']=="韩国"){?>selected="selected"<?php }?>>韩国</option>
         <option value="美国" <?php if ($_smarty_tpl->tpl_vars['name']->value['m_area']=="美国"){?>selected="selected"<?php }?>>美国</option>
         <option value="欧洲" <?php if ($_smarty_tpl->tpl_vars['name']->value['m_area']=="欧洲"){?>selected="selected"<?php }?>>欧洲</option>
         <option value="法国" <?php if ($_smarty_tpl->tpl_vars['name']->value['m_area']=="法国"){?>selected="selected"<?php }?>>法国</option>
         <option value="日本" <?php if ($_smarty_tpl->tpl_vars['name']->value['m_area']=="日本"){?>selected="selected"<?php }?>>日本</option>
         <option value="泰国" <?php if ($_smarty_tpl->tpl_vars['name']->value['m_area']=="泰国"){?>selected="selected"<?php }?>>泰国</option>
         <option value="其他" <?php if ($_smarty_tpl->tpl_vars['name']->value['m_area']=="其他"){?>selected="selected"<?php }?>>其他</option>
         </select>
      </div>
            <label for="firstname" class="col-md-1 control-label">推荐:</label>
      <div class="col-md-2">
        <select class="form-control select-box" name="m_level">
         <option value="">选择推荐值</option>
         <option value="1" <?php if ($_smarty_tpl->tpl_vars['name']->value['m_level']=="1"){?>selected="selected"<?php }?>>推荐1</option>
         <option value="2"<?php if ($_smarty_tpl->tpl_vars['name']->value['m_level']=="2"){?>selected="selected"<?php }?>>推荐2</option>
         <option value="3"<?php if ($_smarty_tpl->tpl_vars['name']->value['m_level']=="3"){?>selected="selected"<?php }?>>推荐3</option>
         <option value="4"<?php if ($_smarty_tpl->tpl_vars['name']->value['m_level']=="4"){?>selected="selected"<?php }?>>推荐4</option>
         <option value="5"<?php if ($_smarty_tpl->tpl_vars['name']->value['m_level']=="5"){?>selected="selected"<?php }?>>推荐5</option>
         </select>
      </div>
      <label for="firstname" class="col-md-1 control-label">时长:</label>
      <div class="col-md-2" id="min-edit">
        <input type="text" class="form-control"  name="m_duration"value="<?php echo $_smarty_tpl->tpl_vars['name']->value['m_duration'];?>
">
      </div>
</div>
</div>
<div class="row wrap" id='top3'>
<div class="form-group">
      <label for="firstname" class="col-md-2 control-label">上映时间:</label>
      <div class="col-md-2">
        <input type="text" class="form-control" name="m_showtime"value="<?php echo $_smarty_tpl->tpl_vars['name']->value['m_showtime'];?>
">
      </div>
      <label for="firstname" class="col-md-1 control-label">类别:</label>
      <div class="col-md-3 sele-2">
        <select >
         <option value="">选择类型</option>
         <option value="1">爱情</option>
         <option value="2">动画</option>
         <option value="3">动作</option>
         <option value="4">纪录片</option>
         <option value="5">惊悚</option>
         <option value="6">警匪</option>
         <option value="7">科幻</option>
         <option value="8">恐怖</option>
         <option value="9">伦理</option>
         <option value="10">武侠</option>
         <option value="11">悬疑</option>
         <option value="12">恐怖</option>
         <option value="13">微电影</option>
         </select>
         <button class="btn btn-success" id="tianjia" type="button">添加>></button>
      </div>
        <div class="col-md-4">
        <input type="text" id="type-edit" class="form-control" name="m_type"value="<?php echo $_smarty_tpl->tpl_vars['name']->value['m_type'];?>
">
        </div>
</div>
</div>
<div class="row wrap" id="top4">
<div class="form-group">
      <label for="firstname" class="col-md-2 control-label">图片地址:</label>
      <div class="col-md-3">
        <input type="text" class="form-control" id="img-edit" name="m_pic"value="<?php echo $_smarty_tpl->tpl_vars['name']->value['m_pic'];?>
">
      </div>
     <div class="col-md-5">
     <div class="form-group">
     <div class="col-md-4">
     <input type="file" id="exampleInputFile">
     </div>
     <div class="col-md-4 col-md-offset-3">
     <button class="btn btn-success" id="upimg" type="button">上传图片</button>
     </div>
     </div>
     </div>
</div>
</div>
<div class="row wrap" id="top5">
<div class="form-gorup">
<label for="firstname" class="col-md-2 control-label">其他选项:</label>
    <div class="col-sm-2">
    <input type="text" class="form-control"  name="m_scoreup" value="<?php echo $_smarty_tpl->tpl_vars['name']->value['m_scoreup'];?>
">
    </div>
    <div class="col-sm-2">
    <input type="text" class="form-control"  name="m_scoredown" value="<?php echo $_smarty_tpl->tpl_vars['name']->value['m_scoredown'];?>
">
    </div>
    <div class="col-sm-2">
    <input type="text" class="form-control "  name="m_hits" value="<?php echo $_smarty_tpl->tpl_vars['name']->value['m_hits'];?>
">
    </div>
    <div class="col-sm-2">  
    <input type="text" class="form-control"  name="m_monthhits"value="<?php echo $_smarty_tpl->tpl_vars['name']->value['m_monthhits'];?>
">
    </div>
    <div class="col-sm-1">
    <input type="text" class="form-control"  name="m_weekhits"value="<?php echo $_smarty_tpl->tpl_vars['name']->value['m_weekhits'];?>
">
    </div>
</div>
</div>

<div class="row wrap" id="top6">
<div class="form-gorup">
<label for="firstname" class="col-md-2 control-label">视屏简介:</label>
<div class="col-md-8">
<textarea class="form-control" id="text-list" rows="3" name="m_content" ><?php echo $_smarty_tpl->tpl_vars['name']->value['m_content'];?>
</textarea>
</div>
</div>
</div>

<div class="row wrap" id="top8">
<div class="form-gorup">
<label for="firstname" class="col-md-2 control-label">播放设置:</label>
<div class="col-md-2">
   <select class="form-control" id="player">
         <option value="">播放来源</option>
         <option value="新浪">新浪</option>
         <option value="乐视">乐视</option>
         <option value="腾讯">腾讯</option>
         <option value="优酷">优酷</option>
         <option value="爱奇艺">爱奇艺</option>
         <option value="其他">其他</option>
   </select>
</div>
   <label for="firstname" class="col-md-1 control-label">集数:</label>
   <div class="col-md-6">
   <input type="text" class="form-control " id="set" placeholder="例: 01">
   </div>
</div>
</div>
<div class="row wrap" id="top7">
<div class="form-gorup">
<label for="firstname" class="col-md-2 control-label">播放地址:</label>
   <div class="col-md-5">
   <input type="text" class="form-control play-url" placeholder="例: http://www.le.com/ptv/vplay/21289646.html">
   </div>
   <div class="col-md-2">
    <button type="button" id="add-url" class="btn btn-info">添加地址</button>
    </div>
<div class="col-md-8 col-md-offset-2">
<textarea class="form-control" id="text-list2" rows="3" name="m_playurl"><?php echo $_smarty_tpl->tpl_vars['name']->value['m_playurl'];?>
</textarea>
<button type="submit" class="btn btn-primary">保存修改</button>
<a href="<?php echo @__CONTROLLER__;?>
">
<button type="button" class="btn btn-primary">返回列表</button>
</a>
</div>
</div>
</div>
</div> <!-- end <div class="container">
-->
</form>

</body>

</html><?php }} ?>