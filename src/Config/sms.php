<?php
/**
 * Created by PhpStorm.
 * User: ALG
 * Date: 2019/3/22
 * Time: 10:43
 */

return [
    'default' => 'aldy',
    'drive' => [
        'aldy' => [ //阿里大鱼
            'drive' => \Alg\SMS\Driver\ALDYSendSMS::class,
            'signName' => '', //模板签名
            'templateCode' => '', //模板代码(阿里官方的模板代码)
            'accessKeyId' => '',   //tokenId
            'accessKeySecret' => '',   //密匙
            'domain' => "dysmsapi.aliyuncs.com"  //短信请求地址
        ],
        'lk' => [ //凌凯短信
            'drive' => \Alg\SMS\Driver\LKSendSMS::class,
            'corpID' => '',//账号
            'pwd' => '',//密码
            'domain' => "http://sdk2.028lk.com/sdk2/BatchSend2.aspx",  //短信请求地址
            'signName' => '', //模板签名
            "useTemplate" => "login", //使用模板
        ]
    ],
    "templateStore" => [ //模板库
        "login" => "欢迎登录本系统，您本次的验证码为:{code}，请在{time}分钟内输入。若非本人操作，请忽略本短信，切勿将验证码泄露给他人。",
    ],
    'length' => '6', //验证码长度
    'EXPIRE' => 60,   //验证码过期时间,单位(秒)

    'prefix' =>'alg', //验证码缓存前缀
];