<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\base\Editorials */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="editorials-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'editorial_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
