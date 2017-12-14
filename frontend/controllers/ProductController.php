<?php

namespace frontend\controllers;
use yii\web\Controller;
use yii;

class ProductController extends Controller{
    
public function actionIndex(){

    return $this->render("tbproduct",[]);
}
}

