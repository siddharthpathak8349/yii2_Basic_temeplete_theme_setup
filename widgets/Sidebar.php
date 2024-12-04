<?php
namespace app\widgets;

use Yii;
use yii\base\Widget;

class Sidebar extends Widget
{

    public $display = TRUE;

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        if (!isset(Yii::$app->user->identity)) {
            $this->display = false;
        }

        if ($this->display) {
            return $this->render('sidebar');
        }
    }
}