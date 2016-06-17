<?php

    namespace Martin\Adminer\Classes;

    use Martin\Adminer\Models\Settings as Settings;

    class OctoberAdminerHelper {

        public static function getAutologinURL($nav=false) {
            $mode             = Settings::get('mode'            , 1);
            $autologin        = Settings::get('autologin'       , 0);
            $sqlite_autologin = Settings::get('sqlite_autologin', 0);
            if(($autologin == 0 && $sqlite_autologin == 0) || ($nav == true && $mode == 2)) { return ''; }
            $connection = self::getDBConnectionParams();
            if($connection['driver'] == 'mysql') {
                $server = self::getMySQLServerAddress();
                $params = '?server='.$server.'&username='.$connection['username'].'&db='.$connection['database'];
            } elseif($connection['driver'] == 'sqlite') {
                $params = '?sqlite=&username=&db=' . $connection['database'];
            } else {
                $params = '';
            }
            return $params;
        }

        public static function getMySQLAutologinParams() {
            $connection = self::getDBConnectionParams();
            $server     = self::getMySQLServerAddress();
            return [
                'driver'   => $connection['driver'],
                'server'   => $server,
                'username' => $connection['username'],
                'password' => $connection['password']
            ];
        }

        public static function getDBConnectionParams() {
            $default    = config('database.default');
            $connection = config('database.connections.' . $default);
            return $connection;
        }

        private static function getMySQLServerAddress() {
            $connection = self::getDBConnectionParams();
            $server = $connection['host'] . (($connection['port'] != '') ? ':' . $connection['port'] : '');
            return $server;
        }

    }

?>