<?php

namespace app\index\controller;
use app\common\model\article as Articleo;
use app\BaseController;
use think\facade\Db;
use think\facade\View;

class Article extends BaseController
{
    public function index()
    {
        $id = $this->request->param('id','');
        $res = Db::table('tp_article')
            ->field('tp_article.*,tp_classification.title')
            ->join('tp_classification','tp_article.classification = tp_classification.id')
            ->where('tp_article.id','=',$id)
            ->find();
        $article = Articleo::where('id',$id)->select();
        return View::fetch('',[
            'article' =>$article,
            'pagination'=>$res
        ]);
    }
}