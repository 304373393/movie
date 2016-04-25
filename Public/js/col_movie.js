$(function($){
      var list=0,inter=0;
      var move_lick=0,old_pic,pic_lock;
      var hot_lick=0,old_hot,hot_lock;
      
      $(".navbar a").mousemove(function() {
         $(".nav-lock").removeClass("nav-lock");
         $(this).addClass("nav-lock")
      });
      $(".navbar a").mouseout(function() {
         $(".nav-lock").removeClass("nav-lock");
         $($(".navbar li")[0]).addClass("nav-lock");
      });

      $(".turn-click").mousemove(function(){
        var name=this;
        if(move_lick!=name||move_lick==0)
        {
          old_pic=$(".active")
          if(old_pic){
          $(old_pic).removeClass("active");
          $(name).addClass('active')
          inter=0;
          pic_lock=1;
          }
        }
        move_lick=name;
        });

      $(".hot-click").mousemove(function(){
        var name=this;
        if(hot_lick!=name||hot_lick==0)
        {
          old_hot=$(".hot-active")
          if(old_hot){
          $(old_hot).removeClass("hot-active");
          $(name).addClass('hot-active')
          hot_lock=1;
          inter=0;
          $(name).css({"border": "solid 2px #6CCDEE","background-color":"#FFF","opacity":"1"});        
          }
        }
        hot_lick=name;
        });

    setInterval(function(){
    if(hot_lock==1){
      hot_lock=0;
      this.hot_lock=0;
    }
    var elem=$(".active");  //获取轮播标识
    var hot_elem=$(".hot-active");
    var pic_id = $(elem).index();
    var hot_id= $(hot_elem).index();
    var mar_px=$(elem).css("marginTop").replace('px', '');
    var cty=$(elem).css("opacity");
    //下面开始动画
    if(parseInt(mar_px)!=-15){
      $(elem).css({"border": "solid 2px #FFF"});
      mar_px=parseInt(mar_px)-3;
      $(elem).css({"margin-top":mar_px});
      this.lock=1;
    }
    if(cty<1){
     cty=parseFloat(cty)+0.1;
     $(elem).css({"opacity":cty});
    }

    var pic_ids=$(".turn-click");
    var hot_ids=$(".hot-click");
    list=pic_id+1;
    var hot_list=hot_id+1;

    if(pic_ids.length==list){
      list=0;
    }
    if(hot_ids.length==hot_list){hot_list=0}
    if(inter>50)
    { //运行30次后换图片
      inter=0;
      $(elem).removeClass("active");
      $(pic_ids[list]).addClass("active");
      $(hot_elem).removeClass('hot-active');
      $(hot_ids[hot_list]).addClass('hot-active');
      elem=$(".active"); //换图后重新获取 重要
      hot_elem=$(".hot-active");
      this.hot_lock=0;
      var pic_id = $(elem).index();
      var hot_id= $(hot_elem).index();
    }
    inter++;
 
    if(this.hot_lock!=1){
    this.hot_lock=1;
    $(hot_elem).css({"border": "solid 2px #6CCDEE","background-color":"#FFF","opacity":"1"});
    for(var i=0;i<hot_ids.length;i++)
    {   //逆转动画 非active 标识的全部持行
      if(hot_ids[i]!=hot_elem[0])
      {
          $(hot_ids[i]).css({"background-color":"#888888","border":"solid 2px #FFF","opacity":"0.5"});
      }
    }
    var hot_img=$(".hot-a");
    for(var p=0;p<hot_img.length;p++)
    {
      if(hot_id==p){
        $(hot_img[p]).css({"display":"block"});
      }else{
        $(hot_img[p]).css({"display":"none"})
      }
    }

    }
    //换背景图 
    if(this.lock==1){
      this.lock=0;
       for(var i=0;i<pic_ids.length;i++)
      {   //逆转动画 非active 标识的全部持行
      if(pic_ids[i]!=elem[0])
      {
        var old_px=$(pic_ids[i]).css("marginTop").replace('px', '');
        var old_cty=$(pic_ids[i]).css("opacity");
        if(parseInt(old_px)!=0){
        $(pic_ids[i]).css({"border": "solid 2px #333"});
        old_px=parseInt(old_px)+3;
        $(pic_ids[i]).css({"margin-top":old_px});
          }
        if(old_cty>0.5){
        old_cty=parseFloat(old_cty)-0.1;
         $(pic_ids[i]).css({"opacity":old_cty});
      }

      }
    }

    if(parseInt(mar_px)==-15){
    var bg_img=$(".trun-a");
    this.lock=0;
    for(var p=0;p<bg_img.length;p++)
    {
      if(pic_id==p){
        $(bg_img[p]).css({"display":"block"});
      }else{
        $(bg_img[p]).css({"display":"none"})
      }
    }
    }
  }
    },100);
});