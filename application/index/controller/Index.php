<?php
namespace app\index\controller;

class Index
{


    private function runRedis(){
        $redis = new \Redis();
        $redis->connect('192.168.91.102',6379);
        $redis->set('test','hello world!');
        echo $redis->get("test");
    }
    public function index()
    {

        $redis = new \Redis();
        $redis->connect('192.168.91.102',6379);
        $redis->set('test','hello world!');
        echo $redis->get("test");

        return $this->display();
    }
}
