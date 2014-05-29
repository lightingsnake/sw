<?php /* Smarty version Smarty-3.1.14, created on 2014-05-28 01:13:23
         compiled from "D:\xampp\htdocs\swm\sw\panel\themes\default\template\helpers\kpi\row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1983953851c13b71952-51661691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e95a449eb7c41ba964ec47877db5e24912ed53f0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\swm\\sw\\panel\\themes\\default\\template\\helpers\\kpi\\row.tpl',
      1 => 1400798732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1983953851c13b71952-51661691',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'kpis' => 0,
    'kpi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53851c13ce89a6_00269938',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53851c13ce89a6_00269938')) {function content_53851c13ce89a6_00269938($_smarty_tpl) {?>
<div class="panel kpi-container">
	<div class="row">
		<?php  $_smarty_tpl->tpl_vars['kpi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kpi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kpis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kpi']->key => $_smarty_tpl->tpl_vars['kpi']->value){
$_smarty_tpl->tpl_vars['kpi']->_loop = true;
?>
		<div class="col-sm-6 col-lg-3">
			<?php echo $_smarty_tpl->tpl_vars['kpi']->value;?>

		</div>			
		<?php } ?>
	</div>
</div><?php }} ?>