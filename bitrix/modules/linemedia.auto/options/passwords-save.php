<?php

$LM_AUTO_MAIN_SUPPLIERS_LIST_LOGIN = (string) $_POST['LM_AUTO_MAIN_SUPPLIERS_LIST_LOGIN'];
COption::SetOptionString($sModuleId, 'LM_AUTO_MAIN_SUPPLIERS_LIST_LOGIN', $LM_AUTO_MAIN_SUPPLIERS_LIST_LOGIN);

$LM_AUTO_MAIN_SUPPLIERS_LIST_PASSWORD = (string) $_POST['LM_AUTO_MAIN_SUPPLIERS_LIST_PASSWORD'];
COption::SetOptionString($sModuleId, 'LM_AUTO_MAIN_SUPPLIERS_LIST_PASSWORD', $LM_AUTO_MAIN_SUPPLIERS_LIST_PASSWORD);

$LM_AUTO_MAIN_ACCESS_REMOTE_SEARCH = $_POST['LM_AUTO_MAIN_ACCESS_REMOTE_SEARCH'] == 'Y' ? 'Y' : 'N';
COption::SetOptionString($sModuleId, 'LM_AUTO_MAIN_ACCESS_REMOTE_SEARCH', $LM_AUTO_MAIN_ACCESS_REMOTE_SEARCH);

$LM_AUTO_MAIN_ACCESS_GROUPS_REMOTE_SEARCH = serialize((array) $_POST['LM_AUTO_MAIN_ACCESS_GROUPS_REMOTE_SEARCH']);
COption::SetOptionString($sModuleId, 'LM_AUTO_MAIN_ACCESS_GROUPS_REMOTE_SEARCH', $LM_AUTO_MAIN_ACCESS_GROUPS_REMOTE_SEARCH);

// crosses
$LM_AUTO_MAIN_ACCESS_CROSSES_ENABLED = $_POST['LM_AUTO_MAIN_ACCESS_CROSSES_ENABLED'] == 'Y' ? 'Y' : 'N';
COption::SetOptionString($sModuleId, 'LM_AUTO_MAIN_ACCESS_CROSSES_ENABLED', $LM_AUTO_MAIN_ACCESS_CROSSES_ENABLED);

$LM_AUTO_MAIN_CROSSES_LOGIN = (string) $_POST['LM_AUTO_MAIN_CROSSES_LOGIN'];
if(strlen($LM_AUTO_MAIN_CROSSES_LOGIN) > 0) {
    COption::SetOptionString($sModuleId, 'LM_AUTO_MAIN_CROSSES_LOGIN', $LM_AUTO_MAIN_CROSSES_LOGIN);
}

$LM_AUTO_MAIN_CROSSES_PASSWORD = (string) $_POST['LM_AUTO_MAIN_CROSSES_PASSWORD'];
if(strlen($LM_AUTO_MAIN_CROSSES_PASSWORD) > 0) {
    COption::SetOptionString($sModuleId, 'LM_AUTO_MAIN_CROSSES_PASSWORD', $LM_AUTO_MAIN_CROSSES_PASSWORD);
}
