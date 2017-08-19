<?php
use yii\helpers\Html;
use yii\grid\GridView;
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 8/19/17
 * Time: 3:45 PM
 */
$this->title = 'Emails subscritos newsletter';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="newsletter-emails-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'email:email',
            'added_on',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{delete}'
            ],
        ],
    ]); ?>
</div>