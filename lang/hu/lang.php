<?php

    return [

        'plugin' => [
            'name'        => 'Adatbázis kezelő',
            'description' => 'A weboldal adatbázisának menedzselése.'
        ],

        'navigation' => [
            'label' => 'Adatbázis'
        ],

        'settings' => [
            'label'     => 'Adatbázis',
            'mode'      => 'Futtatás típusa',
            'autologin' => 'Automatikus bejelentkezés',
            'comments'  => [
                'mode'      => 'Az adatbázis kezelő megjelenésének módja.',
                'autologin' => 'Azonnali beléptetés az adatbázis kezelőbe.'
            ],
            'full_window' => 'Teljes képernyőn',
            'iframe'      => 'Keretben'
        ],

        'permissions' => [
            'tab'   => 'Adatbázis',
            'label' => 'Beállítások kezelése'
        ]

    ];

?>