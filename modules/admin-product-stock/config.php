<?php

return [
    '__name' => 'admin-product-stock',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/admin-product-stock.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/admin-product-stock' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'admin' => NULL
            ],
            [
                'product-stock' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [],
        'files' => []
    ],
    'libForm' => [
        'forms' => [
            'admin.product.edit' => [
                'stock' => [
                    'label' => 'Stock',
                    'type' => 'number',
                    'position' => 'left-bottom-right-left',
                    'rules' => [
                        'numeric' => [
                            'min' => 0
                        ]
                    ]
                ]
            ]
        ]
    ]
];
