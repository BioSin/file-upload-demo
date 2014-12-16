<?php

namespace app\components;

use yii\base\BootstrapInterface;
use yii\base\Component;

class Bootstrap extends Component implements BootstrapInterface
{

    /**
     * @param \yii\web\Application $app
     */
    public function bootstrap($app)
    {
        \Yii::$app->params['uploadPath'] = $app->basePath . '/uploads/';
    }

}