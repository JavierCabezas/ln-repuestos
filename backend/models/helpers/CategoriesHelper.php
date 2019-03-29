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
            'n' => 'Motor',
            'id' => 'motor',
            's' => [
                [
                    'n' => 'Block',
                    'id' => 'block',
                    's' => [
                        [
                            'n' => 'Empaquetaduras',
                            'id' => 'empaquetaduras'
                        ],
                        [
                            'n' => 'Retenes / Anillos',
                            'id' => 'anillos'
                        ],
                        [
                            'n' => 'Pistones',
                            'id' => 'pistones'
                        ],
                        [
                            'n' => 'Carter',
                            'id' => 'carter'
                        ],
                        [
                            'n' => 'Metales',
                            'id' => 'metales'
                        ]
                    ]
                ],
                [
                    'n' => 'Correas',
                    'id' => 'correas',
                    's' => [
                        [
                            'n' => 'Distribución',
                            'id' => 'distribucion'
                        ],
                        [
                            'n' => 'Accesorios',
                            'id' => 'correas_accesorios'
                        ],
                    ]
                ],
                [
                    'n' => 'Soportes motor',
                    'id' => 'soportes_motor'
                ],
                [
                    'n' => 'Sistema de lubricación',
                    'id' => 'sistemas_lubricacion',
                    's' => [
                        [
                            'n' => 'Filtros',
                            'id' => 'filtros'
                        ],
                        [
                            'n' => 'Bombas',
                            'id' => 'filtros'
                        ],
                    ]
                ],
                [
                    'n' => 'Enfriamiento',
                    'id' => 'enfriamiento',
                    's' => [
                        [
                            'n' => 'Radiadores',
                            'id' => 'radiadores'
                        ],
                        [
                            'n' => 'Depósitos de refrigerante',
                            'id' => 'depositos_refrigerante'

                        ],
                        [
                            'n' => 'Bombas',
                            'id' => 'bombas'
                        ]
                    ]
                ],
                [
                    'n' => 'Encendido',
                    'id' => 'encendido',
                    's' => [
                        [
                            'n' => 'Bobinas',
                            'id' => 'bobinas'
                        ],
                        [
                            'n' => 'Bujías',
                            'id' => 'bujias'
                        ],
                        [
                            'n' => 'Cables',
                            'id' => 'cables'
                        ]
                    ]
                ],
                [
                    'n' => 'Combustion',
                    'id' => 'combustion',
                    's' => [
                        [
                            'n' => 'Filtro aire',
                            'id' => 'filtro_aire'
                        ],
                        [
                            'n' => 'Filtro combustible',
                            'id' => 'filtro_combustible'
                        ]
                    ]
                ],
                [
                    'n' => 'Otros',
                    'id' => 'motor_otros'
                ]
            ]
        ],
        [
            'n' => 'Transmisión',
            'id' => 'transmision',
            's' => [
                [
                    'n' => 'Lubicantes',
                    'id' => 'lubricantes',
                    's' => [
                        [
                            'n' => 'Aceite',
                            'id' => 'aceite'
                        ]
                    ]
                ],
                [
                    'n' => 'Otros',
                    'id' => 'transmision_otros'
                ]
            ]
        ],
        [
            'n' => 'Sistema eléctrico',
            'id' => 'sistema_electrico',
            's' => [
                [
                    'n' => 'Luces',
                    'id' => 'luces',
                    's' => [
                        [
                            'n' => 'Intermitente',
                            'id' => 'intermitente'
                        ]
                    ]
                ],
                [
                    'n' => 'Otros',
                    'id' => 'sistema_electrico_otros'
                ]
            ]
        ],
        [
            'n' => 'Frenos',
            'id' => 'frenos',
            's' => [
                [
                    'n' => 'Pastillas',
                    'id' => 'pastillas',
                    's' => [
                        [
                            'n' => 'Delanteras',
                            'id' => 'delanteras'
                        ]
                    ]
                ],
                [
                    'n' => 'Discos',
                    'id' => 'discos'
                ],
                [
                    'n' => 'Otros',
                    'id' => 'frenos_otros'
                ]
            ]
        ],
        [
            'n' => 'Suspensión',
            'id' => 'suspension',
            's' => [
                [
                    'n' => 'Bandejas',
                    'id' => 'bandejas'
                ],
                [
                    'n' => 'Bujes',
                    'id' => 'bujes'
                ],
                [
                    'n' => 'Terminales',
                    'id' => 'terminales'
                ],
                [
                    'n' => 'Amortiguadores',
                    'id' => 'amortiguadores'
                ],
                [
                    'n' => 'Mazas',
                    'id' => 'mazas'
                ],
                [
                    'n' => 'Otros',
                    'id' => 'suspension_otros'
                ]
            ]
        ],
        [
            'n' => 'Accesorios',
            'id' => 'accesorios',
            's' => [
                [
                    'n' => 'Interior',
                    'id' => 'interior'
                ],
                [
                    'n' => 'Exterior',
                    'id' => 'exterior',
                    's' => [
                        [
                            'n' => 'Espejo retrovisor',
                            'id' => 'espejo_retrovisor'
                        ]
                    ]
                ]
            ]
        ]
    ];

    /**
     * Returns an array with just the parent categories (meaning that it will ignore the sub and subsubcategories)
     * @return array in the format:
     */
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


    /**
     * Returns a flattened array with all the categories.
     * @return array in the format [
     *      'id' => 'name',
     *      'id' => 'name',
     *      ..
     * ]
     *
     * In case the product has a parent (or grandparent) it also shows them in the name.
     *  Ex: 'id' => Grandparent > Parent > Son
     *
     * This function is intended to work with 3 levels (Being this the reason of why the function is not recursive. KISS)
     */
    public static function all_categories_flat($show_parents = true){
        $out = [];

        foreach(self::$categories as $c){
            $out[$c['id']] = $c['n'];
            $parent_1 = $c['n'];
            if(isset($c['s'])){
                foreach($c['s'] as $son){
                    $out[$son['id']] = $show_parents ? $parent_1 . ' > ' . $son['n'] : $son['n'];
                }
            }
        }
        return $out;
    }

    /**
     * Returns an array with all the available categories with their respective parents.
     * @return array in the format [
     *      'id_category' (string) => [
     *          'type' => 'category', 'subcategory' or 'subsubcategory',
     *          'category' => If type is category: Name of this category
     *                        Any other case: Name of the parent category
     *          'subcategory' => If the type is:
     *                          category: Non-existant
     *                          subcategory: The name of this subcategory
     *      ]
     * ]
     */
    public static function all_categories_with_parents_flat(){
        $out = [];

        foreach(self::$categories as $c){
            $out[$c['id']] = [];
            $out[$c['id']]['type'] = 'category';
            $out[$c['id']]['category_name'] = $c['n'];
            $out[$c['id']]['category'] = $c['id'];
            $parent_1_id = $c['id'];
            $parent_1_name = $c['n'];
            if(isset($c['s'])){
                foreach($c['s'] as $son){
                    $out[$son['id']] = [];
                    $out[$son['id']]['type'] = 'subcategory';
                    $out[$son['id']]['subcategory'] = $son['id'];
                    $out[$son['id']]['category'] = $parent_1_id;
                    $out[$son['id']]['category_name'] = $parent_1_name;
                    $out[$son['id']]['subcategory_name'] = $son['n'];
                }
            }
        }
        return $out;
    }


    public static function full_name($category_id){
        $flat = self::all_categories_flat();
        return $flat[$category_id] ?? 'Categoría no válida';
    }

    /**
     * Returns an array with all the related categories of the one passed by parameter.
     * Related means any category that goes below that one in the cateogry tree.
     * @param $category_id: the category id (as a string)
     * @return array of strings
     *
     * Ex: If the category menu has the following structure:
     *  private static $categories = [
     *      [
     *          'n' => 'Motor',
     *          'id' => 'motor',
     *          's' => [
     *               [
     *                   'n' => 'Block',
     *                   'id' => 'block',
     *              [
     *                   'n' => 'Correas',
     *                   'id' => 'correas',
     *               ]
     *
     *    ],
     *    ... //More entries
     * ]
     *
     * Examples:
     * 1)
     * $category_id = motor'
     * $out = [ 'motor', 'block', 'correas' ]
     *
     * 2)
     * $category_id = 'block'
     * $out = ['block']
     */
    public static function related_categories($category_id){
        $out = [];
        array_push($out, $category_id);
        foreach(self::$categories as $parent){
            if($category_id == $parent['id']){
                foreach($parent['s'] as $son){
                    array_push($out, $son['id']);
                }
            }
        }
        return $out;
    }
}