<?php

use common\models\base\Authors;
use common\models\base\Categories;
use common\models\base\Editorials;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model common\models\base\Books */
/* @var $form yii\widgets\ActiveForm */


?>


<div class="books-form">


    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'epilogue')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'editorial_id')->widget(Select2::class, [
        'data' => ArrayHelper::map(Editorials::find()->all(), 'id', 'editorial_name'),
        'options' => ['placeholder' => Yii::t('app', 'Select editorial')],
        'pluginOptions' => [
            'allowClear' => true
        ]
    ]) ?>

    <?= $form->field($model, 'author_id')->widget(Select2::class, [
        'data' => ArrayHelper::map(Authors::find()->all(), 'id', 'author_name'),
        'options' => ['placeholder' => Yii::t('app', 'Select author')],
        'pluginOptions' => [
            'allowClear' => true
        ]
    ]) ?>

    <?= $form->field($model, 'category_id')->widget(Select2::class, [
        'data' => ArrayHelper::map(Categories::find()->all(), 'id', 'category_name'),
        'options' => ['placeholder' => Yii::t('app', 'Select category')],
        'pluginOptions' => [
            'allowClear' => true
        ]
    ]) ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>