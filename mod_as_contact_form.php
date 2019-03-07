<?php

/*******************************************************************************************/
/*
/*        Web: http://www.asdesigning.com
/*        Web: http://www.astemplates.com
/*        License: GNU General Public License
/*
/*******************************************************************************************/

defined('_JEXEC') or die;

require_once('recaptchalib.php');

require_once(__DIR__ . '/helper.php');

$document = JFactory::getDocument();
if( $params->get('loadstyles')==1): 
$document->addStylesheet(JURI::base(true).'/modules/mod_as_contact_form/css/style.css');
$document->addStylesheet(JURI::base(true).'/modules/mod_as_contact_form/css/social-buttons.css');
 endif; 
JHtml::_('jquery.framework');
	 if( $params->get('form_m_req')==1): 
$document->addScript(JURI::base(true) . '/modules/mod_as_contact_form/js/jquery.validate.min.js');
$document->addScript(JURI::base(true) . '/modules/mod_as_contact_form/js/additional-methods.min.js');
$document->addScript(JURI::base(true) . '/modules/mod_as_contact_form/js/ajaxcaptcha.js');
$document->addScript(JURI::base(true) . '/modules/mod_as_contact_form/js/ajaxsendmail.js');
endif; 

require JModuleHelper::getLayoutPath('mod_as_contact_form', $params->get('layout', 'default'));


if( $params->get('renderbox')==1):

$document->addStylesheet(JURI::base(true).'/modules/mod_as_contact_form/css/modal.css');

endif; 


?>