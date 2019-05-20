<?php

namespace Tius\TiusOauth\src;

class Common {

    /**
     * @param string $url
     * @return string
     */
    public static function getContents($url){
        if(!function_exists('curl_init')){
            die('curl扩展没有开启');
        }
        $ua='Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.9';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, $ua);
        curl_setopt($ch, CURLOPT_URL, $url);
        $response =  curl_exec($ch);
        if($error=curl_error($ch)){
            die($error);
        }
        curl_close($ch);
        return $response;
    }
    /**
     * 组装GET请求URL
     * @param $url
     * @param array $data
     * @return string
     */
    public static function JointUrl($url,$data = array())
    {
        $newUrl =  $url.'?';
        $newArr = array();
        foreach ($data as $k=>$v) {
            $newArr[] = "$k=$v";
        }

        $str = implode("&",$newArr);

        $newUrl .= $str;

        return $newUrl;
    }

}