<?php
/*------------------------------------------------------------------------
# mod_responsive_gads  - Responsive Adsense Module by Alikonweb.it
# ------------------------------------------------------------------------
# author    Alikon http://www.alikonweb.it
# Copyright (C) 2013 -  Alikonweb.it . All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites:  http://www.alikonweb.it
#            http://www.joomladdons.eu
# version : 0.1
-------------------------------------------------------------------------*/

// no direct access
defined('_JEXEC') or die('Restricted access');
//Parameters
$doc 					= JFactory::getDocument();
$uniqueid 				= $module->id;
$ad_publisher_id				= $params->get ('ad_publisher_id');
$adslot_leaderboard 				= $params->get ('adslot_leaderboard');
$adslot_banner 	      			= $params->get ('adslot_banner');
$adslot_large_rectangle  		= $params->get ('adslot_large_rectangle');
$adslot_medium_rectangle 		= $params->get ('adslot_medium_rectangle');
$adslot_square 				      = $params->get ('adslot_square');
$adslot_link_unit 			   	= $params->get ('adslot_link_unit');
$adtest 			  = $params->get ('google_adtest', true);
$width					= $params->get ('width',300);
$height					= $params->get ('height',225);
 
 
require(JModuleHelper::getLayoutPath('mod_responsive_gads'));