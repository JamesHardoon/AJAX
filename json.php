<?php
	$zhangsan = array('name' => '张三' , 'age' => 18);

	//默认情况下响应头为Content-Type:text/html,所以要设置一下响应头
	//header('Content-Type: application/json');//此时Content-Type:application/json

	echo json_encode($zhangsan);