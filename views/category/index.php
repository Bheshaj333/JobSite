<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Category - Job Website';

?>

<style>
    <?php include '../web/css/site.css'; ?>
</style>

<div class="maincontent">

    <h1 class="pb-2 mt-4 mb-5 border-bottom">Category <a class="btn btn-primary float-right" href="/index.php?r=category/create"> Create </a> </h1>

    <?php
    $msg = yii::$app->getSession()->getFlash('success');
    if (null !== $msg) : ?>
        <div class="alert alert-success"> <?= $msg ?> </div>
    <?php endif; ?>


    <ul class="list-group">

        <?php foreach ($categories as $category) { ?>

            <li class="list-group-item">
                <a href="/index.php?r=job&category=<?= $category->id; ?>"> <?= $category->name; ?> </a>
            </li>

        <?php } ?>

    </ul>

    <?= LinkPager::widget(['pagination' => $pagination,]); ?>

</div>