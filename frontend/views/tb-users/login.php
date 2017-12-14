<?php
    use \yii\bootstrap\ActiveForm;
    if(!empty($message))
        echo $message;
?>
   
<?php $form = \yii\bootstrap\ActiveForm::begin();?>

<dev>
    <?= $form->field($model,"username")->textInput()?>
</dev>
<dev>
    
    <?= $form->field($model,"password")->passwordInput()?>
</dev>
<dev>
    <?=yii\helpers\Html::submitButton("Login",["class"=>"btn btn-primary"])?>

<?php ActiveForm::end();?>