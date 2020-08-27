<?php
    header("Content-type:text-html;charset=utf-8");
    $conn  = mysql_connect("localhost","root","root");
	
	$user = $_GET["user"];
	
    if($conn){
        // echo "连接成功</br>";
        mysql_select_db("mi");
    }else{
        die("Could not connect:".mysql_error());
    }
	
	$result1=mysql_query("SELECT * from cart where user = '$user'",$conn);
	
	$b = array();
	while ($a = mysql_fetch_assoc($result1)) {
				
			$b[] = $a;
				
	}
	echo json_encode($b);
		
	
	mysql_close($conn);
?>