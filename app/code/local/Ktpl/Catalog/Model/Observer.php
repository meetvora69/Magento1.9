<?php
class Ktpl_Catalog_Model_Observer
{
	public function cleanCacheType(Varien_Event_Observer $observer)
	{
	   if ($observer->getData('type') == "menu_loading"){
	       Mage::app()->getCache()->clean('all', array('mage_cache'));
	   }
	}
}
