<?php

namespace Martin\Adminer\Classes;

use Martin\Adminer\Models\Settings as Settings;

class OctoberAdminerHelper {

    public static function getAutologinURL($nav=false) {

        $mode       = Settings::get('mode', 1);
        $autologin  = Settings::get('autologin', 0);
        $connection = self::getDBConnectionParams();

        if ($autologin == 0 || ($nav == true && $mode == 2)) {
            return '';
        }

        switch($connection['driver']) {
            case 'mysql':
                $server = self::_getDBSQLServerAddress();
                $params = '?server='.$server.'&username='.$connection['username'].'&db='.$connection['database'];
                break;
            case 'pgsql':
                $server = self::_getDBSQLServerAddress();
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
        $server     = self::_getDBSQLServerAddress();
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

    private static function _getDBSQLServerAddress() {
        $connection = self::getDBConnectionParams();
        $server = $connection['host'] . (($connection['port'] != '') ? ':' . $connection['port'] : '');
        return $server;
    }

    public static function getDBConnections() {
        return collect(config('database.connections'))
            ->filter(function ($item, $key) {
                if (empty($item['driver']) || !in_array($item['driver'], ['sqlite', 'mysql', 'pgsql'])) {
                    return false;
                }
                return true;
            });
    }

}

?>