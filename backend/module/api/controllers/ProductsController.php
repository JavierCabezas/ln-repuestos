<?php namespace app\module\api\controllers;
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 8/20/17
 * Time: 5:17 PM
 */
use app\models\helpers\CategoriesHelper;
use app\models\Product\Product;
use yii\web\Response;
use yii\rest\Controller;

use Yii;

class ProductsController extends Controller
{
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
        $search_params = $_GET['category'] ?? null;
        if(is_null($search_params)){
            $search_params = $_GET['filter_params'] ?? null;
        }
        $up_to = isset($_GET['up_to']) ? intval($_GET['up_to']) : null;
        $start_from = isset($_GET['start_from']) ? intval($_GET['start_from']) : null;
        return Product::list($search_params, $start_from, $up_to);
    }

    public function actionPopular(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $out = [];
        $out['products'] = [];

        $allProducts = Product::find()->all();
        shuffle($allProducts );
        $out = [];
        $limit = rand(8, 12);
        foreach($allProducts as $key => $p){
            if($key > $limit){
                continue;
            }
            $out[$key] = $p->toArray();
            $out[$key]['picture'] = $p->image;
        }

        return $out;
    }

    /**
     * Returns an array with the data of the details of an specific product
     * @param $_GET['product_id'] seo name of the product.
     * @see \app\models\Product\Product::getBackend()
     * @see \app\models\Product\Product::getPictures()
     * @see \app\models\Product\Product::getRelated()
     * @return array
     */
    public function actionGet(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $p = Product::find()->where('seo_name=:seo_name', [':seo_name' => $_GET['product_id']])->one();
        return [
                'main'      => $p->backend,
                'pictures'  => $p->pictures,
                'related'   => $p->related
            ];
    }

    /**
     * Returns the data for the product passed by id
     * @param $_GET['id']: The product identifier
     * @return mixed
     */
    public function actionGetById(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $pid = intval($_GET['id']);
        $p = Product::find()->where(['id' => $pid])->one();
        return $p->backend;
    }
}