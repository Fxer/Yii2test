<?php

namespace app\controllers;

use app\models\addForm;
use Yii;
use yii\web\Controller;
use app\models\BlogPost;
use yii\data\Pagination;


class BlogController extends Controller {

    public function actionIndex()
    {
        $columns = [
            'id',
            'title',
            'description',
        ];

        $query = BlogPost::find()
            ->select($columns);

        $countQuery = clone $query;

        $pages = new Pagination(
            ['defaultPageSize'=> 4,
            'totalCount' => $countQuery->count()]);

        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();


        return $this->render('index', [
            'models' => $models,
            'pages' => $pages,
        ]);

    }

    public function actionView($id)
    {
        $item = BlogPost::find()
            ->where(['id'=> $id])
            ->one();

        return $this->render('view', [
            'item'=>$item,
        ]);
    }

    public function actionAdd()
    {
        $model = new addForm();


     if ($model->load(Yii::$app->request->post())){

            $model->save();
            return $this->refresh();
        }

        return $this->render('add', [
            'model' => $model,
        ]);
    }



}