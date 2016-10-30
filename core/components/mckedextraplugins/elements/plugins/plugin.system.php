<?php


/** @var modX $modx */
/** @var array $scriptProperties */

switch ($modx->event->name) {
    case 'modCKEditorOnLoadControllerJsCss':

        /** @var modManagerController $controller */
        if (!$controller = $modx->getOption('controller', $scriptProperties)) {
            return;
        }

        if ($managerCss = $modx->getOption('mckedep_manager_css', null)) {
            $controller->addCss($managerCss);
        }

        if ($managerJs = $modx->getOption('mckedep_manager_js', null)) {
            $modx->regClientStartupScript($managerJs);
        }

        break;

}