<?php

    if(!function_exists('adminer_object')) {

        function adminer_object() {

            class AdminerSoftware extends Adminer {

                function login($login, $password) {
                    return true;
                }

            }

            return new AdminerSoftware;

        }

    }

?>