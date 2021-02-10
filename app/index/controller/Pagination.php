<?php

namespace app\index\controller;
use app\common\model\article as Articleo;
use app\BaseController;
use think\facade\Db;
use think\facade\View;
use app\common\model\classification as Ficaor;
use app\common\model\system as System;
class Pagination extends BaseController
{
    public function index()
    {
        $id = $this->request->param('pagin','');
        $classification = Ficaor::select();
        $res = Articleo ::where('classification','=',$id)
            ->order('id','DESC')
            ->paginate('6');
        $article = Articleo::order('id','asc')->paginate('6');
        $system = System::select();
        return View::fetch('',[
            'classification' =>$classification,
            'articleo' =>$res,
            'article' =>$article,
            'system' =>$system
        ]);
    }
}