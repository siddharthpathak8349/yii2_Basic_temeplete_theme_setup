<?php

/** @var \yii\web\View $this */
/** @var string $content */

// use backend\assets\AppAsset;
// use backend\assets\NovaAsset;
use app\assets\NovaAppAsset;
use app\widgets\Breadcrumbs;
use app\widgets\Header;
use app\widgets\Sidebar;
use common\widgets\Alert;
// use yii\bootstrap4\Breadcrumbs;

// AppAsset::register($this);
NovaAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100" style="--bs-success-text:#198754; ">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= $this->title ?></title>
    <?php $this->head() ?>
    <style>
        .invalid-feedback {
            color: #dc3545;
        }

        .body {
            background-color: #ebeef4 !important;
        }
    </style>
</head>

<body>
    <?php $this->beginBody() ?>
    <div id="app" class="app">

        <!-- /main-header -->
        <?= Header::widget() ?>
        <!-- /main-header -->

        <!-- main-sidebar -->
        <?= Sidebar::widget() ?>
        <!-- main-sidebar -->
        <!-- START #content -->
        <div id="content" class="app-content">
            <!-- <div class="breadcrumb-header justify-content-between">
                <div class="left-content">
                    <span class="main-content-title mg-b-0 mg-b-lg-1">DASHBOARD</span>
                </div>
                <div class="justify-content-center mt-2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sales</li>
                    </ol>
                </div>
            </div> -->
            <div class="breadcrumb-header justify-content-between">

                <div class="justify-content-center mt-1" id="breadcrumbs">
                    <ol class="breadcrumb">
                        <?= Breadcrumbs::widget() ?>

                    </ol>
                </div>
            </div>

            <?= $content ?>
        </div>
        <!-- END #content -->

    </div>
    <!-- END #app -->
    <?php $this->endBody() ?>
    <style>
        #breadcrumbs {
            /* background-color: red; */
            margin-left: 84% !important;
            position: relative;
            top: 80px;
            /* z-index: 9999;  */
        }
    </style>
</body>

</html>
<?php $this->endPage();
