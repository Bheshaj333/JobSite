<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form ActiveForm */
?>

<style>
    <?php include '../web/css/site.css'; ?>
</style>

<div class="maincontent">


    <div class="user-register">
        <h2 class="pb-2 mt-4 mb-5 border-bottom">User Registration</h2>


        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($user, 'full_name'); ?>
        <?= $form->field($user, 'username'); ?>
        <?= $form->field($user, 'email'); ?>
        <?= $form->field($user, 'password')->passwordInput(); ?>
        <?= $form->field($user, 'password_repeat')->passwordInput(); ?>



        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
        <?php ActiveForm::end(); ?>

    </div><!-- user-register -->
</div>