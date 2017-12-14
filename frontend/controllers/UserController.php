<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace frontend\controllers;
use yii\web\Controller;
use yii;


class UserController extends Controller{
    
public function actionIndex(){
    
  $users= [
      'username'=>'Thassanai',
      'fname' => 'kap',
      'lastname' => 'prompanya',
      'telephon' => '0981641836'
  ];

return $this->render("index",["users" =>$users]);
}

public function actionTest(){
    
 echo "ok";
}
}