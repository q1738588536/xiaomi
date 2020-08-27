
<?php
    header("Content-type:text-html;charset=utf-8");
    $conn  = mysql_connect("localhost","root","root");

	//添加到购物车
	$user = $_GET["user"];
	$name = $_GET["name"];
	$pirce = $_GET["pirce"];
	$num = $_GET["num"];
	$img = $_GET["img"];
	$alt = $_GET["alt"];
	
    if($conn){
        mysql_select_db("mi");
    }else{
        die("Could not connect:".mysql_error());
    }
	
	// 重复商品改数量
	$result1=mysql_query("SELECT * from cart where alt = '$alt'",$conn);
	
	$result_row = mysql_num_rows($result1);//查询
	
	if($result_row == 1){
		mysql_query("update cart set num =num+'$num' where alt = '$alt'",$conn);
	}else{
		mysql_query("insert into cart(user,name,pirce,num,img,alt) values('$user','$name','$pirce','$num','$img','$alt')",$conn);
	}
	
	//传购物车数据
	//mysql_query("insert into cart(user,name,pirce,num,img) values('$user','$name','$pirce','$num','$img')",$conn);
	
	echo $name;
	
	mysql_close($conn);
?>