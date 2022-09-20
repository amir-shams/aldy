<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1,
        'amqp' => [
            'host' => 'rmq',
            'port' => '5672',
            'user' => 'root',
            'password' => 'abcd1234',
            'virtualhost' => '/'
        ]
    ],
    'crypt' => [
        'key' => 'c326e6b97eac3de4b21cf2e2c54a836c'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'mysql:3306',
                'dbname' => 'shop',
                'username' => 'root',
                'password' => 'abcd1234',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' => [
        'save' => 'files'
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => '69d_',
                'backend' => 'Magento\\Framework\\Cache\\Backend\\Redis',
                'backend_options' => [
                    'server' => 'redis',
                    'database' => '0',
                    'port' => '6379',
                    'password' => '',
                    'compress_data' => '1',
                    'compression_lib' => ''
                ]
            ],
            'page_cache' => [
                'id_prefix' => '69d_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => ''
        ]
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'vertex' => 1
    ],
    'downloadable_domains' => [
        '127.0.0.1',
        'bo.aldyexpress.com'
    ],
    'install' => [
        'date' => 'Thu, 09 Jun 2022 10:24:36 +0000'
    ],
    'system' => [
        'default' => [
            'web' => [
                'graphql' => [
                    'cors_allowed_origins' => 'http://localhost:3000 ',
                    'cors_allowed_methods' => 'POST, OPTIONS, GET',
                    'cors_allowed_headers' => 'Content-type, Authorization, Content-Length, Host, User-Agent, Accept, Accept-Encoding, Connection, Cookie',
                    'cors_max_age' => '86400',
                    'cors_allow_credentials' => 1
                ],
                'unsecure' => [
                    'base_url' => 'http://localhost/',
                    0 => 'http://localhost/'
                ],
                'secure' => [
                    'base_url' => 'http://localhost/',
                    0 => 'http://localhost/',
                    'offloader_header' => 'X-Forwarded-Proto',
                    'use_in_frontend' => '1',
                    'use_in_adminhtml' => '1'
                ],
                'seo' => [
                    'use_rewrites' => '1'
                ]
            ],
            'catalog' => [
                'search' => [
                    'engine' => 'elasticsearch7',
                    'elasticsearch7_server_hostname' => 'elk',
                    'elasticsearch7_server_port' => '9200',
                    'elasticsearch7_index_prefix' => 'aldy',
                    'elasticsearch7_enable_auth' => '0',
                    'elasticsearch7_server_timeout' => '15'
                ]
            ]
        ]
    ],
    'dev' => [
        'debug' => [
            'debug_logging' => 1
        ]
    ]
];
