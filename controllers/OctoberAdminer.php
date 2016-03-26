<?php

    namespace Martin\Adminer\Controllers;

    use Backend\Classes\Controller;
    use Martin\Adminer\Models\Settings as Settings;

    class OctoberAdminer extends Controller {

        public $pageTitle           = 'martin.adminer::lang.plugin.name';
        public $requiredPermissions = ['martin.adminer.access_adminer'];

        public function __construct() {
            parent::__construct();
            \BackendMenu::setContext('Martin.Adminer', 'adminer', 'octoberadminer');
        }

        public function index() {
            $mode = Settings::get('mode', 1);
            if($mode == 2) {
                $this->addCss('/plugins/martin/adminer/assets/css/styles.css');
                return \View::make('martin.adminer::iframe', [
                    'URL' => \Backend::url('martin/adminer/octoberadminer/iframe')
                ]);
            } else {
                $this->runAdminer();
            }
        }

        public function iframe() {
            self::runAdminer();
        }

        private function runAdminer() {
            $enable_plugins = true;
            require(plugins_path() . '/martin/adminer/classes/adminer-4.2.4-en.php');
            return new \Martin\Adminer\Classes\EmptyResponse();
        }

    }

?>