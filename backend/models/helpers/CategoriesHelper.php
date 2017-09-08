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
                    'id' => 'sorpotes_motor'
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
            'n' => 'Susprensión',
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
     * This function is intended to work with 3 levels (reason of it not being recursive) KISS
     */
    public static function all_categories_flat(){
        $out = [];

        foreach(self::$categories as $c){
            $out[$c['id']] = $c['n'];
            $parent_1 = $c['n'];
            if(isset($c['s'])){
                foreach($c['s'] as $son){
                    $out[$son['id']] = $parent_1 . ' > ' . $son['n'];
                    $parent_2 = $c['n'];
                    if(isset($son['s'])){
                        foreach($son['s'] as $grandson){
                            $out[$grandson['id']] = $parent_1 .' > '. $parent_2 .' > ' . $grandson['n'];
                        }
                    }
                }
            }
        }
        return $out;
    }

    /**
     * Returns an array with all the avaiable categories with their respective parents.
     * @return array in the format [
     *      'id_category' (string) => [
     *          'type' => 'category', 'subcategory' or 'subsubcategory',
     *          'category' => If type is category: Name of this category
     *                        Any other case: Name of the parent category
     *          'subcategory' => If the type is:
     *                          category: Non-existant
     *                          subcategory: The name of this subcategory
     *                          subsubcategory: Tne name of the parent subcategory of this sub-subcategory.
     *          'subsubcategory' => If the type is:
     *                          category: Non existant.
     *                          subcategory: Non existant.
     *                          subsubcategory: The name of this subsubcategory.
     *      ]
     * ]
     */
    public static function all_categories_with_parents_flat(){
        $out = [];

        foreach(self::$categories as $c){
            $out[$c['id']] = [];
            $out[$c['id']]['type'] = 'category';
            $parent_1 = $c['id'];
            if(isset($c['s'])){
                foreach($c['s'] as $son){
                    $out[$son['id']] = [];
                    $out[$son['id']]['type'] = 'subcategory';
                    $out[$son['id']]['subcategory'] = $son['id'];
                    $out[$son['id']]['category'] = $parent_1;
                    $parent_2 = $son['id'];
                    if(isset($son['s'])){
                        foreach($son['s'] as $grandson){
                            $out[$grandson['id']] = [];
                            $out[$grandson['id']]['type'] = 'subsubcategory';
                            $out[$grandson['id']]['subsubcategory'] = $grandson['id'];
                            $out[$grandson['id']]['subcategory'] = $parent_2;
                            $out[$grandson['id']]['category'] = $parent_1;
                        }
                    }
                }
            }
        }
        return $out;
    }

    public static function full_name($category_id){
        $flat = self::all_categories_flat();
        return $flat[$category_id] ?? 'Categoría no válida';
    }
}