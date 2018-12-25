<?php

namespace Martin\Adminer\Classes;

use File;
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
                $params = sprintf('?server=%s&username=%s&db=%s', $server, $connection['username'], $connection['database']);
                break;
            case 'pgsql':
                $server = self::_getDBSQLServerAddress();
                $params = sprintf('?pgsql=%s&username=%s&db=%s', $server, $connection['username'], $connection['database']);
                break;
            case 'sqlite':
                $params = sprintf('?sqlite=&username=&db=%s', $connection['database']);
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
        $conn = Settings::get('use_connection', 0);
        if (empty($conn)) {
            $default = config('database.default');
            $connection = config('database.connections.' . $default);
        } else {
            $connection = config('database.connections.' . $conn);
        }
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

    public static function getThemes() {
        $directories = File::directories(plugins_path() . '/martin/adminer/assets/themes');
        foreach ($directories as $directory) {
            $theme = basename($directory);
            $themes[$theme] = $theme;
        }
        ksort($themes);
        return ['' => 'None'] + $themes;
    }

}

?>