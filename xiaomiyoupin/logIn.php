<?php
    header("Content-type:text-html;charset=utf-8");
    $conn  = mysql_connect("localhost","root","root");
	//登录
	$name = $_GET["name"];
	$pwd = $_GET["pwd"];
	
	if($conn){
        mysql_select_db("mi");
    }else{
        die("Could not connect:".mysql_error());
    }
	
	
	$result = mysql_query("select * from user where name = '$name' and pwd = '$pwd'",$conn);
	$result_row = mysql_num_rows($result);
	if($result_row == 1){
		echo "1";
	}else{
		echo "0";
	}
	
	mysql_close($conn);
?>