<?php
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 9/2/17
 * Time: 11:43 AM
 */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\product\Product;

$this->title = 'Fotos de productos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-picture-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Nueva foto de producto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            [
                'attribute' => 'product_id',
                'value' => function ($model) {
                    return $model->product->name;
                },
                'filter' => ArrayHelper::map(Product::find()->all(), 'id', 'name')
            ],
            'created_on',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}{delete}'
            ],
        ],
    ]); ?>
</div>