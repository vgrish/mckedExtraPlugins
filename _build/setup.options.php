<?php

$output = null;

switch ($options[xPDOTransport::PACKAGE_ACTION]) {
    case xPDOTransport::ACTION_INSTALL:
    case xPDOTransport::ACTION_UPGRADE:

        $vendors = array();

        $path = MODX_CORE_PATH . 'components/mckedextraplugins/elements/vendors/';
        $files = scandir($path);
        foreach ($files as $file) {
            if (strpos($file, 'vendor.') === 0) {
                $vendors[] = @include $path . $file;
            }
        }

        if (!empty($vendors)) {
            $output .= '<ul id="formCheckboxes" style="height:200px;overflow:auto;">';
            foreach ($vendors as $v) {
                $checked = $v['checked'] ? 'checked' : '';
                $output .= "<li><label><input type='checkbox' name='vendors[]' value='{$v['key']}' {$checked}> {$v['name']}</label></li>";
            }
            $output .= '</ul>';
        }

        break;

    case xPDOTransport::ACTION_UNINSTALL:
        break;
}

if ($output) {
    return 'Select <b>vendors</b>, which need to <b>setup</b>:<br/>
	    <small>
			<a href="#" onclick="Ext.get(\'formCheckboxes\').select(\'input\').each(function(v) {v.dom.checked = true;});">select all</a> |
			<a href="#" onclick="Ext.get(\'formCheckboxes\').select(\'input\').each(function(v) {v.dom.checked = false;});">deselect all</a>
		</small>
	' . $output;

}

return;