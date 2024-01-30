<?php

namespace app\controllers;

use app\models\Pemasukan;
use app\models\search\PemasukanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PemasukanController implements the CRUD actions for Pemasukan model.
 */
class PemasukanController extends Controller
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
     * Lists all Pemasukan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PemasukanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pemasukan model.
     * @param string $id_pemasukan Id Pemasukan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_pemasukan)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_pemasukan),
        ]);
    }

    /**
     * Creates a new Pemasukan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Pemasukan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_pemasukan' => $model->id_pemasukan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pemasukan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id_pemasukan Id Pemasukan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_pemasukan)
    {
        $model = $this->findModel($id_pemasukan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_pemasukan' => $model->id_pemasukan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pemasukan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id_pemasukan Id Pemasukan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_pemasukan)
    {
        $this->findModel($id_pemasukan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pemasukan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id_pemasukan Id Pemasukan
     * @return Pemasukan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_pemasukan)
    {
        if (($model = Pemasukan::findOne(['id_pemasukan' => $id_pemasukan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
