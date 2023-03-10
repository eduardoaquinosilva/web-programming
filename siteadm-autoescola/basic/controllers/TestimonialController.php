<?php

namespace app\controllers;

use app\models\Testimonial;
use app\models\TestimonialSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TestimonialController implements the CRUD actions for Testimonial model.
 */
class TestimonialController extends Controller
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
     * Lists all Testimonial models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TestimonialSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Testimonial model.
     * @param int $idtestimonial Idtestimonial
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idtestimonial)
    {
        return $this->render('view', [
            'model' => $this->findModel($idtestimonial),
        ]);
    }

    /**
     * Creates a new Testimonial model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Testimonial();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idtestimonial' => $model->idtestimonial]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Testimonial model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idtestimonial Idtestimonial
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idtestimonial)
    {
        $model = $this->findModel($idtestimonial);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idtestimonial' => $model->idtestimonial]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Testimonial model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idtestimonial Idtestimonial
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idtestimonial)
    {
        $this->findModel($idtestimonial)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Testimonial model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idtestimonial Idtestimonial
     * @return Testimonial the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idtestimonial)
    {
        if (($model = Testimonial::findOne(['idtestimonial' => $idtestimonial])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
