<?php

namespace app\controllers;

use Yii;
use app\models\TcTeachingLoad;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TcTeachingLoadController implements the CRUD actions for TcTeachingLoad model.
 */
class TcTeachingLoadController extends Controller
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
     * Lists all TcTeachingLoad models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => TcTeachingLoad::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TcTeachingLoad model.
     * @param string $EmpID
     * @param string $PrdID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($EmpID, $PrdID)
    {
        return $this->render('view', [
            'model' => $this->findModel($EmpID, $PrdID),
        ]);
    }

    /**
     * Creates a new TcTeachingLoad model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TcTeachingLoad();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'EmpID' => $model->EmpID, 'PrdID' => $model->PrdID]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TcTeachingLoad model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $EmpID
     * @param string $PrdID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($EmpID, $PrdID)
    {
        $model = $this->findModel($EmpID, $PrdID);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'EmpID' => $model->EmpID, 'PrdID' => $model->PrdID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TcTeachingLoad model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $EmpID
     * @param string $PrdID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($EmpID, $PrdID)
    {
        $this->findModel($EmpID, $PrdID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TcTeachingLoad model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $EmpID
     * @param string $PrdID
     * @return TcTeachingLoad the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($EmpID, $PrdID)
    {
        if (($model = TcTeachingLoad::findOne(['EmpID' => $EmpID, 'PrdID' => $PrdID])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
