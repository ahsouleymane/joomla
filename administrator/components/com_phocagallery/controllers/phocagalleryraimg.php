<?php
/*
 * @package		Joomla.Framework
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 *
 * @component Phoca Component
 * @copyright Copyright (C) Jan Pavelka www.phoca.cz
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License version 2 or later;
 */


defined('_JEXEC') or die;
use Joomla\CMS\MVC\Controller\AdminController;
use Joomla\CMS\Factory;
jimport('joomla.application.component.controlleradmin');


class PhocaGalleryCpControllerPhocaGalleryRaImg extends AdminController
{
	protected	$option 		= 'com_phocagallery';

	public function getModel($name = 'PhocaGalleryRaImg', $prefix = 'PhocaGalleryCpModel', $config = array())
	{
		$model = parent::getModel($name, $prefix, array('ignore_request' => true));
		return $model;
	}

	public function saveOrderAjax() {
		$pks = $this->input->post->get('cid', array(), 'array');
		$order = $this->input->post->get('order', array(), 'array');
		\Joomla\Utilities\ArrayHelper::toInteger($pks);
		\Joomla\Utilities\ArrayHelper::toInteger($order);
		$model = $this->getModel();
		$return = $model->saveorder($pks, $order);
		if ($return) { echo "1";}
		Factory::getApplication()->close();
	}
}
?>
