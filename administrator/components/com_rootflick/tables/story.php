<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_categories
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Category table
 *
 * @package     Joomla.Administrator
 * @subpackage  com_categories
 * @since       1.6
 */
class RootflickTableStory extends JTable
{	
	/**
	 * Constructor
	 *
	 * @since	1.5
	 */
	public function __construct(&$_db)
	{	
		parent::__construct('#__rootflick_stories', 'id', $_db);
		$date = JFactory::getDate();
		$this->publish_up = $date->toSql();
		$this->publish_down = $date->toSql();
	}
	/*public function delete($pk = null, $children = false)
	{
		return parent::delete($pk, $children);
	}*/
	
	public function bind($array, $ignore = array())
	{
		return parent::bind($array, $ignore);
	}
	
	public function store($updateNulls = false)
	{
		parent::store($updateNulls);
	}
}
