<?php

namespace app\controllers;

use app\models\BookMaster;
use app\models\BookMasterSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BookController implements the CRUD actions for BookMaster model.
 */
class BookController extends Controller
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
     * Lists all BookMaster models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BookMasterSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BookMaster model.
     * @param string $accNumber Acc Number
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($accNumber)
    {
        return $this->render('view', [
            'model' => $this->findModel($accNumber),
        ]);
    }

    /**
     * Creates a new BookMaster model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new BookMaster();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'accNumber' => $model->accNumber]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BookMaster model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $accNumber Acc Number
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($accNumber)
    {
        $model = $this->findModel($accNumber);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'accNumber' => $model->accNumber]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BookMaster model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $accNumber Acc Number
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($accNumber)
    {
        $this->findModel($accNumber)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BookMaster model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $accNumber Acc Number
     * @return BookMaster the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($accNumber)
    {
        if (($model = BookMaster::findOne(['accNumber' => $accNumber])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
