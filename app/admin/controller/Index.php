<?php
namespace app\admin\controller;
use app\admin\model\Username;
use app\BaseController;
use think\facade\Session;
use think\facade\View;
use think\facade\Db;
use think\captcha\facade\Captcha;


class Index extends BaseController
{
    public function index(Username $username)
    {

        if (Request()->isPost()) {
            //判断用户名和密码与验证码是否正确
            if (!captcha_check(input('post.yzm'))) {
                return '101';
            }else{
                $db = $username->_find(input('post.username'));
            }if (empty($db)){
                return '102';
            }elseif ($db['password']!=md5(input('post.password'))){
                return '103';
            }else{
                Session::set('Username',input('post.username'));
                return '100';
            }
        }else{
            return View::fetch('index');
        }
    }
}
