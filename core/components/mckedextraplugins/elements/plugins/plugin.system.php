<?php


/** @var modX $modx */
/** @var array $scriptProperties */

switch ($modx->event->name) {
    case 'modCKEditorOnLoadControllerJsCss':

        /** @var modManagerController $controller */
        if (!$controller = $modx->getOption('controller', $scriptProperties)) {
            return;
        }

        $managerCss = $modx->getOption('mckedep_ckeditor_manager_css', null);
        $managerJs = $modx->getOption('mckedep_ckeditor_manager_js', null);

        $controller->addCss($managerCss);
        $modx->regClientStartupScript($managerJs);

        break;

}