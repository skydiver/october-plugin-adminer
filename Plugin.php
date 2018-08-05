<?php

namespace Martin\Adminer;

use Backend;
use System\Classes\PluginBase;
use Martin\Adminer\Classes\OctoberAdminerHelper;
use Martin\Adminer\Models\Settings as Settings;

class Plugin extends PluginBase {

    public function pluginDetails() {
        return [
            'name'        => 'martin.adminer::lang.plugin.name',
            'description' => 'martin.adminer::lang.plugin.description',
            'author'      => 'Martin M.',
            'icon'        => 'icon-database',
            'homepage'    => 'https://github.com/skydiver/october-plugin-adminer'
        ];
    }

    public function registerNavigation() {

        if (Settings::get('hide_menu', 0) == 1) {
            return [];
        }

        return [
            'adminer' => [
                'label'       => 'martin.adminer::lang.navigation.label',
                'url'         => Backend::url('martin/adminer/octoberadminer' . OctoberAdminerHelper::getAutologinURL(true)),
                'permissions' => ['martin.adminer.access_adminer'],
                'icon'        => 'icon-database',
                'iconSvg'     => 'plugins/martin/adminer/assets/imgs/icon.svg',
                'order'       => 900
            ]
        ];

    }

    public function registerSettings() {
        return [
            'settings' => [
                'label'       => 'martin.adminer::lang.settings.label',
                'description' => 'martin.adminer::lang.plugin.description',
                'icon'        => 'icon-database',
                'class'       => '\Martin\Adminer\Models\Settings',
                'order'       => 500,
                'permissions' => ['martin.adminer.access'],
                'category'    => 'system::lang.system.categories.system'
            ]
        ];
    }

    public function registerPermissions() {
        return [
            'martin.adminer.access_adminer' => [
                'tab'   => 'martin.adminer::lang.permissions.tab',
                'label' => 'martin.adminer::lang.permissions.label'
            ],
        ];
    }

}

?>
