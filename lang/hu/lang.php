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
            'autologin' => 'MySQL belépés',
            'sqlite_autologin' => 'SQLite belépés',
            'comments'  => [
                'mode'      => 'Az adatbázis kezelő megjelenésének módja.',
                'autologin' => 'Automatikus bejelentkezés a felületre.',
                'sqlite_autologin' => 'Automatikus bejelentkezés a felületre.',
                'sqlite_path'      => 'Alapértelmezett adatbázis használata'
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
