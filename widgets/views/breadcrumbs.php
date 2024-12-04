<?php

use yii\bootstrap5\Breadcrumbs;
?>
<div class="d-flex align-items-center mb-3">
    <div>
        <?= Breadcrumbs::widget([
            'itemTemplate' => "<li class='breadcrumb-item'>{link} </li>",
            'homeLink' => [
                'label' => '<i class="fa fa-home"></i> Home' . Yii::t('yii', ' '),
                'url' => Yii::$app->homeUrl,
                'encode' => false,
                'style' => 'text-decoration:none',
            ],
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>

</div>