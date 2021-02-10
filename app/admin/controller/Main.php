<?php

namespace app\admin\controller;
use app\BaseController;
use think\facade\View;
use app\common\model\system as Systom;
use app\common\model\classification as Ficat;
use app\common\model\article as Articleo;
use app\common\model\link as Urllink;
class Main extends BaseController
{
    public function index()
    {
        $system = Systom::select();
        $article = Articleo::order('id','asc')->paginate('6');
        $ficat = Ficat::select();
        return View::fetch('main',[
            'system'=>$system,
            'article' =>$article,
            'ficat' =>$ficat
        ]);
    }
}