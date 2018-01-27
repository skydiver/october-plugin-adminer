<?php

class AdminerCustomization extends AdminerPlugin {

    function name() {
        return Lang::get('martin.adminer::lang.plugin.name');
    }

    function css() {
        return [ADMINER_THEME];
    }

    function credentials() {
        if (Session::get('ADMINER_AUTOLOGIN') === true) {
            require_once(plugins_path() . '/martin/adminer/classes/OctoberAdminerHelper.php');
            $connection = Martin\Adminer\Classes\OctoberAdminerHelper::getDBAutologinParams();
            if ($connection['driver'] == 'pgsql') {
                return [$connection['server'], $connection['username'], $connection['password']];
            }
        } else {
            return array(SERVER, $_GET['username'], get_password());
        }
    }

}

?>