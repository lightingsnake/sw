<?php /* Smarty version Smarty-3.1.14, created on 2014-05-28 22:43:20
         compiled from "D:\xampp\htdocs\swm\sw\modules\dashtrends\views\templates\hook\dashboard_zone_two.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2964753864a68c2cbb5-02134887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0bf1b955459e0340623ffd8ab12997a7aa84ba6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\swm\\sw\\modules\\dashtrends\\views\\templates\\hook\\dashboard_zone_two.tpl',
      1 => 1400798054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2964753864a68c2cbb5-02134887',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'allow_push' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53864a68ca9bc7_57172810',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53864a68ca9bc7_57172810')) {function content_53864a68ca9bc7_57172810($_smarty_tpl) {?>
<div class="clearfix"></div>
<section id="dashtrends" class="panel widget <?php if ($_smarty_tpl->tpl_vars['allow_push']->value){?> allow_push<?php }?>">
	<header class="panel-heading">
		<i class="icon-bar-chart"></i> <?php echo smartyTranslate(array('s'=>'Dashboard','mod'=>'dashtrends'),$_smarty_tpl);?>

		<span class="panel-heading-action">
			<a class="list-toolbar-btn" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminDashboard');?>
&profitability_conf=1" title="configure">
				<i class="process-icon-configure"></i>
			</a>
			<a class="list-toolbar-btn" href="#"  onclick="refreshDashboard('dashtrends'); return false;"  title="refresh">
				<i class="process-icon-refresh"></i>
			</a>
		</span>
	</header>
	<div id="dashtrends_toolbar" class="row">
		<dl class="col-xs-4 col-lg-2 active" onclick="selectDashtrendsChart(this, 'sales');">
			<dt><?php echo smartyTranslate(array('s'=>'Sales','mod'=>'dashtrends'),$_smarty_tpl);?>
</dt>
			<dd class="data_value size_l"><span id="sales_score"></span></dd>
			<dd class="dash_trend"><span id="sales_score_trends"></span></dd>
		</dl>
		<dl class="col-xs-4 col-lg-2" onclick="selectDashtrendsChart(this, 'orders');">
			<dt><?php echo smartyTranslate(array('s'=>'Orders','mod'=>'dashtrends'),$_smarty_tpl);?>
</dt>
			<dd class="data_value size_l"><span id="orders_score"></span></dd>
			<dd class="dash_trend"><span id="orders_score_trends"></span></dd>
		</dl>
		<dl class="col-xs-4 col-lg-2" onclick="selectDashtrendsChart(this, 'average_cart_value');">
			<dt><?php echo smartyTranslate(array('s'=>'Cart Value','mod'=>'dashtrends'),$_smarty_tpl);?>
</dt>
			<dd class="data_value size_l"><span id="cart_value_score"></span></dd>
			<dd class="dash_trend"><span id="cart_value_score_trends"></span></dd>
		</dl>
		<dl class="col-xs-4 col-lg-2" onclick="selectDashtrendsChart(this, 'visits');">
			<dt><?php echo smartyTranslate(array('s'=>'Visits','mod'=>'dashtrends'),$_smarty_tpl);?>
</dt>
			<dd class="data_value size_l"><span id="visits_score"></span></dd>
			<dd class="dash_trend"><span id="visits_score_trends"></span></dd>
		</dl>
		<dl class="col-xs-4 col-lg-2" onclick="selectDashtrendsChart(this, 'conversion_rate');">
			<dt><?php echo smartyTranslate(array('s'=>'Conversion Rate','mod'=>'dashtrends'),$_smarty_tpl);?>
</dt>
			<dd class="data_value size_l"><span id="conversion_rate_score"></span></dd>
			<dd class="dash_trend"><span id="conversion_rate_score_trends"></span></dd>
		</dl>
		<dl class="col-xs-4 col-lg-2" onclick="selectDashtrendsChart(this, 'net_profits');">
			<dt><?php echo smartyTranslate(array('s'=>'Net Profit','mod'=>'dashtrends'),$_smarty_tpl);?>
</dt>
			<dd class="data_value size_l"><span id="net_profits_score"></span></dd>
			<dd class="dash_trend"><span id="net_profits_score_trends"></span></dd>
		</dl>
	</div>

	<div id="dash_trends_chart1" class='chart with-transitions'>
		<svg></svg>
	</div>

</section><?php }} ?>