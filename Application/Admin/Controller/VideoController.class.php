<?php
namespace Admin\Controller;
header('Content-Type: text/html; charset=utf-8'); //网页编码

class VideoController EXTENDS AdminController{
     
     /*
     *电影管理控制器
      */
     public function index(){
          $User=M("movie");
          $data=M("type");
          if(!empty($_GET))
          {
               $type_id=$_GET['type_id'];
               $so_str=$data->where("type_id=$type_id")->find();
               $type_data=$so_str['type_data'];
               $type_name=$so_str['type_name'];
               if($so_str['type_name']=='m_type'||$so_str['type_name']=='m_actor')
               {
               $find_str=self::unicode_encode($so_str['type_data']);
               $sql="SELECT * FROM ans_movie WHERE "."MATCH($type_name) "." AGAINST('$find_str')";
               }elseif($so_str['type_name']=='m_showtime' && $so_str['type_data']<2010){
                    $sql="SELECT * FROM ans_movie WHERE $type_name < 2010";
               }
               else{
               $sql="SELECT * FROM ans_movie WHERE $type_name = '$type_data'";
               }
               $name=$User->query($sql);
               //$name=$User->where("m_type='%s'",$str)->select();
               $info=$data->select();
               $this->assign('info',$info);
               $this->assign('name',$name);
               $this->display();

          }else{
          $name=$User->select();
          for($i=0;$i<count($name);$i++)
          {
               $name[$i]['m_type']=self::set_destr($name[$i]['m_type']);
               $name[$i]['m_actor']=self::set_destr($name[$i]['m_actor']);
          }
          $info=$data->select();
          $this->assign('info',$info);
          $this->assign('name',$name);
     	$this->display();
          }
     }
     public function add_video(){
          $User=M("movie");
          if(!empty($_POST))
          {
               $enstr=self::set_enstr($_POST['m_type']);
               $_POST['m_type']=$enstr;
               $enstr=self::set_enstr($_POST['m_actor']);
               $_POST['m_actor']=$enstr;

               $data['m_addtime']=time();
               $User->create_a($data);
               $info=$User->add();
               if($info){
               $this->redirect('', array(), 3, '操作成功！页面跳转中...'); 
               }else{$this->redirect('', array(), 3, '操作失败！页面跳转中...'); }
               
            
          }
          else{
     	$this->display();
          }
     }
     public function edit_video($m_id){
          $User=M("movie");
          if(!empty($_POST))
          {
               $enstr=self::set_enstr($_POST['m_type']);
               $_POST['m_type']=$enstr;
               $enstr=self::set_enstr($_POST['m_actor']);
               $_POST['m_actor']=$enstr;

               $data['m_id']=$m_id;
               $User->create_a($data);
               $ret=$User->save();
               if($ret){
               $this->redirect('Video/index', array(), 3, '操作成功！页面跳转中...'); 
               }else{$this->redirect('', array('m_id' =>$m_id), 3, '操作失败！页面跳转中...'); } 

          }
          else{
          $name=$User->where("m_id=$m_id")->find();
          $name['m_type']=self::set_destr($name['m_type']);
          $name['m_actor']=self::set_destr($name['m_actor']);
          $this->assign('name',$name);
          $this->display();
          }
     }

public function delete_video(){
                  $snoopy=new Snoopy();
        $url="http://list.iqiyi.com/www/1/----------0---11-3-1-iqiyi--.html";
        $snoopy->proxy_port="80";
        $snoopy->agent="(Mozilla/5.0 (Windows NT 6.1; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0)";
        //$snoopy->referer="http://v.qq.com/movie/";
        $snoopy->fetch($url);
        $info=$snoopy->results;
        //var_dump($info);

$root_url='/<a_boss="film"href="([^>]+)"target="_blank"class="figure"tabindex="-1"/'; //获取腾讯playurl
//
$img_url='/imgitemprop="image"src="([^<>]+)"alt=/'; //图片地址

$title='/\.html"target="_blank"title="([^<>]+)"_hot="/'; //名字

$type='/"><spanclass="tag_inner">([^<>]+)<\/span><\/a><\/li>/'; //标签

$regisseur='/<spanclass="list_lbl">导演.*itemprop="name">([^<>]+)<\/span><\/a><\/li><\/ul><\/div><\/div><\/li>.*<spanclass="list_lbl">主演/';

$actor_temp='/<spanclass="list_lbl">主演.*"target="_blank"class="name_item"title="([^<>]+)"><span.*<spanclass="list_lbl">简介/';
 
$actor='/"target="_blank"class="name_item"title="([^<>]+)"><span/';

$content='/itemprop="abstract">([^<>]+)<\/p>/'; //简介



/*
 * 爱奇艺采集
 * http://suggest.video.iqiyi.com/?key=名字&rltnum=显示条数 100   //搜索json 
 * http://qiqu.iqiyi.com/apis/video/tags/get?entity_id=455141600&limit=5&area=azalea 
 标签查询JSON limit 条目数 area=azalea 标签

 http://cmts.iqiyi.com/comment/tvid224/11435363_455141600_hot_2?&albumid=ID
 取简介
 */
$play_title='/rseat="dsjp7"alt="(?<name>[^>]+)"title="/';
$play_url='/href="(?<play_url>[^>]+)"class="site-piclist_pic_link"target="_blank">/';
$play_time='/<spanclass="icon-vInfo">(?<play_time>[^>]+)<\/span>/';
$play_img='/"src="(?<play_img>[^>]+)"\/><divclass="wrapper-listTitle"><divclass="mod-listTitle">/';
$play_year='/于([0-9]{4}).*<linkrel="/';
$play_day='/于([0-9]+).*<linkrel="/';
$play_name='/name="irTitle"content="([^<>]+)"\/><metaname/';
$play_cat='/rseat="cat\d">([^<>]+)<\/a>/';
$play_atcor='/rseat="host\d"target=\'_blank\'title="([^<>]+)">/';
$play_jianjie='/rseat="jianjie"data-desc-origin=\'([^<>]+)\'>/';

$text=preg_replace("/[\t\n\r\s]+/","",$info); //去空格去换行

preg_match_all($play_title, $text ,$ret);

$play_data=array();

$num=0;

for($i=0;$i<count($ret[1]);$i++)
{
  $for_url='http://suggest.video.iqiyi.com/?key='.$ret[1][$i].'&rltnum=1';
  $snoopy->fetch($for_url);
  usleep (20000);
  $data=json_decode($snoopy->results,true);
  if($data[data][0]['aid']>0){
  $play_data[$num]['play_url']=$data[data][0]['link'];
  $play_data[$num]['aid']=$data[data][0]['aid'];
  $play_data[$num]['name']=$data[data][0]['name'];
  $play_data[$num]['img_url']=$data[data][0]['picture_url'];
  $play_data[$num]['c_type']=$data[data][0]['cname'];
  $play_data[$num]['director']=$data[data][0]['director'];
  $play_data[$num]['actor']=$data[data][0]['main_actor'];
  $play_data[$num]['year']=$data[data][0]['year'];
  $play_data[$num]['duration']=$data[data][0]['duration'];
  $tags='http://qiqu.iqiyi.com/apis/video/tags/get?entity_id='.$data[data][0]['aid'].'&limit=5&area=azalea';
  $snoopy->fetch($tags);
  $ret_tags=json_decode($snoopy->results,true);
  for($p=0;$p<count($ret_tags[data]);$p++)
  {
      $play_data[$num]['tags'][$p]=$ret_tags[data][$p]['tag'];
  }
  usleep (20000); //50毫秒
  $hot=$data[data][0]['link'];
  $snoopy->fetch($hot);
  $ret_hot=$snoopy->results;
  $text_jian=preg_replace("/[\t\n\r\s]+/","",$ret_hot); //去空格去换行
  preg_match_all($play_jianjie, $text_jian ,$ret_jian);
  $play_data[$num]['jianjie']=$ret_jian[1];
  usleep (20000);
  $num=$num+1;
  }
}
var_dump($play_data);


/*
preg_match_all($play_url, $text ,$temp_1);
preg_match_all($play_time, $text ,$temp_2);
preg_match_all($play_img, $text ,$temp_3);

$result=array_merge($temp_1,$temp_2);

$play_temp=array_merge($result,$temp_3);

$play_data['play_url']=$play_temp['play_url'];
$play_data['play_time']=$play_temp['play_time'];
$play_data['play_img']=$play_temp['play_img'];

var_dump($play_data);
*/

     }

