<?php
    header("Content-type:text-html;charset=utf-8");
    $conn  = mysql_connect("localhost","root","root");
	
	//注册
	$name = $_GET["name"];
	$pwd = $_GET["pwd"];
	
	if($conn){
        mysql_select_db("mi");
    }else{
        die("Could not connect:".mysql_error());
    }
	
	$result = mysql_query("select * from user where name = '$name'",$conn);
	$result_row = mysql_num_rows($result);
	if($result_row > 0){
		echo "0";
	}else{
		//注册时，可存
		mysql_query("insert into user(name,pwd) values('$name','$pwd')",$conn);
		echo "1";
	}
	
	mysql_close($conn);
?>