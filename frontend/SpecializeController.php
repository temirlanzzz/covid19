<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Specialize;
use frontend\models\SearchSpecialize;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SpecializeController implements the CRUD actions for Specialize model.
 */
class SpecializeController extends Controller
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
     * Lists all Specialize models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchSpecialize();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Specialize model.
     * @param integer $id
     * @param string $email
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id, $email)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $email),
        ]);
    }

    /**
     * Creates a new Specialize model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Specialize();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'email' => $model->email]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Specialize model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param string $email
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $email)
    {
        $model = $this->findModel($id, $email);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'email' => $model->email]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Specialize model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param string $email
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $email)
    {
        $this->findModel($id, $email)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Specialize model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param string $email
     * @return Specialize the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $email)
    {
        if (($model = Specialize::findOne(['id' => $id, 'email' => $email])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
