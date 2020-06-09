<?php
namespace app\index\controller;
use think\Build;
use think\Controller;

class Base extends Controller
{

    protected $a = '001';
    protected function demo()
    {

        return '我是demo';

    }
}
