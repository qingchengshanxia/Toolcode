<?php
	header("Content-type:text/html;charset=utf-8");
	$conn = new mysqli("localhost","qingchengshanxia","1989long","qingchengshanxia");
	if ($conn->connect_error) {
		die("连接数据库不成功".$conn->connect_error);
	}
	$conn->query("SET character_set_connection=utf8, character_set_results=utf8, character_set_client=binary");
	
	$sql = "CREATE TABLE readcount (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		idname VARCHAR(30) NOT NULL,
		idvalue VARCHAR(200) NOT NULL,
		reg_date TIMESTAMP
	)";

	if($conn->query($sql) === TRUE) {
		echo 'success!';
	} else {
		echo "创建表失败：".$conn->error;
	}
	// 需要载入当前页面一次，语句才能生效；

	$conn->close();
?>