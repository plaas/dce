<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012-2013 Armin Ruediger Vieweg <armin@v.ieweg.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * DCE Module Controller
 * Provides the backend DCE module, for faster and easier access to DCEs.
 *
 * @package dce
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Tx_Dce_Controller_DceModuleController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * Index Action
	 * @return void
	 */
	public function indexAction() {

	}

	/**
	 * DcePreviewReturnPage Action
	 * @return void
	 */
	public function dcePreviewReturnPageAction() {
		$this->flashMessageContainer->flush();
		self::removePreviewRecords();
	}

	/**
	 * Removes all dce preview records
	 * @static
	 * @return void
	 */
	static public function removePreviewRecords() {
		require_once(t3lib_extMgm::extPath('dce') . 'Classes/UserFunction/class.tx_dce_dcePreviewField.php');
		$GLOBALS['TYPO3_DB']->exec_DELETEquery('tt_content', 'pid = ' . tx_dce_dcePreviewField::DCE_PREVIEW_PID . ' AND CType LIKE "dce_dceuid%"');
	}

}

?>