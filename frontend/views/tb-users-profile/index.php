<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = "User Profile";
?>

<?php if (!empty($model)): ?>  
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title">
                <?= Html::encode($this->title); ?>
                <div class="pull-right">    
                    <a href="<?= Url::to(["/tb-users-profile/create"]) ?>" 
                       class="btn btn-success">
                        <i class="glyphicon glyphicon-plus"></i> 
                    </a>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
        <div class="panel-body">

            <div>
                <label>Firstname: </label><?=$model->fname; ?>
            </div>
            <div>
                <label>Lastname: </label><?=$model->lname; ?>
            </div>
            <div>
                <label>Address: </label><?=$model->address; ?>
            </div>

        </div>
        <div class="panel-footer">
            <a href="<?= Url::to(["/tb-users-profile/update", "id" => $model->user_id]) ?>" 
               class="btn btn-success">
                <i class="glyphicon glyphicon-pencil"></i> Edit Profile</a>
                
        </div>
        
      
    </div>
<?php endif; ?>
