<?php
/**
 * Created by PhpStorm.
 * User: ylsc
 * Date: 16-8-8
 * Time: 下午4:21
 */


if (!function_exists('changeHumpToUnderLine')) {
    /**
     * 将前端的驼峰变量转换成数据库字段对应的下划线变量
     * @date 2016年08月08日16:42:08
     * @param $hump
     * @return array
     */
    function changeHumpToUnderLine($hump)
    {
        $underLineArr = [];
        foreach ($hump as $key => $value) {
            $underLineArr[strtolower(preg_replace('/((?<=[a-z])(?=[A-Z]))/', '_', $key)) ] = $value;
        }

        return $underLineArr;
    }
}