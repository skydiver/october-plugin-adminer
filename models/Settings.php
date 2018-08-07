<?php

namespace Martin\Adminer\Models;

use Lang, Model;
use Martin\Adminer\Classes\OctoberAdminerHelper;

class Settings extends Model {

    use \October\Rain\Database\Traits\Validation;

    public $rules = [
        'mode' => 'required',
    ];

    public $attributeNames;
    public $implement      = ['System.Behaviors.SettingsModel'];
    public $settingsCode   = 'martin_adminer_settings';
    public $settingsFields = 'fields.yaml';

    public function __construct() {
        $this->attributeNames = [
            'mode' => Lang::get('martin.ssologin::lang.settings.mode'),
        ];
        parent::__construct();
    }

    public function getUseConnectionOptions() {
        $connections = OctoberAdminerHelper::getDBConnections();
        $connections = $connections->map(function ($item, $key) {
            $label = sprintf('%s', $key);
            if (!empty($item['driver'])) {
                $label .= sprintf(' [Driver: %s]', $item['driver']);
            }
            return $label;
        });
        $connections->put('', '--- '.Lang::get('martin.adminer::lang.settings.use_conn_default').' ---');
        return $connections->sort();
    }

}

?>