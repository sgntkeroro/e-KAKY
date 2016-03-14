<?php

namespace backend\controllers;

use Yii;
use backend\models\Permohonan;
use backend\models\MohonBaru;
use backend\models\BukuLog;
use backend\models\Peralatan;
use backend\models\Model;
use backend\models\PermohonanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * PermohonanController implements the CRUD actions for Permohonan model.
 */
class PermohonanController extends Controller
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
     * Lists all Permohonan models.
     * @return mixed
     */

    public function actionIndex()
    {
        $searchModel = new PermohonanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Permohonan model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
            'peralatan' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Permohonan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Permohonan();
        $modelmohonbaru = new MohonBaru();
        $modelbukulog = new BukuLog();
        $modelsperalatan = [new Peralatan];

        if ($model->load(Yii::$app->request->post()) && $modelmohonbaru->load(Yii::$app->request->post()) && $modelbukulog->load(Yii::$app->request->post())) 
        {
            $model->permohonan_tarikh = date('Y-m-d h:m:s');

            $model->save();

            $modelmohonbaru->permohonan_id = $model->permohonan_id;
            $modelmohonbaru->save();

            // $image = UploadedFile::getInstance($model, 'file');
            // $model->file= $image->name;

            // if($image != '')
            // {
            // $image->saveAs(\Yii::$app->basePath.'/web/uploads/'.$image->name);
            // }

            // $modelbukulog->bukuLog_fail = $model->file;
            $modelbukulog->permohonan_id = $model->permohonan_id;
            $modelbukulog->save();

            $modelsperalatan = Model::createMultiple(Peralatan::classname());
            Model::loadMultiple($modelsperalatan, Yii::$app->request->post());

            // validate all models
            $valid = $model->validate();
            $valid = Model::validateMultiple($modelsperalatan) && $valid;

            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(false)) {
                        foreach ($modelsperalatan as $modelperalatan) {
                            $modelperalatan->permohonan_id = $model->permohonan_id;
                            if (! ($flag = $modelperalatan->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $model->permohonan_id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }
        }

        else {
            return $this->render('create', [
                'model' => $model,
                'modelmohonbaru' => $modelmohonbaru,
                'modelbukulog' => $modelbukulog,
                'modelsperalatan' => (empty($modelsperalatan)) ? [new Peralatan] : $modelsperalatan
            ]);
        }
    }

    /**
     * Updates an existing Permohonan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->permohonan_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Permohonan model.
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
     * Finds the Permohonan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Permohonan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Permohonan::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
