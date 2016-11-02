<?php


$vendor = array(
    'name'        => 'Typograf',
    'key'         => 'typograf',
    'purpose'     => 'plugin',
    'description' => '<a href="https://github.com/vgrish/ckeditor-plugin-typograf" target="_blank">Typograf</a>',
    'checked'     => true,
    'extract'     => array(
        array(
            'typograf',
            'typograf',
            'https://github.com/vgrish/ckeditor-plugin-typograf/archive/master.zip',
            MODX_ASSETS_PATH . 'components/modckeditor/vendor/plugins/'
        ),
        array(
            'typograf.vendor',
            'typograf',
            'https://github.com/typograf/typograf/archive/dev.zip',
            MODX_ASSETS_PATH . 'components/modckeditor/vendor/plugins/typograf/vendors/'

        ),
    ),
    'settings'    => array(
        array(
            'key'   => 'extraPlugins',
            'area'  => 'mckedep_cfg',
            'type'  => 'string',
            'value' => array(
                'typograf'
            )
        ),
        array(
            'key'   => 'addExternalPlugins',
            'area'  => 'mckedep_cfg',
            'type'  => 'array',
            'value' => array(
                'typograf' => 'vendor/plugins/typograf/plugin.js'
            )
        ),
        array(
            'key'   => 'typograf_addSafeTag',
            'area'  => 'mckedep_cfg',
            'type'  => 'string',
            'value' => array(
                array(
                    array(
                        '{'
                    ),
                    array(
                        '}'
                    ),
                ),
                array(
                    array(
                        '/\[.*?\]/g'
                    ),
                ),
            )
        ),
        array(
            'key'   => 'typograf_pathTypograf',
            'area'  => 'mckedep_cfg',
            'type'  => 'string',
            'value' => 'vendors/typograf/dist/typograf.min.js'
        ),
    )
);


return $vendor;