<?php

require_once plugins_path('martin/adminer/classes/customizations/AdminerCustomization.php');

class Autologin extends AdminerCustomization {

    function login($login, $password) {
        return true;
    }

    function permanentLogin($create=false) {
        return false;
    }

    function loginForm() {
        echo '<style>
            form table, form label { display:none }
            input[type=submit] { width:300px; }
        </style>';
        echo parent::loginForm();
    }

}