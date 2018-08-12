<?php
// $fileobj=$_FILES;
// var_dump($fileobj);
$recfile=$_FILES['uplfile']['tmp_name'];
if (isset($recfile)) {
	$tmppath=$_FILES['uplfile']['tmp_name'];
$path="./uploads/";
$newfilename=date("YmdHis").rand(100,999);
$extention=strrchr($_FILES['uplfile']['name'], '.');
$uplpath=$path.$newfilename.$extention;
// return;

if (is_uploaded_file($tmppath)) {
	if (move_uploaded_file($tmppath, $uplpath)) {
		echo $uplpath;
	} else {
		echo 0;
	}
}else{
	// 不是通过HTTP POST上传的文件
	echo -1;
}
} else {
	echo -2;
}


?>