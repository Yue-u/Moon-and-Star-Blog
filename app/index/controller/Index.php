<?php
declare (strict_types = 1);

namespace app\index\controller;

use app\common\model\system as Systom;
use think\Request;
use think\facade\View;
use app\common\model\classification as Ficat;
use app\common\model\article as Articleo;
use app\common\model\link as Urllink;
class Index
{
    public function index(Systom $system)
    {
        $systu = $system->system();
        $list = Ficat::select();
        $article = Articleo::order('id','asc')->paginate('6');
        $articleclass = $article->render();
        $link = Urllink::select();
        return View::fetch('index',[
            'listo' => $list,
            'systuo' => $systu,
            'articleo' =>$article,
            'articleclass'=>$articleclass,
            'linko' =>$link
        ]);
    }
}
