<?php

require_once 'bettermultipleregistration.civix.php';
// phpcs:disable
use CRM_Bettermultipleregistration_ExtensionUtil as E;
// phpcs:enable

function bettermultipleregistration_civicrm_buildForm($formName, &$form) {
  if ($formName === 'CRM_Event_Form_Registration_AdditionalParticipant') {
    CRM_Core_Resources::singleton()->addScript("CRM.$('#priceset').hide()");
  }
  if ($formName === 'CRM_Event_Form_Registration_Register' && $form->_values['event']['is_multiple_registrations']) {
    $form->removeElement('additional_participants');
    $form->add('text', 'additional_participants');
    CRM_Core_Resources::singleton()->addScriptFile('bettermultipleregistration', 'js/participantcalc.js');
  }
}

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function bettermultipleregistration_civicrm_config(&$config) {
  _bettermultipleregistration_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function bettermultipleregistration_civicrm_install() {
  _bettermultipleregistration_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function bettermultipleregistration_civicrm_enable() {
  _bettermultipleregistration_civix_civicrm_enable();
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
//function bettermultipleregistration_civicrm_preProcess($formName, &$form) {
//
//}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 */
//function bettermultipleregistration_civicrm_navigationMenu(&$menu) {
//  _bettermultipleregistration_civix_insert_navigation_menu($menu, 'Mailings', array(
//    'label' => E::ts('New subliminal message'),
//    'name' => 'mailing_subliminal_message',
//    'url' => 'civicrm/mailing/subliminal',
//    'permission' => 'access CiviMail',
//    'operator' => 'OR',
//    'separator' => 0,
//  ));
//  _bettermultipleregistration_civix_navigationMenu($menu);
//}
