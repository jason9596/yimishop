<?php
//获取用户客户端的ip地址
function get_real_ip(){ 
    $ip=false; 
    if(!empty($_SERVER["HTTP_CLIENT_IP"])){ 
    $ip = $_SERVER["HTTP_CLIENT_IP"]; 
    } 
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
        $ips = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']); 
        if ($ip) { array_unshift($ips, $ip); $ip = FALSE; } 
        for ($i = 0; $i < count($ips); $i++) { 
            if (!eregi ("^(10|172.16|192.168).", $ips[$i])) { 
            $ip = $ips[$i]; 
            break; 
            } 
        } 
    } 
    return ($ip ? $ip : $_SERVER['REMOTE_ADDR']); 
}
//获取客户端的真实地址
function getCity($ip)
{
	$url="http://ip.taobao.com/service/getIpInfo.php?ip=".$ip;
	$ip=json_decode(file_get_contents($url));
	if((string)$ip->code=='1'){
	return false;
	}
	$data = (array)$ip->data;
	return $data;
}
//分页类
function pages($count,$psize) {
    $Page=new \Think\Page($count,$psize);//实例化分页类,传入总记录数
    $pages="%UP_PAGE%%LINK_PAGE%%DOWN_PAGE% ";
    $total="共%TOTAL_ROW%条记录,";
    $now="共%TOTAL_PAGE%页,当前处于第%NOW_PAGE%页";
    $str=$pages.$total.$now;
    $Page->setConfig('theme',$str);
    $Page->setConfig('prev','[上一页]');
    $Page->setConfig('next','[下一页]');
    $show=$Page->show();
    return $show;
}
//图片处理
function imageTo($maxwidth,$maxheight,$imgpath) {
	$image=new \Think\Image();
	$name=explode('.',$imgpath);
	$image->open('./Uploads/'.$imgpath);
	$mime=$image->type();
	$width=$image->width();
	$height=$image->height();
    $image->thumb($maxwidth,$maxheight)->save('./Uploads/'.$name[0].'_'.$maxwidth.'x'.$maxheight.'.'.$name[1]);	
	return $name[0].'_'.$maxwidth.'x'.$maxheight.'.'.$name[1];	
}
//多文件上传
function uploadfile($path,$act) {
$config = array(
  'maxSize'    =>    527823, 
  'savePath'   =>    $path,
  'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
  'autoSub'    =>    true,
  'subName'    =>    array('date','Ymd'),
);
$upload = new \Think\Upload($config);// 实例化上传类
for ($i=0; $i<count($_FILES)+1; $i++) { 
    if($_FILES[$act.$i]['name']!='') {
       $info=$upload->uploadOne($_FILES[$act.$i]);
        if(!$info) {
           $this->error($upload->getError()); 
       }else {
           $imgpath[$i]=$info['savepath'].$info['savename'];
           imageTo(400,400,$imgpath[$i]);//生成大图
           if($i==0) {
            imageTo(160,160,$imgpath[$i]);//生成展示
           }
           imageTo(60,60,$imgpath[$i]);//生成缩略图
       }
    }
}
return $imgpath;
}
?>