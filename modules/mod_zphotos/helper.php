<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_weblinks
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JModelLegacy::addIncludePath(JPATH_SITE . '/components/com_zphotos/models', 'ZphotosModel');

/**
 * Helper for mod_weblinks
 *
 * @package     Joomla.Site
 * @subpackage  mod_weblinks
 * @since       1.5.0
 */
class ModZphotosHelper
{

	/**
	 * Method to get all the photos
	 *
	 * @param   mixed  &$params  The parameters set in the administrator backend
	 *
	 * @return  mixed   Null if no weblinks based on input parameters else an array containing all the weblinks.
	 *
	 * @since   1.5.0
	 **/
	public static function getList(&$params)
	{
		
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);
		
		$query->select('a.*, cat.title AS cat_title, cat.alias AS cat_alias');
		
		$query->from('#__zphotos AS a');
		$query->join('LEFT', '#__categories AS cat ON cat.id = a.catid');
		$query->where('a.state = 1');
		$query->order('RAND()');
		
		$db->setQuery($query);
		
		$photos = $db->loadObjectList();
		
		return $photos;
		
	}
	
	/**
	 * Method to get all the categories
	 *
	 * @param   mixed  &$params  The parameters set in the administrator backend
	 *
	 * @return  mixed   Null if no weblinks based on input parameters else an array containing all the weblinks.
	 *
	 * @since   1.5.0
	 **/
	public static function getCategories(&$params)
	{
		
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);
		
		$query->select('a.*');
		
		$query->from('#__categories AS a');
		$query->where('a.extension = '. $db->quote('com_zphotos') .' AND a.parent_id = ' . $db->quote($params->get('catid')) );
		
		$db->setQuery($query);
		
		$categories = $db->loadObjectList();
		
		return $categories;
		
	}
	
}
