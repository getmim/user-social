<?php

return [
    'UserSocial\\Model\\UserSocial' => [
        'fields' => [
            'id' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'primary_key' => TRUE,
                    'auto_increment' => TRUE
                ],
                'index' => 1000
            ],
            'user' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => FALSE
                ],
                'index' => 2000
            ],
            'type' => [
                'type' => 'VARCHAR',
                'length' => 50,
                'attrs' => [
                    'null' => false,
                ],
                'index' => 3000
            ],
            'url' => [
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 4000
            ],
            'identity' => [
                'type' => 'VARCHAR',
                'length' => 200,
                'attrs' => [
                    'unique' => true 
                ],
                'index' => 5000
            ],
            'updated' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP',
                    'update' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 10000
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 11000
            ]
        ]
    ]
];