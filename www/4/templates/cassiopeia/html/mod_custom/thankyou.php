<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_custom
 *
 * @copyright   (C) 2009 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Uri\Uri;

$modId = 'mod-custom' . $module->id;

if ($params->get('backgroundimage'))
{
	/** @var Joomla\CMS\WebAsset\WebAssetManager $wa */
	$wa = Factory::getApplication()->getDocument()->getWebAssetManager();
	$wa->addInlineStyle('
#' . $modId . '{background-image: url("' . Uri::root(true) . '/' . HTMLHelper::_('cleanImageURL', $params->get('backgroundimage'))->url . '");}
', ['name' => $modId]);
}

?>

<div id="<?php echo $modId; ?>" class="mod-custom custom">
  <h3 class=" mb-4"><?php echo JText::_('J4LANDING_THANKYOU_H3'); ?></h3>
	<?php echo JText::_('J4LANDING_THANKYOU_DESC'); ?>
<p> </p>
<p><a class="btn btn-light" href="#"><?php echo JText::_('J4LANDING_THANKYOU_BUTTON'); ?></a></p>
</div>