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
            'l' => '/productos/motor',
            's' => [
                [
                    'n' => 'Block',
                    'id' => 'block',
                    'l' => '/productos/motor/block',
                    's' => [
                        [
                            'n' => 'Empaquetaduras',
                            'id' => 'empaquetaduras',
                            'l' => 'produtos/motor/block/empaquetaduras'
                        ],
                        [
                            'n' => 'Retenes / Anillos',
                            'id' => 'anillos',
                            'l' => 'produtos/motor/retenes-anillos'
                        ],
                        [
                            'n' => 'Pistones',
                            'id' => 'pistones',
                            'l' => 'produtos/motor/block/pistones'
                        ],
                        [
                            'n' => 'Carter',
                            'id' => 'carter',
                            'l' => 'produtos/motor/block/carter'
                        ],
                        [
                            'n' => 'Metales',
                            'id' => 'metales',
                            'l' => 'produtos/motor/block/metales'
                        ]
                    ]
                ],
                [
                    'n' => 'Correas',
                    'id' => 'correas',
                    'l' => 'produtos/motor/correas',
                    's' => [
                        [
                            'n' => 'Distribución',
                            'id' => 'distribucion',
                            'l' => 'produtos/motor/correas/distribucion'
                        ],
                        [
                            'n' => 'Accesorios',
                            'id' => 'correas_accesorios',
                            'l' => 'produtos/motor/correas/accesorios'
                        ],
                    ]
                ],
                [
                    'n' => 'Soportes motor',
                    'id' => 'sorpotes_motor',
                    'l' => '/productos/motor/soportes-motor',
                ],
                [
                    'n' => 'Sistema de lubricación',
                    'id' => 'sistemas_lubricacion',
                    'l' => '/productos/motor/sistema-de-lubricacion',
                    's' => [
                        [
                            'n' => 'Filtros',
                            'id' => 'filtros',
                            'l' => 'produtos/motor/sistema-de-lubricacion/filtros'
                        ],
                        [
                            'n' => 'Bombas',
                            'id' => 'filtros',
                            'l' => 'produtos/motor/sistema-de-lubricacion/bombas'
                        ],
                    ]
                ],
                [
                    'n' => 'Enfriamiento',
                    'id' => 'enfriamiento',
                    'l' => '/productos/motor/enfriamiento',
                    's' => [
                        [
                            'n' => 'Radiadores',
                            'id' => 'radiadores',
                            'l' => '/productos/motor/enfriamiento/radiadores'
                        ],
                        [
                            'n' => 'Depósitos de refrigerante',
                            'id' => 'depositos_refrigerante',
                            'l' => '/productos/motor/enfriamiento/depositos-refrigerante'
                        ],
                        [
                            'n' => 'Bombas',
                            'id' => 'bombas',
                            'l' => '/productos/motor/enfriamiento/bombas'
                        ]
                    ]
                ],
                [
                    'n' => 'Encendido',
                    'id' => 'encendido',
                    'l' => '/productos/motor/encendido',
                    's' => [
                        [
                            'n' => 'Bobinas',
                            'id' => 'bobinas',
                            'l' => '/productos/motor/encendido/bobinas'
                        ],
                        [
                            'n' => 'Bujías',
                            'id' => 'bujias',
                            'l' => '/productos/motor/encendido/bujias'
                        ],
                        [
                            'n' => 'Cables',
                            'id' => 'cables',
                            'l' => '/productos/motor/encendido/cables'
                        ]
                    ]
                ],
                [
                    'n' => 'Combustion',
                    'id' => 'combustion',
                    'l' => '/productos/motor/combustion',
                    's' => [
                        [
                            'n' => 'Filtro aire',
                            'id' => 'filtro_aire',
                            'l' => '/productos/motor/combustion/filtro-aire'
                        ],
                        [
                            'n' => 'Filtro combustible',
                            'id' => 'filtro_combustible',
                            'l' => '/productos/motor/combustion/filtro-combustible'
                        ]
                    ]
                ],
                [
                    'n' => 'Otros',
                    'id' => 'motor_otros',
                    'l' => '/productos/motor/otros'
                ]
            ]
        ],
        [
            'n' => 'Transmisión',
            'id' => 'transmision',
            'l' => '/productos/transision',
            's' => [
                [
                    'n' => 'Lubicantes',
                    'id' => 'lubricantes',
                    'l' => '/productos/transmision/lubricantes',
                    's' => [
                        [
                            'n' => 'Aceite',
                            'id' => 'aceite',
                            'l' => '/productos/transmision/lubricantes/aceite'
                        ]
                    ]
                ],
                [
                    'n' => 'Otros',
                    'id' => 'transmision_otros',
                    'l' => '/productos/transmision/otros'
                ]
            ]
        ],
        [
            'n' => 'Sistema eléctrico',
            'id' => 'sistema_electrico',
            'l' => '/productos/sistema-electrico',
            's' => [
                [
                    'n' => 'Luces',
                    'id' => 'luces',
                    'l' => '/productos/sistema-electrico/luces',
                    's' => [
                        [
                            'n' => 'Intermitente',
                            'id' => 'intermitente',
                            'l' => '/productos/sistema-electrico/luces/intermitente'
                        ]
                    ]
                ],
                [
                    'n' => 'Otros',
                    'id' => 'sistema_electrico_otros',
                    'l' => '/productos/sistema-electrico/otros'
                ]
            ]
        ],
        [
            'n' => 'Frenos',
            'id' => 'frenos',
            'l' => '/productos/frenos',
            's' => [
                [
                    'n' => 'Pastillas',
                    'id' => 'pastillas',
                    'l' => '/productos/frenos/pastillas',
                    's' => [
                        [
                            'n' => 'Delanteras',
                            'id' => 'delanteras',
                            'l' => '/productos/frenos/pastillas/delanteras'
                        ]
                    ]
                ],
                [
                    'n' => 'Discos',
                    'id' => 'discos',
                    'l' => '/productos/frenos/discos'
                ],
                [
                    'n' => 'Otros',
                    'id' => 'frenos_otros',
                    'l' => '/productos/frenos/otros'
                ]
            ]
        ],
        [
            'n' => 'Susprensión',
            'id' => 'suspension',
            'l' => '/productos/suspension',
            's' => [
                [
                    'n' => 'Bandejas',
                    'id' => 'bandejas',
                    'l' => '/productos/suspension/bandejas'
                ],
                [
                    'n' => 'Bujes',
                    'id' => 'bujes',
                    'l' => '/productos/suspension/bujes'
                ],
                [
                    'n' => 'Terminales',
                    'id' => 'terminales',
                    'l' => '/productos/suspension/terminales'
                ],
                [
                    'n' => 'Amortiguadores',
                    'id' => 'amortiguadores',
                    'l' => '/productos/suspension/amortiguadores'
                ],
                [
                    'n' => 'Otros',
                    'id' => 'suspension_otros',
                    'l' => '/productos/suspension/otros'
                ]
            ]
        ],
        [
            'n' => 'Accesorios',
            'id' => 'accesorios',
            'l' => '/productos/accesorios',
            's' => [
                [
                    'n' => 'Interior',
                    'id' => 'interior',
                    'l' => '/productos/accesorios/interior'
                ],
                [
                    'n' => 'Exterior',
                    'id' => 'exterior',
                    'l' => '/productos/accesorios/exterior',
                    's' => [
                        [
                            'n' => 'Espejo retrovisor',
                            'id' => 'espejo_retrovisor',
                            'l' => '/productos/accesorios/exterior/espejo-retrovisor'
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