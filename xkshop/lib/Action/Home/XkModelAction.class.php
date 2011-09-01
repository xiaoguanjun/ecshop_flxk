<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of XkShopModelAction
 * @author dejie
 */
class XkModelAction extends Action {

    // 数据写入操作

    public function insert($name) {

        $xkShop = new Model('XkModel');   // 实例化模型类
        $xkShop->Create(); // 创建数据对象
        $xkShop->name = $name;
        $result = $xkShop->add(); // 写入数据库
        $this->redirect('index'); // 成功后重定向到index操作页面
    }

    // 数据查询操作

    public function query() {

        $xkShop = new Model('XkModel');   // 实例化模型类
        $list = $xkShop->select(); // 查询数据
        return $list;
    }

    // 删除数据
    public function delete($id) {
        if($id){
            $xkShop = new Model('XkModel');
            $xkShop->delete($id);
        }
    }

    // 更新数据
    public function update($xkShop) {
        if ($xkShop) {
            if ($xkShop) {
                $result = $xkShop->add();
            }
        }
    }

}

?>