<?php

    namespace Martin\Adminer\Controllers;

    use Backend\Classes\Controller;

    class OctoberAdminer extends Controller {

        public $requiredPermissions = ['martin.adminer.access_adminer'];

        public function __construct() {
            parent::__construct();
        }

        public function index() {
            require(plugins_path() . '/martin/adminer/classes/adminer-en.php');
            return new \Martin\Adminer\Classes\EmptyResponse();
        }

    }

?>