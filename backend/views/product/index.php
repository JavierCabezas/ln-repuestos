<?php
use yii\helpers\Html;
use yii\grid\GridView;
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 8/26/17
 * Time: 3:42 PM
 */
$this->title = 'Productos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= "" // $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear producto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            [
                'attribute' => 'category_id',
                'value' => function ($model) {
                    return $model->category;
                },
                'filter' => \app\models\helpers\CategoriesHelper::all_categories_flat()
            ],
            'name',
            'price',
            [
                'attribute' => 'is_featured',
                'value' => function ($model){
                    return $model->is_featured ? 'Sí' :' No';
                },
                'filter' => ['0' => 'No', '1' => 'Sí' ]
            ],
            [
                'attribute' => 'upon_request',
                'value' => function ($model){
                    return $model->upon_request ? 'Sí' :' No';
                },
                'filter' => ['0' => 'No', '1' => 'Sí' ]
            ],
            'created_on',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>