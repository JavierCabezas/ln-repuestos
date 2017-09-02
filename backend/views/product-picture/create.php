<?php
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 9/2/17
 * Time: 11:43 AM
 */
use yii\helpers\Html;

$this->title = 'Nueva foto de producto';
$this->params['breadcrumbs'][] = ['label' => 'Fotos de productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-picture-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model
    ]) ?>

</div>