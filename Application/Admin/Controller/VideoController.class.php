<?php
namespace Admin\Controller;
header('Content-Type: text/html; charset=utf-8'); //网页编码

class VideoController EXTENDS AdminController{
     
     /*
     *电影管理控制器
      */
     public function index(){
          $User=M("movie");
          $name=$User->select();
          $this->assign('name',$name);
     	$this->display();
     }
     public function add_video(){
          $User=M("movie");
          if(!empty($_POST))
          {
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
               $data['m_id']=$m_id;
               $User->create_a($data);
               $ret=$User->save();
               if($ret){
               $this->redirect('Video/index', array(), 3, '操作成功！页面跳转中...'); 
               }else{$this->redirect('', array('m_id' =>$m_id), 3, '操作失败！页面跳转中...'); } 

          }
          else{
          $name=$User->where("m_id=$m_id")->find();
          $this->assign('name',$name);
          $this->display();
          }
     }
     public function delete_video(){
     	$this->display();
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

}