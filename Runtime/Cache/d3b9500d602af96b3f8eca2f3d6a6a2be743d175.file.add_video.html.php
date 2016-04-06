<?php /* Smarty version Smarty-3.1.6, created on 2016-04-06 23:52:24
         compiled from "./Application/Admin/View\Video\add_video.html" */ ?>
<?php /*%%SmartyHeaderCode:63835704abffd4c285-13934498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3b9500d602af96b3f8eca2f3d6a6a2be743d175' => 
    array (
      0 => './Application/Admin/View\\Video\\add_video.html',
      1 => 1459957941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63835704abffd4c285-13934498',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5704abfff24d7',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5704abfff24d7')) {function content_5704abfff24d7($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
   <title>Role</title>
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
       //console.log(btntext);
       });
   });
   function MatchDemo(restr,matchstr){
   r = matchstr.match(restr);               // 在字符串 s 中查找匹配。
   return(r);                     // 返回匹配结果。}
   }

    </script>
<body >
<div class="container">
<div class="row top">
</div>
<div class="row wrap" id="top1">
<div class="form-group">
      <label for="firstname" class="col-md-2 control-label">电影名称:</label>
      <div class="col-md-2">
        <input type="text" class="form-control" name="m_name"placeholder="输入视屏名字">
      </div>
      <label for="firstname" class="col-md-1 control-label">演员:</label>
      <div class="col-md-2">
        <input type="text" class="form-control" name="m_actor"placeholder="说明:多个空格 格开">
      </div>
      <label for="firstname" class="col-md-1 control-label">导演:</label>
      <div class="col-md-2">
        <input type="text" class="form-control" name="m_regisseur"placeholder="输入导演名字">
      </div>
</div>
</div>
<div class="row wrap" id="top2">
<div class="form-group">
      <label for="firstname" class="col-md-2 control-label">播放地区:</label>
      <div class="col-md-2">
        <select class="form-control select-box" name="m_area">
         <option value="">请选择地区</option>
         <option value="内地">内地</option>
         <option value="香港">香港</option>
         <option value="台湾">台湾</option>
         <option value="韩国">韩国</option>
         <option value="美国">美国</option>
         <option value="欧洲">欧洲</option>
         <option value="法国">法国</option>
         <option value="日本">日本</option>
         <option value="泰国">泰国</option>
         <option value="其他">其他</option>
         </select>
      </div>
            <label for="firstname" class="col-md-1 control-label">推荐:</label>
      <div class="col-md-2">
        <select class="form-control select-box" name="m_level">
         <option value="">选择推荐值</option>
         <option value="1">推荐1</option>
         <option value="2">推荐2</option>
         <option value="3">推荐3</option>
         <option value="4">推荐4</option>
         <option value="5">推荐5</option>
         </select>
      </div>
      <label for="firstname" class="col-md-1 control-label">时长:</label>
      <div class="col-md-2" id="min-edit">
        <input type="text" class="form-control"  name="m_regisseur"placeholder="单位:分钟 60">
      </div>
</div>
</div>
<div class="row wrap" id='top3'>
<div class="form-group">
      <label for="firstname" class="col-md-2 control-label">上映时间:</label>
      <div class="col-md-2">
        <input type="text" class="form-control" name="m_showtime"placeholder="例: 2016">
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
        <input type="text" id="type-edit" class="form-control" name="m_type"placeholder="1.选择类型 2.点击添加 注:可选多个">
        </div>
</div>
</div>
<div class="row wrap" id="top4">
<div class="form-group">
      <label for="firstname" class="col-md-2 control-label">图片地址:</label>
      <div class="col-md-3">
        <input type="text" class="form-control" id="img-edit" name="m_showtime"placeholder="上传获得地址 或 填写网络地址">
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
    <input type="text" class="form-control"  name="m_showtime"placeholder="顶数量">
    </div>
    <div class="col-sm-2">
    <input type="text" class="form-control"  name="m_showtime"placeholder="踩数量">
    </div>
    <div class="col-sm-2">
    <input type="text" class="form-control "  name="m_showtime"placeholder="总人气">
    </div>
    <div class="col-sm-2">
    <input type="text" class="form-control"  name="m_showtime"placeholder="月人气">
    </div>
    <div class="col-sm-1">
    <input type="text" class="form-control"  name="m_showtime"placeholder="周人气">
    </div>
</div>
</div>

<div class="row wrap" id="top6">
<div class="form-gorup">
<label for="firstname" class="col-md-2 control-label">视屏简介:</label>
<div class="col-md-8">
<textarea class="form-control" id="text-list" rows="3"></textarea>
</div>
</div>
</div>

<div class="row wrap" id="top7">
<div class="form-gorup">
<label for="firstname" class="col-md-2 control-label">播放地址:</label>
<div class="col-md-3">
   <select class="form-control">
         <option value="">播放来源</option>
         <option value="1">新浪</option>
         <option value="2">乐视</option>
         <option value="3">腾讯</option>
         <option value="4">优酷</option>
         <option value="5">爱奇艺</option>
         <option value="5">其他</option>
   </select>
</div>
<label for="firstname" class="col-md-4 control-label">说明:多集情况下, 每行一个地址,不能有空行。</label>
<div class="col-md-8 col-md-offset-2">
<textarea class="form-control" id="text-list2" rows="3"></textarea>
<button type="submit" class="btn btn-primary">添加视屏</button>
</div>
</div>
</div>
</div> <!-- end <div class="container">
-->

</body>

</html><?php }} ?>