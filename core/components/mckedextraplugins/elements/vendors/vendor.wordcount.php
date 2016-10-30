<?php


$vendor = array(
    'name'        => 'Word Count',
    'key'         => 'wordcount',
    'purpose'     => 'plugin',
    'description' => '',
    'checked'     => true,
    'extract'     => array(
        'wordcount',
        'wordcount',
        'https://github.com/w8tcha/CKEditor-WordCount-Plugin/archive/master.zip',
        MODX_ASSETS_PATH . 'components/modckeditor/vendor/plugins/'
    ),
    'settings'    => array(
        array(
            'key'   => 'extraPlugins',
            'area'  => 'mckedep_ckeditor_config',
            'type'  => 'string',
            'value' => array(
                'wordcount'
            )
        ),
        array(
            'key'   => 'addExternalPlugins',
            'area'  => 'mckedep_ckeditor_config',
            'type'  => 'array',
            'value' => array(
                'wordcount' => '/components/modckeditor/vendor/plugins/wordcount/wordcount/plugin.js'
            )
        ),
    )
);


return $vendor;