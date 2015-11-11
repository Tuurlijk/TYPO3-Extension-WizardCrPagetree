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
   'dependencies' => 'func',
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
   'autoload' => array(
      'psr-4' => array('MichielRoos\\WizardCrpagetree\\' => 'Classes'),
      'classmap' => array('Classes')
   ),
   'author' => 'Michiel Roos',
   'author_email' => 'extensions@donationbasedhosting.org',
   'author_company' => 'Donation Based Hosting',
   'CGLcompliance' => '',
   'CGLcompliance_note' => '',
   'constraints' => array(
      'depends' => array(
         'func' => '',
         'typo3' => '6.2.0-7.99.99',
         'php' => '5.3.0-0.0.0',
      ),
      'conflicts' => array(),
      'suggests' => array(),
   ),
   'suggests' => array(),
   '_md5_values_when_last_written' => 's:0:""',
);
