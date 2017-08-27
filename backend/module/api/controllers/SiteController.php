<?php namespace app\module\api\controllers;
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 8/20/17
 * Time: 10:58 PM
 */
use app\models\Other\Slider;
use yii\web\Response;
use yii\rest\Controller;
use Yii;

class SiteController extends Controller
{
    /**
     * Returns an array with all the active sliders.
     * @return array
     */
    public function actionSlider()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $sliders = Slider::find()->orderBy('priority')->all();
        $out = [];
        foreach($sliders as $s){
            array_push($out, [
                'title' => $s->title,
                'subtitle' => $s->content,
                'img_src' => $s->base64Image,
                'has_button' => $s->linkBool,
                'button_url' => $s->link_path
            ]);
        }

        return $out;
    }
}
