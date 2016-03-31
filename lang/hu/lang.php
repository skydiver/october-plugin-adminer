<?php

    return [

        'plugin' => [
            'name'        => 'Adminer adatbázis kezelő',
            'description' => 'A weboldal adatbázisának menedzselése.',
        ],

        'navigation' => [
            'label' => 'Adatbázis',
        ],

        'settings' => [
            'label'     => 'Adatbázis',
            'mode'      => 'Futattás típusa',
            'autologin' => 'Automatikus bejelentkezés',
            'comments'  => [
                'mode'      => 'Az adatbázis megjelenésének módja.',
                'autologin' => 'Azonnali beléptetés az adatbázis kezelőbe.'
            ],
            'full_window' => 'Teljes képernyőn',
            'iframe'      => 'Keretben',
        ],

        'permissions' => [
            'tab'   => 'Adatbázis',
            'label' => 'Beállítások kezelése'
        ]

    ];

?>