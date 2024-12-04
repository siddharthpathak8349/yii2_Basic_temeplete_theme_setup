<?php
namespace app\widgets;

use Yii;
use yii\base\Widget;

class Header extends Widget
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
            return $this->render('header');
        }
    }
}