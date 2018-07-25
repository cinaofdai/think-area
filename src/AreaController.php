<?php
/**
 * Created by dh2y.
 * bolg: http://blog.csdn.net/sinat_22878395
 * Date: 2018/4/26 0026 16:26
 * functional: 地区获取
 */

namespace dh2y\area;




use think\Db;

class AreaController
{
    public function index($pid=0){
        $province =  Db::name('area')->field('id,name')->where('pid',$pid)->select();
        return json_encode($province);
    }

}