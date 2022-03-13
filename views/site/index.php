<?php

/* @var $this yii\web\View */

$this->title = 'Job Website';
?>
<div class="site-index">


    <?php
    $msg = yii::$app->getSession()->getFlash('success');
    if (null !== $msg) : ?>
        <div class="alert alert-success"> <?= $msg ?> </div>
    <?php endif; ?>


    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Searching for a job?</h1>

        <p class="lead">Happy Applying.</p>

        <p>
            <a class="btn btn-lg btn-primary" href="index.php?r=job">Start Browsing</a>
            <a class="btn btn-lg btn-success" href="index.php?r=job/create">Create Listing</a>
        </p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Browse Listing</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.</p>

                <p><a class="btn btn-outline-secondary" href="index.php?r=job">Browse Now &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Find Employee</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.</p>

                <p><a class="btn btn-outline-secondary" href="">Find Now &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Join Now</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.</p>

                <p><a class="btn btn-outline-secondary" href="index.php?r=/user/register">Join Now &raquo;</a></p>
            </div>
        </div>

    </div>
</div>