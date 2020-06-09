<?php
namespace app\index\model;

use think\Model;

class User extends Model
{
  public function demo(){
      return  '我是model 的 demo';
  }
}