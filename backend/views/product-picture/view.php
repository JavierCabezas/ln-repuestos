<?php
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 9/2/17
 * Time: 11:44 AM
 */
use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = "Foto producto #".$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Fotos de productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-picture-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Tienes seguridad de querer borrar esta foto?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'product_id',
            'created_on',
        ],
    ]) ?>

</div>