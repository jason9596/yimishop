<?php
//function pages($count,$psize) {
//  $Page=new \Think\Page($count,$psize);//实例化分页类,传入总记录数
//  $pages="%UP_PAGE%%LINK_PAGE%%DOWN_PAGE% ";
//  $total="共%TOTAL_ROW%条记录,";
//  $now="共%TOTAL_PAGE%页,当前处于%NOW_PAGE%页";
//  $str=$pages.$total.$now;
//  $Page->setConfig('theme',$str);
//  $Page->setConfig('prev','[上一页]');
//  $Page->setConfig('next','[下一页]');
//  $show=$Page->show();
//  return $show;
//}
function uploads() {
$upload=new \Think\Upload();//实例化文件上传类
$upload->maxSize=3145728;//最大的上传大小
$upload->exts=array('jpg','gif','png','jpeg');
$upload->autoSub = true;//开启子目录保存 
$upload->subName =array('date','Ymd');//以日期为子目录
$upload->saveName=time().'_'.mt_rand();//文件名
$upload->savePath='./goods/';//设置文件的路径
$info=$upload->upload();//上传文件
return $info;
}
function catetree($arr,$id=0,$lev=0) {
 $tree=array();
 foreach ($arr as $k=> $v) {
 	if($v['pid']==$id) {
 		$v['lev']=$lev;
 		$tree[]=$v;
 		$tree = array_merge($tree,catetree($arr,$v['id'],$lev+1));
 	}
 }
 return $tree;
}
?>