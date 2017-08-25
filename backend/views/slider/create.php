<?php
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 8/21/17
 * Time: 11:22 PM
 */
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Other\Slider */

$this->title = 'Añadiendo nuevo slider';
$this->params['breadcrumbs'][] = ['label' => 'Sliders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slider-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>