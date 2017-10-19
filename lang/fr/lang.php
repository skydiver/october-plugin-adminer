<?php

    return [

        'plugin' => [
            'name'        => 'Adminer pour OctoberCMS',
            'description' => 'Charge une instance privée de Adminer depuis le backend d\'October'
        ],

        'navigation' => [
            'label' => 'Adminer'
        ],

        'settings' => [
            'label'             => 'Configuration Adminer',
            'mode'              => 'Mode de démarrage',
            'mode_comment'      => 'Definis comment Adminer est démarré',
            'full_window'       => 'Plein écran',
            'iframe'            => 'Iframe',
            'autologin'         => 'Autologin',
            'autologin_comment' => 'Se logue directement dans votre base de données October',
            'themes'            => 'Thème',
            'themes_comment'    => 'Selectionne un thème pour Adminer',
            'hide_menu'         => 'Entrée de menu',
            'hide_menu_comment' => 'Cacher l\'entrée de menu de Adminer',
        ],

        'permissions' => [
            'tab'   => 'Adminer',
            'label' => 'Accés à Adminer depuis le backend d\'October'
        ]

    ];

?>
