<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\User;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch('index');
    }
    public function welcome(){
        return $this->fetch('welcome');
    }
}
