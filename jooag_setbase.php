<?php
/**
 * @package 	JooAg Setbase
 * @version 	3.x.0 Beta
 * @for 	Joomla 3.3+ 
 * @author 	Joomla Agentur - http://www.joomla-agentur.de
 * @copyright 	Copyright (c) 2009 - 2015 Joomla-Agentur All rights reserved.
 * @license 	GNU General Public License version 2 or later;
 * @description 
 */

defined('_JEXEC') or die;

class plgSystemJooag_setbase extends JPlugin {
	public function onBeforeRender() {
		$doc = JFactory::getDocument();
		$doc->setBase(htmlspecialchars($this->params->get('url')));
    }
}