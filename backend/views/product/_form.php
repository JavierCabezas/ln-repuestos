<?php
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 8/26/17
 * Time: 3:40 PM
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\helpers\CategoriesHelper;
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_id')->dropDownList(CategoriesHelper::all_categories_flat(), ['prompt'=>''] ); ?>

    <?= $form->field($model, 'price')->textInput(['type' => 'number', 'min' => 0]) ?>

    <?= $form->field($model, 'is_featured')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>