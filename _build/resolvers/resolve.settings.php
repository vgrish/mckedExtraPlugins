<?php

/** @var $modx modX */
if (!$modx = $object->xpdo AND !$object->xpdo instanceof modX) {
    return true;
}

/** @var $options */
switch ($options[xPDOTransport::PACKAGE_ACTION]) {
    case xPDOTransport::ACTION_INSTALL:
    case xPDOTransport::ACTION_UPGRADE:

        /** @var modCKEditor $modCKEditor */
        if (!$modCKEditor = $modx->getService('modckeditor')) {
            $modx->log(modX::LOG_LEVEL_ERROR, '[mckedExtraPlugins] Could not load modCKEditor');

            return false;
        }

        $modx->removeCollection('modSystemSetting', array(
            'key:LIKE' => "mckedep_ckeditor_config_%",
            'area' => 'mckedep_ckeditor_config'
        ));

        $vendors = isset($options['vendors']) ? $options['vendors'] : null;

        $path = MODX_CORE_PATH . 'components/mckedextraplugins/elements/vendors/';
        $files = scandir($path);
        foreach ($files as $file) {
            if (strpos($file, 'vendor.') === 0) {
                $vendor = @include $path . $file;

                if (!is_null($vendors) AND !in_array($vendor['key'], $vendors)) {
                    continue;
                }

                foreach ($vendor['settings'] as $row) {
                    $modCKEditor->addConfigSetting($row);
                }
            }
        }

        break;
    case xPDOTransport::ACTION_UNINSTALL:

        $modx->removeCollection('modSystemSetting', array('area' => 'mckedep_ckeditor_config'));

        break;
}

return true;