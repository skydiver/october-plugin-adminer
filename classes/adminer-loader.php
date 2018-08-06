<?php

if (!function_exists('adminer_object')) {

    function adminer_object() {

        include_once 'adminer-plugins/plugin.php';

        if (is_array(Session::get('ADMINER_PLUGINS'))) {
            foreach (Session::get('ADMINER_PLUGINS') as $plugin => $class) {
                include_once 'adminer-plugins/'.$plugin.'.php';
                $load_plugins[] = new $class;
            }
        }

        $driver = config('database.default');

        // LOAD ADMINER CUSTOMIZATION CLASS
        switch($driver) {
            case 'mysql':
                include_once plugins_path() . '/martin/adminer/classes/customizations/MySQL.php';
                return new AdminerCustomization($load_plugins);
            case 'pgsql':
                include_once plugins_path() . '/martin/adminer/classes/customizations/pgSQL.php';
                return new AdminerCustomization($load_plugins);
            case 'sqlite':
                include_once plugins_path() . '/martin/adminer/classes/customizations/SQLite.php';
                return new AdminerCustomization($load_plugins);
        }

    }

}

// LOAD MAIN ADMINER CLASS
require plugins_path() . '/martin/adminer/classes/adminer-4.6.3-en.php';

?>
