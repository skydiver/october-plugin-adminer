<?php

    return [

        'plugin' => [
            'name'        => 'Adminer per OctoberCMS',
            'description' => 'Consente di utilizzare un\'istanza privata di Adminer dal backend di October'
        ],

        'navigation' => [
            'label' => 'Adminer'
        ],

        'settings' => [
            'tabs'              => ['general' => 'Generale', 'themes' => 'Temi', 'advanced' => 'Avanzate'],
            'label'             => 'Preferenze di Adminer',
            'mode'              => 'Modalità di visualizzazione',
            'mode_comment'      => 'Cambia la modalità di visualizzazione di Adminer',
            'full_window'       => 'Finestra intera',
            'iframe'            => 'Iframe',
            'autologin'         => 'Login automatico',
            'autologin_comment' => 'Esegue automaticamente l\'accesso al database di October',
            'themes'            => 'Tema',
            'themes_comment'    => 'Seleziona il tema di Adminer',
            'theme_no'          => 'Nessun tema',
            'hide_menu'         => 'Menu principale',
            'hide_menu_comment' => 'Nasconde Adminer dal menu principale',
            'link_text'         => 'Apri Adminer',
            'link_description'  => 'Puoi accedere ad Adminer da qui:',
            'use_conn'          => 'Connessione per il login automatico',
            'use_conn_default'  => 'Connessione predefinita',
            'use_conn_comment'  => 'Per il login automatico Adminer utilizzerà la connessione predefinita al database di October. Da qui è possibile modificare questa impostazione.<br> Aggiungere nuove connessioni dal file <strong>config/database.php</strong>. <a href="https://laravel.com/docs/5.6/database#configuration" target="_blank">Maggiori informazioni</a>',
        ],

        'permissions' => [
            'tab'   => 'Adminer',
            'label' => 'Utilizzo di Adminer dal backend di October'
        ]

    ];

?>