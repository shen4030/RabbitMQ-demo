<?php

require 'queue.php';
$instance = Queue::instance();

$instance->consumer('test', 'test', 'test', 'test', function($envelope, $queue){
	$message = $envelope->getBody(); 
	if($message){

		echo 'Message:' . $message;
		/* 应答 */
    	$queue->ack($envelope->getDeliveryTag()); 
	}
});
