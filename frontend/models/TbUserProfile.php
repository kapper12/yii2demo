<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\models;
use Yii;
use yii\db\ActiveRecord;
/**
 * Description of TbUserProfile
 *
 * @author ANUSIT
 */
class TbUserProfile extends ActiveRecord {
    public static function tableName(){
        return 'tb_user_profile';
    }
    public function rules(){
        return[
            [['fname','lname'],'required','message'=>'Firstname invalid'],
            [['lname','lname'],'required','message'=>'Lastname invalid']
            
        ];
    }
        public function attributeLabels(){
            return [
                "fname"=>"Firstname",
                "lname"=>"Lastname",
                
            ];
        }
}
