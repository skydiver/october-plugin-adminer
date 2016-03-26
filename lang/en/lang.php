<?php

    return [

        'plugin' => [
            'name'              => 'Adminer for OctoberCMS',
            'description'       => 'Load a private instance of Adminer from October backend',
        ],

        'navigation' => [
            'label' => 'Adminer',
        ],

        'settings' => [
            'mode' => 'Launch mode'
        ],

        'permissions' => [
            'tab'   => 'Adminer',
            'label' => 'Access Adminer from October backend'
        ]

    ];

?>