<h1 align="center"> dingTalk </h1>

<p align="center"> ding talk sdk.</p>


## Installing

```shell
$ composer require hbl/dingTalk
```

## 配置
```
$config = [
    /*
    |-----------------------------------------------------------
    | 【必填】企业 corpId
    |-----------------------------------------------------------
    */
    'corp_id' => 'ding01ce46a1354ee68635c2f4657eb6378f',

    /*
    |-----------------------------------------------------------
    | 【必填】应用 AppKey
    |-----------------------------------------------------------
    */
    'app_key' => 'dingoar2mqmjjuk8uaa4qk',

    /*
    |-----------------------------------------------------------
    | 【必填】应用 AppSecret
    |-----------------------------------------------------------
    */
    'app_secret' => 'SXo56RIJHwy_gTE7RfP2k1Y3H54Mzsw68_9N4AXwC_9Omh4DLBh9ggxa3ejwcrBP',

    /*
    |-----------------------------------------------------------
    | 【必填】应用 回调地址
    |-----------------------------------------------------------
     */
    'redirect_uri' => 'https://admindev.ling7.net/api/auth/callback',
];

```

## Usage

```shell


    public function test(Request $request)
    {
        $url = app("DingTalk")->getUrl();
        try {
            app("DingTalk")->getUserInfoByCode("code");
        } catch(Exception $e) {
            dd($e);
        }
    }
    
    
    public function test2(Request $request, DingTalk $ding)
    {
        try {
            return $ding->getUserInfoByCode("code");
         } catch(Exception $e) {
            dd($e);
        }
    }

```


## License

MIT