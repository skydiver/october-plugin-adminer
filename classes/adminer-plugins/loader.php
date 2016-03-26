<?php

    if(!function_exists('adminer_object')) {

        function adminer_object() {

            require_once "plugin.php";
            require_once "frames.php";

            $plugins = [
                new AdminerFrames,
            ];

            return new AdminerPlugin($plugins);

        }

    }

?>