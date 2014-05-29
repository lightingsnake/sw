<?php /* Smarty version Smarty-3.1.14, created on 2014-05-28 01:23:57
         compiled from "D:\xampp\htdocs\swm\sw\panel\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2163353851e8d6afca0-31913293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '310b49a6f20afc579c75fca904285479ad993337' => 
    array (
      0 => 'D:\\xampp\\htdocs\\swm\\sw\\panel\\themes\\default\\template\\content.tpl',
      1 => 1400798513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2163353851e8d6afca0-31913293',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53851e8d6f2336_36784520',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53851e8d6f2336_36784520')) {function content_53851e8d6f2336_36784520($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>

<?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>
<?php }} ?>