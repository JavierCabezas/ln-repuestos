<?php namespace app\module\api\controllers;
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 8/20/17
 * Time: 10:58 PM
 */
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

        $titles = ["Four loko", "Fixie nostrud", "Master Cleanse", "Scenester hell", "Shabby chic", "Blue bottle", "Duis pitchfork", "Raclette portland", "Cardigan glossier", "Tumeric keffiyeh"];
        $subtitle = ["Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s",
            "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.",
            "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete",
            "Nor again is there anyone who loves or pursues or desires to obtain pain of itself"
        ];
        $imgs = ["src/assets/img/slider/volvo_xc90.png", "src/assets/img/slider/logo_volvo_rejilla.png", "src/assets/img/slider/motor_volvo.png", "src/assets/img/slider/volvo_antiguo.png"];
        $button_url = ['sobre-nosotros', 'contacto', 'productos'];

        $out = [];
        for ($i = 1; $i <= 4; $i += 1) {
            $has_button = rand(0, 10) > 5;
            shuffle($titles);
            shuffle($button_url);
            shuffle($subtitle);
            array_push($out, [
                'img_src'    => $imgs[$i-1],
                'title'      => $titles[0],
                'subtitle'   => $subtitle[0],
                'has_button' => $has_button,
                'button_url' => $button_url[0]
            ]);
        }
        return $out;
    }
}
