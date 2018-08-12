<?php 
// https get
// $ch=curl_init();// 返回curl会话句柄，出错false
// $lat=$_GET['wd'];
// $lon=$_GET['jd'];//jd
// $url='https://api.map.baidu.com/geocoder/v2/?ak=D6WOzHaymzVVKvgiy8UbhQEznkgeK6BD&location='.$lat.','.$lon.'&output=json';
// curl_setopt($ch, CURLOPT_URL, $url);// 句柄 需要获取的地址
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);// 将curl_exec();的结果以字符流输出
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
// $res=curl_exec($ch);
// echo $res;
// curl_close($ch);

//http get
$ch=curl_init();
$key=$_POST['key'];
$appid=$_POST['appid'];
$msg=$_POST['msg'];
$url='http://api.qingyunke.com/api.php?key='.$key.'&appid='.$appid.'&msg='.$msg;
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// post 添加
// curl_setopt($ch, CURLOPT_POST, 1);
// $data=['key'=>$key,'appid'=>$appid,'msg'=>$msg];
// curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$res=curl_exec($ch);
echo $res;
curl_close($ch);
?>