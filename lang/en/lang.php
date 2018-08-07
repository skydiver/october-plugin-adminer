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
            'themes_no'         => 'No theme',
            'hide_menu'         => 'Menu Item',
            'hide_menu_comment' => 'Hide main menu Adminer item',
            'link_text'         => 'Open Adminer',
            'link_description'  => 'You can access Adminer from here:',
            'use_conn'          => 'Autologin default connection',
            'use_conn_default'  => 'Use default connection',
            'use_conn_comment'  => 'Adminer will use default October database connection. You can override this setting here.<br>Add new connections on <strong>config/database.php</strong>. <a href="https://laravel.com/docs/5.6/database#configuration" target="_blank">More info</a>',
        ],

        'permissions' => [
            'tab'   => 'Adminer',
            'label' => 'Access Adminer from October backend'
        ]

    ];

?>