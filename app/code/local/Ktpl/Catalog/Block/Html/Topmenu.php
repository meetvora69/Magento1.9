<?php
class Ktpl_Catalog_Block_Html_Topmenu extends Mage_Page_Block_Html_Topmenu
{
    public function loadMenuFromCache($_menu){
        $menu = Mage::app()->getCache()->load('left_menu_cache');
        if($menu === false){
            Mage::app()->getCache()->save(json_encode($_menu), 'left_menu_cache', array('menu_cache'), null);
            return $_menu;
        }
        return json_decode($menu);
    }
}
