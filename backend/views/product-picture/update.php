<?php
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 9/2/17
 * Time: 11:43 AM
 */
use yii\helpers\Html;

$this->title = 'Update Product Picture: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Product Pictures', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="product-picture-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>