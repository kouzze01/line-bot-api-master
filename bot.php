<?php

include ('line-bot-api-master/php/line-bot.php');

$channelSecret = '9fcdaf0e6d3368f22872ed09751c1f99';
$access_token  = 'LGHmeErIoWEVY15w4l5sHPIKhEDSlf2Q8HQ77pBMEKwu9l5DQ4A0ZTepyDD4DnGR6JuIqU6tVtNhBmHL+oF+OVj9HCPXZz0doP0cxmY9LpdslVwyzEIerZWbNt7gYkVmjBYgB7F0fYxufc5Ux0VNgAdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
    $bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

    if ($bot->isSuccess()) {
        echo 'Succeeded!';
        exit();
    }

    // Failed
    echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
    exit();

}
