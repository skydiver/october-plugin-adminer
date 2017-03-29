<?php

    namespace Martin\Adminer\Classes;

    use Martin\Adminer\Models\Settings as Settings;

    class OctoberAdminerHelper {

        public static function getAutologinURL($nav=false) {

            $mode       = Settings::get('mode'     , 1);
            $autologin  = Settings::get('autologin', 0);
            $connection = self::getDBConnectionParams();

            if($autologin === 0 || $connection['driver'] != $autologin || ($nav == true && $mode == 2)) { return ''; }

            switch($autologin) {
                case 'mysql':
                    $server = self::getDBSQLServerAddress();
                    $params = '?server='.$server.'&username='.$connection['username'].'&db='.$connection['database'];
                    break;
                case 'pgsql':
                    $server = self::getDBSQLServerAddress();
                    $params = '?pgsql='.$server.'&username='.$connection['username'].'&db='.$connection['database'];
                    break;
                case 'sqlite':
                    $params = '?sqlite=&username=&db=' . $connection['database'];
                    break;
                default:
                    $params = '';
            }

            return $params;

        }

        public static function getDBAutologinParams() {
            $connection = self::getDBConnectionParams();
            $server     = self::getDBSQLServerAddress();
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

        private static function getDBSQLServerAddress() {
            $connection = self::getDBConnectionParams();
            $server = $connection['host'] . (($connection['port'] != '') ? ':' . $connection['port'] : '');
            return $server;
        }

    }

?>