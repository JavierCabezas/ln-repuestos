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
            'l' => 'productos/motor',
            's' => [
                [
                    'n' => 'Block',
                    'l' => 'productos/motor/block',
                    's' => [
                        [
                            'n' => 'Empaquetaduras',
                            'l' => 'produtos/motor/block/empaquetaduras'
                        ],
                        [
                            'n' => 'Retenes / Anillos',
                            'l' => 'produtos/motor/retenes-anillos'
                        ],
                        [
                            'n' => 'Pistones',
                            'l' => 'produtos/motor/block/pistones'
                        ],
                        [
                            'n' => 'Carter',
                            'l' => 'produtos/motor/block/carter'
                        ],
                        [
                            'n' => 'Metales',
                            'l' => 'produtos/motor/block/metales'
                        ]
                    ]
                ],
                [
                    'n' => 'Correas',
                    'l' => 'produtos/motor/correas',
                    's' => [
                        [
                            'n' => 'Distribución',
                            'l' => 'produtos/motor/correas/distribucion'
                        ],
                        [
                            'n' => 'Accesorios',
                            'l' => 'produtos/motor/correas/accesorios'
                        ],
                    ]
                ],
                [
                    'n' => 'Soportes motor',
                    'l' => 'productos/motor/soportes-motor',
                ],
                [
                    'n' => 'Sistema de lubricación',
                    'l' => 'productos/motor/sistema-de-lubricacion',
                    's' => [
                        [
                            'n' => 'Filtros',
                            'l' => 'produtos/motor/sistema-de-lubricacion/filtros'
                        ],
                        [
                            'n' => 'Bombas',
                            'l' => 'produtos/motor/sistema-de-lubricacion/bombas'
                        ],
                    ]
                ],
                [
                    'n' => 'Enfriamiento',
                    'l' => 'productos/motor/enfriamiento',
                    's' => [
                        [
                            'n' => 'Radiadores',
                            'l' => 'productos/motor/enfriamiento/radiadores'
                        ],
                        [
                            'n' => 'Depósitos de refrigerante',
                            'l' => 'productos/motor/enfriamiento/depositos-refrigerante'
                        ],
                        [
                            'n' => 'Bombas',
                            'l' => 'productos/motor/enfriamiento/bombas'
                        ]
                    ]
                ],
                [
                    'n' => 'Encendido',
                    'l' => 'productos/motor/encendido',
                    's' => [
                        [
                            'n' => 'Bobinas',
                            'l' => 'productos/motor/encendido/bobinas'
                        ],
                        [
                            'n' => 'Bujías',
                            'l' => 'productos/motor/encendido/bujias'
                        ],
                        [
                            'n' => 'Cables',
                            'l' => 'productos/motor/encendido/cables'
                        ]
                    ]
                ],
                [
                    'n' => 'Combustion',
                    'l' => 'productos/motor/combustion',
                    's' => [
                        [
                            'n' => 'Filtro aire',
                            'l' => 'productos/motor/combustion/filtro-aire'
                        ],
                        [
                            'n' => 'Filtro combustible',
                            'l' => 'productos/motor/combustion/filtro-combustible'
                        ]
                    ]
                ],
                [
                    'n' => 'Otros',
                    'l' => 'productos/motor/otros'
                ]
            ]
        ],
        [
            'n' => 'Transmisión',
            'l' => 'productos/transision',
            's' => [
                [
                    'n' => 'Lubicantes',
                    'l' => 'productos/transmision/lubricantes',
                    's' => [
                        [
                            'n' => 'Aceite',
                            'l' => 'productos/transmision/lubricantes/aceite'
                        ]
                    ]
                ],
                [
                    'n' => 'Otros',
                    'l' => 'productos/transmision/otros'
                ]
            ]
        ],
        [
            'n' => 'Sistema eléctrico',
            'l' => 'productos/sistema-electrico',
            's' => [
                [
                    'n' => 'Luces',
                    'l' => 'productos/sistema-electrico/luces',
                    's' => [
                        [
                            'n' => 'Intermitente',
                            'l' => 'productos/sistema-electrico/luces/intermitente'
                        ]
                    ]
                ],
                [
                    'n' => 'Otros',
                    'l' => 'productos/sistema-electrico/otros'
                ]
            ]
        ],
        [
            'n' => 'Frenos',
            'l' => 'productos/frenos',
            's' => [
                [
                    'n' => 'Pastillas',
                    'l' => 'productos/frenos/pastillas',
                    's' => [
                        [
                            'n' => 'Delanteras',
                            'l' => 'productos/frenos/pastillas/delanteras'
                        ]
                    ]
                ],
                [
                    'n' => 'Discos',
                    'l' => 'productos/frenos/discos'
                ],
                [
                    'n' => 'Otros',
                    'l' => 'productos/frenos/otros'
                ]
            ]
        ],
        [
            'n' => 'Susprensión',
            'l' => 'productos/suspension',
            's' => [
                [
                    'n' => 'Bandejas',
                    'l' => 'productos/suspension/bandejas'
                ],
                [
                    'n' => 'Bujes',
                    'l' => 'productos/suspension/bujes'
                ],
                [
                    'n' => 'Terminales',
                    'l' => 'productos/suspension/terminales'
                ],
                [
                    'n' => 'Amortiguadores',
                    'l' => 'productos/suspension/amortiguadores'
                ],
                [
                    'n' => 'Otros',
                    'l' => 'productos/suspension/otros'
                ]
            ]
        ],
        [
            'n' => 'Accesorios',
            'l' => 'productos/accesorios',
            's' => [
                [
                    'n' => 'Interior',
                    'l' => 'productos/accesorios/interior'
                ],
                [
                    'n' => 'Exterior',
                    'l' => 'productos/accesorios/exterior',
                    's' => [
                        [
                            'n' => 'Espejo retrovisor',
                            'l' => 'productos/accesorios/exterior/espejo-retrovisor'
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
}