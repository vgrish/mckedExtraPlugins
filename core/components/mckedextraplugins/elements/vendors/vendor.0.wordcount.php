<?php


$vendor = array(
    'name'        => 'Word Count',
    'key'         => 'wordcount',
    'purpose'     => 'plugin',
    'description' => '<a href="http://ckeditor.com/addon/wordcount" target="_blank">Word Count</a>',
    'checked'     => true,
    'extract'     => array(
        array(
            'wordcount',
            'wordcount',
            'https://github.com/w8tcha/CKEditor-WordCount-Plugin/archive/master.zip',
            MODX_ASSETS_PATH . 'components/modckeditor/external/plugins/'
        )
    ),
    'settings'    => array(
        array(
            'key'   => 'extraPlugins',
            'area'  => 'mckedep_cfg',
            'type'  => 'string',
            'value' => array(
                'wordcount'
            )
        ),
        array(
            'key'   => 'addExternalPlugins',
            'area'  => 'mckedep_cfg',
            'type'  => 'array',
            'value' => array(
                'wordcount' => 'external/plugins/wordcount/wordcount/plugin.js'
            )
        ),
    )
);


return $vendor;