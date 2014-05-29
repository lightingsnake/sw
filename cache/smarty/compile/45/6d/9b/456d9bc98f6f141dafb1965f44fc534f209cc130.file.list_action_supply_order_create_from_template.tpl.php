<?php /* Smarty version Smarty-3.1.14, created on 2014-04-07 14:55:27
         compiled from "/var/www/html/swm.com.co/laravel/public/sw/admin/themes/default/template/helpers/list/list_action_supply_order_create_from_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16593315915342bc5fca60e3-83538539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '456d9bc98f6f141dafb1965f44fc534f209cc130' => 
    array (
      0 => '/var/www/html/swm.com.co/laravel/public/sw/admin/themes/default/template/helpers/list/list_action_supply_order_create_from_template.tpl',
      1 => 1395083864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16593315915342bc5fca60e3-83538539',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5342bc5fcafa93_35403784',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5342bc5fcafa93_35403784')) {function content_5342bc5fcafa93_35403784($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
');" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="">
	<i class="icon-copy"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>