<?php

namespace backend\controllers;

use Yii;
use backend\models\BukuLog;
use backend\models\BukuLogSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * BukuLogController implements the CRUD actions for BukuLog model.
 */
class BukuLogController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all BukuLog models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BukuLogSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BukuLog model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new BukuLog model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new BukuLog();

        if ($model->load(Yii::$app->request->post())) {
            // get the instance of the uploaded file
            // $imageName = $model ->bukuLog_nama;
            // $model->file = UploadedFile::getInstance($model,'file');
            // $model->file->saveAs( 'uploads/'.$imageName.'.'.$model->file->extension );

            // save the path in the db column
            // $model->bukuLog_fail = 'uploads/'.$imageName.'.'.$model->file->extension;

            $image = UploadedFile::getInstance($model, 'bukuLog_fail');
            $model->bukuLog_fail= $image->name;
            // $path = Yii::$app->params['uploadPath'] . $model->bukuLog_fail;

            if($image != '')
            {
            $image->saveAs(\Yii::$app->basePath.'/web/uploads/'.$image->name);
            }
             
            if($model->save())      
            {
                return $this->redirect(['view', 'id' => $model->bukuLog_id]);
            }
        } 

        else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing BukuLog model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->bukuLog_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing BukuLog model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BukuLog model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return BukuLog the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = BukuLog::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
