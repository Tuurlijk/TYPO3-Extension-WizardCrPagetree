<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "wizard_crpagetree".
 *
 * Auto generated 15-09-2014 13:36
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Web>Func, Wizards, Create page tree',
	'description' => 'Wizard that will create a page tree for you. Feed it with a space indented tree structure of the desired pages and the pages will be created for you.',
	'category' => 'module',
	'shy' => 0,
	'version' => '1.0.3',
	'dependencies' => 'func_wizards',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Michiel Roos',
	'author_email' => 'extensions@donationbasedhosting.org',
	'author_company' => 'Donation Based Hosting',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'func_wizards' => '',
			'typo3' => '4.5.0-6.2.99',
			'php' => '5.3.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
	'_md5_values_when_last_written' => 'a:11:{s:9:"Changelog";s:4:"e51a";s:16:"ext_autoload.php";s:4:"79d4";s:12:"ext_icon.gif";s:4:"f1c4";s:14:"ext_tables.php";s:4:"4821";s:9:"Readme.md";s:4:"f3e0";s:34:"Classes/Webfunc/CreatePageTree.php";s:4:"aa6e";s:40:"Resources/Private/Language/locallang.xml";s:4:"e986";s:59:"Resources/Private/Language/ContextSensitiveHelp/default.xml";s:4:"72df";s:40:"Resources/Public/Images/crpagetree_1.png";s:4:"b7de";s:40:"Resources/Public/Images/crpagetree_2.png";s:4:"095c";s:14:"doc/manual.sxw";s:4:"4f48";}',
);

?>