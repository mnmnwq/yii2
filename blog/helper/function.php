<?php
/**
 * 工具函数
 * Created by PhpStorm.
 * User: baiwei
 * Date: 16/9/14
 * Time: 上午11:26
 */
function p($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function dd($data){
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die;
}