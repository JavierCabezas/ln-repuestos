<?php namespace app\module\api\controllers;
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 8/20/17
 * Time: 5:17 PM
 */
use app\models\helpers\CategoriesHelper;
use app\models\product\Product;
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

    /**
     * Returns an array with
     * @params filter: Todo define format
     * @param $_GET['start_from']: Integer defining the first item to return in the total of filtered products
     * @params $_GET['up_to']: Integer defining the last item to return in the total of filtered products
     *
     * If, for example, after the filter we have an array with 20 products and we set start_from = 3 and up_to = 7 we will
     * get the third to the seventh from that array.
     * Both are optional (meaning that we set start_from 3 and we don't set up to we will get everything from the third up to the 20th element)
     * @return array
     */
    public function actionList(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $filters = $_GET['filters'] ?? null;
        $start_from = $_GET['start_from'] ?? null;
        $up_to = $_GET['up_to'] ?? null;

        $out = [];
        for($i = 0 ; $i < 10 ; $i+=1){
            foreach(Product::list($filters, $start_from, $up_to) as $p){
                array_push($out, $p);
            }
        }

        
        return $out;
    }

    /**
     * Returns an array with the data of the details of an specific product
     * @param $_GET['product_id'] integer with the product identifier.
     * @see app\models\product\Product\backend_data()
     * @return array
     */
    public function actionGet(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $p = Product::find()->where('seo_name=:seo_name', [':seo_name' => $_GET['product_id']])->one();
        return [
                'main'      => $p->backend,
                'pictures'  => $p->pictures
            ];

    }
}