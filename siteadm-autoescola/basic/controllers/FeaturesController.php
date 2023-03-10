<?php

namespace app\controllers;

use app\models\Features;
use app\models\FeaturesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FeaturesController implements the CRUD actions for Features model.
 */
class FeaturesController extends Controller
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
     * Lists all Features models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new FeaturesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Features model.
     * @param int $idfeatures Idfeatures
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idfeatures)
    {
        return $this->render('view', [
            'model' => $this->findModel($idfeatures),
        ]);
    }

    /**
     * Creates a new Features model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Features();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idfeatures' => $model->idfeatures]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Features model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idfeatures Idfeatures
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idfeatures)
    {
        $model = $this->findModel($idfeatures);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idfeatures' => $model->idfeatures]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Features model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idfeatures Idfeatures
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idfeatures)
    {
        $this->findModel($idfeatures)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Features model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idfeatures Idfeatures
     * @return Features the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idfeatures)
    {
        if (($model = Features::findOne(['idfeatures' => $idfeatures])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
