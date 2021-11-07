<?php

namespace app\controllers;

use app\models\IssueReturn;
use app\models\IssueReturnSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * IssuereturnController implements the CRUD actions for IssueReturn model.
 */
class IssuereturnController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all IssueReturn models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new IssueReturnSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single IssueReturn model.
     * @param int $transID Trans ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($transID)
    {
        return $this->render('view', [
            'model' => $this->findModel($transID),
        ]);
    }

    /**
     * Creates a new IssueReturn model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new IssueReturn();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'transID' => $model->transID]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing IssueReturn model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $transID Trans ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($transID)
    {
        $model = $this->findModel($transID);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'transID' => $model->transID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing IssueReturn model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $transID Trans ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($transID)
    {
        $this->findModel($transID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the IssueReturn model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $transID Trans ID
     * @return IssueReturn the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($transID)
    {
        if (($model = IssueReturn::findOne(['transID' => $transID])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
