<?php
    $this->title = $job->title.' - Job Website';
?>

<style>
    <?php include '../web/css/site.css'; ?>
</style>


<div class="maincontent">

    <a class="btn btn-primary" href="/index.php?r=job"> Back </a>


    <?php if (yii::$app->user->identity->id == $job->user_id) { ?>

    <span class = "float-right">
        <a class="btn btn-success" href="/index.php?r=job/edit&id=<?= $job->id ?>"> Edit </a>
        <a onClick = "return confirm('Are you sure ?')" class="btn btn-danger" href="/index.php?r=job/delete&id=<?= $job->id ?>"> Delete </a>
    </span>

    <?php } ?>

    <div>
        <h2 class="pb-2 mt-4 mb-4 border-bottom">
            <?= $job->title; ?>
            <small>In <?= $job->city; ?> <?= $job->address; ?> </small>
        </h2>

        <?php if (!empty($job->description)) : ?>

            <div class="card card-body bg-light mb-3">
                <h4> Job Description </h4>
                <p> <?= $job->description; ?> </p>
            </div>

        <?php endif; ?>

        <ul class="list-group">

            <?php
            if (!empty($job->create_date)) :
                $mydate = strtotime($job->create_date);
                $dtformat = date("F j, Y", $mydate);
            ?>

                <li class="list-group-item">
                    <strong>Listing Date:</strong> <?= $dtformat ?>
                </li>

            <?php endif; ?>


            <?php if (!empty($job->category->name)) : ?>

                <li class="list-group-item">
                    <strong>Category Name :</strong> <?= $job->category->name ?>
                </li>

            <?php endif; ?>

            <?php if (!empty($job->type)) : ?>

                <li class="list-group-item">
                    <strong>Job Type :</strong> <?= ucwords(str_replace('_', ' ', $job->type)) ?>
                </li>

            <?php endif; ?>

            <?php if (!empty($job->requirements)) : ?>

                <li class="list-group-item">
                    <strong>Requirements :</strong> <?= $job->requirements ?>
                </li>

            <?php endif; ?>

            <?php if (!empty($job->salary_range)) : ?>

                <li class="list-group-item">
                    <strong>Requirements :</strong> <?= $job->salary_range ?>
                </li>

            <?php endif; ?>

            <?php if (!empty($job->contact_email)) : ?>

                <li class="list-group-item">
                    <strong>Contact Email :</strong> <?= $job->contact_email ?>
                </li>

            <?php endif; ?>

            <?php if (!empty($job->contact_phone)) : ?>

                <li class="list-group-item">
                    <strong>Contact Phone :</strong> <?= $job->contact_phone ?>
                </li>

            <?php endif; ?>

        </ul>


        <div class="mt-3 text-center">
            <a class="btn btn-success" href="mailto:<?= $job->contact_email ?>"> Contact Employer </a>
        </div>

    </div>
</div>