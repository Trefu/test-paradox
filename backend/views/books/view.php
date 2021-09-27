<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\base\Books */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Books'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="books-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,

        'attributes' => [

            'id',
            'title',
            'epilogue',
            [
                'format' => 'raw',
                'label' => 'Editorial',
                'value' => Html::a($model->editorial->editorial_name, ['editorials/view', 'id' => $model->editorial_id])
            ],
            [
                'format' => 'raw',
                'label' => 'Author',
                'value' => Html::a($model->author->author_name, ['authors/view', 'id' => $model->editorial_id])
            ],
            [
                'format' => 'raw',
                'label' => 'Category',
                'value' => Html::a($model->category->category_name, ['categories/view', 'id' => $model->editorial_id])
            ],
        ],
    ]) ?>

</div>