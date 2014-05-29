<?php /* Smarty version Smarty-3.1.14, created on 2014-04-07 17:04:43
         compiled from "/var/www/html/swm.com.co/laravel/public/sw/panel/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18615435155342be8b0333b4-09768352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4f20edd7798cda77714da9a44e3e867977470c0' => 
    array (
      0 => '/var/www/html/swm.com.co/laravel/public/sw/panel/themes/default/template/content.tpl',
      1 => 1395083864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18615435155342be8b0333b4-09768352',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5342be8b03c415_05957354',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5342be8b03c415_05957354')) {function content_5342be8b03c415_05957354($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>

<?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>
<?php }} ?>