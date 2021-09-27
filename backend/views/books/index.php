<?php

use common\models\base\Authors;
use common\models\base\Categories;
use common\models\base\Editorials;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\BooksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Books');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="books-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Books'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'epilogue',

            [
                'value' => 'author.author_name',
                'attribute' => 'author_id',
                'filter' => ArrayHelper::map(Authors::find()->all(), 'id', 'author_name')
            ],
            [
                'value' => 'category.category_name',
                'attribute' => 'category_id',
                'filter' => ArrayHelper::map(Categories::find()->all(), 'id', 'category_name')
            ],
            [

                'attribute' => 'editorial_id',
                'value' => 'editorial.editorial_name',
                'filter' => ArrayHelper::map(Editorials::find()->all(), 'id', 'editorial_name')
            ],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>