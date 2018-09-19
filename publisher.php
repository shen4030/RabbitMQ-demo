<?php

require 'queue.php';
$instance = Queue::instance();

for($i = 1; $i <= 10; $i++){
	echo '发布测试数据:' . $i . "\n";
	$instance->publish($i ."\n" , 'test' ,'test','test');
}


