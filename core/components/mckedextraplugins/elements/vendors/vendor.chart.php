<?php


$vendor = array(
    'name'        => 'Chart',
    'key'         => 'chart',
    'purpose'     => 'plugin',
    'description' => '',
    'checked'     => true,
    'extract'     => array(
        'chart',
        'chart',
        'https://github.com/wwalc/chart/archive/master.zip',
        MODX_ASSETS_PATH . 'components/modckeditor/vendor/plugins/'
    ),
    'settings'    => array(
        array(
            'key'   => 'extraPlugins',
            'area'  => 'mckedep_ckeditor_config',
            'type'  => 'string',
            'value' => array(
                'chart'
            )
        ),
        array(
            'key'   => 'addExternalPlugins',
            'area'  => 'mckedep_ckeditor_config',
            'type'  => 'array',
            'value' => array(
                'chart' => '/components/modckeditor/vendor/plugins/chart/plugin.js'
            )
        ),
    )
);


return $vendor;