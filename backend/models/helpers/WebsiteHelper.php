<?php namespace app\models\helpers;
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 9/2/17
 * Time: 12:48 PM
 */
class WebsiteHelper{

    /**
     * Returns an array with all the sections of this website
     */
    public static function page_sections(){
        $out = [
            ['id' => 1, 'name' => 'home',     'text_to_show' => 'Inicio',               'params' => [] ],
            ['id' => 2, 'name' => 'about-us', 'text_to_show' => 'Sobre Nosotros',       'params' => [] ],
            ['id' => 3, 'name' => 'contact',  'text_to_show' => 'Contacto',             'params' => [] ],
            ['id' => 4, 'name' => 'products', 'text_to_show' => 'Productos (Inicio)',   'params' => [] ],
        ];
        $id = 5;
        foreach(CategoriesHelper::all_categories() as $category){
            array_push($out, [
                'id' => $id,
                'name' => 'products_category',
                'text_to_show' => $category['n'],
                'params' => [
                    'category' => $category['id']
                ]
            ]);
            $id += 1;
            if(isset($category['s'])){
                foreach($category['s'] as $subcategory){
                    array_push($out, [
                        'id' => $id,
                        'name' => 'products_subcategory',
                        'text_to_show' => $category['n'].' >  '.$subcategory['n'],
                        'params' => [
                            'category' => $category['id'],
                            'subcategory' => $subcategory['id']
                        ]
                    ]);
                    $id += 1;
                    if(isset($subcategory['s'])){
                        foreach($subcategory['s'] as $subsubcategory){
                            array_push($out, [
                                'id' => $id,
                                'name' => 'products_subsubcategory',
                                'text_to_show' => $category['n'].' >  '.$subcategory['n'].' > '.$subsubcategory['n'],
                                'params' => [
                                    'category' => $category['id'],
                                    'subcategory' => $subcategory['id'],
                                    'subsubcategory' => $subsubcategory['id']
                                ]
                            ]);
                            $id += 1;
                        }
                    }
                }
            }
        }
        echo "";
        return $out;
    }

    public static function dropdown_sections(){
        $out = [];
        foreach(self::page_sections() as $ps){
            $out[$ps['id']] = $ps['text_to_show'];
        }
        return $out;
    }
}