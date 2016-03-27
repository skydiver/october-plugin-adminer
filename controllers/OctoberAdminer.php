<?php

    namespace Martin\Adminer\Controllers;

    use Backend\Classes\Controller;
    use Martin\Adminer\Models\Settings as Settings;
    use Session;

    class OctoberAdminer extends Controller {

        public $pageTitle           = 'martin.adminer::lang.plugin.name';
        public $requiredPermissions = ['martin.adminer.access_adminer'];

        public function __construct() {
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
            require(plugins_path() . '/martin/adminer/classes/adminer-loader.php');
            return new \Martin\Adminer\Classes\EmptyResponse();
        }

        private function runAdminerLoader() {
            $mode      = Settings::get('mode'     , 1);
            $autologin = Settings::get('autologin', 0);
            if($mode      == 2) { Session::flash('ADMINER_PLUGINS', ['frames' => 'AdminerFrames']); }
            if($autologin == 1) { Session::flash('ADMINER_AUTOLOGIN', true); }
        }

        private function runAdminerIFrame() {
            $this->addCss('/plugins/martin/adminer/assets/css/styles.css');
            return \View::make('martin.adminer::iframe', [
                'URL' => \Backend::url('martin/adminer/octoberadminer/iframe'.$this->getAutologinURL())
            ]);
        }

        private function getAutologinURL() {
            $params    = '';
            $autologin = Settings::get('autologin', 0);
            if($autologin == 1) {
                $default    = config('database.default');
                $connection = config('database.connections.' . $default);
                if($connection['driver'] == 'mysql') {
                    $server = $connection['host'] . (($connection['port'] != '') ? ':' . $connection['port'] : '');
                    $params = '?server='.$server.'&username='.$connection['username'].'&db='.$connection['database'];
                }
            }
            return $params;
        }

    }

?>