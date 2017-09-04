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
$this->registerJsFile( '@web/js/product_create.js',  ['depends' => [\yii\web\JqueryAsset::className()]] );

?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_id')->dropDownList(CategoriesHelper::all_categories_flat(), ['prompt'=>''] ); ?>

    <?= $form->field($model, 'price')->textInput(['type' => 'number', 'min' => 0]) ?>

    <?= $form->field($model, 'tutorial_type')->dropDownList([
        \app\models\product\Product::TUTORIAL_WITHOUT => 'Sin tutorial',
        \app\models\product\Product::TUTORIAL_YOUTUBE => 'Tutorial YouTube',
        \app\models\product\Product::TUTORIAL_TEXT => 'Tutorial en Texto'
    ],  ['id' => 'tutorial_dropdown']) ?>
    <div id="path_field">
        <?= $form->field($model, 'tutorial_text')->textarea() ?>
    </div>

    <?= $form->field($model, 'upon_request')->checkbox() ?>

    <?= $form->field($model, 'is_featured')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>