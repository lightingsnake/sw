<?php /* Smarty version Smarty-3.1.14, created on 2014-04-07 14:55:27
         compiled from "/var/www/html/swm.com.co/laravel/public/sw/admin/themes/default/template/helpers/list/list_action_transferstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15598006375342bc5fc37257-06692628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a7e7f6400cf9132cd6aa1e67623df656f3b5391' => 
    array (
      0 => '/var/www/html/swm.com.co/laravel/public/sw/admin/themes/default/template/helpers/list/list_action_transferstock.tpl',
      1 => 1395083864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15598006375342bc5fc37257-06692628',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5342bc5fc4cff4_06568152',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5342bc5fc4cff4_06568152')) {function content_5342bc5fc4cff4_06568152($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<i class="icon-exchange"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>