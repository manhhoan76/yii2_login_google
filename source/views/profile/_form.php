<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model yii\data\ActiveDataProvider */

?>

<div class="profile-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput(['class' => 'form-control', 'placeholder' => 'Nhập ID', 'disabled' => true]) ?>

    <?= $form->field($model, 'user_id')->textInput(['placeholder' => "Nhập User ID", 'disabled' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['placeholder' => "Nhập Username"]) ?>

    <?php echo Html::img($model->avatar)  ?>

    <?= $form->field($model, 'birth_day')->textInput(['placeholder' => "Nhập ngày sinh"]) ?>

    <?= $form->field($model, 'locale')->textInput(['placeholder' => "Nhập Locale"]) ?>

    <?= $form->field($model, 'address')->textInput(['placeholder' => "Nhập địa chỉ"]) ?>

    <div class="form-group">
        <?= Html::submitButton('Update', ['class' => 'btn btn-success']) ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Back', ['class' => 'btn btn-danger']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>