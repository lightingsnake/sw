<?php /* Smarty version Smarty-3.1.14, created on 2014-04-07 14:55:26
         compiled from "/var/www/html/swm.com.co/laravel/public/sw/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6823639535342bc5e5ee447-61852367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eca9c802b35880a2193e255cceea72c9b1ba9a3f' => 
    array (
      0 => '/var/www/html/swm.com.co/laravel/public/sw/admin/themes/default/template/content.tpl',
      1 => 1395083864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6823639535342bc5e5ee447-61852367',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5342bc5e5f70e3_35061887',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5342bc5e5f70e3_35061887')) {function content_5342bc5e5f70e3_35061887($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>

<?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>
<?php }} ?>