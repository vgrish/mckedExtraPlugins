<?php


$vendor = array(
    'name'        => 'Chart',
    'key'         => 'chart',
    'purpose'     => 'plugin',
    'description' => '<a href="http://ckeditor.com/addon/chart" target="_blank">Chart</a>',
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
            'area'  => 'mckedep_cfg',
            'type'  => 'string',
            'value' => array(
                'chart'
            )
        ),
        array(
            'key'   => 'addExternalPlugins',
            'area'  => 'mckedep_cfg',
            'type'  => 'array',
            'value' => array(
                'chart' => 'vendor/plugins/chart/plugin.js'
            )
        ),
    )
);


return $vendor;