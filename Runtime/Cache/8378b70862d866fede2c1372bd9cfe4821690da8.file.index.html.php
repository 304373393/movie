<?php /* Smarty version Smarty-3.1.6, created on 2016-04-24 16:46:42
         compiled from "./Application/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:25168570db381b21100-19913527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8378b70862d866fede2c1372bd9cfe4821690da8' => 
    array (
      0 => './Application/Home/View\\Index\\index.html',
      1 => 1461485885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25168570db381b21100-19913527',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_570db381c74ed',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570db381c74ed')) {function content_570db381c74ed($_smarty_tpl) {?> <!DOCTYPE html>
<html>
<head>
   <title>添加影视</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link href="<?php echo @A_CSS;?>
bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet/less" type="text/css" href="<?php echo @A_CSS;?>
home.less" />
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
home.js"></script>

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
<!--内容-->
<div class="row wrap">
<!--左侧大内容-->
<div class="col-md-9 left-wrap">
<!--首页动画-->
<div class="row turn-pic">
    <div class="turn-bot">
    <ul>
        <li class="turn-click active">
        <img src="<?php echo @H_IMG;?>
1-1.jpg" alt="" class="img-responsive"></img><span></span>
        </li>
        <li class="turn-click">
        <img src="<?php echo @H_IMG;?>
1-1.jpg" alt="" class="img-responsive"></img><span></span>
        </li>
        <li class="turn-click">
        <img src="<?php echo @H_IMG;?>
1-1.jpg" alt="" class="img-responsive"></img><span></span>
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
<!--今日热点-->
<div class="row hot-pints">
      <div class="left-title" flag="右侧标题">
      <i class="hx"></i>
      <div class="h2">热点资讯</div>
      </div>
<!--今日热点左侧-->
    <div class="col-md-6">
        <div class="hot-pic" flag="ans_热点动画图">
            <div class="turn-hot">
             <ul>
                <li class="hot-click hot-active">
                <span></span>
                </li>
                <li class="hot-click">
                <span></span>
                </li>
                <li class="hot-click">
                <span></span>
                </li>
            </ul>
            </div>

            <div class="hot-img">
                <a class="hot-a" href="#" style="display:block;"><img src="<?php echo @H_IMG;?>
1001.jpg" alt="" class="img-responsive"><span class="a_name" >热点名字1</span>
                </a>
                <a class="hot-a" href="#" style="display:none;"><img src="<?php echo @H_IMG;?>
1002.jpg" alt=" " class="img-responsive"><span class="a_name" >热点名字1</span>
                </a>
                <a class="hot-a" href="#" style="display:none;"><img src="<?php echo @H_IMG;?>
1003.jpg" alt=" " class="img-responsive"><span class="a_name" >热点名字1</span>
                </a>
            </div>
            

        </div>
        <div class="row">
        <div class="hot-bot-pic" flag="ans_热点小图">
        <a href="#" class="bulk"><img src="<?php echo @H_IMG;?>
3.jpg" alt="" class="img-responsive">
                <span class="hot_name" >热点名字大在\在在在在在在在大大</span><span class="bg-img"></span><i class="ico"></i></a>
        </div>

        <div class="hot-bot-pic bot-pic1" flag="ans_热点小图">
        <a href="#" class="bulk"><img src="<?php echo @H_IMG;?>
3.jpg" alt="" class="img-responsive">
                <span class="hot_name" >热点名字1</span><span class="bg-img"></span><i class="ico"></i></a>
        </div>
        </div>

    </div>
    <!--今日热点右侧-->
    <div class="col-md-6">

        <div class="col-md-6">
                <div class="hot-right-top hot-top1"flag="ans_热点小图">
                <a href="#" class="bulk"><img src="<?php echo @H_IMG;?>
1.jpg" alt="" class="img-responsive">
                <span class="hot_name" >热点名字1</span><span class="bg-img"></span><i class="ico"></i></a>
                </div>
                <div class="hot-right-pic hot-top1" flag="ans_热点小图">
                <a href="#" class="bulk"><img src="<?php echo @H_IMG;?>
3.jpg" alt="" class="img-responsive">
                <span class="hot_name" >热点名字1</span><span class="bg-img"></span><i class="ico"></i></a>
                </div>
        </div>

        <div class="col-md-6">
                  <div class="hot-right-top" flag="ans_热点小图">
                  <a href="#" class="bulk"><img src="<?php echo @H_IMG;?>
1.jpg" alt="" class="img-responsive">
                <span class="hot_name" >热点名字1</span><span class="bg-img"></span><i class="ico"></i></a>
                  </div>

                  <div class="hot-right-pic" flag="ans_热点小图">
                    <a href="#" class="bulk"><img src="<?php echo @H_IMG;?>
3.jpg" alt="" class="img-responsive">
                <span class="hot_name" >热点名字1</span><span class="bg-img"></span><i class="ico"></i></a>
                  </div>
        </div>

    </div>

</div> <!--end hot-pints-->

<div class="row movie-area" flag="ans_电影区域">
      
      <div class="movie-title" flag="ans_电影标题">
      <div class="left-title">
      <i class="hx"></i>
      <div class="h2">电影</div>
        <ul>
            <li >
              <a href="#" class="on">热门</a>
            </li>
            <li>
              <a href="#">热门</a>
            </li>
            <li>
              <a href="#">热门</a>
            </li>
            <li>
              <a href="#">热门</a>
            </li>
        </ul>
        <div class="more">
          <a href="#">更多</a>
        </div>
      </div>
      </div>
       <div class="movie-dec" flag="ans_电影列表">
          <div class="movie-list">
              <ul class="movie-on" style="display:block;">
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
      </div>   
</div> <!-- edn movie-area-->

<div class="row tv-area" flag="ans_电视区域">

      <div class="tv-title" flag="ans_电影标题">
      <div class="left-title">
      <i class="hx"></i>
      <div class="h2">电视</div>
        <ul>
            <li >
              <a href="#" class="on">热门</a>
            </li>
            <li>
              <a href="#">热门</a>
            </li>
            <li>
              <a href="#">热门</a>
            </li>
            <li>
              <a href="#">热门</a>
            </li>
        </ul>
        <div class="more">
          <a href="#">更多</a>
        </div>
      </div>
      </div>
      <div class="tv-dec">
          <div class="tv-list">
              <ul class="tv-on" style="display: block;">
                  <li>
                      <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
4.jpg" alt="" class="img-responsive">
                      <span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                      <a href="#" class="tt_name">电视名字</a>
                      <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                      <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
4.jpg" alt="" class="img-responsive">
                      <span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                      <a href="#" class="tt_name">电视名字</a>
                      <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                      <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
4.jpg" alt="" class="img-responsive">
                      <span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                      <a href="#" class="tt_name">电视名字</a>
                      <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                      <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
4.jpg" alt="" class="img-responsive">
                      <span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                      <a href="#" class="tt_name">电视名字</a>
                      <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                      <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
4.jpg" alt="" class="img-responsive">
                      <span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                      <a href="#" class="tt_name">电视名字</a>
                      <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                      <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
4.jpg" alt="" class="img-responsive">
                      <span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                      <a href="#" class="tt_name">电视名字</a>
                      <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                      <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
4.jpg" alt="" class="img-responsive">
                      <span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                      <a href="#" class="tt_name">电视名字</a>
                      <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                      <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
4.jpg" alt="" class="img-responsive">
                      <span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                      <a href="#" class="tt_name">电视名字</a>
                      <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                      <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
4.jpg" alt="" class="img-responsive">
                      <span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                      <a href="#" class="tt_name">电视名字</a>
                      <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                      <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
4.jpg" alt="" class="img-responsive">
                      <span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                      <a href="#" class="tt_name">电视名字</a>
                      <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                      <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
4.jpg" alt="" class="img-responsive">
                      <span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                      <a href="#" class="tt_name">电视名字</a>
                      <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                      <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
4.jpg" alt="" class="img-responsive">
                      <span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                      <a href="#" class="tt_name">电视名字</a>
                      <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
              </ul>
          </div>
      </div>
</div> <!-- edn tv-area-->

<div class="row variety-area" flag="ans_综艺区域">

      <div class="variety-title" flag="ans_综艺标题">
      <div class="left-title">
      <i class="hx"></i>
      <div class="h2">综艺节目</div>
        <ul>
            <li >
              <a href="#" class="on">热门</a>
            </li>
            <li>
              <a href="#">热门</a>
            </li>
            <li>
              <a href="#">热门</a>
            </li>
            <li>
              <a href="#">热门</a>
            </li>
        </ul>
        <div class="more">
          <a href="#">更多</a>
        </div>
      </div>
      </div>

      <div class="variety-dec">
          <div class="variety-list">
              <ul class="variety-on" style="display: block;">
                  <li>
                      <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
7.jpg" alt="" class="img-responsive">
                      <span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                      <a href="#" class="tt_name">综艺名字</a>
                      <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                      <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
7.jpg" alt="" class="img-responsive">
                      <span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                      <a href="#" class="tt_name">综艺名字</a>
                      <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                      <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
7.jpg" alt="" class="img-responsive">
                      <span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                      <a href="#" class="tt_name">综艺名字</a>
                      <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                      <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
7.jpg" alt="" class="img-responsive">
                      <span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                      <a href="#" class="tt_name">综艺名字</a>
                      <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                      <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
7.jpg" alt="" class="img-responsive">
                      <span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                      <a href="#" class="tt_name">综艺名字</a>
                      <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                      <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
7.jpg" alt="" class="img-responsive">
                      <span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                      <a href="#" class="tt_name">综艺名字</a>
                      <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                      <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
7.jpg" alt="" class="img-responsive">
                      <span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                      <a href="#" class="tt_name">综艺名字</a>
                      <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                      <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
7.jpg" alt="" class="img-responsive">
                      <span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                      <a href="#" class="tt_name">综艺名字</a>
                      <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                      <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
7.jpg" alt="" class="img-responsive">
                      <span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                      <a href="#" class="tt_name">综艺名字</a>
                      <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                </ul>
            </div>
        </div>

</div> <!-- edn variety-area-->

<div class="row cartoon-area" flag="ans_动漫区域">

      <div class="cartoon-title" flag="ans_动漫标题">
      <div class="left-title">
      <i class="hx"></i>
      <div class="h2">动漫</div>
        <ul>
            <li >
              <a href="#" class="on">热门</a>
            </li>
            <li>
              <a href="#">热门</a>
            </li>
            <li>
              <a href="#">热门</a>
            </li>
            <li>
              <a href="#">热门</a>
            </li>
        </ul>
        <div class="more">
          <a href="#">更多</a>
        </div>
      </div>
      </div>

      <div class="cartoon-dec">
          <div class="cartoon-list">
              <ul class="cartoon-on" style="display: block;">
                  <li>
                      <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
6.jpg" alt="" class="img-responsive">
                      <span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                      <a href="#" class="tt_name">动漫名字</a>
                      <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                      <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
6.jpg" alt="" class="img-responsive">
                      <span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                      <a href="#" class="tt_name">动漫名字</a>
                      <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                      <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
6.jpg" alt="" class="img-responsive">
                      <span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                      <a href="#" class="tt_name">动漫名字</a>
                      <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                      <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
6.jpg" alt="" class="img-responsive">
                      <span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                      <a href="#" class="tt_name">动漫名字</a>
                      <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                      <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
6.jpg" alt="" class="img-responsive">
                      <span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                      <a href="#" class="tt_name">动漫名字</a>
                      <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                      <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
6.jpg" alt="" class="img-responsive">
                      <span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                      <a href="#" class="tt_name">动漫名字</a>
                      <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                      <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
6.jpg" alt="" class="img-responsive">
                      <span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                      <a href="#" class="tt_name">动漫名字</a>
                      <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                      <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
6.jpg" alt="" class="img-responsive">
                      <span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                      <a href="#" class="tt_name">动漫名字</a>
                      <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
                  <li>
                      <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
6.jpg" alt="" class="img-responsive">
                      <span class="tv_name" ></span><span class="bg-img"></span><i class="ico"></i></a>
                      <a href="#" class="tt_name">动漫名字</a>
                      <span class="actor_name"style="color:#7D7D8D">主演名字</span>
                  </li>
              </ul>
          </div>
      </div>  
</div> <!-- edn cartoon-area-->

</div> <!--end left-wrap-->

<!--右侧小内容-->
<div class="col-md-3 right-wrap">
<!--右侧排行榜-->
<div class="row ranking-list" id="ranking-top">
    <div class="list-top table-list">
        <div class="table" id="ranking-table">
        <a href="###" class="list-on">总榜</a>
        <a href="###">电影</a>
        <a href="###">电视剧</a>
        <a href="###">综艺</a>
        <a href="###">动漫</a>
        </div>
        <ul class="table-ul" id="top-ul">
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
        <ul class="table-ul" style="display:none">
            <li class="table-li tp-gg">
              <span class="right-show">[电视剧]</span>
              <span class="num">1</span>
              <a href="#" class="tab-a">唐人街探案</a>
            </li>
        </ul>
        <ul class="table-ul"style="display:none">
            <li class="table-li tp-gg">
              <span class="right-show">[电视剧]</span>
              <span class="num">1</span>
              <a href="#" class="tab-a">旋风十一人</a>
            </li>
        </ul>
        <ul class="table-ul"style="display:none">
            <li class="table-li gg">
              <span class="right-show">[电视剧]</span>
              <span class="num">1</span>
              <a href="#" class="tab-a">这是第四项</a>
            </li>
        </ul>
        <ul class="table-ul"style="display:none">
            <li class="table-li gg">
              <span class="right-show">[电视剧]</span>
              <span class="num">1</span>
              <a href="#" class="tab-a">这是第五项</a>
            </li>
        </ul>
    </div><!--end table-list-->

</div> <!--end ranking-list-->

<div class="ranking-bot" flag="留空白">
  <div class="right-title" flag="右侧标题">
  <i class="hx"></i>
  <div class="h3">
  <a href="#">平台热播</a>
  </div>
  </div>
</div>

<div class="row site-list">

    <div class="site-top table-list" id="site-top">
        <div class="table" id="site-table">
        <a href="###" class="site-on">奇艺</a>
        <a href="###">乐视</a>
        <a href="###">搜狐</a>
        <a href="###">看看</a>
        <a href="###">腾讯</a>
        </div>
        <ul class="table-ul">
            <li class="table-li tp-gg">
              <span class="right-show">[爱奇艺热播]</span>
              <span class="num">1</span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
            <li class="table-li tp-gg">
              <span class="right-show">[爱奇艺热播]</span>
              <span class="num">2</span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
            <li class="table-li tp-gg">
              <span class="right-show">[爱奇艺热播]</span>
              <span class="num">3</span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
            <li class="table-li tp-gg">
              <span class="right-show">[爱奇艺热播]</span>
              <span class="num-1">4</span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
            <li class="table-li tp-gg">
              <span class="right-show">[爱奇艺热播]</span>
              <span class="num-1">5</span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
            <li class="table-li tp-gg">
              <span class="right-show">[爱奇艺热播]</span>
              <span class="num-1">6</span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
            <li class="table-li tp-gg">
              <span class="right-show">[爱奇艺热播]</span>
              <span class="num-1">7</span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
            <li class="table-li tp-gg">
              <span class="right-show">[爱奇艺热播]</span>
              <span class="num-1">8</span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
            <li class="table-li tp-gg">
              <span class="right-show">[爱奇艺热播]</span>
              <span class="num-1">9</span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
            <li class="table-li tp-gg">
              <span class="right-show">[爱奇艺热播]</span>
              <span class="num-1">0</span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
        </ul>
        <ul class="table-ul" style="display: none">
            <li class="table-li tp-gg">
              <span class="right-show">[乐视热播]</span>
              <span class="num">1</span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
        </ul>
        <ul class="table-ul"style="display: none">
            <li class="table-li tp-gg">
              <span class="right-show">[搜狐热播]</span>
              <span class="num">1</span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
        </ul>
        <ul class="table-ul"style="display: none">
            <li class="table-li tp-gg">
              <span class="right-show">[看看热播]</span>
              <span class="num">1</span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
        </ul>
        <ul class="table-ul"style="display: none">
            <li class="table-li tp-gg">
              <span class="right-show">[腾讯热播]</span>
              <span class="num">1</span>
              <a href="#" class="tab-a">武神赵子龙</a>
            </li>
        </ul>

    </div>
</div> <!--end site-list-->

<div class="focus">
  <div class="right-title" flag="右侧标题">
  <i class="hx"></i>
  <div class="h3">
  <a href="#">视屏焦点</a>
  </div>
  </div>
  <div class="focus-edit">
  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
8.jpg" alt="" class="img-responsive">
  <span class="hot_name" >小学生大战外星人</span><span class="bg-img"></span><i class="ico"></i></a>
  <ul class="focus-ul">
  <li>
    <i class="dian"></i>
    <a href="#">大学生初次开房跑路 嫌对方太专业</a>
  </li>
  <li>
    <i class="dian"></i>
    <a href="#">大学生初次开房跑路 嫌对方太专业</a>
  </li>
  <li>
    <i class="dian"></i>
    <a href="#">大学生初次开房跑路 嫌对方太专业</a>
  </li>
  <li>
    <i class="dian"></i>
    <a href="#">大学生初次开房跑路 嫌对方太专业</a>
  </li>
  <li>
    <i class="dian"></i>
    <a href="#">大学生初次开房跑路 嫌对方太专业</a>
  </li>
  <li>
    <i class="dian"></i>
    <a href="#">大学生初次开房跑路 嫌对方太专业</a>
  </li>
  <li>
    <i class="dian"></i>
    <a href="#">大学生初次开房跑路 嫌对方太专业</a>
  </li>
  </ul>
  </div>

</div><!--end focus-->
<div class=" row movie-codes">
  <div class="right-title" flag="右侧标题">
  <i class="hx"></i>
  <div class="h3">电影分类</div>
  <a href="#" class="right-a">更多</a>
  </div>
  <div class="movie-dl">
    <div class="dt-title">按类型</div>
    <div class="movie-type">
          <ul>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
                            <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
                            <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
                            <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
          </ul>
    </div>
    <div class="dt-title">按地区</div>
    <div class="movie-area">
          <ul>
              <li>
                  <a href="#">国内</a>
              </li>
              <li>
                  <a href="#">国内</a>
              </li>
              <li>
                  <a href="#">国内</a>
              </li>
              <li>
                  <a href="#">国内</a>
              </li>
              <li>
                  <a href="#">国内</a>
              </li>
              <li>
                  <a href="#">国内</a>
              </li>
              <li>
                  <a href="#">国内</a>
              </li>
          </ul>
      </div>

      <div class="dt-title">按年份</div>
    <div class="movie-year">
          <ul>
              <li>
                  <a href="#">2016</a>
              </li>
              <li>
                  <a href="#">2015</a>
              </li>
              <li>
                  <a href="#">2014</a>
              </li>
              <li>
                  <a href="#">2013</a>
              </li>
              <li>
                  <a href="#">2012</a>
              </li>
              <li>
                  <a href="#">2011</a>
              </li>
              <li>
                  <a href="#">2010</a>
              </li>
              <li>
                  <a href="#">更早</a>
              </li>
          </ul>
      </div>

      <div class="dt-title">按明星</div>
    <div class="movie-actor">
          <ul>
              <li>
                  <a href="#">周星驰</a>
              </li>
              <li>
                  <a href="#">周润发</a>
              </li>
              <li>
                  <a href="#">范冰冰</a>
              </li>
              <li>
                  <a href="#">范冰冰</a>
              </li>
              <li>
                  <a href="#">范冰冰</a>
              </li>
              <li>
                  <a href="#">范冰冰</a>
              </li>
              <li>
                  <a href="#">范冰冰</a>
              </li>
              <li>
                  <a href="#">范冰冰</a>
              </li>
          </ul>
      </div>
      </div>

</div> <!--end movie-codes-->

<div class=" row tv-codes">
  <div class="right-title" flag="右侧标题">
  <i class="hx"></i>
  <div class="h3">电视分类</div>
  <a href="#" class="right-a">更多</a>
  </div>
  <div class="movie-dl">
    <div class="dt-title">按类型</div>
    <div class="movie-type">
          <ul>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
                            <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
                            <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
                            <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
          </ul>
    </div>
    <div class="dt-title">按地区</div>
    <div class="movie-area">
          <ul>
              <li>
                  <a href="#">国内</a>
              </li>
              <li>
                  <a href="#">国内</a>
              </li>
              <li>
                  <a href="#">国内</a>
              </li>
              <li>
                  <a href="#">国内</a>
              </li>
              <li>
                  <a href="#">国内</a>
              </li>
              <li>
                  <a href="#">国内</a>
              </li>
              <li>
                  <a href="#">国内</a>
              </li>
          </ul>
      </div>

      <div class="dt-title">按年份</div>
    <div class="movie-year">
          <ul>
              <li>
                  <a href="#">2016</a>
              </li>
              <li>
                  <a href="#">2015</a>
              </li>
              <li>
                  <a href="#">2014</a>
              </li>
              <li>
                  <a href="#">2013</a>
              </li>
              <li>
                  <a href="#">2012</a>
              </li>
              <li>
                  <a href="#">2011</a>
              </li>
              <li>
                  <a href="#">2010</a>
              </li>
              <li>
                  <a href="#">更早</a>
              </li>
          </ul>
      </div>

      <div class="dt-title">按明星</div>
    <div class="movie-actor">
          <ul>
              <li>
                  <a href="#">周星驰</a>
              </li>
              <li>
                  <a href="#">周润发</a>
              </li>
              <li>
                  <a href="#">范冰冰</a>
              </li>
              <li>
                  <a href="#">范冰冰</a>
              </li>
              <li>
                  <a href="#">范冰冰</a>
              </li>
              <li>
                  <a href="#">范冰冰</a>
              </li>
              <li>
                  <a href="#">范冰冰</a>
              </li>
              <li>
                  <a href="#">范冰冰</a>
              </li>
          </ul>
      </div>
    </div>

</div> <!--end tv-codes-->

<div class="funny-focus">
  <div class="right-title" flag="右侧标题">
  <i class="hx"></i>
  <div class="h3">
  <a href="#">今日笑点</a>
  </div>
  </div>
  <div class="focus-edit">
  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
8.jpg" alt="" class="img-responsive">
  <span class="hot_name" >小学生大战外星人</span><span class="bg-img"></span><i class="ico"></i></a>

  <ul class="focus-ul">
  <li>
    <i class="dian"></i>
    <a href="#">大学生初次开房跑路 嫌对方太专业</a>
  </li>
  <li>
    <i class="dian"></i>
    <a href="#">大学生初次开房跑路 嫌对方太专业</a>
  </li>
  <li>
    <i class="dian"></i>
    <a href="#">大学生初次开房跑路 嫌对方太专业</a>
  </li>
  <li>
    <i class="dian"></i>
    <a href="#">大学生初次开房跑路 嫌对方太专业</a>
  </li>
  <li>
    <i class="dian"></i>
    <a href="#">大学生初次开房跑路 嫌对方太专业</a>
  </li>
  </ul>
  </div>
</div><!--end focus-->

<div class="variety-codes">
  <div class="right-title" flag="右侧标题">
  <i class="hx"></i>
  <div class="h3">热门综艺</div>
  <a href="#" class="right-a">更多</a>
  </div>
  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
8.jpg" alt="" class="img-responsive">
  <span class="hot_name" >小学生大战外星人</span><span class="bg-img"></span><i class="ico"></i></a>

    <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
8.jpg" alt="" class="img-responsive">
  <span class="hot_name" >小学生大战外星人</span><span class="bg-img"></span><i class="ico"></i></a>

  <a href="#" class="bulk_movie-area"><img src="<?php echo @H_IMG;?>
8.jpg" alt="" class="img-responsive">
  <span class="hot_name" >小学生大战外星人</span><span class="bg-img"></span><i class="ico"></i></a>

  <div class="variety-dl">
        <a href="#">爸爸去那儿3</a>

        <a href="#">爸爸去那儿3</a>

        <a href="#">爸爸去那儿3</a>

        <a href="#">爸爸去那儿3</a>

        <a href="#">爸爸去那儿3</a>

        <a href="#">爸爸去那儿3</a>

        <a href="#">天天向上</a>

        <a href="#">天天向上</a>

        <a href="#">天天向上</a>

        <a href="#">天天向上</a>
  </div>

</div><!--end variety-codes-->

<div class=" row cartoon-codes">
  <div class="right-title" flag="右侧标题">
  <i class="hx"></i>
  <div class="h3">动漫分类</div>
  <a href="#" class="right-a">更多</a>
  </div>
  <div class="movie-dl">
    <div class="dt-title">按类型</div>
    <div class="movie-type">
          <ul>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
                            <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
                            <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
                            <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
              <li>
                <a href="#">爱情</a>
              </li>
          </ul>
    </div>
    <div class="dt-title">按地区</div>
    <div class="movie-area">
          <ul>
              <li>
                  <a href="#">国内</a>
              </li>
              <li>
                  <a href="#">国内</a>
              </li>
              <li>
                  <a href="#">国内</a>
              </li>
              <li>
                  <a href="#">国内</a>
              </li>
              <li>
                  <a href="#">国内</a>
              </li>
              <li>
                  <a href="#">国内</a>
              </li>
              <li>
                  <a href="#">国内</a>
              </li>
          </ul>
      </div>
    </div>

</div> <!--end tv-codes-->



</div><!--结束右侧栏目-->

</div><!--结束左铡跟右侧栏目-->

<div class="row topic" flag="ans_底部话题"> 

</div> <!--end topic-->

</div> <!--end <div class="container">-->
</body>
</html><?php }} ?>