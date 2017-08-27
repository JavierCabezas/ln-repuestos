<?php
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 8/21/17
 * Time: 11:22 PM
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Other\Slider */
/* @var $form yii\widgets\ActiveForm */
$this->registerJsFile( '@web/js/slider_create.js',  ['depends' => [\yii\web\JqueryAsset::className()]] );
?>

<div class="slider-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imageFile')->fileInput() ?>

    <?= $form->field($model, 'priority')->textInput(['type' => 'number', 'min' => 1]) ?>

    <?= $form->field($model, 'has_link')->checkbox(['id' => 'check_link_checkbox']) ?>

    <div id="path_field">
        <?= $form->field($model, 'link_path')->textInput(['maxlength' => true, 'id' => 'path_field']) ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success center-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>