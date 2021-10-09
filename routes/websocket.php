<?php


use Illuminate\Http\Request;
use SwooleTW\Http\Websocket\Facades\Websocket;
use Morilog\Jalali\Jalalian;

/*
|--------------------------------------------------------------------------
| Websocket Routes
|--------------------------------------------------------------------------
|
| Here is where you can register websocket events for your application.
|
*/

Websocket::on('connect', function () {
    echo "a client connected.\n";    
});

Websocket::on('disconnect', function ($websocket) {
    echo "a client disconnected.\n";    
});

Websocket::on('message', function ($websocket, $data) {
    print_r($data)."\n";
    $websocket->broadcast()->emit('send', $data);
});