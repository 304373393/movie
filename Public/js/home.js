$(function($){
      var list=0,inter=0;
      var move_lick=0,old_pic;
      $("#ranking-table a").click(function(){
            $(".list-on").removeClass("list-on");;
            $(this).addClass('list-on');
            var ret_a=$("#ranking-table a");
            var ret_ul=$("#ranking-top ul");

            for(var i=0;i<ret_a.length;i++)
            {
              if($(this)[0].innerHTML==ret_a[i].innerHTML){
                for(var p=0;p<ret_ul.length;p++)
                {
                  $(ret_ul[p]).css({
                   "display":"none"});
                }
                $(ret_ul[i]).css({
                  "display":"block"});
              }

            }
      })

            $("#site-table a").click(function(){
            $(".site-on").removeClass("site-on");;
            $(this).addClass('site-on');
            var ret_a=$("#site-table a");
            var ret_ul=$("#site-top ul");

            for(var i=0;i<ret_a.length;i++)
            {
              if($(this)[0].innerHTML==ret_a[i].innerHTML){
                for(var p=0;p<ret_ul.length;p++)
                {
                  $(ret_ul[p]).css({
                   "display":"none"});
                }
                $(ret_ul[i]).css({
                  "display":"block"});
              }

            }
      })

      function move_margin(name){
        var mix=0.1;
        var val=$(name).css("marginTop").replace('px', '');
        var cty=$(name).css("opacity");
        $(name).css({"border":"solid 2px #FFF"});
        if(parseInt(val)!=-15){
          val=parseInt(val)-1;
          $(name).css({"margin-top":val});     
        }
        if(cty<1){
          cty=parseFloat(cty)+parseFloat(mix);
          $(name).css({"opacity":cty});
        }
        if(cty<1||parseInt(val)!=-15)
        {
          console.log(name);
         move_id = setTimeout(function(){return move_margin(name)},150)
        }
      }

      function moveout_margin(name){
        console.log($(name).index());
        var cty;
        var mix=0.1;
        var val=$(name).css("marginTop").replace('px', '');
        var cty=$(name).css("opacity");
        //$(name).css({"border":"solid 2px #333"});
      }
      $(".turn-click").mousemove(function(){
        var name=this;
        var d = 2000;
        var p = 2000;
        if(move_lick!=name||move_lick==0)
        {
          old_pic=$(".active")
          console.log("在这里");
          if(old_pic){
          $(old_pic).removeClass("active");
          $(name).addClass('active')
          inter=0;          
          }
        }
        move_lick=name;
        });
    setInterval(function(){
    var elem=$(".active");  //获取轮播标识
    var pic_id=$(elem).index();
    var mar_px=$(elem).css("marginTop").replace('px', '');
    var cty=$(elem).css("opacity");
    //下面开始动画
    if(parseInt(mar_px)!=-15){
      $(elem).css({"border": "solid 2px #FFF"});
      mar_px=parseInt(mar_px)-3;
      $(elem).css({"margin-top":mar_px});
    }
    if(cty<1){
     cty=parseFloat(cty)+0.1;
     $(elem).css({"opacity":cty});
    }
    var pic_ids=$(".turn-click");
    list=pic_id+1;
    if(pic_ids.length==list){
      list=0;
    }
    if(inter>50)
    { //运行30次后换图片
      inter=0;
      $(elem).removeClass("active");
      $(pic_ids[list]).addClass("active");
      elem=$(".active"); //换图后重新获取 重要
    }
    inter++;
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

    //换背景图 
    if(parseInt(mar_px)==-15){
    var bg_img=$(".trun-a");
    for(var p=0;p<bg_img.length;p++)
    {
      if(pic_id==p){
        $(bg_img[p]).css({"display":"block"});
      }else{
        $(bg_img[p]).css({"display":"none"})
      }
    }
    }

    },100)

});