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

            class AdminerCustomization extends AdminerPlugin {

                function name() {
                    return Lang::get('martin.adminer::lang.plugin.name');
                }

                function credentials() {
                    if(Session::get('ADMINER_AUTOLOGIN') === true) {
                        $default    = config('database.default');
                        $connection = config('database.connections.' . $default);
                        if($connection['driver'] == 'mysql') {
                            $server = $connection['host'] . (($connection['port'] != '') ? ':' . $connection['port'] : '');
                            return [$server, $connection['username'], $connection['password']];
                        }
                    }
                }

            }

            return new AdminerCustomization($load_plugins);

        }

    }

    # LOAD MAIN ADMINER CLASS
    require(plugins_path() . '/martin/adminer/classes/adminer-4.2.4-en.php');

?>