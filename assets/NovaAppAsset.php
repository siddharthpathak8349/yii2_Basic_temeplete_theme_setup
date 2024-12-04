<?php

namespace app\assets;

use yii\web\AssetBundle;

class NovaAppAsset extends AssetBundle
{

    // public $sourcePath = '@backend/themes/nova/assets/';
    public $sourcePath = '@app/themes/nova/assets/';


    public $css = [
        'css/icons.css',
        'css/skin-modes.css',
        'css/style-dark.css',
        'css/style-transparent.css',
        'css/style.css',
        'plugins/bootstrap/css/bootstrap.min.css',
        'plugins/perfect-scrollbar/p-scrollbar.css',
        'plugins/sidebar/sidebar.css',
        'plugins/select2/css/select2.min.css',
        'plugins/datatable/css/dataTables.bootstrap5.css',
        'plugins/datatable/css/buttons.bootstrap5.min.css',
        'plugins/datatable/responsive.bootstrap5.css',
        'css/custom.css',
    ];
    public $publishOptions = [
        'forceCopy' => true,
    ];
    public $js = [
        // 'plugins/jquery/jquery.min.js',    
        'plugins/bootstrap/js/popper.min.js',
        'plugins/bootstrap/js/bootstrap.min.js',
        'plugins/chart.js/Chart.bundle.min.js',
        'plugins/ionicons/ionicons.js',
        'plugins/moment/moment.js',
        'js/apexcharts.js',
        'plugins/jquery-sparkline/jquery.sparkline.min.js',
        'plugins/raphael/raphael.min.js',
        'plugins/perfect-scrollbar/perfect-scrollbar.min.js',
        'plugins/perfect-scrollbar/p-scroll.js',
        'js/eva-icons.min.js',
        'plugins/sidebar/sidebar.js',
        'plugins/sidebar/sidebar-custom.js',
        'plugins/side-menu/sidemenu.js',
        'js/sticky.js',
        'js/index.js',
        'js/circle-progress.min.js',
        'js/chart-circle.js',
        'plugins/datatable/js/jquery.dataTables.min.js',
        'plugins/datatable/js/dataTables.bootstrap5.js',
        'plugins/datatable/dataTables.responsive.min.js',
        'plugins/datatable/responsive.bootstrap5.min.js',
        'plugins/select2/js/select2.full.min.js',
        'js/select2.js',
        'js/themecolor.js',
        'js/custom.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
        // 'yii\jui\JuiAsset',
        // 'yii\bootstrap4\BootstrapAsset',
        // 'yii\bootstrap4\BootstrapPluginAsset',
    ];
}
