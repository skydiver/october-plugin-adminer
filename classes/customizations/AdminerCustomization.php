<?php

class AdminerCustomization extends AdminerPlugin {
    function name() {
        return Lang::get('martin.adminer::lang.plugin.name');
    }

    function css() {
        return [ADMINER_THEME];
    }

}