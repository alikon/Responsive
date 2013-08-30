<?php

/**
 * System Article Responsive preview plugin
 * Embedd a responsive preview on Joomla! article
 * 
 * @author:  Alikon
 * @version:  1.0.0
 * @release:  11/08/2013 21.50
 * @package:  Alikonweb.responsive 4 Joomla
 * @copyright: (C) 2007-2013 Alikonweb.it
 * @license:  http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link:     http://www.alikonweb.it
 *
 *
 *
 * */
// no direct access
defined('_JEXEC') or die;
/**
 * Add a preview button in article edit form
 */
class plgSystemArticle_responsive_preview extends JPlugin
{
	function onContentPrepareForm($form, $data)
	{
    	if (JFactory::getApplication()->isAdmin()) {
		 	   //$this->loadLanguage('plg_system_article_responsive_preview');
		    if ($form->getName() == 'com_content.article' && !empty($data->id)) {;
			    $itemid = $this->params->get('itemid', 0);
			    $bar = JToolBar::getInstance('toolbar');
			    $bar->appendButton('Popup', 'preview', 'Responsive preview', '../index.php?option=com_content&view=mobile&tmpl=component&id='.$data->id, 1024, 768);
		    }		
		  }
		
	}
}
