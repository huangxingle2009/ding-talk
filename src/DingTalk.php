<?php

namespace Hbl\DingTalk;

use Hbl\DingTalk\Exceptions\ConfigException;
use Hbl\DingTalk\Exceptions\InvalidArgumentException;

class DingTalk
{
    private $host = 'https://oapi.dingtalk.com/';
    private $config = [];

    public function __construct($config = [])
    {
        if (empty($config['corp_id']) || empty($config['app_key']) || empty($config['app_secret']) || empty($config['redirect_uri'])) {
            throw new ConfigException("配置参数异常");
        }
        $this->config = $config;
    }

    public function getUrl() {
        $config = $this->config;
        return $this->host . 'connect/qrconnect?appid='.$config['app_key'].'&response_type=code&scope=snsapi_login&state=STATE&redirect_uri='. $config['redirect_uri'];
    }


    public function getUserInfoByCode($code) {
        if (!$code) {
            throw new InvalidArgumentException("缺少code参数");
        }
        $config = $this->config;
        $c = new \DingTalkClient(\DingTalkConstant::$CALL_TYPE_OAPI, \DingTalkConstant::$METHOD_POST , \DingTalkConstant::$FORMAT_JSON);
        $req = new \OapiSnsGetuserinfoBycodeRequest;
        $req->setTmpAuthCode($code);
        $resp = $c->executeWithAccessKey($req, $this->host . "/sns/getuserinfo_bycode",$config['app_key'], $config['app_secret']);
        $arr_resp = $this->object_to_array($resp);
        return $arr_resp;
    }

    private function object_to_array($obj) {
        $obj = (array)$obj;
        foreach ($obj as $k => $v) {
            if (gettype($v) == 'resource') {
                return;
            }
            if (gettype($v) == 'object' || gettype($v) == 'array') {
                $obj[$k] = (array)($this->object_to_array($v));
            }
        }
        return $obj;
    }

}