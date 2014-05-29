<?php /* Smarty version Smarty-3.1.14, created on 2014-04-07 14:55:44
         compiled from "/var/www/html/swm.com.co/laravel/public/sw/admin/themes/default/template/controllers/products/multishop/checkbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8130240085342bc70ce84d0-11143958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2818a94b800b6b3f162f23fff3929cae56714077' => 
    array (
      0 => '/var/www/html/swm.com.co/laravel/public/sw/admin/themes/default/template/controllers/products/multishop/checkbox.tpl',
      1 => 1395083864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8130240085342bc70ce84d0-11143958',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_multishop_checkboxes' => 0,
    'multilang' => 0,
    'only_checkbox' => 0,
    'languages' => 0,
    'field' => 0,
    'language' => 0,
    'type' => 0,
    'multishop_check' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5342bc710c1013_83860642',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5342bc710c1013_83860642')) {function content_5342bc710c1013_83860642($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['display_multishop_checkboxes']->value)&&$_smarty_tpl->tpl_vars['display_multishop_checkboxes']->value){?>
	<?php if (isset($_smarty_tpl->tpl_vars['multilang']->value)&&$_smarty_tpl->tpl_vars['multilang']->value){?>
		<?php if (isset($_smarty_tpl->tpl_vars['only_checkbox']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
				<input type="checkbox" name="multishop_check[<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
]" value="1" onclick="ProductMultishop.checkField(this.checked, '<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
', '<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
')" <?php if (!empty($_smarty_tpl->tpl_vars['multishop_check']->value[$_smarty_tpl->tpl_vars['field']->value][$_smarty_tpl->tpl_vars['language']->value['id_lang']])){?>checked="checked"<?php }?> />
			<?php } ?>
		<?php }else{ ?>
			<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
				<input style="<?php if (!$_smarty_tpl->tpl_vars['language']->value['is_default']){?>display: none;<?php }?>" class="multishop_lang_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
 lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
 translatable-field" type="checkbox" name="multishop_check[<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
]" value="1" onclick="ProductMultishop.checkField(this.checked, '<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
','<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
')"
				<?php if (!empty($_smarty_tpl->tpl_vars['multishop_check']->value[$_smarty_tpl->tpl_vars['field']->value][$_smarty_tpl->tpl_vars['language']->value['id_lang']])){?>checked="checked"<?php }?> />
			<?php } ?>
		<?php }?>
	<?php }else{ ?>
		<input type="checkbox" name="multishop_check[<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
]" value="1" onclick="ProductMultishop.checkField(this.checked, '<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
')" <?php if (!empty($_smarty_tpl->tpl_vars['multishop_check']->value[$_smarty_tpl->tpl_vars['field']->value])){?>checked="checked"<?php }?> />
	<?php }?>
<?php }?><?php }} ?>