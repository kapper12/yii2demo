<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class UserProfileController extends Controller{
    
public function actionIndex(){
  $user= [
      'username' => 'THASSANAI',
      'lastname' => 'PROMPANYA',
      'tel' => '0981641836',
      'email' => 'KAPTHASSANAI@GMAIL.COM',
      'sex' => 'MALE'
      
  ];

  return $this->render("index",["user" =>$user]);
}

public function actionProfile(){
    return $this->render("profile",[]);
}
public function actionCustomer(){
    return $this->render("conn",[]);
}
}