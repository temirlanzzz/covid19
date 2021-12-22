<?php

namespace frontend\controllers;

use Yii;
use frontend\models\record;
use frontend\models\SearchRecord;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RecordController implements the CRUD actions for record model.
 */
class RecordController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all record models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchRecord();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single record model.
     * @param string $email
     * @param string $cname
     * @param string $disease_code
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($email, $cname, $disease_code)
    {
        return $this->render('view', [
            'model' => $this->findModel($email, $cname, $disease_code),
        ]);
    }

    /**
     * Creates a new record model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new record();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'email' => $model->email, 'cname' => $model->cname, 'disease_code' => $model->disease_code]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing record model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $email
     * @param string $cname
     * @param string $disease_code
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($email, $cname, $disease_code)
    {
        $model = $this->findModel($email, $cname, $disease_code);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'email' => $model->email, 'cname' => $model->cname, 'disease_code' => $model->disease_code]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing record model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $email
     * @param string $cname
     * @param string $disease_code
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($email, $cname, $disease_code)
    {
        $this->findModel($email, $cname, $disease_code)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the record model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $email
     * @param string $cname
     * @param string $disease_code
     * @return record the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($email, $cname, $disease_code)
    {
        if (($model = record::findOne(['email' => $email, 'cname' => $cname, 'disease_code' => $disease_code])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
