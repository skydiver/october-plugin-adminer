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
            'mode'      => 'Launch mode',
            'autologin' => 'MySQL Autologin',
            'comments'  => [
                'mode'      => 'Defines how to launch Adminer',
                'autologin' => 'Login directly into OctoberCMS MySQL database'
            ]
        ],

        'permissions' => [
            'tab'   => 'Adminer',
            'label' => 'Access Adminer from October backend'
        ]

    ];

?>