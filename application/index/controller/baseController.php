<?php
/**
 * Created by PhpStorm.
 * User: xiedalie
 * Date: 2017/11/1
 * Time: 19:58
 */

namespace app\index\controller;


use think\Controller;
use think\Request;

class baseController extends Controller
{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        //模板变量默认值的设置
        $this->assign("bannerHeight","Small");
        $this->assign("title", config('company_information.full_name'));
    }
}