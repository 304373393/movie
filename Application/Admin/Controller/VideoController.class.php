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
          $name="有";
          $data=self::unicode_encode($name);
          var_dump($data);
          $data=self::unicode_decode($data);
          var_dump($data);

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