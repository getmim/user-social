<?php

return [
    '__name' => 'user-social',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/user-social.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'https://iqbalfn.com/'
    ],
    '__files' => [
        'modules/user-social' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-model' => NULL
            ],
            [
                'lib-user' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'UserSocial\\Model' => [
                'type' => 'file',
                'base' => 'modules/user-social/model'
            ]
        ],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'user-social' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'user'
                ],
                'type' => [
                    'type' => 'text'
                ],
                'url' => [
                    'type' => 'text'
                ],
                'identity' => [
                    'type' => 'text'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ]
        ]
    ]
];