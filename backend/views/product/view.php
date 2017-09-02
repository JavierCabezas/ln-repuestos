<?php
use yii\helpers\{Html, Url};
use yii\widgets\DetailView;
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 8/26/17
 * Time: 3:43 PM
 */
$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Tienes seguridad de querer eliminar este producto?',
                'method' => 'post',
            ],
        ]) ?>
        <a href="<?= Url::to(['/product-picture/create', 'product_id' => $model->id]) ?>" class="btn btn-lg btn-primary pull-right">
            <span class="glyphicon glyphicon-picture"></span> Agregar fotos
        </a>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'category_id',
                'value' => $model->category
            ],
            'name',
            'description',
            [
                'attribute' => 'price',
                'value' => \app\models\helpers\StringHelper::money($model->price)
            ],
            [
                'attribute' => 'is_featured',
                'value' => $model->is_featured ? 'Sí' : 'No'
            ],
            [
                'attribute' => 'is_ready',
                'value' =>  $model->is_ready ? 'Sí' : 'No (motivo: '.$model->reasonNotReady.')'
            ],
            'created_on',
        ],
    ]) ?>

</div>