     public function up_img(){
          if(!empty($_FILES))
          {
             if($_FILES['name']['error']>0){
             exit('附件有错误');
             }
             $path = "./Public/upload/";
             $name = $_FILES['name']['name'];
             $fixname=explode('.',$name);
             //$name = iconv('UTF-8','GB2312',$name); 防乱码
             $datapath=date("Ymd",time()); //按日期来生成目录
             if(!is_dir($path.$datapath))
             {
               mkdir($path.$datapath);
             }
             $img_name=mt_rand();          //随机文件名
             $path_name = $path.$datapath."/".$img_name.".".$fixname[1];
             if(move_uploaded_file($_FILES['name']['tmp_name'], $path_name)){
                    echo json_encode($path_name);
               }else {
                    echo "上传失败";
                         }
               }
          }


     //将内容进行UNICODE编码
function unicode_encode($name)
{
    $name = iconv('UTF-8', 'UCS-2', $name);
    $len = strlen($name);
    $str = '';
    for ($i = 0; $i < $len - 1; $i = $i + 2)
    {
        $c = $name[$i];
        $c2 = $name[$i + 1];
        if (ord($c) > 0)
        {    // 两个字节的文字
             //$str .= '\u'.base_convert(ord($c), 10, 16).base_convert(ord($c2), 10, 16);
            $str .=base_convert(ord($c), 10, 16).base_convert(ord($c2), 10, 16);
        }
        else
        {
            $str .= $c2;
        }
    }
    return $str;
}

// 将UNICODE编码后的内容进行解码
function unicode_decode($name)
{
    // 转换编码，将Unicode编码转换成可以浏览的utf-8编码
    $pattern = '/([\w]+)|(\\\u([\w]{4}))/i';
    preg_match_all($pattern, $name, $matches);
    if (!empty($matches))
    {
        $name = '';
        for ($j = 0; $j < count($matches[0]); $j++)
        {
            $str = $matches[0][$j];
            if (strpos($str, '\\u') === 0)
            {
                $code = base_convert(substr($str, 2, 2), 16, 10);
                $code2 = base_convert(substr($str, 4), 16, 10);
                $c = chr($code).chr($code2);
                $c = iconv('UCS-2', 'UTF-8', $c);
                $name .= $c;
            }
            else
            {
                $name .= $str;
            }
        }
    }
    return $name;
}
/*
 function set_enstr 把字符转换成unicode码
 并组成以下格式存入数据库
 例 "60ac7591 # 悬疑 | 60ca609a # 惊悚 "
 */
function set_enstr($name)
{
     $num=0;
     if(strlen($name)==0){return false;}
     
     $data=split(" ",$name);
     for($i=0;$i<count($data);$i++)
     {
       $value[$i]=self::unicode_encode($data[$i]);
       if($num>0 && $data[$i]!=""){
          $text=$text." | ".$value[$i]." # ".$data[$i];
       }elseif($data[$i]!=""){
          $text=$value[$i]." # ".$data[$i];
          $num=$num+1;
       }
     }
     return $text;
}
/*
 *function set_destr
 *@$name   传入要解析转换的字符串
 * 例 "60ac7591 # 悬疑 | 60ca609a # 惊悚 "
 *@return  字符串
 * 例 "悬疑 惊悚"
 */

function set_destr($name)
{    
     $temp_str=str_replace(" ","",$name);
     $temp_str=explode("|",$temp_str);
     for($i=0;$i<count($temp_str);$i++)
     {
          $text[$i]=explode("#",$temp_str[$i]);
     }
     for($i=0;$i<count($text);$i++)
     {
          if($i>0 && isset($text[$i][1])){
               $ret_str=$ret_str." ".$text[$i][1];
          }elseif(isset($text[$i][1])){
               $ret_str=$text[$i][1];
          }
     }
     return $ret_str;
}

}