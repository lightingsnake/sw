<?php
	/*Modulo del filtro*/
	if (!defined('_PS_VERSION_'))
	exit;


class Footercmstwo extends Module {
	public function __construct()
	{
		
		$this->name = 'footercmstwo';
	    $this->tab = 'front_office_features';
	    $this->version = 1.0;
	    $this->author = 'STUDIOWEB & MARKETING | Andrés Aguilar';
	    $this->need_instance = 0;
	 
	    parent::__construct();
	 
	    $this->displayName = $this->l( 'CMS del Pie 2' );
	    $this->description = $this->l( 'segundo CMS usado para el footer.' );
	}

	public function install()
	{
		if(parent::install() == false OR !$this->registerHook('footer'))
	    	return false;
	    return true;
	}

	/*public function uninstall()
	{
		if ( !parent::uninstall() )
   			Db::getInstance()->Execute( 'DELETE FROM `' . _DB_PREFIX_ . 'welcome' );
  		parent::uninstall();
	}*/

	public function hookFooter()
	{
		global $smarty;
		$welcome = new CMS(7);
		if(is_null($welcome->content[1]))
			return;
		$smarty->assign('cms', $welcome->content[1]);
		return $this->display(__FILE__, 'footercmstwo.tpl');
	}
}

?>