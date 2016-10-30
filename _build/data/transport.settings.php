<?php

$settings = array();

$tmp = array(
    'cfg_extraPlugins'       => array(
        'value' => '',
        'xtype' => 'textarea',
        'type'  => 'string'
    ),
    'cfg_addExternalPlugins' => array(
        'value' => '',
        'xtype' => 'textarea',
        'type'  => 'array'
    ),

    'manager_css' => array(
        'xtype' => 'textfield',
        'value' => '{assets_url}components/mckedextraplugins/css/mgr/default.css',
    ),
    'manager_js'  => array(
        'xtype' => 'textfield',
        'value' => '{assets_url}components/mckedextraplugins/js/mgr/default.js',
    ),
    
);

foreach ($tmp as $k => $v) {
    /* @var modSystemSetting $setting */
    $setting = $modx->newObject('modSystemSetting');
    $setting->fromArray(array_merge(
        array(
            'key'       => 'mckedep_' . $k,
            'area'      => 'mckedep_cfg',
            'namespace' => 'modckeditor',
        ), $v
    ), '', true, true);

    $settings[] = $setting;
}

unset($tmp);
return $settings;
