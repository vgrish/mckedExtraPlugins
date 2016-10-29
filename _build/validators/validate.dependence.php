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

        break;

    case xPDOTransport::ACTION_UNINSTALL:
        break;
}

return true;