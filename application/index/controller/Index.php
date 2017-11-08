<?php

namespace app\index\controller;

use think\Request;

class Index extends baseController
{
    public function index()
    {
        $this->assign("title", "首页 | " . config('company_information.full_name'));
        $this->assign("bannerHeight","Big");
        return $this->fetch();
    }

    public function news()
    {
        $this->assign("title", "业界资讯 | " . config('company_information.full_name'));
        return $this->fetch();
    }

    public function contact()
    {
        $this->assign("title", "联系我们 | " . config('company_information.full_name'));
        return $this->fetch();
    }

    public function services()
    {
        $this->assign("title", "专家团队 | " . config('company_information.full_name'));
        return $this->fetch();
    }

    public function gallery()
    {
        $this->assign("title", "产品与服务 | " . config('company_information.full_name'));
        return $this->fetch();
    }

    public function single()
    {
        $this->assign("title", "业界资讯 | " . config('company_information.full_name'));
        return $this->fetch();
    }

    public function term()
    {
        $this->assign("title", "服务条款 | " . config('company_information.full_name'));
        return $this->fetch();
    }

    public function privacy()
    {
        $this->assign("title", "隐私策略 | " . config('company_information.full_name'));
        return $this->fetch();
    }

    public function product($productName=""){
        switch ($productName){
            case "changyou":
                return $this->fetch("product-changyou");
                break;
            case "weishu":
                return $this->fetch("product-weishu");
                break;
            case "zhiminshu":
                return $this->fetch("product-zhiminshu");
                break;
            default:
                break;
        }
}

    public function hello($name = 'thinkphp')
    {
        $this->assign('name', $name);
        return $this->fetch();
    }
}
