<?php /* Smarty version Smarty-3.1.14, created on 2014-05-28 22:45:22
         compiled from "D:\xampp\htdocs\swm\sw\panel\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2086953864ae288ecf0-71624514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bc0a05af5a18b85453340321d05a8962ac0fbe2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\swm\\sw\\panel\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1400798737,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2086953864ae288ecf0-71624514',
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
  'unifunc' => 'content_53864ae28ae102_78195607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53864ae28ae102_78195607')) {function content_53864ae28ae102_78195607($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>