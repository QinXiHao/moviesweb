<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/9 0009
 * Time: 下午 3:26
 */
namespace app\index\model;

use think\Db;
use think\Model;

class User extends Model{
    public $table;
    public function __construct()
    {
        parent::__construct();
        $this->table = 'qin_admin_user';
    }
    //查询这个表的所有数据
    public function selectall(){
       $res =  Db::table($this->table)->select();
       return $res;
    }
}