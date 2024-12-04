<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\NovaAsset;
use yii\bootstrap5\Html;

NovaAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Title -->
    <title> <?= \Yii::$app->name ?> | <?= Html::encode($this->title) ?> </title>

    <!-- CSRF Tag -->
    <?php $this->registerCsrfMetaTags() ?>
    <!-- Favicon -->
    <link rel="icon" href="/images/favicon.png" type="image/x-icon" />


    <?php $this->head() ?>

</head>

<body class=" ltr error-page1 bg-dark">

    <!-- Loader -->
    <div id="global-loader">
        <img src="../assets/img/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <div class="square-box">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>

    </div>
    <div class="page">
        <!-- Main-error-wrapper -->
        <div class="main-error-wrapper page page-h">
            <?= $content ?>
            <a class="btn btn-light" href="/">Back to Home</a>
        </div>
        <!-- /Main-error-wrapper -->
    </div>

    <?php $this->endBody() ?>
</body>

</html>
<style>
    .main-error-wrapper {
        color: #bfbfc1;
    }

    .main-error-wrapper h1 {
        color: #bfbfc1;
    }

    .bg-dark {
        background-color: #030330 !important;
    }
</style>
<?php $this->endPage();
