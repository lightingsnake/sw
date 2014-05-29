<?php /* Smarty version Smarty-3.1.14, created on 2014-04-07 14:55:30
         compiled from "/var/www/html/swm.com.co/laravel/public/sw/admin/themes/default/template/helpers/tree/tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4235739385342bc62950ec4-20517855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9030a0afc51afef655f8583816fe825979e4dc4e' => 
    array (
      0 => '/var/www/html/swm.com.co/laravel/public/sw/admin/themes/default/template/helpers/tree/tree_node_folder.tpl',
      1 => 1395083864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4235739385342bc62950ec4-20517855',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5342bc629684b8_39120897',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5342bc629684b8_39120897')) {function content_5342bc629684b8_39120897($_smarty_tpl) {?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler "><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
	<ul class="tree">
		<?php echo $_smarty_tpl->tpl_vars['children']->value;?>

	</ul>
</li><?php }} ?>