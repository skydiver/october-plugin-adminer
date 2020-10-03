<?php

    return [

        'plugin' => [
            'name'        => 'Adminer for OctoberCMS',
            'description' => 'Naloži Adminer instanco iz sistema October'
        ],

        'navigation' => [
            'label' => 'Adminer'
        ],

        'settings' => [
            'tabs'              => ['general' => 'Splošno', 'themes' => 'Teme', 'advanced' => 'Napredno'],
            'label'             => 'Adminer nastavitve',
            'mode'              => 'Zagonski način',
            'mode_comment'      => 'Določi način zagona Adminer',
            'full_window'       => 'Celo okno',
            'iframe'            => 'Iframe',
            'autologin'         => 'Samodejna prijava',
            'autologin_comment' => 'Prijava direktno v vašo OctoberCMS bazo',
            'themes'            => 'Tema',
            'themes_comment'    => 'Izberi Adminer temo',
            'themes_no'         => 'Brez teme',
            'hide_menu'         => 'Element v meniju',
            'hide_menu_comment' => 'Skrij Adminer v glavnem meniju',
            'link_text'         => 'Odpri Adminer',
            'link_description'  => 'Tukaj lahko dostopate do Adminer:',
            'use_conn'          => 'Privzeta povezava samodejne prijave',
            'use_conn_default'  => 'Uporabi privzeto povezavo',
            'use_conn_comment'  => 'Adminer bo uporabil privzeto povezavo October baze. To nastavitev lahko spremenite tukaj.<br>Dodajte nove povezave v <strong>config/database.php</strong>. <a href="https://laravel.com/docs/5.6/database#configuration" target="_blank">Več informacij (v angleščini)</a>',
        ],

        'permissions' => [
            'tab'   => 'Adminer',
            'label' => 'Dostopaj Adminer iz October sistema'
        ]

    ];

?>