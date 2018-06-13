<?php
namespace app\index\controller;

//导入模型
use app\index\model\User;

class Index
{
    public function index()
    {
        // // dump(config());
       
        // $res = $user->allowField(true)->data([
        //     'name' => '嘎嘎阿哥',
        //     'email' => '888888@qq.com',
        //     'duty' => '设计人员',
        //     'test' => '1111'
        // ]);  

        // $user->save();

        // echo $res;

         $user = model('User');

         $res = $user->where('id','5')->find('9');

         echo $res;
       






    }
}
