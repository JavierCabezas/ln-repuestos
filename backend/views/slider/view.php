<?php
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 8/21/17
 * Time: 11:23 PM
 */
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Other\Slider */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Sliders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slider-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Volver al listado', 'index', ['class' => 'btn btn-success'])?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Tienes seguridad de querer elimianr este elemento?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'content',
            [
                'attribute' => 'has_link',
                'value' => $model->has_link?'Sí':'No'
            ],
            [
                'attribute' => 'link_path',
                'value' => $model->link_path == ''? ' - ' : $model->link_path
            ],
            'priority',
            [
                'attribute' => 'picture_path',
                'value' => $model->image,
                'format' => ['image',['width'=>'500','height'=>'250']],
            ]
        ],
    ]) ?>

</div>