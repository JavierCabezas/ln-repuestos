<?php namespace app\module\api\controllers;
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 8/20/17
 * Time: 10:58 PM
 */
use app\models\helpers\CategoriesHelper;
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

    /**
     * Returns a json array with all the sons of the category / subcategory passed by argument.
     * @param $category
     * @param $subcategory
     * @return array
     */
    public function actionCategories(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $category = !isset($_GET['category']) || $_GET['category'] == "" ? null : $_GET['category'];
        $subcategory = !isset($_GET['subcategory']) || $_GET['subcategory'] == "" ?  null : $_GET['subcategory'];
        $subsubcategory = !isset($_GET['subsubcategory']) || $_GET['subsubcategory'] == "" ? null : $_GET['subsubcategory'];

        $all_categories = CategoriesHelper::all_categories_with_parents_flat();
        $cat_names = CategoriesHelper::all_categories_flat(false);

        $out = ['parent' => [], 'sons' => []];

        if(!is_null($subsubcategory)) {
            $out['type'] = 'subsubcategory';
            foreach ($all_categories as $id => $c) {
                if ($id === $subsubcategory) {
                    $out['parent']['id'] =  $c['subsubcategory'];
                    $out['parent']['name'] = $cat_names[$c['subsubcategory']];
                }
            }
        } elseif(!is_null($subcategory)){
            $out['type'] = 'subcategory';
            foreach ($all_categories as $id => $c) {
                if($c['type'] === 'subsubcategory' && $c['subcategory'] == $subcategory){
                    array_push($out['sons'], [
                        'id'          => $c['subsubcategory'],
                        'name'        => $cat_names[$c['subsubcategory']],
                    ]);
                }
                if ($id === $subcategory) {
                    $out['parent']['id'] = $id;
                    $out['parent']['name'] = $cat_names[$id];
                }
            }
        } elseif(!is_null($category)){
            $out['type'] = 'category';
            foreach ($all_categories as $id => $c) {
                if($c['type'] === 'subcategory' && $c['category'] == $category){
                    array_push($out['sons'], [
                        'id'          => $c['subcategory'],
                        'name'        => $cat_names[$c['subcategory']],
                    ]);
                }
                if ($id === $category) {
                    $out['parent']['id'] = $id;
                    $out['parent']['name'] = $cat_names[$id];
                }
            }
        } else{
            foreach($all_categories as $c){
                if($c['type'] === 'category'){
//                    array_push($out['sons'], ['id' => $c[], 'name' => $cat_names[$id]]);
                }
            }
        }
        return $out;
    }


    public function actionBreadcrumbs(){
        $category = $subcategory = $subsubcategory = false;
        if(isset($_GET['category']) ) { $category = true; }
        if(isset($_GET['subcategory']) ){ $subcategory = true; $category = true; }
        if(isset($_GET['subsubcategory'])  ) { $subsubcategory = true; $subcategory = true; $category = true; }

        foreach(CategoriesHelper::all_categories_with_parents_flat() as $c) {
            if ( $c['type'] === 'category' && $category && !$subcategory && !$subsubcategory ||
                 $c['type'] === 'subcategory' && $subcategory && !$subsubcategory ||
                 $c['type'] === 'subsubcategory' && $subsubcategory
            ) {
                $out = [];
                $out['category'] = $category ? [ 'path' => $c['category'], 'name' => $c['category_name'] ] : null;
                $out['subcategory'] = $subcategory ? ['path' => $c['subcategory'], 'name' => $c['subcategory_name']] : null;
                $out['subsubcategory'] = $subsubcategory ? ['path' => $c['subsubcategory'], 'name' => $c['subsubcategory_name']] : null;
                return $out;
            }
        }
    }
}
