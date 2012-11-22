<?php
/**
 * BIGACE - a PHP and MySQL based Web CMS.
 * Copyright (C) Kevin Papst.
 *
 * BIGACE is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * 
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @author Kevin Papst 
 * @copyright Copyright (C) Kevin Papst
 * @version $Id: function.import.php 175 2011-03-25 14:27:34Z kevin $
 * @package Bigace_Smarty
 * @subpackage Function
 */

/**
 * Imports a class.
 * 
 * Parameter:
 * - class	= the full qualified classname to import (like classes.item.Item)    
 */
function smarty_function_import($params, &$smarty)
{	
	if(!isset($params['class'])) {
		trigger_error("is_leaf: neither 'item' not 'id' attribute is set");
		return;
	}
	import($params['class']);
}
