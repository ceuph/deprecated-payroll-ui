<?php

namespace app\controllers;

use Yii;
use app\models\PayrollEmployeeList;
use app\models\search\PayrollEmployeeListSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use yii\db\Query;
use yii\helpers\Json;


/**
 * PayrollEmployeeListController implements the CRUD actions for PayrollEmployeeList model.
 */
class PayrollEmployeeListController extends Controller
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

    public function actionFind($q)
    {
        header('Content-type: application/json');
        $clean['more'] = false;

        $query = new Query;
        if(!is_Null($q))
        {
            $mainQuery = $query->select('EmpID as id, LName AS text, 
                FName as fname, EmpID')
                ->from('payroll_employee_list')
                ->where(['like','LName',$q])
                ->orWhere(['like','FName',$q])
                ->orWhere(['like','EmpID',$q]);

            $command = $mainQuery->createCommand();
            $rows = $command->queryAll();
            $clean['results'] = array_values($rows);


        }
        else
        {           
            $clean['results'] = ['id'=> 0,'text' => 'None found'];
        }

        echo Json::encode($clean);
        exit();
    }

    /**
     * Lists all PayrollEmployeeList models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PayrollEmployeeListSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PayrollEmployeeList model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new PayrollEmployeeList model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PayrollEmployeeList();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->EmpID]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PayrollEmployeeList model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->EmpID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PayrollEmployeeList model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PayrollEmployeeList model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return PayrollEmployeeList the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PayrollEmployeeList::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
