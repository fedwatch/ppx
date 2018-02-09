<?php
namespace app\index\controller;

class GetResult
{
    public function index()
    {

        $now = date('Y-m-d H:i:s');
        echo '<br/>演示内容：采用PHP进行JSON格式采集并分析数据。';
        echo '<br/>默认演示为《开彩网》重庆时时彩免费开奖接口';
        echo '<br/>付费接口的采集格式与免费接口完全一致';
        echo '<br/>如需使用付费接口，请修改采集为对应地址';
        echo '<br/>';

        $src = 'http://f.apiplus.cn/newly.do?code=cqssc&format=json';
        echo "<br/>采集地址：{$src}<br/><br/>";
//防止GET本地缓存，增加随机数
        $src .= (strpos($src,'?')>0 ? '&':'?').'_='.time();
        $html = file_get_contents($src);
        $json = json_decode($html,true);

        return $this->display($json);
    }
}
