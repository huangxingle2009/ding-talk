<h1 align="center"> laravel - ding-talk </h1>

<p align="center"> 二维码授权登录 以及获取用户信息.</p>


## 1.安装

```shell
$ composer require hbl/dingTalk
```

## 2.1配置说明
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


### 2.2参数生成

- 生成配置文件

```php
php artisan vendor:publish --provider="Hbl\DingTalk\ServiceProvider"
```

> 这里会生成一个配置文件，ding-talk.php。

## 3.用法

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