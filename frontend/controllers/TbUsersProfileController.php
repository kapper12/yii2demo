<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\models\TbUserProfile;
/**
 * Description of TbUsersProfileController
 *
 * @author ANUSIT
 */
class TbUsersProfileController extends Controller {
    public function actionIndex(){
        
        $user_id = Yii::$app->session["login"];
        $model = TbUserProfile::find()->where(["user_id"=>$user_id])->one();
        
        
        return $this ->render("index",["model"=>$model]);
    }
    public function actionCreate(){
        $model = new TbUserProfile();
        if(!empty($_POST)){
            $model->fname = $_POST["TbUserProfile"]["fname"];
            $model->lname = $_POST["TbUserProfile"]["lname"];
            $model->address = $_POST["TbUserProfile"]["address"];
            $model->user_id = Yii::$app->session["login"];
            if($model->save()){
                return $this->redirect(['/tb-users-profile/index']);
            }else{
                echo 'error';exit();
            }
        }
        return $this->render("create",["model"=>$model]);
    }
    
    public function actionUpdate($id){
        $model = TbUserProfile::findOne($id);
        if(!empty($_POST)){
            $model->fname = $_POST["TbUserProfile"]["fname"];
            $model->lname = $_POST["TbUserProfile"]["lname"];
            $model->address = $_POST["TbUserProfile"]["address"];
            $model->user_id = Yii::$app->session["login"];
            if($model->save()){
                return $this->redirect(['/tb-users-profile/index']);
            }else{
                echo 'error';exit();
            }
        }
        return $this->render("create",["model"=>$model]);
    }
}
