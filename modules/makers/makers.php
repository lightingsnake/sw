<?php
	if (!defined('_PS_VERSION_'))
	exit;

class Makers extends Module {
	public function __construct()
	{
		
		$this->name = 'makers';
	    $this->tab = 'front_office_features';
	    $this->version = 1.0;
	    $this->author = 'STUDIOWEB & MARKETING | Andrés Aguilar';
	    $this->need_instance = 0;
	 
	    parent::__construct();
	 
	    $this->displayName = $this->l( 'Carrusel de marcas' );
	    $this->description = $this->l( 'Muestra un carrusel con las marcas.' );
	}

	public function install()
	{
		if(parent::install() == false OR !$this->registerHook('make'))
	    	return false;
	    return true;
	}

	public function hookMake()
	{
		global $smarty;
		$makers = Manufacturer::getManufacturers();

		$smarty->assign('makers', $makers);
		return $this->display(__FILE__, 'makers.tpl');
	}
}

?>