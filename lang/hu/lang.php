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
            'tabs'              => ['general' => 'Általános', 'themes' => 'Megjelenés', 'advanced' => 'Haladó'],
            'label'             => 'Adatbázis',
            'mode'              => 'Futtatás típusa',
            'mode_comment'      => 'Az adatbázis kezelő megjelenésének módja.',
            'full_window'       => 'Teljes képernyőn',
            'iframe'            => 'Keretben',
            'autologin'         => 'Bejelentkezés',
            'autologin_comment' => 'Automatikus belépés a felületre.',
            'themes'            => 'Témák',
            'themes_comment'    => 'Válasszon egy kinézetet.',
            'themes_no'         => 'Nincs téma',
            'hide_menu'         => 'Menüpont',
            'hide_menu_comment' => 'Az adatbázis menü elrejtése.',
            'link_text'         => 'Adatbázis megnyitása',
            'link_description'  => 'Az adatbázist itt érheti el:',
            'use_conn'          => 'Automatikus belépés',
            'use_conn_default'  => 'Alapértelmezett kapcsolat használata',
            'use_conn_comment'  => 'A weboldal által használt adatbázis kapcsolat az alapértelmezett. Ezt a beállítást itt felülírhatja.<br>Új kapcsolatot a <strong>config/database.php</strong> fájlba tud hozzáadni. <a href="https://laravel.com/docs/5.6/database#configuration" target="_blank">További infók (angol nyelvű)</a>',
        ],

        'permissions' => [
            'tab'   => 'Adatbázis',
            'label' => 'Beállítások kezelése'
        ]

    ];

?>
