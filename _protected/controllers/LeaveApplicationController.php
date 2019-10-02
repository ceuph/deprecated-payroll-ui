<?php

namespace app\controllers;

use Yii;
use app\models\LeaveApplication;
use app\models\search\LeaveApplicationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use app\models\UgLeaveCredits;
use app\models\PayPeriod;

/**
 * LeaveApplicationController implements the CRUD actions for LeaveApplication model.
 */
class LeaveApplicationController extends Controller
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
     * Lists all LeaveApplication models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LeaveApplicationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single LeaveApplication model.
     * @param string $date_to
     * @param string $EmpID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($date_to, $EmpID)
    {
        return $this->render('view', [
            'model' => $this->findModel($date_to, $EmpID),
        ]);
    }

    /**
     * Creates a new LeaveApplication model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    /*public function actionCreate()
    {
        $model = new LeaveApplication();
        $ugLeave = new UgLeaveCredits();

        if ($model->load(Yii::$app->request->post())) {

            $type = $model->type_leave;

            $calc = $this->dateDifference($model->date_from, $model->date_to);

            $model->status =LeaveApplication::STATUS_PENDING;
            $model->date_created = date('Y-m-d');
            $model->date_updated = date('Y-m-d');

            $ugLeave->EmpID = $model->EmpID;
            $ugLeave->PrdID = $model->PrdID;
            $ugLeave->$type = $calc;

            if($model->validate()){

                $model->save();
                $ugLeave->save();
                return $this->redirect(['view', 'date_to' => $model->date_to, 'EmpID' => $model->EmpID]);
            }

            
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }*/

    public function actionCreate()
    {
        $model = new LeaveApplication();

        if ($model->load(Yii::$app->request->post())) {

            $model->status =LeaveApplication::STATUS_PENDING;
            $model->date_created = date('Y-m-d');
            $model->date_updated = date('Y-m-d');
            if($model->save())
            {
                return $this->redirect(['view', 'date_to' => $model->date_to, 'EmpID' => $model->EmpID]);
            }

        }

        return $this->render('create', [
            'model' => $model,
        ]);

    }


    /**
     * Updates an existing LeaveApplication model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $date_to
     * @param string $EmpID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($date_to, $EmpID)
    {
        $model = $this->findModel($date_to, $EmpID);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'date_to' => $model->date_to, 'EmpID' => $model->EmpID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing LeaveApplication model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $date_to
     * @param string $EmpID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($date_to, $EmpID)
    {
        $this->findModel($date_to, $EmpID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the LeaveApplication model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $date_to
     * @param string $EmpID
     * @return LeaveApplication the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($date_to, $EmpID)
    {
        if (($model = LeaveApplication::findOne(['date_to' => $date_to, 'EmpID' => $EmpID])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


    public function actionProcess()
    {
        
        if(Yii::$app->request->post('ids')){

            $ids = Yii::$app->request->post('ids');

            $leaveApps = array();

            foreach ($ids as $id) {

                $ugLeave = new UgLeaveCredits;

                $leave = LeaveApplication::find()->where(['EmpID'=>$id['EmpID']])->andWhere(['date_to'=>$id['date_to']])->one();

               $payPeriods = PayPeriod::find()->where(['<=','date_from',$leave['date_from']])->andWhere(['>=','date_to',$leave['date_to']])->one();

               

                var_dump($payPeriods['PrdID']);

                /*
                $ugLeave->EmpID = $leave->EmpID;
                $ugLeave->PrdID = $payPeriods['PrdID'];
                $ugLeave->save();
                */

            }

            
            return 1;
            
        }else{
            return 2;
        }
        
    }

    protected function dateDifference($date_1 , $date_2 , $differenceFormat = '%a' )
    {
        $datetime1 = date_create($date_1);
        $datetime2 = date_create($date_2);

        $interval = date_diff($datetime1, $datetime2);

        return $interval->format($differenceFormat);

    }
}
