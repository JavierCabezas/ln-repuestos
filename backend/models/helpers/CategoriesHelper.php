<?php namespace app\models\helpers;
/**
 * This file has the hardcoded (since we are not going to change them) categories of the site.
 * Created by PhpStorm.
 * User: javier
 * Date: 8/27/17
 * Time: 3:26 PM
 */
class CategoriesHelper{
    private static $categories = [
        [
            'n' => 'Padre 1',
            'l' => 'padre_1',
            's' => [
                [
                    'n' => 'Motor',
                    'l' => 'motor'
                ],
                [
                    'n' => 'Amortiguación',
                    'l' => 'amortiguacion'
                ],
                [
                    'n' => 'Filtros',
                    'l' => 'filtros'
                ],
            ]
        ],
        [
            'n' => 'Padre 2',
            'l' => 'padre_2',
            's' => [
                [
                    'n' => 'Soportes de motor',
                    'l' => 'soportes_motor'
                ],
                [
                    'n' => 'Eléctricos',
                    'l' => 'electricos'
                ]
            ]
        ],
        [
            'n' => 'Padre 3',
            'l' => 'padre_3',
            's' => [
                [
                    'n' => 'Accesorios',
                    'l' => 'Caja de cambios'
                ],
                [
                    'n' => 'Frenos',
                    'l' => 'frenos'
                ]
            ]
        ],
        [
            'n' => 'Padre 4',
            'l' => 'padre_4',
            's' => [
                [
                    'n' => 'Refrigeración',
                    'l' => 'refrigeracion'
                ],
                [
                    'n' => 'Encendido',
                    'l' => 'encendido'
                ]
            ]
        ]
    ];

    public static function parent_categories(){
        $out = [];
        foreach(self::$categories as $c){
            array_push($out, $c);
        }
        return $out;
    }

    public static function all_categories(){
        return self::$categories;
    }
}