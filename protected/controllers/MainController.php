<?php
/**
 * Created by JetBrains PhpStorm.
 * User: leon
 * Date: 12-10-20
 * Time: 上午10:58
 * To change this template use File | Settings | File Templates.
 */

class MainController extends CController{
    public function init(){
        $this->layout = '//layouts/mainLayout';
    }

    public function actionIndex(){
        $this->render("index");
    }
}