<?php

return [
    'default'   => 'local',
    'disks'     => [
        'local'     => [
            'driver'    => 'local',
            'root'      => dirname(__DIR__,1).'/storage'
        ],
        'custom'    => [
            'driver'    => 'custom',
            'root'      => dirname(__DIR__,1).'/storage/data'
        ]
    ]
];

?>