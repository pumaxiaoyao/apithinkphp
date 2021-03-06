<?php
/**
 * Created by PhpStorm.
 * User: Zhu
 * Date: 2018/3/17
 * Time: 18:54
 */

namespace app\api\model;


use think\Model;

class DepositModel extends Model
{
    protected $name = 'deposit';

    protected $autoWriteTimestamp = 'timestamp';   // 开启自动写入时间戳


    protected $insert = ['date'];//数据完成


    //数据完成
    protected function setDateAttr()
    {
        return date('Y-m-d');
    }
}