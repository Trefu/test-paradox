<?php

use common\models\base\Authors;
use common\models\base\Categories;
use common\models\base\Editorials;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model common\models\base\Books */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="books-form">

    <?php
    ?>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'epilogue')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'editorial_id')->dropDownList(ArrayHelper::map(Editorials::find()->all(), 'id', 'editorial_name'))
    ?>

    <?= $form->field($model, 'author_id')->dropDownList(ArrayHelper::map(Authors::find()->all(), 'id', 'author_name')) ?>

    <?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map(Categories::find()->all(), 'id', 'category_name')) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>