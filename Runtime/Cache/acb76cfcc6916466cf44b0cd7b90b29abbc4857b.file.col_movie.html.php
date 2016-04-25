<?php /* Smarty version Smarty-3.1.6, created on 2016-04-25 16:53:16
         compiled from "./Application/Home/View\Index\col_movie.html" */ ?>
<?php /*%%SmartyHeaderCode:22642571c80ac6d8982-06287311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acb76cfcc6916466cf44b0cd7b90b29abbc4857b' => 
    array (
      0 => './Application/Home/View\\Index\\col_movie.html',
      1 => 1461574395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22642571c80ac6d8982-06287311',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_571c80ac86af6',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571c80ac86af6')) {function content_571c80ac86af6($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
   <title>添加影视</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link href="<?php echo @A_CSS;?>
bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet/less" type="text/css" href="<?php echo @A_CSS;?>
col_movie.less" />
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
    <script src="<?php echo @A_JS;?>
col_movie.js"></script>
<body>
<!--顶部-->
<div class="row top">
    <div class="col-md-2 col-md-offset-1" id="logo">
        <a href="#" class="tx3">680影视</a>
    </div>

    <div class="col-md-6 search">
        <form action="" class="form-inline" role="form">
          <div class="form-group">
            <input type="text" class="form-control" id="search_name" name="search_name">
            <button type="button" id="search" class="btn btn-default">搜索影视</button>
          </div>
          <ul >
          <li ><a href="#" style="color:red"><strong>十万个冷笑话</strong></a></li>
          <li ><a href="#" style="color:green"><strong>从天而降</strong></a></li>
          <li ><a href="#" style="color:green"><strong>十面埋伏</strong></a></li>
          <li ><a href="#" style="color:green"><strong>九层妖塔</strong></a></li>
          <li ><a href="#" style="color:red"><strong>武神赵子龙</strong></a></li>
          </ul>

        </form>

    </div>
</div>
<!--导航-->
<div class="row nav-wrap">
<div class="navbar">
<ul class="nav-ul">
<li><a class="nav-lock" href="#">首页</a></li>
<li><a href="#">电影</a></li>
<li><a href="#">电视剧</a></li>
<li><a href="#">动漫</a></li>
<li><a href="#">综艺节目</a></li>
<li><a href="#">微视屏</a></li>
</ul>
</div>
</div>

<div class="container">
    <div class="row turn-pic" falg="轮播图片">

        <div class="turn-bot">
          <ul>
            <li class="turn-click active">
            <img src="<?php echo @H_IMG;?>
1-1.jpg" alt="" class="img-responsive"><span></span>
            </li>
            <li class="turn-click">
            <img src="<?php echo @H_IMG;?>
1-1.jpg" alt="" class="img-responsive"><span></span>
            </li>
            <li class="turn-click">
            <img src="<?php echo @H_IMG;?>
1-1.jpg" alt="" class="img-responsive"><span></span>
            </li>
          </ul>
        </div>
        <div class="trun-img">
        <a class="trun-a" href="#" style="display:block;"><img src="<?php echo @H_IMG;?>
1001.jpg" alt="" class="img-responsive">
        </a>
        <a class="trun-a" href="#" style="display:none;"><img src="<?php echo @H_IMG;?>
1002.jpg" alt=" " class="img-responsive">
        </a>
        <a class="trun-a" href="#" style="display:none;"><img src="<?php echo @H_IMG;?>
1003.jpg" alt=" " class="img-responsive">
        </a>
        </div>
    </div>
    <div class="type-search" falg="类型搜索">
        <dl>
            <dt>按类型</dt>
            <dd>
                <a href="#">爱情</a>
                <a href="#">动画</a>
                <a href="#">动作</a>
                <a href="#">纪录片</a>
                <a href="#">惊悚</a>
                <a href="#">警匪</a>
                <a href="#">科幻</a>
                <a href="#">恐怖</a>
                <a href="#">武侠</a>
                <a href="#">伦理</a>
                <a href="#">青春</a>
                <a href="#">文艺</a>
                <a href="#">奇幻</a>
            </dd>
        </dl>
        <dl>
            <dt>按地区</dt>
            <dd>
                <a href="#">内地</a>
                <a href="#">台湾</a>
                <a href="#">香港</a>
                <a href="#">韩国</a>
                <a href="#">日本</a>
                <a href="#">美国</a>
                <a href="#">欧州</a>
                <a href="#">泰国</a>
                <a href="#">其他</a>
            </dd>
        </dl>

        <dl>
            <dt>按年份</dt>
            <dd>
                <a href="#">2016</a>
                <a href="#">2015</a>
                <a href="#">2014</a>
                <a href="#">2013</a>
                <a href="#">2012</a>
                <a href="#">2011</a>
                <a href="#">2010</a>
                <a href="#">更早</a>
            </dd>
        </dl>

        <dl>
            <dt>按明星</dt>
            <dd>
                <a href="#">范冰冰</a>
                <a href="#">柳岩</a>
                <a href="#">赵薇</a>
                <a href="#">周润发</a>
                <a href="#">周星驰</a>
                <a href="#">黄晓明</a>
                <a href="#">刘德华</a>
                <a href="#">林正英</a>
                <a href="#">葛优</a>
                <a href="#">周秀娜</a>
                <a href="#">刘亦菲</a>
                <a href="#" style="color:red">更多</a>
            </dd>
        </dl>
    </div><!--END type-search-->

    <div class="row col-wrap">
        <div class="col-md-9 left-wrap" falg="左侧内容分栏">
        <div class="row first-area" falg="第一个图片区">
            <div class="left-title">
            <i class="hx"></i>
            <div class="h2">最新热播</div>
            </div>
            <div class="first-pic">
               <ul class="big-pic">
                <li>
                  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                  <a href="#" class="tt_name">电影名字</a>
                  <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                </li>
                <li>
                  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                  <a href="#" class="tt_name">电影名字</a>
                  <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                </li>
                <li>
                  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                  <a href="#" class="tt_name">电影名字</a>
                  <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                </li>
                <li>
                  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                  <a href="#" class="tt_name">电影名字</a>
                  <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                </li>
               </ul>
               <ul class="small-pic">
                  <li>
                    <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                    <a href="#" class="tt_name">电影名字</a>
                    <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                    <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                    <a href="#" class="tt_name">电影名字</a>
                    <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                    <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                    <a href="#" class="tt_name">电影名字</a>
                    <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                    <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                    <a href="#" class="tt_name">电影名字</a>
                    <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
               </ul>
            </div>
        </div><!-- end first-area第一个图片区-->
        <div class=" row two-area">
            <div class="left-title">
            <i class="hx"></i>
            <div class="h2">精选大片</div>
            </div>
            <div class="first-pic">
               <ul class="big-pic">
                <li>
                  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                  <a href="#" class="tt_name">电影名字</a>
                  <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                </li>
                <li>
                  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                  <a href="#" class="tt_name">电影名字</a>
                  <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                </li>
                <li>
                  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                  <a href="#" class="tt_name">电影名字</a>
                  <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                </li>
                <li>
                  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                  <a href="#" class="tt_name">电影名字</a>
                  <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                </li>
               </ul>
               <ul class="small-pic">
                  <li>
                    <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                    <a href="#" class="tt_name">电影名字</a>
                    <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                    <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                    <a href="#" class="tt_name">电影名字</a>
                    <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                    <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                    <a href="#" class="tt_name">电影名字</a>
                    <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                    <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                    <a href="#" class="tt_name">电影名字</a>
                    <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
               </ul>
            </div>


        </div><!--end two-area-->

        </div><!--结束左侧分栏-->

        <div class="col-md-3 right-wrap" falg="右侧分栏">
        <div class="row hot-list">
            <div class="left-title">
            <i class="hx"></i>
            <div class="h2">热播榜</div>
            </div>
            <ul class="table-ul">
            <li class="table-li tp-gg">
              <span class="right-show">[电视剧]</span>
              <span class="num"><strong>1</strong></span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
            <li class="table-li tp-gg">
              <span class="right-show">[电视剧]</span>
              <span class="num"><strong>2</strong></span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
            <li class="table-li tp-gg">
              <span class="right-show">[电视剧]</span>
              <span class="num"><strong>3</strong></span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
            <li class="table-li tp-gg">
              <span class="right-show">[电视剧]</span>
              <span class="num-1"><strong>4</strong></span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
            <li class="table-li tp-gg">
              <span class="right-show">[电视剧]</span>
              <span class="num-1"><strong>5</strong></span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
            <li class="table-li tp-gg">
              <span class="right-show">[电视剧]</span>
              <span class="num-1"><strong>6</strong></span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
            <li class="table-li tp-gg">
              <span class="right-show">[电视剧]</span>
              <span class="num-1"><strong>7</strong></span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
            <li class="table-li tp-gg">
              <span class="right-show">[电视剧]</span>
              <span class="num-1"><strong>8</strong></span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
            <li class="table-li tp-gg">
              <span class="right-show">[电视剧]</span>
              <span class="num-1"><strong>9</strong></span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
            <li class="table-li tp-gg">
              <span class="right-show">[电视剧]</span>
              <span class="num-1"><strong>0</strong></span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
            </ul>
        </div>

        <div class="row good-list">
            <div class="left-title">
            <i class="hx"></i>
            <div class="h2">好评榜</div>
            </div>
            <ul class="table-ul">
            <li class="table-li tp-gg">
              <span class="right-show">[电视剧]</span>
              <span class="num"><strong>1</strong></span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
            <li class="table-li tp-gg">
              <span class="right-show">[电视剧]</span>
              <span class="num"><strong>2</strong></span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
            <li class="table-li tp-gg">
              <span class="right-show">[电视剧]</span>
              <span class="num"><strong>3</strong></span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
            <li class="table-li tp-gg">
              <span class="right-show">[电视剧]</span>
              <span class="num-1"><strong>4</strong></span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
            <li class="table-li tp-gg">
              <span class="right-show">[电视剧]</span>
              <span class="num-1"><strong>5</strong></span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
            <li class="table-li tp-gg">
              <span class="right-show">[电视剧]</span>
              <span class="num-1"><strong>6</strong></span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
            <li class="table-li tp-gg">
              <span class="right-show">[电视剧]</span>
              <span class="num-1"><strong>7</strong></span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
            <li class="table-li tp-gg">
              <span class="right-show">[电视剧]</span>
              <span class="num-1"><strong>8</strong></span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
            <li class="table-li tp-gg">
              <span class="right-show">[电视剧]</span>
              <span class="num-1"><strong>9</strong></span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
            <li class="table-li tp-gg">
              <span class="right-show">[电视剧]</span>
              <span class="num-1"><strong>0</strong></span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
            </ul>
        </div>

        </div><!--结束右侧分栏-->

    </div><!--end col-wrap-->

    <div class="bot-wrap">
    <div class=" row three-area">
            <div class="left-title">
            <i class="hx"></i>
            <div class="h2">热播喜剧</div>
            </div>
            <div class="bot-pic-pic">
               <ul class="big-pic">
                <li>
                  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                  <a href="#" class="tt_name">电影名字</a>
                  <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                </li>
                <li>
                  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                  <a href="#" class="tt_name">电影名字</a>
                  <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                </li>
                <li>
                  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                  <a href="#" class="tt_name">电影名字</a>
                  <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                </li>
                <li>
                  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                  <a href="#" class="tt_name">电影名字</a>
                  <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                </li>
                <li>
                  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                  <a href="#" class="tt_name">电影名字</a>
                  <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                </li>
            </div>
        </div> <!-- end three-area-->

        <div class=" row four-area">
            <div class="left-title">
            <i class="hx"></i>
            <div class="h2">动作电影</div>
            </div>
            <div class="bot-pic-pic">
               <ul class="big-pic">
                <li>
                  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                  <a href="#" class="tt_name">电影名字</a>
                  <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                </li>
                <li>
                  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                  <a href="#" class="tt_name">电影名字</a>
                  <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                </li>
                <li>
                  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                  <a href="#" class="tt_name">电影名字</a>
                  <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                </li>
                <li>
                  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                  <a href="#" class="tt_name">电影名字</a>
                  <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                </li>
                <li>
                  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                  <a href="#" class="tt_name">电影名字</a>
                  <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                </li>
            </div>
        </div> <!-- end four-area-->

        <div class=" row five-area">
            <div class="left-title">
            <i class="hx"></i>
            <div class="h2">暖暖电影</div>
            </div>
            <div class="bot-pic-pic">
               <ul class="big-pic">
                <li>
                  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                  <a href="#" class="tt_name">电影名字</a>
                  <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                </li>
                <li>
                  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                  <a href="#" class="tt_name">电影名字</a>
                  <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                </li>
                <li>
                  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                  <a href="#" class="tt_name">电影名字</a>
                  <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                </li>
                <li>
                  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                  <a href="#" class="tt_name">电影名字</a>
                  <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                </li>
                <li>
                  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                  <a href="#" class="tt_name">电影名字</a>
                  <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                </li>
            </div>
        </div> <!-- end five-area-->

        <div class=" row six-area">
            <div class="left-title">
            <i class="hx"></i>
            <div class="h2">国内电影</div>
            </div>
            <div class="bot-pic-pic">
               <ul class="big-pic">
                <li>
                  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                  <a href="#" class="tt_name">电影名字</a>
                  <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                </li>
                <li>
                  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                  <a href="#" class="tt_name">电影名字</a>
                  <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                </li>
                <li>
                  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                  <a href="#" class="tt_name">电影名字</a>
                  <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                </li>
                <li>
                  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                  <a href="#" class="tt_name">电影名字</a>
                  <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                </li>
                <li>
                  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
2.jpg" alt="" class="img-responsive"><span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                  <a href="#" class="tt_name">电影名字</a>
                  <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                </li>
            </div>
        </div> <!-- end six-area-->
    </div>


</div><!--end container-->
<?php }} ?>