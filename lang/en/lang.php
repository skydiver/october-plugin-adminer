<?php

    return [

        'plugin' => [
            'name'        => 'Adminer for OctoberCMS',
            'description' => 'Load a private instance of Adminer from October backend'
        ],

        'navigation' => [
            'label' => 'Adminer'
        ],

        'settings' => [
            'tabs'              => ['general' => 'General', 'themes' => 'Themes', 'advanced' => 'Advanced'],
            'label'             => 'Adminer settings',
            'mode'              => 'Launch mode',
            'mode_comment'      => 'Defines how to launch Adminer',
            'full_window'       => 'Full window',
            'iframe'            => 'Iframe',
            'autologin'         => 'Autologin',
            'autologin_comment' => 'Login directly into your OctoberCMS database',
            'themes'            => 'Theme',
            'themes_comment'    => 'Select Adminer theme',
            'hide_menu'         => 'Menu Item',
            'hide_menu_comment' => 'Hide main menu Adminer item',
            'use_conn'          => 'Autologin default connection',
            'use_conn_comment'  => 'Adminer will use default October database connection. You can override this setting here.',
        ],

        'permissions' => [
            'tab'   => 'Adminer',
            'label' => 'Access Adminer from October backend'
        ]

    ];

?>