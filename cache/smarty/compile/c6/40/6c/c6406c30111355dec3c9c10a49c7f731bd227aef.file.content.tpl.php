<?php /* Smarty version Smarty-3.1.14, created on 2014-05-28 22:45:22
         compiled from "D:\xampp\htdocs\swm\sw\panel\themes\default\template\controllers\cms_content\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3044053864ae29afe33-48380567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6406c30111355dec3c9c10a49c7f731bd227aef' => 
    array (
      0 => 'D:\\xampp\\htdocs\\swm\\sw\\panel\\themes\\default\\template\\controllers\\cms_content\\content.tpl',
      1 => 1400798552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3044053864ae29afe33-48380567',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_breadcrumb' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53864ae29f24c0_28865688',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53864ae29f24c0_28865688')) {function content_53864ae29f24c0_28865688($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)){?>
	<ul class="breadcrumb cat_bar">
		<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</ul>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }} ?>