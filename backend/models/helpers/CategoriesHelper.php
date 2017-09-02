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

    public static function full_name($category_id){
        $flat = self::all_categories_flat();
        return $flat[$category_id] ?? 'Categoría no válida';
    }
}