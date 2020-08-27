<?php
    header("Content-type:text-html;charset=utf-8");
    $conn  = mysql_connect("localhost","root","root");
	//主页通过图得alt渲染page页面
	$alt = $_GET["alt"];
	
	
    if($conn){
        mysql_select_db("mi");
    }else{
        die("Could not connect:".mysql_error());
    }
	//渲染
	$result = mysql_query("select * from goods where img = '$alt'",$conn);
	$b = array();
	while ($a = mysql_fetch_assoc($result)) {
				
			$b[] = $a;
				
	}
	echo json_encode($b);
	
	mysql_close($conn);
?>