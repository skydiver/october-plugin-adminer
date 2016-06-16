<?php

    # GET CONNECTION
    $driver = config('database.default');

    # LOAD "adminer_object" FOR SPECIFIC DRIVER
    switch($driver) {
        case 'mysql':
            require_once(plugins_path() . '/martin/adminer/classes/extra/MySQL.php');
            break;
        case 'sqlite':
            require_once(plugins_path() . '/martin/adminer/classes/extra/SQLite.php');
            break;
    }

    # LOAD MAIN ADMINER CLASS
    require(plugins_path() . '/martin/adminer/classes/adminer-4.2.5-en.php');

?>