<?php namespace app\module\api\controllers;
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 8/20/17
 * Time: 5:17 PM
 */
use app\models\helpers\CategoriesHelper;
use yii\web\Response;
use yii\rest\Controller;

use Yii;

class ProductsController extends Controller
{
    public function actionSpecialOffer(){
        Yii::$app->response->format = Response::FORMAT_JSON;

        $titles = [ "Four loko", "Fixie nostrud", "Master Cleanse", "Scenester hell", "Shabby chic", "Blue bottle", "Duis pitchfork", "Raclette portland", "Cardigan glossier", "Tumeric keffiyeh" ];
        $sizes = ["99x120", "75x120", "65x120", "78x120", "81x120"];
        $quantity = rand(10, 25);
        $out = [];
        for($i = 1; $i <= $quantity ; $i += 1){
            shuffle($titles);
            shuffle($sizes);
            array_push($out, [
                'id'        => $i,
                'link'      => 'productos',
                'img_src'   => "http://placehold.it/".$sizes[0],
                'title'     => $titles[0],
                'now'       => rand(100, 200),
                'before'    => rand(50, 99)
            ]);
        }
        return $out;
    }

    public function actionNestedCategories(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        return CategoriesHelper::all_categories();
    }
}