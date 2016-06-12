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
                        require_once(plugins_path() . '/martin/adminer/classes/OctoberAdminerHelper.php');
                        $connection = Martin\Adminer\Classes\OctoberAdminerHelper::getAutologinParams();
                        if($connection['driver'] == 'mysql') {
                            return [$connection['server'], $connection['username'], $connection['password']];
                        }
                    } else {
                        return array(SERVER, $_GET['username'], get_password());
                    }
                }

            }

            return new AdminerCustomization($load_plugins);

        }

    }

    # LOAD MAIN ADMINER CLASS
    require(plugins_path() . '/martin/adminer/classes/adminer-4.2.5-en.php');

?>