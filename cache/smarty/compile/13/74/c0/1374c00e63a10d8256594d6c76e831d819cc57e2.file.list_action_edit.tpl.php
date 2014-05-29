<?php /* Smarty version Smarty-3.1.14, created on 2014-04-07 17:10:46
         compiled from "/var/www/html/swm.com.co/laravel/public/sw/panel/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14003472195342bff664dd30-16260329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1374c00e63a10d8256594d6c76e831d819cc57e2' => 
    array (
      0 => '/var/www/html/swm.com.co/laravel/public/sw/panel/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1395083864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14003472195342bff664dd30-16260329',
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
  'unifunc' => 'content_5342bff66557f3_27610984',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5342bff66557f3_27610984')) {function content_5342bff66557f3_27610984($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>