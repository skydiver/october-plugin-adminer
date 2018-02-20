<?php

    if(!function_exists('adminer_object')) {

        function adminer_object() {

            require_once 'adminer-plugins/plugin.php';

            if(is_array(Session::get('ADMINER_PLUGINS'))) {
                foreach(Session::get('ADMINER_PLUGINS') as $plugin => $class) {
                    require_once 'adminer-plugins/'.$plugin.'.php';
                    $load_plugins[] = new $class;
                }
            }

            $driver = config('database.default');

            # LOAD ADMINER CUSTOMIZATION CLASS
            switch($driver) {
                case 'mysql':
                    require_once(plugins_path() . '/martin/adminer/classes/customizations/MySQL.php');
                    return new AdminerCustomization($load_plugins);
                case 'pgsql':
                    require_once(plugins_path() . '/martin/adminer/classes/customizations/pgSQL.php');
                    return new AdminerCustomization($load_plugins);
                case 'sqlite':
                    require_once(plugins_path() . '/martin/adminer/classes/customizations/SQLite.php');
                    return new AdminerCustomization($load_plugins);
            }

        }

    }

    # LOAD MAIN ADMINER CLASS
    require(plugins_path() . '/martin/adminer/classes/adminer-4.6.2-en.php');

?>
