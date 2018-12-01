<?php

/**
 * 返回响应就是一个json内容(返回的就是数据)
 * 对于返回数据的地址一般我们称为接口(A形式上是Web形式)
 */
// /users.php?id=1 =>id为1的用户信息
$data = array(
	array(
		'id' => 1,
		'name' => '张三',
		'age' => 18
	),
	array(
		'id' => 2,
		'name' => '李四',
		'age' => 19
	),
	array(
		'id' => 3,
		'name' => '王五',
		'age' => 20
	),
	array(
		'id' => 4,
		'name' => '赵六',
		'age' => 21
	)
);

if (empty($_GET['id'])) {
	//没有ID获取全部
	//因为HTTP协议中约定报文内容就是字符串,而我们需要传递给客户端的信息是一个有结构的数据
	//这种情况下,我们一般采用JSON作为数据格式
	//序列化为JSON 
	$json = json_encode($data);//=>[{"id":1,"name":"张三"},{.....}]
	echo $json;
} esle {
	//传递了id只获取一条
	foreach ($data as $item) {
		if ($item['id'] !== $_GET['id']) continue;
		$josn = json_encode($data);//=>[{"id":1,"name":"张三"},{.....}]
		echo $json;

		
	}
}