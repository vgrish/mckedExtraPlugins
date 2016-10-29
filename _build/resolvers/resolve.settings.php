<?php

/** @var $modx modX */
if (!$modx = $object->xpdo AND !$object->xpdo instanceof modX) {
    return true;
}

$area = 'mckedep_ckeditor_config';

/** @var $options */
switch ($options[xPDOTransport::PACKAGE_ACTION]) {
    case xPDOTransport::ACTION_INSTALL:
    case xPDOTransport::ACTION_UPGRADE:


        $plugins = array(
            'wordcount' => array(
                '/components/modckeditor/vendor/plugins/wordcount/wordcount/plugin.js'
            ),
            'chart' => array(
                '/components/modckeditor/vendor/plugins/chart/plugin.js'
            ),
        );

        /* setting addExternalPlugins */
        $key = $area . '_addExternalPlugins';
        if (!$tmp = $modx->getObject('modSystemSetting', array('key' => $key))) {
            $tmp = $modx->newObject('modSystemSetting');
            $tmp->fromArray(array(
                'key'       => $key,
                'xtype'     => 'textarea',
                'namespace' => 'modckeditor',
                'area'      => $area,
                'editedon'  => null,
            ), '', true, true);
        }
        $tmp->set('value', json_encode($plugins, 1));
        $tmp->save();

        /* setting extraPlugins */
        $key = $area . '_extraPlugins';
        if (!$tmp = $modx->getObject('modSystemSetting', array('key' => $key))) {
            $tmp = $modx->newObject('modSystemSetting');
            $tmp->fromArray(array(
                'key'       => $key,
                'xtype'     => 'textarea',
                'namespace' => 'modckeditor',
                'area'      => $area,
                'editedon'  => null,
            ), '', true, true);
        }
        $tmp->set('value', json_encode(array_keys($plugins), 1));
        $tmp->save();

        break;
    case xPDOTransport::ACTION_UNINSTALL:
        $modx->removeCollection('modSystemSetting', array('area' => $area));

        break;
}

return true;