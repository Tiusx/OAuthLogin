<?php
/**
 * @authors Tius
 */
include_once './../../src/QQ/Auth.php';
include_once './../../src/Common.php';

use Tius\TiusOauth\src\QQ;

//QQ互联管理中心 https://connect.qq.com/manage.html#/ 创建应用拿到 APP ID 和 APP Key
$appId = '';
$appKey = '';
$callBackUrl = ''; // http://wiki.connect.qq.com/回调地址常见问题及修改方法

$Auth = new QQ\Auth($appId,$appKey,$callBackUrl);

$Auth->Login();