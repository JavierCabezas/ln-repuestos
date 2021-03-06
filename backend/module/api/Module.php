<?php namespace app\module\api;
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 7/30/17
 * Time: 12:33 PM
 */
class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\module\api\controllers';

    public function init()
    {
        parent::init();
        \Yii::$app->user->enableSession = false;
    }

    
    
    public function behaviors()
    {
        return [
            'corsFilter' => [
                'class' => \yii\filters\Cors::class,
                'cors' => [
                    'Origin' => ['*'],
                    'Access-Control-Allow-Origin' => true,
                ]
            ]
        ];
    }
}
