<?php
    header("Content-type:text-html;charset=utf-8");
    $conn  = mysql_connect("localhost","root","root");
	
	$alt = $_GET["alt"];
	
    if($conn){
        // echo "杩炴帴鎴愬姛</br>";
        mysql_select_db("mi");
    }else{
        die("Could not connect:".mysql_error());
    }
	
	mysql_query("delete from cart where alt = '$alt'",$conn);
	
	mysql_close($conn);
?>