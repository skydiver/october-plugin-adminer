<?php

    class AdminerCustomization extends AdminerPlugin {

        function name() {
            return Lang::get('martin.adminer::lang.plugin.name');
        }

        function login($login, $password) {
            return true;
        }

    }


?>