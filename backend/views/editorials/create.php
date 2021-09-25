<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\base\Editorials */

$this->title = Yii::t('app', 'Create Editorials');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Editorials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="editorials-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
