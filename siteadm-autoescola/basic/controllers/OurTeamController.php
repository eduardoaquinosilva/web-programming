<?php

namespace app\controllers;

use app\models\OurTeam;
use app\models\OurTeamSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OurTeamController implements the CRUD actions for OurTeam model.
 */
class OurTeamController extends Controller
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
     * Lists all OurTeam models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new OurTeamSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single OurTeam model.
     * @param int $idour_team Idour Team
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idour_team)
    {
        return $this->render('view', [
            'model' => $this->findModel($idour_team),
        ]);
    }

    /**
     * Creates a new OurTeam model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new OurTeam();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idour_team' => $model->idour_team]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing OurTeam model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idour_team Idour Team
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idour_team)
    {
        $model = $this->findModel($idour_team);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idour_team' => $model->idour_team]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing OurTeam model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idour_team Idour Team
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idour_team)
    {
        $this->findModel($idour_team)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the OurTeam model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idour_team Idour Team
     * @return OurTeam the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idour_team)
    {
        if (($model = OurTeam::findOne(['idour_team' => $idour_team])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
