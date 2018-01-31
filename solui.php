<?php

require_once 'solui.civix.php';

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function solui_civicrm_config(&$config) {
  _solui_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function solui_civicrm_xmlMenu(&$files) {
  _solui_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function solui_civicrm_install() {
  _solui_civix_civicrm_install();
}

function solui_civicrm_alterContent(  &$content, $context, $tplName, &$object ) {
  CRM_Core_Error::debug_var('object',get_class($object));
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_postInstall
 */
function solui_civicrm_postInstall() {
  _solui_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function solui_civicrm_uninstall() {
  _solui_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function solui_civicrm_enable() {
  _solui_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function solui_civicrm_disable() {
  _solui_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function solui_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _solui_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function solui_civicrm_managed(&$entities) {
  _solui_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function solui_civicrm_caseTypes(&$caseTypes) {
  _solui_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_angularModules
 */
function solui_civicrm_angularModules(&$angularModules) {
  _solui_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function solui_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _solui_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *
function solui_civicrm_preProcess($formName, &$form) {

} // */

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_navigationMenu
 *
function solui_civicrm_navigationMenu(&$menu) {
  _solui_civix_insert_navigation_menu($menu, NULL, array(
    'label' => ts('The Page', array('domain' => 'nl.schreeuwomleven.solui')),
    'name' => 'the_page',
    'url' => 'civicrm/the-page',
    'permission' => 'access CiviReport,access CiviContribute',
    'operator' => 'OR',
    'separator' => 0,
  ));
  _solui_civix_navigationMenu($menu);
} // */

function _solui_format_postal_code($postalcode) {
  $formatted =  preg_replace('/\s/', '', $postalcode);
  // now we are sure there is no space
  $formatted =  strtoupper($formatted);
  // now we are sure everything is upper case
  $formatted =  substr($formatted,0,4).' '.substr($formatted,4);
  // space added on the right place
  if(preg_match('/^[0-9]{4}\s[A-Z]{2}$/',$formatted)) {
    // only return valid codes, unvalid codes are untouched
    return $formatted;
  } else {
    return $postalcode;
  }
}

function _solui_format_first_name($initials) {
  $formatted =  strtoupper($initials);
  // now we are sure everything is upper case
  $formatted =  str_replace(' EN ', ' & ', $formatted);
  // Innitials of married couple
  $formatted =  preg_replace('/\s/', '', $formatted);
  // now we are sure there is no space
  $formatted =  str_replace('IJ.', '*', $formatted);
  // special case
  $formatted =  str_replace('.', '', $formatted);
  // now we are sure there are no dots
  $formatted =  implode('.', str_split($formatted)) . '.';
  // dots added to the right places
  $formatted =  str_replace('.&.', '. & ', $formatted);
  $formatted =  str_replace('*', 'IJ', $formatted);
  return $formatted;
}

function _solui_format_last_name($lastname) {
  return ucfirst($lastname);
}

/**
 *  1. Standardize the dutch postal codes - needed if the code is used for matching
 *  2. Standardize Initials (saved under first_name)
 *  3. Standardize Lastnam:w
 *
 * @param $op
 * @param $objectName
 * @param $id
 * @param $params
 */
function solui_civicrm_pre($op, $objectName, $id, &$params) {
  if ($op == 'edit' || $op == 'create') {
    if ($objectName == 'Address') {
      if (isset($params['country_id']) && $params['country_id'] == 1152 && !empty($params['postal_code'])) {
        // 1152 is the internal standard code for the Netherlands
        $params['postal_code']=_solui_format_postal_code($params['postal_code']);
      }
    } elseif ($objectName == 'Individual') {
      if (!empty($params['first_name'])) {
        $params['first_name']=_solui_format_first_name($params['first_name']);
      }
      if (!empty($params['last_name'])) {
        $params['last_name']=_solui_format_last_name($params['last_name']);
      }
      if (!empty($params['nick_name'])) {
        $params['nick_name']=_solui_format_last_name($params['nick_name']);
      }
    } elseif ($objectName == 'Email') {
      if (!empty($params['email'])) {
        $params['is_bulkmail']='1';
      }
    }
  }
}
