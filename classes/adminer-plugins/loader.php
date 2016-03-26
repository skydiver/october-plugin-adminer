<?php

    if(!function_exists('adminer_object')) {

        function adminer_object() {

            require_once "plugin.php";

            $plugins = [

            ];

            return new AdminerPlugin($plugins);

        }

    }

?>