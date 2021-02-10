<?php


namespace app\admin\model;

use think\Model;

class Username extends Model
{
    protected $name ='username';
    protected $pk ='id';
    public function _find($admin)
    {
       $db = Username::where('admin','=',$admin)->findOrFail();
       return $db;
    }

}