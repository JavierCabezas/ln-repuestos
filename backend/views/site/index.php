<?php
use yii\helpers\Html;
?>

<div class="site-index">
    <div class="body-content">
        <h1>Configuración</h1>

        <h4>Productos:</h4>
        <ul>
            <li> <?= Html::a('Productos', ['/product']) ?> </li>
            <li> <?= Html::a('Fotos de productos', ['/product-picture']) ?> </li>
        </ul>

        <h4>Newsletters</h4>
        <ul>
            <li> <?= Html::a('Ver subscritos', ['/newsletter-email']) ?> </li>
        </ul>

        <h4>Página</h4>
        <ul>
            <li> <?= Html::a('Slider', ['/slider']) ?> </li>
        </ul>
    </div>
</div>
