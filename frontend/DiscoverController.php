<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Discover;
use frontend\models\SearchDiscover;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DiscoverController implements the CRUD actions for Discover model.
 */
class DiscoverController extends Controller
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
     * Lists all Discover models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchDiscover();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Discover model.
     * @param string $cname
     * @param string $disease_code
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($cname, $disease_code)
    {
        return $this->render('view', [
            'model' => $this->findModel($cname, $disease_code),
        ]);
    }

    /**
     * Creates a new Discover model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Discover();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'cname' => $model->cname, 'disease_code' => $model->disease_code]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Discover model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $cname
     * @param string $disease_code
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($cname, $disease_code)
    {
        $model = $this->findModel($cname, $disease_code);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'cname' => $model->cname, 'disease_code' => $model->disease_code]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Discover model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $cname
     * @param string $disease_code
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($cname, $disease_code)
    {
        $this->findModel($cname, $disease_code)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Discover model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $cname
     * @param string $disease_code
     * @return Discover the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($cname, $disease_code)
    {
        if (($model = Discover::findOne(['cname' => $cname, 'disease_code' => $disease_code])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
