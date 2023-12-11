<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = Yii::$app->name . '- We do the heavy lifting';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <?= Html::img('@web/images/kevin.jpg', ['alt' => Yii::t( 'app', 'We do the heavy lifting'),
        'class' => 'side_index__kevin',
        ]) ?>

        <h1 class= "site_index__h1"><?= Yii::t('app','We do all the heavy lifting!') ?></h1>

        <p class="lead"><?= Yii::t('app', 'Do ItSimple with HOADSLOADS') ?><p></p>

        <p>
            <?= Html::a(Yii::t('app', 'To see our work'),['/project'], ['class' => 'btn btn-primary']) ?>
        </p>
    </div>
</div>
