<?php
use yii\helpers\Html;
use yii\grid\GridView;
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 8/26/17
 * Time: 3:42 PM
 */
$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'category_id',
            'name',
            'seo_name',
            'description',
            // 'price',
            // 'is_featured',
            // 'created_on',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>