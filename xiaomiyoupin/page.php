<?php
    header("Content-type:text-html;charset=utf-8");
    $conn  = mysql_connect("localhost","root","root");
	//��ҳͨ��ͼ��alt��Ⱦpageҳ��
	$alt = $_GET["alt"];
	
	
    if($conn){
        mysql_select_db("mi");
    }else{
        die("Could not connect:".mysql_error());
    }
	//��Ⱦ
	$result = mysql_query("select * from goods where img = '$alt'",$conn);
	$b = array();
	while ($a = mysql_fetch_assoc($result)) {
				
			$b[] = $a;
				
	}
	echo json_encode($b);
	
	mysql_close($conn);
?>