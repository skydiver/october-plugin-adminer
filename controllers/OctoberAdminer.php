<?php

namespace Martin\Adminer\Controllers;

use Config;
use Session;
use Backend\Classes\Controller;
use Martin\Adminer\Models\Settings as Settings;
use Martin\Adminer\Classes\OctoberAdminerHelper;

class OctoberAdminer extends Controller {

    public $pageTitle           = 'martin.adminer::lang.plugin.name';
    public $requiredPermissions = ['martin.adminer.access_adminer'];

    public function __construct() {
        Config::set('cms.enableCsrfProtection', false);
        parent::__construct();
        \BackendMenu::setContext('Martin.Adminer', 'adminer', 'octoberadminer');
    }

    public function index() {
        $mode = Settings::get('mode', 1);
        switch ($mode) {
            case 2:
                return $this->runAdminerIFrame();
                break;
            default:
                return $this->runAdminer();
                break;
        }
    }

    public function iframe() {
        return $this->runAdminer();
    }

    private function runAdminer() {
        $this->runAdminerLoader();
        define('ADMINER_THEME', self::getTheme());
        include_once plugins_path() . '/martin/adminer/classes/adminer-loader.php';
        return new \Martin\Adminer\Classes\EmptyResponse();
    }

    private function runAdminerLoader() {
        $mode      = Settings::get('mode', 1);
        $autologin = Settings::get('autologin', 0);
        if ($mode == 2) {
            Session::flash('ADMINER_PLUGINS', ['frames' => 'AdminerFrames']);
        }
        if ($autologin != 0) {
            Session::flash('ADMINER_AUTOLOGIN', true);
        }
    }

    private function runAdminerIFrame() {
        $this->addCss('/plugins/martin/adminer/assets/css/styles.css');
        return \View::make('martin.adminer::iframe', [
            'URL' => \Backend::url('martin/adminer/octoberadminer/iframe' . OctoberAdminerHelper::getAutologinURL())
        ]);
    }

    private function getTheme() {
        if (Settings::get('theme')) {
            $css = '/plugins/martin/adminer/assets/themes/' . Settings::get('theme') . '/adminer.css?cache=' . date('YmdHis');
            return url($css);
        }
    }

}

?>