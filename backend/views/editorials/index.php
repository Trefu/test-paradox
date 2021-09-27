<?php

use common\models\base\Editorials;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\EditorialsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Editorials');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="editorials-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Editorials'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'value' => 'editorial_name',
                'attribute' => 'editorial_name',
                'filter' => ArrayHelper::map(Editorials::find()->all(), 'id', 'editorial_name'),
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>