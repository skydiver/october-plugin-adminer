<?php

use Martin\Adminer\Classes\OctoberAdminerHelper;

require_once plugins_path('martin/adminer/classes/customizations/Autologin.php');

class MySQL extends Autologin {

    function credentials() {
        $connection = OctoberAdminerHelper::getDBAutologinParams();
        return [
            $connection['server'],
            $connection['username'],
            $connection['password']
        ];
    }

}