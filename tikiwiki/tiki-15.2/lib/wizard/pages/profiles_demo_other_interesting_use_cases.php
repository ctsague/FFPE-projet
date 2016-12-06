<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: profiles_demo_other_interesting_use_cases.php 57942 2016-03-17 19:25:28Z jyhem $

require_once('lib/wizard/wizard.php');

/**
 * Show the profiles choices
 */
class ProfilesWizardDemoOtherInterestingUseCases extends Wizard
{
    function pageTitle ()
    {
        return tra('Demo of Other Interesting Use Cases');
    }
	function isEditable ()
	{
		return false;
	}
	
	function onSetupPage ($homepageUrl) 
	{
		global $prefs, $TWV;
		$smarty = TikiLib::lib('smarty');
		// Run the parent first
		parent::onSetupPage($homepageUrl);

		$smarty->assign('tikiMajorVersion', substr($TWV->version, 0, 2));
		
		return true;		
	}

	function getTemplate()
	{
		$wizardTemplate = 'wizard/profiles_demo_other_interesting_use_cases.tpl';
		return $wizardTemplate;
	}

	function onContinue ($homepageUrl) 
	{
		// Run the parent first
		parent::onContinue($homepageUrl);
	}
}
