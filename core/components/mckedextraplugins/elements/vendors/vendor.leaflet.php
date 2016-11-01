<?php


$vendor = array(
    'name'        => 'Leaflet Maps',
    'key'         => 'leaflet',
    'purpose'     => 'plugin',
    'description' => '<a href="http://ckeditor.com/addon/leaflet" target="_blank">Leaflet Maps</a>',
    'checked'     => true,
    'extract'     => array(
        'leaflet',
        'leaflet',
        'https://github.com/ranelpadon/ckeditor-leaflet/archive/master.zip',
        MODX_ASSETS_PATH . 'components/modckeditor/vendor/plugins/'
    ),
    'settings'    => array(
        array(
            'key'   => 'extraPlugins',
            'area'  => 'mckedep_cfg',
            'type'  => 'string',
            'value' => array(
                'leaflet'
            )
        ),
        array(
            'key'   => 'addExternalPlugins',
            'area'  => 'mckedep_cfg',
            'type'  => 'array',
            'value' => array(
                'leaflet' => 'vendor/plugins/leaflet/plugin.js'
            )
        ),
        array(
            'key'   => 'leaflet_maps_google_api_key',
            'area'  => 'mckedep_cfg',
            'type'  => 'string',
            'value' => ''
        ),
    )
);


return $vendor;