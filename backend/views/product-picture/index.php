<?php
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 9/2/17
 * Time: 11:43 AM
 */
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Product Pictures';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-picture-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Product Picture', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'product_id',
            'picture_path',
            'created_on',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>