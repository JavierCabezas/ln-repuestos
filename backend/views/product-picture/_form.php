<?php
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 9/2/17
 * Time: 11:42 AM
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="product-picture-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_id')->textInput() ?>

    <?= $form->field($model, 'picture_path')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_on')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>