<?php
	/*Modulo del filtro*/
	if (!defined('_PS_VERSION_'))
	exit;


class Footercmsone extends Module {
	public function __construct()
	{
		
		$this->name = 'footercmsone';
	    $this->tab = 'front_office_features';
	    $this->version = 1.0;
	    $this->author = 'STUDIOWEB & MARKETING | Andrés Aguilar';
	    $this->need_instance = 0;
	 
	    parent::__construct();
	 
	    $this->displayName = $this->l( 'CMS del Pie 1' );
	    $this->description = $this->l( 'Primer CMS usado para el footer.' );
	}

	public function install()
	{
		if(parent::install() == false OR !$this->registerHook('footer'))
	    	return false;
	    return true;
	}

	public function hookFooter()
	{
		global $smarty;
		$welcome = new CMS(6);
		if(is_null($welcome->content[1]))
			return;
		$smarty->assign('cms', $welcome->content[1]);
		return $this->display(__FILE__, 'footercmsone.tpl');
	}
}

?>