<?php


namespace app\common\model;

use think\Model;

class system extends Model
{
    public function system()
    {
        $systu = System::select();
    }
}