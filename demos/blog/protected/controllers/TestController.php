<?php
/**
 * Created by PhpStorm.
 * User: xiaoke
 * Date: 15-5-15
 * Time: 下午5:18
 */

class TestController extends Controller{

    public function actionAll(){
        $models = new user;
        $models->username = "xiaoke";
        $models->password = $models->hashPassword("password");
        $models->email = "xiaoke@i-meishu.com";
        $models->save();
        $models->init();
        $username = $models->find("id=:id", array(":id"=>3));
        foreach($username as $user){
            print_r($user);
            echo "<br>";
        }


      //  $this->render("login");
    }
}