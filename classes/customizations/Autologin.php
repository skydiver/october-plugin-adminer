<?php

require_once plugins_path('martin/adminer/classes/customizations/AdminerCustomization.php');

class Autologin extends AdminerCustomization {

    function login($login, $password) {
        return true;
    }

}