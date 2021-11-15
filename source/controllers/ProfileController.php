<?php

namespace app\controllers;

use app\models\Profile;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * ProfileController implements the CRUD actions for Profile model.
 */
class ProfileController extends Controller
{
    public function actionIndex()
    {
        $id = Yii::$app->user->identity->id;
        $model = Profile::findOne(['user_id' => $id]);

        return $this->render('index', [
            'model' => $model,
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Profile::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionBack()
    {
        return $this->goBack();
    }
}
