<?php

/***************************************************************
 *  Copyright notice
 *
 *  Copyright © 2016 Dipl.-Ing. Joschi Kuphal <joschi@tollwerk.de>, tollwerk® GmbH (http://tollwerk.de)
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

// Include static TypoScript & constants
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'squeezr');

// Register the squeezr cache cleaning menu hook
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['additionalBackendItems']['cacheActions']['clearUpdateSqueezrCache'] = 'EXT:'.$_EXTKEY.'/Classes/Utility/Squeezr.php:Tollwerk\\Squeezr\\Utility\\Squeezr';
$GLOBALS['TYPO3_CONF_VARS']['BE']['AJAX']['squeezr::clearUpdateSqueezrCache'] = 'EXT:'.$_EXTKEY.'/Classes/Utility/Squeezr.php:Tollwerk\\Squeezr\\Utility\\Squeezr->updateCache';
