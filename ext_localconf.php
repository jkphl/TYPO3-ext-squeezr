<?php

/***************************************************************
 *  Copyright notice
 *
 *  Copyright © 2013 Dipl.-Ing. Joschi Kuphal <joschi@tollwerk.de>, tollwerk® GmbH (http://tollwerk.de)
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  A copy is found in the textfile GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

// Register hook for squeezr JavaScript integration
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['checkDataSubmission'][] = 'EXT:'.$_EXTKEY.'/Classes/Utility/Squeezr.php:Tollwerk\\Squeezr\\Utility\\Squeezr';

// Provide global access to the extension configuration
$GLOBALS['TYPO3_CONF_VARS']['EXT']['extParams'][$_EXTKEY] = unserialize($_EXTCONF);

if (TYPO3_MODE=='BE')    {

	// Setting up scripts that can be run from the cli_dispatch.phpsh script.
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['cliKeys']['squeezr'] = array('EXT:'.$_EXTKEY.'/squeezr_cli.php', '_CLI_squeezr');
}

?>