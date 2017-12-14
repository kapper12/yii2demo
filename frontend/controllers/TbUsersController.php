<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;
use Yii;
use \yii\web\Controller;
use frontend\models\TbUsers;

class TbUsersController extends Controller {
    public function actionLogin(){
        $model = new TbUsers();
        $message="";
        if(!empty($_POST)){
            $username = $_POST["TbUsers"]["username"];
            $password = $_POST["TbUsers"]["password"];
            
            $user = TbUsers::find()->where([
                "username" => $username,
                "password" => $password
            ])->one();
            
            if(!empty($user) && $user->username === $username){
                Yii::$app->session["login"] = $user->user_id;
                //ลิงค์ไป controller TbUsersProfile/index
                return $this->redirect(['/tb-users-profile/index']);
            }
            else {
                $message = "กรุณาตรวจสอบ Username หรือ Password ให้ถูกต้อง";
            }
            
        }
        return $this->render("login",["model"=>$model,"message"=>$message]);
        
    }
    
    public function actionUserProfile(){
        
    }
}
