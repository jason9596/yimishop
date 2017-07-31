<?php
namespace Admin\Model;
use Think\Model;
class ActivitiesModel extends Model {
	//获取树状栏目$id的所有子孙
	public function catetree($arr,$id=0,$lev=0) {
		$tree=array();
		foreach($arr as $v) {
			if($v['pid']==$id) {
				$v['lev']=$lev;
				$tree[]=$v;
				$tree=array_merge($tree,$this->catetree($arr,$v['id']),$lev+1);
			}
		}
		return $tree;
	}
	
}
?>