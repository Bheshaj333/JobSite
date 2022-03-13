<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use app\models\Category;
use app\models\Job;


class JobController extends \yii\web\Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['create', 'edit', 'delete', 'details'],
                'rules' => [
                    [
                        'actions' => ['create', 'edit', 'delete', 'details'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ]
        ];
    }





    public function actionIndex($category = 0)
    {

        $query = Job::find();

        $pagination = new Pagination([
            'defaultPageSize' => 20,
            'totalCount' => $query->count()

        ]);

        if (!empty($category)) {
            $jobs = $query->orderBy('create_date desc')
                ->offset($pagination->offset)
                ->limit($pagination->limit)
                ->where(['category_id' => $category])
                ->all();
        } else {
            $jobs = $query->orderBy('create_date desc')
                ->offset($pagination->offset)
                ->limit($pagination->limit)
                ->all();
        }


        return $this->render('index', [
            'jobs' => $jobs,
            'pagination' => $pagination
        ]);
    }



    public function actionDetails($id)
    {
        $job = Job::find()->where(['id' => $id])->one();

        return $this->render('details', ['job' => $job]);
    }

    public function actionCreate()
    {
        $job = new Job();

        if ($job->load(Yii::$app->request->post())) {
            if ($job->validate()) {
                $job->save();

                yii::$app->getSession()->setFlash('success', 'Job added successfuly');
                return $this->redirect('index.php?r=job');
            }
        }

        return $this->render('create', ['job' => $job,]);
    }

    public function actionEdit($id)
    {
        $job = Job::findOne($id);

        if (yii::$app->user->identity->id != $job->user_id) {
            return $this->redirect('index.php?r=job');
        }

        if ($job->load(Yii::$app->request->post())) {
            if ($job->validate()) {
                $job->save();

                yii::$app->getSession()->setFlash('success', 'Job Updated successfuly');
                return $this->redirect('index.php?r=job');
            }
        }

        return $this->render('edit', ['job' => $job,]);
    }

    public function actionDelete($id)
    {
        $job = Job::findOne($id);

        if (yii::$app->user->identity->id != $job->user_id) {
            return $this->redirect('index.php?r=job');
        }

        $job->delete();

        yii::$app->getSession()->setFlash('success', 'Job Deleted successfuly');
        return $this->redirect('index.php?r=job');
    }
}
