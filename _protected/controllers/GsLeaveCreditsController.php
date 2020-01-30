<?php

namespace app\controllers;

use Yii;
use app\models\GsLeaveCredits;
use app\models\search\GsLeaveCreditsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use yii\web\Response;
use yii\widgets\ActiveForm;
/**
 * GsLeaveCreditsController implements the CRUD actions for GsLeaveCredits model.
 */
class GsLeaveCreditsController extends AppController
{
    /**
     * {@inheritdoc}
     */

    /**
     * Lists all GsLeaveCredits models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GsLeaveCreditsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

         $dataProvider->sort->defaultOrder = ['PrdID' => SORT_DESC];

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single GsLeaveCredits model.
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
     * Creates a new GsLeaveCredits model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new GsLeaveCredits();

        if ($model->load(Yii::$app->request->post()) && $empIds = Yii::$app->request->post()['GsLeaveCredits']['EmpID']) {

            foreach($empIds as $empId)
            {
                $model->EmpID = $empId;
            }

            if($model->save())
            {
                return 1;
            }else{

                return 2;
            }
        }

        return $this->renderAjax('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing GsLeaveCredits model.
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
            return $this->redirect(['index']);
        }

        return $this->renderAjax('update', [
            'model' => $model,
        ]);
    }

    public function actionAjaxValidate() {

        $model = new GsLeaveCredits();
        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {

            foreach(Yii::$app->request->post()['GsLeaveCredits']['EmpID'] as $empId){
                 $model->EmpID = $empId;
             }

           \Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);
        }
    }

    /**
     * Deletes an existing GsLeaveCredits model.
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
     * Finds the GsLeaveCredits model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $EmpID
     * @param string $PrdID
     * @return GsLeaveCredits the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($EmpID, $PrdID)
    {
        if (($model = GsLeaveCredits::findOne(['EmpID' => $EmpID, 'PrdID' => $PrdID])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
