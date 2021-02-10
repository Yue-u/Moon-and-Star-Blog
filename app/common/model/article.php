<?php


namespace app\common\model;


use think\Model;

class article extends Model
{
    public function classification()
    {
        return $this->hasMany(classification::class);
    }
}