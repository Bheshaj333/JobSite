<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Category */
/* @var $form ActiveForm */

$this->title = 'Create Category - Job Website';

?>

<style>
    <?php include '../web/css/site.css'; ?>
</style>

<div class="maincontent">

    <div class="category-create">
        <h2 class="pb-2 mt-4 mb-5 border-bottom"> Add New Category </h2>

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($category, 'name') ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
        <?php ActiveForm::end(); ?>

    </div><!-- category-create -->
</div>