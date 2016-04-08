<?php /* Smarty version Smarty-3.1.6, created on 2016-04-08 16:13:04
         compiled from "./Application/Admin/View\Video\add_video.html" */ ?>
<?php /*%%SmartyHeaderCode:63835704abffd4c285-13934498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3b9500d602af96b3f8eca2f3d6a6a2be743d175' => 
    array (
      0 => './Application/Admin/View\\Video\\add_video.html',
      1 => 1460103180,
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
       })
       $("#add-url").click(function(){
       playurl_add();
       })
       $("#upimg").click(function() {
         upfile();
       });

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

   function playurl_add(){   //填加播放地址
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

   function upfile(){  //上传文件
    var data = new FormData();
    var up_file=$("#exampleInputFile")[0].files;
    if(up_file.length==0){
      alert("你还没有选择文件呢！");
      return;
    }
    up_file=up_file[0];
    if(up_file.type!="image/jpeg"&&up_file.type!="image/gif"&&up_file.type!="image/png"&&up_file.type!="image/jpg")
    {
      alert("上传的图片类型仅限 JPG|PNG|GIF");
      return;
    }
    if(up_file.size>2000*1024){
      alert("上传的文件大小不能超过2M")
      return;
    }
    data.append('name',up_file);
    $.ajax({
      url:"<?php echo @__CONTROLLER__;?>
/up_img",
      type:"POST",
      data:data,
      processData:false,
      dataType:"json",
      contentType: false,    //不可缺
      change:false,
      success:function(msg){
        $("#img-edit").val(msg);
        $("#up-show").css({
          visibility:"visible",color:"red"
        });
      }
    })
   }
    </script>
<body >
<form role="form" method = 'post' action="<?php echo @__ACTION__;?>
">
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
        <input type="text" class="form-control"  name="m_duration"placeholder="单位:分钟 60">
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
        <input type="text" class="form-control" id="img-edit" name="m_pic"placeholder="上传获得地址 或 填写网络地址">
      </div>
     <div class="col-md-5">
     <div class="form-group">
     <div class="col-md-7" >
     <div class="form-group">
     <div class="col-md-6">
     <input type="file" id="exampleInputFile">
     </div>
     <div class="col-md-6">
     <p id="up-show">上传成功</p>
     </div>
     </div>
     </div>
     <div class="col-md-4">
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
    <input type="text" class="form-control"  name="m_scoreup"placeholder="顶数量">
    </div>
    <div class="col-sm-2">
    <input type="text" class="form-control"  name="m_scoredown"placeholder="踩数量">
    </div>
    <div class="col-sm-2">
    <input type="text" class="form-control "  name="m_hits" placeholder="总人气">
    </div>
    <div class="col-sm-2">  
    <input type="text" class="form-control"  name="m_monthhits"placeholder="月人气">
    </div>
    <div class="col-sm-1">
    <input type="text" class="form-control"  name="m_weekhits"placeholder="周人气">
    </div>
</div>
</div>

<div class="row wrap" id="top6">
<div class="form-gorup">
<label for="firstname" class="col-md-2 control-label">视屏简介:</label>
<div class="col-md-8">
<textarea class="form-control" id="text-list" rows="3" name="m_content"></textarea>
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
<textarea class="form-control" id="text-list2" rows="3" name="m_playurl"></textarea>
<button type="submit" class="btn btn-primary">添加视屏</button>
</div>
</div>
</div>
</div> <!-- end <div class="container">
-->
</form>

</body>

</html><?php }} ?>